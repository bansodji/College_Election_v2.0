-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2021 at 04:02 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college election v2.0`
--

-- --------------------------------------------------------

--
-- Table structure for table `id list`
--

CREATE TABLE `id list` (
  `id` int(255) NOT NULL,
  `college id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `id list`
--

INSERT INTO `id list` (`id`, `college id`, `name`) VALUES
(1, 11510, 'Admin '),
(2, 11511, 'Ashish Bansod'),
(3, 11512, 'Aman Verma'),
(4, 11513, 'Abhishek Manikpuri'),
(5, 11514, 'Anand Kumar'),
(6, 11515, 'Ayush Kumar'),
(7, 11516, 'Ashish Neware'),
(8, 11517, 'Prakhar Srivastav'),
(9, 11518, 'Loknath Sahu'),
(10, 11519, 'Bhawana Sahu'),
(11, 11520, 'Satyam Sahu'),
(12, 11521, 'Sakshi Bajaj'),
(13, 11522, 'Afiya Aktar'),
(14, 11523, 'Ritika Dutta'),
(15, 11524, 'Taniya Rao'),
(16, 11525, 'Kajal Mishra'),
(17, 11526, 'Shubham Mishra'),
(18, 11527, 'Mayur Atkari'),
(19, 11528, 'Afrin Khan');

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `id` int(255) NOT NULL,
  `college id` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `vote` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`id`, `college id`, `fullname`, `password`, `vote`) VALUES
(2, '11512', 'Aman Verma', '$2y$10$NCm6In3KVYkdAUJMITo1re0KGUoxfZEobuT0sIcBShcUd2bujA2Ii', 1),
(3, '11513', 'Abhishek Manikpuri', '$2y$10$3ilkq3xsLP0o1WAOD7qP7O7Yh9TBRmALLsGL9NdSgzd0C5Ap3xHJS', 1),
(4, '11514', 'Anand Kumar', '$2y$10$mQIqa1S98ngyYKG9WhwQ7uHbenGG7vgDad47Zy2NEhkxkRab/0Sty', 1),
(5, '11515', 'Ayush Kumar', '$2y$10$iAsEl19DYuwEjDCEgUlx5uze705QuifORqSeJ0lsmt3lxTdZI4o1K', 2),
(6, '11516', 'Ashish Neware', '$2y$10$wuvOafAEK/GqU.92v.Of4ubcizbn8clFTbSXDLFmrFhnVTFgvp0n.', 2),
(7, '11517', 'Prakhar Srivastav', '$2y$10$.SLC9muO026d8zvIdRF84eSmlQZOnDV.C5nLvnf.t7hplwDSbiATO', 2),
(8, '11518', 'Loknath Sahu', '$2y$10$0KUEifzYCMenmZNV/tSxDeKN9Dbia4NQS0a/hwAaB45hlrZxXGaYy', 2),
(9, '11511', 'Ashish Bansod', '$2y$10$Mi46fxaXuKlLCN6S1NH8ge6tZbvrYyRpdff4WXHja207htfC7jLJ6', 2),
(10, '11519', 'Bhawana Sahu', '$2y$10$.S0V6xCp0v14JsOAiuqSDuaApQ3jc7SetWHVOFMQWTwiEKDEuhSge', 3),
(11, 'admin', 'Admin ', '$2y$10$MXXZZYbnecEAlsJ3qOZAh./Ehm6PqZ4W9099tWe/7Hn0BbOk1FTjO', 0),
(12, '11520', 'Satyam Sahu', '$2y$10$aApJw1e5xGmYBKsfZLa.NOlk2MKWEGv9gyEheLPawlg8.G0z3AOOy', 2);

-- --------------------------------------------------------

--
-- Table structure for table `vote_result`
--

CREATE TABLE `vote_result` (
  `id` int(3) NOT NULL,
  `candidates` varchar(255) NOT NULL,
  `votecount` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vote_result`
--

INSERT INTO `vote_result` (`id`, `candidates`, `votecount`) VALUES
(1, 'Austin Philip', 11),
(2, 'Rachel Weiz', 18),
(3, 'Robert Patinson', 17);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `id list`
--
ALTER TABLE `id list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vote_result`
--
ALTER TABLE `vote_result`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `id list`
--
ALTER TABLE `id list`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `vote_result`
--
ALTER TABLE `vote_result`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
