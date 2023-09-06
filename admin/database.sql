-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:8889
-- Generation Time: Sep 06, 2023 at 11:56 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

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
(1, 'admin', 'Gwogwo123');

-- --------------------------------------------------------

--
-- Table structure for table `shipment`
--

CREATE TABLE `shipment` (
  `id` int(50) NOT NULL,
  `token` varchar(100) DEFAULT NULL,
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

INSERT INTO `shipment` (`id`, `token`, `s_name`, `s_address`, `s_phone`, `s_id`, `payment_mode`, `product_type`, `service_mode`, `insurance`, `origin`, `destination`, `quantity`, `weight`, `variable`, `freight_price`, `subtotal`, `details`, `r_name`, `r_address`, `r_phone`, `r_id`, `r_email`, `tracking_number`, `collection_date`, `status`, `delivery_date`, `completion`) VALUES
(1, '24352qw42vwefe', 'ecewcew', 'cwecew', '2121', '12212', 'Paid', '31dwcwe', 'Express', 'csdcsdcd', 'N/A', 'e21dwce', '21212', '21323', '23123', '211', '212', 'dscedwce', 'ewcew', 'ceewec', '21212', '212', 'muyiwa@aledoy.com', '231213', '2023-09-14', 'N/A', '2023-09-06', '12'),
(2, '423r234wegerw', 'ecewcew', 'Shabiolegbe close, Boladale', '08133255577', '212', 'To pay', '31dwcwe', 'Courier', 'csdcsdcd', 'N/A', 'e21dwce', '21212', '21323', '23123', '211', '212', '21e2e', 'acssacq', 'cqscds', '23e2121', '322', 'solutions@aledoy.com', 'e32e23', '2023-09-05', 'In Transit', '2023-09-05', '15'),
(3, 'werfwer2342342', 'ecewcew', 'Shabiolegbe close, Boladale', '08133255577', '12212', 'To pay', '31dwcwe', 'Express', 'csdcsdcd', 'N/A', 'e21dwce', '21212', '21323', '23123', '211', '212', 'sacsacsa', 'ewcew', 'Shabiolegbe close, Boladale', '08133255577', '212', 'muyiwa@aledoy.com', '231213', '2023-09-13', 'Parcel Received', '2023-09-06', '58'),
(4, '234234twvfverf', 'ecewcew', 'Shabiolegbe close, Boladale', '08133255577', '12212', 'To pay', '31dwcwe', 'Express', 'csdcsdcd', 'N/A', 'e21dwce', '21212', '21323', '23123', '211', '212', 'sacsacsa', 'ewcew', 'Shabiolegbe close, Boladale', '08133255577', '212', 'muyiwa@aledoy.com', '231213', '2023-09-13', 'Parcel Received', '2023-09-06', '58'),
(5, '23g234gvwerwer', 'ecewcew', 'Shabiolegbe close, Boladale', '08133255577', '12212', 'Paid', '31dwcwe', 'Express', 'csdcsdcd', 'N/A', 'e21dwce', '21212', '21323', '23123', '211', '212', 'fewewfew', 'ewcew', 'Shabiolegbe close, Boladale', '08133255577', 'rf', 'muyiwa@aledoy.com', '231213', '2023-09-07', 'In Transit', '2023-09-06', 'we'),
(6, 'ea5e04710f5fa2612180ce069832b594', 'sdfvsdfv', 'adfvsdfvcsfd', 'fvsfsfvsdf', 'sfvsdfvsdf', 'Payment incomplete', 'asdasdv', 'Express', 'werwer', 'N/A', 'wearfwe', 'fwerf', 'werfwer', 'werfwe', 'werfwer', 'werfwerf', 'werfwerf', 'sdfvsdfv', 'sdfvsdvs', 'sfdssdf', 'sdfvsdfv', 'csdfvsdfv', 'qw4r234', '2023-09-15', 'Parcel Received', '2023-09-15', ''),
(7, '6b4cbde2223cdfb813950ff605611249', 'sdfvsdfv', 'adfvsdfvcsfd', 'fvsfsfvsdf', 'sfvsdfvsdf', 'Payment incomplete', 'asdasdv', 'Express', 'werwer', 'N/A', 'wearfwe', 'fwerf', 'werfwer', 'werfwe', 'werfwer', 'werfwerf', 'werfwerf', 'sdfvsdfv', 'sdfvsdvs', 'sfdssdf', 'sdfvsdfv', 'csdfvsdfv', 'qw4r234', '0001-11-11', 'Parcel Received', '0001-11-11', ''),
(8, '92cc9a7285150b96f9ee0916a7750900', 'sdfvsdfv', 'adfvsdfvcsfd', 'fvsfsfvsdf', 'sfvsdfvsdf', 'Payment incomplete', 'asdasdv', 'Express', 'werwer', 'N/A', 'wearfwe', 'fwerf', 'werfwer', 'werfwe', 'werfwer', 'werfwerf', 'werfwerf', 'sdfvsdfv', 'sdfvsdvs', 'sfdssdf', 'sdfvsdfv', 'csdfvsdfv', 'qw4r234', '0001-11-11', 'Parcel Received', '0001-11-11', ''),
(9, '0981d6daa0f22f14371e62fc35e6671a', 'sdfvsdfv', 'adfvsdfvcsfd', 'fvsfsfvsdf', 'sfvsdfvsdf', 'Payment incomplete', 'asdasdv', 'Express', 'werwer', 'N/A', 'wearfwe', 'fwerf', 'werfwer', 'werfwe', 'werfwer', 'werfwerf', 'werfwerf', 'sdfvsdfv', 'sdfvsdvs', 'sfdssdf', 'sdfvsdfv', 'csdfvsdfv', 'qw4r234', '0001-11-11', 'Parcel Received', '0001-11-11', '');

-- --------------------------------------------------------

--
-- Table structure for table `tracking`
--

CREATE TABLE `tracking` (
  `id` int(10) NOT NULL,
  `token` varchar(100) NOT NULL,
  `shipment_token` varchar(100) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(100) NOT NULL,
  `current_location` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tracking`
--

INSERT INTO `tracking` (`id`, `token`, `shipment_token`, `datetime`, `status`, `current_location`) VALUES
(1, 'sdfsdfsdfsfd', 'werfwer2342342', '2023-09-06 12:40:17', 'On hold', 'Ghana'),
(2, 'sfsdfsfd', 'werfwer2342342', '2023-09-06 12:43:38', 'With Muyiwa', 'Lagos Ibadan'),
(3, '7d5c81965aabb2d428395e764b97a358', 'werfwer2342342', '2023-09-06 12:50:34', 'Parcel Sipped', ''),
(4, 'f70e4f8f8be45ca31ae67d0e5518d621', 'werfwer2342342', '2023-09-06 12:51:55', 'Awaiting Payment', '');

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
-- Indexes for table `tracking`
--
ALTER TABLE `tracking`
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
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tracking`
--
ALTER TABLE `tracking`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
