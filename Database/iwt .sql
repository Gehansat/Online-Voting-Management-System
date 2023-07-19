-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2021 at 04:08 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iwt`
--

-- --------------------------------------------------------

--
-- Table structure for table `editors`
--

CREATE TABLE `editors` (
  `editor_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `editors`
--

INSERT INTO `editors` (`editor_id`, `email`, `pass`) VALUES
(1, 'ravinduJ@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `newdetails`
--

CREATE TABLE `newdetails` (
  `id` int(10) NOT NULL,
  `n_email` varchar(50) NOT NULL,
  `n_web` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newdetails`
--

INSERT INTO `newdetails` (`id`, `n_email`, `n_web`) VALUES
(11, '', ''),
(12, 'jsudharaka8@gmail.com', 'sadasd'),
(13, 'jsudharaka8@gmail.com', 'hj');

-- --------------------------------------------------------

--
-- Table structure for table `nominee`
--

CREATE TABLE `nominee` (
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `ncode` varchar(50) NOT NULL,
  `eml` varchar(255) NOT NULL,
  `passwd` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nominee`
--

INSERT INTO `nominee` (`fname`, `lname`, `ncode`, `eml`, `passwd`) VALUES
('Bathiya', 'Jayakodi', 'ID001', 'bathiya123@gmail.com', 'bathiya@1'),
('Santhushka', 'Kodikara', 'ID002', 'santhushka321@gmail.com', 'santhus@23'),
('Kanchana', 'Weerasuriya', 'ID003', 'kanchana1998@gmail.com', 'kanchana@432'),
('Shehan', 'Prabhasha', 'ID004', 'shehanprab@gmail.com', 'shehan@1234'),
('Savindu', 'Nirmana', 'ID005', 'savindu4321@gmail.com', 'savindu@245'),
('Janitha', 'Sudharaka', 'ID006', 'jsudharaka8@gmail.com', 'adasdad');

-- --------------------------------------------------------

--
-- Table structure for table `nomineed`
--

CREATE TABLE `nomineed` (
  `id` int(10) NOT NULL,
  `n_name` varchar(20) NOT NULL,
  `n_add` varchar(20) NOT NULL,
  `n_contact` int(20) NOT NULL,
  `n_uname` varchar(20) NOT NULL,
  `n_ps` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nomineed`
--

INSERT INTO `nomineed` (`id`, `n_name`, `n_add`, `n_contact`, `n_uname`, `n_ps`) VALUES
(1, 'cerce', 'wcw', 2540, 'pramu123', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `nomineev`
--

CREATE TABLE `nomineev` (
  `ncode` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `eml` varchar(50) NOT NULL,
  `passwd` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nomineev`
--

INSERT INTO `nomineev` (`ncode`, `fname`, `lname`, `eml`, `passwd`) VALUES
(1, 'Danuja', 'Jayasooriya', 'danujaJ@gmail.com', 'test'),
(3, 'Sudharaka', 'ID006', 'jsudharaka8@gmail.com', 'adasdad'),
(4, 'Sudharaka', 'ID006', 'jsudharaka8@gmail.com', 'adasdad'),
(5, 'Sudharaka', 'ID006', 'jsudharaka8@gmail.com', 'adasdad');

-- --------------------------------------------------------

--
-- Table structure for table `signin`
--

CREATE TABLE `signin` (
  `uname` varchar(50) NOT NULL,
  `passwd` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `date_subscribe` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `date_subscribe`) VALUES
(0, 'jsudharaka8@gmail.com', '2021-10-09 14:27:22'),
(0, 'kasun@gmail.com', '2021-10-09 16:25:15');

-- --------------------------------------------------------

--
-- Table structure for table `voter`
--

CREATE TABLE `voter` (
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `eml` varchar(255) NOT NULL,
  `passwd` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `voter`
--

INSERT INTO `voter` (`fname`, `lname`, `uname`, `eml`, `passwd`) VALUES
('Thisaranga', 'Dilshan', 'thisarangad', 'thisarangadilshan@gmail.com', 'Td12345'),
('Kavindu', 'Malshan', 'kavindu97', 'kavindumalshan@gmail.com', 'Kavindu97'),
('Chathushka', 'Mawan', 'chathushkamw', 'chathushaka24mawan@gmail.com', '19970824'),
('Praneeth', 'Tilan', 'praneeth97', 'praneethti@gmail.com', '971861447V'),
('Nirman', 'Tinusha', 'nirmanTI', 'nirman@gmail.com', 'nirman123TI'),
('Janitha', 'Sudharaka', 'dsf', 'jsudharaka8@gmail.com', 'sdfdsf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `editors`
--
ALTER TABLE `editors`
  ADD PRIMARY KEY (`editor_id`);

--
-- Indexes for table `newdetails`
--
ALTER TABLE `newdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nomineed`
--
ALTER TABLE `nomineed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nomineev`
--
ALTER TABLE `nomineev`
  ADD PRIMARY KEY (`ncode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `editors`
--
ALTER TABLE `editors`
  MODIFY `editor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `newdetails`
--
ALTER TABLE `newdetails`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `nomineed`
--
ALTER TABLE `nomineed`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `nomineev`
--
ALTER TABLE `nomineev`
  MODIFY `ncode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
