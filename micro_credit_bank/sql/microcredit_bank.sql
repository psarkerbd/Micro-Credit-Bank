-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2018 at 07:56 AM
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
(1400, 'Mina', 'Khaled', 'Sayma', '1988-02-23', 'Female', 'mina@yahoo.com', 'Barishal', 'Barishal', '+8801711899120'),
(1500, 'Mahfuz', 'Khan', 'Shima', '1987-05-11', 'Male', 'mahfuz@gmail.com', 'Sylhet', 'Sylhet', '+8801832121201'),
(1000210, 'Naima', 'Abu Jafar', 'Renu Khan', '1998-03-16', 'Female', 'naima@yahoo.com', 'Dhaka', 'Dhaka', '1711020323'),
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
(1, 1300, 17, '2018-01-29', 'running'),
(2, 1300, 12, '2018-02-27', 'running'),
(3, 1400, 14, '2018-02-06', 'running'),
(4, 1000210, 18, '2018-03-16', 'running'),
(5, 19900712, 13, '2018-04-01', 'running'),
(6, 1400, 16, '2018-03-25', 'running'),
(7, 1500, 18, '2018-03-21', 'running');

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
  `national_id` int(11) NOT NULL DEFAULT '0',
  `amount_paid` int(11) NOT NULL,
  `due_amount` int(11) NOT NULL,
  `late_fine` int(11) NOT NULL,
  `payment_date` varchar(255) NOT NULL,
  `loan_id` int(11) DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `national_id`, `amount_paid`, `due_amount`, `late_fine`, `payment_date`, `loan_id`) VALUES
(45, 1400, 1000, 10000, 0, '2018-04-01', 3),
(46, 1400, 1000, 9000, 0, '2018-04-01', 3),
(47, 1400, 1000, 8000, 0, '2018-04-01', 3),
(48, 1400, 1000, 7000, 0, '2018-04-01', 3),
(49, 1400, 1000, 6000, 0, '2018-04-01', 3),
(50, 1400, 1000, 5000, 0, '2018-04-01', 3),
(51, 1400, 1000, 4000, 0, '2018-04-01', 3),
(52, 1400, 1000, 3000, 0, '2018-04-01', 3),
(53, 1400, 1000, 2000, 0, '2018-04-01', 3),
(54, 1400, 1000, 1000, 0, '2018-04-01', 3),
(55, 1400, 1000, 0, 0, '2018-04-01', 3);

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
 ADD PRIMARY KEY (`payment_id`), ADD KEY `national_id` (`national_id`), ADD KEY `payment_ibfk_2` (`loan_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `loan_category`
--
ALTER TABLE `loan_category`
MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=56;
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
