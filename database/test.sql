-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2017 at 01:35 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_test`
--

CREATE TABLE `data_test` (
  `data_id` int(5) NOT NULL,
  `data_name` varchar(100) NOT NULL,
  `data_jkl` varchar(100) NOT NULL,
  `data_alamat` text NOT NULL,
  `data_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_test`
--

INSERT INTO `data_test` (`data_id`, `data_name`, `data_jkl`, `data_alamat`, `data_status`) VALUES
(27, 'susi', 'Wanita', 'Jl. Cut Nyak Dien No 123', 'Kawin'),
(28, 'Dipo', 'Pria', 'Jl. Diponegoro No 123', 'Tidak Kawin'),
(29, 'Suherman', 'Pria', 'Jl. Hang Jebat No 123', 'Kawin'),
(30, 'Deka Satria', 'Pria', 'Jl. Pendekar No 123', 'Kawin'),
(31, 'Sudirman Said', 'Pria', 'Jl. Sudirman No 123', 'Tidak Kawin'),
(33, 'Kartini Suhartini', 'Wanita', 'Jl. Kartini Suhartini No 123', 'Kawin');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(5) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_pass` varchar(50) NOT NULL,
  `user_login` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_email`, `user_pass`, `user_login`) VALUES
(231, 'test5@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 0),
(232, 'test8@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 0),
(233, 'test9@gmail.com', 'fec8f2a3f2e808ccb17c4d278b4fa469', 0),
(235, 'test10@gmail.com', 'fd36e56b1dbd1a7e4c62028256bd324c', 0),
(256, 'test11@gmail.com', '5ce1f855ed6ffe648276365dc70b384c', 0),
(257, 'test13@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 0),
(264, 'admin', '21232f297a57a5a743894a0e4a801fc3', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_test`
--
ALTER TABLE `data_test`
  ADD PRIMARY KEY (`data_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_test`
--
ALTER TABLE `data_test`
  MODIFY `data_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=268;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
