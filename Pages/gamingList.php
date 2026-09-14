<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaming - CeX Gadget Shop</title>
    <link rel="stylesheet" href="../style.css">
</head>

<?php include('../includes/pageHeader.php'); ?>

<body>
    <div class="contentWrapper">
		<aside class="sidebar">
			<h2>Gaming Categories</h2>
			<a href="../Category/PlayStation.php">
				<div class="Category-Card">
					<img src="..\Image\playstation banner.jpg" alt="Category Image">
					<div class="overlay">
						<h3>PlayStation</h3>
						<p>Explore PlayStation</p>
					</div>
				</div>
			</a>
			<a href="../Category/XBox.php">
				<div class="Category-Card">
					<img src="..\Image\xbox banner.jpg" alt="Category Image">
					<div class="overlay">
						<h3>XBox</h3>
						<p>Explore XBox</p>
					</div>
				</div>
			</a>
			<a href="../Category/Nintendo.php">
				<div class="Category-Card">
					<img src="..\Image\nintendo banner.jpg" alt="Category Image">
					<div class="overlay">
						<h3>Nintendo</h3>
						<p>Explore Nintendo</p>
					</div>
				</div>
			</a>
		</aside>

		<main class="Container">
			<h2>New Arrivals</h2>
			<div class="Product Card">
				<a href="productDetail.php?id=7" class="img-link">
					<img src="..\Image\PS5.jpg" alt="PlayStation 5 1TB">
				</a>
				<h3>PlayStation 5 1TB</h3>
				<div class="rating">
					<span class="rating-stars">★★★★★</span>
					<span class="rating-score">4.9</span>
					<span class="rating-count">(512)</span>
				</div>
				<p class="price">RM 2,750.00</p>
				<a href="productDetail.php?id=7" class="btn-view-details">
					<svg viewBox="0 0 24 24"><path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
					View Details
				</a>
			</div>

			<div class="Product Card">
				<a href="productDetail.php?id=8" class="img-link">
					<img src="..\Image\XboxX.jpg" alt="XBox Series X 1TB">
				</a>
				<h3>XBox Series X 1TB</h3>
				<div class="rating">
					<span class="rating-stars">★★★★★</span>
					<span class="rating-score">4.8</span>
					<span class="rating-count">(160)</span>
				</div>
				<p class="price">RM 2,300.00</p>
				<a href="productDetail.php?id=8" class="btn-view-details">
					<svg viewBox="0 0 24 24"><path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
					View Details
				</a>
			</div>

			<div class="Product Card">
				<a href="productDetail.php?id=5" class="img-link">
					<img src="..\Image\nintendoSwitch2.jpg" alt="Nintendo Switch 2 64GB">
				</a>
				<h3>Nintendo Switch 2 64GB</h3>
				<div class="rating">
					<span class="rating-stars">★★★★★</span>
					<span class="rating-score">4.8</span>
					<span class="rating-count">(180)</span>
				</div>
				<p class="price">RM 1,500.00</p>
				<a href="productDetail.php?id=5" class="btn-view-details">
					<svg viewBox="0 0 24 24"><path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
					View Details
				</a>
			</div>
			<div class="Product Card">
				<a href="productDetail.php?id=30" class="img-link">
					<img src="..\Image\Nintendo Switch OLED.jpg" alt="Nintendo Switch OLED">
				</a>
				<h3>Nintendo Switch OLED</h3>
				<div class="rating">
					<span class="rating-stars">★★★★★</span>
					<span class="rating-score">4.8</span>
					<span class="rating-count">(165)</span>
				</div>
				<p class="price">RM 1,100.00</p>
				<a href="productDetail.php?id=30" class="btn-view-details">
					<svg viewBox="0 0 24 24"><path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
					View Details
				</a>
			</div>

			<div class="Product Card">
				<a href="productDetail.php?id=31" class="img-link">
					<img src="..\Image\PlayStation 4 512GB.jpg" alt="PlayStation 4 512GB">
				</a>
				<h3>PlayStation 4 512GB</h3>
				<div class="rating">
					<span class="rating-stars">★★★★☆</span>
					<span class="rating-score">4.6</span>
					<span class="rating-count">(312)</span>
				</div>
				<p class="price">RM 1,180.00</p>
				<a href="productDetail.php?id=31" class="btn-view-details">
					<svg viewBox="0 0 24 24"><path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
					View Details
				</a>
			</div>

			<div class="Product Card">
				<a href="productDetail.php?id=32" class="img-link">
					<img src="..\Image\XBox X Controller.jpg" alt="XBox X Controller">
				</a>
				<h3>XBox X Controller</h3>
				<div class="rating">
					<span class="rating-stars">★★★★★</span>
					<span class="rating-score">4.8</span>
					<span class="rating-count">(195)</span>
				</div>
				<p class="price">RM 290.00</p>
				<a href="productDetail.php?id=32" class="btn-view-details">
					<svg viewBox="0 0 24 24"><path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
					View Details
				</a>
			</div>
			
			<section class="Container">
				<h2>Recommended Product</h2>
				<div class="Product Card">
					<a href="productDetail.php?id=33" class="img-link">
						<img src="..\Image\Nintendo Switch Pro Controller.jpg" alt="Nintendo Switch Pro Controller">
					</a>
					<h3>Nintendo Switch Pro Controller</h3>
					<div class="rating">
						<span class="rating-stars">★★★★★</span>
						<span class="rating-score">4.9</span>
						<span class="rating-count">(240)</span>
					</div>
					<p class="price">RM 250.00</p>
					<a href="productDetail.php?id=33" class="btn-view-details">
						<svg viewBox="0 0 24 24"><path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
						View Details
					</a>
				</div>

				<div class="Product Card">
					<a href="productDetail.php?id=34" class="img-link">
						<img src="..\Image\XBox One Controller.jpg" alt="XBox One Controller">
					</a>
					<h3>XBox One Controller</h3>
					<div class="rating">
						<span class="rating-stars">★★★★☆</span>
						<span class="rating-score">4.7</span>
						<span class="rating-count">(180)</span>
					</div>
					<p class="price">RM 240.00</p>
					<a href="productDetail.php?id=34" class="btn-view-details">
						<svg viewBox="0 0 24 24"><path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
						View Details
					</a>
				</div>

				<div class="Product Card">
					<a href="productDetail.php?id=35" class="img-link">
						<img src="..\Image\Nintendo Switch Joy-Con.jpg" alt="Nintendo Switch Joy-Con">
					</a>
					<h3>Nintendo Switch Joy-Con</h3>
					<div class="rating">
						<span class="rating-stars">★★★★☆</span>
						<span class="rating-score">4.7</span>
						<span class="rating-count">(155)</span>
					</div>
					<p class="price">RM 200.00</p>
					<a href="productDetail.php?id=35" class="btn-view-details">
						<svg viewBox="0 0 24 24"><path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
						View Details
					</a>
				</div>

				<div class="Product Card">
					<a href="productDetail.php?id=36" class="img-link">
						<img src="..\Image\PlayStation 4 Pro 1TB.jpg" alt="PlayStation 4 Pro 1TB">
					</a>
					<h3>PlayStation 4 Pro 1TB</h3>
					<div class="rating">
						<span class="rating-stars">★★★★★</span>
						<span class="rating-score">4.8</span>
						<span class="rating-count">(210)</span>
					</div>
					<p class="price">RM 1,600.00</p>
					<a href="productDetail.php?id=36" class="btn-view-details">
						<svg viewBox="0 0 24 24"><path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
						View Details
					</a>
				</div>

				<div class="Product Card">
					<a href="productDetail.php?id=37" class="img-link">
						<img src="..\Image\XBox Series S 512GB.jpg" alt="XBox Series S 512GB">
					</a>
					<h3>XBox Series S 512GB</h3>
					<div class="rating">
						<span class="rating-stars">★★★★★</span>
						<span class="rating-score">4.8</span>
						<span class="rating-count">(190)</span>
					</div>
					<p class="price">RM 1,400.00</p>
					<a href="productDetail.php?id=37" class="btn-view-details">
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