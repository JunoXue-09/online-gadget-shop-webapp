<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - CeX Gadget Shop</title>
    <link rel="stylesheet" href="../style.css">
</head>

<?php include('../includes/pageHeader.php'); ?>

<body>
    <h2 class = "section-title">Contact Us</h2>
	<div class="Container contact-wrapper">
        <form action="#" method="post" class="contact-form">
		<div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>
		</div>
		
		<div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>
		</div>
		
		<div class="form-group">
            <label for="message">Message:</label><br>
            <textarea id="message" name="message" rows="5" required></textarea><br><br>
		</div>
		
            <input type="submit" value="Submit" class="btn-submit">
        </form>
    </div>

    <h2 class="section-title">Branch Available</h2>
    <div class="branch-list">
        <div class="branch-card">
            <h3>CeX Megamall MidVally</h3>
            <p>Unit S-009, Mid Valley City, Mid Valley City, 59200 Kuala Lumpur</p>
            <p>Phone: 09-3435115</p>
            <p>Email: CeXMidVally@gmail.com</p>
        </div>
        <div class="branch-card">
            <h3>CeX Lot 10</h3>
            <p>Lot 10, Bukit Bintang Rd, Bukit Bintang, 55100 Kuala Lumpur</p>
            <p>Phone: 03-89234567</p>
            <p>Email: CeXLot10@gmail.com</p>
        </div>
        <div class="branch-card">
            <h3>CeX Paradigm Mall</h3>
            <p>Unit 1, F-28, Paradigm Mall, Level 1, 47301 Petaling Jaya, Selangor</p>
            <p>Phone: 03-99876543</p>
            <p>Email: CeXParadigmMall@gmail.com</p>
        </div>
        <div class="branch-card">
            <h3>CeX Null Empire</h3>
            <p>Unit F08A & F09, Nu Empire, 47500 Subang Jaya, Selangor</p>
            <p>Phone: 04-1234567</p>
            <p>Email: CeXNullEmpire@gmail.com</p>
        </div>
        <div class="branch-card">
            <h3>CeX Sunway Pyramid</h3>
            <p>Level F1, units 20 and 21 of Sunway Pyramid, Selangor</p>
            <p>Phone: 04-7654321</p>
            <p>Email: CeXSunwayPyramid@gmail.com</p>
        </div>
        <div class="branch-card">
            <h3>CeX One Utama</h3>
            <p>Lot S322, 1st Floor, One Utama Shopping Centre, 47800 Petaling Jaya, Selangor</p>
            <p>Phone: 03-56789012</p>
            <p>Email: CeXOneUtame@gmail.com</p>
        </div>
        <div class="branch-card">
            <h3>CeX IOI City Mall</h3>
            <p>Lot F-021, Level 1, IOI City Mall, 62502 Putrajaya</p>
            <p>Phone: 06-3456789</p>
            <p>Email: CeXIOICityMall@gmail.com</p>
        </div>
    </div>
</body>

<?php include('../includes/pageFooter.php'); ?>

</html>