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
    $confirm_password = $_POST['confirm_password'];

    if ($password !== $confirm_password) {
        $errorMessage = "Passwords do not match!";
        $jsAlert = "Passwords do not match!";
    } else {
        // Check if username or email already exists
        $checkStmt = $conn->prepare("SELECT id FROM userInfo WHERE username = ? OR email = ?");
        $checkStmt->bind_param("ss", $username, $email);
        $checkStmt->execute();
        $checkResult = $checkStmt->get_result();

        if ($checkResult->num_rows > 0) {
            $errorMessage = "Username or Email is already registered!";
            $jsAlert = "Username or Email is already registered!";
        } else {
            $insertStmt = $conn->prepare("INSERT INTO userInfo (username, password, email) VALUES (?, ?, ?)");
            $insertStmt->bind_param("sss", $username, $password, $email);
            if ($insertStmt->execute()) {
                echo "<script>
                    alert('Registration successful! Please login with your account.');
                    window.location.href = 'login.php';
                </script>";
                exit();
            } else {
                $errorMessage = "Error registering account: " . $conn->error;
            }
            $insertStmt->close();
        }
        $checkStmt->close();
    }
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - CeX Gadget Shop</title>
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
            <h1>Register</h1>

            <?php if (!empty($errorMessage)): ?>
                <div class="alert alert-error">
                    <?php echo htmlspecialchars($errorMessage); ?>
                </div>
            <?php endif; ?>

            <form action="register.php" method="post">
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

                <div class="form-group">
                    <label for="confirm_password">Confirm Password</label>
                    <input type="password" id="confirm_password" name="confirm_password" placeholder="Re-enter your password" required>
                </div>

                <input type="submit" value="Register" class="btn-submit">
            </form>

            <div class="auth-footer">
                <p>Already have an account? <a href="login.php">Login here</a></p>
            </div>
        </div>
    </div>
</body>

<?php include('../includes/pageFooter.php'); ?>

</html>