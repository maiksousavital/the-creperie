-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2020 at 12:51 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_thecreperie`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about`
--

CREATE TABLE `tbl_about` (
  `id` int(11) NOT NULL,
  `picture` varchar(200) NOT NULL,
  `picture_2` varchar(200) NOT NULL,
  `about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_about`
--

INSERT INTO `tbl_about` (`id`, `picture`, `picture_2`, `about`) VALUES
(47, 'about1.jpg', 'about-13.jpg', 'Located in the Riverside Market, <b>the creperie</b> will be the first fast-casual creperie in\r\n                    Christchurch.\r\n                    We are excited to delight you with the best sweet and savory crepes made to order with love.\r\n                    We invite you to come and enjoy something truly unique!');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(5) NOT NULL,
  `num_people` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `confirmed` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_booking`
--

INSERT INTO `tbl_booking` (`id`, `name`, `email`, `phone`, `date`, `time`, `num_people`, `created`, `confirmed`) VALUES
(2, 'Maik Sousa Vital', 'maikbatera1@gmail.com', 212273442, '2019-12-21', '15:30', 4, '2019-12-11 03:40:14', 1),
(6, 'Maik Sousa Vital', 'maikbatera1@gmail.com', 212273442, '2020-02-08', '02:03', 10, '2020-02-01 00:36:11', 0),
(7, 'Maik Sousa Vital', 'maikbatera1@gmail.com', 212273442, '2020-02-14', '05:05', 4, '2020-02-01 03:28:53', 0),
(8, 'Maik Sousa Vital', 'maikbatera1@gmail.com', 212273442, '2020-02-15', '15:03', 2, '2020-02-01 03:31:24', 0),
(9, 'Maik Sousa Vital', 'maikbatera1@gmail.com', 212273442, '2020-02-03', '18:00', 6, '2020-02-02 21:50:05', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(11) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `category`) VALUES
(1, 'Savory'),
(2, 'Sweet'),
(3, 'Coffee'),
(4, 'Tea');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `status` tinyint(1) DEFAULT 0,
  `message_date` datetime DEFAULT NULL,
  `read_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `name`, `email`, `subject`, `message`, `status`, `message_date`, `read_date`) VALUES
(123, 'Maik Sousa Vital', 'maikbatera1@gmail.com', 'Food', 'How much does the crepe cost?', 1, '2019-12-10 09:36:04', '2019-12-10 09:36:35'),
(125, 'Maik Sousa Vital', 'maikbatera1@gmail.com', 'SMS', 'SMS', 1, '2019-12-11 09:37:36', '2020-01-30 08:55:29'),
(126, 'Maik Sousa Vital', 'maikbatera1@gmail.com', 'sms', 'asdasdsa', 1, '2019-12-11 09:38:02', '2020-01-30 10:54:23'),
(127, 'Maik Sousa Vital', 'maikbatera1@gmail.com', 'sssss', 'sssss', 1, '2019-12-11 09:38:28', '2020-01-31 01:22:33'),
(128, 'Maik Sousa Vital', 'maikbatera1@gmail.com', 'SMS test', 'TESt', 1, '2019-12-11 11:38:19', '2020-02-04 08:26:32'),
(129, 'Maik Sousa Vital', 'maikbatera1@gmail.com', 'Email', 'Email', 0, '2019-12-19 01:37:17', NULL),
(130, 'Maik Sousa Vital', 'maikbatera1@gmail.com', 'email 2', 'email 2', 0, '2019-12-19 01:38:30', NULL),
(131, 'Maik Sousa Vital', 'maikbatera1@gmail.com', 'sasa', 'asas', 0, '2019-12-19 01:41:22', NULL),
(132, 'Maik Sousa Vital', 'maikbatera1@gmail.com', 'sssssssss', 'ssssssssss', 0, '2019-12-19 01:43:52', NULL),
(133, 'Maik Sousa Vital', 'maikbatera1@gmail.com', 'mmm', 'mm', 0, '2019-12-19 02:12:23', NULL),
(134, 'Maik Sousa Vital', 'maikbatera1@gmail.com', 'ggg', 'ggg', 0, '2019-12-19 02:12:36', NULL),
(135, 'Maik Sousa Vital', 'maikbatera1@gmail.com', 'ggg', 'ggg', 0, '2019-12-19 02:12:50', NULL),
(136, 'Maik Sousa Vital', 'maikbatera1@gmail.com', 'Equipment ', 'aa', 0, '2019-12-19 02:13:38', NULL),
(137, 'Maik Sousa Vital', 'maikbatera1@gmail.com', 'Equipment ', 'kljdslkjask', 0, '2020-01-31 01:17:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `picture` varchar(200) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`id`, `title`, `picture`, `created`, `modified`, `status`) VALUES
(6, '1', 'WIN_20190410_13_56_54_Pro.jpg', '2020-01-14 22:01:06', '0000-00-00 00:00:00', 0),
(10, '2', 'gallery2.jpg', '2020-01-16 04:28:34', '0000-00-00 00:00:00', 0),
(11, '3', 'gallery10.jpg', '2020-01-16 21:37:21', '0000-00-00 00:00:00', 0),
(12, '4', 'gallery1.jpg', '2020-01-16 21:37:36', '0000-00-00 00:00:00', 0),
(13, '5', 'gallery4.jpg', '2020-01-16 21:37:48', '0000-00-00 00:00:00', 0),
(14, '6', 'gallery5.jpg', '2020-01-16 21:38:05', '0000-00-00 00:00:00', 0),
(15, '7', 'gallery11.jpg', '2020-01-16 22:13:45', '0000-00-00 00:00:00', 0),
(16, '8', 'coffee-4.jpg', '2020-01-16 22:13:54', '0000-00-00 00:00:00', 0),
(18, '9', 'coffee-41.jpg', '2020-01-16 22:14:12', '0000-00-00 00:00:00', 0),
(19, '10', 'd1.png', '2020-01-16 22:14:19', '0000-00-00 00:00:00', 0),
(20, '11', 'fav.png', '2020-01-16 22:14:25', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_home`
--

CREATE TABLE `tbl_home` (
  `id` int(11) NOT NULL,
  `video` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_home`
--

INSERT INTO `tbl_home` (`id`, `video`) VALUES
(56, 'thecreperie.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu`
--

CREATE TABLE `tbl_menu` (
  `id` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `picture` varchar(200) NOT NULL,
  `price` double NOT NULL,
  `large_price` double DEFAULT NULL,
  `category` int(10) NOT NULL,
  `ingredients` text DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_menu`
--

INSERT INTO `tbl_menu` (`id`, `title`, `description`, `picture`, `price`, `large_price`, `category`, `ingredients`, `created`, `modified`, `status`) VALUES
(151, 'caffee update', 'coffee', 'coffee-3.jpg', 5, 8, 3, '', '2019-12-05 21:15:58', '2020-02-03 23:15:38', 1),
(167, 'savory', 'sasa', 'bg.jpg', 12, 0, 1, '', '2020-02-03 23:30:31', '0000-00-00 00:00:00', 1),
(168, 'bbbb', 'bbbb', 'savory-4.jpg', 13, 0, 1, '', '2020-02-03 23:30:56', '0000-00-00 00:00:00', 1),
(169, 'tea', 'tea', 'tea-3.jpg', 3, 4, 4, '', '2020-02-03 23:39:11', '0000-00-00 00:00:00', 1),
(170, 'coffee', 'coffee', 'coffee-1.jpg', 2, 3.5, 3, '', '2020-02-03 23:42:25', '0000-00-00 00:00:00', 1),
(171, 'savory 3', 'dddd', 'savory-5.jpg', 14, 0, 1, '', '2020-02-04 00:05:43', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_newsletter`
--

CREATE TABLE `tbl_newsletter` (
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_newsletter`
--

INSERT INTO `tbl_newsletter` (`email`) VALUES
('maikbatera1@gmail.com'),
('demo@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rating`
--

CREATE TABLE `tbl_rating` (
  `id` int(11) NOT NULL,
  `avatar` varchar(50) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `review` text NOT NULL,
  `rating` float DEFAULT NULL,
  `status` tinyint(1) DEFAULT 0,
  `created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_rating`
--

INSERT INTO `tbl_rating` (`id`, `avatar`, `name`, `email`, `review`, `rating`, `status`, `created`) VALUES
(54, 'avatar3.png', 'Maik Sousa Vital', 'maikbatera1@gmail.com', 'Good', 1, 1, '2019-12-08 20:24:28'),
(55, 'avatar3.png', 'Maik Sousa Vital', 'maikbatera1@gmail.com', 'Very good', 4, 1, '2019-12-10 21:34:43'),
(57, 'avatar2.png', 'Maik Sousa Vital', 'maikbatera1@gmail.com', 'Test change input name', 3, 1, '2019-12-13 21:18:47'),
(58, 'avatar3.png', 'Maik Sousa Vital', 'maikbatera1@gmail.com', 'test', 3, 1, '2020-02-04 20:24:27');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(100) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `username`, `password`, `first_name`, `last_name`) VALUES
(1, 'admin@thecreperie.com', 'e10adc3949ba59abbe56e057f20f883e', 'Admin', 'Admin'),
(6, 'maikbatera1@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Maik', 'Vital');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_about`
--
ALTER TABLE `tbl_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_home`
--
ALTER TABLE `tbl_home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_rating`
--
ALTER TABLE `tbl_rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_about`
--
ALTER TABLE `tbl_about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_home`
--
ALTER TABLE `tbl_home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;

--
-- AUTO_INCREMENT for table `tbl_rating`
--
ALTER TABLE `tbl_rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
