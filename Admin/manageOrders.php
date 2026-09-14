<?php
session_start();

// --- ADMIN ACCESS SECURITY CHECK ---
if (!isset($_SESSION['username']) || !isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    // If not logged in or not an admin, redirect back to the login page
    header("Location: ../Pages/login.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uecs2094_assignment";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle Status Update Submission
$message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update_status'])) {
    $record_id = intval($_POST['record_id']);
    $new_status = trim($_POST['status']);
    
    $stmt = $conn->prepare("UPDATE purchase SET status = ? WHERE id = ?");
    $stmt->bind_param("si", $new_status, $record_id);
    if ($stmt->execute()) {
        $message = "Order status updated successfully!";
    }
    $stmt->close();
}

// Fetch all purchase records
$resultPurchases = $conn->query("SELECT * FROM purchase ORDER BY purchased DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage Orders - Admin Dashboard</title>
    <link rel="stylesheet" href="../style.css">
</head>

<header class="main-header">
    <script src="../Pages/menu.js" ></script>
    <div class="header-top">
        <div class="menu-btn" id="menuBtn">
            <div class="burger-icon"></div>
            <span>Menu</span>
        </div>

    <img src="../Image/CeXLogo.jpg" alt="CeX Logo" class="logo">

        <div class="user-actions">
            <?php if (isset($_SESSION['username'])): ?>
                <span class="user-greeting">Hi, <?php echo htmlspecialchars($_SESSION['username']); ?></span>
                <a href="../Pages/logout.php" class="btn-logout">Logout</a>
            <?php else: ?>
                <a href="../Pages/login.php" class="action-item">Login</a>
            <?php endif; ?>
            <a href="../Pages/index.php" class="action-item">View Site</a>
        </div>
    </div>

    <nav class="header-nav">
        <a href="../Pages/index.php">Home</a>
        <a href="admin.php">Manage Products</a>
        <a href="manageOrders.php">Manage Orders</a>
		<a href="manageUsers.php">Manage Users</a>
    </nav>
</header>

<body>
    <div class="admin-container">
        <div class="admin-header-title">
            <h2>📦 Customer Order Management Dashboard</h2>
            <span style="font-size: 14px; color: #718096;">Logged in as: <strong><?php echo htmlspecialchars($_SESSION['username']); ?></strong></span>
        </div>

        <?php if (!empty($message)): ?>
            <div class="alert-success"><?php echo htmlspecialchars($message); ?></div>
        <?php endif; ?>

        <div class="table-responsive">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Customer Billing Profile</th>
                        <th>Product Details</th>
                        <th>Qty</th>
                        <th>Subtotal</th>
                        <th>Status Update</th>
                        <th>Purchase Date</th>
                        <th>Action State</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($resultPurchases && $resultPurchases->num_rows > 0): ?>
                        <?php while($row = $resultPurchases->fetch_assoc()): ?>
                            <tr>
                                <td><strong>#<?php echo $row['id']; ?></strong></td>
                                <td class="customer-info">
                                    <strong><?php echo htmlspecialchars($row['billingName']); ?></strong>
                                    <small><?php echo htmlspecialchars($row['billingEmail']); ?></small>
                                    <small><?php echo htmlspecialchars($row['billingAddress'] . ", " . $row['billingCity'] . ", " . $row['billingState']); ?></small>
                                </td>
                                <td>
                                    <span class="product-badge"><?php echo htmlspecialchars($row['productName']); ?></span><br>
                                    <small style="color: #718096;">RM <?php echo number_format($row['productPrice'], 2); ?> each</small>
                                </td>
                                <td><strong><?php echo $row['quantity']; ?></strong></td>
                                <td><strong>RM <?php echo number_format($row['subtotal'], 2); ?></strong></td>
                                <td>
									<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="status-form">                                   
										<input type="hidden" name="record_id" value="<?php echo $row['id']; ?>">
                                        <select name="status" class="status-select">
                                            <?php 
                                            $statuses = ['P' => 'Pending', 'S' => 'Shipped', 'D' => 'Delivered', 'C' => 'Cancelled'];
                                            foreach($statuses as $code => $label) {
                                                $selected = ($row['status'] === $code) ? 'selected' : '';
                                                echo "<option value='$code' $selected>$label</option>";
                                            }
                                            ?>
                                        </select>
                                        <button type="submit" name="update_status" class="btn-save">Save</button>
                                    </form>
                                </td>
                                <td><small style="color: #4a5568;"><?php echo $row['purchased']; ?></small></td>
                                <td>
                                    <span class="badge-completed">Fulfilled</span>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <tr><td colspan="8" class="empty-state">No purchase records found in the system.</td></tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

    <script>
    window.addEventListener('DOMContentLoaded', (event) => {
        const alertBox = document.querySelector('.alert-success');
        if (alertBox) {
            // Keep the alert visible for 3 seconds, then smoothly fade out
            setTimeout(() => {
                alertBox.style.transition = 'opacity 0.6s ease-in-out';
                alertBox.style.opacity = '0';
                setTimeout(() => {
                    alertBox.remove();
                }, 600);
            }, 3000);
        }
    });
</script>
</body>

<footer class="main-footer">
    <div class="footer-content">
        <p>&copy; CeX Gadget Shop. All rights reserved.</p>
        <div class="footer-links">
            <a href="../Pages/privacyPolicy.php">Privacy Policy</a>
            <a href="../Pages/termOfService.php">Terms of Service</a>
            <a href="../Pages/contactUs.php">Contact Us</a>
        </div>
    </div>
</footer>

</html>