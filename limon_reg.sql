-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2019 at 09:11 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `limon_reg`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `about_image` varchar(150) NOT NULL DEFAULT 'defaultbannerphoto.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `title`, `description`, `about_image`) VALUES
(1, 'arvi raj limon', 'maurisque eros molest nunc anteget sed vel lacus m', '1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `about_text`
--

CREATE TABLE `about_text` (
  `id` int(11) NOT NULL,
  `about_title` varchar(50) NOT NULL,
  `about_footer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_text`
--

INSERT INTO `about_text` (`id`, `about_title`, `about_footer`) VALUES
(4, '', 'Name of the book'),
(5, '', 'How other think'),
(6, '', 'Name of the writter'),
(7, '', 'The Bad Ones'),
(8, '', 'What type of books'),
(9, '', 'Sweet Dreams');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(10) NOT NULL,
  `banner_title` varchar(100) NOT NULL,
  `banner_images` varchar(150) NOT NULL DEFAULT 'defaultbannerphoto.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `banner_title`, `banner_images`) VALUES
(2, 'banner2', '2.jpg'),
(3, 'Arvi Raj Limon', '3.jpg'),
(4, 'Arvi Raj Limon', '4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `massage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `massage`) VALUES
(1, 'limon', 'freelancerLimon2@gmail.com', 'koi toi aita ki tor web site mitthaa bolbi na ');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `phone`) VALUES
(4, 'Limon', '01856611200');

-- --------------------------------------------------------

--
-- Table structure for table `reg_log`
--

CREATE TABLE `reg_log` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirm-password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg_log`
--

INSERT INTO `reg_log` (`id`, `name`, `email`, `password`, `confirm-password`) VALUES
(1, 'limon', 'limon@live.com', '6611200', '661200');

-- --------------------------------------------------------

--
-- Table structure for table `servic`
--

CREATE TABLE `servic` (
  `id` int(11) NOT NULL,
  `servic_title` varchar(50) NOT NULL,
  `servic_description` longtext NOT NULL,
  `servic_image` varchar(150) NOT NULL DEFAULT 'defaultbannerphoto.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `servic`
--

INSERT INTO `servic` (`id`, `servic_title`, `servic_description`, `servic_image`) VALUES
(8, 'Name of the book', 'The Name of this Book is Secret is a 2007 fantasy novel for young readers by Pseudonymous Bosch. It chronicles the adventures of two children', '8.jpg'),
(9, 'How other think', 'The Name of this Book is Secret is a 2007 fantasy novel for young readers by Pseudonymous Bosch. It chronicles the adventures of two children', '9.jpg'),
(10, 'What type of books', 'The Name of this Book is Secret is a 2007 fantasy novel for young readers by Pseudonymous Bosch. It chronicles the adventures of two children', '10.jpg'),
(11, 'What type of books', 'The Name of this Book is Secret is a 2007 fantasy novel for young readers by Pseudonymous Bosch. It chronicles the adventures of two children', '11.jpg'),
(12, 'Sweet Dreams', 'maurisque eros molest nunc anteget sed vel lacus mus semper. Anterd umnullam interdum eros dui urnama urisque eros molest nunc anteget sed vel lacus mus', '12.jpg'),
(13, 'best bike in the world', 'Attempting to bring the feel of the Pulsar 200NS to  The motorcycle looks exactly like its elder sibling, but features a smaller engine, lesser power and a thinner rear tyre. ', '13.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tes`
--

CREATE TABLE `tes` (
  `id` int(11) NOT NULL,
  `tes_title` varchar(50) NOT NULL,
  `tes_description` text NOT NULL,
  `tes_image` varchar(150) NOT NULL DEFAULT 'defaultbannerphoto.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tes`
--

INSERT INTO `tes` (`id`, `tes_title`, `tes_description`, `tes_image`) VALUES
(3, 'old is good', 'we dhfuyrjg skhisww hheeduihfdsb sdfsdfdfger dgdfgrfg', '3.jpg'),
(4, 'branding identity', 'I wish somebody would have told me babe \r\nSome day, these will ', '4.jpg'),
(5, 'American singer Kesha', 'The Adventures of Kesha and Macklemore is the co-headlining tour by American singer Kesha and ', '5.jpg'),
(6, 'macklemore get married?', 'Definition of the good old days. : a period of time in the past that a person thinks were pleasant and ', '6.jpg'),
(7, 'BRANDING IDENTITY', 'Got married on June 27th once the Supreme Court ', '7.jpg'),
(8, 'branding identity', 'a period of time in the past that a person thinks were pleasant and better than the present time In the 1960s, everything seemed ', '8.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_text`
--
ALTER TABLE `about_text`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg_log`
--
ALTER TABLE `reg_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servic`
--
ALTER TABLE `servic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tes`
--
ALTER TABLE `tes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `about_text`
--
ALTER TABLE `about_text`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reg_log`
--
ALTER TABLE `reg_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `servic`
--
ALTER TABLE `servic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tes`
--
ALTER TABLE `tes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
