CREATE TABLE `sales` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `customer_email` VARCHAR(255) NOT NULL,
  `product_name` VARCHAR(255) NOT NULL,
  `qty` INT NOT NULL,
  `total` DECIMAL(10,2) NOT NULL,
  `sale_date` DATETIME NOT NULL
);
CREATE TABLE `customers` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `businessName` VARCHAR(255) NOT NULL,
  `address` VARCHAR(255) NOT NULL,
  `city` VARCHAR(100) NOT NULL,
  `state` VARCHAR(100) NOT NULL,
  `pincode` VARCHAR(20) NOT NULL,
  `country` VARCHAR(100) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `phone` VARCHAR(30) NOT NULL,
  `pan` VARCHAR(20),
  `gst` VARCHAR(30),
  `logo` TEXT
);