-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2021 at 12:19 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `summary` text NOT NULL,
  `price` float NOT NULL,
  `category_id` int(11) NOT NULL,
  `cover` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `author`, `summary`, `price`, `category_id`, `cover`, `created_date`, `modified_date`) VALUES
(3, 'Web Dev', 'Morris', 'Web dev & design fundamental', 12, 1, '0134801148.jpg', '2020-09-01 12:39:00', '2020-09-01 12:39:00'),
(4, 'JavaScript', 'Jon Duckett', 'javascript & jquery', 9, 3, 'web.jpg', '2020-09-01 12:39:12', '2020-09-01 12:39:12'),
(7, 'MySQL', 'Jon Duckett', 'database', 5, 1, '41IO4SmtO9L.jpg', '2020-08-31 12:27:14', '2020-08-31 12:27:14'),
(13, 'test', 'test', 'test', 1, 1, 'AdobeStock_78799453_Preview.jpeg', '2020-09-03 07:36:31', '2020-09-03 07:36:31');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `remark` text NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `remark`, `created_date`, `modified_date`) VALUES
(1, 'IT ', '                IT Field                                  ', '2020-09-01 12:43:46', '2020-09-01 12:43:46'),
(2, 'Sport', 'Sport\r\n', '2020-08-23 08:53:45', '2020-08-23 08:53:45'),
(3, 'Laravel', 'Laravel\r\n             ', '2020-09-01 12:44:22', '2020-09-01 12:44:22'),
(4, 'Web Development', '                Web Field                                  ', '2020-09-01 12:43:57', '2020-09-01 12:43:57');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `status` int(1) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `address`, `status`, `created_date`, `modified_date`) VALUES
(9, 'simar', 'simar@gmail.com', '9093847374', 'yangon\r\n', 1, '2021-01-28 21:09:25', '2021-01-28 21:20:05'),
(10, 'bitfume', 'bitfume@gmail.com', '9870000', 'bago', 1, '2021-01-28 21:15:51', '2021-01-28 21:22:59');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `book_id`, `order_id`, `qty`) VALUES
(2, 7, 1, 2),
(5, 7, 9, 1),
(6, 7, 10, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
