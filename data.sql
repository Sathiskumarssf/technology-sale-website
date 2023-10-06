-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2023 at 08:56 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_details`
--

CREATE TABLE `admin_details` (
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(201) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_details`
--

INSERT INTO `admin_details` (`name`, `email`, `password`) VALUES
('Arul ', 'arul9392@gmail.com', '2636sjsj@1'),
('haneef', 'haneefkai203@gmil.com', 'haneefsjsj@!d3'),
('magesh', 'mageshkuamr@gmail.com', 'magesh233@!d'),
('murali', 'murali4293@gmil.com', 'kumara232'),
('Nalin', 'nalin2292@gmail.com', 'nasijjs1@'),
('vipun', 'vipun942@gmail.com', 'visjdj!2sjs');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `image_url` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` int(11) NOT NULL,
  `category` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`image_url`, `name`, `price`, `category`) VALUES
('extra_laptop2.jpg', 'ipron pro', 300, 'loptop'),
('extra_phone.jpg', 'Nokia', 102, 'phone'),
('labtop1.webp', 'mac', 300, 'laptop'),
('laptop1.jpg', 'Dell i5', 300, 'laptop'),
('laptop3.jpg', 'Lenovo', 340, 'laptop'),
('laptop4.jpg', 'Dell', 200, 'laptop'),
('laptop5.jpg', 'HP i7', 202, 'laptop'),
('phone1.jpg', 'Vivo y20', 100, 'phone'),
('phone2.jpg', 'iphone', 150, 'phone'),
('phone3.jpg', 'Nokia', 160, 'phone'),
('phone4.jpg', 'Iphone 13 pr', 220, 'phone'),
('phone5.jpg', 'vivo y01', 210, 'phone');

-- --------------------------------------------------------

--
-- Table structure for table `super_admin`
--

CREATE TABLE `super_admin` (
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(201) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `super_admin`
--

INSERT INTO `super_admin` (`name`, `email`, `password`) VALUES
('vikneshshivan', 'vikiaish2023@gmail.com', 'vikki1234');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `email` varchar(220) NOT NULL,
  `password` varchar(220) NOT NULL,
  `name` varchar(220) NOT NULL,
  `phone_number` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`email`, `password`, `name`, `phone_number`) VALUES
('deleeban22392@gmail.com', '7388djdjj', 'sadeep', 759686364),
('deleebaSn2292@gmail.com', '727181AHSH', 'KUAMJ', 759686863),
('sathzdi@gmail.com', '9283asnkjnk', 'slks', 758696864);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_details`
--
ALTER TABLE `admin_details`
  ADD PRIMARY KEY (`email`,`password`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`image_url`,`name`);

--
-- Indexes for table `super_admin`
--
ALTER TABLE `super_admin`
  ADD PRIMARY KEY (`email`,`password`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`email`,`password`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
