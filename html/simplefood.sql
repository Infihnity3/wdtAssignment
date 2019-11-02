-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 02, 2019 at 10:56 AM
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
-- Database: `simplefood`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `contact_email` varchar(255) NOT NULL,
  `contact_message` text NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `contact_email`, `contact_message`) VALUES
(1, 'zack@gmail.com', 'yo'),
(2, '1@1.com', 'yoyoyo\r\n'),
(3, '2@2.com', 'hohoho'),
(4, 'sdaf@fas.com', 'dsafd\r\n'),
(5, 'zack@gmail.com', 'dwq'),
(7, 'zack@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `japanese_food`
--

DROP TABLE IF EXISTS `japanese_food`;
CREATE TABLE IF NOT EXISTS `japanese_food` (
  `food_ID` int(11) NOT NULL AUTO_INCREMENT,
  `food_name` varchar(50) NOT NULL,
  `food_description` varchar(255) NOT NULL,
  `food_price` int(11) NOT NULL,
  `food_img` text NOT NULL,
  PRIMARY KEY (`food_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `local_food`
--

DROP TABLE IF EXISTS `local_food`;
CREATE TABLE IF NOT EXISTS `local_food` (
  `food_ID` int(11) NOT NULL AUTO_INCREMENT,
  `food_name` varchar(50) NOT NULL,
  `food_description` varchar(255) NOT NULL,
  `food_price` int(11) NOT NULL,
  `food_img` text NOT NULL,
  PRIMARY KEY (`food_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orderfood`
--

DROP TABLE IF EXISTS `orderfood`;
CREATE TABLE IF NOT EXISTS `orderfood` (
  `order_ID` int(11) NOT NULL AUTO_INCREMENT,
  `order_name` varchar(50) NOT NULL,
  `order_price` int(11) NOT NULL,
  PRIMARY KEY (`order_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `thai_food`
--

DROP TABLE IF EXISTS `thai_food`;
CREATE TABLE IF NOT EXISTS `thai_food` (
  `food_ID` int(11) NOT NULL AUTO_INCREMENT,
  `food_name` varchar(50) NOT NULL,
  `food_description` varchar(255) NOT NULL,
  `food_price` int(11) NOT NULL,
  `food_img` text NOT NULL,
  PRIMARY KEY (`food_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thai_food`
--

INSERT INTO `thai_food` (`food_ID`, `food_name`, `food_description`, `food_price`, `food_img`) VALUES
(9, 'Thai Fried Rice', 'Fried jasmine rice served with a handful of seafood', 150, 'foodImage/thaiFriedRice.jpg'),
(7, 'Tom Yum', 'Sour Thai soup served with seafood.', 25, 'foodImage/tomYum.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_ID` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_role` int(11) NOT NULL DEFAULT '1',
  `user_last_login` datetime NOT NULL,
  PRIMARY KEY (`user_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_ID`, `user_name`, `user_password`, `user_email`, `user_role`, `user_last_login`) VALUES
(54, 'admin_01', 'admin_01', 'admin_01@gmail.com', 0, '2019-10-10 13:00:00'),
(52, 'zack', 'zack', 'zack@gmail.com', 1, '2019-10-30 05:14:14');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
