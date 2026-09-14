<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uecs2094_assignment";
//connect product database
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CeX Gadget Shop - Home</title>
    <link rel="stylesheet" href="../style.css">
</head>

<?php include('../includes/pageHeader.php'); ?>

<body>
    <!-- Promotional Hero Banner -->
    <div class="hero-banner">
        <div class="hero-content">
            <span class="hero-badge">Featured Flagship</span>
            <h1>Upgrade to the Future with <span>iPhone 17 Pro Max</span></h1>
            <p>Experience peak performance, pro-grade camera systems, and unbeatable prices right here at CeX.</p>
            <a href="productDetail.php?id=1" class="hero-btn">Shop Now</a>
        </div>
    </div>

    <!-- Trust & Quality Bar -->
    <div class="trust-bar">
        <div class="trust-item">
            <div class="trust-icon">🛡️</div>
            <div class="trust-text">
                <h4>24-Month Warranty</h4>
                <p>Fully tested & certified</p>
            </div>
        </div>
        <div class="trust-item">
            <div class="trust-icon">🚚</div>
            <div class="trust-text">
                <h4>Fast Local Delivery</h4>
                <p>Secure doorstep shipping</p>
            </div>
        </div>
        <div class="trust-item">
            <div class="trust-icon">⭐</div>
            <div class="trust-text">
                <h4>Trusted Quality</h4>
                <p>Top-rated tech marketplace</p>
            </div>
        </div>
    </div>

    <!-- Recommended Products Section -->
    <div class="Container">
        <h2>Recommended Product</h2>
        
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
    </div>

    <!-- New Arrivals Section -->
    <div class="Container">
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
    </div>

    <!-- CeX Recommended Section -->
    <div class="Container">
        <h2>Cex Recommended</h2>
        
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
    </div>
</body>

<?php include('../includes/pageFooter.php'); ?>

</html>