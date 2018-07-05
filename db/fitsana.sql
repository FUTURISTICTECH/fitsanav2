-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2018 at 10:13 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fitsana`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`) VALUES
(1, 'EVENTS'),
(2, 'MUSIC');

-- --------------------------------------------------------

--
-- Table structure for table `public_users`
--

CREATE TABLE `public_users` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `public_users`
--

INSERT INTO `public_users` (`id`, `email`, `password`) VALUES
(1, 'amos@hauzent.biz', 'amos');

-- --------------------------------------------------------

--
-- Table structure for table `upcoming_shows`
--

CREATE TABLE `upcoming_shows` (
  `id` int(11) NOT NULL,
  `show_name` varchar(100) NOT NULL,
  `poster` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upcoming_shows`
--

INSERT INTO `upcoming_shows` (`id`, `show_name`, `poster`, `date`) VALUES
(15, 'Safaricom Blaze Mombasa', 'IMG_9500.jpg', '2018-06-24'),
(17, 'Safaricom Twaweza Live Meru ', 'IMG_9501.jpg', '2018-07-15'),
(18, 'Blaze', 'IMG_9500.jpg', '2018-07-20');

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE `uploads` (
  `id` int(11) NOT NULL,
  `category` varchar(30) NOT NULL,
  `title` varchar(300) NOT NULL,
  `location` varchar(30) NOT NULL,
  `file_name` varchar(30) NOT NULL,
  `author` varchar(30) NOT NULL,
  `upload_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`id`, `category`, `title`, `location`, `file_name`, `author`, `upload_time`) VALUES
(92, 'EVENTS', 'Safaricom Twaweza Live Meru 25', 'Meru', 'IMG_9486.jpg', 'kevin92makau@gmail.com', '2018-06-18 13:11:33'),
(93, 'EVENTS', 'Safaricom Twaweza Live Meru 25', 'Meru', 'IMG_9487.jpg', 'kevin92makau@gmail.com', '2018-06-18 13:11:34'),
(94, 'EVENTS', 'Safaricom Twaweza Live Meru 25', 'Meru', 'IMG_9488.jpg', 'kevin92makau@gmail.com', '2018-06-18 13:11:34'),
(95, 'EVENTS', 'Safaricom Twaweza Live Eldoret', 'Eldoret sports club', 'IMG_9501.jpg', 'kevin92makau@gmail.com', '2018-06-18 13:13:32'),
(96, 'EVENTS', 'Safaricom Twaweza Live Eldoret', 'Eldoret sports club', 'IMG_9504.jpg', 'kevin92makau@gmail.com', '2018-06-18 13:13:33'),
(97, 'MUSIC', 'Safaricom Twaweza Live Eldoret 20th', 'Eldoret sports club', 'IMG_9512.jpg', 'kevin92makau@gmail.com', '2018-06-18 13:16:37'),
(98, 'MUSIC', 'Safaricom Twaweza Live Eldoret 20th', 'Eldoret sports club', 'IMG_9513.jpg', 'kevin92makau@gmail.com', '2018-06-18 13:16:37'),
(99, 'MUSIC', 'Safaricom Twaweza Live Eldoret 20th', 'Eldoret sports club', 'IMG_9517.jpg', 'kevin92makau@gmail.com', '2018-06-18 13:18:51'),
(100, 'MUSIC', 'Safaricom Twaweza Live Eldoret 20th', 'Eldoret sports club', 'IMG_9529.jpg', 'kevin92makau@gmail.com', '2018-06-18 13:18:51'),
(101, 'EVENTS', 'Safaricom Twaweza Live Meru 20th', 'Eldoret sports club', 'IMG_9532.jpg', 'kevin92makau@gmail.com', '2018-06-18 13:24:14'),
(102, 'EVENTS', 'Safaricom Twaweza Live Meru 20th', 'Eldoret sports club', 'IMG_9534.jpg', 'kevin92makau@gmail.com', '2018-06-18 13:24:14');

-- --------------------------------------------------------

--
-- Table structure for table `uploads_category`
--

CREATE TABLE `uploads_category` (
  `id` int(11) NOT NULL,
  `title` varchar(300) NOT NULL,
  `category` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_auth`
--

CREATE TABLE `user_auth` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_auth`
--

INSERT INTO `user_auth` (`id`, `email`, `password`, `role`) VALUES
(1, 'kevin92makau@gmail.com', 'kevin', 'editor'),
(2, 'kelvin92makau@yahoo.com', 'kevin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `public_users`
--
ALTER TABLE `public_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upcoming_shows`
--
ALTER TABLE `upcoming_shows`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uploads_category`
--
ALTER TABLE `uploads_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_auth`
--
ALTER TABLE `user_auth`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `public_users`
--
ALTER TABLE `public_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `upcoming_shows`
--
ALTER TABLE `upcoming_shows`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `uploads_category`
--
ALTER TABLE `uploads_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_auth`
--
ALTER TABLE `user_auth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
