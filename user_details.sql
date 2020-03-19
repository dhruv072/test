-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2020 at 04:54 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `user_id` int(10) NOT NULL,
  `user_name` varchar(60) NOT NULL,
  `user_address` varchar(100) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp(),
  `Money/Score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`user_id`, `user_name`, `user_address`, `user_password`, `Date`, `Money/Score`) VALUES
(1, 'sejal', 'sejal@gmail.com', '$2y$10$jRfW1yUweHFvbwUK6axW7OMznHghbsgdwWK8ZXat7fDEUyQ4ECF8u', '2020-03-19', 0),
(2, 'gaurav', 'gaurav@gmail.com', '$2y$10$xNBZjwSX4kFB/pchNXMgA.StrmTo.qvLE.ABT.QYOnldlaYV8mDR.', '2020-03-19', 0),
(3, 'ankit', 'ankit@gmail.com', '$2y$10$vWOBas8P4GRbMR04djhUE.LpduKjoe9zH2rFK/wL7lQ31xqg9d/XO', '2020-03-19', 0),
(4, 'rajan', 'rajan@gmail.com', '$2y$10$wjzEPILzIH6shFqogKb1TOhowhMpB6hggKF9ePq29Gy9eWKEfu/m2', '2020-03-19', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
