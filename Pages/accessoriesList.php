<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accessories - CeX Gadget Shop</title>
    <link rel="stylesheet" href="../style.css">
</head>

<?php include('../includes/pageHeader.php'); ?>

<body>
	<div class="contentWrapper">
		<aside class="sidebar">
			<a href="../Category/Wireless Earphones.php">
				<div class="Category-Card">
					<img src="..\Image\airpod.jpg" alt="Category Image">
					<div class="overlay">					
						<h3>Wireless Earphones</h3>
					</div>
				</div>
			</a>
			<a href="../Category/Wired Earphones.php">
				<div class="Category-Card">
					<img src="..\Image\wiredEarphones.jpg" alt="Category Image">
					<div class="overlay">
						<h3>Wired Earphones</h3>
					</div>
				</div>
			</a>
			<a href="../Category/Computer Accessories.php">
				<div class="Category-Card">
					<img src="../Image/accessories-banner.jpg" alt="Category Image">
					<div class="overlay">	
						<h3>Computer Accessories</h3>
					</div>
				</div>
			</a>
			<a href="../Category/Speakers.php">
				<div class="Category-Card">
					<img src="..\Image\Accessories.jpg" alt="Category Image">
					<div class="overlay">	
						<h3>Speakers</h3>
					</div>
				</div>
			</a>
			<a href="../Category/Camera.php">
				<div class="Category-Card">
					<img src="..\Image\Camera.jpg" alt="Category Image">
					<div class="overlay">
						<h3>Camera</h3>
					</div>
				</div>
			</a>
			<a href="../Category/Watch.php">
				<div class="Category-Card">
					<img src="..\Image\SmartWatch.jpg" alt="Category Image">
					<div class="overlay">
						<h3>Smartwatch</h3>
					</div>
				</div>
			</a>
		</aside>
		
		<main class="Container">
			<h2>New Arrivals</h2>
			
			<div class="Product Card">
				<a href="productDetail.php?id=4" class="img-link">
					<img src="..\Image\airpods4_NoiceCancelation.jpg" alt="AirPods 4 with Noise Cancellation">
				</a>
				<h3>AirPods 4 with Noice Cancellation</h3>
				<div class="rating">
					<span class="rating-stars">★★★★☆</span>
					<span class="rating-score">4.7</span>
					<span class="rating-count">(145)</span>
				</div>
				<p class="price">RM 650.00</p>
				<a href="productDetail.php?id=4" class="btn-view-details">
					<svg viewBox="0 0 24 24"><path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
					View Details
				</a>
			</div>

			<div class="Product Card">
				<a href="productDetail.php?id=12" class="img-link">
					<img src="..\Image\AppleWatchSeries9 GPS.jpg" alt="Apple Watch Series 9 GPS 41mm">
				</a>
				<h3>Apple Watch Series 9 GPS 41mm</h3>
				<div class="rating">
					<span class="rating-stars">★★★★★</span>
					<span class="rating-score">4.8</span>
					<span class="rating-count">(115)</span>
				</div>
				<p class="price">RM 1,600.00</p>
				<a href="productDetail.php?id=12" class="btn-view-details">
					<svg viewBox="0 0 24 24"><path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
					View Details
				</a>
			</div>

			<div class="Product Card">
				<a href="productDetail.php?id=13" class="img-link">
					<img src="..\Image\SonyWH10000XM-5.jpg" alt="Sony WH-1000XM-5 Headphones">
				</a>
				<h3>Sony WH-1000XM-5 Headphones</h3>
				<div class="rating">
					<span class="rating-stars">★★★★★</span>
					<span class="rating-score">4.9</span>
					<span class="rating-count">(340)</span>
				</div>
				<p class="price">RM 1,200.00</p>
				<a href="productDetail.php?id=13" class="btn-view-details">
					<svg viewBox="0 0 24 24"><path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
					View Details
				</a>
			</div>

			<div class="Product Card">
				<a href="productDetail.php?id=14" class="img-link">
					<img src="..\Image\Airpods3_Pro.jpg" alt="Airpods Pro 3">
				</a>
				<h3>Airpods Pro 3</h3>
				<div class="rating">
					<span class="rating-stars">★★★★☆</span>
					<span class="rating-score">4.6</span>
					<span class="rating-count">(92)</span>
				</div>
				<p class="price">RM 1,300.00</p>
				<a href="productDetail.php?id=14" class="btn-view-details">
					<svg viewBox="0 0 24 24"><path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
					View Details
				</a>
			</div>

			<div class="Product Card">
				<a href="productDetail.php?id=15" class="img-link">
					<img src="..\Image\Earpods_TypeC.jpg" alt="Earpods Type-C">
				</a>
				<h3>Earpods Type-C</h3>
				<div class="rating">
					<span class="rating-stars">★★★★☆</span>
					<span class="rating-score">4.5</span>
					<span class="rating-count">(450)</span>
				</div>
				<p class="price">RM 70.00</p>
				<a href="productDetail.php?id=15" class="btn-view-details">
					<svg viewBox="0 0 24 24"><path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
					View Details
				</a>
			</div>
			<div class="Product Card">
				<a href="productDetail.php?id=38" class="img-link">
					<img src="..\Image\logitechMX_master3.jpg" alt="Logitech Wireless Mouse MX Master 3">
				</a>
				<h3>Logitech Wireless Mouse MX Master 3</h3>
				<div class="rating">
					<span class="rating-stars">★★★★★</span>
					<span class="rating-score">4.9</span>
					<span class="rating-count">(380)</span>
				</div>
				<p class="price">RM 400.00</p>
				<a href="productDetail.php?id=38" class="btn-view-details">
					<svg viewBox="0 0 24 24"><path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
					View Details
				</a>
			</div>

			<div class="Product Card">
				<a href="productDetail.php?id=39" class="img-link">
					<img src="..\Image\CamonM50.jpg" alt="Canon EOS M50 Mirrorless Camera">
				</a>
				<h3>Canon EOS M50 Mirrorless Camera</h3>
				<div class="rating">
					<span class="rating-stars">★★★★☆</span>
					<span class="rating-score">4.7</span>
					<span class="rating-count">(124)</span>
				</div>
				<p class="price">RM 2,500.00</p>
				<a href="productDetail.php?id=39" class="btn-view-details">
					<svg viewBox="0 0 24 24"><path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
					View Details
				</a>
			</div> 

			<div class="Product Card">
				<a href="productDetail.php?id=40" class="img-link">
					<img src="..\Image\JBL_flip.jpg" alt="JBL Flip 6 Portable Bluetooth Speaker">
				</a>
				<h3>JBL Flip 6 Portable Bluetooth Speaker</h3>
				<div class="rating">
					<span class="rating-stars">★★★★★</span>
					<span class="rating-score">4.8</span>
					<span class="rating-count">(215)</span>
				</div>
				<p class="price">RM 450.00</p>
				<a href="productDetail.php?id=40" class="btn-view-details">
					<svg viewBox="0 0 24 24"><path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
					View Details
				</a>
			</div>
			
			<section class="Container">
				<h2>Recommended Product</h2>
				<div class="Product Card">
					<a href="productDetail.php?id=41" class="img-link">
						<img src="..\Image\Apple Watch Series 11.jpg" alt="Apple Watch Series 11">
					</a>
					<h3>Apple Watch Series 11</h3>
					<div class="rating">
						<span class="rating-stars">★★★★★</span>
						<span class="rating-score">4.8</span>
						<span class="rating-count">(160)</span>
					</div>
					<p class="price">RM 900.00</p>
					<a href="productDetail.php?id=41" class="btn-view-details">
						<svg viewBox="0 0 24 24"><path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
						View Details
					</a>
				</div>

				<div class="Product Card">
					<a href="productDetail.php?id=42" class="img-link">
						<img src="..\Image\Marshall Emberton III.jpg" alt="Marshall Acton III Bluetooth">
					</a>
					<h3>Marshall Acton III Bluetooth</h3>
					<div class="rating">
						<span class="rating-stars">★★★★★</span>
						<span class="rating-score">4.9</span>
						<span class="rating-count">(88)</span>
					</div>
					<p class="price">RM 1,500.00</p>
					<a href="productDetail.php?id=42" class="btn-view-details">
						<svg viewBox="0 0 24 24"><path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
						View Details
					</a>
				</div>

				<div class="Product Card">
					<a href="productDetail.php?id=43" class="img-link">
						<img src="..\Image\Apple HomePod Mini.jpg" alt="Apple HomePod Mini">
					</a>
					<h3>Apple HomePod Mini</h3>
					<div class="rating">
						<span class="rating-stars">★★★★☆</span>
						<span class="rating-score">4.7</span>
						<span class="rating-count">(140)</span>
					</div>
					<p class="price">RM 500.00</p>
					<a href="productDetail.php?id=43" class="btn-view-details">
						<svg viewBox="0 0 24 24"><path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
						View Details
					</a>
				</div>

				<div class="Product Card">
					<a href="productDetail.php?id=44" class="img-link">
						<img src="..\Image\Canon EOS R50.jpg" alt="Canon EOS R50">
					</a>
					<h3>Canon EOS R50</h3>
					<div class="rating">
						<span class="rating-stars">★★★★★</span>
						<span class="rating-score">4.8</span>
						<span class="rating-count">(95)</span>
					</div>
					<p class="price">RM 3,500.00</p>
					<a href="productDetail.php?id=44" class="btn-view-details">
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