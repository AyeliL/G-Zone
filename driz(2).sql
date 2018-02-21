-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2015 at 07:51 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `driz`
--

-- --------------------------------------------------------

--
-- Table structure for table `approvals`
--

CREATE TABLE IF NOT EXISTS `approvals` (
  `client_id` int(3) NOT NULL,
  `company_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `client_choice`
--

CREATE TABLE IF NOT EXISTS `client_choice` (
  `choice_id` int(11) NOT NULL AUTO_INCREMENT,
  `client_id` varchar(23) NOT NULL,
  `company_id` varchar(23) NOT NULL,
  PRIMARY KEY (`choice_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `client_choice`
--

INSERT INTO `client_choice` (`choice_id`, `client_id`, `company_id`) VALUES
(1, '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `client_requests`
--

CREATE TABLE IF NOT EXISTS `client_requests` (
  `request_id` int(12) NOT NULL AUTO_INCREMENT,
  `client_id` int(12) NOT NULL,
  `company_id` int(12) NOT NULL,
  `request_details` varchar(35) NOT NULL,
  PRIMARY KEY (`request_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `client_requests`
--

INSERT INTO `client_requests` (`request_id`, `client_id`, `company_id`, `request_details`) VALUES
(1, 1, 1, 'Fumigation, Fireworks');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(123) NOT NULL,
  `type` varchar(23) NOT NULL,
  `email` varchar(343) NOT NULL,
  `username` varchar(34) NOT NULL,
  `password` varchar(34) NOT NULL,
  `address` varchar(45) NOT NULL,
  `contact` int(45) NOT NULL,
  `origin` varchar(45) NOT NULL,
  `postal` varchar(45) NOT NULL,
  `regby` varchar(25) NOT NULL,
  `profile` varchar(123) NOT NULL,
  `status` varchar(12) NOT NULL,
  `logo` varchar(45) NOT NULL,
  `workinghrs` varchar(90) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`cid`, `name`, `type`, `email`, `username`, `password`, `address`, `contact`, `origin`, `postal`, `regby`, `profile`, `status`, `logo`, `workinghrs`) VALUES
(1, 'Masaku Enterprises', 'Private', 'thessesanga@gmail.com', 'masa', 'masa', 'Kampala ug', 454545, 'Uganda', '456', 'Mr. Mukuye Joel', 'the leading clearing and forwarding industry', 'Active', 'uploads/10.jpg', ''),
(2, 'Kaka Co Ltd', 'Private', 'kaka@gmail.com', 'kaka', 'kaks1234', 'Mumbai', 4894859, 'Antarctica', '295', 'Kama', 'This is a description of the compmany', 'Active', 'uploads/alpha natural support logo1.png', ''),
(3, 'Shafik CO', 'Government Parastatal', 'thesamas@yahoo.com', 'ssesanga', 'ssesanga', 'Kampala', 2147483647, 'Aruba', '06009090', '008/6464', 'this The basic reports for Coca-Cola have been uploaded to jasper server.\r\nPlease review them and advise if any modificatio', 'Pending', 'uploads/Graphicloads-Medical-Health-Heart-bea', 'Mon-Fri 08:00am - 05:00pm');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE IF NOT EXISTS `notifications` (
  `nid` int(12) NOT NULL AUTO_INCREMENT,
  `cid` int(122) NOT NULL,
  `cname` varchar(1221) NOT NULL,
  `subject` varchar(25) NOT NULL,
  `message` varchar(222) NOT NULL,
  `client_id` int(12) NOT NULL,
  PRIMARY KEY (`nid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`nid`, `cid`, `cname`, `subject`, `message`, `client_id`) VALUES
(1, 1, 'Masaku Enterprises', 'Thanx', 'hey client, thanx for adding us..we will add you to the stisfaction', 1),
(2, 1, 'Masaku Enterprises', 'sfvjnb', 'hello client,\r\nthanx for conatcktlk', 1);

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE IF NOT EXISTS `reports` (
  `rid` int(12) NOT NULL AUTO_INCREMENT,
  `date` varchar(123) NOT NULL,
  `details` varchar(90) NOT NULL,
  `company_id` int(12) NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`rid`, `date`, `details`, `company_id`) VALUES
(15, 'Tuesday, July 22, 2014', '', 0),
(16, 'Tuesday, July 22, 2014', '', 0),
(17, 'Tuesday, July 22, 2014', '', 0),
(18, 'Thursday, July 24, 2014', '', 0),
(19, 'Thursday, July 24, 2014', '', 0),
(20, 'Friday, May 29, 2015', 'Message sent to client --- hey client, thanx for adding us..we will add you to the stisfac', 1),
(21, 'Friday, May 29, 2015', 'Message sent to client --- hello client,\r\nthanx for conatcktlk', 1);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `service_id` int(11) NOT NULL AUTO_INCREMENT,
  `service_name` varchar(12) NOT NULL,
  `service_details` varchar(124) NOT NULL,
  `company_id` varchar(2) NOT NULL,
  PRIMARY KEY (`service_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `service_name`, `service_details`, `company_id`) VALUES
(1, 'Fumigation', 'sdljvhljsdbvlj clbv djnbln ldfb\r\ndfbjdn dlvcjn dcvbjk dkc', '2'),
(2, 'Spraying', 'xckvbjlbxcvujlboulsdhvo hdolfb\r\n\\dfbjndvlndb\r\ndbndbvjkd', '3'),
(3, 'Fumigation', 'used alot these days', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_clients`
--

CREATE TABLE IF NOT EXISTS `tb_clients` (
  `client_id` int(11) NOT NULL AUTO_INCREMENT,
  `client_name` varchar(122) NOT NULL,
  `fullname` varchar(83) NOT NULL,
  `location` varchar(34) NOT NULL,
  `client_address` varchar(122) NOT NULL,
  `client_contact` varchar(122) NOT NULL,
  `contact_person` varchar(122) NOT NULL,
  `emailaddress` varchar(122) NOT NULL,
  `password` varchar(25) NOT NULL,
  PRIMARY KEY (`client_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tb_clients`
--

INSERT INTO `tb_clients` (`client_id`, `client_name`, `fullname`, `location`, `client_address`, `client_contact`, `contact_person`, `emailaddress`, `password`) VALUES
(1, 'Milumu CO. Ltd', '', '', 'Nmanve Plot 35', '07894747774', 'Kabano David', 'mulimu@info.com', 'sasafa'),
(2, 'Kazinga Ltd', '', '', 'Kamu kamu Plaza', '0800656565', 'Rajiv Sinama', 'Support@kaz.com', 'ssp');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `firstname`, `lastname`) VALUES
(13, 'Sam', 'sam', 'Sedu', 'Samuel');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
