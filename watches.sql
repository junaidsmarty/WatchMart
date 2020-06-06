-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 06, 2020 at 06:20 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `watches`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

DROP TABLE IF EXISTS `brands`;
CREATE TABLE IF NOT EXISTS `brands` (
  `brand_id` int(100) NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(100) NOT NULL,
  PRIMARY KEY (`brand_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_name`) VALUES
(1, 'Rolex'),
(2, 'AP'),
(6, 'Bre'),
(7, 'Car'),
(8, 'Gp'),
(9, 'Hublot'),
(10, 'Rm'),
(11, 'Tag'),
(12, 'Tissot'),
(13, 'Rd'),
(14, 'Pia'),
(15, 'Rado');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `prod_id` int(15) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`prod_id`, `ip_add`, `qty`) VALUES
(13, '::1', 3),
(14, '::1', 3),
(1, '::1', 3),
(4, '::1', 3);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `cust_id` int(100) NOT NULL AUTO_INCREMENT,
  `cust_ip` varchar(255) NOT NULL,
  `cust_name` varchar(100) NOT NULL,
  `cust_email` varchar(100) NOT NULL,
  `cust_pass` varchar(100) NOT NULL,
  `cust_add` text NOT NULL,
  `cust_contact` varchar(100) NOT NULL,
  `cust_account` varchar(100) NOT NULL,
  PRIMARY KEY (`cust_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`cust_id`, `cust_ip`, `cust_name`, `cust_email`, `cust_pass`, `cust_add`, `cust_contact`, `cust_account`) VALUES
(5, '::1', 'safi', 'safisa13@hotmail.com', '123', '3d711', '0321', '12345678'),
(4, '::1', 'Hamza', 'hamzattking@gmail.com', '1234', 'M-6 sheet-27 Ext Model Colony Karachi', '+923323237768', '6788');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `prod_id` int(100) NOT NULL AUTO_INCREMENT,
  `prod_name` varchar(100) NOT NULL,
  `brand_name` varchar(100) NOT NULL,
  `prod_price` int(200) NOT NULL,
  `prod_size` varchar(50) NOT NULL,
  `prod_material` varchar(50) NOT NULL,
  `prod_dial` int(50) NOT NULL,
  `prod_image` text NOT NULL,
  `prod_quantity` int(50) NOT NULL,
  PRIMARY KEY (`prod_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prod_id`, `prod_name`, `brand_name`, `prod_price`, `prod_size`, `prod_material`, `prod_dial`, `prod_image`, `prod_quantity`) VALUES
(1, 'DAY-DATE 40', 'Rolex', 60000, 'medium', 'Yellow Gold', 40, 'Rolex1.png', 7),
(3, 'RO-6751', 'AP', 15000, 'medium', 'Oyestersteel and gold', 35, 'Ap.jpg', 5),
(4, 'RO-1545', 'AP', 18000, 'small', 'Steel and platinium', 30, 'Ap2.jpg', 5),
(5, 'RT-1545', 'AP', 16000, 'Large', 'Diamond', 40, 'Ap3.jpg', 7),
(6, '577R', 'AP', 30000, 'medium', 'Gold', 25, 'Ap4.jpg', 2),
(7, 'ROO-264', 'AP', 40000, 'Medium', 'Polyester,diamond and plastic', 40, 'Ap5.jpg', 7),
(8, '5772R', 'AP', 70000, 'medium', 'Gold and diamond', 35, 'Ap6.jpg', 1),
(9, 'DAY-DATE 40', 'Rolex', 70000, 'large', 'Oyster,Everose gold and diamonds', 40, 'Rolex2.png', 17),
(10, 'DAY-DATE 40', 'Rolex', 100000, 'medium', 'Oyster, platinum', 40, 'Rolex3.png', 13),
(11, 'DAY-DATE 36', 'Rolex', 500000, 'medium', 'Oyster, Everose gold and diamonds', 36, 'Rolex4.png', 3),
(12, 'DAY-DATE 36', 'Rolex', 70000, 'medium', 'Oyster, white gold', 36, 'Rolex5.png', 11),
(13, 'DAY-DATE 36', 'Rolex', 75000, 'medium', 'Oyster, white gold', 36, 'Rolex6.png', 27),
(14, 'NAVITIMER 8 B01 CHRONOGRAPH 43', 'Bre', 90000, 'medium', 'Steel', 36, 'Bre.png', 1),
(15, 'BALLON BLEU DE CARTIER WATCH', 'Car', 55000, 'small', ' STEEL, DIAMONDS', 33, 'Car1.jpg', 24),
(16, 'BALLON BLEU DE CARTIER WATCH', 'Car', 64000, 'small', 'PINK GOLD, DIAMONDS, LEATHER', 33, 'Car2.jpg', 4),
(17, 'BALLON BLEU DE CARTIER WATCH', 'Car', 62000, 'small', 'PINK GOLD, DIAMONDS', 33, 'Car3.jpg', 7),
(18, 'BALLON BLEU DE CARTIER WATCH', 'Car', 77000, 'small', '18K PINK GOLD, STEEL, DIAMONDS', 33, 'Car4.jpg', 3),
(19, 'BALLON BLEU DE CARTIER WATCH', 'Car', 70000, 'small', '18K YELLOW GOLD, STEEL', 33, 'Car5.jpg', 17),
(20, 'BALLON BLEU DE CARTIER WATCH', 'Car', 86000, 'small', 'STEEL, LEATHER', 36, 'Car6.jpg', 4);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
