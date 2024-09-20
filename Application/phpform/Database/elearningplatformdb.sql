-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2024 at 03:38 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `elearningplatformdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `formtbl`
--

CREATE TABLE IF NOT EXISTS `formtbl` (
  `studentid` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Emailid` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Question` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`studentid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `formtbl`
--

INSERT INTO `formtbl` (`studentid`, `Name`, `Emailid`, `Question`) VALUES
(1, 'Diksha Bhor', 'bhordiksha@gmail.com', 'what is e-lesrning'),
(2, 'anita bhor', 'anita@gmail.com', 'hi'),
(3, 'diksha kale', 'diksha67@gmail.com', 'dsfghj'),
(4, 'pritam', 'pritam@gmail.com', 'what courses available in web'),
(5, 'asdfgh', 'd@gmail.com', 'dgvdvs'),
(6, 'dfghj', 'dfv@gmail.com', 'dcfasc'),
(7, 'sdfghjk', 'edrtghj@gmail.com', 'aexcvbnmutds'),
(8, 'dikshabhorabcqwer', 'diksha@gmail.com', 'hfhjehiuhjbbxncbxnchjdgiddgdiwueyiueywiueyqwueywqueywueywueywuyeuweueyuwe');

-- --------------------------------------------------------

--
-- Table structure for table `tblloginform`
--

CREATE TABLE IF NOT EXISTS `tblloginform` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `PassWord` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `idStudent` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `tblloginform`
--

INSERT INTO `tblloginform` (`id`, `UserName`, `PassWord`, `idStudent`) VALUES
(1, 'dikshabhor', 'diksha123', 0),
(2, 'shraddha', 'shraddha', 0),
(3, 'durga', 'durga', 0),
(4, 'durgab', 'durgab', 19),
(5, 'shubham', 'shubham', 20),
(6, 'savita', 'savita', 21),
(7, 'aveshdhole', 'aveshdhole', 22),
(8, 'sdfghjdfhj', 'gjh', 23),
(9, 'asdfgh', 'sdfg56', 24),
(10, 'asdfgh', 'Vaishnavi', 25),
(11, 'dsfasdf', 'fsaasdf', 26),
(12, 'dsfasdf', 'sfdghjk', 27),
(13, 'dikshabhor', 'dikshabhor', 28);

-- --------------------------------------------------------

--
-- Table structure for table `tblsignupform`
--

CREATE TABLE IF NOT EXISTS `tblsignupform` (
  `idstudent` int(10) NOT NULL AUTO_INCREMENT,
  `Firstname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Lastname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `UserName` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idstudent`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=29 ;

--
-- Dumping data for table `tblsignupform`
--

INSERT INTO `tblsignupform` (`idstudent`, `Firstname`, `Lastname`, `email_id`, `Password`, `UserName`, `Gender`) VALUES
(1, 'Diksha', 'Bhor', 'diksha@gmail.com', 'diksha123', '', 'female'),
(3, '', 'Palve', 'sadna@gmail.com', 'sadana123', '', 'female'),
(4, 'Sadana', 'Palve', 'sadna@gmail.com', 'sadna1234', '', 'female'),
(5, 'Sachin', 'More', 'sachin@gmail.com', 'sachin1234', '', 'male'),
(6, 'Diksha', 'Bhor', 'diksha@gmail.com', '1234', '', 'female'),
(7, 'sadna', 'palve', 'sadana@gmail.com', 'sadana1234', '', 'female'),
(8, 'sadana', 'palve', 'sadana@gmail.com', 'dxcv', '', 'female'),
(9, 'sadana', 'palve', 'sadana@gmail.com', 'zxcv', '', 'female'),
(10, 'Amruta', 'Jhadhav', 'amuruta@gmail.com', 'amuruta456', '', 'female'),
(11, 'Ragini', 'dhamale', 'ragini@gmail.com', 'ragini12', '', 'female'),
(12, 'Ragini', 'dhamale', 'ragini@gmail.com', 'ragini123', '', 'female'),
(13, 'raksha', 'kdam', 'raksha45@gmail.com', 'raksha456', '', 'female'),
(14, 'nikita', 'shinde', 'nikita@gmai.com', 'nikita123', '', 'female'),
(15, 'nikita', 'shinde', 'nikita@gmail.com', 'nikita123', '', 'female'),
(16, 'prajkta', 'kale', 'prajkta12@gmail.com', 'prajkta12', 'prajktakale', 'female'),
(17, 'Shraddha', 'Suruse', 'shraddha@gmail.com', 'shraddha', 'shraddha', 'female'),
(18, 'Durga', 'Barve', 'durga@gmail.com', 'durga', 'durga', 'female'),
(19, 'Durga1', 'Barve', 'durga1@gmail.com', 'durgab', 'durgab', 'female'),
(20, 'Shubham', 'kale', 'shubham@gmail.com', 'shubham', 'shubham', 'male'),
(21, 'Savita', 'Bhor', 'savita@gmail.com', 'savita', 'savita', 'female'),
(22, 'Avesh ', 'Dhole', 'avesh23@gmail.com', 'aveshdhole', 'aveshdhole', 'male'),
(23, 'mayuri', 'bhor', 'mayuri@gmail.com', 'gjh', 'sdfghjdfhj', 'female'),
(24, 'asdfg', 'dvb', 'dsfa@gmail.com', 'sdfg56', 'asdfgh', 'female'),
(25, 'vaishnavi', 'salunke', 'dsfa@gmail.com', 'Vaishnavi', 'asdfgh', 'female'),
(26, 'durga', 'barve', 'durga@gmail.com', 'fsaasdf', 'dsfasdf', 'female'),
(27, 'durga', 'barve', 'durga@gmail.com', 'sfdghjk', 'dsfasdf', 'male'),
(28, 'diksha', 'bhor', 'diksha301@gmail.com', 'dikshabhor', 'dikshabhor', 'female');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
