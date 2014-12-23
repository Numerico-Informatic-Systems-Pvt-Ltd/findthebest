-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2014 at 01:53 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project_maher`
--

-- --------------------------------------------------------

--
-- Table structure for table `attribute`
--

CREATE TABLE IF NOT EXISTS `attribute` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `type` int(11) NOT NULL COMMENT '0-undefined,1-defined',
  `unit` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `attribute`
--

INSERT INTO `attribute` (`id`, `name`, `type`, `unit`) VALUES
(1, 'zdsd', 0, ''),
(2, 'color', 1, ''),
(3, 'size', 1, ''),
(4, 'variable price', 1, ''),
(5, 'weight', 1, ''),
(6, 'durability', 1, ''),
(7, '4545', 0, ''),
(8, 'gh', 0, '200'),
(9, 'test attribute', 1, 'kg');

-- --------------------------------------------------------

--
-- Table structure for table `attribute_values`
--

CREATE TABLE IF NOT EXISTS `attribute_values` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `attr_id` int(11) NOT NULL,
  `attr_value` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `attribute_values`
--

INSERT INTO `attribute_values` (`id`, `attr_id`, `attr_value`) VALUES
(1, 1, 'random'),
(2, 2, 'white'),
(3, 2, 'blue'),
(4, 2, 'red'),
(5, 2, 'black'),
(6, 5, 'lite'),
(7, 5, 'heavy');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `attr_id` varchar(250) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `is_deleted` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `parent_id`, `category`, `details`, `image`, `attr_id`, `status`, `is_deleted`) VALUES
(1, 0, 'Personal Finance', '<p>Personal Finance</p>\r\n', 'personal_finance_icon.png', '', 1, 1),
(2, 0, 'Automobile Cars,Bike', '<p>Automobile Cars,Bike</p>\r\n', 'automobile.png', '', 1, 1),
(3, 0, 'Electronics', '<p>Electronics</p>\r\n', 'electronics.png', '', 1, 1),
(4, 0, 'Telephone Company', '<p>Telephone Company</p>\r\n', 'telephone.png', '', 1, 1),
(5, 3, 'Computer Components', '<p><span style="color: rgb(77, 77, 77); font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: bold; line-height: 27.2000007629395px; background-color: rgb(243, 244, 246);">Computer Components</span></p>\r\n', '', '', 1, 1),
(6, 3, 'Mobile Tech', '<p>Mobile Tech the subcategory of Electronics</p>', '', '', 1, 1),
(7, 3, 'Personal Tech', '<p>Personal tech the category of Electronics</p>\r\n', '', '', 1, 1),
(8, 3, 'PCs and Laptops', '<p>PCs and Laptops is the subcategory of Electronics</p>\r\n', '', '', 1, 1),
(9, 6, 'Smart Phones', '<p>Smart Phones is the subcategory of Mobile tech</p>\r\n', 'ele1.png', '', 1, 1),
(10, 7, 'Head Phones', '<p><span style="color: rgb(50, 50, 50); font-family: noto_sansregular; font-size: 14px; line-height: 20px; text-align: center; text-transform: capitalize;">Head Phones is the subcategory of personal tech</span></p>\r\n', 'ele2.png', '2,5', 1, 1),
(11, 8, 'Laptop & Notebooks', '<p><span style="color: rgb(50, 50, 50); font-family: noto_sansregular; font-size: 14px; line-height: 20px; text-align: center; text-transform: capitalize;">Laptop &amp; Notebooks are subcategory of pcs and laptops</span></p>\r\n', 'ele3.png', '', 1, 1),
(12, 5, 'Computer Monitors', '<p><span style="color: rgb(50, 50, 50); font-family: noto_sansregular; font-size: 14px; line-height: 20px; text-align: center; text-transform: capitalize;">Computer Monitors is the subcategory of computer components</span></p>\r\n', 'ele4.png', '', 1, 1),
(13, 7, 'Speakers', '<p>Speakers are the subcategory of personal tech</p>\r\n', 'ele5.png', '', 1, 1),
(14, 5, 'Computer Speakers', '<p>Computer Speakers are the subcategory of computer components</p>\r\n', 'ele51.png', '', 1, 1),
(15, 5, 'Motherboards', '<p><span style="color: rgb(50, 50, 50); font-family: noto_sansregular; font-size: 14px; line-height: 20px; text-align: center; text-transform: capitalize;">Motherboards is the subcategory of computer components</span></p>\r\n', 'ele6.png', '', 1, 1),
(16, 5, 'Solid State Drivers', '<p><span style="color: rgb(50, 50, 50); font-family: noto_sansregular; font-size: 14px; line-height: 20px; text-align: center; text-transform: capitalize;">Solid State Drivers are the subcategory of&nbsp;Solid State Drivers</span></p>\r\n', 'ele7.png', '', 1, 1),
(17, 5, 'Processors(CPUs)', '<p>Processors(CPUs) are the subcategory of computer components</p>\r\n', 'ele8.png', '', 1, 1),
(18, 1, 'Banking', '<p>Banking is Subcategory of Personal finance</p>\n', '', '', 1, 1),
(19, 1, 'Insurance', '<p>This is Sub Category of Personal Finance.</p>\n', '', '', 1, 1),
(20, 18, 'ATM Location', '<p>This is SubCategory of Banking</p>\n', 'Atm_location.png', '', 1, 1),
(21, 18, 'Auto Loans', '<p>This is Sub Category of Banking.</p>\n', 'auto_loan.png', '', 1, 1),
(22, 18, 'Checking Accounts', '<p><span style="line-height: 20.7999992370605px;">This is Sub Category of Banking.</span></p>\n', 'checking_account.png', '', 1, 1),
(23, 19, 'Car Insurance', '<p>This is sub Category of Insurance</p>\n', 'car_insurence.png', '', 1, 1),
(24, 19, 'Home Insurance', '<p>This is sub Category of Insurance.</p>\n', 'home_insurence.png', '', 1, 1),
(25, 19, 'Motorcycle Insurance', '<p><span style="line-height: 20.7999992370605px;">This is sub Category of Insurance.</span></p>\n', 'motorcycle_insurence.png', '', 1, 1),
(26, 2, 'Aviation', '<p>This is Sub Category of Automobile, Cars, Bike.</p>\n', '', '', 1, 1),
(28, 26, 'Airplane', '<p><span style="line-height: 20.7999992370605px;">This is Sub Category of Aviation.</span></p>\n', 'airplane.png', '', 1, 1),
(29, 26, 'Helicopters', '<p><span style="line-height: 20.7999992370605px;">This is Sub Category of Aviation.</span></p>\n', 'helicopters.png', '', 1, 1),
(30, 2, 'Industrial & Agriculture Machinery', '<p>This is sub Ctaegory of Automobiles Cars, Bike.</p>\n', '', '', 1, 1),
(31, 30, 'Forklift & Lift Truck', '<p>This is Sub Category of Industrial &amp; Agricluture Machinery.</p>\n', 'forklift_Lift_truck.png', '', 1, 1),
(32, 30, 'Loaders', '<p><span style="line-height: 20.7999992370605px;">This is Sub Category of Industrial &amp; Agricluture Machinery.</span></p>\n', 'loaders.png', '', 1, 1),
(33, 30, 'Tractors', '<p><span style="line-height: 20.7999992370605px;">This is Sub Category of Industrial &amp; Agricluture Machinery.</span></p>\n', 'tractors.png', '', 1, 1),
(34, 4, 'GSM', '<p>This is sub Category of &nbsp;Telephone Company</p>\n', '', '', 1, 1),
(35, 4, 'CDMA', '<p>This is Sub Category of Telephone Company</p>\n', '', '', 1, 1),
(36, 34, 'Saudi Telecom Company', '<p>This is Sub Category of GSM</p>\n', 'stc.jpg', '', 1, 1),
(37, 34, 'Mobily', '<p>This is sub category of GSM</p>\n', 'mobily.jpg', '', 1, 1),
(38, 34, 'Zain', '<p>This is Sub Category of GSM</p>\n', 'zain.jpg', '', 1, 1),
(39, 35, 'Bravo', '<p>This is sub Category of CDMA</p>\n', 'aaa.jpg', '', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `catg_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `thumb_image` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `catg_id`, `price`, `description`, `image`, `thumb_image`) VALUES
(1, 'test head phone', 10, 450, 'Headphone', 'headphonetwo.jpg', 'headphone.jpg'),
(2, 'test head phone', 10, 500, '', 'left11.jpg', 'thumbleft11.jpg'),
(3, 'ATLANTIS ETERNITY BAND', 10, 200, '', '', ''),
(4, 'ATLANTIS ETERNITY', 10, 200, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `product_attributes`
--

CREATE TABLE IF NOT EXISTS `product_attributes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prd_id` int(11) NOT NULL,
  `attr_id` varchar(255) NOT NULL,
  `attr_value` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `product_attributes`
--

INSERT INTO `product_attributes` (`id`, `prd_id`, `attr_id`, `attr_value`) VALUES
(1, 1, '1', 1),
(2, 2, '2', 3),
(3, 2, '5', 7),
(4, 3, '2', 4),
(5, 3, '5', 6),
(6, 4, '2', 5),
(7, 4, '5', 7);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE IF NOT EXISTS `review` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `visitor_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `review` text NOT NULL,
  `rate` int(11) NOT NULL,
  `post_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `visitor_id`, `product_id`, `review`, `rate`, `post_date`) VALUES
(1, 1, 1, 'this is test review', 4, '0000-00-00 00:00:00'),
(2, 1, 1, 'dfds ', 5, '0000-00-00 00:00:00'),
(3, 1, 1, 'This is test review.....', 3, '2014-12-15 11:55:41');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `status`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'mail.me097@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE IF NOT EXISTS `visitors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `google_id` varchar(255) NOT NULL,
  `facebook_id` varchar(255) NOT NULL,
  `phone` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `email`, `password`, `f_name`, `l_name`, `google_id`, `facebook_id`, `phone`) VALUES
(1, 'shibu', 'shibu', 'shib', 'shankar', 'shibu20sxc@gmail.com', 'shibu_sxc@yahoo.co.in', '9775391105');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
