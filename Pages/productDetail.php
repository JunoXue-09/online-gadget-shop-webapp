<?php
session_start();

// Create new cart if empty
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

if (!isset($_GET['id'])) {
    header("Location: index.php");
    exit();
}

$id = (int) $_GET['id']; // pick the product id

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uecs2094_assignment";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM product WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows == 0) {
    echo "<script>alert('Product not found.'); window.location.href = 'index.php';</script>";
    exit();
}

$product = $result->fetch_assoc();

if (isset($_POST['addToCart'])) {
    $quantity = (int) $_POST['quantity'];
    
    // Check stock availability 
    if ($quantity > $product['stock'] || $quantity < 1) {
        echo "<script>alert('Requested quantity is not available in stock.');</script>";
    } else {
        $found = false;

        foreach ($_SESSION['cart'] as $index => $item) {
            if ($item['productId'] == $product['id']) {
                // Check if total quantity in cart + new quantity exceeds available stock
                if (($_SESSION['cart'][$index]['quantity'] + $quantity) > $product['stock']) {
                    echo "<script>alert('Cannot add more than available stock.');</script>";
                    $found = true; // prevent adding
                    break;
                }
                $_SESSION['cart'][$index]['quantity'] += $quantity;
                $found = true;
                break;
            }
        }

        if (!$found) {
            $_SESSION['cart'][] = array(
                "productId" => $product['id'],
                "productName" => $product['productName'],
                "productPrice" => $product['productPrice'],
                "quantity" => $quantity,
                "productImage" => $product['productImage']
            );
        }

        // Only redirect if no errors were triggered
        if (!($found && isset($quantity) && ($item['productId'] ?? 0) == $product['id'] && ($_SESSION['cart'][$index]['quantity'] ?? 0) > $product['stock'])) {
            header("Location: shoppingCart.php");
            exit();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($product['productName']); ?> - CeX Gadget Shop</title>
    <link rel="stylesheet" href="../style.css">
</head>

<?php include('../includes/pageHeader.php'); ?>

<body>
    <div class="detail-container">
        
        <!-- Breadcrumb navigation -->
        <?php
        $categoryMap = [
            'Phones' => 'phoneList.php',
            'Computing' => 'computerList.php',
            'Gaming' => 'gamingList.php',
            'Accessories' => 'accessoriesList.php'
        ];
        $categoryLink = isset($categoryMap[$product['category']]) ? $categoryMap[$product['category']] : 'index.php';
        ?>
        <div class="detail-breadcrumb">
            <a href="index.php">Home</a> &gt; 
            <a href="<?php echo $categoryLink; ?>"><?php echo htmlspecialchars($product['category']); ?></a> &gt; 
            <span><?php echo htmlspecialchars($product['productName']); ?></span>
        </div>

        <!-- Product Detail Card -->
        <div class="detail-card">
            
            <!-- Left: Product Image -->
            <div class="detail-image-box">
                <img src="<?php echo htmlspecialchars($product['productImage']); ?>" alt="<?php echo htmlspecialchars($product['productName']); ?>">
            </div>

            <!-- Right: Product Info -->
            <div class="detail-info-box">
                <span class="detail-category-badge"><?php echo htmlspecialchars($product['category']); ?></span>
                
                <h1 class="detail-title"><?php echo htmlspecialchars($product['productName']); ?></h1>
                
                <div class="detail-rating">
                    <span style="color: #f59e0b; letter-spacing: 1px;">★★★★★</span>
                    <span style="font-weight: 600; color: #4b5563;">4.9</span>
                    <span style="color: #9ca3af;">(250+ Reviews)</span>
                </div>

                <div class="detail-price">
                    RM <?php echo number_format($product['productPrice'], 2); ?>
                </div>

                <div class="detail-stock-badge">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                    <span>In Stock (<?php echo $product['stock']; ?> units available)</span>
                </div>

                <div class="detail-desc-box">
                    <p><strong>Description:</strong> <?php echo htmlspecialchars($product['productDescription']); ?></p>
                </div>

                <form method="post" class="detail-form">
                    <div class="detail-qty-group">
                        <label for="quantity">Quantity:</label>
                        <div class="quantity-control">
                            <button type="button" onclick="adjustDetailQty(-1)">−</button>
                            <input type="number" id="quantity" name="quantity" value="1" min="1" max="<?php echo $product['stock']; ?>" readonly>
                            <button type="button" onclick="adjustDetailQty(1)">+</button>
                        </div>
                    </div>

                    <div class="detail-actions">
                        <button type="submit" name="addToCart" class="btn-add-cart">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
                            Add to Basket
                        </button>
                        
                        <a href="index.php" class="btn-back-home">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z"/></svg>
                            Continue Shopping
                        </a>
                    </div>
                </form>

                <div class="detail-features">
                    <div class="feature-item">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M20 8h-3V4H3c-1.1 0-2 .9-2 2v11h2c0 1.66 1.34 3 3 3s3-1.34 3-3h6c0 1.66 1.34 3 3 3s3-1.34 3-3h2v-5l-3-4zM6 18.5c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zm13.5-9l1.96 2.5H17V9.5h2.5zm-1.5 9c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5z"/></svg>
                        <span>Free Delivery</span>
                    </div>
                    <div class="feature-item">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
                        <span>24-Month Warranty</span>
                    </div>
                    <div class="feature-item">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 6v3l4-4-4-4v3c-4.42 0-8 3.58-8 8 0 1.57.46 3.03 1.24 4.26L6.7 14.8c-.45-.83-.7-1.79-.7-2.8 0-3.31 2.69-6 6-6zm6.76 1.74L17.3 9.2c.44.84.7 1.79.7 2.8 0 3.31-2.69 6-6 6v-3l-4 4 4 4v-3c4.42 0 8-3.58 8-8 0-1.57-.46-3.03-1.24-4.26z"/></svg>
                        <span>14-Day Returns</span>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script>
    function adjustDetailQty(amount) {
        const qtyInput = document.getElementById('quantity');
        let currentVal = parseInt(qtyInput.value) || 1;
        const maxVal = parseInt(qtyInput.getAttribute('max')) || 99;
        
        currentVal += amount;
        if (currentVal < 1) currentVal = 1;
        if (currentVal > maxVal) currentVal = maxVal;
        
        qtyInput.value = currentVal;
    }
    </script>
</body>

<?php include('../includes/pageFooter.php'); ?>

</html>
<?php $conn->close(); ?>