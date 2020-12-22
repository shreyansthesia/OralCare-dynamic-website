-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 11, 2019 at 09:55 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dynamic`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

DROP TABLE IF EXISTS `about`;
CREATE TABLE IF NOT EXISTS `about` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `desc` varchar(255) NOT NULL,
  `image` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `name`, `desc`, `image`) VALUES
(1, 'Shreyans Thesia', 'MBA TECH CS B2 FWT PROJECT', 'image/shr.jpg'),
(9, 'Dhruv Singhal', 'MBA TECH CS B1 FWT PROJECT', 'image/ds.png'),
(3, 'Alarik Vaz', 'MBA TECH CS B2 FWT PROJECT', 'image/al.jpg'),
(4, 'Ashish Varghese', 'MBA TECH CS B2 FWT PROJECT', 'image/as.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

DROP TABLE IF EXISTS `blog`;
CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `text` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `text`, `date`, `name`) VALUES
(1, 'this is first blog', 'january 21,2014', 'shreyans thesia'),
(2, 'this is second blog', 'march 3,2015', 'alarik vaz'),
(3, 'this is third blog', 'april 23,2016', 'ashish varghese'),
(4, 'this is last blog', 'july 4,2019', 'dhruv singhal');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `coment` varchar(255) NOT NULL,
  `blogno` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `name`, `time`, `coment`, `blogno`) VALUES
(1, 'shreyans thesia', '10 january 2017', 'ergre regrgetg rtgterg rtgrgr tgegfdvferge fgergertgregrtgr trbrtbr', '3'),
(2, 'ergefve ergegbef', '13 march 2018', 'dfvdef egrtgfvgfr fdvfbtrbbt rbgfddcc vfdfvdsvd', '2'),
(5, 'wregreg regrge', '15 august 2018', 'dfbgrege gbefdf bdfbdfb trbdfgb tbdbddfdf regfdvdf bgedrgdefv dbfgbrdf gbredfbd fbxb dre', '1'),
(6, 'eewfreg gthythjtrtr', '20 april 2019', 'grertebrt egtbedbvf vdfsxvdf bdfbdfbdbg bgfdbgdfbg fdgbfgbfbgfbd bfdbfdb gfdfgdfbd', '4'),
(14, 'zxc zxc', '11 may 1012', 'sdfsd dsd sdsd sfsdsf dsf dsf dsfds f dsfsd fs dfs fs', '3'),
(13, 'asdfg qwert', '12 june 2019', 'dsvsfdv dfvdfvdf vdfvfv dvdfv qwertyuiop asdfghjkl', '3'),
(37, 'afdfadsads', '12 june 2019', 'Ashish ', '1'),
(34, 'vgfjfg', 'fdhfd', 'sgdfgdfgc', '3'),
(35, 'dfhdfffffffffffffff', '15 march 2019', 'fbxvcbcvdbgfbbvc', '1'),
(36, 'ergr', 'erwgfd', 'efsdfdz', '1'),
(38, 'dthhtrhr', 'erhrthr', 'ethrtgfg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

DROP TABLE IF EXISTS `experience`;
CREATE TABLE IF NOT EXISTS `experience` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `number` int(10) NOT NULL,
  `service` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`id`, `number`, `service`) VALUES
(1, 20, 'Year of Experience'),
(2, 200, 'expert doctors'),
(4, 1500, 'happy smiles'),
(3, 320, 'Health Sections'),
(5, 120, 'staff members'),
(10, 5000, 'cases');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `firstname`, `lastname`, `username`, `password`) VALUES
(4, 'suraj', 'patil', 'suraj', 'patil'),
(3, 'shreyans', 'thesia', 'shreyans', 'thesia');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(25) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `category`, `description`) VALUES
(1, 'tooth removal', 'tooth removal services are provided for free for old age people.'),
(4, 'child care', 'children teeth care is also done.regular checkup and healthy teeth growth is regulated'),
(5, 'tooth cleaning', 'tooth cleaning is done using uv light and black charcol is used.'),
(6, 'patient records', 'patient records are saved for future use and safely stored and encrypted.'),
(16, 'low cost & expert doctors', 'experienced doctors and fees are low');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

DROP TABLE IF EXISTS `slider`;
CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `image`) VALUES
(1, 'https://images.unsplash.com/photo-1558685160-140e422ea847?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=700&q=80'),
(2, 'https://images.unsplash.com/photo-1558682383-95b6124e65a2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80'),
(3, 'https://images.unsplash.com/photo-1558677682-13f4fcbe689d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60'),
(4, 'https://image.shutterstock.com/image-photo/smiling-doctor-posing-arms-crossed-260nw-519507367.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

DROP TABLE IF EXISTS `team`;
CREATE TABLE IF NOT EXISTS `team` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `about` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `about`) VALUES
(1, 'shantanu gupta', 'service provided is very good as stated on website'),
(2, 'nehan jain', 'i had bleeding gums and was treated and cured at this hospital.'),
(3, 'manthan baheti', 'i had tooth decay and was cured successfully here.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
