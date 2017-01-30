-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2017 at 02:41 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lalin`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(3) NOT NULL,
  `brand_name` varchar(225) NOT NULL,
  `alias` varchar(225) NOT NULL,
  `description` varchar(30) NOT NULL,
  `logo` varchar(225) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `user_id` int(3) NOT NULL,
  `shop_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_name`, `alias`, `description`, `logo`, `status`, `user_id`, `shop_id`) VALUES
(3, 'brand name', 'jdklfjkl', 'jsllpplp\r\nd', 'test01.PNG', 1, 1, 0),
(4, 'nike', 'jwjoie', 'skdhkjshfewmlksdf', '01.PNG', 1, 1, 0),
(5, 'addadas', 'fdfg', 'fdgfg', '240472-14060ZK35018.jpg', 1, 1, 0),
(6, 'buma', 'dfgfdg', 'frgfdgf', 'f0c1-128.png', 1, 1, 0),
(7, 'new brand', 'sdf', 'gtyg', 'maxresdefault.jpg', 1, 1, 0),
(8, 'conver all star', 'test', 'just test\r\n', 'images.jpg', 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cate_id` int(3) NOT NULL,
  `category_name` varchar(225) NOT NULL,
  `alias` varchar(225) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image` varchar(300) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `user_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cate_id`, `category_name`, `alias`, `description`, `image`, `status`, `user_id`) VALUES
(1, 'bags', 'sdfgfd', 'rteert', '', 1, 1),
(3, 'shoes', 'jwjoie', 'djjjfjs', '02.PNG', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `images_item`
--

CREATE TABLE `images_item` (
  `imgItem_id` int(11) NOT NULL,
  `thumbnail` varchar(225) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `item_id` int(3) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `images_item`
--

INSERT INTO `images_item` (`imgItem_id`, `thumbnail`, `created`, `modified`, `item_id`, `status`) VALUES
(38, 'f015-128.png', '2017-01-25 17:21:42', '2017-01-25 17:21:42', 123, 1),
(39, 'f013-128.png', '2017-01-25 17:21:42', '2017-01-25 17:21:42', 123, 1),
(40, 'f07a-128.png', '2017-01-25 17:21:42', '2017-01-25 17:21:42', 123, 1),
(41, 'f007-128.png', '2017-01-25 17:21:42', '2017-01-25 17:21:42', 123, 1),
(42, 'turn_off.png', '2017-01-25 17:24:56', '2017-01-25 17:24:56', 124, 1),
(43, 'yes.png', '2017-01-25 17:24:56', '2017-01-25 17:24:56', 124, 1),
(44, 'no.png', '2017-01-25 17:24:56', '2017-01-25 17:24:56', 124, 1),
(45, 'off.png', '2017-01-25 17:24:56', '2017-01-25 17:24:56', 124, 1),
(46, 'yes1.png', '2017-01-25 17:26:37', '2017-01-25 17:26:37', 125, 1),
(47, 'no1.png', '2017-01-25 17:26:37', '2017-01-25 17:26:37', 125, 1),
(48, 'off1.png', '2017-01-25 17:26:37', '2017-01-25 17:26:37', 125, 1),
(49, 'turn_off1.png', '2017-01-25 17:26:37', '2017-01-25 17:26:37', 125, 1),
(50, '02.PNG', '2017-01-25 17:36:49', '2017-01-25 17:36:49', 126, 1),
(51, '15781823_1217457324969810_5400390225862061382_n.png', '2017-01-25 17:36:49', '2017-01-25 17:36:49', 126, 1),
(52, 'icon-education.png', '2017-01-25 17:36:49', '2017-01-25 17:36:49', 126, 1),
(53, 'Cyber-Cafe-l.jpg', '2017-01-25 17:36:49', '2017-01-25 17:36:49', 126, 1);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` int(3) NOT NULL,
  `item_name` varchar(225) NOT NULL,
  `price` float NOT NULL,
  `description` varchar(300) NOT NULL,
  `category` varchar(225) NOT NULL,
  `brand` varchar(225) NOT NULL,
  `shop` varchar(225) NOT NULL,
  `thumbnail` varchar(300) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `user_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `item_name`, `price`, `description`, `category`, `brand`, `shop`, `thumbnail`, `status`, `user_id`) VALUES
(123, 'shoes girl', 23, 'just test', 'shoes', 'nike', 'nuna shop', '', 1, 1),
(124, 't', 3, 'fdg', 'bags', 'conver all star', 'nuna shop', '', 1, 1),
(125, 'h', 2, 'dgfhg', 'bags', 'brand name', 'nuna shop', '', 1, 1),
(126, 'm', 6, 'ghgj', 'bags', 'brand name', 'nuna shop', '', 1, 1),
(127, 'm', 2, 'cgfd', 'bags', 'brand name', 'nuna shop', '', 1, 1),
(128, 'm', 2, 'cgfd', 'bags', 'brand name', 'nuna shop', '', 1, 1),
(129, 'm', 2, 'cgfd', 'bags', 'brand name', 'nuna shop', '', 1, 1),
(130, 'm', 2, 'cgfd', 'bags', 'brand name', 'nuna shop', '', 1, 1),
(131, 'm', 2, 'cgfd', 'bags', 'brand name', 'nuna shop', '', 1, 1),
(132, 'm', 2, 'cgfd', 'bags', 'brand name', 'nuna shop', '', 1, 1),
(133, 'm', 2, 'cgfd', 'bags', 'brand name', 'nuna shop', '', 1, 1),
(134, 'm b', 2, 'cgfd', 'bags', 'brand name', 'nuna shop', '', 1, 0),
(135, 'shoes girl', 23, 'just test', 'shoes', 'buma', 'nuna shop', '', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `item_images`
--

CREATE TABLE `item_images` (
  `img_id` int(3) NOT NULL,
  `img_one` varchar(300) NOT NULL,
  `img_two` varchar(300) NOT NULL,
  `img_three` varchar(300) NOT NULL,
  `img_four` varchar(300) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `item_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `item_images`
--

INSERT INTO `item_images` (`img_id`, `img_one`, `img_two`, `img_three`, `img_four`, `status`, `item_id`) VALUES
(1, '026.PNG', 'turn_off3.png', 'test_logo3.PNG', 'icon-education4.png', 1, 134),
(2, 'yes2.png', 'turn_off4.png', 'turnon3.png', 'off6.png', 1, 135);

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE `shops` (
  `shop_id` int(3) NOT NULL,
  `shop_name` varchar(225) NOT NULL,
  `category` varchar(225) NOT NULL,
  `description` varchar(300) NOT NULL,
  `banner` varchar(300) DEFAULT NULL,
  `user_id` int(3) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shops`
--

INSERT INTO `shops` (`shop_id`, `shop_name`, `category`, `description`, `banner`, `user_id`, `status`) VALUES
(33, 'nuna shop', 'large', 'just test', NULL, 1, 1),
(34, 'nana shop', 'small', 'mmmmmmmm', NULL, 1, 1),
(35, 'rrr', 'small', 'dffsfs', '72af05bf80396e8f6ee5a4d73ea37d89.jpg', 1, 1),
(36, 'g', 'small', 'g', 'maxresdefault.jpg', 1, 1),
(37, 'just edit', 'bags', 'fsdfjf', '10661155_595685417199570_529247065_n.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `shop_contact`
--

CREATE TABLE `shop_contact` (
  `contact_id` int(3) NOT NULL,
  `contact_name` varchar(225) NOT NULL,
  `contact_phone` varchar(20) NOT NULL,
  `contact_email` varchar(225) NOT NULL,
  `contact_address` varchar(225) NOT NULL,
  `shop_id` int(3) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shop_contact`
--

INSERT INTO `shop_contact` (`contact_id`, `contact_name`, `contact_phone`, `contact_email`, `contact_address`, `shop_id`, `status`) VALUES
(8, 'noona', '0123456789', 'test@gmail.com', 'home', 33, 1),
(9, 'nana', '0123456789', 'test@gmail.com', 'home', 34, 1),
(10, 'r', '0123456789', 'test@gmail.com', 'home', 35, 1),
(11, 'g', '0123456789', 'test@gmail.com', 'g', 36, 1),
(12, 'test edit', '0123456789', 'test@gmail.com', 'home', 37, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(3) NOT NULL,
  `fname` varchar(225) NOT NULL,
  `lname` varchar(225) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(225) NOT NULL,
  `repassword` varchar(225) NOT NULL,
  `gmail` varchar(225) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fname`, `lname`, `username`, `password`, `repassword`, `gmail`, `phone`, `status`) VALUES
(1, '', '', 'test', '321', '', 'test@gmail.com', '', 1),
(3, '', '', '', '', '', '', '', 1),
(4, 'test', 'leng', 'testleng', '123', '123', 'test@gmail.com', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cate_id`);

--
-- Indexes for table `images_item`
--
ALTER TABLE `images_item`
  ADD PRIMARY KEY (`imgItem_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `item_images`
--
ALTER TABLE `item_images`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`shop_id`);

--
-- Indexes for table `shop_contact`
--
ALTER TABLE `shop_contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cate_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `images_item`
--
ALTER TABLE `images_item`
  MODIFY `imgItem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;
--
-- AUTO_INCREMENT for table `item_images`
--
ALTER TABLE `item_images`
  MODIFY `img_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `shops`
--
ALTER TABLE `shops`
  MODIFY `shop_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `shop_contact`
--
ALTER TABLE `shop_contact`
  MODIFY `contact_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
