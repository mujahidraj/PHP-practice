-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2024 at 11:51 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webtech`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_property`
--

CREATE TABLE `add_property` (
  `id` int(11) NOT NULL,
  `property_name` varchar(35) NOT NULL,
  `property_description` varchar(200) NOT NULL,
  `location` varchar(50) NOT NULL,
  `agent_name` varchar(35) NOT NULL,
  `address` varchar(75) NOT NULL,
  `price` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `add_property`
--

INSERT INTO `add_property` (`id`, `property_name`, `property_description`, `location`, `agent_name`, `address`, `price`) VALUES
(1, 'Victoria INN', 'This Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corrupti fugiat, repellendus ex ipsam reiciendis fuga neque quisquam quasi perspiciatis inventore.', 'Dhaka, Bangladesh', 'Fidbi Hasan', '26 Markland Hill, Heaton, Bolton, Lancashire, CA', '40,00,000'),
(6, 'Raj Mansion', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corrupti fugiat, repellendus ex ipsam reiciendis fuga neque quisquam quasi perspiciatis inventore.', 'Rajshahi, Bangladesh', 'Mujahid Raj', '26 Markland Hill, Heaton, Bolton, Lancashire', '30,00,000');

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `ID` int(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `phone` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `DOB` date NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `company_address` varchar(50) NOT NULL,
  `house_type` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `comfirm_password` varchar(32) NOT NULL,
  `nid` blob NOT NULL,
  `license` blob NOT NULL,
  `profile_pic_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`ID`, `Name`, `phone`, `username`, `email`, `DOB`, `company_name`, `company_address`, `house_type`, `gender`, `password`, `comfirm_password`, `nid`, `license`, `profile_pic_path`) VALUES
(1, ' Mujahid', 123134, 'raj', 'mujahidraj65@gmail.com', '2024-02-28', 'AR GROUP', 'Dhaka,bangladesh', 'Selling', 'Male', 'qwer', 'qwer', '', '', ''),
(2, '', 0, '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(3, ' Moizuddin Mohammad Mujahid Rashid', 1641621584, 'mujahidraj', 'mujahidraj65@gmail.com', '2024-03-18', 'AR GROUP', 'Dhaka,bangladesh', 'Selling', 'Male', 'zxcv', 'zxcv', '', '', ''),
(6, '', 0, '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(7, 'fidbi', 12314324, 'intasarasif', 'intasarasif@gmail.com', '2024-03-09', 'AR GROUP', 'Dhaka,bangladesh', 'Selling', 'Male', 'zxcv', 'zxcv', '', '', ''),
(8, '', 0, '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(9, '', 0, '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(10, '', 0, '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(11, '', 0, '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(12, 'Fidbi Hasan', 1765934752, 'fidbihasan', 'fidbihasan@gmail.com', '2000-01-24', 'Fidbi Real Etate', 'Rayerbag,Dhaka,bangladesh', 'Selling', 'Male', 'asdfg', 'asdfg', '', '', ''),
(13, 'Asmaul Husna Mayad', 2147483647, 'husnamayad', 'asmaulhusna@gmail.com', '2000-01-05', 'RAJ GROUP', 'Rajshahi,Dhaka', 'Selling', 'Female', 'mayad', 'mayad', '', '', ''),
(14, 'Moizuddin Mohammad Mujahid Rashid', 1796059406, 'mujahidrashid', 'mujahidraj65@gmail.com', '2000-10-18', 'Raj Real Estate LTD', 'Gulshan-2 , Dhaka', 'Selling', 'Male', 'mujahid', 'mujahid', '', '', ''),
(15, 'Mujahid Raj', 1641621584, 'mujahidraj65', 'mujahidraj65@gmail.com', '2000-10-18', 'RAW Real Estate', 'Banani, Dhaka', 'Selling', 'Male', 'raj', 'raj', '', '', ''),
(16, 'Alin Das', 1786950492, 'alin', 'alindas2000@gmail.com', '2024-04-16', 'Alin Real Estate', 'Dawanhat,Chittagoan', 'Selling', 'Male', 'alin', 'alin', '', '', ''),
(17, 'Jahangir Rashid', 1715049317, 'Jahangir', 'Jahangirrashid1965@gmail.com', '1965-06-17', 'J Company', 'Chapai Nawabganj,Rajshahi', 'Selling', 'Male', 'jane', 'jane', '', '', ''),
(18, 'Alamgir Rashid', 1685035185, 'Alamgir', 'alamgirrashid@gmail.com', '2024-04-24', 'Raj Real Estate LTD', 'Banani, Dhaka', 'Selling', 'Male', 'alamgir', 'alamgir', '', '', ''),
(19, 'Raina ', 1784390192, 'Raina', 'raina@gmail.com', '2024-04-05', 'RAJ GROUP', 'Banani,Dhaka', 'Rental', 'Female', 'raina', 'raina', '', '', ''),
(20, 'Salman Farshi', 1897068492, 'salman', 'salman@gmail.com', '2024-04-20', 'Fidbi Real Etate', 'Dawanhat,Chittagoan', 'Selling', 'Male', '1234', '1234', '', '', ''),
(21, '', 0, '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(22, '', 0, '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(23, ' Mujahid', 1796059406, 'mujahid', 'asmaulhusna@gmail.com', '2024-04-02', 'AR GROUP', 'Rayerbag,Dhaka,bangladesh', 'Rental', 'Male', 'Task2470', 'Task2470', '', '', ''),
(24, 'MD Mujahid Raj', 1796059406, 'mujahid1', 'mujahidraj65@gmail.com', '2024-04-12', 'Mujahid Real Estate', 'Gulshan 2 , Dhaka', 'Rental', '', 'Task2470', 'Task2470', '', '', ''),
(25, 'Fidbi H.', 1621931987, 'fidbihasan1', 'fidbihasan@gmail.com', '2024-04-26', 'Fidbi Group of Real Estate', 'Rayerbag , Dhaka', 'Selling', '', 'Fidbihasan1', 'Fidbihasan1', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `phone` int(60) NOT NULL,
  `username` varchar(77) NOT NULL,
  `email` varchar(50) NOT NULL,
  `DOB` date NOT NULL,
  `gender` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `confirm_password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`ID`, `Name`, `phone`, `username`, `email`, `DOB`, `gender`, `password`, `confirm_password`) VALUES
(1, ' Mujahid', 1796059406, 'mujahidraj', 'mujahidraj65@gmail.com', '2023-03-08', 'on', 'raj', 'raj'),
(2, ' Mujahid', 2134, 'mujahidraj', 'mujahidraj65@gmail.com', '2024-03-01', 'on', '1234', '1234'),
(8, 'Asmaul Husna Mayad', 1776461482, 'mayadhusna', 'asmaulhusna@gmail.com', '2001-01-05', 'female', '4321', 'mayadhusna'),
(9, 'Alin Das', 1745028419, 'alindas2000', 'alindas2000@gmail.com', '2000-02-11', 'male', 'alin', 'alin'),
(10, 'Prappo Sarker', 1960593719, 'prapposarker', 'prapposarker@gmail.com', '2024-03-07', 'male', 'prappo', 'prappo'),
(11, 'Nilufa Yesmin', 1796059406, 'nilufa', 'nilufayesmin@gmail.com', '2006-05-20', 'female', '1234', '1234'),
(12, 'Jinnat Parveen ', 1747868543, 'jinnat', 'jinnatparveen@gmail.com', '1970-10-31', 'female', 'Jahangir', 'Jahangir'),
(13, 'Shanto Khan', 1796053209, 'shanto', 'shantokhan@gmail.com', '2024-04-09', 'male', '1234', '1234'),
(25, ' Mujahid', 1796059406, 'mujahidraj1', 'mujahidraj65@gmail.com', '2024-04-05', 'male', 'Task2470', 'Task2470'),
(26, 'Moizuddin Mohammad Mujahid Rashid', 1796059406, 'mujahidraj1', 'mujahidraj65@gmail.com', '2024-04-05', 'male', 'Task2470', 'Task2470'),
(27, 'Md. Mujahid Rashid', 1796059406, 'mujahid1', 'mujahidraj65@gmail.com', '2000-10-18', '', 'Task2471', 'Task2470'),
(28, 'Fidbi Hasan Khan', 1631921987, 'fidbihasan01', 'fidbihasan01@gmail.com', '2024-04-12', 'male', '111111', 'Fidbihasan123');

-- --------------------------------------------------------

--
-- Table structure for table `neighbour`
--

CREATE TABLE `neighbour` (
  `id` int(11) NOT NULL,
  `name` varchar(35) NOT NULL,
  `address` varchar(75) NOT NULL,
  `occupation` varchar(25) NOT NULL,
  `age` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `neighbour`
--

INSERT INTO `neighbour` (`id`, `name`, `address`, `occupation`, `age`) VALUES
(1, 'Fidbi Hasan', 'Dhaka, Bangladesh', 'Student', '20'),
(2, 'Salman Farsi', 'Dinajpur', 'Student', '21');

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `ID` int(50) NOT NULL,
  `properties_name` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `size` varchar(50) NOT NULL,
  `room` int(50) NOT NULL,
  `price` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`ID`, `properties_name`, `type`, `location`, `size`, `room`, `price`) VALUES
(11, 'Mayad Palace', 'Apartmental', 'Dhaka , Bangladesh', '3500sqft', 6, '20000000'),
(13, 'Fidbi Home', 'Rental', 'Dawan city, Uttara 9 , Dhaka , Bangladesh', '2500sqft', 4, '15000000'),
(14, 'Raina Villa ', 'Apartmental', 'Uposohor, Rajshahi', '2200sqft', 4, '14000000'),
(16, 'Raj villa', 'Apartmental', 'Beside Paramount school , Vodra, Rajshahi', '3000sqft', 5, '32000000'),
(17, 'Jinnats Home', 'Apartmental', '412/B,Gulshan,Dhaka', '3500sqft', 4, '12000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_property`
--
ALTER TABLE `add_property`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `neighbour`
--
ALTER TABLE `neighbour`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_property`
--
ALTER TABLE `add_property`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `neighbour`
--
ALTER TABLE `neighbour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
