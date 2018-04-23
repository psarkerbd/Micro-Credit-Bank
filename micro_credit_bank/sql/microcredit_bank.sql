-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2018 at 01:12 PM
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
('nusrat', 'nusrat', 'Nusrat Khan', 'Chairman', '1994-03-25', 'Microcredit Bhaban,Sylhet.', '+8801680001111'),
('pranta', 'pranta', 'Mr. Pranta Sarker', 'Chairman', '2018-04-16', 'Microcredit Bhaban,Sylhet.', '+8801600000001'),
('rupok', 'rupok', 'rupok', 'Manager', '2018-04-09', 'dhaka', '+8801545454515'),
('topu', 'topu', 'Topu Dash Roy', 'Chairman', '2018-04-08', 'Bishwanath', '+8801231231231');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`national_id`, `customer_name`, `father_name`, `mother_name`, `dob`, `gender`, `email`, `permanent_address`, `present_address`, `contact`) VALUES
(1300, 'Rafique', 'Bodrul', 'Salma Akhter', '2018-03-26', 'Male', 'rafique@gmail.com', 'Barishal', 'Barishal', '+8801231231231'),
(1000210, 'Naima', 'Abu Jafar', 'Renu Khan', '1998-03-16', 'Female', 'naima@gmail.com', 'Sylhet', 'Sylhet', '+8801231231230'),
(1231411, 'Karim Uddin', 'Rahim Uddin', 'Nur Banu', '2018-04-01', 'Male', 'karim@gmail.com', 'Sylhet', 'Sylhet', '+8801111111'),
(19900712, 'Mr. Rahim Uddin', 'Mr. Karim Uddin', 'Mrs. Rabeya Uddin', '12 July 1990', 'Male', 'rahim@gmail.com', 'Sylhet Sadar, Sylhet', 'Sylhet Sadar, Sylhet', '+8801700000001');

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

CREATE TABLE IF NOT EXISTS `loan` (
  `loan_id` int(11) NOT NULL,
  `national_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `taken_date` varchar(255) NOT NULL,
  `status` enum('running','close') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loan`
--

INSERT INTO `loan` (`loan_id`, `national_id`, `category_id`, `taken_date`, `status`) VALUES
(1001, 19900712, 1, '01 March 2018', 'running');

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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loan_category`
--

INSERT INTO `loan_category` (`category_id`, `loan_type`, `loan_amount`, `total_paid`, `validity`, `interest`) VALUES
(1, 'Crop production one', 10000, 12000, '1', 5),
(2, 'Crop production two', 13000, 15000, '1', 5),
(4, 'Fish culture', 20000, 25000, '1', 0),
(5, 'Fish culture one', 5000, 7000, '1', 0),
(11, 'Fish Culture 2', 10000, 10500, '1', 5);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `loan_id` int(11) NOT NULL,
  `national_id` int(11) NOT NULL,
  `amount_paid` int(11) NOT NULL,
  `late_fine` int(11) NOT NULL,
  `payment_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`loan_id`, `national_id`, `amount_paid`, `late_fine`, `payment_date`) VALUES
(1001, 19900712, 1000, 0, '01 March 2018');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE IF NOT EXISTS `request` (
`request_id` int(11) NOT NULL,
  `national_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf16;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`request_id`, `national_id`) VALUES
(1, 19900712);

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
 ADD PRIMARY KEY (`national_id`);

--
-- Indexes for table `loan`
--
ALTER TABLE `loan`
 ADD PRIMARY KEY (`loan_id`,`national_id`,`category_id`), ADD KEY `national_id` (`national_id`), ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `loan_category`
--
ALTER TABLE `loan_category`
 ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
 ADD PRIMARY KEY (`loan_id`,`national_id`), ADD KEY `national_id` (`national_id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
 ADD PRIMARY KEY (`request_id`), ADD KEY `national_id` (`national_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `loan_category`
--
ALTER TABLE `loan_category`
MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
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

--
-- Constraints for table `request`
--
ALTER TABLE `request`
ADD CONSTRAINT `request_ibfk_1` FOREIGN KEY (`national_id`) REFERENCES `customer` (`national_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
