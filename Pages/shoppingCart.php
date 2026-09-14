<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // Redirect unauthenticated users to the login page
    header("Location: login.php");
    exit();
}

// Create cart if it does not exist
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

// Database connection (kept if needed for other scripts or future checks, though no stock updates occur here)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uecs2094_assignment";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Remove item (No database stock modifications performed here)
if (isset($_GET['remove'])) {
    $index = (int) $_GET['remove'];

    if (isset($_SESSION['cart'][$index])) {
        unset($_SESSION['cart'][$index]);
        $_SESSION['cart'] = array_values($_SESSION['cart']);
    }

    header("Location: shoppingCart.php");
    exit();
}

// Update quantities (+ / -) in the session only without querying or modifying product stock
if (isset($_POST['update'])) {
    foreach ($_POST['quantity'] as $index => $qty) {
        if (!isset($_SESSION['cart'][$index])) {
            continue;
        }

        $newQuantity = (int) $qty;

        if ($newQuantity < 1) {
            continue;
        }

        // Fetch product ID for the item being updated
        $productId = $_SESSION['cart'][$index]['productId'] ?? null;

        if ($productId) {
            $stmt = $conn->prepare("SELECT stock FROM product WHERE id = ?");
            $stmt->bind_param("i", $productId);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($row = $result->fetch_assoc()) {
                $availableStock = (int) $row['stock'];

                // Check stock availability (only validation, no database update here)
                if ($newQuantity > $availableStock || $newQuantity < 1) {
                    echo "<script>alert('Requested quantity is not available in stock.');</script>";
                } else {
                    $found = false;

                    foreach ($_SESSION['cart'] as $cartIndex => $cartItem) {
                        if ($cartItem['productId'] == $productId) {
                            // Since this is an explicit update to a set quantity, we validate against $availableStock directly
                            if ($newQuantity > $availableStock) {
                                echo "<script>alert('Cannot add more than available stock.');</script>";
                                $found = true;
                                break;
                            }
                            $_SESSION['cart'][$index]['quantity'] = $newQuantity;
                            $found = true;
                            break;
                        }
                    }
                }
            }
            $stmt->close();
        }
    }
    header("Location: shoppingCart.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Basket - CeX Gadget Shop</title>
    <link rel="stylesheet" href="../style.css">
</head>

<?php include('../includes/pageHeader.php'); ?>

<body>
    <div class="cart-page-container">
        <h1 class="page-title">My Basket</h1>

        <?php if (empty($_SESSION['cart'])): ?>
            <!-- Empty Cart State -->
            <div class="empty-cart-card">
                <svg viewBox="0 0 24 24"><path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
                <h2>Your Basket is Currently Empty</h2>
                <p>Looks like you haven't added any gadgets or gaming items to your basket yet.</p>
                <a href="index.php" class="btn-confirm-payment" style="display: inline-block; max-width: 250px; text-decoration: none; border-radius: 25px;">
                    Start Shopping Now
                </a>
            </div>

        <?php else: ?>
            
            <?php
            $total = 0;
            $totalItemsCount = 0;
            foreach ($_SESSION['cart'] as $item) {
                $total += ($item['productPrice'] * $item['quantity']);
                $totalItemsCount += $item['quantity'];
            }
            ?>

            <div class="cart-layout">
                
                <!-- Left: Items Table Card -->
                <div class="cart-items-col">
                    <div class="cart-card">
                        <form method="post" id="cartForm">
                            <table class="cart-table">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Subtotal</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($_SESSION['cart'] as $index => $item): 
                                        $itemSubtotal = $item['productPrice'] * $item['quantity'];
                                    ?>
                                    <tr>
                                        <!-- Product info -->
                                        <td>
                                            <div class="cart-product-cell">
                                                <img src="<?php echo htmlspecialchars($item['productImage']); ?>" alt="<?php echo htmlspecialchars($item['productName']); ?>">
                                                <div>
                                                    <span class="product-name"><?php echo htmlspecialchars($item['productName']); ?></span>
                                                </div>
                                            </div>
                                        </td>

                                        <!-- Unit Price -->
                                        <td class="cart-price-cell">
                                            RM <?php echo number_format($item['productPrice'], 2); ?>
                                            <input type="hidden" id="price-<?php echo $index; ?>" value="<?php echo $item['productPrice']; ?>">
                                        </td>

                                        <!-- Quantity Controls -->
                                        <td>
                                            <div class="quantity-control">
                                                <button type="button" onclick="changeQuantity(<?php echo $index; ?>, -1)">−</button>
                                                <input
                                                    type="number"
                                                    id="quantity-<?php echo $index; ?>"
                                                    name="quantity[<?php echo $index; ?>]"
                                                    value="<?php echo $item['quantity']; ?>"
                                                    min="1"
                                                    onchange="updateTotal(<?php echo $index; ?>)"
                                                    readonly
                                                >
                                                <button type="button" onclick="changeQuantity(<?php echo $index; ?>, 1)">+</button>
                                            </div>
                                        </td>

                                        <!-- Subtotal -->
                                        <td class="cart-subtotal-cell">
                                            RM <span id="subtotal-<?php echo $index; ?>"><?php echo number_format($itemSubtotal, 2); ?></span>
                                        </td>

                                        <!-- Remove Action -->
                                        <td>
                                            <a href="shoppingCart.php?remove=<?php echo $index; ?>" class="btn-remove">
                                                <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM19 4h-3.5l-1-1h-5l-1 1H5v2h14V4z"/></svg>
                                                Remove
                                            </a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>

                <!-- Right: Summary Card -->
                <div class="cart-summary-col">
                    <div class="cart-card">
                        <h3 style="font-size: 1.25rem; color: #111827; margin-bottom: 20px; padding-bottom: 10px; border-bottom: 2px solid #f3f4f6;">
                            Basket Summary
                        </h3>

                        <div class="summary-totals" style="border-top: none; padding-top: 0;">
                            <div class="summary-row">
                                <span>Total Items</span>
                                <span><?php echo $totalItemsCount; ?> items</span>
                            </div>
                            <div class="summary-row">
                                <span>Subtotal</span>
                                <span>RM <span id="summary-subtotal"><?php echo number_format($total, 2); ?></span></span>
                            </div>
                            <div class="summary-row">
                                <span>Estimated Delivery</span>
                                <span style="color: #10b981; font-weight: 600;">FREE</span>
                            </div>
                            <div class="summary-row total-row">
                                <span>Grand Total</span>
                                <span>RM <span id="cart-total"><?php echo number_format($total, 2); ?></span></span>
                            </div>
                        </div>

                        <div class="checkout-btn-group">
                            <a href="paymentConfirmation.php" class="btn-confirm-payment" style="text-decoration: none;">
                                Proceed to Checkout →
                            </a>

                            <a href="index.php" class="btn-continue-shopping">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z"/></svg>
                                Continue Shopping
                            </a>
                        </div>

                        <div class="security-badge">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
                            <span>100% Satisfaction Guaranteed</span>
                        </div>
                    </div>
                </div>

            </div>

        <?php endif; ?>
    </div>
    <script src="CartFunction.js"></script>    
</body>

<?php include('../includes/pageFooter.php'); ?>
</html>
<?php $conn->close(); ?>