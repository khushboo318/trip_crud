-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2019 at 08:26 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trips`
--

-- --------------------------------------------------------

--
-- Table structure for table `trips_data`
--

CREATE TABLE `trips_data` (
  `id` int(255) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `ph_no` varchar(255) NOT NULL,
  `people_no` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trips_data`
--

INSERT INTO `trips_data` (`id`, `customer_name`, `email_id`, `ph_no`, `people_no`, `address`) VALUES
(1, 'khushboo kumari', 'khushboo@gmail.com', '9304643597', '2', 'btm 1st stage bangalore'),
(2, 'vishal', 'vishal@gmail.com', '9304592763', '2', 'btm 1st stage bangalore'),
(3, 'Raj', 'raj@gmail.com', '8764592310', '2', 'btm 1st stage near electronic shop 560068 bangalore'),
(4, 'sona', 'sonat@gmail.com', '8405854772', '5', 'kormangla bangalore');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `trips_data`
--
ALTER TABLE `trips_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `trips_data`
--
ALTER TABLE `trips_data`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
