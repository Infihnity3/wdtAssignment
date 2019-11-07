-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 07, 2019 at 07:30 AM
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `contact_email`, `contact_message`) VALUES
(1, 'zack@gmail.com', 'yoyoyo\r\n'),
(2, '1@gmail.com', '12');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

DROP TABLE IF EXISTS `food`;
CREATE TABLE IF NOT EXISTS `food` (
  `food_ID` int(11) NOT NULL AUTO_INCREMENT,
  `food_name` varchar(50) NOT NULL,
  `food_description` varchar(255) NOT NULL,
  `food_price` int(11) NOT NULL,
  `food_img` text NOT NULL,
  `food_type` varchar(50) NOT NULL,
  PRIMARY KEY (`food_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`food_ID`, `food_name`, `food_description`, `food_price`, `food_img`, `food_type`) VALUES
(7, 'Tom Yum', 'Sour Thai soup served with seafood.', 25, 'foodImage/tomYum.jpg', 'thai'),
(9, 'Thai Fried Rice', 'Fried jasmine rice served with a handful of seafood', 25, 'foodImage/thaiFriedRice.jpg', 'thai'),
(10, 'Green Curry', 'A Thai curry based on coconut milk and fresh green chillies, the color comes out creamy mild green', 25, 'foodImage/tomYum.jpg', 'thai'),
(14, 'Nasi Lemak', 'Fragrant Rice served with sambal and eggs.', 15, 'foodImage/nasiLemak.jpg', 'local'),
(15, 'Roti Canai', 'Roti Canai is an Indian-influenced flatbread dish', 10, 'foodImage/rotiCanai.jpg', 'local'),
(16, 'Char Kway Teow', 'Char kway teow, literally \"stir-fried rice cake strips\", is a popular noodle dish.', 20, 'foodImage/charKwayTeow.jpg', 'local'),
(17, 'Nigiri Sushi', 'Nigiri is a specific type of sushi consisting of a slice of raw fish over pressed vinegared rice.', 95, 'foodImage/nigiriSushi.jpg', 'japanese'),
(18, 'Ramen', 'Ramen is a dish that served with Chinese wheat noodles in a fish-based broth flavored with soy sauce or miso, and toppings like sliced of char siew and scallions.', 55, 'foodImage/japaneseRamen.jpg', 'japanese'),
(19, 'Bento', 'Bento is a single-portion take-out or home-packed meal it has rice or noodles, fish or meat, with pickled and cooked vegetables, in a box.', 75, 'foodImage/japaneseBento.jpg', 'japanese');

-- --------------------------------------------------------

--
-- Table structure for table `orderfood`
--

DROP TABLE IF EXISTS `orderfood`;
CREATE TABLE IF NOT EXISTS `orderfood` (
  `order_ID` int(11) NOT NULL AUTO_INCREMENT,
  `food_ID` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  PRIMARY KEY (`order_ID`),
  KEY `food_ID` (`food_ID`),
  KEY `orderfood_ibfk_2` (`user_name`)
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderfood`
--

INSERT INTO `orderfood` (`order_ID`, `food_ID`, `user_name`) VALUES
(57, 9, 'zack'),
(58, 14, 'zack'),
(59, 9, 'zack'),
(60, 9, 'zack'),
(61, 10, 'zack'),
(62, 10, 'zack'),
(63, 9, 'zack'),
(64, 19, 'zack'),
(65, 9, 'zack'),
(66, 10, 'zack'),
(67, 14, 'zack');

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
  PRIMARY KEY (`user_ID`),
  UNIQUE KEY `user_name` (`user_name`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_ID`, `user_name`, `user_password`, `user_email`, `user_role`, `user_last_login`) VALUES
(54, 'admin_01', 'b2cdd380947330cab613d974492b8e26', 'admin_01@gmail.com', 0, '2019-10-10 13:00:00'),
(63, 'zack', 'd41d8cd98f00b204e9800998ecf8427e', 'zack@gmail.com', 1, '2019-11-04 07:04:25'),
(64, '1', 'c4ca4238a0b923820dcc509a6f75849b', '1@gmail.com', 1, '2019-11-05 02:40:49');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orderfood`
--
ALTER TABLE `orderfood`
  ADD CONSTRAINT `orderfood_ibfk_1` FOREIGN KEY (`food_ID`) REFERENCES `food` (`food_ID`),
  ADD CONSTRAINT `orderfood_ibfk_2` FOREIGN KEY (`user_name`) REFERENCES `users` (`user_name`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
