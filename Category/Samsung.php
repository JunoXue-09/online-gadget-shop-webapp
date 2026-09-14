<?php
session_start();
?>
<!DOCTYPE html>
<html lang = "en">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Mobile Phones</title>

<head>
	<?php include('../includes/categoryHeader.php'); ?>
</head>

<body>
    <div class="contentWrapper">
		<div class="draggable-box" draggble="true"</div>
			<aside class="sidebar">
				<h2>Categories</h2>
				<a href="../Category/Apple.php">
					<div class="Category-Card">
						<img src="../Image/apple.jpg" alt="Category Image">
						<div class="overlay">
							<h3>Apple</h3>
						</div>
					</div>
				</a>
				<a href="../Category/Huawei.php">
					<div class="Category-Card">
						<img src="../Image/huawei.jpg" alt="Category Image">
						<div class="overlay">
							<h3>Huawei</h3>
						</div>
					</div>
				</a>
				<a href="../Category/Xiaomi.php">
					<div class="Category-Card">
						<img src="../Image/xiaomi.jpg" alt="Category Image">
						<div class="overlay">
							<h3>Xiaomi</h3>
						</div>
					</div>
				</a>
				<a href="../Category/Samsung.php">
					<div class="Category-Card">
						<img src="../Image/samsung.jpg" alt="Category Image">
						<div class="overlay">
							<h3>Samsung</h3>
						</div>
					</div>
				</a>
				<a href="../Category/Oppo.php">
					<div class="Category-Card">
						<img src="../Image/oppo.jpg" alt="Category Image">
						<div class="overlay">
							<h3>Oppo</h3>
						</div>
					</div>
				</a>
				<a href="../Category/Vivo.php">
					<div class="Category-Card">
						<img src="../Image/vivo.jpg" alt="Category Image">
						<div class="overlay">
							<h3>Vivo</h3>
						</div>
					</div>
				</a>
			</aside>
		</div>
    

		<main class="Container">
			<div class="samsung-banner">
				<div class="banner-content">
					<h2>UNLEASH GALAXY AI:<br>Upgrade Your Experience with the All-New Samsung Galaxy Series</h2>
					<p>Discover the latest devices, accessories, and offers.</p>
				</div>
			</div>
			<div class="catalog-toolbar">
                <div class="sort-section">
                    <form method="GET" action="" style="display: flex; align-items: center; gap: 8px; margin: 0;">
                        <label for="sort">Sort by:</label>
                        <select name="sort" id="sort" onchange="this.form.submit()">
                            <option value="">Default</option>
                            <option value="asc" <?php echo (isset($_GET['sort']) && $_GET['sort'] === 'asc') ? 'selected' : ''; ?>>Price: Low to High</option>
                            <option value="desc" <?php echo (isset($_GET['sort']) && $_GET['sort'] === 'desc') ? 'selected' : ''; ?>>Price: High to Low</option>
                        </select>
                    </form>
                </div>
            </div>
			<?php
				$dbHost = 'localhost';
				$dbUser = 'root';
				$dbPass = '';
				$dbName = 'uecs2094_assignment';
				$port = 3306;
				$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName, $port);

				if (!$conn) {
					die('<p>Could not connect to the database: ' . mysqli_connect_error() . '</p>');
				} else {
					$sql = "SELECT * FROM product WHERE category = 'Samsung'";
					
					// Handle Sorting (Ascending or Descending)
					if (isset($_GET['sort']) && $_GET['sort'] === 'asc') {
						$sql .= " ORDER BY productPrice ASC";
					} elseif (isset($_GET['sort']) && $_GET['sort'] === 'desc') {
						$sql .= " ORDER BY productPrice DESC";
					}
					
					$result = mysqli_query($conn, $sql);

					if (!$result || mysqli_num_rows($result) === 0) {
						echo '<p>No Samsung products found.</p>';
					} else {
						while ($row = mysqli_fetch_assoc($result)) {
							$id = htmlspecialchars($row['id']); 
							$name = htmlspecialchars($row['productName']);
							$price = number_format($row['productPrice'], 2);
							$imageUrl = htmlspecialchars($row['productImage']);
							$ratingScore = htmlspecialchars($row['rating_score']);
							$ratingCount = htmlspecialchars($row['rating_count']);
							$starsHtml = htmlspecialchars($row['stars_html']);

							echo '
							<div class="Product Card">
								<a href="../Pages/productDetail.php?id=' . $id . '" class="img-link">
									<img src="' . $imageUrl . '" alt="' . $name . '">
								</a>
								<h3>' . $name . '</h3>
								<div class="rating">
									<span class="rating-stars">' . $starsHtml . '</span>
									<span class="rating-score">' . $ratingScore . '</span>
									<span class="rating-count">(' . $ratingCount . ')</span>
								</div>
								<p class="price">RM ' . $price . '</p>
								<a href="../Pages/productDetail.php?id=' . $id . '" class="btn-view-details">
									<svg viewBox="0 0 24 24"><path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
									View Details
								</a>
							</div>';
						}
					}
					mysqli_close($conn);
				}
				?>
		</main>
	</div>
</body>

<footer class="main-footer">
    <div class="footer-content">
        <p>&copy; CeX Gadget Shop. All rights reserved.</p>
        <div class="footer-links">
            <a href="privacyPolicy.php">Privacy Policy</a>
            <a href="termOfService.php">Terms of Service</a>
            <a href="contactUs.php">Contact Us</a>
        </div>
    </div>
</footer>
</html>