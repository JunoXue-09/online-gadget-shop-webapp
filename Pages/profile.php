<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uecs2094_assignment";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Redirect to login if user is not authenticated (Placed early before any output)
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

$userEmail = $_SESSION['email'];
$updateError = "";
$updateSuccess = "";
$passwordError = "";
$passwordSuccess = "";

// Handle Profile Information Update Form Submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update_profile'])) {
    $newName = trim($_POST['full_name']);
    $newEmail = trim($_POST['email']);
    
    if (empty($newName) || empty($newEmail)) {
        $updateError = "Name and email cannot be empty.";
    } else {
        $checkStmt = $conn->prepare("SELECT email FROM userInfo WHERE email = ? AND email != ?");
        $checkStmt->bind_param("ss", $newEmail, $userEmail);
        $checkStmt->execute();
        $checkStmt->store_result();
        
        if ($checkStmt->num_rows > 0) {
            $updateError = "This email address is already registered by another account.";
        } else {
            $updateStmt = $conn->prepare("UPDATE userInfo SET username = ?, email = ? WHERE email = ?");
            $updateStmt->bind_param("sss", $newName, $newEmail, $userEmail);
            
            if ($updateStmt->execute()) {
                $_SESSION['email'] = $newEmail;
                $_SESSION['user_name'] = $newName;
                $userEmail = $newEmail;
                $updateSuccess = "Profile updated successfully!";
            } else {
                $updateError = "Error updating profile: " . $conn->error;
            }
            $updateStmt->close();
        }
        $checkStmt->close();
    }
}

// Handle Password Change Form Submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update_password'])) {
    $currentPassword = $_POST['current_password'];
    $newPassword = $_POST['new_password'];
    $confirmPassword = $_POST['confirm_password'];

    if (empty($currentPassword) || empty($newPassword) || empty($confirmPassword)) {
        $passwordError = "All password fields are required.";
    } elseif ($newPassword !== $confirmPassword) {
        $passwordError = "New passwords do not match.";
    } else {
        $passStmt = $conn->prepare("SELECT password FROM userInfo WHERE email = ?");
        $passStmt->bind_param("s", $userEmail);
        $passStmt->execute();
        $passStmt->bind_result($dbPassword);
        
        if ($passStmt->fetch()) {
            $passStmt->close();

            if ($currentPassword === $dbPassword) {  
                $hashedPassword = $newPassword; // Change to password_hash() if you use hashing

                $updatePassStmt = $conn->prepare("UPDATE userInfo SET password = ? WHERE email = ?");
                $updatePassStmt->bind_param("ss", $hashedPassword, $userEmail);

                if ($updatePassStmt->execute()) {
                    $passwordSuccess = "Password updated successfully!";
                } else {
                    $passwordError = "Error updating password: " . $conn->error;
                }
                $updatePassStmt->close();
            } else {
                $passwordError = "Incorrect current password.";
            }
        } else {
            $passStmt->close();
            $passwordError = "User account not found.";
        }
    }
}

// Fetch user orders sorted by purchase date descending
$stmt = $conn->prepare("SELECT * FROM purchase WHERE billingEmail = ? ORDER BY purchased DESC");
$stmt->bind_param("s", $userEmail);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile & Orders - CeX Gadget Shop</title>
    <link rel="stylesheet" href="../style.css">
    <style>
  

    </style>
</head>
<body>

<?php include('../includes/pageHeader.php'); ?>

    <div class="profile-container" style="max-width: 1100px; margin: 40px auto; padding: 0 20px;">
        
        <div class="profile-header" style="background: #ffffff; padding: 24px; border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.05); margin-bottom: 30px; display: flex; justify-content: space-between; align-items: center; border: 1px solid #e2e8f0;">
            <div>
                <h2 style="margin: 0; font-size: 1.5rem; color: #1e293b;">Welcome Back, <?php echo htmlspecialchars($_SESSION['user_name'] ?? 'Valued Customer'); ?>!</h2>
                <p style="margin: 5px 0 0; color: #64748b;">Manage your account details, change your password, and track your active orders.</p>
            </div>
            <div>
                <a href="logout.php" style="background: #e2e8f0; color: #1e293b; padding: 8px 16px; border-radius: 6px; text-decoration: none; font-size: 0.9rem; font-weight: 600;">Logout</a>
            </div>
        </div>

        <div class="profile-grid">
            
            <!-- Left Column: Edit Profile & Change Password Forms -->
            <div>
                <!-- Profile Details Form -->
                <div class="profile-card">
                    <h3>Edit Profile Information</h3>
                    
                    <?php if (!empty($updateError)): ?>
                        <div class="alert-error"><?php echo $updateError; ?></div>
                    <?php endif; ?>
                    
                    <?php if (!empty($updateSuccess)): ?>
                        <div class="alert-success"><?php echo $updateSuccess; ?></div>
                    <?php endif; ?>

                    <form action="profile.php" method="POST">
                        <div class="form-group">
                            <label for="full_name">Username</label>
                            <input type="text" id="full_name" name="full_name" value="<?php echo htmlspecialchars($_SESSION['user_name'] ?? ''); ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($userEmail); ?>" required>
                        </div>
                        <button type="submit" name="update_profile" class="btn-update">Save Changes</button>
                    </form>
                </div>

                <!-- Change Password Form -->
                <div class="profile-card">
                    <h3>Change Password</h3>
                    
                    <?php if (!empty($passwordError)): ?>
                        <div class="alert-error"><?php echo $passwordError; ?></div>
                    <?php endif; ?>
                    
                    <?php if (!empty($passwordSuccess)): ?>
                        <div class="alert-success"><?php echo $passwordSuccess; ?></div>
                    <?php endif; ?>

                    <form action="profile.php" method="POST">
                        <div class="form-group">
                            <label for="current_password">Current Password</label>
                            <input type="password" id="current_password" name="current_password" required>
                        </div>
                        <div class="form-group">
                            <label for="new_password">New Password</label>
                            <input type="password" id="new_password" name="new_password" required>
                        </div>
                        <div class="form-group">
                            <label for="confirm_password">Confirm New Password</label>
                            <input type="password" id="confirm_password" name="confirm_password" required>
                        </div>
                        <button type="submit" name="update_password" class="btn-update" style="background: #334155;">Update Password</button>
                    </form>
                </div>
            </div>

            <!-- Right Column: Order History & Tracking Status -->
            <div>
                <div class="orders-section">
                    <h3 style="font-size: 1.25rem; color: #1e293b; margin-top: 0; margin-bottom: 16px;">My Order History & Tracking Status</h3>

                    <?php if ($result->num_rows > 0): ?>
                        <?php while($row = $result->fetch_assoc()): ?>
                            <div class="order-card">
                                <div class="order-card-header">
                                    <div>
                                        <strong>Order ID:</strong> #<?php echo $row['id']; ?> &nbsp;|&nbsp; 
                                        <span><strong>Date:</strong> <?php echo $row['purchased']; ?></span>
                                    </div>
                                    <div>
                                        <?php 
                                            $statusCode = $row['status'] ?? 'P';
                                            $statusMap = [
                                                'P' => ['label' => 'Pending Processing', 'class' => 'status-p'],
                                                'S' => ['label' => 'Shipped', 'class' => 'status-s'],
                                                'C' => ['label' => 'Completed', 'class' => 'status-c'],
                                                'X' => ['label' => 'Cancelled', 'class' => 'status-x']
                                            ];
                                            $currentStatus = $statusMap[$statusCode] ?? $statusMap['P'];
                                        ?>
                                        <span class="status-badge <?php echo $currentStatus['class']; ?>">
                                            <?php echo $currentStatus['label']; ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="order-card-body">
                                    <table class="order-items-table">
                                        <thead>
                                            <tr>
                                                <th>Product Name</th>
                                                <th>Price</th>
                                                <th>Quantity</th>
                                                <th style="text-align: right;">Subtotal</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><?php echo htmlspecialchars($row['productName']); ?></td>
                                                <td>RM<?php echo number_format($row['productPrice'], 2); ?></td>
                                                <td><?php echo $row['quantity']; ?></td>
                                                <td style="text-align: right;">RM<?php echo number_format($row['subtotal'], 2); ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div style="display: flex; justify-content: space-between; align-items: center; font-size: 0.9rem; color: #475569; margin-top: 10px;">
                                        <span><strong>Shipping To:</strong> <?php echo htmlspecialchars($row['billingAddress'] . ', ' . $row['billingCity'] . ', ' . $row['billingState']); ?></span>
                                        <span style="font-size: 1rem; color: #1e293b;"><strong>Total: RM<?php echo number_format($row['subtotal'], 2); ?></strong></span>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <div class="no-orders">
                            <p>You haven't placed any orders yet.</p>
                            <a href="index.php" class="hero-btn" style="display: inline-block; margin-top: 15px; padding: 10px 20px; background: #0284c7; color: #fff; text-decoration: none; border-radius: 6px;">Start Shopping</a>
                        </div>
                    <?php endif; ?>

                </div>
            </div>

        </div>
    </div>

<?php include('../includes/pageFooter.php'); ?>
</body>
</html>

<?php
$stmt->close();
$conn->close();
?>