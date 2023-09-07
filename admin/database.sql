-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:8889
-- Generation Time: Sep 07, 2023 at 02:54 PM
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
  `completion` varchar(80) DEFAULT NULL,
  `deleted` varchar(50) DEFAULT NULL,
  `date_modified` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shipment`
--

INSERT INTO `shipment` (`id`, `token`, `s_name`, `s_address`, `s_phone`, `s_id`, `payment_mode`, `product_type`, `service_mode`, `insurance`, `origin`, `destination`, `quantity`, `weight`, `variable`, `freight_price`, `subtotal`, `details`, `r_name`, `r_address`, `r_phone`, `r_id`, `r_email`, `tracking_number`, `collection_date`, `status`, `delivery_date`, `completion`, `deleted`, `date_modified`) VALUES
(3, 'werfwer2342342', 'ecewcew', 'Shabiolegbe close, Boladale', '08133255577', '12212', 'To pay', '31dwcwe', 'Express', 'csdcsdcd', 'Trans Global Express', 'e21dwce', '21212', '21323', '23123', '211', '212', 'sacsacsa', 'ewcew', 'Hamson close, Unix plaza, Ghana', '08133255577', '212', 'muyiwa@aledoy.com', '231213', '2023-09-13', 'Parcel Received', '2023-09-06', '58', NULL, NULL);

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
(5, '15dffeebaf84663eb9aecfbbb8060ddd', '92cc9a7285150b96f9ee0916a7750900', '2023-09-06 18:39:40', 'On Hold', 'acwert'),
(6, 'c8d7a726bd8fa5838c480854dd38a723', '92cc9a7285150b96f9ee0916a7750900', '2023-09-07 14:01:11', 'In Transit', 'Lagos, Nigeria'),
(7, '0ed9952d8b2a591f0cfb7d1175fe8eb8', '92cc9a7285150b96f9ee0916a7750900', '2023-09-07 14:11:39', 'On Hold', 'rdhrtdhrt'),
(8, 'c40d5e000b6ae8efdd93008351779db8', '92cc9a7285150b96f9ee0916a7750900', '2023-09-07 14:12:46', 'On Hold', 'sfdvsdfvsd'),
(10, '2f4e2ee3545a4074983fdec46306908d', '23g234gvwerwer', '2023-09-07 14:15:28', 'On Hold', 'sfdvsefv'),
(11, '09337f8e6455c7ce4b79d01208253b97', '23g234gvwerwer', '2023-09-07 14:16:43', 'Office Verification', 'davrebwrt');

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tracking_number` (`tracking_number`);

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
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tracking`
--
ALTER TABLE `tracking`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
