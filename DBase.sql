CREATE DATABASE IF NOT EXISTS uecs2094_assignment CHARACTER SET utf8 COLLATE utf8_general_ci;

USE uecs2094_assignment;

CREATE TABLE IF NOT EXISTS product (
    id INT AUTO_INCREMENT PRIMARY KEY,
    productName VARCHAR(255) NOT NULL,
    productPrice DECIMAL(10,2) NOT NULL,
    productDescription TEXT,
    productImage VARCHAR(255),
	rating_score DECIMAL(2, 1) NOT NULL DEFAULT 0.0,
    rating_count INT NOT NULL DEFAULT 0,
    stars_html VARCHAR(50) DEFAULT '',
    category VARCHAR(100),
    stock INT NOT NULL DEFAULT 0
);

CREATE TABLE IF NOT EXISTS userInfo (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
	role VARCHAR(50) DEFAULT 'customer' NOT NULL
);

CREATE TABLE IF NOT EXISTS purchase (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    productName VARCHAR(255),
    productPrice DECIMAL(10,2),
    quantity INT,
    subtotal DECIMAL(10,2),

    billingName VARCHAR(255),
    billingEmail VARCHAR(255),
    billingAddress VARCHAR(255),
    billingCity VARCHAR(100),
    billingState VARCHAR(100),

    status CHAR(1),
    purchased DATETIME
);

INSERT INTO userInfo (username, password, email, role) 
VALUES ('manager', '12345', 'admin@halo.com', 'admin');

INSERT INTO product
(id, productName, productPrice, productDescription, productImage, rating_score, rating_count, stars_html, category, stock)
VALUES
(1, 'Iphone 17 Pro Max 256GB', 6000.00,
 'Apple iPhone 17 Pro Max with 256GB storage, A19 Pro chip, and advanced camera system.',
 '../Image/iphone17pm.jpg', 4.9, 140, '★★★★★', 'Apple', 10),

(2, 'Iphone 16 512GB', 5000.00,
 'Apple iPhone 16 with 512GB storage, dynamic island, and powerful A18 bionic chip.',
 '../Image/iphone16.jpg', 4.7, 95, '★★★★★', 'Apple', 10),

(3, 'MacBook Pro M5 14-Inch 512GB', 7600.00,
 'Apple MacBook Pro M5, 14-inch Liquid Retina XDR display, 512GB ultra-fast SSD storage.',
 '../Image/MacBook Pro M5 14-Inch.jpg', 4.9, 50, '★★★★★', 'MacBook', 8),

(4, 'AirPods 4 with Noice Cancellation', 650.00,
 'Apple AirPods 4 with Active Noise Cancellation, personalized spatial audio, and USB-C case.',
 '../Image/airpods4_NoiceCancelation.jpg', 4.6, 210, '★★★★☆', 'Wireless Earphones', 20),

(5, 'Nintendo Switch 2 64GB', 1500.00,
 'Nintendo Switch 2 next-generation gaming console with 64GB storage and enhanced dock.',
 '../Image/nintendoSwitch2.jpg', 4.8, 180, '★★★★★', 'Nintendo', 12),

(6, 'Samsung Galaxy S24 Ultra 1TB', 5500.00,
 'Samsung Galaxy S24 Ultra with 1TB storage, Titanium frame, 200MP camera, and S-Pen.',
 '../Image/SamsungS24ultra.jpg', 4.8, 130, '★★★★★', 'Samsung', 10),

(7, 'PlayStation 5 1TB', 2750.00,
 'Sony PlayStation 5 console with 1TB custom high-speed SSD and DualSense controller.',
 '../Image/PS5.jpg', 4.9, 320, '★★★★★', 'PlayStation', 10),

(8, 'XBox Series X 1TB', 2300.00,
 'Microsoft XBox Series X 1TB gaming console with 4K gaming and 12 teraflops GPU power.',
 '../Image/XboxX.jpg', 4.7, 110, '★★★★★', 'XBox', 8),

(9, 'Google Pixel 10 Pro 256GB', 4000.00,
 'Google Pixel 10 Pro flagship smartphone with Tensor processor and pro triple camera setup.',
 '../Image/GooglePixel10Pro.jpg', 4.5, 45, '★★★★☆', 'OtherLaptop', 10),

(10, 'Razer Blade 16 17.3-Inch', 8500.00,
 'Razer Blade 16 gaming laptop with Intel i7, NVIDIA RTX graphics, 32GB RAM and 1TB SSD.',
 '../Image/Razer Blade 16 17.3-Inch.jpg', 4.6, 30, '★★★★☆', 'OtherLaptop', 5),

(11, 'Dell XPS 13 Plus 13.4-Inch', 4000.00,
 'Dell XPS 13 Plus laptop with Intel i7 1250U, 16GB RAM and 512GB NVMe SSD.',
 '../Image/DellXPS13Plus13.4-Inch.jpg', 4.4, 40, '★★★★☆', 'Dell', 7),

(12, 'Apple Watch Series 9 GPS 41mm', 1600.00,
 'Apple Watch Series 9 smartwatch with GPS, S9 SiP chip, double-tap gesture, and health sensors.',
 '../Image/AppleWatchSeries9 GPS.jpg', 4.7, 85, '★★★★★', 'Watch', 15),

(13, 'Sony WH-1000XM-5 Wireless Headphones', 1200.00,
 'Sony WH-1000XM5 industry-leading noise cancelling wireless over-ear headphones.',
 '../Image/SonyWH10000XM-5.jpg', 4.8, 160, '★★★★★', 'Wireless Earphones', 12),

(14, 'Airpods Pro 3', 1300.00,
 'Apple AirPods Pro 3 with next-generation Active Noise Cancellation and Adaptive Audio.',
 '../Image/Airpods3_Pro.jpg', 4.8, 115, '★★★★★', 'Wireless Earphones', 14),

(15, 'Earpods Type-C', 70.00,
 'Apple EarPods with USB-C connector, high-quality audio, and integrated microphone.',
 '../Image/Earpods_TypeC.jpg', 4.3, 90, '★★★★☆', 'Wired Earphones', 30),

(16, 'Huawei Mate 80 256GB', 4200.00,
 'Huawei Mate 80 with Kunlun glass, XMAGE imaging system, and ultra-durable battery life.',
 '../Image/HuaweiMate80.jpg', 4.6, 50, '★★★★☆', 'Huawei', 10),

(17, 'Xiaomi 17 Pro Max 235GB', 3800.00,
 'Xiaomi 17 Pro Max with Leica professional optical lens and Snapdragon flagship processor.',
 '../Image/Xioami17PM.jpg', 4.5, 65, '★★★★☆', 'Xiaomi', 10),

(18, 'OPPO Find X6 Pro 512GB', 4500.00,
 'OPPO Find X6 Pro Hasselblad camera flagship smartphone with 512GB storage and 100W SuperVOOC.',
 '../Image/Oppo Find X6 Pro 512GB.jpg', 4.6, 55, '★★★★☆', 'Oppo', 10),

(19, 'Samsung Galaxy Z Fold5 1TB', 7000.00,
 'Samsung Galaxy Z Fold5 foldable AMOLED smartphone with 1TB storage and multi-window multitasking.',
 '../Image/Samsung Galaxy Z Fold 8.jpg', 4.6, 40, '★★★★☆', 'Samsung', 8),

(20, 'Iphone 16 Pro 256GB', 5200.00,
 'Apple iPhone 16 Pro with grade 5 titanium design, A18 Pro chip, and Camera Control button.',
 '../Image/iPhone 16 Pro.jpg', 4.8, 125, '★★★★★', 'Apple', 10),

(21, 'Sony Xperia 1 VII', 4000.00,
 'Sony Xperia 1 VII flagship smartphone with 4K HDR OLED 120Hz display and Zeiss optics.',
 '../Image/Sony Xperia 1 VII.jpg', 4.5, 35, '★★★★☆', 'Camera', 10),

(22, 'HP Omen 15 32GB+512GB', 5800.00,
 'HP OMEN high performance gaming laptop with 32GB RAM, 512GB NVMe SSD, and Tempest cooling.',
 '../Image/HP OMEN 16.jpg', 4.5, 45, '★★★★☆', 'HP', 6),

(23, 'Asus ROG Zephyrus G14 32GB+1TB RTX5080', 7000.00,
 'ASUS ROG Zephyrus G14 ultra-slim gaming laptop with ROG Nebula OLED display and RTX graphics.',
 '../Image/ASUS ROG Zephyrus G16.jpg', 4.8, 60, '★★★★★', 'Asus', 5),

(24, 'HP Spectre x360 16-Inch 1TB', 7200.00,
 'HP Spectre x360 16-inch 2-in-1 convertible laptop with OLED touchscreen, Intel Core Ultra and 1TB storage.',
 '../Image/HP Spectre x360 16.jpg', 4.7, 50, '★★★★★', 'HP', 5),

(25, 'Asus Strix G15 16GB+1TB RTX4050', 4500.00,
 'ASUS ROG Strix G15 high-refresh esports gaming laptop with 16GB RAM and 1TB fast SSD.',
 '../Image/ASUS ROG Strix G18.jpg', 4.6, 70, '★★★★☆', 'Asus', 8),

(26, 'Lenovo Legion 5i Pro 16-Inch i7 12700H RTX4060 16GB+1TB', 6000.00,
 'Lenovo Legion 5i Pro 16-inch WQXGA gaming laptop with Intel i7 12700H, RTX 4060, 16GB RAM and 1TB SSD.',
 '../Image/Lenovo Legion 5i.jpg', 4.7, 80, '★★★★★', 'Lenovo', 6),

(27, 'MacBook Air M2 13.6-Inch 256GB', 4500.00,
 'Apple MacBook Air with M2 chip, 13.6-inch Liquid Retina display, MagSafe charging and 256GB SSD.',
 '../Image/MacBook Air 13-inch (M4).jpg', 4.8, 140, '★★★★★', 'MacBook', 10),

(28, 'Lenovo ThinkPad X1 Carbon Gen 11 i7 1365U 16GB+512GB', 7500.00,
 'Lenovo ThinkPad X1 Carbon Gen 11 ultra-lightweight carbon fiber business laptop with Intel i7 and 16GB RAM.',
 '../Image/Lenovo ThinkPad X1 Carbon Gen 13.jpg', 4.8, 45, '★★★★★', 'Lenovo', 7),

(29, 'Dell Inspiron 14 2-in-1 i5 1235U 16GB+512GB', 3200.00,
 'Dell Inspiron 14 2-in-1 flexible touchscreen laptop with Intel Core i5, 16GB RAM and 512GB SSD.',
 '../Image/Dell Inspiron 14 Plus.jpg', 4.4, 55, '★★★★☆', 'Dell', 8),

(30, 'Nintendo Switch OLED', 1100.00,
 'Nintendo Switch OLED Model with vibrant 7-inch OLED screen, wide adjustable stand, and enhanced audio.',
 '../Image/Nintendo Switch OLED.jpg', 4.8, 230, '★★★★★', 'Nintendo', 15),

(31, 'PlayStation 4 512GB', 1180.00,
 'Sony PlayStation 4 gaming console with 512GB storage and DUALSHOCK 4 wireless controller.',
 '../Image/PlayStation 4 512GB.jpg', 4.5, 300, '★★★★☆', 'PlayStation', 10),

(32, 'XBox X Controller', 290.00,
 'Microsoft Xbox Wireless Controller with textured grip, hybrid D-pad, and seamless cross-device pairing.',
 '../Image/XBox X Controller.jpg', 4.7, 190, '★★★★★', 'XBox', 25),

(33, 'Nintendo Switch Pro Controller', 250.00,
 'Nintendo Switch Pro Controller with premium grips, motion controls, HD rumble, and built-in amiibo NFC.',
 '../Image/Nintendo Switch Pro Controller.jpg', 4.8, 150, '★★★★★', 'Nintendo', 20),

(34, 'XBox One Controller', 240.00,
 'Xbox Wireless Controller with Bluetooth technology for console, PC, tablet, and mobile gaming.',
 '../Image/XBox One Controller.jpg', 4.5, 120, '★★★★☆', 'XBox', 20),

(35, 'Nintendo Switch Joy-Con', 200.00,
 'Nintendo Switch Joy-Con wireless controller pair with wrist straps and independent motion sensors.',
 '../Image/Nintendo Switch Joy-Con.jpg', 4.4, 110, '★★★★☆', 'Nintendo', 20),

(36, 'PlayStation 4 Pro 1TB', 1600.00,
 'Sony PlayStation 4 Pro 1TB gaming console with dynamic 4K gaming and HDR entertainment.',
 '../Image/PlayStation 4 Pro 1TB.jpg', 4.6, 140, '★★★★☆', 'PlayStation', 8),

(37, 'XBox Series S 512GB', 1400.00,
 'Microsoft Xbox Series S all-digital next-generation console with 512GB custom NVMe SSD.',
 '../Image/XBox Series S 512GB.jpg', 4.7, 175, '★★★★★', 'XBox', 10),

(38, 'Logitech Wireless Mouse MX Master 3', 400.00,
 'Logitech MX Master 3 advanced wireless mouse with MagSpeed electromagnetic scrolling and ergonomic design.',
 '../Image/logitechMX_master3.jpg', 4.8, 220, '★★★★★', 'Computer Accessories', 25),

(39, 'Canon EOS M50 Mirrorless Camera', 2500.00,
 'Canon EOS M50 mirrorless digital camera with 4K UHD video recording, Dual Pixel CMOS AF, and EF-M 15-45mm lens.',
 '../Image/CamonM50.jpg', 4.7, 75, '★★★★★', 'Camera', 8),

(40, 'JBL Flip 6 Portable Bluetooth Speaker', 450.00,
 'JBL Flip 6 portable waterproof and dustproof IP67 Bluetooth speaker with powerful 2-way sound.',
 '../Image/JBL_flip.jpg', 4.8, 180, '★★★★★', 'Speakers', 15),

(41, 'Apple Watch Series 11', 900.00,
 'Apple Watch smartwatch with advanced fitness tracking, ECG, heart rate monitoring, and Retina OLED display.',
 '../Image/Apple Watch Series 11.jpg', 4.7, 95, '★★★★★', 'Watch', 12),

(42, 'Marshall Acton III Bluetooth', 1500.00,
 'Marshall Acton III Bluetooth home speaker with wide stereo soundstage and classic vintage design.',
 '../Image/Marshall Emberton III.jpg', 4.8, 65, '★★★★★', 'Speakers', 10),

(43, 'Apple HomePod Mini', 500.00,
 'Apple HomePod mini compact smart speaker with 360-degree acoustic waveguide, Siri, and smart home hub.',
 '../Image/Apple HomePod Mini.jpg', 4.7, 130, '★★★★★', 'Speakers', 15),

(44, 'Canon EOS R50', 3500.00,
 'Canon EOS R50 compact mirrorless camera with 24.2MP APS-C sensor, 4K 30p uncropped video, and Movie for Close-up Demos mode.',
 '../Image/Canon EOS R50.jpg', 4.8, 50, '★★★★★', 'Camera', 7),

(45, 'iPhone 17', 4499.00,
 'High-quality iPhone 17 with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/iPhone 17.jpg', 4.8, 100, '★★★★★', 'Apple', 10),

(46, 'iPhone 17 Air', 4999.00,
 'High-quality iPhone 17 Air with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/iPhone 17 Air.jpg', 4.7, 80, '★★★★★', 'Apple', 10),

(47, 'iPhone 17 Pro', 5999.00,
 'High-quality iPhone 17 Pro with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/iPhone 17 Pro.jpg', 4.9, 150, '★★★★★', 'Apple', 10),

(48, 'Iphone 17 Pro Max', 6499.00,
 'High-quality Iphone 17 Pro Max with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/iphone17pm.jpg', 4.9, 190, '★★★★★', 'Apple', 10),

(49, 'iPhone 13 mini', 2299.00,
 'High-quality iPhone 13 mini with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/iPhone 13 mini.jpg', 4.6, 90, '★★★★☆', 'Apple', 10),

(50, 'iPhone 13', 2499.00,
 'High-quality iPhone 13 with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/iPhone 13.jpg', 4.7, 210, '★★★★★', 'Apple', 10),

(51, 'iPhone 14', 2999.00,
 'High-quality iPhone 14 with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/iPhone 14.jpg', 4.7, 160, '★★★★★', 'Apple', 10),

(52, 'iPhone 14 Pro Max', 4599.00,
 'High-quality iPhone 14 Pro Max with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/iPhone 14 Pro Max.jpg', 4.8, 180, '★★★★★', 'Apple', 10),

(53, 'iPhone 15', 3499.00,
 'High-quality iPhone 15 with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/iPhone 15.jpg', 4.7, 130, '★★★★★', 'Apple', 10),

(54, 'iPhone 15 Plus', 4299.00,
 'High-quality iPhone 15 Plus with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/iPhone 15 Plus.jpg', 4.7, 85, '★★★★★', 'Apple', 10),

(55, 'iPhone 15 Pro', 4799.00,
 'High-quality iPhone 15 Pro with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/iPhone 15 Pro.jpg', 4.8, 140, '★★★★★', 'Apple', 10),

(56, 'iPhone 15 Pro Max', 5299.00,
 'High-quality iPhone 15 Pro Max with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/iPhone 15 Pro Max.jpg', 4.9, 200, '★★★★★', 'Apple', 10),

(57, 'iPhone 16', 3999.00,
 'High-quality iPhone 16 with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/iPhone 16.jpg', 4.7, 110, '★★★★★', 'Apple', 10),

(58, 'iPhone 16 Plus', 4699.00,
 'High-quality iPhone 16 Plus with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/iPhone 16 Plus.jpg', 4.7, 75, '★★★★★', 'Apple', 10),

(59, 'iPhone 16 Pro Max', 5999.00,
 'High-quality iPhone 16 Pro Max with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/iPhone 16 Pro Max.jpg', 4.9, 160, '★★★★★', 'Apple', 10),

(60, 'Iphone 16 Pro', 5200.00,
 'High-quality Iphone 16 Pro with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/iPhone 16 Pro.jpg', 4.8, 130, '★★★★★', 'Apple', 10),

(61, 'ASUS Zenbook S 16 (UX5606)', 8499.00,
 'High-quality ASUS Zenbook S 16 (UX5606) with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/ASUS Zenbook S 16 (UX5606).jpg', 4.7, 40, '★★★★★', 'Asus', 10),

(62, 'ASUS Zenbook 14 OLED (UX3405)', 5299.00,
 'High-quality ASUS Zenbook 14 OLED (UX3405) with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/ASUS Zenbook 14 OLED (UX3405).jpg', 4.8, 85, '★★★★★', 'Asus', 10),

(63, 'ASUS Vivobook S 15 OLED', 4299.00,
 'High-quality ASUS Vivobook S 15 OLED with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/ASUS Vivobook S 15 OLED.jpg', 4.6, 60, '★★★★☆', 'Asus', 10),

(64, 'ASUS Vivobook 15', 2999.00,
 'High-quality ASUS Vivobook 15 with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/ASUS Vivobook 15.jpg', 4.4, 95, '★★★★☆', 'Asus', 10),

(65, 'ASUS ProArt P16', 10999.00,
 'High-quality ASUS ProArt P16 with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/ASUS ProArt P16.jpg', 4.9, 30, '★★★★★', 'Asus', 10),

(66, 'ASUS ROG Zephyrus G16', 10499.00,
 'High-quality ASUS ROG Zephyrus G16 with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/ASUS ROG Zephyrus G16.jpg', 4.8, 70, '★★★★★', 'Asus', 10),

(67, 'ASUS ROG Strix G18', 11999.00,
 'High-quality ASUS ROG Strix G18 with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/ASUS ROG Strix G18.jpg', 4.9, 50, '★★★★★', 'Asus', 10),

(68, 'ASUS TUF Gaming A15', 5299.00,
 'High-quality ASUS TUF Gaming A15 with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/ASUS TUF Gaming A15.jpg', 4.6, 110, '★★★★☆', 'Asus', 10),

(69, 'ASUS ExpertBook B5', 5999.00,
 'High-quality ASUS ExpertBook B5 with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/ASUS ExpertBook B5.jpg', 4.5, 35, '★★★★☆', 'Asus', 10),

(70, 'ASUS NUC 14 Pro', 3899.00,
 'High-quality ASUS NUC 14 Pro with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/ASUS NUC 14 Pro.jpg', 4.6, 25, '★★★★☆', 'Asus', 10),

(71, 'Sony Alpha 7 V', 11999.00,
 'High-quality Sony Alpha 7 V with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Sony Alpha 7 V.jpg', 4.9, 45, '★★★★★', 'Camera', 10),

(72, 'Sony Alpha 7 IV', 9499.00,
 'High-quality Sony Alpha 7 IV with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Sony Alpha 7 IV.jpg', 4.8, 90, '★★★★★', 'Camera', 10),

(73, 'Canon EOS R6 Mark II', 9999.00,
 'High-quality Canon EOS R6 Mark II with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Canon EOS R6 Mark II.jpg', 4.8, 70, '★★★★★', 'Camera', 10),

(74, 'Nikon Z6 III', 10999.00,
 'High-quality Nikon Z6 III with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Nikon Z6 III.jpg', 4.8, 40, '★★★★★', 'Camera', 10),

(75, 'Nikon Z50 II', 4499.00,
 'High-quality Nikon Z50 II with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Nikon Z50 II.jpg', 4.6, 55, '★★★★☆', 'Camera', 10),

(76, 'Fujifilm X-T5', 7499.00,
 'High-quality Fujifilm X-T5 with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Fujifilm X-T5.jpg', 4.8, 80, '★★★★★', 'Camera', 10),

(77, 'Fujifilm X100VI', 6999.00,
 'High-quality Fujifilm X100VI with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Fujifilm X100VI.jpg', 4.9, 110, '★★★★★', 'Camera', 10),

(78, 'GoPro HERO13 Black', 1999.00,
 'High-quality GoPro HERO13 Black with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/GoPro HERO13 Black.jpg', 4.7, 130, '★★★★★', 'Camera', 10),

(79, 'DJI Osmo Pocket 3', 2299.00,
 'High-quality DJI Osmo Pocket 3 with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/DJI Osmo Pocket 3.jpg', 4.9, 160, '★★★★★', 'Camera', 10),

(80, 'Logitech MX Master 3S', 399.00,
 'High-quality Logitech MX Master 3S with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Logitech MX Master 3S.jpg', 4.8, 250, '★★★★★', 'Computer Accessories', 10),

(81, 'Logitech MX Keys S', 499.00,
 'High-quality Logitech MX Keys S with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Logitech MX Keys S.jpg', 4.7, 140, '★★★★★', 'Computer Accessories', 10),

(82, 'Razer DeathAdder V3', 349.00,
 'High-quality Razer DeathAdder V3 with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Razer DeathAdder V3.jpg', 4.7, 120, '★★★★★', 'Computer Accessories', 10),

(83, 'Razer BlackWidow V4', 699.00,
 'High-quality Razer BlackWidow V4 with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Razer BlackWidow V4.jpg', 4.6, 95, '★★★★☆', 'Computer Accessories', 10),

(84, 'Logitech G Pro X 2 Lightspeed', 999.00,
 'High-quality Logitech G Pro X 2 Lightspeed with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Logitech G Pro X 2 Lightspeed.jpg', 4.8, 105, '★★★★★', 'Computer Accessories', 10),

(85, 'Dell UltraSharp Webcam WB7022', 699.00,
 'High-quality Dell UltraSharp Webcam WB7022 with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Dell UltraSharp Webcam WB7022.jpg', 4.5, 50, '★★★★☆', 'Computer Accessories', 10),

(86, 'Anker 565 USB-C Hub', 299.00,
 'High-quality Anker 565 USB-C Hub with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Anker 565 USB-C Hub.jpg', 4.6, 170, '★★★★☆', 'Computer Accessories', 10),

(87, 'Samsung T7 Shield 1TB', 499.00,
 'High-quality Samsung T7 Shield 1TB with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Samsung T7 Shield 1TB.jpg', 4.8, 210, '★★★★★', 'Computer Accessories', 10),

(88, 'Logitech G640 Mouse Pad', 149.00,
 'High-quality Logitech G640 Mouse Pad with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Logitech G640 Mouse Pad.jpg', 4.6, 80, '★★★★☆', 'Computer Accessories', 10),

(89, 'UGREEN 100W USB-C Cable', 79.00,
 'High-quality UGREEN 100W USB-C Cable with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/UGREEN 100W USB-C Cable.jpg', 4.7, 300, '★★★★★', 'Computer Accessories', 10),

(90, 'Dell XPS 13 (Intel Core Ultra)', 6499.00,
 'High-quality Dell XPS 13 (Intel Core Ultra) with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Dell XPS 13 (Intel Core Ultra).jpg', 4.7, 65, '★★★★★', 'Dell', 10),

(91, 'Dell XPS 14', 8299.00,
 'High-quality Dell XPS 14 with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Dell XPS 14.jpg', 4.7, 45, '★★★★★', 'Dell', 10),

(92, 'Dell XPS 16', 10999.00,
 'High-quality Dell XPS 16 with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Dell XPS 16.jpg', 4.8, 35, '★★★★★', 'Dell', 10),

(93, 'Dell Inspiron 14 Plus', 4299.00,
 'High-quality Dell Inspiron 14 Plus with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Dell Inspiron 14 Plus.jpg', 4.5, 70, '★★★★☆', 'Dell', 10),

(94, 'Dell Inspiron 16', 3999.00,
 'High-quality Dell Inspiron 16 with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Dell Inspiron 16.jpg', 4.5, 60, '★★★★☆', 'Dell', 10),

(95, 'Dell Latitude 7450', 6999.00,
 'High-quality Dell Latitude 7450 with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Dell Latitude 7450.jpg', 4.6, 40, '★★★★☆', 'Dell', 10),

(96, 'Dell Precision 3591', 9999.00,
 'High-quality Dell Precision 3591 with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Dell Precision 3591.jpg', 4.7, 25, '★★★★★', 'Dell', 10),

(97, 'Dell Alienware m18 R2', 13999.00,
 'High-quality Dell Alienware m18 R2 with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Dell Alienware m18 R2.jpg', 4.8, 30, '★★★★★', 'Dell', 10),

(98, 'Dell G16 Gaming Laptop', 6499.00,
 'High-quality Dell G16 Gaming Laptop with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Dell G16 Gaming Laptop.jpg', 4.6, 85, '★★★★☆', 'Dell', 10),

(99, 'Dell OptiPlex All-in-One 7420', 5499.00,
 'High-quality Dell OptiPlex All-in-One 7420 with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Dell OptiPlex All-in-One 7420.jpg', 4.5, 20, '★★★★☆', 'Dell', 10),

(100, 'HP Spectre x360 14', 7299.00,
 'High-quality HP Spectre x360 14 with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/HP Spectre x360 14.jpg', 4.8, 55, '★★★★★', 'HP', 10),

(101, 'HP Spectre x360 16', 8499.00,
 'High-quality HP Spectre x360 16 with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/HP Spectre x360 16.jpg', 4.8, 45, '★★★★★', 'HP', 10),

(102, 'HP ENVY x360 14', 4999.00,
 'High-quality HP ENVY x360 14 with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/HP ENVY x360 14.jpg', 4.6, 75, '★★★★☆', 'HP', 10),

(103, 'HP Pavilion Plus 14', 3899.00,
 'High-quality HP Pavilion Plus 14 with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/HP Pavilion Plus 14.jpg', 4.5, 90, '★★★★☆', 'HP', 10),

(104, 'HP Pavilion 15', 3299.00,
 'High-quality HP Pavilion 15 with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/HP Pavilion 15.jpg', 4.4, 110, '★★★★☆', 'HP', 10),

(105, 'HP Victus 15', 4699.00,
 'High-quality HP Victus 15 with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/HP Victus 15.jpg', 4.6, 130, '★★★★☆', 'HP', 10),

(106, 'HP OMEN 16', 7999.00,
 'High-quality HP OMEN 16 with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/HP OMEN 16.jpg', 4.7, 95, '★★★★★', 'HP', 10),

(107, 'HP OMEN Transcend 14', 9299.00,
 'High-quality HP OMEN Transcend 14 with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/HP OMEN Transcend 14.jpg', 4.7, 40, '★★★★★', 'HP', 10),

(108, 'HP All-in-One 24', 3799.00,
 'High-quality HP All-in-One 24 with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/HP All-in-One 24.jpg', 4.5, 50, '★★★★☆', 'HP', 10),

(109, 'HP EliteBook 840 G11', 6299.00,
 'High-quality HP EliteBook 840 G11 with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/HP EliteBook 840 G11.jpg', 4.6, 35, '★★★★☆', 'HP', 10),

(110, 'HUAWEI Pura 80 Ultra', 6899.00,
 'High-quality HUAWEI Pura 80 Ultra with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/HUAWEI Pura 80 Ultra.jpg', 4.8, 60, '★★★★★', 'Huawei', 10),

(111, 'HUAWEI Pura 80 Pro', 5699.00,
 'High-quality HUAWEI Pura 80 Pro with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/HUAWEI Pura 80 Pro.jpg', 4.7, 50, '★★★★★', 'Huawei', 10),

(112, 'HUAWEI Pura 80', 4699.00,
 'High-quality HUAWEI Pura 80 with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/HUAWEI Pura 80.jpg', 4.6, 70, '★★★★☆', 'Huawei', 10),

(113, 'HUAWEI Mate XT Ultimate Design', 14999.00,
 'High-quality HUAWEI Mate XT Ultimate Design with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/HUAWEI Mate XT Ultimate Design.jpg', 4.9, 25, '★★★★★', 'Huawei', 10),

(114, 'HUAWEI Mate X6', 8688.00,
 'High-quality HUAWEI Mate X6 with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/HUAWEI Mate X6.jpg', 4.8, 35, '★★★★★', 'Huawei', 10),

(115, 'HUAWEI Mate 70 Pro', 5999.00,
 'High-quality HUAWEI Mate 70 Pro with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/HUAWEI Mate 70 Pro.jpg', 4.7, 80, '★★★★★', 'Huawei', 10),

(116, 'HUAWEI nova 14 Ultra', 3299.00,
 'High-quality HUAWEI nova 14 Ultra with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/HUAWEI nova 14 Ultra.jpg', 4.6, 65, '★★★★☆', 'Huawei', 10),

(117, 'HUAWEI nova 14 Pro', 2999.00,
 'High-quality HUAWEI nova 14 Pro with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/HUAWEI nova 14 Pro.jpg', 4.6, 90, '★★★★☆', 'Huawei', 10),

(118, 'HUAWEI nova 14', 2399.00,
 'High-quality HUAWEI nova 14 with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/HUAWEI nova 14.jpg', 4.5, 110, '★★★★☆', 'Huawei', 10),

(119, 'HUAWEI nova 13 Pro', 2699.00,
 'High-quality HUAWEI nova 13 Pro with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/HUAWEI nova 13 Pro.jpg', 4.5, 85, '★★★★☆', 'Huawei', 10),

(120, 'HUAWEI nova 13', 2199.00,
 'High-quality HUAWEI nova 13 with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/HUAWEI nova 13.jpg', 4.4, 100, '★★★★☆', 'Huawei', 10),

(121, 'HUAWEI MatePad Pro 12.2 (Tablet)', 4599.00,
 'High-quality HUAWEI MatePad Pro 12.2 (Tablet) with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/HUAWEI MatePad Pro 12.2 (Tablet).jpg', 4.7, 55, '★★★★★', 'Huawei', 10),

(122, 'HUAWEI Enjoy 70X', 1399.00,
 'High-quality HUAWEI Enjoy 70X with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/HUAWEI Enjoy 70X.jpg', 4.3, 70, '★★★★☆', 'Huawei', 10),

(123, 'HUAWEI nova Y73', 999.00,
 'High-quality HUAWEI nova Y73 with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/HUAWEI nova Y73.jpg', 4.3, 60, '★★★★☆', 'Huawei', 10),

(124, 'HUAWEI nova Y63', 799.00,
 'High-quality HUAWEI nova Y63 with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/HUAWEI nova Y63.jpg', 4.2, 50, '★★★★☆', 'Huawei', 10),

(125, 'Lenovo ThinkPad X1 Carbon Gen 13', 8299.00,
 'High-quality Lenovo ThinkPad X1 Carbon Gen 13 with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Lenovo ThinkPad X1 Carbon Gen 13.jpg', 4.9, 50, '★★★★★', 'Lenovo', 10),

(126, 'Lenovo ThinkPad T14 Gen 6', 6299.00,
 'High-quality Lenovo ThinkPad T14 Gen 6 with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Lenovo ThinkPad T14 Gen 6.jpg', 4.7, 65, '★★★★★', 'Lenovo', 10),

(127, 'Lenovo Yoga 9i 14', 7499.00,
 'High-quality Lenovo Yoga 9i 14 with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Lenovo Yoga 9i 14.jpg', 4.8, 70, '★★★★★', 'Lenovo', 10),

(128, 'Lenovo Yoga 7i 14', 5299.00,
 'High-quality Lenovo Yoga 7i 14 with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Lenovo Yoga 7i 14.jpg', 4.6, 85, '★★★★☆', 'Lenovo', 10),

(129, 'Lenovo IdeaPad Slim 5', 3599.00,
 'High-quality Lenovo IdeaPad Slim 5 with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Lenovo IdeaPad Slim 5.jpg', 4.5, 90, '★★★★☆', 'Lenovo', 10),

(130, 'Lenovo IdeaPad Pro 5', 4799.00,
 'High-quality Lenovo IdeaPad Pro 5 with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Lenovo IdeaPad Pro 5.jpg', 4.6, 75, '★★★★☆', 'Lenovo', 10),

(131, 'Lenovo Legion Pro 7i', 10999.00,
 'High-quality Lenovo Legion Pro 7i with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Lenovo Legion Pro 7i.jpg', 4.9, 60, '★★★★★', 'Lenovo', 10),

(132, 'Lenovo Legion 5i', 6799.00,
 'High-quality Lenovo Legion 5i with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Lenovo Legion 5i.jpg', 4.7, 110, '★★★★★', 'Lenovo', 10),

(133, 'Lenovo LOQ 15', 4699.00,
 'High-quality Lenovo LOQ 15 with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Lenovo LOQ 15.jpg', 4.6, 120, '★★★★☆', 'Lenovo', 10),

(134, 'Lenovo ThinkCentre M90a Pro Gen 6', 5999.00,
 'High-quality Lenovo ThinkCentre M90a Pro Gen 6 with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Lenovo ThinkCentre M90a Pro Gen 6.jpg', 4.6, 25, '★★★★☆', 'Lenovo', 10),

(135, 'MacBook Pro 16-inch (M4 Max)', 15999.00,
 'High-quality MacBook Pro 16-inch (M4 Max) with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/MacBook Pro 16-inch (M4 Max).jpg', 4.9, 80, '★★★★★', 'MacBook', 10),

(136, 'MacBook Pro 14-inch (M4 Pro)', 10999.00,
 'High-quality MacBook Pro 14-inch (M4 Pro) with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/MacBook Pro 14-inch (M4 Pro).jpg', 4.9, 95, '★★★★★', 'MacBook', 10),

(137, 'MacBook Pro M5 14-Inch 16GB+512GB', 7600.00,
 'High-quality MacBook Pro M5 14-Inch 16GB+512GB with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/MacBook Pro M5 14-Inch 16GB+512GB.jpg', 4.8, 60, '★★★★★', 'MacBook', 10),

(138, 'MacBook Pro 14-inch (M4)', 8499.00,
 'High-quality MacBook Pro 14-inch (M4) with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/MacBook Pro 14-inch (M4).jpg', 4.8, 110, '★★★★★', 'MacBook', 10),

(139, 'MacBook Air 15-inch (M4)', 6299.00,
 'High-quality MacBook Air 15-inch (M4) with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/MacBook Air 15-inch (M4).jpg', 4.8, 130, '★★★★★', 'MacBook', 10),

(140, 'MacBook Air 13-inch (M4)', 4999.00,
 'High-quality MacBook Air 13-inch (M4) with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/MacBook Air 13-inch (M4).jpg', 4.8, 220, '★★★★★', 'MacBook', 10),

(141, 'iMac 24-inch (M4)', 6299.00,
 'High-quality iMac 24-inch (M4) with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/iMac 24-inch (M4).jpg', 4.7, 85, '★★★★★', 'MacBook', 10),

(142, 'Mac mini (M4)', 2699.00,
 'High-quality Mac mini (M4) with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Mac mini (M4).jpg', 4.8, 150, '★★★★★', 'MacBook', 10),

(143, 'Mac mini (M4 Pro)', 5499.00,
 'High-quality Mac mini (M4 Pro) with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Mac mini (M4).jpg', 4.9, 70, '★★★★★', 'MacBook', 10),

(144, 'Mac Studio (M4 Max)', 9999.00,
 'High-quality Mac Studio (M4 Max) with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Mac Studio (M4 Max).jpg', 4.9, 45, '★★★★★', 'MacBook', 10),

(145, 'Mac Pro (M3 Ultra)', 32999.00,
 'High-quality Mac Pro (M3 Ultra) with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Mac Pro (M3 Ultra).jpg', 4.9, 10, '★★★★★', 'MacBook', 10),

(146, 'Nintendo Switch 2 Camera', 269.00,
 'High-quality Nintendo Switch 2 Camera with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Nintendo Switch 2 Camera.jpg', 4.6, 75, '★★★★☆', 'Nintendo', 10),

(147, 'Nintendo Sound Clock: Alarmo', 499.00,
 'High-quality Nintendo Sound Clock: Alarmo with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Nintendo Sound Clock Alarmo.jpg', 4.8, 60, '★★★★★', 'Nintendo', 10),

(148, 'Nintendo Switch Sports Accessories Set', 189.00,
 'High-quality Nintendo Switch Sports Accessories Set with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Nintendo Switch Sports Accessories Set.jpg', 4.8, 60, '★★★★★', 'Nintendo', 10),

(149, 'SanDisk microSDXC 512GB for Nintendo Switch', 329.00,
 'High-quality SanDisk microSDXC 512GB for Nintendo Switch with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/SanDisk microSDXC 512GB for Nintendo Switch.jpg', 4.8, 60, '★★★★★', 'Nintendo', 10),

(150, 'Nintendo Switch Camera (HORI Piranha Plant USB Camera)', 249.00,
 'High-quality Nintendo Switch Camera (HORI Piranha Plant USB Camera) with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Nintendo Switch Camera (HORI Piranha Plant USB Camera).jpg', 4.8, 60, '★★★★★', 'Nintendo', 10),

(151, 'Nintendo Switch Joy-Con Wheel Pair', 99.00,
 'High-quality Nintendo Switch Joy-Con Wheel Pair with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Nintendo Switch Joy-Con Wheel Pair.jpg', 4.8, 60, '★★★★★', 'Nintendo', 10),

(152, 'Nintendo Switch Carrying Case & Screen Protector', 129.00,
 'High-quality Nintendo Switch Carrying Case & Screen Protector with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Nintendo Switch Carrying Case & Screen Protector.jpg', 4.8, 60, '★★★★★', 'Nintendo', 10),

(153, 'Nintendo Switch AC Adapter', 149.00,
 'High-quality Nintendo Switch AC Adapter with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Nintendo Switch AC Adapter.jpg', 4.8, 60, '★★★★★', 'Nintendo', 10),

(154, 'Nintendo Switch Dock Set', 429.00,
 'High-quality Nintendo Switch Dock Set with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Nintendo Switch Dock Set.jpg', 4.8, 60, '★★★★★', 'Nintendo', 10),

(155, 'Joy-Con Charging Grip', 169.00,
 'High-quality Joy-Con Charging Grip with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Joy-Con Charging Grip.jpg', 4.8, 60, '★★★★★', 'Nintendo', 10),

(156, 'Joy-Con Controller Pair', 349.00,
 'High-quality Joy-Con Controller Pair with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Joy-Con Controller Pair.jpg', 4.8, 60, '★★★★★', 'Nintendo', 10),

(157, 'Nintendo Switch Lite', 899.00,
 'High-quality Nintendo Switch Lite with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Nintendo Switch Lite.jpg', 4.8, 60, '★★★★★', 'Nintendo', 10),

(158, 'Nintendo Switch OLED Console', 1399.00,
 'High-quality Nintendo Switch OLED Console with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Nintendo Switch OLED Console.jpg', 4.8, 60, '★★★★★', 'Nintendo', 10),

(159, 'Nintendo Switch 2 Console', 2199.00,
 'High-quality Nintendo Switch 2 Console with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Nintendo Switch 2 Console.jpg', 4.8, 60, '★★★★★', 'Nintendo', 10),

(160, 'OPPO Find X9 Ultra', 5899.00,
 'High-quality OPPO Find X9 Ultra with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/OPPO Find X9 Ultra.jpg', 4.8, 60, '★★★★★', 'Oppo', 10),

(161, 'OPPO Find X9 Pro', 4999.00,
 'High-quality OPPO Find X9 Pro with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/OPPO Find X9 Pro.jpg', 4.8, 60, '★★★★★', 'Oppo', 10),

(162, 'OPPO Find X9', 3999.00,
 'High-quality OPPO Find X9 with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/OPPO Find X9.jpg', 4.8, 60, '★★★★★', 'Oppo', 10),

(163, 'OPPO Find N6', 7299.00,
 'High-quality OPPO Find N6 with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/OPPO Find N6.jpg', 4.8, 60, '★★★★★', 'Oppo', 10),

(164, 'OPPO Find N6 Flip', 5499.00,
 'High-quality OPPO Find N6 Flip with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/OPPO Find N6 Flip.jpg', 4.8, 60, '★★★★★', 'Oppo', 10),

(165, 'OPPO Reno 15 Pro 5G', 2999.00,
 'High-quality OPPO Reno 15 Pro 5G with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/OPPO Reno 15 Pro 5G.jpg', 4.8, 60, '★★★★★', 'Oppo', 10),

(166, 'OPPO Reno 15 5G', 2399.00,
 'High-quality OPPO Reno 15 5G with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/OPPO Reno 15 5G.jpg', 4.8, 60, '★★★★★', 'Oppo', 10),

(167, 'OPPO Reno 14 Pro 5G', 2799.00,
 'High-quality OPPO Reno 14 Pro 5G with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/OPPO Reno 14 Pro 5G.jpg', 4.8, 60, '★★★★★', 'Oppo', 10),

(168, 'OPPO A5 Pro 5G', 1299.00,
 'High-quality OPPO A5 Pro 5G with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/OPPO A5 Pro 5G.jpg', 4.8, 60, '★★★★★', 'Oppo', 10),

(169, 'OPPO A5 5G', 999.00,
 'High-quality OPPO A5 5G with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/OPPO A5 5G.jpg', 4.8, 60, '★★★★★', 'Oppo', 10),

(170, 'PlayStation 5 Slim Console', 2199.00,
 'High-quality PlayStation 5 Slim Console with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/PS5.jpg', 4.8, 60, '★★★★★', 'PlayStation', 10),

(171, 'PlayStation 5 Pro Console', 3499.00,
 'High-quality PlayStation 5 Pro Console with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/PlayStation 5 Pro Console.jpg', 4.8, 60, '★★★★★', 'PlayStation', 10),

(172, 'DualSense Wireless Controller', 349.00,
 'High-quality DualSense Wireless Controller with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/DualSense Wireless Controller.jpg', 4.8, 60, '★★★★★', 'PlayStation', 10),

(173, 'DualSense Edge Wireless Controller', 999.00,
 'High-quality DualSense Edge Wireless Controller with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/DualSense Edge Wireless Controller.jpg', 4.8, 60, '★★★★★', 'PlayStation', 10),

(174, 'PlayStation Portal Remote Player', 1099.00,
 'High-quality PlayStation Portal Remote Player with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/PlayStation Portal Remote Player.jpg', 4.8, 60, '★★★★★', 'PlayStation', 10),

(175, 'PlayStation 5 2TB', 2750.00,
 'High-quality PlayStation 5 2TB with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/PS5 2TB.jpg', 4.8, 60, '★★★★★', 'PlayStation', 10),

(176, 'Pulse Elite Wireless Headset', 699.00,
 'High-quality Pulse Elite Wireless Headset with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Pulse Elite Wireless Headset.jpg', 4.8, 60, '★★★★★', 'PlayStation', 10),

(177, 'Pulse Explore Wireless Earbuds', 999.00,
 'High-quality Pulse Explore Wireless Earbuds with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Pulse Explore Wireless Earbuds.jpg', 4.8, 60, '★★★★★', 'PlayStation', 10),

(178, 'PlayStation VR2 Headset', 2699.00,
 'High-quality PlayStation VR2 Headset with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/PlayStation VR2 Headset.jpg', 4.8, 60, '★★★★★', 'PlayStation', 10),

(179, 'PlayStation VR2 Sense Controller', 499.00,
 'High-quality PlayStation VR2 Sense Controller with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/PlayStation VR2 Sense Controller.jpg', 4.8, 60, '★★★★★', 'PlayStation', 10),

(180, 'PlayStation HD Camera', 299.00,
 'High-quality PlayStation HD Camera with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/PlayStation HD Camera.jpg', 4.8, 60, '★★★★★', 'PlayStation', 10),

(181, 'PlayStation Media Remote', 159.00,
 'High-quality PlayStation Media Remote with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/PlayStation Media Remote.jpg', 4.8, 60, '★★★★★', 'PlayStation', 10),

(182, 'PlayStation DualSense Charging Station', 149.00,
 'High-quality PlayStation DualSense Charging Station with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/PlayStation DualSense Charging Station.jpg', 4.8, 60, '★★★★★', 'PlayStation', 10),

(183, 'PlayStation Access Controller', 429.00,
 'High-quality PlayStation Access Controller with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/PlayStation Access Controller.jpg', 4.8, 60, '★★★★★', 'PlayStation', 10),

(184, 'PlayStation Link USB Adapter', 129.00,
 'High-quality PlayStation Link USB Adapter with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/PlayStation Link USB Adapter.jpg', 4.8, 60, '★★★★★', 'PlayStation', 10),

(185, 'Sony INZONE H9 Gaming Headset', 1299.00,
 'High-quality Sony INZONE H9 Gaming Headset with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Sony INZONE H9 Gaming Headset.jpg', 4.8, 60, '★★★★★', 'PlayStation', 10),

(186, 'Sony INZONE H5 Gaming Headset', 699.00,
 'High-quality Sony INZONE H5 Gaming Headset with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Sony INZONE H5 Gaming Headset.jpg', 4.8, 60, '★★★★★', 'PlayStation', 10),

(187, 'Sony INZONE Buds', 899.00,
 'High-quality Sony INZONE Buds with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Sony INZONE Buds.jpg', 4.8, 60, '★★★★★', 'PlayStation', 10),

(188, 'WD_BLACK SN850P NVMe SSD for PS5', 899.00,
 'High-quality WD_BLACK SN850P NVMe SSD for PS5 with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/WD_BLACK SN850P NVMe SSD for PS5.jpg', 4.8, 60, '★★★★★', 'PlayStation', 10),

(189, 'Seagate Game Drive for PlayStation', 469.00,
 'High-quality Seagate Game Drive for PlayStation with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Seagate Game Drive for PlayStation.jpg', 4.8, 60, '★★★★★', 'PlayStation', 10),

(190, 'PlayStation 5 Console Cover (Midnight Black)', 269.00,
 'High-quality PlayStation 5 Console Cover (Midnight Black) with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/PlayStation 5 Console Cover (Midnight Black).jpg', 4.8, 60, '★★★★★', 'PlayStation', 10),

(191, 'Samsung Galaxy S26 Ultra', 6599.00,
 'High-quality Samsung Galaxy S26 Ultra with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Samsung Galaxy S26 Ultra.jpg', 4.8, 60, '★★★★★', 'Samsung', 10),

(192, 'Samsung Galaxy S26+', 5299.00,
 'High-quality Samsung Galaxy S26+ with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Samsung Galaxy S26+.jpg', 4.8, 60, '★★★★★', 'Samsung', 10),

(193, 'Samsung Galaxy S26', 4399.00,
 'High-quality Samsung Galaxy S26 with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Samsung Galaxy S26.jpg', 4.8, 60, '★★★★★', 'Samsung', 10),

(194, 'Samsung Galaxy Z Fold 8', 8999.00,
 'High-quality Samsung Galaxy Z Fold 8 with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Samsung Galaxy Z Fold 8.jpg', 4.8, 60, '★★★★★', 'Samsung', 10),

(195, 'Samsung Galaxy Z Flip 8', 5299.00,
 'High-quality Samsung Galaxy Z Flip 8 with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Samsung Galaxy Z Flip 8.jpg', 4.8, 60, '★★★★★', 'Samsung', 10),

(196, 'Samsung Galaxy S25 Ultra', 6299.00,
 'High-quality Samsung Galaxy S25 Ultra with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Samsung Galaxy S25 Ultra.jpg', 4.8, 60, '★★★★★', 'Samsung', 10),

(197, 'Samsung Galaxy S25+', 4999.00,
 'High-quality Samsung Galaxy S25+ with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Samsung Galaxy S25+.jpg', 4.8, 60, '★★★★★', 'Samsung', 10),

(198, 'Samsung Galaxy S25', 3999.00,
 'High-quality Samsung Galaxy S25 with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Samsung Galaxy S25.jpg', 4.8, 60, '★★★★★', 'Samsung', 10),

(199, 'Samsung Galaxy A56 5G', 2099.00,
 'High-quality Samsung Galaxy A56 5G with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Samsung Galaxy A56 5G.jpg', 4.8, 60, '★★★★★', 'Samsung', 10),

(200, 'Samsung Galaxy A36 5G', 1599.00,
 'High-quality Samsung Galaxy A36 5G with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Samsung Galaxy A36 5G.jpg', 4.8, 60, '★★★★★', 'Samsung', 10),

(201, 'JBL Charge 5', 699.00,
 'High-quality JBL Charge 5 with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/JBL Charge 5.jpg', 4.8, 60, '★★★★★', 'Speakers', 10),

(202, 'JBL Flip 6', 499.00,
 'High-quality JBL Flip 6 with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/JBL Flip 6.jpg', 4.8, 60, '★★★★★', 'Speakers', 10),

(203, 'Sony SRS-XB100', 249.00,
 'High-quality Sony SRS-XB100 with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Sony SRS-XB100.jpg', 4.8, 60, '★★★★★', 'Speakers', 10),

(204, 'Sony ULT Field 7', 1999.00,
 'High-quality Sony ULT Field 7 with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Sony ULT Field 7.jpg', 4.8, 60, '★★★★★', 'Speakers', 10),

(205, 'Bose SoundLink Flex', 699.00,
 'High-quality Bose SoundLink Flex with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Bose SoundLink Flex.jpg', 4.8, 60, '★★★★★', 'Speakers', 10),

(206, 'Marshall Emberton III', 899.00,
 'High-quality Marshall Emberton III with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Marshall Emberton III.jpg', 4.8, 60, '★★★★★', 'Speakers', 10),

(207, 'Harman Kardon Onyx Studio 9', 1299.00,
 'High-quality Harman Kardon Onyx Studio 9 with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Harman Kardon Onyx Studio 9.jpg', 4.8, 60, '★★★★★', 'Speakers', 10),

(208, 'Sonos Era 100', 1299.00,
 'High-quality Sonos Era 100 with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Sonos Era 100.jpg', 4.8, 60, '★★★★★', 'Speakers', 10),

(209, 'Apple HomePod 2nd Generation', 1499.00,
 'High-quality Apple HomePod 2nd Generation with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Apple HomePod 2nd Generation.jpg', 4.8, 60, '★★★★★', 'Speakers', 10),

(210, 'Anker Soundcore Motion X600', 699.00,
 'High-quality Anker Soundcore Motion X600 with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Anker Soundcore Motion X600.jpg', 4.8, 60, '★★★★★', 'Speakers', 10),

(211, 'vivo X300 Ultra', 5699.00,
 'High-quality vivo X300 Ultra with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/vivo X300 Ultra.jpg', 4.8, 60, '★★★★★', 'Vivo', 10),

(212, 'vivo X300 Pro', 4999.00,
 'High-quality vivo X300 Pro with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/vivo X300 Pro.jpg', 4.8, 60, '★★★★★', 'Vivo', 10),

(213, 'vivo X300', 3999.00,
 'High-quality vivo X300 with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/vivo X300.jpg', 4.8, 60, '★★★★★', 'Vivo', 10),

(214, 'vivo X200 Pro', 4699.00,
 'High-quality vivo X200 Pro with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/vivo X200 Pro.jpg', 4.8, 60, '★★★★★', 'Vivo', 10),

(215, 'vivo V60 Pro', 2799.00,
 'High-quality vivo V60 Pro with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/vivo V60 Pro.jpg', 4.8, 60, '★★★★★', 'Vivo', 10),

(216, 'vivo V60', 2299.00,
 'High-quality vivo V60 with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/vivo V60.jpg', 4.8, 60, '★★★★★', 'Vivo', 10),

(217, 'vivo V50 5G', 1999.00,
 'High-quality vivo V50 5G with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/vivo V50 5G.jpg', 4.8, 60, '★★★★★', 'Vivo', 10),

(218, 'vivo Y400 5G', 1399.00,
 'High-quality vivo Y400 5G with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/vivo Y400 5G.jpg', 4.8, 60, '★★★★★', 'Vivo', 10),

(219, 'vivo Y300 5G', 1199.00,
 'High-quality vivo Y300 5G with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/vivo Y300 5G.jpg', 4.8, 60, '★★★★★', 'Vivo', 10),

(220, 'vivo Y29 5G', 899.00,
 'High-quality vivo Y29 5G with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/vivo Y29 5G.jpg', 4.8, 60, '★★★★★', 'Vivo', 10),

(221, 'Apple Watch Ultra 3', 3999.00,
 'High-quality Apple Watch Ultra 3 with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Apple Watch Ultra 3.jpg', 4.8, 60, '★★★★★', 'Watch', 10),

(222, 'Samsung Galaxy Watch8', 1499.00,
 'High-quality Samsung Galaxy Watch8 with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Samsung Galaxy Watch8.jpg', 4.8, 60, '★★★★★', 'Watch', 10),

(223, 'Samsung Galaxy Watch8 Classic', 1799.00,
 'High-quality Samsung Galaxy Watch8 Classic with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Samsung Galaxy Watch8 Classic.jpg', 4.8, 60, '★★★★★', 'Watch', 10),

(224, 'Google Pixel Watch 4', 1699.00,
 'High-quality Google Pixel Watch 4 with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Google Pixel Watch 4.jpg', 4.8, 60, '★★★★★', 'Watch', 10),

(225, 'Huawei Watch 5', 1899.00,
 'High-quality Huawei Watch 5 with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Huawei Watch 5.jpg', 4.8, 60, '★★★★★', 'Watch', 10),

(226, 'Xiaomi Watch S4', 699.00,
 'High-quality Xiaomi Watch S4 with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Xiaomi Watch S4.jpg', 4.8, 60, '★★★★★', 'Watch', 10),

(227, 'Garmin Venu 3', 1799.00,
 'High-quality Garmin Venu 3 with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Garmin Venu 3.jpg', 4.8, 60, '★★★★★', 'Watch', 10),

(228, 'Garmin Fenix 8', 4299.00,
 'High-quality Garmin Fenix 8 with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Garmin Fenix 8.jpg', 4.8, 60, '★★★★★', 'Watch', 10),

(229, 'Amazfit Balance', 999.00,
 'High-quality Amazfit Balance with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Amazfit Balance.jpg', 4.8, 60, '★★★★★', 'Watch', 10),

(230, 'Apple EarPods with Lightning Connector', 109.00,
 'High-quality Apple EarPods with Lightning Connector with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Apple EarPods with Lightning Connector.jpg', 4.8, 60, '★★★★★', 'Wired Earphones', 10),

(231, 'Apple EarPods with USB-C', 109.00,
 'High-quality Apple EarPods with USB-C with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Apple EarPods with USB-C.jpg', 4.8, 60, '★★★★★', 'Wired Earphones', 10),

(232, 'Sony MDR-EX155AP', 89.00,
 'High-quality Sony MDR-EX155AP with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Sony MDR-EX155AP.jpg', 4.8, 60, '★★★★★', 'Wired Earphones', 10),

(233, 'Sony MDR-XB55AP', 159.00,
 'High-quality Sony MDR-XB55AP with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Sony MDR-XB55AP.jpg', 4.8, 60, '★★★★★', 'Wired Earphones', 10),

(234, 'JBL C100SI', 59.00,
 'High-quality JBL C100SI with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/JBL C100SI.jpg', 4.8, 60, '★★★★★', 'Wired Earphones', 10),

(235, 'JBL Tune 110', 49.00,
 'High-quality JBL Tune 110 with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/JBL Tune 110.jpg', 4.8, 60, '★★★★★', 'Wired Earphones', 10),

(236, 'Sennheiser IE 200', 899.00,
 'High-quality Sennheiser IE 200 with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Sennheiser IE 200.jpg', 4.8, 60, '★★★★★', 'Wired Earphones', 10),

(237, 'Razer Hammerhead Duo', 199.00,
 'High-quality Razer Hammerhead Duo with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Razer Hammerhead Duo.jpg', 4.8, 60, '★★★★★', 'Wired Earphones', 10),

(238, 'Logitech G333 Gaming Earphones', 199.00,
 'High-quality Logitech G333 Gaming Earphones with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Logitech G333 Gaming Earphones.jpg', 4.8, 60, '★★★★★', 'Wired Earphones', 10),

(239, 'Apple AirPods Pro 2', 999.00,
 'High-quality Apple AirPods Pro 2 with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Apple AirPods Pro 2.jpg', 4.8, 60, '★★★★★', 'Wireless Earphones', 10),

(240, 'Samsung Galaxy Buds3 Pro', 999.00,
 'High-quality Samsung Galaxy Buds3 Pro with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Samsung Galaxy Buds3 Pro.jpg', 4.8, 60, '★★★★★', 'Wireless Earphones', 10),

(241, 'Sony WF-1000XM5', 1099.00,
 'High-quality Sony WF-1000XM5 with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Sony WF-1000XM5.jpg', 4.8, 60, '★★★★★', 'Wireless Earphones', 10),

(242, 'Bose QuietComfort Ultra Earbuds', 1199.00,
 'High-quality Bose QuietComfort Ultra Earbuds with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Bose QuietComfort Ultra Earbuds.jpg', 4.8, 60, '★★★★★', 'Wireless Earphones', 10),

(243, 'JBL Live Beam 3', 899.00,
 'High-quality JBL Live Beam 3 with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/JBL Live Beam 3.jpg', 4.8, 60, '★★★★★', 'Wireless Earphones', 10),

(244, 'Huawei FreeBuds Pro 4', 799.00,
 'High-quality Huawei FreeBuds Pro 4 with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Huawei FreeBuds Pro 4.jpg', 4.8, 60, '★★★★★', 'Wireless Earphones', 10),

(245, 'Xiaomi Buds 5 Pro', 699.00,
 'High-quality Xiaomi Buds 5 Pro with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Xiaomi Buds 5 Pro.jpg', 4.8, 60, '★★★★★', 'Wireless Earphones', 10),

(246, 'OPPO Enco X3i', 399.00,
 'High-quality OPPO Enco X3i with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/OPPO Enco X3i.jpg', 4.8, 60, '★★★★★', 'Wireless Earphones', 10),

(247, 'Soundcore Liberty 4 NC', 349.00,
 'High-quality Soundcore Liberty 4 NC with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Soundcore Liberty 4 NC.jpg', 4.8, 60, '★★★★★', 'Wireless Earphones', 10),

(248, 'Nothing Ear', 499.00,
 'High-quality Nothing Ear with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Nothing Ear.jpg', 4.8, 60, '★★★★★', 'Wireless Earphones', 10),

(249, 'Xbox Wireless Controller (Carbon Black)', 290.00,
 'High-quality Xbox Wireless Controller (Carbon Black) with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Xbox Wireless Controller (Carbon Black).jpg', 4.8, 60, '★★★★★', 'XBox', 10),

(250, 'Xbox Elite Wireless Controller Series 2', 799.00,
 'High-quality Xbox Elite Wireless Controller Series 2 with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Xbox Elite Wireless Controller Series 2.jpg', 4.8, 60, '★★★★★', 'XBox', 10),

(251, 'Xbox Adaptive Controller', 449.00,
 'High-quality Xbox Adaptive Controller with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Xbox Adaptive Controller.jpg', 4.8, 60, '★★★★★', 'XBox', 10),

(252, 'Xbox Rechargeable Battery + USB-C Cable', 129.00,
 'High-quality Xbox Rechargeable Battery + USB-C Cable with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Xbox Rechargeable Battery + USB-C Cable.jpg', 4.8, 60, '★★★★★', 'XBox', 10),

(253, 'Xbox Stereo Headset', 279.00,
 'High-quality Xbox Stereo Headset with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Xbox Stereo Headset.jpg', 4.8, 60, '★★★★★', 'XBox', 10),

(254, 'Xbox Wireless Headset', 499.00,
 'High-quality Xbox Wireless Headset with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Xbox Wireless Headset.jpg', 4.8, 60, '★★★★★', 'XBox', 10),

(255, 'Seagate Storage Expansion Card 1TB for Xbox Series X/S', 899.00,
 'High-quality Seagate Storage Expansion Card 1TB for Xbox Series X/S with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Seagate Storage Expansion Card 1TB for Xbox Series.jpg', 4.8, 60, '★★★★★', 'XBox', 10),

(256, 'Seagate Game Drive 2TB for Xbox', 469.00,
 'High-quality Seagate Game Drive 2TB for Xbox with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Seagate Game Drive 2TB for Xbox.jpg', 4.8, 60, '★★★★★', 'XBox', 10),

(257, 'Xbox Play & Charge Kit', 149.00,
 'High-quality Xbox Play & Charge Kit with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Xbox Play & Charge Kit.jpg', 4.8, 60, '★★★★★', 'XBox', 10),

(258, 'Razer Universal Quick Charging Stand for Xbox', 199.00,
 'High-quality Razer Universal Quick Charging Stand for Xbox with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Razer Universal Quick Charging Stand for Xbox.jpg', 4.8, 60, '★★★★★', 'XBox', 10),

(259, 'PowerA Enhanced Wired Controller for Xbox', 199.00,
 'High-quality PowerA Enhanced Wired Controller for Xbox with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/PowerA Enhanced Wired Controller for Xbox.jpg', 4.8, 60, '★★★★★', 'XBox', 10),

(260, 'Turtle Beach Stealth 600 Gen 3 for Xbox', 549.00,
 'High-quality Turtle Beach Stealth 600 Gen 3 for Xbox with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Turtle Beach Stealth 600 Gen 3 for Xbox.jpg', 4.8, 60, '★★★★★', 'XBox', 10),

(261, 'Xbox Series X Console Wrap (Mineral Camo)', 229.00,
 'High-quality Xbox Series X Console Wrap (Mineral Camo) with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Xbox Series X Console Wrap (Mineral Camo).jpg', 4.8, 60, '★★★★★', 'XBox', 10),

(262, 'Xiaomi 16 Ultra', 5299.00,
 'High-quality Xiaomi 16 Ultra with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Xiaomi 16 Ultra.jpg', 4.8, 60, '★★★★★', 'Xiaomi', 10),

(263, 'Xiaomi 16 Pro', 4699.00,
 'High-quality Xiaomi 16 Pro with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Xiaomi 16 Pro.jpg', 4.8, 60, '★★★★★', 'Xiaomi', 10),

(264, 'Xiaomi 16', 3699.00,
 'High-quality Xiaomi 16 with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Xiaomi 16.jpg', 4.8, 60, '★★★★★', 'Xiaomi', 10),

(265, 'Xioami 17 Pro Max 235GB', 3800.00,
 'High-quality Xioami 17 Pro Max 235GB with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Xioami17PM.jpg', 4.8, 60, '★★★★★', 'Xiaomi', 10),

(266, 'Xiaomi 15 Ultra', 5199.00,
 'High-quality Xiaomi 15 Ultra with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Xiaomi 15 Ultra.jpg', 4.8, 60, '★★★★★', 'Xiaomi', 10),

(267, 'Xiaomi 15 Pro', 4499.00,
 'High-quality Xiaomi 15 Pro with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Xiaomi 15 Pro.jpg', 4.8, 60, '★★★★★', 'Xiaomi', 10),

(268, 'Xiaomi 15', 3499.00,
 'High-quality Xiaomi 15 with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Xiaomi 15.jpg', 4.8, 60, '★★★★★', 'Xiaomi', 10),

(269, 'Xiaomi MIX Flip 2', 5499.00,
 'High-quality Xiaomi MIX Flip 2 with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Xiaomi MIX Flip 2.jpg', 4.8, 60, '★★★★★', 'Xiaomi', 10),

(270, 'Xiaomi MIX Flip', 4999.00,
 'High-quality Xiaomi MIX Flip with premium design, cutting-edge technology, exceptional reliability, and manufacturer warranty.',
 '../Image/Xiaomi MIX Flip.jpg', 4.8, 60, '★★★★★', 'Xiaomi', 10)
ON DUPLICATE KEY UPDATE
productName=VALUES(productName),
productPrice=VALUES(productPrice),
productDescription=VALUES(productDescription),
productImage=VALUES(productImage),
rating_score=VALUES(rating_score),
rating_count=VALUES(rating_count),
stars_html=VALUES(stars_html),
category=VALUES(category),
stock=VALUES(stock);
