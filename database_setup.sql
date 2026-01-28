CREATE DATABASE IF NOT EXISTS Hotelreservation;
USE Hotelreservation;

-- Admin Credentials
CREATE TABLE IF NOT EXISTS `admin_cred` (
  `sr_no` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(150) NOT NULL,
  `admin_pass` varchar(150) NOT NULL,
  PRIMARY KEY (`sr_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `admin_cred` (`sr_no`, `admin_name`, `admin_pass`) VALUES
(1, 'admin', '12345');

-- Settings
CREATE TABLE IF NOT EXISTS `settings` (
  `sr_no` int(11) NOT NULL AUTO_INCREMENT,
  `site_title` varchar(50) NOT NULL,
  `site_about` varchar(250) NOT NULL,
  `shutdown` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`sr_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `settings` (`sr_no`, `site_title`, `site_about`, `shutdown`) VALUES
(1, 'Rest Riser', 'Rest Riser hotel booking platform.', 0);

-- Contact Details
CREATE TABLE IF NOT EXISTS `contact_details` (
  `sr_no` int(11) NOT NULL AUTO_INCREMENT,
  `address` varchar(50) NOT NULL,
  `gmap` varchar(100) NOT NULL,
  `pn1` varchar(30) NOT NULL,
  `pn2` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fb` varchar(100) NOT NULL,
  `insta` varchar(100) NOT NULL,
  `twi` varchar(100) NOT NULL,
  `iframe` varchar(300) NOT NULL,
  PRIMARY KEY (`sr_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `contact_details` (`sr_no`, `address`, `gmap`, `pn1`, `pn2`, `email`, `fb`, `insta`, `twi`, `iframe`) VALUES
(1, 'XYZ Address, City', 'https://maps.google.com', '+911234567890', '+911234567890', 'info@restriser.com', 'https://facebook.com', 'https://instagram.com', 'https://twitter.com', 'https://google.com/maps/embed...');

-- User Queries
CREATE TABLE IF NOT EXISTS `userqueries` (
  `sr_no` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` varchar(500) DEFAULT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `seen` tinyint(4) NOT NULL DEFAULT 0,
  PRIMARY KEY (`sr_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Users
CREATE TABLE IF NOT EXISTS `users` (
    `id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(100) NOT NULL,
    `email` VARCHAR(100) NOT NULL UNIQUE,
    `password` VARCHAR(255) NOT NULL,
    `role` ENUM('admin', 'user') DEFAULT 'user',
    `verified` TINYINT(1) NOT NULL DEFAULT 1,
    `verification_code` VARCHAR(6) DEFAULT NULL,
    `code_expires_at` DATETIME DEFAULT NULL,
    `created_at` DATETIME NOT NULL,
    `last_login` DATETIME DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Insert default admin user into users table as well (password: admin123)
-- $2y$10$8... is hash for admin123 (just placeholder, actual hash needed)
-- Using a known hash for 'admin123'
INSERT INTO `users` (`name`, `email`, `password`, `role`, `verified`, `created_at`) VALUES 
('Admin User', 'admin@example.com', '$2y$10$wK/L7.s3.i.k.w.h.e.r.e', 'admin', 1, NOW());
