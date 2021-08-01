-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2021 at 08:49 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ranking_web_panel_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `all-user`
--

CREATE TABLE `all-user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone_no` decimal(50,0) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `url` varchar(255) NOT NULL,
  `url_id` varchar(1000) NOT NULL,
  `web_tittle` varchar(200) NOT NULL,
  `web_description` varchar(200) NOT NULL,
  `web_pic` varchar(200) NOT NULL,
  `amount` varchar(250) NOT NULL,
  `package_id` int(11) DEFAULT NULL,
  `package_expire` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `all-user`
--

INSERT INTO `all-user` (`user_id`, `name`, `email`, `address`, `phone_no`, `user_name`, `password`, `url`, `url_id`, `web_tittle`, `web_description`, `web_pic`, `amount`, `package_id`, `package_expire`) VALUES
(11, 'Rahul Kumar', 'rahul.kr4244@gmail.com', '127- Saraswati nagar  Sidhi residency govindpuri, Gwalior ,Madhya Pradesh', '8638225619', 'rahuls', 'e10adc3949ba59abbe56e057f20f883e', 'tomarmart.com', '', 'rtyssabkah', 'jsdsl', 'fr.JPG', '', 3, '2021-11-11'),
(15, 'Sanjay ', 'sanjay123@gmail.com', 'Darpan Colony Thatipur', '7845639612', 'sanjay', '81dc9bdb52d04dc20036dbd8313ed055', 'sanjay.com', '4530858', 'best seller', 'hole selleer', 'WhatsApp Image 2021-06-02 at 10.57.21 AM.jpeg', '', 2, '2021-10-06'),
(16, 'Tapan Basuli', 'basulitapan1995@gmail.com', 'Patpur, Onda', '9126338684', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'https://www.amazon.com/', '6338768', 'https://www.amazon.com/', 'https://www.amazon.com/', '76729750.jpg', '', 1, '2021-08-30');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(11) NOT NULL,
  `package_name` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `package_name`, `price`) VALUES
(1, 'BASIC', 10.00),
(2, 'STANDARD', 20.00),
(3, 'PROFENSSIONAL', 30.00);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `amount` int(200) NOT NULL,
  `payment_status` varchar(255) NOT NULL,
  `payment_id` varchar(255) NOT NULL,
  `added_on` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `name`, `email`, `user_id`, `package_id`, `amount`, `payment_status`, `payment_id`, `added_on`) VALUES
(3, 'Rahul', 'pk500364@gmail.com', 0, 0, 123, 'completed', 'pay_HGA7FwAAWqISU5', '2021-05-28 11:25:44.000000'),
(4, 'PRINCE KUMAR', 'pk500364@gmail.com', 0, 0, 23, 'completed', 'pay_HGBdllvqKRa5Vp', '2021-05-28 12:55:12.000000'),
(5, 'Rahul', 'pk500364@gmail.com', 0, 0, 50, 'completed', 'pay_HGtTd8J1S18fgS', '2021-05-30 07:48:14.000000'),
(6, 'Rahul Kumar', 'rahul.rk4244@gmail.com', 0, 0, 21, 'completed', 'pay_HHhHcv5duAbkZI', '2021-06-01 08:31:27.000000'),
(7, 'Aman kumar', 'rahul.rk4244@gmail.com', 0, 0, 456, 'completed', 'pay_HIsShQ3i58dSnv', '2021-06-04 08:06:33.000000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`) VALUES
(1, 'prince', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all-user`
--
ALTER TABLE `all-user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all-user`
--
ALTER TABLE `all-user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
