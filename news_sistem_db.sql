-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 20, 2012 at 01:59 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `news_sistem_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(32) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `link` varchar(250) NOT NULL,
  `num_votes` int(11) NOT NULL DEFAULT '0',
  `user` varchar(100) NOT NULL,
  `datum` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `link`, `num_votes`, `user`, `datum`) VALUES
(2, 'Oracle Linux: A better alternative to CentOS', 'http://linux.oracle.com/switch/centos/', 3, 'maox90', '2012-07-18 18:29:04'),
(3, 'What are the most intellectually stimulating websites you know of? I''ll start.', 'http://www.reddit.com/r/AskReddit/comments/tmtd4/what_are_the_most_intellectually_stimulating/', 30, 'maox90', '2012-07-19 06:57:24'),
(4, 'udacity', 'http://www.udacity.com/view#Course/cs253/CourseRev/apr2012/Unit/237003/Nugget/245002', 30, 'maox90', '2012-07-19 06:58:03'),
(5, 'net', 'http://net.tutsplus.com/articles/web-roundups/30-awesome-codeigniter-tutorials-for-all-skill-levels/', 14, 'maox90', '2012-07-19 06:58:28'),
(7, 'Istraga protiv Microsofta', 'Linkhttp://www.blic.rs/IT/333689/Otvorena-istraga-protiv-Majkrosofta', 0, '', '2012-07-20 11:52:31'),
(8, 'Microsoft na gubitku', 'http://www.blic.rs/IT/334149/Majkrosoft-po-prvi-put-na-gubitku', 0, '', '2012-07-20 11:53:10'),
(9, 'MacBook Pro with Retina', 'http://www.blic.rs/IT/333902/MekBuk-Pro-Noutbuk-sa-savrsenom-slikom', 0, '', '2012-07-20 11:53:44'),
(10, 'Prihodi Google-a i dalje rastu', 'http://www.b92.net/tehnopolis/vesti.php?yyyy=2012&mm=07&nav_id=628251', 0, '', '2012-07-20 11:56:38'),
(11, 'Soni ekoloska baterija', 'http://www.b92.net/tehnopolis/vesti.php?yyyy=2012&mm=07&nav_id=627897', 0, '', '2012-07-20 11:57:02'),
(12, 'SOPA i PIPA gube podrsku u kongresu', 'http://www.b92.net/tehnopolis/internet.php?yyyy=2012&mm=01&nav_id=575175', 0, '', '2012-07-20 11:58:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(25) NOT NULL,
  `l_name` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `f_name`, `l_name`, `email`, `username`, `password`) VALUES
(1, 'Ivan', 'Maksim', 'maox90@gmail.com', 'maox90', 'd9a003458c9701e624580dfdbd667c13');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
