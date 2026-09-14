<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Successful - CeX Gadget Shop</title>
    <link rel="stylesheet" href="../style.css">
</head>

<?php include('../includes/pageHeader.php'); ?>

<body>
    <div class="payment-success">
        <svg width="64" height="64" viewBox="0 0 24 24" fill="#10b981" style="margin-bottom: 15px;"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
        <h1>Thank You for Your Purchase!</h1>
        <p>Your payment has been successfully completed and your order is being processed.</p>
        <p>Thank you for shopping with CeX Gadget Shop.</p>
        <br>
        <a href="index.php" class="btn" style="border-radius: 25px; padding: 12px 30px; font-weight: 600;">Continue Shopping</a>
    </div>
</body>

<?php include('../includes/pageFooter.php'); ?>

</html>