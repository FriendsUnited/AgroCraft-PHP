-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2020 at 01:46 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agrocraft`
--

-- --------------------------------------------------------

--
-- Table structure for table `farmerregistration`
--

CREATE TABLE `farmerregistration` (
  `farmer_id` int(255) NOT NULL,
  `farmer_name` varchar(255) NOT NULL,
  `farmer_phone` bigint(10) NOT NULL,
  `farmer_address` text NOT NULL,
  `farmer_state` varchar(50) NOT NULL,
  `farmer_district` varchar(50) NOT NULL,
  `farmer_pan` varchar(10) NOT NULL,
  `farmer_bank` int(16) NOT NULL,
  `farmer_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farmerregistration`
--

INSERT INTO `farmerregistration` (`farmer_id`, `farmer_name`, `farmer_phone`, `farmer_address`, `farmer_state`, `farmer_district`, `farmer_pan`, `farmer_bank`, `farmer_password`) VALUES
(1, 'Abhishek', 8169193145, 'Mars', 'Maharashtra', 'Thane', '1234567890', 2147483647, 'admin'),
(3, 'omkar', 7666610976, 'SEC -13 , PALM BEACH ROAD      ', 'GUJARAT', 'Bhavnagar', '123ABC', 45745425, 'fail'),
(15, 'Kira', 7333320917, 'add', 'ARUNACHAL PRADESH', 'Upper Siang *', '12', 1, 'yZE='),
(16, 'Arpit', 9182736400, 'Lenyadri Tower', 'MAHARASHTRA', 'Thane', '111', 999, 'yw=='),
(17, 'Raghu', 9182736402, 'West City', 'ANDHRA PRADESH', 'Adilabad', '1234', 4321, 'yw=='),
(18, 'Raghav', 9182736411, '9 Palk Street', 'CHANDIGARH', 'Chandigarh', '109', 991, 'yw=='),
(19, 'Keshav', 9182736444, 'Sarojnagar', 'GOA', 'North Goa', '342', 332, 'yw=='),
(20, 'Suraj', 9182736477, 'Moraj', 'CHHATTISGARH', 'Kawardha *', '789', 987, 'yw=='),
(21, 'Midoriya', 9182736499, 'Hosu', 'DAMAN AND DIU', 'Diu', '191', 818, 'yw=='),
(22, 'Dhole', 9182736445, 'North Silvasa', 'DADRA AND NAGAR HAVELI', 'Dadra & Nagar Haveli', '777', 666, 'yw=='),
(23, 'Yash', 9182736463, 'Ambika Heights', 'GOA', 'South Goa', '537', 361, 'yw=='),
(24, 'Karan', 9182736419, 'Nilgiri Gardens', 'PUDUCHERRY', 'Yanam', '2014', 1014, 'yw=='),
(25, 'Arun', 9182736433, 'Harbour View', 'JAMMU AND KASHMIR', 'Punch', '1024', 3014, 'yw=='),
(26, 'Khan', 9182736492, 'SBI colony', 'ARUNACHAL PRADESH', 'Tawang', '2048', 1048, 'yw=='),
(27, 'Kahn', 9182736412, 'Baba Niwas', 'MADHYA PRADESH', 'Sheopur *', '4096', 5096, 'yw=='),
(28, 'Iqbal', 9283746511, 'Hiranandani', 'HARYANA', 'Panchkula *', '2047', 1047, 'yw=='),
(29, 'Archit', 9283746540, 'Army Colony', 'DELHI', 'Central *', '8192', 7192, 'yw=='),
(30, 'Kumar', 9283746510, 'Masjid Rd', 'DELHI', 'West *', '1192', 2192, 'yw=='),
(31, 'Eeshan', 9283746520, 'BARC Colony', 'GOA', 'South Goa', '2192', 3192, 'yw=='),
(32, 'Gavin', 9283746530, 'Oxfordshire', 'DELHI', 'South *', '3192', 4192, 'yw=='),
(34, 'Meg', 9283746550, 'Chelsea', 'TAMIL NADU', 'Madurai', '343', 433, 'yw=='),
(35, 'Hodaka', 9283746560, 'Touto', 'JAMMU AND KASHMIR', 'Rajauri', '1729', 2729, 'yw=='),
(36, 'Rohan', 9283746501, 'Spurs', 'BIHAR', 'Purnia', '1777', 7171, 'yw=='),
(37, 'Navin', 9283746590, 'Hoenn', 'GOA', 'North Goa', '3412', 5020, 'yw=='),
(38, 'Ansh', 8632145714, 'Liverpool', 'CHANDIGARH', 'Chandigarh', '7129', 8100, 'yw=='),
(39, 'Umesh', 8632145722, 'Everton', 'DELHI', 'North West *', '6654', 7896, 'yw=='),
(40, 'Bhuvan', 8632145766, 'Leicester', 'HIMACHAL PRADESH', 'Shimla', '1010', 2020, 'yw=='),
(41, 'Pavan', 8632145755, 'Munich', 'JHARKAND', 'ORISSA', '9291', 7374, 'yw=='),
(42, 'Suman', 8632145746, 'Watford', 'GOA', 'South Goa', '9293', 8453, 'yw=='),
(43, 'Ashish', 8632145787, 'Crystal Palace', 'KERALA', 'Kasaragod', '4545', 5454, 'yw=='),
(44, 'Lal', 8632145747, 'West Ham', 'KARNATAKA', 'Belgaum', '9999', 9998, 'yw=='),
(45, 'Ranvir', 8632145731, 'Newcastle', 'MAHARASHTRA', 'Jalna', '8818', 2818, 'yw=='),
(46, 'Suresh', 8632145756, 'Real Madrid', 'MEGHALAYA', 'West Garo Hills', '9001', 8017, 'yw=='),
(47, 'Anish', 8632145782, 'Bournmouth', 'PUDUCHERRY', 'Yanam', '5543', 2999, 'yw=='),
(48, 'Lahiru', 7863109411, 'Barcelona', 'GUJARAT', 'Kachchh', '3139', 8199, 'yw=='),
(49, 'Jasmeet', 7863109441, 'Manchester city', '0', 'Select District', '7777', 6666, 'yw==');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `farmerregistration`
--
ALTER TABLE `farmerregistration`
  ADD PRIMARY KEY (`farmer_id`),
  ADD UNIQUE KEY `farmer_id` (`farmer_id`),
  ADD UNIQUE KEY `farmer_phone` (`farmer_phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `farmerregistration`
--
ALTER TABLE `farmerregistration`
  MODIFY `farmer_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
