-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2018 at 09:03 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `microcredit_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `board_of_directors`
--

CREATE TABLE IF NOT EXISTS `board_of_directors` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `date_of_appointment` varchar(255) NOT NULL,
  `contact_address` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `board_of_directors`
--

INSERT INTO `board_of_directors` (`username`, `password`, `name`, `designation`, `date_of_appointment`, `contact_address`, `contact_no`) VALUES
('abir', 'abir', 'Abir', 'Cash Officer', '2018-03-26', 'Khulna', '+8801231231231'),
('kabir', 'kabir', 'Kabir Uddin', 'Assistant Manager', '1983-02-19', 'Dhaka', '+8801231231231'),
('mamun', 'mamun', 'Mamun', 'Public Relationship Officer', '1988-05-22', 'Sylhet', '+8801231231231'),
('nasifa', 'nasifa', 'Nasifa', 'Cash Officer', '1990-03-18', 'Chittagong', '+8801231231231'),
('nayeem', 'nayeem', 'Nayeem Rahman', 'Area Manager', '1989-02-19', 'Sylhet', '+8801231231231'),
('nusrat', 'nusrat', 'Nusrat Khan', 'Chairman', '1989-02-19', 'Sylhet', '+8801717777710'),
('pranta', 'pranta', 'Mr. Pranta Sarker', 'Chairman', '2018-04-16', 'Microcredit Bhaban,Sylhet.', '+8801600000001'),
('rupok', 'rupok', 'rupok', 'Manager', '2018-04-09', 'dhaka', '+8801545454515'),
('topu', 'topu', 'Topu', 'Chairman', '1990-02-16', 'Bishwanath', '+8801717777710');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
`customer_id` int(11) NOT NULL,
  `national_id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `gender` enum('Female','Male') NOT NULL,
  `email` varchar(255) NOT NULL,
  `permanent_address` varchar(255) NOT NULL,
  `present_address` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `national_id`, `customer_name`, `father_name`, `mother_name`, `dob`, `gender`, `email`, `permanent_address`, `present_address`, `contact`) VALUES
(4, 1600, 'Ahmed Taj', 'Selim Ahmed', 'Rahima Khatun', '1985-04-22', 'Male', 'taj@gamil.com', 'Chittagong', 'Chittagong', '+8801231231231'),
(5, 1700, 'Md. Nasif Jaman', 'Md. Fokhor Jaman', 'Mst. Sayra Banu', '1989-06-19', 'Male', 'nasif@gmail.com', 'Rangpur', 'Rangpur', '+8801231231231'),
(6, 1800, 'Ritika Chowdhury', 'Hamid Chowdhury', 'Salma Chowdhury', '1990-12-25', 'Female', 'ritika@gmail.com', 'Dinajpur', 'Dinajpur', '+8801231231231'),
(9, 1300, 'Rafique', 'Khaled', 'Salma Akhter', '1988-02-09', 'Male', 'rafique@gmail.com', 'Sylhet', 'Sylhet', '+8801231231231'),
(10, 1400, 'Ahmed Nur', 'Nur Ali', 'Fatema Ali', '1988-05-17', 'Male', 'nur@yahoo.com', 'Rangpur', 'Rangpur', '+8801231231231'),
(11, 1800, 'Kokhon Babu', 'Shahed Rahman', 'Joytunnesa Khatun', '1988-12-13', 'Male', 'kokhon@gmail.com', 'Sylhet', 'Sylhet', '+8801231231231'),
(12, 1900, 'Labiba Jahan', 'Fardin Khan', 'Shamima Jahan', '1988-01-19', 'Female', 'labiba@gmail.com', 'Dhaka', 'Dhaka', '+8801231231231');

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

CREATE TABLE IF NOT EXISTS `loan` (
  `loan_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `taken_date` varchar(255) NOT NULL,
  `status` enum('running','close') NOT NULL,
  `national_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loan`
--

INSERT INTO `loan` (`loan_id`, `category_id`, `taken_date`, `status`, `national_id`) VALUES
(2, 12, '2018-04-10', 'running', 1300),
(3, 17, '2018-04-23', 'running', 1400),
(4, 14, '2018-04-17', 'running', 1600),
(5, 18, '2018-04-23', 'running', 1600),
(6, 14, '2018-04-09', 'running', 1600),
(7, 14, '2018-04-14', 'close', 1400);

-- --------------------------------------------------------

--
-- Table structure for table `loan_category`
--

CREATE TABLE IF NOT EXISTS `loan_category` (
`category_id` int(11) NOT NULL,
  `loan_type` varchar(255) NOT NULL,
  `loan_amount` int(11) NOT NULL,
  `total_paid` int(11) NOT NULL,
  `validity` varchar(255) NOT NULL,
  `interest` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loan_category`
--

INSERT INTO `loan_category` (`category_id`, `loan_type`, `loan_amount`, `total_paid`, `validity`, `interest`) VALUES
(12, 'Crop Loan One', 10000, 10500, '1', 5),
(13, 'Crop Loan Two', 15000, 15900, '1', 6),
(14, 'Fishery Loan One ', 10000, 11000, '1', 10),
(16, 'Handcraft Loan One ', 25000, 26000, '1', 4),
(17, 'Farm Loan One ', 20000, 22000, '1', 10),
(18, 'Poultry Farm One', 30000, 33000, '1', 10);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
`payment_id` int(11) NOT NULL,
  `amount_paid` int(11) NOT NULL,
  `due_amount` int(11) NOT NULL,
  `late_fine` int(11) NOT NULL,
  `payment_date` varchar(255) NOT NULL,
  `loan_id` int(11) DEFAULT '0',
  `national_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `amount_paid`, `due_amount`, `late_fine`, `payment_date`, `loan_id`, `national_id`) VALUES
(14, 1000, 10000, 0, '2018-03-26', 7, 1400),
(15, 8000, 2000, 0, '2018-03-28', 7, 1400),
(16, 2000, 0, 0, '2018-04-02', 7, 1400);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `board_of_directors`
--
ALTER TABLE `board_of_directors`
 ADD PRIMARY KEY (`username`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
 ADD PRIMARY KEY (`customer_id`,`national_id`), ADD KEY `national_id` (`national_id`);

--
-- Indexes for table `loan`
--
ALTER TABLE `loan`
 ADD PRIMARY KEY (`loan_id`,`category_id`), ADD KEY `category_id` (`category_id`), ADD KEY `loan_ibfk_1` (`national_id`);

--
-- Indexes for table `loan_category`
--
ALTER TABLE `loan_category`
 ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
 ADD PRIMARY KEY (`payment_id`), ADD KEY `payment_ibfk_2` (`loan_id`), ADD KEY `national_id` (`national_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `loan_category`
--
ALTER TABLE `loan_category`
MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `loan`
--
ALTER TABLE `loan`
ADD CONSTRAINT `loan_ibfk_1` FOREIGN KEY (`national_id`) REFERENCES `customer` (`national_id`),
ADD CONSTRAINT `loan_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `loan_category` (`category_id`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`national_id`) REFERENCES `customer` (`national_id`),
ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`loan_id`) REFERENCES `loan` (`loan_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
