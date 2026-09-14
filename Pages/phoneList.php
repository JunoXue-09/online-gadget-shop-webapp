<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phones - CeX Gadget Shop</title>
    <link rel="stylesheet" href="../style.css">
</head>

<?php include('../includes/pageHeader.php'); ?>

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
			<h2>New Arrivals</h2>
			
			<div class="Product Card">
				<a href="productDetail.php?id=6" class="img-link">
					<img src="..\Image\SamsungS24ultra.jpg" alt="Samsung Galaxy S24 Ultra 1TB">
				</a>
				<h3>Samsung Galaxy S24 Ultra 1TB</h3>
				<div class="rating">
					<span class="rating-stars">★★★★★</span>
					<span class="rating-score">4.9</span>
					<span class="rating-count">(220)</span>
				</div>
				<p class="price">RM 5,500.00</p>
				<a href="productDetail.php?id=6" class="btn-view-details">
					<svg viewBox="0 0 24 24"><path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
					View Details
				</a>
			</div>

			<div class="Product Card">
				<a href="productDetail.php?id=1" class="img-link">
					<img src="..\Image\iphone17pm.jpg" alt="Iphone 17 Pro Max 256GB">
				</a>
				<h3>Iphone 17 Pro Max 256GB</h3>
				<div class="rating">
					<span class="rating-stars">★★★★★</span>
					<span class="rating-score">4.9</span>
					<span class="rating-count">(256)</span>
				</div>
				<p class="price">RM 6,000.00</p>
				<a href="productDetail.php?id=1" class="btn-view-details">
					<svg viewBox="0 0 24 24"><path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
					View Details
				</a>
			</div>

			<div class="Product Card">
				<a href="productDetail.php?id=9" class="img-link">
					<img src="..\Image\GooglePixel10Pro.jpg" alt="Google Pixel 10 Pro 256GB">
				</a>
				<h3>Google Pixel 10 Pro 256GB</h3>
				<div class="rating">
					<span class="rating-stars">★★★★☆</span>
					<span class="rating-score">4.7</span>
					<span class="rating-count">(95)</span>
				</div>
				<p class="price">RM 4,000.00</p>
				<a href="productDetail.php?id=9" class="btn-view-details">
					<svg viewBox="0 0 24 24"><path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
					View Details
				</a>
			</div>

			<div class="Product Card">
				<a href="productDetail.php?id=2" class="img-link">
					<img src="..\Image\iphone16.jpg" alt="Iphone 16 512GB">
				</a>
				<h3>Iphone 16 512GB</h3>
				<div class="rating">
					<span class="rating-stars">★★★★★</span>
					<span class="rating-score">4.8</span>
					<span class="rating-count">(198)</span>
				</div>
				<p class="price">RM 5,000.00</p>
				<a href="productDetail.php?id=2" class="btn-view-details">
					<svg viewBox="0 0 24 24"><path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
					View Details
				</a>
			</div>
			<div class="Product Card">
				<a href="productDetail.php?id=16" class="img-link">
					<img src="..\Image\HuaweiMate80.jpg" alt="Huawei Mate 80 256GB">
				</a>
				<h3>Huawei Mate 80 256GB</h3>
				<div class="rating">
					<span class="rating-stars">★★★★☆</span>
					<span class="rating-score">4.7</span>
					<span class="rating-count">(110)</span>
				</div>
				<p class="price">RM 4,200.00</p>
				<a href="productDetail.php?id=16" class="btn-view-details">
					<svg viewBox="0 0 24 24"><path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
					View Details
				</a>
			</div>

			<div class="Product Card">
				<a href="productDetail.php?id=17" class="img-link">
					<img src="..\Image\Xioami17PM.jpg" alt="Xiaomi 17 Pro Max 235GB">
				</a>
				<h3>Xiaomi 17 Pro Max 235GB</h3>
				<div class="rating">
					<span class="rating-stars">★★★★☆</span>
					<span class="rating-score">4.6</span>
					<span class="rating-count">(88)</span>
				</div>
				<p class="price">RM 3,800.00</p>
				<a href="productDetail.php?id=17" class="btn-view-details">
					<svg viewBox="0 0 24 24"><path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
					View Details
				</a>
			</div>
			
			<section class="Container">
				<h2>Recommended Product</h2>
				<div class="Product Card">
					<a href="productDetail.php?id=18" class="img-link">
						<img src="..\Image\Oppo Find X6 Pro 512GB.jpg" alt="OPPO Find X6 Pro 512GB">
					</a>
					<h3>OPPO Find X6 Pro 512GB</h3>
					<div class="rating">
						<span class="rating-stars">★★★★★</span>
						<span class="rating-score">4.8</span>
						<span class="rating-count">(142)</span>
					</div>
					<p class="price">RM 4,500.00</p>
					<a href="productDetail.php?id=18" class="btn-view-details">
						<svg viewBox="0 0 24 24"><path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
						View Details
					</a>
				</div>

				<div class="Product Card">
					<a href="productDetail.php?id=19" class="img-link">
						<img src="..\Image\Samsung Galaxy Z Fold 8.jpg" alt="Samsung Galaxy Z Fold5 1TB">
					</a>
					<h3>Samsung Galaxy Z Fold5 1TB</h3>
					<div class="rating">
						<span class="rating-stars">★★★★★</span>
						<span class="rating-score">4.9</span>
						<span class="rating-count">(96)</span>
					</div>
					<p class="price">RM 7,000.00</p>
					<a href="productDetail.php?id=19" class="btn-view-details">
						<svg viewBox="0 0 24 24"><path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
						View Details
					</a>
				</div>

				<div class="Product Card">
					<a href="productDetail.php?id=20" class="img-link">
						<img src="..\Image\iPhone 16 Pro.jpg" alt="Iphone 16 Pro 256GB">
					</a>
					<h3>Iphone 16 Pro 256GB</h3>
					<div class="rating">
						<span class="rating-stars">★★★★★</span>
						<span class="rating-score">4.9</span>
						<span class="rating-count">(215)</span>
					</div>
					<p class="price">RM 5,200.00</p>
					<a href="productDetail.php?id=20" class="btn-view-details">
						<svg viewBox="0 0 24 24"><path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
						View Details
					</a>
				</div>

				<div class="Product Card">
					<a href="productDetail.php?id=21" class="img-link">
						<img src="..\Image\Sony Xperia 1 VII.jpg" alt="Sony Xperia 1 VII">
					</a>
					<h3>Sony Xperia 1 VII</h3>
					<div class="rating">
						<span class="rating-stars">★★★★☆</span>
						<span class="rating-score">4.7</span>
						<span class="rating-count">(74)</span>
					</div>
					<p class="price">RM 4,000.00</p>
					<a href="productDetail.php?id=21" class="btn-view-details">
						<svg viewBox="0 0 24 24"><path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
						View Details
					</a>
				</div>
			</section>
		</main>
    </div>
</body>

<?php include('../includes/pageFooter.php'); ?>

</html>