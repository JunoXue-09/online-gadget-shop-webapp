<header class="main-header">
	<script src="searchFunction.js"></script>
	<script src="../Pages/menu.js" ></script>
    <div class="header-top">
        <div class="menu-btn" id="menuBtn">
            <div class="burger-icon"></div>
            <span>Menu</span>
        </div>

    <img src="../Image/CeXLogo.jpg" alt="CeX Logo" class="logo">

        <div class="search-container">
            <input type="text" id="searchInput" placeholder="What do you want to buy?">
			<button class="search-btn" onclick="searchProduct()">Search</button>
        </div>

        <div class="user-actions">
            <?php if (isset($_SESSION['username'])): ?>
                <span class="user-greeting">Hi, <?php echo htmlspecialchars($_SESSION['username']); ?></span>
                
                <!-- Show Admin Panel link if user is an admin -->
				<?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin'): ?>
                    <a href="../Admin/admin.php" class="action-item admin-badge">
						<svg style="width: 14px; height: 14px; fill: currentColor;" viewBox="0 0 24 24"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm0 10.99h7c-.53 4.12-3.28 7.79-7 8.94V12H5V6.3l7-3.11v8.8z"/></svg>
						Admin Dashboard
					</a>
                <?php endif; ?>
                <a href="logout.php" class="btn-logout">Logout</a>
            <?php else: ?>
                <a href="login.php" class="action-item">Login</a>
            <?php endif; ?>
            <a href="shoppingCart.php" class="action-item">Basket<?php echo !empty($_SESSION['cart']) ? ' (' . count($_SESSION['cart']) . ')' : ''; ?></a>
        </div>
    </div>

    <nav class="header-nav">
        <a href="index.php">Home</a>
        <a href="gamingList.php">Gaming</a>
        <a href="phoneList.php">Phones</a>
        <a href="computerList.php">Computing</a>
        <a href="accessoriesList.php">Accessories</a>
		<a href="profile.php" class="nav-link">My Profile / Orders</a>
    </nav>
</header>

<div class="side-menu-overlay" id="sideMenuOverlay"></div>
<aside class="side-menu" id="sideMenu">
    <div class="side-menu-header">
        <h2 class="side-menu-section-title">MENU</h2>
        <button class="side-menu-close" id="sideMenuClose" aria-label="Close menu">&times;</button>
    </div>
    <nav class="side-menu-nav">
		<h3 class="side-menu-section-title">BUY</h3>
        <a href="index.php">Home</a>
        <a href="gamingList.php">Gaming</a>
        <a href="phoneList.php">Phones</a>
        <a href="computerList.php">Computing</a>
        <a href="accessoriesList.php">Accessories</a>
		<a href="profile.php" class="nav-link">My Profile / Orders</a>
		
		<?php 
			// Show management section inside the side menu if the logged-in user has the admin role
			if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin'): 
		?>
			<h3 class="side-menu-section-title">MANAGEMENT</h3>
			<a href="../Admin/admin.php">Manage Products</a>
			<a href="../Admin/manageOrders.php">Manage Orders</a>
			<a href="../Admin/manageUsers.php">Manage Users</a>
		<?php endif; ?>
		
		<h3 class="side-menu-section-title">GET HELP</h3>
		<a href="privacyPolicy.php">Privacy Policy</a>
        <a href="termOfService.php">Terms of Service</a>
        <a href="contactUs.php">Contact Us</a>
    </nav>
</aside>