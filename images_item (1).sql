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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images_item`
--
ALTER TABLE `images_item`
  ADD PRIMARY KEY (`imgItem_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images_item`
--
ALTER TABLE `images_item`
  MODIFY `imgItem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
