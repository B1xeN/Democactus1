-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2023 at 08:30 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cactus`
--

-- --------------------------------------------------------

--
-- Table structure for table `cactus`
--

CREATE TABLE `cactus` (
  `cactus_species_id` int(11) NOT NULL,
  `cactus_species_name` varchar(50) NOT NULL,
  `ground_name` varchar(50) NOT NULL,
  `compost_name` varchar(100) NOT NULL,
  `plantpot_name` varchar(100) NOT NULL,
  `calydoll_name` varchar(100) NOT NULL,
  `stone_name` varchar(100) NOT NULL,
  `cactus_order` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cactus`
--

INSERT INTO `cactus` (`cactus_species_id`, `cactus_species_name`, `ground_name`, `compost_name`, `plantpot_name`, `calydoll_name`, `stone_name`, `cactus_order`) VALUES
(1, 'แอสโตรไฟตัม', '3', 'ปุ๋ยXxX', 'กระถางน้องหมู', 'หมู', 'หินเกล็ดA', ''),
(2, 'ตะบองผู้เฒ่า', 'ดินA', 'ปุ๋ยXxX', 'กระถางน้องหมู', 'นก', 'หินเกล็ดA', 'หินA ไม่มีในสต็อก'),
(3, 'คลื่นสมอง', 'ดินA', 'ปุ๋ยXxX', 'กระถางน้องหมู', 'นก', 'หินเกล็ดA', 'จัดส่งสำเร็จ'),
(4, 'เรนโบว์', 'ดินA', 'ปุ๋ยXxX', 'กระถางน้องหมู', 'นก', 'หินเกล็ดA', 'เตรียมจัดส่ง'),
(5, 'แอสโตรไฟตัม', 'ดินA', 'ปุ๋ยXxX', 'กระถางน้องหมู', 'นก', 'หินเกล็ดA', 'จัดส่งเรียบร้อย'),
(6, 'แอสโตรไฟตัม', 'ดินA', 'ปุ๋ยXxX', 'กระถางน้องหมู', 'นก', 'หินเกล็ดA', '');

-- --------------------------------------------------------

--
-- Table structure for table `cactus_species`
--

CREATE TABLE `cactus_species` (
  `cactus_species_id` varchar(5) NOT NULL,
  `cactus_species_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cactus_species`
--

INSERT INTO `cactus_species` (`cactus_species_id`, `cactus_species_name`) VALUES
('001', 'แอสโตรไฟตัม'),
('002', 'พลูโมซา'),
('003', 'เพอร์เบลลา'),
('004', 'ตะบองผู้เฒ่า'),
('005', 'ถังทอง'),
('006', 'เรนโบว์'),
('007', 'คลื่นสมอง'),
('008', 'เทอร์บินิคาร์ปัส'),
('009', 'คามิเน่ แดง'),
('010', 'มาเรียร่า');

-- --------------------------------------------------------

--
-- Table structure for table `calydoll`
--

CREATE TABLE `calydoll` (
  `calydoll_id` varchar(5) NOT NULL,
  `calydoll_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `calydoll`
--

INSERT INTO `calydoll` (`calydoll_id`, `calydoll_name`) VALUES
('001', 'นก'),
('002', 'กบ');

-- --------------------------------------------------------

--
-- Table structure for table `compost`
--

CREATE TABLE `compost` (
  `compost_id` varchar(5) NOT NULL,
  `compost_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `compost`
--

INSERT INTO `compost` (`compost_id`, `compost_name`) VALUES
('001', 'ปุ๋ยXxX'),
('002', 'ปุ๋ยB'),
('003', 's');

-- --------------------------------------------------------

--
-- Table structure for table `ground`
--

CREATE TABLE `ground` (
  `ground_id` varchar(5) NOT NULL,
  `ground_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ground`
--

INSERT INTO `ground` (`ground_id`, `ground_name`) VALUES
('001', 'ดินA'),
('004', 'Dinf'),
('11', '3'),
('111', '2222'),
('22', '33');

-- --------------------------------------------------------

--
-- Table structure for table `plantpot`
--

CREATE TABLE `plantpot` (
  `plantpot_id` varchar(100) NOT NULL,
  `plantpot_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `plantpot`
--

INSERT INTO `plantpot` (`plantpot_id`, `plantpot_name`) VALUES
('001', 'กระถางน้องหมู'),
('002', 'กระถางน้องควาย');

-- --------------------------------------------------------

--
-- Table structure for table `stone`
--

CREATE TABLE `stone` (
  `stone_id` varchar(5) NOT NULL,
  `stone_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `stone`
--

INSERT INTO `stone` (`stone_id`, `stone_name`) VALUES
('001', 'หินเกล็ดA'),
('002', 'หินเกล็ดB');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` varchar(13) NOT NULL,
  `user_username` varchar(30) DEFAULT NULL,
  `user_password` varchar(30) DEFAULT NULL,
  `user_fname` varchar(30) DEFAULT NULL,
  `user_Iname` varchar(30) DEFAULT NULL,
  `user_mobile` varchar(13) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_username`, `user_password`, `user_fname`, `user_Iname`, `user_mobile`, `role`) VALUES
('0123', 'Blue', '12345678', 'Blex', 'X', '123231321321', 'admin'),
('077845', 'Tatar', 'Keta5555', 'fdsgfds', 'fdsfds', '03215', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cactus`
--
ALTER TABLE `cactus`
  ADD PRIMARY KEY (`cactus_species_id`);

--
-- Indexes for table `cactus_species`
--
ALTER TABLE `cactus_species`
  ADD PRIMARY KEY (`cactus_species_id`);

--
-- Indexes for table `calydoll`
--
ALTER TABLE `calydoll`
  ADD PRIMARY KEY (`calydoll_id`);

--
-- Indexes for table `compost`
--
ALTER TABLE `compost`
  ADD PRIMARY KEY (`compost_id`);

--
-- Indexes for table `ground`
--
ALTER TABLE `ground`
  ADD PRIMARY KEY (`ground_id`);

--
-- Indexes for table `plantpot`
--
ALTER TABLE `plantpot`
  ADD PRIMARY KEY (`plantpot_id`);

--
-- Indexes for table `stone`
--
ALTER TABLE `stone`
  ADD PRIMARY KEY (`stone_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cactus`
--
ALTER TABLE `cactus`
  MODIFY `cactus_species_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
