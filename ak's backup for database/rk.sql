-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2019 at 09:43 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rk`
--

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE `admission` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dob` varchar(15) NOT NULL,
  `courses` varchar(15) NOT NULL,
  `sno` int(3) NOT NULL,
  `gen` varchar(10) NOT NULL,
  `file` varchar(50) NOT NULL,
  `add` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pno` int(15) NOT NULL,
  `active` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`id`, `name`, `dob`, `courses`, `sno`, `gen`, `file`, `add`, `email`, `pno`, `active`) VALUES
(9, 'urvashii khan', '11/10/1995', 'mscit&ca', 4, 'female', 'girl-1600991__480.png', 'jamangar', 'gmail@gmail.com', 2147483647, 1);

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `id` int(5) NOT NULL,
  `date` varchar(15) NOT NULL,
  `announce` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id`, `date`, `announce`) VALUES
(8, '10/09/2018', 'test for all bca students'),
(9, '11/09/2018', 'test for all mca and msc it students'),
(10, '15/09/2018', 'tomorow is holiday'),
(11, '18/09/2018', 'class at regular ');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pno` int(15) NOT NULL,
  `mess` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `pno`, `mess`) VALUES
(1, 'tuv', 'tuv@gmail.com', 2147483647, 'ant help for me..'),
(2, 'raj .k.kamdar', 'rajkamadar@gmail.com', 2147483647, 'i am bca student can i learn bootstrap');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `no` int(11) NOT NULL,
  `id` varchar(30) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `dur` varchar(30) NOT NULL,
  `date` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`no`, `id`, `cname`, `dur`, `date`) VALUES
(3, 'BCA', 'SEM 1', '5 MONTHS', '01-06-2018'),
(4, 'BCA', 'SEM 3', '4 MONTHS', '28-05-2018'),
(5, 'BCA', 'SEM 5', '4 MONTHS', '17-05-2018'),
(6, 'BE', 'SEM 1', '3 MONTHS', '01-06-2018'),
(7, 'BE', 'SEM 3', '3 MONTHS', '28-05-2018'),
(8, 'BE', 'SEM 5', '3 MONTHS', '17-05-2018'),
(9, 'MSC.IT&CA', 'SEM 1', '6 MONTHS', '01-06-2018'),
(10, 'MSC.IT&CA', 'SEM 3', '5 MONTHS', '28-05-2018'),
(11, 'MCA', 'SEM 1', '6 MONTHS', '01-06-2018'),
(12, 'MCA', 'SEM 3', '6 MONTHS', '28-05-2018'),
(13, 'PGDCA', 'SEM 1', '4 MONTHS', '01-06-2018'),
(14, 'PGDCA', 'SEM 3', '4 MONTHS', '28-05-2018'),
(15, 'BCA', 'SEM 2', '5 MONTHS', '01-01-2019'),
(16, 'BCA', 'SEM 4', '5 MONTHS', '16-01-2019'),
(17, 'BCA', 'SEM 6', '4 MONTHS', '17-12-2018'),
(18, 'MCA', 'SEM 2', '4 MONTHS ', '01-01-2019'),
(19, 'MCA', 'SEM 6', '4 MONTHS', '16-01-2019'),
(21, 'BE', 'SEM 2', '4 MONTHS', '01-01-2019'),
(22, 'BE', 'SEM-3', '4 MONTHS', '16-01-2019'),
(23, 'BE', 'SEM 6', '4 MONTHS', '17-12-2018'),
(24, 'MSC.IT&CA', 'SEM 2', '3 MONTHS', '01-01-2019'),
(25, 'MSC.IT&CA', 'SEM 4', '3 MONTHS', '17-12-2018'),
(26, 'CCC', 'SHORT-TERM COURSES', '6 MONTHS', 'CONTACT TO CLASS'),
(27, 'HTML5&CSS3', 'SHORT-TERM COURSES', '2 MONTHS', 'CONTACT  TO CLASS'),
(28, 'C,C++,JAVA', 'SHORT-TERM COURSES', '5 MONTHS', 'CONTACT  TO CLASS');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(5) NOT NULL,
  `date` varchar(50) NOT NULL,
  `event` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `date`, `event`) VALUES
(2, '11/01/2019', 'farewell party'),
(4, '18/02/2019', 'go to rajkot with mca students for endustrial visit'),
(5, '22/02/2019', 'gaming compition in class'),
(7, '01/02/2019', 'cricket turnament'),
(8, '20/02/2019', 'chess compition'),
(9, '21/02/2019', 'kerm compition');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id` int(5) NOT NULL,
  `pname` varchar(30) NOT NULL,
  `edu` varchar(50) NOT NULL,
  `exp` varchar(20) NOT NULL,
  `salary` varchar(10) NOT NULL,
  `po` varchar(20) NOT NULL,
  `add` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id`, `pname`, `edu`, `exp`, `salary`, `po`, `add`) VALUES
(2, 'proffessor', 'bca,mca', '1 year', '10000', '3', 'green city jamanagar'),
(3, 'data operator', 'bca/be', '6 months', '6000', '6', 'navanagar'),
(4, 'hardware assistent', 'be/me', '6 months', '5000', '1', 'hariya samea');

-- --------------------------------------------------------

--
-- Table structure for table `material`
--

CREATE TABLE `material` (
  `id` int(10) NOT NULL,
  `file` varchar(30) NOT NULL,
  `des` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `material`
--

INSERT INTO `material` (`id`, `file`, `des`) VALUES
(8, 'HTML.pdf', 'html data'),
(9, 'java imp question.pdf', 'core java question'),
(10, 'ORACLE.pdf', 'oracel data'),
(11, 'programing in c.pdf', 'c language data'),
(12, 'Programming in C++.pdf', 'c++ data'),
(13, 'admissions.html', 'ubuntu data');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `mno` int(15) NOT NULL,
  `active` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `pass`, `mno`, `active`) VALUES
(2, 'kk', 'abc@gmail.vom', 'scas41521', 95, 1),
(6, 'ssc', 'ssc@email.com', '456', 65652145, 1),
(7, 'arpit', 'arpit58@gmail.com', 'ar58', 2147483647, 0),
(8, 'demo', 'demo', '147', 9895, 0);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(10) NOT NULL,
  `file` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `per` varchar(10) NOT NULL,
  `stream` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `file`, `name`, `per`, `stream`) VALUES
(13, 'r1.jpg', 'arpit khandhar', '80%', 'bca'),
(14, 'IMG_20171106_155858584.jpg', 'kanchan takhtani', '88%', 'mca'),
(16, '20180925_161622.jpg', 'brinda soni', '89%', 'msc it&ca'),
(18, '20180925_115435.png', 'riddhish gusaani', '81%', 'pgdca'),
(19, '20180925_114557.png', 'hardik ketesiya', '90%', 'be'),
(20, 'b.jpg', 'dharmpal jadeja', '91%', 'me'),
(21, '20180926_152821.png', 'mahek thaker', '97%', 'phd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admission`
--
ALTER TABLE `admission`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `material`
--
ALTER TABLE `material`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
