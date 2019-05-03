-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 27, 2018 at 07:50 PM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE IF NOT EXISTS `college` (
  `name` varchar(30) NOT NULL,
  `location` varchar(30) NOT NULL,
  `fees` float NOT NULL,
  `type` varchar(20) NOT NULL,
  `marks` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`name`, `location`, `fees`, `type`, `marks`) VALUES
('AMRITA SCHOOL OF ENGINEERING', 'KERALA', 560000, 'Private', 186),
('IIT MADRAS', 'TAMIL NADU', 800000, 'GOVERNMENT', 300),
('IIT MUMBAI', 'MAHARASHTRA', 900501, 'GOVERNMENT', 340),
('NIT DURGAPUR', 'WESTBENGAL', 560000, 'Government', 210),
('MOTILAL NEHRU NATIONAL INSTITU', 'UTTARPRADESH', 650000, 'Government', 0),
('IIT KHARAGPUR', 'WEST BENGAL', 700000, 'GOVERNMENT', 310),
('IIT DELHI', 'DELHI', 705601, 'GOVERNMENT', 320),
('THIAGARAJAR COLLEGE OF ENGINEE', 'TAMILNADU', 570000, 'Private', 97),
('IIT KANPUR', 'UTTARPRADESH', 604301, 'Government', 256),
('IIT ROORKEE', 'UTTARAKHAND', 1.1e+006, 'Government', 270),
('NIT WARANGAL', 'TELANGANA', 476000, 'Government', 158),
('IIT GUWHATI', 'ASSAM', 850001, 'Government', 290),
('THAPAR UNIVERSITY', 'PUNJAB', 470000, 'Private', 116),
('ANNA UNIVESITY', 'TAMILNADU', 1.2e+006, 'Private', 150),
('IIIT DELHI', 'DELHI', 350000, 'Private', 175),
('JADAVPUR UNIVERSITY', 'WEST BENGAL', 505601, 'Private', 200),
('IIT BHUBANESWAR', 'ODISHA', 655000, 'Government', 137),
('IIT HYDERABAD', 'TELAGNA', 884301, 'Government', 200),
('NIT TIRUCHI', 'TAMILNADU', 770001, 'Government', 336),
('IIT JODHPUR', 'RAJASTHAN', 370000, 'Government', 156),
('NIT ROURKELA', 'ODISHA', 810501, 'Government', 280),
('VIT VELLORE', 'TAMILNADU', 1.3e+006, 'Private', 200),
('PSG COLLEGE OF TECHNOLOGY COIM', 'TAMILNADU', 350000, 'Private', 115),
('ICT', 'MAHARASHTRA', 605601, 'Private', 140),
('IIT INDORE', 'MADYA PRADESH', 634301, 'Government', 150),
('NIT MANGALORE', 'KARNATAKA', 550000, 'Government', 160),
('BITS PILANI', 'RAJASTHAN', 2e+006, 'Private', 390),
('IIEST', 'WEST BENGAL', 1.0005e+006, 'Private', 120),
('COLLEGE OF ENGINEERING PUNE', 'MAHARASHTRA', 650000, 'Government', 135),
('IIT BHU', 'ODISHA', 700801, 'Government', 210),
('IIT PATNA', 'BIHAR', 735601, 'Government', 180),
('IIT MANDI', 'HIMACHALPRADESH', 500000, 'Government', 175),
('JAMIA MILIA', 'DELHI', 504301, 'Private', 130),
('NIT CALICUT', 'KERALA', 456678, 'Government', 145),
('KIIT', 'ODISHA', 450000, 'Private', 147),
('KIT KOLKATA', 'WESTBENGAL', 456000, 'Government', 168),
('SHANMUGHA ARTS SCIENCE TECHNOL', 'TAMILNADU', 560000, 'Private', 123),
('NIT JAIPUR', 'RAJASTHAN', 560000, 'Government', 120),
('M. S. RAMAIAH INSTITUTE OF TEC', 'KARNATAKA', 457986, 'Private', 145),
('R.V. COLLEGE OF ENGINEERING', 'KARNATAKA', 456398, 'Private', 215),
('PEC UNIVERSITY OF TECHNOLOGY', 'PUNJAB', 465746, 'Private', 145),
('MANIPAL INSTITUTE OF TECHNOLOG', 'KARNATAKA', 765486, 'Private', 132),
('BIT MESRA', 'RANCHI', 346574, 'Private', 157),
('SARDAR VALLABHBHAI NATIONAL  I', 'GUJARAT', 678576, 'Government', 198),
('NIT AGARTALA', 'TRIPURA', 456387, 'Government', 254),
('NIT MEGHALAYA', 'MEGHALAYA', 567485, 'Government', 145),
('B.S. ABDUR RAHMAN INSTITUTE OF', 'TAMILNADU', 234875, 'Private', 184),
('BHARATI VIDYAPEETH DEEMED UNIV', 'MAHARASHTRA', 668098, 'Government', 135),
('BANNARI AMMAN INSTITUTE OF TEC', 'TAMILNADU', 576904, 'Private', 138),
('NIT RAIPUR', 'Chhattisgarh', 45078, 'Government', 187),
('VISHWAKARMA INSTITUTE OF TECHN', 'MAHARASHTRA', 478985, 'Private', 178),
('NIT SILCHAR', 'ASSAM', 456736, 'Government', 156),
('SIDDAGANGA INSTITUTE OF TECHNO', 'KARNATAKA', 564738, 'Private', 148),
('NIT SRINAGAR', 'KASHMIR', 456785, 'Government', 175),
('HITS', 'TAMIL NADU', 364758, 'Private', 190),
('CHAITANYA BHARATHI INSTITUTE O', 'HYDERABAD', 785767, 'Government', 245),
('C.V.RAMAN COLLEGE OF ENGINEERI', 'ODISHA', 467586, 'Private', 137),
('NIT PATNA', 'BIHAR', 786909, 'Government', 129),
('INSTITUTE OF ENGINEERING &amp;', 'WESTBENGAL', 450000, 'Government', 275);