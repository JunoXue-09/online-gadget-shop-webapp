<?php
	CREATE TABLE gadgets (
    gadget_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    brand VARCHAR(50),
    model VARCHAR(50),
    storage VARCHAR(30),
    colour VARCHAR(30),
    price DECIMAL(10,2),
    description TEXT,
    image VARCHAR(255)
);

?>