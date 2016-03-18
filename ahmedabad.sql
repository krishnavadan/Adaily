-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2015 at 06:46 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ahmedabad`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `company_firm` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `pincode` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `contact` varchar(100) DEFAULT NULL,
  `tfile` varchar(100) DEFAULT NULL,
  `isfeatured` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `company_firm`, `address`, `location`, `pincode`, `email`, `contact`, `tfile`, `isfeatured`) VALUES
(1, 'vishvajit', 'infinity solution', 'bopal', 'ahmedabad', '382415', 'vishvajitmahiada009@gmail.com', '8866556166', 'ad24.png', '1'),
(2, 'vishvajit', 'ankit', 'bopal', 'ahmedabad', '382415', 'vishvajitmahiada009@gmail.com', '8866556166', 'ad1.png', '1'),
(3, 'Raj', 'infinity solution', 'D/401,RAJTILAK PLAZA,NEAR SARKARI TUBE WELL', 'ahmedabad', '380058', 'vishvajitmahiada009@gmail.com', '9712052052', 'ad3.png', '1'),
(4, 'vishvajit', 'ankit', 'bopal', 'ahmedabad', '382415', 'vishvajitmahiada009@gmail.com', '8866556166', 'ad11.png', '1'),
(5, 'Ankit Patel', 'Apple ', 'B34 Divyaprbha Soc', 'Ahmeadabad', '380058', 'vishvajit0912@gmail.com', '8866556166', 'ad4.png', '1'),
(6, 'VISHAJIT', 'APPLE', 'B34 Divyaprbha Soc', 'AHMEDBAD', '380058', 'vishvajit0912@gmail.com', '8866556166', 'ad41.png', '1'),
(7, 'vishvajit', 'ankit', '2, tejas soc. opp shantaram complex', 'Ahmeadabad', '382481', 'gjhgjhgjhg@gmail.com', '9712052052', 'gallery3.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE IF NOT EXISTS `inquiry` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `s_id` int(10) NOT NULL,
  `created` varchar(50) NOT NULL,
  `modified` varchar(50) NOT NULL,
  `ip` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`id`, `name`, `email`, `contact`, `s_id`, `created`, `modified`, `ip`) VALUES
(1, 'vishvajit', 'vishvajitmahiada009@gmail.com', '8866556166', 0, '', '', ''),
(2, 'raj', 'raj@gmail.com', '9712052052', 0, '', '', ''),
(3, 'Raj', 'vishvajitamhahi2@gmai.com', '8866556166', 0, '', '', ''),
(4, 'sdsds', 'sdsd', 'sdsdsd', 0, '', '', ''),
(5, 'vishvajit', 'vishvajitmahiada009@gmail.com', '8866556166', 0, '', '', ''),
(6, 'vishvajit', 'vishvajitamhahi2@gmai.com', '9712052052', 0, '', '', ''),
(7, 'raj', 'vishvajitmahiada009@gmail.com', '8866556166', 0, '', '', ''),
(8, 'asas', 'vishvajitmahiada009@gmail.com', '8866556166', 0, '', '', ''),
(9, 'vishvajit', 'vishvajitmahiada009@gmail.com', '8866556166', 0, '', '', ''),
(10, 'asas', 'vishvajitmahiada009@gmail.com', '8866556166', 0, '', '', ''),
(11, 'vishvajit', 'gjhgjhgjhg@gmail.com', '8866556166', 0, '', '', ''),
(12, 'ff', 'fgfg', 'fgf', 0, '', '', ''),
(13, 'vishvajit', 'gjhgjhgjhg@gmail.com', '8866556166', 0, '', '', ''),
(14, 'vishvajit', 'vishvajitmahiada009@gmail.com', '8866556166', 0, '', '', ''),
(15, 'vishvajit', 'vishvajitmahiada009@gmail.com', '8866556166', 0, '', '', ''),
(16, 'vishvajit', 'vishvajitmahiada009@gmail.com', '8866556166', 0, '', '', ''),
(17, 'vishvajit', 'vishvajitmahiada009@gmail.com', '8866556166', 0, '', '', ''),
(18, 'vishvajit', 'vishvajitmahiada009@gmail.com', '8866556166', 0, '', '', ''),
(19, 'vishvajit', 'gjhgjhgjhg@gmail.com', '9712052052', 0, '', '', ''),
(20, 'raj', 'gjhgjhgjhg@gmail.com', '8866556166', 0, '', '', ''),
(21, 'raj', 'gjhgjhgjhg@gmail.com', '9712052052', 0, '', '', ''),
(22, 'Raj', 'gjhgjhgjhg@gmail.com', '9712052052', 0, '', '', ''),
(23, 'vishvajit', 'vishvajitmahiada009@gmail.com', '1234567890', 0, '', '', ''),
(24, 'vishvajit', 'gjhgjhgjhg@gmail.com', '0987654321', 0, '', '', ''),
(25, 'raj', 'urmi@gmail.com', '9712052052', 0, '', '', ''),
(26, 'sdf', 'sdf', 'sdf', 0, '', '', ''),
(27, 'vishvajit', 'vishvajitmahiada009@gmail.com', '8866556166', 0, '', '', ''),
(28, 'vishvajit', 'vishvajitmahiada009@gmail.com', '8866556166', 0, '', '', ''),
(29, 'vishvajit', 'vishvajitmahiada009@gmail.com', '8866556166', 0, '', '', ''),
(30, 'vishvajit', 'vishvajitmahiada009@gmail.com', '8866556166', 0, '', '', ''),
(31, 'vishvajit', 'vishvajitmahiada009@gmail.com', '8866556166', 0, '', '', ''),
(32, 'raj', 'RAJ@GMAIL.COM', '9712052052', 0, '', '', ''),
(33, 'raj', 'vishvajitmahiada009@gmail.com', '8866556166', 0, '', '', ''),
(34, 'vishvajit', 'vishvajitmahiada009@gmail.com', '8866556166', 0, '', '', ''),
(35, 'vishvajit', 'vishvajitmahiada009@gmail.com', '8866556166', 0, '', '', ''),
(36, 'raj', 'vishvajitmahiada009@gmail.com', '8866556166', 0, '', '', ''),
(37, 'Raj', 'vishvajitmahiada009@gmail.com', '8866556166', 0, '', '', ''),
(38, 'vishvajit', 'vishvajitmahiada009@gmail.com', '1234567890', 0, '', '', ''),
(39, 'vishvajit', 'vishvajitmahiada009@gmail.com', '8866556166', 0, '', '', ''),
(40, 'raj', 'RAJ@GMAIL.COM', '9712052052', 0, '', '', ''),
(41, 'ankit', 'ankit@gm,ail.com', '1324567895', 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `s_id` int(10) NOT NULL AUTO_INCREMENT,
  `s_name` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `short_desc` varchar(160) NOT NULL,
  `long_desc` varchar(700) NOT NULL,
  `tags` varchar(100) NOT NULL,
  `featureimage` varchar(100) DEFAULT NULL,
  `coverimage` varchar(100) DEFAULT NULL,
  `icon` varchar(100) DEFAULT NULL,
  `slug` varchar(100) NOT NULL,
  `isfeatured` int(1) DEFAULT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`s_id`, `s_name`, `title`, `short_desc`, `long_desc`, `tags`, `featureimage`, `coverimage`, `icon`, `slug`, `isfeatured`) VALUES
(4, 'elecrician', 'tijhnhmnabsjda', 'mbjhbmhbjhbad', 'jkhmnbcbcjsu', 'mkljkjm,', '3.jpg', '3.jpg', '3.jpg', 'qwqwqwqrfg', 0),
(5, 'elecrician', 'tijhnhmnabsjda', 'mbjhbmhbjhbad', 'jkhmnbcbcjsu', 'mkljkjm,', '21.jpg', '21.jpg', '21.jpg', 'ujhjhjh', 0),
(8, 'tuy', 'yiuy', 'yuiy', 'iuyiu', 'yiuy', '35.jpg', '35.jpg', '35.jpg', 'ui', 0),
(9, 'plumbing', 'tijhnhmnabsjda', 'mbjhbmhbjhbad', 'jkhmnbcbcjsu', 'mkljkjm,', '26.jpg', '26.jpg', '26.jpg', 'qwqwqwq', 0),
(10, 'plumbing', 'plum', 'mbjhbmhbjhbad', 'jkhmnbcbcjsu', 'mkljkjm,', '4.jpg', '3.jpg', '2.jpg', 'qwqwqwq', 1),
(11, 'plumbing', 'tijhnhmnabsjda', 'mbjhbmhbjhbad', 'jkhmnbcbcjsu', 'mkljkjm,', '1.jpg', '2.jpg', '3.jpg', 'asasasa', 1),
(12, 'PASTE CONTROL', 'asasasas', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam', 'ASASASAS', '4.jpg', '3.jpg', '2.jpg', 'asasasas', NULL),
(13, 'PASTE CONTROL', 'tijhnhmnabsjda', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam', 'sdfsdfsdfsdfsdf', 'mkljkjm,', '4.jpg', '3.jpg', '2.jpg', 'qwqwqwq', 1),
(14, 'paper  add', 'advit', 'asasas', 'sxcsdcsd', 'sdfsd', 'ad1.png', 'ad2.png', 'ad3.png', 'fgfgf', 1),
(15, 'paper  add', 'advit', 'asasas', 'sxcsdcsd', 'sdfsd', 'ad1.png', 'ad2.png', 'ad3.png', 'fgfgf', 1),
(16, 'washing machine repair', 'asdasdas', 'sdasdas', 'asdasdasdasd', 'asdasdasd', 'ad4.png', 'ad3.png', 'ad2.png', 'qwqwqwqrfg', 1),
(17, 'washing machine repair', 'asdasdas', 'sdasdas', 'asdasdasdasd', 'asdasdasd', 'ad4.png', 'ad3.png', 'ad2.png', 'qwqwqwqrfg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE IF NOT EXISTS `user_type` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `usertype` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
