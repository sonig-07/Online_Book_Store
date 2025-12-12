-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2022 at 10:31 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `fullname`, `email`, `contact`, `address`, `password`) VALUES
('admin', 'admin', 'admin@gmail.com', '', '', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `category_slug`) VALUES
(12, 'Action and adventure', 'actionandadventure'),
(13, 'Classic', 'classic'),
(14, 'Crime', 'crime'),
(15, 'Horror', 'horror'),
(16, 'Mystery', 'mystery'),
(17, 'Romance', 'romance'),
(18, 'Drama', 'drama'),
(19, 'Suspense', 'suspense');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(30) NOT NULL,
  `product_id` int(30) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `quantity` int(30) NOT NULL,
  `order_date` date NOT NULL,
  `username` varchar(256) NOT NULL,
  `category_slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_slug` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `img` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_slug`, `product_name`, `price`, `description`, `img`) VALUES
(23, 'romance', 'Rose of Passion', '99', 'Book by Jeanne Sommers\r\n\r\nThe author of “Profiles in Corruption” portrays a conspiracy of how the Chinese government might infiltrate American institutions.', 'Rose of Passion.jpg'),
(24, 'romance', 'Our Story', '99', 'Book By Navin Gohite\r\n\r\nThe author of “Profiles in Corruption” portrays a conspiracy of how the Chinese government might infiltrate American institutions.', 'book by navin.jpg'),
(25, 'romance', 'LOVE OCEAN', '99', 'Book By Unknown\r\n\r\nThe author of “Profiles in Corruption” portrays a conspiracy of how the Chinese government might infiltrate American institutions.', 'LOVE OCEAN.jpg'),
(26, 'romance', 'ONE DAY IN SEPTEMBER', '99', 'A NOVEL\r\nBY RICHARD MAY\r\n\r\nThe author of “Profiles in Corruption” portrays a conspiracy of how the Chinese government might infiltrate American institutions.', 'A NOVEL.jpg'),
(27, 'horror', 'Header', '99', 'Book by Anonymous\r\n\r\nThe author of “Profiles in Corruption” portrays a conspiracy of how the Chinese government might infiltrate American institutions.', 'header.jpg'),
(29, 'horror', 'THE DARKEST HOUR', '199', 'Book By Alfred Churchill\r\n\r\nThe author of “Profiles in Corruption” portrays a conspiracy of how the Chinese government might infiltrate American institutions.', 'Copy of thriller fantasy apocalyptic novel.jpg'),
(30, 'mystery', 'BLUE BIRD', '199', 'Book by George Smith\r\n\r\nThe author of “Profiles in Corruption” portrays a conspiracy of how the Chinese government might infiltrate American institutions.', 'George Smith.jpg'),
(31, 'drama', 'A Million to One', '99', 'Book by Anonymous\r\n\r\nThe author of “Profiles in Corruption” portrays a conspiracy of how the Chinese government might infiltrate American institutions.', 'a-million-to-one.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(256) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
