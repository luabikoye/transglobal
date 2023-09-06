-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Sep 05, 2023 at 06:35 PM
-- Server version: 5.7.39
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `transglo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(50) NOT NULL,
  `username` varchar(80) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'Aledoy101!');

-- --------------------------------------------------------

--
-- Table structure for table `shipment`
--

CREATE TABLE `shipment` (
  `id` int(50) NOT NULL,
  `s_name` varchar(80) DEFAULT NULL,
  `s_address` varchar(80) DEFAULT NULL,
  `s_phone` varchar(80) DEFAULT NULL,
  `s_id` varchar(80) DEFAULT NULL,
  `payment_mode` varchar(80) DEFAULT NULL,
  `product_type` varchar(80) DEFAULT NULL,
  `service_mode` varchar(80) DEFAULT NULL,
  `insurance` varchar(80) DEFAULT NULL,
  `origin` varchar(80) DEFAULT NULL,
  `destination` varchar(80) DEFAULT NULL,
  `quantity` varchar(50) DEFAULT NULL,
  `weight` varchar(100) DEFAULT NULL,
  `variable` varchar(100) DEFAULT NULL,
  `freight_price` varchar(80) DEFAULT NULL,
  `subtotal` varchar(80) DEFAULT NULL,
  `details` text,
  `r_name` varchar(80) DEFAULT NULL,
  `r_address` varchar(80) DEFAULT NULL,
  `r_phone` varchar(80) DEFAULT NULL,
  `r_id` varchar(80) DEFAULT NULL,
  `r_email` varchar(80) DEFAULT NULL,
  `tracking_number` varchar(80) DEFAULT NULL,
  `collection_date` varchar(80) DEFAULT NULL,
  `status` varchar(80) DEFAULT NULL,
  `delivery_date` varchar(80) DEFAULT NULL,
  `completion` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shipment`
--

INSERT INTO `shipment` (`id`, `s_name`, `s_address`, `s_phone`, `s_id`, `payment_mode`, `product_type`, `service_mode`, `insurance`, `origin`, `destination`, `quantity`, `weight`, `variable`, `freight_price`, `subtotal`, `details`, `r_name`, `r_address`, `r_phone`, `r_id`, `r_email`, `tracking_number`, `collection_date`, `status`, `delivery_date`, `completion`) VALUES
(1, 'ecewcew', 'cwecew', '2121', '12212', 'Paid', '31dwcwe', 'Express', 'csdcsdcd', 'N/A', 'e21dwce', '21212', '21323', '23123', '211', '212', 'dscedwce', 'ewcew', 'ceewec', '21212', '212', 'muyiwa@aledoy.com', '231213', '2023-09-14', 'N/A', '2023-09-06', '12'),
(2, 'ecewcew', 'Shabiolegbe close, Boladale', '08133255577', '212', 'To pay', '31dwcwe', 'Courier', 'csdcsdcd', 'N/A', 'e21dwce', '21212', '21323', '23123', '211', '212', '21e2e', 'acssacq', 'cqscds', '23e2121', '322', 'solutions@aledoy.com', 'e32e23', '2023-09-05', 'In Transit', '2023-09-05', '15'),
(3, 'ecewcew', 'Shabiolegbe close, Boladale', '08133255577', '12212', 'To pay', '31dwcwe', 'Express', 'csdcsdcd', 'N/A', 'e21dwce', '21212', '21323', '23123', '211', '212', 'sacsacsa', 'ewcew', 'Shabiolegbe close, Boladale', '08133255577', '212', 'muyiwa@aledoy.com', '231213', '2023-09-13', 'Parcel Received', '2023-09-06', '58'),
(4, 'ecewcew', 'Shabiolegbe close, Boladale', '08133255577', '12212', 'To pay', '31dwcwe', 'Express', 'csdcsdcd', 'N/A', 'e21dwce', '21212', '21323', '23123', '211', '212', 'sacsacsa', 'ewcew', 'Shabiolegbe close, Boladale', '08133255577', '212', 'muyiwa@aledoy.com', '231213', '2023-09-13', 'Parcel Received', '2023-09-06', '58'),
(5, 'ecewcew', 'Shabiolegbe close, Boladale', '08133255577', '12212', 'Paid', '31dwcwe', 'Express', 'csdcsdcd', 'N/A', 'e21dwce', '21212', '21323', '23123', '211', '212', 'fewewfew', 'ewcew', 'Shabiolegbe close, Boladale', '08133255577', 'rf', 'muyiwa@aledoy.com', '231213', '2023-09-07', 'In Transit', '2023-09-06', 'we');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipment`
--
ALTER TABLE `shipment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shipment`
--
ALTER TABLE `shipment`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
