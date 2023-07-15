-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2022 at 12:22 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentprojectdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblregister`
--

CREATE TABLE `tblregister` (
  `idregister` int(10) NOT NULL,
  `fname` varchar(100) CHARACTER SET utf8 NOT NULL,
  `mobile` varchar(15) CHARACTER SET utf8 NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `pwd` varchar(50) CHARACTER SET utf8 NOT NULL,
  `cpwd` varchar(50) CHARACTER SET utf8 NOT NULL,
  `otp` varchar(10) CHARACTER SET utf8 NOT NULL,
  `timedata` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblregister`
--

INSERT INTO `tblregister` (`idregister`, `fname`, `mobile`, `email`, `pwd`, `cpwd`, `otp`, `timedata`) VALUES
(1, 'Swapnil Bheke', '7769091799', 'bhekeswap@gmail.com', 'Swapnilab@123456', 'Swapnilab@123456', '8309', '2022-04-20 10:15:30'),
(3, 'Swapnilab', '8668783761', 'bhekeswap@gmail.com', 'Swapnil@123', 'Swapnil@123', '', '0000-00-00 00:00:00'),
(5, 'Swa', '7769091798', 'bhe@gmail.com', '123456', '123456', '7162', '2022-04-20 10:01:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblregister`
--
ALTER TABLE `tblregister`
  ADD PRIMARY KEY (`idregister`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblregister`
--
ALTER TABLE `tblregister`
  MODIFY `idregister` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
