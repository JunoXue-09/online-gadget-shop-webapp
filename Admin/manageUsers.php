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

// Handle Role Update or Deletion actions if submitted
$message = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['update_role'])) {
        $target_user_id = intval($_POST['user_id']);
        $new_role = $conn->real_escape_string($_POST['role']);
        
        // Updated table name from 'users' to 'userInfo' to match your table structure
        $sql = "UPDATE userInfo SET role = '$new_role' WHERE id = $target_user_id";
        if ($conn->query($sql) === TRUE) {
            $message = "User role updated successfully.";
        } else {
            $message = "Error updating role: " . $conn->error;
        }
    } elseif (isset($_POST['delete_user'])) {
        $target_user_id = intval($_POST['user_id']);
        
        // Updated table name from 'users' to 'userInfo'
        $sql = "DELETE FROM userInfo WHERE id = $target_user_id";
        if ($conn->query($sql) === TRUE) {
            $message = "User account deleted successfully.";
        } else {
            $message = "Error deleting user: " . $conn->error;
        }
    }
}

// Fetch all registered users from 'userInfo' table (including the 'role' column)
$result = $conn->query("SELECT id, username, email, role FROM userInfo");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users - Admin Dashboard</title>
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
			<h2>User & Customer Management</h2>
			<span style="font-size: 14px; color: #718096;">Logged in as: <strong><?php echo htmlspecialchars($_SESSION['username']); ?></strong></span>
        </div>
		
        <?php if (!empty($message)): ?>
            <div class="message"><?php echo $message; ?></div>
        <?php endif; ?>

        <table class="admin-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($result && $result->num_rows > 0): ?>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo htmlspecialchars($row['username']); ?></td>
                            <td><?php echo htmlspecialchars($row['email']); ?></td>
                            <td>
                                <form method="POST" style="display:inline-flex; gap: 8px; align-items:center;">
                                    <input type="hidden" name="user_id" value="<?php echo $row['id']; ?>">
                                    <select name="role" class="role-select">
                                        <option value="customer" <?php if (isset($row['role']) && $row['role'] == 'customer') echo 'selected'; ?>>Customer</option>
                                        <option value="admin" <?php if (isset($row['role']) && $row['role'] == 'admin') echo 'selected'; ?>>Admin</option>
                                    </select>
                                    <button type="submit" name="update_role" class="btn-action btn-update">Save</button>
                                </form>
                            </td>
                            <td>
                                <form method="POST" onsubmit="return confirm('Are you sure you want to delete this user?');" style="display:inline;">
                                    <input type="hidden" name="user_id" value="<?php echo $row['id']; ?>">
                                    <button type="submit" name="delete_user" class="btn-action btn-delete">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5" style="text-align: center;">No registered users found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
        
        <p style="margin-top: 20px;"><a href="admin.php">&larr; Back to Admin Dashboard</a></p>
    </div>

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
<?php $conn->close(); ?>	