-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2018 at 06:29 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `neub_blood_donor`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `nid` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`nid`, `user_name`, `password`) VALUES
('1', 'admin', 'admin'),
('2', 'admin2', 'admin2');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
`photo_id` int(11) NOT NULL,
  `photo_title` varchar(255) NOT NULL,
  `photo_topic` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`photo_id`, `photo_title`, `photo_topic`, `photo`, `date`) VALUES
(1, '', '', '1.jpg', ''),
(2, '', '', '2.jpg', ''),
(3, '', '', '3.jpg', ''),
(4, '', '', '4.jpg', ''),
(5, '', '', '5.jpg', ''),
(6, '', '', '6.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE IF NOT EXISTS `home` (
`id` int(11) NOT NULL,
  `message` text NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `message`, `img`) VALUES
(1, 'A <b>blood</b> donation occurs when a person voluntarily has blood drawn and used for transfusions and/or made into biopharmaceutical medications by a process called fractionation (separation of whole-blood components). \r\nDonation may be of whole blood (WB), or of specific components directly (the latter called apheresis). Blood banks often participate in the collection process as well as the procedures that follow it.\r\nToday in the developed world, most blood donors are unpaid volunteers who donate blood for a community supply. In poorer countries, established supplies are limited and donors usually give blood when family or friends need a transfusion (directed donation).\r\nMany donors donate as an act of charity, but in countries that allow paid donation some donors are paid, and in some cases there are incentives other than money such as paid time off from work. Donors can also have blood drawn for their own future use (autologous donation). \r\nDonating is relatively safe, but some donors have bruising where the needle is inserted or may feel faint.\r\nPotential donors are evaluated for anything that might make their blood unsafe to use. The screening includes testing for diseases that can be transmitted by a blood transfusion, including HIV and viral hepatitis. The donor must also answer questions about medical history and take a short physical examination to make sure the donation is not hazardous to his or her health. \r\nHow often a donor can donate varies from days to months based on what component they donate and the laws of the country where the donation takes place. For example, in the United States, donors must wait eight weeks (56 days) between whole blood donations but only seven days between plateletpheresis donations and twice per seven-day period in plasmapheresis.\r\nThe amount of blood drawn and the methods vary. The collection can be done manually or with automated equipment that takes only specific components of the blood. \r\nMost of the components of blood used for transfusions have a short shelf life, and maintaining a constant supply is a persistent problem. \r\nThis has led to some increased interest in autotransfusion, whereby a patient''s blood is salvaged during surgery for continuous reinfusion — or alternatively, is "self-donated" prior to when it will be needed. \r\n(Generally, the notion of "donation" does not refer to giving to one''s self, though in this context it has become somewhat acceptably idiomatic.)', '1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
`message_id` int(11) NOT NULL,
  `nid` int(11) NOT NULL,
  `text` varchar(255) NOT NULL,
  `datetime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `rules`
--

CREATE TABLE IF NOT EXISTS `rules` (
`id` int(11) NOT NULL,
  `rules_and_regulation` text NOT NULL,
  `create_date` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rules`
--

INSERT INTO `rules` (`id`, `rules_and_regulation`, `create_date`) VALUES
(1, '<h3 align="center">Blood Donation Eligibility Guidelines </h3>\r\n<p style="text-align:justify; margin-bottom:20px; padding: 0px 10px 0px 10px;font-size:18px;"><b>General:</b> To give blood, you must be healthy, \r\nat least 17 years old, and weigh at least 110 pounds. <br />\r\n<b>Donor Information:</b> The most needed blood types are O+, O-, AB- and B-. These blood types are absolutely \r\ncritical.If you have a donor card (i.e., know your blood type and have given before), go to the blood drives! \r\nIf you have one of the critical blood types but do not have a donor card, go to the blood drives anyway! If you do not know \r\nyour blood type and do not have a donor card, the Red Cross is asking you to go to blood drives next week so as not to confuse \r\nthe system. More screening (and thus, more time) is required for new donors. You may also call for an appointment at \r\n1-800-GIVELIFE (1-800-448-3543). If you have given blood in the last 56 days (8 weeks), you cannot give blood again, even if \r\nyou have one of the critical blood types. </p>', '31.07.2016'),
(2, '<p style="text-align:justify; margin-bottom:20px; font-size: 18px; padding: 0px 10px 0px 10px;"><b> <u> AIDS </u> </b> <br /><b> Don''t give blood to get an AIDS test.</b> Please see your own doctor or local health department to get tested. We are required to report all positive HIV results to public health officials. \r\n\r\n<b> If you have any reason to believe you have AIDS, do not donate blood.</b>\r\nYou risk harming a vulnerable patient who needs blood transfusions. With new, advanced tests, the risk of transmitting HIV through a blood transfusion is 1 in 1.5 million.<br />\r\nHowever, before blood is drawn, we must ensure that a donor does not display the high risk behaviors associated with certain infectious diseases. Do not give blood if you are at risk for getting and spreading the AIDS virus. According to the Food and Drug Administration, you are at risk if: <br />\r\n* you are a male who has had sex with another male since 1977, even once. <br />\r\n* you have ever used a needle, even once, to take any illegal drugs or   steroids. <br />\r\n* you have taken clotting factor concentrates for a bleeding disorder such as hemophilia <br />\r\n* you have ever had a positive test for AIDS (HIV) or AIDS antibody or antigen <br /> </p>', '31.07.2016'),
(3, '<p style="text-align:justify; margin-bottom:20px; padding: 0px 10px 0px 10px;font-size:18px;"> <b>AIDS Exposure: </b> defer 12 months if health care worker exposed to blood of patients with HIV infection by a needle stick \r\nor open wound. <br />\r\n<b> Allergy:</b>  defer temporarily if breathing difficulty is present. <br />\r\n<b>Asthma:</b> accept if controlled. <br />\r\n<b>Blood Pressure:</b>accept with or without medications if blood pressure is within American Red Cross limits on day of \r\ndonation. <br />\r\n<b>Blood Transfusion:</b> defer for 12 months. <br />\r\n<b>Cold, Flu or Sore Throat:</b> defer temporarily for active cold or flu symptoms such as fever, sore throat, productive cough, or general fatigue on day of donation. <br />\r\n<b>Skin Disease and Rash:</b>  donors will be individually evaluated. phlebotomy site must be free of rash/skin disease. <br /> \r\n<b>Infectious Mononucleosis:</b> accept if recovered. <br />\r\n<b>Serious Illness:</b> donors will be individually evaluated. <br /> <br />\r\n** <b style="color:#00008B"> Men can give blood every 3 months and women can give blood every 4 months. </b>\r\n</p>', '31.07.2016');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `nid` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `blood_group` varchar(255) NOT NULL,
  `village` varchar(255) NOT NULL,
  `post_office` varchar(255) NOT NULL,
  `thana` varchar(255) NOT NULL,
  `zilla` varchar(255) NOT NULL,
  `division` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `user_type` enum('accepted','not_accepted') NOT NULL,
  `status` enum('active','inactive') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nid`, `full_name`, `user_name`, `password`, `father_name`, `mother_name`, `email`, `phone`, `dob`, `gender`, `blood_group`, `village`, `post_office`, `thana`, `zilla`, `division`, `photo`, `user_type`, `status`) VALUES
(1, '123456789', 'pranta', 'pranta', '123456', 'f_pranta', 'm_pranta', 'pranta@gmail.com', '123456889', '26.01.1995', 'male', 'O+', 'sylhet', 'sylhet', 'sylhet', 'sylhet', 'sylhet', '', 'accepted', 'active'),
(2, '456789', 'topu', 'topu', '2531', 'f_topu', 'm_topu', 'topu@gmail.com', '45678', '26.02.1994', 'male', 'A+', 'sylhet', 'sylhet', 'sylhet', 'sylhet', 'sylhet', 'sylhet', 'accepted', 'active'),
(3, '456789', 'nusrat', 'nusrat', '456778', 'f_nusrat', 'm_nusrat', 'nusrat@gmail.com', '456789', '26.03.1993', 'female', 'B+', 'sylhet', 'sylhet', 'sylhet', 'sylhet', 'sylhet', 'sylhet', 'accepted', 'inactive');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`nid`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
 ADD PRIMARY KEY (`photo_id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
 ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `rules`
--
ALTER TABLE `rules`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
MODIFY `photo_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rules`
--
ALTER TABLE `rules`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
