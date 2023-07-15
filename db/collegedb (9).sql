-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2022 at 07:14 AM
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
-- Database: `collegedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookissue`
--

CREATE TABLE `bookissue` (
  `id` int(30) NOT NULL,
  `department` varchar(50) NOT NULL,
  `year` varchar(30) NOT NULL,
  `bookid` int(20) NOT NULL,
  `rollno` int(30) NOT NULL,
  `issuedate` date NOT NULL,
  `depositedate` date NOT NULL,
  `description` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `stockstatus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookissue`
--

INSERT INTO `bookissue` (`id`, `department`, `year`, `bookid`, `rollno`, `issuedate`, `depositedate`, `description`, `quantity`, `status`, `stockstatus`) VALUES
(15, '4', '2', 12, 72, '2022-05-12', '2022-05-25', 'very good', 1, 'received', '-1'),
(16, '1', '2', 11, 72, '2022-05-18', '2022-05-30', 'very good', 1, 'returned', '1'),
(17, '5', '4', 13, 39, '2022-05-12', '2022-05-19', 'very good', 1, 'received', '-1');

-- --------------------------------------------------------

--
-- Table structure for table `bookmaster`
--

CREATE TABLE `bookmaster` (
  `id` int(11) NOT NULL,
  `department` varchar(30) NOT NULL,
  `year` varchar(20) NOT NULL,
  `category` varchar(30) NOT NULL,
  `bookid` int(20) NOT NULL,
  `bookname` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `quantity` int(30) NOT NULL,
  `image` varchar(100) NOT NULL,
  `updatetime` datetime NOT NULL,
  `insertdatetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookmaster`
--

INSERT INTO `bookmaster` (`id`, `department`, `year`, `category`, `bookid`, `bookname`, `author`, `quantity`, `image`, `updatetime`, `insertdatetime`) VALUES
(11, '1', '1', 'programming book', 1, 'Python', 'james Gosling', 15, 'images/6949912022-05-27-12-02-40.jpg', '2022-05-27 12:02:40', '2022-05-27 12:02:40'),
(12, '4', '2', 'Theory', 3, 'SME', 'A.P.J. Abdul Kalam', 5, 'images/9387202022-05-27-12-03-53.jpg', '2022-05-27 15:16:58', '2022-05-27 12:03:53'),
(13, '5', '4', 'Theory', 4, 'Honor', 'james Gosling', 5, 'images/8499712022-05-27-12-04-53.jpg', '2022-05-27 15:17:09', '2022-05-27 12:04:53'),
(14, '1', '3', 'programming book', 2, 'Python', 'james Gosling', 10, 'images/7576712022-05-27-12-09-28.jpg', '2022-05-27 15:16:45', '2022-05-27 12:09:28');

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE `dept` (
  `id` int(100) NOT NULL,
  `deptname` varchar(30) NOT NULL,
  `updatetime` datetime(6) NOT NULL,
  `inserttime` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`id`, `deptname`, `updatetime`, `inserttime`) VALUES
(1, 'Computer', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(2, 'Mechanical', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(3, 'Civil', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(4, 'E and TC', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(6, 'Electrical', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `studattendance`
--

CREATE TABLE `studattendance` (
  `id` int(11) NOT NULL,
  `studid` varchar(10) NOT NULL,
  `attdate` date NOT NULL,
  `status` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `insertime` datetime NOT NULL,
  `updatetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studattendance`
--

INSERT INTO `studattendance` (`id`, `studid`, `attdate`, `status`, `description`, `insertime`, `updatetime`) VALUES
(1, '4', '2022-05-27', 'H', 'tes', '2022-05-27 10:16:45', '2022-05-27 10:26:53'),
(2, '5', '2022-05-27', 'H', 'fd', '2022-05-27 10:16:45', '2022-05-27 10:26:53'),
(7, '2', '2022-05-27', 'P', 'd', '2022-05-27 11:53:31', '2022-05-27 13:59:41'),
(8, '11', '2022-05-28', 'P', 'a', '2022-05-28 06:39:04', '2022-05-28 06:39:04'),
(9, '12', '2022-05-28', 'A', 'b', '2022-05-28 06:39:04', '2022-05-28 06:39:04'),
(10, '13', '2022-05-28', 'H', 'c', '2022-05-28 06:39:04', '2022-05-28 06:39:04');

-- --------------------------------------------------------

--
-- Table structure for table `tbldoc`
--

CREATE TABLE `tbldoc` (
  `id` int(11) NOT NULL,
  `studentid` varchar(10) NOT NULL,
  `docdate` date NOT NULL,
  `document` varchar(200) NOT NULL,
  `documenttype` varchar(100) NOT NULL,
  `payment` varchar(10) NOT NULL,
  `status` varchar(30) NOT NULL,
  `updatetime` datetime(6) NOT NULL,
  `inserttime` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbldoc`
--

INSERT INTO `tbldoc` (`id`, `studentid`, `docdate`, `document`, `documenttype`, `payment`, `status`, `updatetime`, `inserttime`) VALUES
(3, '1', '0056-04-23', 'images/document/5762772022-05-25-15-34-46.png', 'LC', '34567', 'complete', '2022-05-25 15:34:46.000000', '0000-00-00 00:00:00.000000'),
(4, '1', '0067-05-31', 'images/document/7198702022-05-25-15-37-50.png', 'Bonafied', '34', 'complete', '2022-05-25 15:37:50.000000', '0000-00-00 00:00:00.000000'),
(5, '2', '2022-05-25', 'images/document/2362802022-05-26-11-41-47.jpg', 'Bonafied', '35', 'complete', '2022-05-26 11:42:18.000000', '0000-00-00 00:00:00.000000'),
(8, '1', '2022-05-13', 'images/document/6122982022-05-26-11-53-53.png', 'Bonafied', '100', 'complete', '2022-05-26 11:54:24.000000', '2022-05-26 11:53:53.000000'),
(9, '2', '5678-04-23', 'images/document/2054512022-05-27-09-49-05.png', 'LC', '1234561', 'complete', '2022-05-27 09:49:17.000000', '2022-05-27 09:49:05.000000'),
(10, '1', '2019-01-01', '', 'LC', '12', '', '2022-05-27 10:26:34.000000', '2022-05-27 10:26:34.000000'),
(11, '1', '2022-05-27', 'images/document/9878832022-05-27-10-28-53.png', 'LC', '12', 'complete', '2022-05-27 10:28:53.000000', '2022-05-27 10:28:00.000000'),
(12, '2', '2022-05-28', 'images/document/497352022-05-27-10-35-01.jpg', 'LC', '50', 'complete', '2022-05-27 10:35:01.000000', '2022-05-27 10:34:12.000000'),
(13, '2', '2022-05-27', 'images/document/2546032022-05-27-14-51-43.png', 'LC', '34', 'complete', '2022-05-27 14:51:43.000000', '2022-05-27 14:50:40.000000'),
(14, '1', '2022-05-27', '', 'LC', '50', 'pending', '2022-05-27 14:51:17.000000', '2022-05-27 14:51:17.000000');

-- --------------------------------------------------------

--
-- Table structure for table `tblleave`
--

CREATE TABLE `tblleave` (
  `id` int(10) NOT NULL,
  `studentid` varchar(15) NOT NULL,
  `typeofleave` varchar(12) NOT NULL,
  `reason` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `teacherid` varchar(15) NOT NULL,
  `status` varchar(10) NOT NULL,
  `inserttime` datetime NOT NULL,
  `updatetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblleave`
--

INSERT INTO `tblleave` (`id`, `studentid`, `typeofleave`, `reason`, `description`, `teacherid`, `status`, `inserttime`, `updatetime`) VALUES
(8, '', 'leave', 'zxcv', 'asch', '][poiuytrdes', 'reject', '2022-05-25 10:23:14', '2022-05-25 10:23:14'),
(10, '', 'halfleave', 'asch', 'none', 'abhi', 'pending', '2022-05-25 10:32:14', '2022-05-25 10:32:14'),
(11, '', 'leave', 'lkjhgfc', 'asdfg', '][poiuytrdes', 'accept', '2022-05-25 12:33:56', '2022-05-25 12:33:56'),
(12, '2', 'halfleave', 'rtfyuil', 'asch', '][poiuytrdes', 'accept', '2022-05-25 12:37:54', '2022-05-25 12:37:54'),
(13, '2', 'halfleave', 'bnm', 'bn', 'hj', 'accept', '2022-05-25 12:38:29', '2022-05-25 12:38:29'),
(14, '2', 'leave', ',mnbv', 'kjhv', 'kjhbv', 'accept', '2022-05-25 12:54:00', '2022-05-25 12:54:00'),
(15, '2', 'halfleave', 'sdfghjsaaaaaaaaaaaa', 'sdfghssssssssssssss', 'asedfghssssssss', 'pending', '2022-05-25 15:26:46', '2022-05-25 15:27:01');

-- --------------------------------------------------------

--
-- Table structure for table `tblmaterial`
--

CREATE TABLE `tblmaterial` (
  `id` int(11) NOT NULL,
  `department` varchar(20) NOT NULL,
  `year` int(10) NOT NULL,
  `date` date NOT NULL,
  `subject` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  `fileupload` varchar(50) NOT NULL,
  `creator` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(3, 'Swapnilab', '8668783761', 'admin', 'admin', 'admin', '2291', '2022-05-28 05:06:27');

-- --------------------------------------------------------

--
-- Table structure for table `tblstudent`
--

CREATE TABLE `tblstudent` (
  `id` int(10) NOT NULL,
  `studname` varchar(50) NOT NULL,
  `dept` varchar(20) NOT NULL,
  `admyear` varchar(30) NOT NULL,
  `markssc` varchar(15) NOT NULL,
  `markhsc` varchar(15) NOT NULL,
  `markdiploma` varchar(12) NOT NULL,
  `dob` date NOT NULL,
  `cast` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `adhar` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `profile` varchar(60) NOT NULL,
  `updatetime` datetime(6) NOT NULL,
  `inserttime` datetime(6) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblstudent`
--

INSERT INTO `tblstudent` (`id`, `studname`, `dept`, `admyear`, `markssc`, `markhsc`, `markdiploma`, `dob`, `cast`, `address`, `mobile`, `adhar`, `email`, `profile`, `updatetime`, `inserttime`, `status`) VALUES
(5, 'wer', '4', '2', '80', '90', '90', '1996-01-01', 'Open', 'nbbnmb', '9988776655', '998877665544', 'bh@gmail.com', 'images/register8728782022-05-26-09-13-19.jpg', '2022-05-26 09:13:19.000000', '2022-05-26 09:13:19.000000', 'complete'),
(6, 'wer', '4', '3', '80', '90', '90', '1996-01-01', 'Open', 'nbbnmb', '9988776655', '998877665544', 'bh@gmail.com', 'images/register8728782022-05-26-09-13-19.jpg', '2022-05-27 08:57:45.000000', '0000-00-00 00:00:00.000000', 'Complete'),
(7, 'shilpa', '1', '3', '90', '75', '97', '2000-10-15', 'OBC', 'pimpri', '1234567890', '1234567890123', 'shilpabhalerao819@gmail.com', 'images/register7275072022-05-26-10-26-03.jpg', '2022-05-27 06:50:30.000000', '0000-00-00 00:00:00.000000', 'complete'),
(8, 'pallavi', '1', '2', '40', '35', '43', '1990-12-23', 'Open', 'ghargaon', '1234567811', '1234567890123', 'palli819@gmail.com', 'images/register8084272022-05-26-12-16-15.jpg', '2022-05-26 12:16:15.000000', '2022-05-26 12:16:15.000000', 'pending'),
(9, 'shilpa', '1', '2', '94', '45', '34', '2000-12-10', 'Open', 'pimpri', '1234567890', '123412341234', 'shilpabhalerao819gmail.com', 'images/register3756412022-05-27-06-59-37.jpg', '2022-05-27 06:59:37.000000', '2022-05-27 06:59:37.000000', 'cancel'),
(10, 'akanksha', '3', '4', '67', '87', '90', '2000-12-10', 'Open', 'vankute', '1234567890', '121212121123', 'akanksha@gmail.com', 'images/register6453482022-05-27-07-11-21.jpg', '2022-05-27 07:11:21.000000', '2022-05-27 07:11:21.000000', 'Pending'),
(11, 'Anant Pratiksha', '1', '1', '40', '35', '95', '1800-12-10', 'OBC', 'Kasare', '1234567891', '112233445566', 'pratiksha@gmail.com', 'images/register7293632022-05-27-09-12-34.jpg', '2022-05-27 09:12:34.000000', '2022-05-27 09:12:34.000000', 'Pending'),
(12, 'Usha Ravsaheb Dongare', '1', '1', '90', '75', '95', '2001-12-27', 'Open', 'Dongarwadi', '1234567890', '123456789013', 'ushadongare22@gmail.com', 'images/register3312842022-05-27-09-14-07.jpg', '2022-05-27 09:14:07.000000', '2022-05-27 09:14:07.000000', 'Complete'),
(13, 'Shilpa Gorkshnath Bhalerao', '1', '1', '90', '90', '90', '2000-10-15', 'OBC', 'Pimpri-pendhar', '1234567890', '123412341234', 'shilpabhalerao819gmail.com', 'images/register10008832022-05-27-09-16-13.jpg', '2022-05-27 09:16:13.000000', '2022-05-27 09:16:13.000000', 'Cancel'),
(14, 'akanksha Gagare', '1', '2', '40', '77', '60', '2001-12-07', 'Open', 'Vasunde', '1234567811', '112233445566', 'akanksha@gmail.com', 'images/register814612022-05-27-09-27-20.jpg', '2022-05-27 09:27:21.000000', '0000-00-00 00:00:00.000000', 'Pending'),
(15, 'Sandya Ratale', '3', '3', '70', '40', '78', '2000-02-22', 'NT', 'Thorandale', '9876549273', '2568739876', 'sandya123@gmail.com', 'images/register640742022-05-27-09-22-47.jpg', '2022-05-27 09:22:47.000000', '2022-05-27 09:22:47.000000', 'Cancel'),
(16, 'Payal Bangar', '2', '4', '79', '45', '-', '2001-05-17', 'Others', 'Belhe', '8657297587', '453678902456', 'payalbangar@gmail.com', 'images/register5044642022-05-27-09-29-31.jpg', '2022-05-27 09:29:31.000000', '2022-05-27 09:29:31.000000', 'Complete'),
(17, 'Harshada Nichit', '2', '1', '87', '66', '-', '2000-07-04', 'VJNT', 'Vadner', '9876578908', '6453782645679', 'harshadanichit75@gmail.com', 'images/register9898152022-05-27-09-32-44.jpg', '2022-05-27 09:32:44.000000', '2022-05-27 09:32:44.000000', 'Pending'),
(18, 'Zaware Arti', '6', '3', '94', '77', '80', '1999-05-09', 'ST', 'Wasunde', '8976544325', '987654736892', 'artizaware23@gmail.com', 'images/register5552532022-05-27-09-35-15.jpg', '2022-05-27 09:35:15.000000', '2022-05-27 09:35:15.000000', 'Complete'),
(19, 'Pranali Mundhe', '4', '2', '86', '67', '-', '1998-09-02', 'OBC', 'Ghargao Bota', '8567483678', '987409865782', 'pranalimundhe502gmail.com', 'images/register4983462022-05-27-09-38-06.jpg', '2022-05-27 09:38:06.000000', '2022-05-27 09:38:06.000000', 'Complete'),
(20, 'Kandhare Madhuri', '3', '3', '56', '47', '80', '1997-04-12', 'VJNT', 'Peth', '7568734529', '981234678907', 'madhurikandhare234@gmail.com', 'images/register7022312022-05-27-09-40-32.jpg', '2022-05-27 09:40:32.000000', '2022-05-27 09:40:32.000000', 'Complete'),
(21, 'Swap', '2', '2', '50', '50', '50', '1996-02-01', 'Open', 'm1', '7766884454', '44778855112212', 'bh1@gmail.com', 'images/register8219952022-05-28-06-05-59.png', '2022-05-28 06:07:50.000000', '0000-00-00 00:00:00.000000', 'Complete');

-- --------------------------------------------------------

--
-- Table structure for table `tbnotice`
--

CREATE TABLE `tbnotice` (
  `id` int(10) NOT NULL,
  `department` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `noticedate` varchar(100) NOT NULL,
  `noticesubject` varchar(100) NOT NULL,
  `noticedescription` varchar(100) NOT NULL,
  `noticefile` varchar(100) NOT NULL,
  `inserttime` datetime(6) NOT NULL,
  `updatetime` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbnotice`
--

INSERT INTO `tbnotice` (`id`, `department`, `year`, `noticedate`, `noticesubject`, `noticedescription`, `noticefile`, `inserttime`, `updatetime`) VALUES
(3, '6', '0', '2022-05-20', 'kkkkk', 'aaaaaa', 'images/document/2285152022-05-27-15-06-52.png', '2022-05-27 15:06:52.000000', '2022-05-27 15:06:52.000000');

-- --------------------------------------------------------

--
-- Table structure for table `year`
--

CREATE TABLE `year` (
  `id` int(10) NOT NULL,
  `year` varchar(11) NOT NULL,
  `updatetime` datetime(6) NOT NULL,
  `inserttime` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `year`
--

INSERT INTO `year` (`id`, `year`, `updatetime`, `inserttime`) VALUES
(1, 'First Year', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(2, 'Second Year', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(3, 'Third Year', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(4, 'Fourth Year', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookissue`
--
ALTER TABLE `bookissue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookmaster`
--
ALTER TABLE `bookmaster`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dept`
--
ALTER TABLE `dept`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studattendance`
--
ALTER TABLE `studattendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbldoc`
--
ALTER TABLE `tbldoc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblleave`
--
ALTER TABLE `tblleave`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblmaterial`
--
ALTER TABLE `tblmaterial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblregister`
--
ALTER TABLE `tblregister`
  ADD PRIMARY KEY (`idregister`);

--
-- Indexes for table `tblstudent`
--
ALTER TABLE `tblstudent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbnotice`
--
ALTER TABLE `tbnotice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `year`
--
ALTER TABLE `year`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookissue`
--
ALTER TABLE `bookissue`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `bookmaster`
--
ALTER TABLE `bookmaster`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `dept`
--
ALTER TABLE `dept`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `studattendance`
--
ALTER TABLE `studattendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbldoc`
--
ALTER TABLE `tbldoc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tblleave`
--
ALTER TABLE `tblleave`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tblmaterial`
--
ALTER TABLE `tblmaterial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblregister`
--
ALTER TABLE `tblregister`
  MODIFY `idregister` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tblstudent`
--
ALTER TABLE `tblstudent`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbnotice`
--
ALTER TABLE `tbnotice`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `year`
--
ALTER TABLE `year`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
