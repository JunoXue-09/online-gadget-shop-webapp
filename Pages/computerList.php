<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computing - CeX Gadget Shop</title>
    <link rel="stylesheet" href="../style.css">
</head>

<?php include('../includes/pageHeader.php'); ?>

<body>
	<div class="contentWrapper">
		<aside class="sidebar">
			<a href="../Category/HP.php">
				<div class="Category-Card">
					<img src="../Image/hp.jpg" alt="Category Image">
					<div class="overlay">	
						<h3>HP</h3>
					</div>
				</div>
			</a>
			<a href="../Category/Asus.php">
				<div class="Category-Card">
					<img src="../Image/asus.jpg" alt="Category Image">
					<div class="overlay">	
						<h3>Asus</h3>
					</div>
				</div>
			</a>
			<a href="../Category/Dell.php">
				<div class="Category-Card">
					<img src="../Image/dell.jpg" alt="Category Image">
					<div class="overlay">
						<h3>Dell</h3>
					</div>
				</div>
			</a>
			<a href="../Category/MacBook.php">
				<div class="Category-Card">
					<img src="../Image/macbook.jpg" alt="Category Image">
					<div class="overlay">	
						<h3>MacBook</h3>
					</div>
				</div>
			</a>
			<a href="../Category/Lenovo.php">
				<div class="Category-Card">
					<img src="../Image/lenovo.jpg" alt="Category Image">
					<div class="overlay">	
						<h3>Lenovo</h3>
					</div>
				</div>
			</a>
		</aside>
		
		
		<main class="Container">
			<h2>New Arrivals</h2>
			<div class="Product Card">
				<a href="productDetail.php?id=3" class="img-link">
					<img src="..\Image\MacBook Pro M5 14-Inch.jpg" alt="MacBook Pro M5 14-Inch 512GB">
				</a>
				<h3>MacBook Pro M5 14-Inch 512GB</h3>
				<div class="rating">
					<span class="rating-stars">★★★★★</span>
					<span class="rating-score">4.9</span>
					<span class="rating-count">(310)</span>
				</div>
				<p class="price">RM 7,600.00</p>
				<a href="productDetail.php?id=3" class="btn-view-details">
					<svg viewBox="0 0 24 24"><path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
					View Details
				</a>
			</div>

			<div class="Product Card">
				<a href="productDetail.php?id=10" class="img-link">
					<img src="..\Image\Razer Blade 16 17.3-Inch.jpg" alt="Razer Blade 16 17.3-Inch">
				</a>
				<h3>Razer Blade 16 17.3-Inch</h3>
				<div class="rating">
					<span class="rating-stars">★★★★★</span>
					<span class="rating-score">4.9</span>
					<span class="rating-count">(78)</span>
				</div>
				<p class="price">RM 8,500.00</p>
				<a href="productDetail.php?id=10" class="btn-view-details">
					<svg viewBox="0 0 24 24"><path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
					View Details
				</a>
			</div>

			<div class="Product Card">
				<a href="productDetail.php?id=11" class="img-link">
					<img src="..\Image\DellXPS13Plus13.4-Inch.jpg" alt="Dell XPS 13 Plus 13.4-Inch">
				</a>
				<h3>Dell XPS 13 Plus 13.4-Inch</h3>
				<div class="rating">
					<span class="rating-stars">★★★★☆</span>
					<span class="rating-score">4.7</span>
					<span class="rating-count">(88)</span>
				</div>
				<p class="price">RM 4,000.00</p>
				<a href="productDetail.php?id=11" class="btn-view-details">
					<svg viewBox="0 0 24 24"><path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
					View Details
				</a>
			</div>
			<div class="Product Card">
				<a href="productDetail.php?id=22" class="img-link">
					<img src="..\Image\HP OMEN 16.jpg" alt="HP Omen 15 32GB+512GB">
				</a>
				<h3>HP Omen 15 32GB+512GB</h3>
				<div class="rating">
					<span class="rating-stars">★★★★☆</span>
					<span class="rating-score">4.7</span>
					<span class="rating-count">(95)</span>
				</div>
				<p class="price">RM 5,800.00</p>
				<a href="productDetail.php?id=22" class="btn-view-details">
					<svg viewBox="0 0 24 24"><path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
					View Details
				</a>
			</div>

			<div class="Product Card">
				<a href="productDetail.php?id=23" class="img-link">
					<img src="..\Image\ASUS ROG Zephyrus G16.jpg" alt="Asus ROG Zephyrus G14 32GB+1TB RTX5080">
				</a>
				<h3>Asus ROG Zephyrus G14 32GB+1TB RTX5080</h3>
				<div class="rating">
					<span class="rating-stars">★★★★★</span>
					<span class="rating-score">4.9</span>
					<span class="rating-count">(112)</span>
				</div>
				<p class="price">RM 7,000.00</p>
				<a href="productDetail.php?id=23" class="btn-view-details">
					<svg viewBox="0 0 24 24"><path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
					View Details
				</a>
			</div>

			<div class="Product Card">
				<a href="productDetail.php?id=24" class="img-link">
					<img src="..\Image\HP Spectre x360 16.jpg" alt="HP Spectre x360 16-Inch 1TB">
				</a>
				<h3>HP Spectre x360 16-Inch 1TB</h3>
				<div class="rating">
					<span class="rating-stars">★★★★★</span>
					<span class="rating-score">4.8</span>
					<span class="rating-count">(64)</span>
				</div>
				<p class="price">RM 7,200.00</p>
				<a href="productDetail.php?id=24" class="btn-view-details">
					<svg viewBox="0 0 24 24"><path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
					View Details
				</a>
			</div>

			<div class="Product Card">
				<a href="productDetail.php?id=25" class="img-link">
					<img src="..\Image\ASUS ROG Strix G18.jpg" alt="Asus Strix G15 16GB+1TB RTX4050">
				</a>
				<h3>Asus Strix G15 16GB+1TB RTX4050</h3>
				<div class="rating">
					<span class="rating-stars">★★★★☆</span>
					<span class="rating-score">4.6</span>
					<span class="rating-count">(82)</span>
				</div>
				<p class="price">RM 4,500.00</p>
				<a href="productDetail.php?id=25" class="btn-view-details">
					<svg viewBox="0 0 24 24"><path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
					View Details
				</a>
			</div>
			
			<section class="Container">
				<h2>Recommended Product</h2>
				<div class="Product Card">
					<a href="productDetail.php?id=26" class="img-link">
						<img src="..\Image\Lenovo Legion 5i.jpg" alt="Lenovo Legion 5i Pro 16-Inch i7 12700H RTX4060 16GB+1TB">
					</a>
					<h3>Lenovo Legion 5i Pro 16-Inch i7 12700H RTX4060 16GB+1TB</h3>
					<div class="rating">
						<span class="rating-stars">★★★★★</span>
						<span class="rating-score">4.9</span>
						<span class="rating-count">(135)</span>
					</div>
					<p class="price">RM 6,000.00</p>
					<a href="productDetail.php?id=26" class="btn-view-details">
						<svg viewBox="0 0 24 24"><path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
						View Details
					</a>
				</div>

				<div class="Product Card">
					<a href="productDetail.php?id=27" class="img-link">
						<img src="..\Image\MacBook Air 13-inch (M4).jpg" alt="MacBook Air M2 13.6-Inch 256GB">
					</a>
					<h3>MacBook Air M2 13.6-Inch 256GB</h3>
					<div class="rating">
						<span class="rating-stars">★★★★★</span>
						<span class="rating-score">4.8</span>
						<span class="rating-count">(220)</span>
					</div>
					<p class="price">RM 4,500.00</p>
					<a href="productDetail.php?id=27" class="btn-view-details">
						<svg viewBox="0 0 24 24"><path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
						View Details
					</a>
				</div>

				<div class="Product Card">
					<a href="productDetail.php?id=28" class="img-link">
						<img src="..\Image\Lenovo ThinkPad X1 Carbon Gen 13.jpg" alt="Lenovo ThinkPad X1 Carbon Gen 11 i7 1365U 16GB+512GB">
					</a>
					<h3>Lenovo ThinkPad X1 Carbon Gen 11 i7 1365U 16GB+512GB</h3>
					<div class="rating">
						<span class="rating-stars">★★★★★</span>
						<span class="rating-score">4.9</span>
						<span class="rating-count">(104)</span>
					</div>
					<p class="price">RM 7,500.00</p>
					<a href="productDetail.php?id=28" class="btn-view-details">
						<svg viewBox="0 0 24 24"><path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
						View Details
					</a>
				</div>

				<div class="Product Card">
					<a href="productDetail.php?id=29" class="img-link">
						<img src="..\Image\Dell Inspiron 14 Plus.jpg" alt="Dell Inspiron 14 2-in-1 i5 1235U 16GB+512GB">
					</a>
					<h3>Dell Inspiron 14 2-in-1 i5 1235U 16GB+512GB</h3>
					<div class="rating">
						<span class="rating-stars">★★★★☆</span>
						<span class="rating-score">4.6</span>
						<span class="rating-count">(76)</span>
					</div>
					<p class="price">RM 3,200.00</p>
					<a href="productDetail.php?id=29" class="btn-view-details">
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