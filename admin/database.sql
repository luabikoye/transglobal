-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Sep 16, 2023 at 06:11 PM
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
-- Database: `tranyngc_gwo`
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
(3, 'werfwer2342342', 'ecewcew', 'Shabiolegbe close, Boladale', '08133255577', '12212', 'To pay', '31dwcwe', 'Express', 'csdcsdcd', 'Trans Global Express', 'e21dwce', '21212', '21323', '23123', '211', '212', 'sacsacsa', 'ewcew', 'Hamson close, Unix plaza, Ghana', '08133255577', '212', 'muyiwa@aledoy.com', '231213', '2023-09-13', 'Parcel Received', '2023-09-06', '58', NULL, NULL),
(9, 'd3f3ca15a0b082825a057b9ae0fc2a3d', 'Muyiwa Adewoye', '51 Okota Road, Isolo, Lagos', '00374774487', '8429487234', 'To pay', 'Laptop', 'Courier', 'Nicon Isurance', 'Trans Global Express', 'Lagos Office', '5', '10', '15', '150', '50', 'This is what this is all about.', 'Bayo Atere', '19 Oni street surulere', '08023553546', '24234', 'phrancisgilbert@yahoo.com', 'GUS4639132', '2023-09-16', 'Parcel Shipped', '2023-09-30', '40', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tracking`
--

CREATE TABLE `tracking` (
  `id` int(10) NOT NULL,
  `token` varchar(100) NOT NULL,
  `shipment_token` varchar(100) NOT NULL,
  `completion` int(10) DEFAULT NULL,
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(100) NOT NULL,
  `current_location` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tracking`
--

INSERT INTO `tracking` (`id`, `token`, `shipment_token`, `completion`, `datetime`, `status`, `current_location`) VALUES
(1, 'sdfsdfsdfsfd', 'werfwer2342342', NULL, '2023-09-06 12:40:17', 'On hold', 'Ghana'),
(2, 'sfsdfsfd', 'werfwer2342342', NULL, '2023-09-06 12:43:38', 'With Muyiwa', 'Lagos Ibadan'),
(5, '15dffeebaf84663eb9aecfbbb8060ddd', '92cc9a7285150b96f9ee0916a7750900', NULL, '2023-09-06 18:39:40', 'On Hold', 'acwert'),
(6, 'c8d7a726bd8fa5838c480854dd38a723', '92cc9a7285150b96f9ee0916a7750900', NULL, '2023-09-07 14:01:11', 'In Transit', 'Lagos, Nigeria'),
(7, '0ed9952d8b2a591f0cfb7d1175fe8eb8', '92cc9a7285150b96f9ee0916a7750900', NULL, '2023-09-07 14:11:39', 'On Hold', 'rdhrtdhrt'),
(8, 'c40d5e000b6ae8efdd93008351779db8', '92cc9a7285150b96f9ee0916a7750900', NULL, '2023-09-07 14:12:46', 'On Hold', 'sfdvsdfvsd'),
(10, '2f4e2ee3545a4074983fdec46306908d', '23g234gvwerwer', NULL, '2023-09-07 14:15:28', 'On Hold', 'sfdvsefv'),
(11, '09337f8e6455c7ce4b79d01208253b97', '23g234gvwerwer', NULL, '2023-09-07 14:16:43', 'Office Verification', 'davrebwrt'),
(12, '1e6fb07dd2b64e1fc0f2b11e4c25477c', 'd3f3ca15a0b082825a057b9ae0fc2a3d', 40, '2023-09-16 15:28:53', 'Parcel Shipped', 'Trans Global Express'),
(13, 'c1cc7094f3d9261e312a46fd543e74be', 'd3f3ca15a0b082825a057b9ae0fc2a3d', 60, '2023-09-16 17:40:42', 'Awaiting Payment', 'Lagos, Ibadan ni Lagos'),
(14, '53fcba62d82acbcadaf49f02adcbc1f2', 'd3f3ca15a0b082825a057b9ae0fc2a3d', 95, '2023-09-16 18:07:56', 'Parcel Delivered', 'Ibadan, Lagos'),
(15, 'ee75216ab697b6f117da168125a02ab1', 'd3f3ca15a0b082825a057b9ae0fc2a3d', 99, '2023-09-16 18:13:13', 'In Transit', 'Lagos, Nigeria'),
(16, 'bd67f8f9fddf4b150236e179a1db196d', 'd3f3ca15a0b082825a057b9ae0fc2a3d', 60, '2023-09-16 18:42:05', 'Parcel Shipped', 'Lagos, Nigeria'),
(17, '9b8d261c5f33e1e729f6aae4918a5362', 'd3f3ca15a0b082825a057b9ae0fc2a3d', 60, '2023-09-16 18:42:23', 'Parcel Shipped', 'Lagos, Nigeria'),
(18, 'ac0e6c49822c97230fb7851446a12cd8', 'd3f3ca15a0b082825a057b9ae0fc2a3d', 60, '2023-09-16 18:42:55', 'Parcel Shipped', 'Lagos, Nigeria'),
(19, 'd270cf99dbc21cf9522c49dc3570efcd', 'd3f3ca15a0b082825a057b9ae0fc2a3d', 60, '2023-09-16 18:43:48', 'Parcel Shipped', 'Lagos, Nigeria'),
(20, 'e802dc574d772cd751a3dcec1db85322', 'd3f3ca15a0b082825a057b9ae0fc2a3d', 60, '2023-09-16 18:52:04', 'Parcel Shipped', 'Lagos, Nigeria'),
(21, '0293e0a063731f3d856b9db0100ba617', 'd3f3ca15a0b082825a057b9ae0fc2a3d', 60, '2023-09-16 18:52:43', 'Parcel Shipped', 'Lagos, Nigeria'),
(22, '393d65e94b9d7c3789878b3d479d7bb4', 'd3f3ca15a0b082825a057b9ae0fc2a3d', 60, '2023-09-16 18:54:41', 'Parcel Shipped', 'Lagos, Nigeria');

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
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tracking`
--
ALTER TABLE `tracking`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
