-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2017 at 12:55 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `psam`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bills`
--

CREATE TABLE `tbl_bills` (
  `b_id` int(10) NOT NULL,
  `b_month` varchar(10) NOT NULL,
  `b_office` float NOT NULL,
  `b_current` float NOT NULL,
  `b_gas` float NOT NULL,
  `b_water` float NOT NULL,
  `b_net` float NOT NULL,
  `b_maintenance` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_bills`
--

INSERT INTO `tbl_bills` (`b_id`, `b_month`, `b_office`, `b_current`, `b_gas`, `b_water`, `b_net`, `b_maintenance`) VALUES
(1, 'feb', 1000, 10, 45, 100, 54, 456),
(2, 'Mar', 5000, 20011, 800, 2000, 1000, 300),
(3, 'jan', 7000, 5000, 400, 2000, 3000, 8000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_message`
--

CREATE TABLE `tbl_message` (
  `m_id` int(10) NOT NULL,
  `m_name` varchar(50) NOT NULL,
  `m_email` varchar(100) NOT NULL,
  `m_subject` varchar(50) NOT NULL,
  `m_message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_message`
--

INSERT INTO `tbl_message` (`m_id`, `m_name`, `m_email`, `m_subject`, `m_message`) VALUES
(2, 'Sunny', 'sunny_leone@gmail.com', 'Mara khawa', 'Jaa bhai mara kha :D '),
(3, 'Tushar', 'tushar_kapoor@hotmail.com', 'Boring', 'Life boring hoye jaitese bhai '),
(4, 'Mushfiq', 'mushfiq@gmail.com', 'Order', 'I want to make an order');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_project`
--

CREATE TABLE `tbl_project` (
  `p_id` int(10) NOT NULL,
  `p_category` varchar(50) NOT NULL,
  `p_title` varchar(100) NOT NULL,
  `p_price` float NOT NULL,
  `p_quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_project`
--

INSERT INTO `tbl_project` (`p_id`, `p_category`, `p_title`, `p_price`, `p_quantity`) VALUES
(2, 'android', 'Game', 1120, 1),
(4, 'graphics design', 'Logo', 5000, 3),
(5, 'web development', 'Website', 9000, 520),
(6, 'android', 'App', 985.55, 2),
(8, 'web development', 'LabManagement', 25000, 5),
(9, 'web development', 'School Management', 90000, 5),
(10, 'android', 'TOR', 4000, 2),
(11, 'graphics design', 'Volvo ', 5000, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_bills`
--
ALTER TABLE `tbl_bills`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `tbl_message`
--
ALTER TABLE `tbl_message`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `tbl_project`
--
ALTER TABLE `tbl_project`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_bills`
--
ALTER TABLE `tbl_bills`
  MODIFY `b_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_message`
--
ALTER TABLE `tbl_message`
  MODIFY `m_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_project`
--
ALTER TABLE `tbl_project`
  MODIFY `p_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
