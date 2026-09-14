<?php
session_start();

$errorMessage = "";
$jsAlert = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $servername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "uecs2094_assignment";

    $conn = new mysqli($servername, $dbUsername, $dbPassword, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    // Check if user exists in userInfo table
    $stmt = $conn->prepare("SELECT * FROM userInfo WHERE username = ? OR email = ?");
    $stmt->bind_param("ss", $username, $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 0) {
        // User has not registered an account
        $errorMessage = "You haven't registered an account yet! Please register first.";
        $jsAlert = "You haven't registered an account yet! Please register first.";
    } else {
        $user = $result->fetch_assoc();
        // Verify password
        if ($password === $user['password']) {
            $_SESSION['username'] = $user['username'];
            $_SESSION['email'] = $user['email'];
			$_SESSION['role'] = $user['role'];
            
            // --- SMART REDIRECTION FOR ADMINS BASED ON ROLE ---
			if (isset($user['role']) && $user['role'] === 'admin') {
				header("Location: ../Admin/admin.php");
			} else {
				header("Location: index.php");
			}
			exit();
        } else {
            $errorMessage = "Incorrect password! Please try again.";
            $jsAlert = "Incorrect password! Please try again.";
        }
    }

    $stmt->close();
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - CeX Gadget Shop</title>
    <link rel="stylesheet" href="../style.css">
    <?php if (!empty($jsAlert)): ?>
    <script>
        alert(<?php echo json_encode($jsAlert); ?>);
    </script>
    <?php endif; ?>
</head>

<?php include('../includes/pageHeader.php'); ?>

<body>
    <div class="auth-wrapper">
        <div class="auth-card container">
            <h1>Login</h1>

            <?php if (!empty($errorMessage)): ?>
                <div class="alert alert-error">
                    <?php echo htmlspecialchars($errorMessage); ?>
                    <br>
                    <a href="register.php" style="color: #cc0000; font-weight: bold; text-decoration: underline; margin-top: 5px; display: inline-block;">
                        Click here to register
                    </a>
                </div>
            <?php endif; ?>

            <form action="login.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="Enter your username" value="<?php echo isset($_POST['username']) ? htmlspecialchars($_POST['username']) : ''; ?>" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>" required>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                </div>

                <input type="submit" value="Login" class="btn-submit">
            </form>

            <div class="auth-footer">
                <p>Don't have an account? <a href="register.php">Register here</a></p>
            </div>
        </div>
    </div>
</body>

<?php include('../includes/pageFooter.php'); ?>

</html>