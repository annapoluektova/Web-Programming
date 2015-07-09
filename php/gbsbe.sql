-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2013 at 11:31 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gbsbe`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `title` varchar(64) NOT NULL,
  `author` varchar(64) DEFAULT NULL,
  `price` decimal(5,0) DEFAULT NULL,
  `course` varchar(32) DEFAULT NULL,
  `description` varchar(128) DEFAULT NULL,
  `upload_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='books table' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `msg`
--

CREATE TABLE IF NOT EXISTS `msg` (
  `from_id` int(10) NOT NULL,
  `to_id` int(10) NOT NULL,
  `msg` varchar(256) DEFAULT NULL,
  `status` enum('new','read') DEFAULT 'new'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='sending message table';

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` enum('student','admin') NOT NULL DEFAULT 'student',
  `username` varchar(16) NOT NULL,
  `password` varchar(128) NOT NULL,
  `fname` varchar(32) DEFAULT NULL,
  `lname` varchar(32) DEFAULT NULL,
  `email` varchar(32) NOT NULL,
  `phone` int(12) DEFAULT NULL,
  `facebook` varchar(32) DEFAULT NULL,
  `twitter` varchar(32) DEFAULT NULL,
  `status` enum('pending','active','decline') NOT NULL DEFAULT 'pending',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='User table' AUTO_INCREMENT=14 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `type`, `username`, `password`, `fname`, `lname`, `email`, `phone`, `facebook`, `twitter`, `status`) VALUES
(5, 'student', '', 'd716a4188569b68ab1b6dfac178e570114cdf0ea3a1cc0e31486c3e41241bc6a76424e8c37ab26f096fc85ef9886c8cb634187f4fddff645fb099f1ff54c6b8c', '', '', '', 0, '', '', 'pending'),
(6, 'student', 'annapol', 'd716a4188569b68ab1b6dfac178e570114cdf0ea3a1cc0e31486c3e41241bc6a76424e8c37ab26f096fc85ef9886c8cb634187f4fddff645fb099f1ff54c6b8c', '', '', '', 0, '', '', 'pending'),
(7, 'student', 'annapol', 'd716a4188569b68ab1b6dfac178e570114cdf0ea3a1cc0e31486c3e41241bc6a76424e8c37ab26f096fc85ef9886c8cb634187f4fddff645fb099f1ff54c6b8c', 'Anna', 'Poluektova', 'annapoluektova@yahoo.ca', 214, 'anka-1986moimo', 'anka_1986', 'pending'),
(8, 'student', 'annapol', 'fb2207d7494c6e73fc0b83104190b848dc683085e25d7fc1688048785c87707ea3b3c8d70b03d8dc108910076ee2b94af0d6147e570fe043202b9fbd57df2d8b', 'Anna', 'PoluektovaVAVA', 'annapoluektova@yahoo.ca', 2147483647, 'anka-1986', 'anka_1986', 'pending'),
(9, 'student', 'annapol', 'fb2207d7494c6e73fc0b83104190b848dc683085e25d7fc1688048785c87707ea3b3c8d70b03d8dc108910076ee2b94af0d6147e570fe043202b9fbd57df2d8b', 'Anna', 'Poluektova', 'annapoluektova@yahoo.ca', 2147483647, 'anka-1986', 'anka_1986', 'pending'),
(11, 'student', 'abb', 'c6885ccbbf0bca66cb3546b62aad2c3b372e58efdaba0811141193ddd63ae41689f69cf0835ba7059594a50ad23725e507190813366d0406cb9ba1b0d2d80bce', 'ammamm', 'uuu', 'pomkm@t.ru', 8789, '', '', 'pending'),
(12, 'admin', 'abb', 'c6885ccbbf0bca66cb3546b62aad2c3b372e58efdaba0811141193ddd63ae41689f69cf0835ba7059594a50ad23725e507190813366d0406cb9ba1b0d2d80bce', 'amma', 'uuu', 'pomkm@t.ru', 8789, '', '', 'pending'),
(13, 'student', 'kjiu', '752d714fb87c662256f24d1fab085e7bcf51526b7021d132ee4a071bc22687b0b390ec1ffeb715b10aeeb16e4026ded33b20ea2e055b4ba5fbe6b10dc90648dd', 'gvty', 'zjuiu', '', 0, '', '', 'pending');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
