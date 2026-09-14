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

// Connect to database
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$message = "";
$error = "";

// Handle Delete Operation
if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    $stmt = $conn->prepare("DELETE FROM product WHERE id = ?");
    $stmt->bind_param("i", $id);
    if ($stmt->execute()) {
        $message = "Product deleted successfully!";
    } else {
        $error = "Error deleting product: " . $conn->error;
    }
    $stmt->close();
}

// Handle Add / Edit Form Submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = isset($_POST['id']) ? intval($_POST['id']) : 0;
    $productName = trim($_POST['productName']);
    $productPrice = floatval($_POST['productPrice']);
    $productDescription = trim($_POST['productDescription']);
    $productImage = trim($_POST['productImage']);
    $rating_score = floatval($_POST['rating_score']);
    $rating_count = intval($_POST['rating_count']);
    $stars_html = trim($_POST['stars_html']);
    $category = trim($_POST['category']);
    $stock = intval($_POST['stock']);

    if ($id > 0) {
        // Update Product
        $stmt = $conn->prepare("UPDATE product SET productName=?, productPrice=?, productDescription=?, productImage=?, rating_score=?, rating_count=?, stars_html=?, category=?, stock=? WHERE id=?");
        $stmt->bind_param("sdssdissii", $productName, $productPrice, $productDescription, $productImage, $rating_score, $rating_count, $stars_html, $category, $stock, $id);
        if ($stmt->execute()) {
            $message = "Product updated successfully!";
        } else {
            $error = "Error updating product: " . $conn->error;
        }
        $stmt->close();
    } else {
        // Add New Product
        $stmt = $conn->prepare("INSERT INTO product (productName, productPrice, productDescription, productImage, rating_score, rating_count, stars_html, category, stock) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sdssdissi", $productName, $productPrice, $productDescription, $productImage, $rating_score, $rating_count, $stars_html, $category, $stock);
        if ($stmt->execute()) {
            $message = "New product added successfully!";
        } else {
            $error = "Error adding product: " . $conn->error;
        }
        $stmt->close();
    }
}

// Fetch product for editing if ID is provided
$editProduct = null;
if (isset($_GET['edit'])) {
    $editId = intval($_GET['edit']);
    $result = $conn->query("SELECT * FROM product WHERE id = $editId");
    if ($result->num_rows > 0) {
        $editProduct = $result->fetch_assoc();
    }
}

// Fetch distinct categories for the filter dropdown
$categoryResult = $conn->query("SELECT DISTINCT category FROM product WHERE category IS NOT NULL AND category != '' ORDER BY category ASC");

// Handle Search and Category Filter for Inventory Table
$searchQuery = isset($_GET['search']) ? trim($_GET['search']) : '';
$filterCategory = isset($_GET['filter_category']) ? trim($_GET['filter_category']) : '';

$sql = "SELECT * FROM product WHERE 1=1";
$params = [];
$types = "";

if (!empty($searchQuery)) {
    $sql .= " AND productName LIKE ?";
    $params[] = "%" . $searchQuery . "%";
    $types .= "s";
}

if (!empty($filterCategory)) {
    $sql .= " AND category = ?";
    $params[] = $filterCategory;
    $types .= "s";
}

$sql .= " ORDER BY id DESC";

if (!empty($params)) {
    $stmtProducts = $conn->prepare($sql);
    $stmtProducts->bind_param($types, ...$params);
    $stmtProducts->execute();
    $resultProducts = $stmtProducts->get_result();
} else {
    $resultProducts = $conn->query($sql);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CeX Gadget Shop - Admin Panel</title>
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
			<h2><?php echo $editProduct ? 'Edit Product (ID: ' . $editProduct['id'] . ')' : 'Add New Product'; ?></h2>
			<span style="font-size: 14px; color: #718096;">Logged in as: <strong><?php echo htmlspecialchars($_SESSION['username']); ?></strong></span>
		</div>
		
        <?php if (!empty($message)): ?>
            <div class="alert-success"><?php echo $message; ?></div>
        <?php endif; ?>
        <?php if (!empty($error)): ?>
            <div class="alert-error"><?php echo $error; ?></div>
        <?php endif; ?>

        <form action="admin.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $editProduct ? $editProduct['id'] : 0; ?>">
            
            <div class="form-grid">
                <div class="form-group">
                    <label>Product Name</label>
                    <input type="text" name="productName" required value="<?php echo $editProduct ? htmlspecialchars($editProduct['productName']) : ''; ?>">
                </div>
                <div class="form-group">
                    <label>Price (RM)</label>
                    <input type="number" step="0.01" name="productPrice" required value="<?php echo $editProduct ? $editProduct['productPrice'] : ''; ?>">
                </div>
                <div class="form-group">
					<label>Category</label>
					<select name="category" required>
						<option value="" disabled <?php echo (!$editProduct || empty($editProduct['category'])) ? 'selected' : ''; ?>>Select a category</option>
						<?php
						$categories = [
							"Apple", "Asus", "Camera", "Computer Accessories", "Dell", 
							"HP", "Huawei", "Lenovo", "MacBook", "Nintendo", "Oppo", 
							"PlayStation", "Samsung", "Speakers", "Vivo", "Watch", 
							"Wired Earphones", "Wireless Earphones", "XBox", "Xiaomi"
						];

						$currentCategory = $editProduct ? $editProduct['category'] : '';

						foreach ($categories as $cat) {
							$selected = ($currentCategory === $cat) ? 'selected' : '';
							echo "<option value=\"$cat\" $selected>$cat</option>";
						}
						?>
					</select>
				</div>
                <div class="form-group">
                    <label>Stock</label>
                    <input type="number" name="stock" required value="<?php echo $editProduct ? $editProduct['stock'] : 0; ?>">
                </div>
                <div class="form-group">
                    <label>Image Path</label>
                    <input type="text" name="productImage" value="<?php echo $editProduct ? htmlspecialchars($editProduct['productImage']) : '../Image/'; ?>">
                </div>
                <div class="form-group">
                    <label>Rating Score</label>
                    <input type="number" step="0.1" max="5.0" min="0.0" name="rating_score" value="<?php echo $editProduct ? $editProduct['rating_score'] : 4.8; ?>">
                </div>
                <div class="form-group">
                    <label>Rating Count</label>
                    <input type="number" name="rating_count" value="<?php echo $editProduct ? $editProduct['rating_count'] : 100; ?>">
                </div>
                <div class="form-group">
                    <label>Stars HTML</label>
                    <select name="stars_html">
                        <?php 
                        $currentStars = $editProduct ? $editProduct['stars_html'] : '★★★★★'; 
                        $starOptions = ['★★★★★', '★★★★☆', '★★★☆☆', '★★☆☆☆', '★☆☆☆☆', '☆☆☆☆☆'];
                        foreach ($starOptions as $stars) {
                            $selected = ($currentStars === $stars) ? 'selected' : '';
                            echo "<option value=\"$stars\" $selected>$stars</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>

            <div class="form-group" style="margin-bottom: 15px;">
                <label>Product Description</label>
                <textarea name="productDescription"><?php echo $editProduct ? htmlspecialchars($editProduct['productDescription']) : ''; ?></textarea>
            </div>

            <button type="submit" class="btn-submit"><?php echo $editProduct ? 'Update Product' : 'Add Product'; ?></button>
            <?php if ($editProduct): ?>
                <a href="admin.php" class="btn-cancel">Cancel</a>
            <?php endif; ?>
        </form>

        <hr style="margin: 40px 0;">

        <h2>Product Inventory List</h2>

        <form method="GET" action="admin.php" class="filter-search-bar">
            <input type="text" name="search" placeholder="Search by product name..." value="<?php echo htmlspecialchars($searchQuery); ?>">
            
            <select name="filter_category">
                <option value="">All Categories</option>
                <?php while ($catRow = $categoryResult->fetch_assoc()): ?>
                    <option value="<?php echo htmlspecialchars($catRow['category']); ?>" <?php echo ($filterCategory === $catRow['category']) ? 'selected' : ''; ?>>
                        <?php echo htmlspecialchars($catRow['category']); ?>
                    </option>
                <?php endwhile; ?>
            </select>

            <button type="submit">Filter</button>
            <?php if (!empty($searchQuery) || !empty($filterCategory)): ?>
                <a href="admin.php" class="btn-reset">Reset</a>
            <?php endif; ?>
        </form>

        <table class="admin-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Product Name</th>
                    <th>Category</th>
                    <th>Price (RM)</th>
                    <th>Stock</th>
                    <th>Rating</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($resultProducts->num_rows > 0): ?>
                    <?php while($row = $resultProducts->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><img src="<?php echo htmlspecialchars($row['productImage']); ?>" alt="" style="width: 40px; height: 40px; object-fit: cover;"></td>
                            <td><?php echo htmlspecialchars($row['productName']); ?></td>
                            <td><?php echo htmlspecialchars($row['category']); ?></td>
                            <td>RM <?php echo number_format($row['productPrice'], 2); ?></td>
                            <td><?php echo $row['stock']; ?></td>
                            <td><?php echo $row['rating_score']; ?> <?php echo $row['stars_html']; ?></td>
                            <td class="action-links">
								<a href="admin.php?edit=<?php echo $row['id']; ?>" class="action-btn action-edit" title="Edit Product">
									<svg viewBox="0 0 24 24" width="16" height="16" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
									<span>Edit</span>
								</a>
								<a href="admin.php?delete=<?php echo $row['id']; ?>" class="action-btn action-delete" title="Delete Product" onclick="return confirm('Are you sure you want to delete this product?');">
									<svg viewBox="0 0 24 24" width="16" height="16" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
									<span>Delete</span>
								</a>
							</td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="8" style="text-align: center;">No products found matching your criteria.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
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