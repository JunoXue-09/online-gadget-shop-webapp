<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // Redirect unauthenticated users to the login page
    header("Location: login.php");
    exit();
}

// Check cart
if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
    header("Location: shoppingCart.php");
    exit();
}

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uecs2094_assignment";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Confirm Payment & Process Database Insertion
if (isset($_POST['purchase'])) {
    $billingName   = trim($_POST['firstname'] ?? '');
    $billingEmail  = trim($_POST['email'] ?? '');
    $billingAddress= trim($_POST['address'] ?? '');
    $billingCity   = trim($_POST['city'] ?? '');
    $billingState  = trim($_POST['state'] ?? '');

    // Use a transaction to ensure integrity across purchases and stock updates
    $conn->begin_transaction();

    try {
        foreach ($_SESSION['cart'] as $item) {
            $productName  = $item['productName'];
            $productPrice = $item['productPrice'];
            $quantity     = (int) $item['quantity'];
            $subtotal     = $productPrice * $quantity;
            
            $status       = "P";
            $purchased    = date("Y-m-d H:i:s");

            // Insert purchase record
            $stmt = $conn->prepare("INSERT INTO purchase (productName, productPrice, quantity, subtotal, billingName, billingEmail, billingAddress, billingCity, billingState, status, purchased) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sddssssssss", $productName, $productPrice, $quantity, $subtotal, $billingName, $billingEmail, $billingAddress, $billingCity, $billingState, $status, $purchased);

            if (!$stmt->execute()) {
                throw new Exception("Error recording purchase: " . $stmt->error);
            }
            $stmt->close();
            
            // Update stock only *after* the payment/purchase record insertion is confirmed successful
            $updateStockStmt = $conn->prepare("UPDATE product SET stock = stock - ? WHERE productName = ?");
            $updateStockStmt->bind_param("is", $quantity, $productName);

            if (!$updateStockStmt->execute()) {
                throw new Exception("Error updating stock: " . $updateStockStmt->error);
            }
            $updateStockStmt->close();
        }

        // Commit transaction if all inserts and updates succeed
        $conn->commit();

        // Empty cart and redirect
        $_SESSION['cart'] = array();
        header("Location: purchaseSuccessful.php");
        exit();

    } catch (Exception $e) {
        // Rollback transaction on failure
        $conn->rollback();
        die("Transaction failed: " . $e->getMessage());
    }
}

// Calculate total dynamically based on current session cart quantities
$total = 0;
foreach ($_SESSION['cart'] as $item) {
    $subtotal = $item['productPrice'] * $item['quantity'];
    $total += $subtotal;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout & Payment - CeX Gadget Shop</title>
    <link rel="stylesheet" href="../style.css">
</head>

<?php include('../includes/pageHeader.php'); ?>

<body>
    <div class="checkout-page-container">
        <h1 class="page-title">Checkout & Payment</h1>

        <form method="post" action="paymentConfirmation.php" novalidate>
            <div class="checkout-layout">
                
                <!-- Forms -->
                <div class="checkout-form-col">
                    
                    <!-- Billing Address Card -->
                    <div class="checkout-card">
                        <h3>Billing Address</h3>

                        <div class="form-group">
                            <label for="fname">Full Name</label>
                            <input type="text" id="fname" name="firstname" placeholder="John Doe" value="<?php echo htmlspecialchars($_POST['firstname'] ?? ''); ?>">
                        </div>

                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>">
                        </div>

                        <div class="form-group">
                            <label for="adr">Street Address</label>
                            <input type="text" id="adr" name="address" placeholder="34 Setia Taipan 2" value="<?php echo htmlspecialchars($_POST['address'] ?? ''); ?>">
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="city">City</label>
                                <input type="text" id="city" name="city" placeholder="Shah Alam" value="<?php echo htmlspecialchars($_POST['city'] ?? ''); ?>">
                            </div>
                            <div class="form-group">
                                <label for="state">State</label>
                                <input type="text" id="state" name="state" placeholder="Selangor" value="<?php echo htmlspecialchars($_POST['state'] ?? ''); ?>">
                            </div>
                        </div>
                    </div>

                    <!-- Payment Information Card -->
                    <div class="checkout-card">
                        <h3>Payment Method</h3>

                        <div class="form-group">
                            <label for="cname">Cardholder Name</label>
                            <input type="text" id="cname" name="cardname" placeholder="John Doe" value="<?php echo htmlspecialchars($_POST['cardname'] ?? ''); ?>">
                        </div>

                        <div class="form-group">
                            <label for="ccnum">Credit Card Number</label>
                            <input type="text" id="ccnum" name="cardnumber" placeholder="1111222233334444" maxlength="19" value="<?php echo htmlspecialchars($_POST['cardnumber'] ?? ''); ?>">
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="expmonth">Exp Month</label>
                                <input type="text" id="expmonth" name="expmonth" placeholder="MM" maxlength="2" value="<?php echo htmlspecialchars($_POST['expmonth'] ?? ''); ?>">
                            </div>
                            <div class="form-group">
                                <label for="expyear">Exp Year</label>
                                <input type="text" id="expyear" name="expyear" placeholder="2026" maxlength="4" value="<?php echo htmlspecialchars($_POST['expyear'] ?? ''); ?>">
                            </div>
                            <div class="form-group">
                                <label for="cvv">CVV</label>
                                <input type="text" id="cvv" name="cvv" placeholder="352" maxlength="4" value="<?php echo htmlspecialchars($_POST['cvv'] ?? ''); ?>">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Order Summary & Actions -->
                <div class="checkout-summary-col">
                    <div class="checkout-card">
                        <h3>Order Summary</h3>

                        <div class="summary-items-list">
                            <?php foreach ($_SESSION['cart'] as $item): ?>
                                <div class="summary-item">
                                    <div class="summary-item-info">
                                        <span class="summary-item-name"><?php echo htmlspecialchars($item['productName']); ?></span>
                                        <span class="summary-item-qty">Qty: <?php echo (int)$item['quantity']; ?> × RM<?php echo number_format($item['productPrice'], 2); ?></span>
                                    </div>
                                    <span class="summary-item-price">RM<?php echo number_format($item['productPrice'] * $item['quantity'], 2); ?></span>
                                </div>
                            <?php endforeach; ?>
                        </div>

                        <div class="summary-totals">
                            <div class="summary-row">
                               <span>Subtotal</span>
                               <span>RM<?php echo number_format($total, 2); ?></span>
                            </div>
                            <div class="summary-row">
                               <span>Shipping</span>
                               <span style="color: #10b981; font-weight: 600;">FREE</span>
                            </div>
                            <div class="summary-row total-row">
                               <span>Total Amount</span>
                               <span>RM<?php echo number_format($total, 2); ?></span>
                            </div>
                        </div>

                        <div class="checkout-btn-group">
                            <button type="submit" name="purchase" class="btn-confirm-payment">
                                Confirm Payment (RM<?php echo number_format($total, 2); ?>)
                            </button>
                            
                            <a href="shoppingCart.php" class="btn-continue-shopping">
                                Back to Cart
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </form>
    </div>

    <script src="checkoutValidation.js"></script>
</body>

<?php include('../includes/pageFooter.php'); ?>
</html>
<?php $conn->close(); ?>