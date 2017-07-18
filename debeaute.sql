-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2017 at 06:24 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `debeaute`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bookID` int(11) NOT NULL,
  `bookFirst` varchar(256) NOT NULL,
  `bookLast` varchar(256) NOT NULL,
  `bookDay` varchar(256) NOT NULL,
  `bookMonth` varchar(256) NOT NULL,
  `bookYear` year(4) NOT NULL,
  `bookTime` time NOT NULL,
  `bookService` varchar(256) NOT NULL,
  `bookSalon` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bookID`, `bookFirst`, `bookLast`, `bookDay`, `bookMonth`, `bookYear`, `bookTime`, `bookService`, `bookSalon`) VALUES
(1, 'Lapras', 'Go', '23', 'July', 2017, '14:00:00', 'Facial', 'AsterSpring'),
(3, 'Lapras', 'Heng', '23', 'July', 2017, '14:00:00', 'Facial', 'AsterSpring'),
(7, 'Lapras', 'Go', '15', '10', 2017, '10:30:00', '', '1'),
(8, 'Lapras', 'Go', '15', '10', 2017, '10:30:00', 'facial', '1'),
(9, 'Lapras', 'Go', '15', '10', 2017, '10:30:00', 'facial', '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `userFirst` varchar(256) NOT NULL,
  `userLast` varchar(256) NOT NULL,
  `userEmail` varchar(256) NOT NULL,
  `userUname` varchar(256) NOT NULL,
  `userPwd` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `userFirst`, `userLast`, `userEmail`, `userUname`, `userPwd`) VALUES
(2, 'Gwen', 'Tan', 'gwenheng@mail.com', 'gwenheng', '$2y$10$Itz2FpKCiBUAhsRgk1e21eJZ13RiU/QlXFzYntK4wQaCark13.tGC'),
(3, 'Lapras', 'Sea', 'laprasea@gmail.com', 'lapras', '$2y$10$lVMPtsqdHd0feGGS0r3BDOTHhn6ZMnvWk69WUFFoHSgqOwF.Z78Hu'),
(5, 'Block', 'Nano', 'nanoblock@mail.com', 'nanoblock', '$2y$10$qoKKscBMw4Cqd/0FcODO/.65k4LwScvExtCGrFeMzmPJs0hvH22JG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bookID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bookID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
