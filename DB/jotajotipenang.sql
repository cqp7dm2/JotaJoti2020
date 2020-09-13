-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 13, 2020 at 02:24 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jotajotipenang`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_Fname` varchar(225) NOT NULL,
  `admin_Lname` varchar(225) NOT NULL,
  `admin_email` varchar(225) NOT NULL,
  `admin_pass` varchar(150) NOT NULL,
  `admin_address` text NOT NULL,
  `admin_Pnumber` varchar(50) NOT NULL,
  `admin_dob` date NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_Fname`, `admin_Lname`, `admin_email`, `admin_pass`, `admin_address`, `admin_Pnumber`, `admin_dob`) VALUES
(7, 'admin', 'two', 'admin13@gmail.com', '$2y$10$rbsICopH9HzG4Z86QzJzVuAcj30TuLlsTZwXdSakWO7KtbwbQRBMC', 'JA 309 Tingkat 3 Blok Jasmin A , Taman Sri Kolam , Jalan Sultan Sulaiman , 20000 Kuala Terengganu, Terengganu', '0164594631', '2019-11-06');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_createT` timestamp(6) NOT NULL,
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_Fname` varchar(225) NOT NULL,
  `user_Lname` varchar(225) NOT NULL,
  `user_email` varchar(225) NOT NULL,
  `user_pass` varchar(150) NOT NULL,
  `user_address` varchar(225) NOT NULL,
  `user_postalcode` varchar(225) DEFAULT NULL,
  `user_Pnumber` varchar(50) NOT NULL,
  `user_dob` date NOT NULL,
  `user_cat` int(11) NOT NULL,
  `user_W1G1` int(11) DEFAULT NULL,
  `user_W1G2` int(11) DEFAULT NULL,
  `user_W2G1` int(11) DEFAULT NULL,
  `user_W2G2` int(11) DEFAULT NULL,
  `user_W3G1` int(11) DEFAULT NULL,
  `user_W3G2` int(11) DEFAULT NULL,
  `user_W4G1` int(11) DEFAULT NULL,
  `user_W4G2` int(11) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_createT`, `user_id`, `user_Fname`, `user_Lname`, `user_email`, `user_pass`, `user_address`, `user_postalcode`, `user_Pnumber`, `user_dob`, `user_cat`, `user_W1G1`, `user_W1G2`, `user_W2G1`, `user_W2G2`, `user_W3G1`, `user_W3G2`, `user_W4G1`, `user_W4G2`) VALUES
('0000-00-00 00:00:00.000000', 23, 'test', 'one', 'cqp@gmail.com', '$2y$10$8blaSKjWfqxObDMS3UCWneIV3V.7ffGIMtdo2g5o6XU6MhHocNfD2', '8b-12-4', '25740', '0164594311', '2020-09-03', 0, 0, 0, 0, 0, 0, 0, 0, 0),
('0000-00-00 00:00:00.000000', 19, 'user', 'first', 'user1@gmail.com', '$2y$10$gGk41Ou8OVTrJ0tLl7grGuxmKYzuu0oypPBYBOPz.wpBnKWj23mE.', 'C2-3-5 , Jalan Barat , Vista Komanwel Hill Block 3c2 (Parcel C), Bukit Jalil 57000 , Kuala Lumpur , Wilayah Persekutuan', '57000', '0164594631', '2019-11-02', 0, 0, 0, 0, 0, 0, 0, 0, 0),
('0000-00-00 00:00:00.000000', 24, 'Chua ', 'Qin Peng', 'chuaqp@gmail.com', '$2y$10$5TyzTKn057qT4sPgHt8z1e3JyPylWyl8gRB9Yx7.hUuw1di5B82gW', 'Malaysia', '21 GeorgeTown (South)', '+60164594631', '2000-02-07', 0, 0, 0, 0, 0, 0, 0, 0, 0),
('0000-00-00 00:00:00.000000', 25, 'Chua ', 'Qin Peng', 'chuaqp@gmail.com', '$2y$10$5TyzTKn057qT4sPgHt8z1e3JyPylWyl8gRB9Yx7.hUuw1di5B82gW', 'Malaysia', '21 GeorgeTown (South)', '+60164594631', '2000-02-07', 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2020-09-13 02:11:41.000000', 27, 'test', 'timestamp', 'yy@gmail.com', '$2y$10$5qVymFPLrwVEJs82klNP3OB3zgIpNDY7MCk70SECh7VQhcqsLqKVi', 'Malaysia', '21frs', '0164594631', '2020-09-12', 0, 0, 0, 0, 0, 0, 0, 0, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
