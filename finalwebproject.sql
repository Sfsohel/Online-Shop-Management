-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2018 at 08:35 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finalwebproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `address` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL,
  `phoneno` int(15) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `address`, `password`, `phoneno`, `email`) VALUES
(1, 'sohel', 'nikunja', '1234', 1846591964, 'sfsohel1895@gmail.co'),
(2, 'SADIA AFRIN TRINA', 'MIRPUR', '1234', 1980724055, 'sadiagaf@gmail.com'),
(3, 'SADIA AFRIN TRINA', 'MIRPUR', '1234', 1980724055, 'sadiagaf@gmail.com'),
(4, 'SADIA AFRIN TRINA', 'MIRPUR', '1234', 1980724055, 'sadiagaf@gmail.com'),
(6, 'sourov', 'dhaka, nikunja', '1234', 2147483647, 'sfsohel1895@gmail.co'),
(8, 'sohel', 'dhaka, nikunja', '12342345', 2147483647, 'sohel199523@gmail.co');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `prodname` varchar(20) NOT NULL,
  `priceinfo` varchar(30) NOT NULL,
  `service` varchar(15) NOT NULL,
  `photo` longtext NOT NULL,
  `description` longtext NOT NULL,
  `adminid` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `prodname`, `priceinfo`, `service`, `photo`, `description`, `adminid`) VALUES
(1, 'cosmetic', '12 for little product', 'TV', 'cosmetic.jpg', 'this is a very good product.people can access here and buy there goods as well.this ', 1),
(2, 'shampoo', '12 tk for little', 'MOBILE', 'Neck-Pillow-3-600x600.jpg', 'this product is so good as wee see.you can buy that', 1),
(3, 'camera', '12 for little product', 'FRIDGE', 'Neck-Pillow-2.jpg', 'this product is amazing.Wee can build a better things for using this. ', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
