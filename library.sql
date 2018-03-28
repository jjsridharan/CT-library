-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2018 at 05:27 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `bid` varchar(25) NOT NULL,
  `bname` varchar(50) NOT NULL,
  `field` varchar(50) NOT NULL,
  `instock` varchar(10) NOT NULL,
  `author` varchar(25) NOT NULL,
  `publication` varchar(25) NOT NULL,
  `qua` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bid`, `bname`, `field`, `instock`, `author`, `publication`, `qua`) VALUES
('1', 'machine learning', 'CSE', 'YES', 'Sridharan', 'Pearson', 2),
('2', 'machine learning', 'CSE', 'YES', 'Authro', 'Pearson', 1),
('3', 'machine learning', 'SE', 'YES', 'Sridharan', 'Pearson', 1);

-- --------------------------------------------------------

--
-- Table structure for table `field`
--

CREATE TABLE `field` (
  `name` varchar(255) NOT NULL,
  `total` int(11) NOT NULL,
  `ava` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `field`
--

INSERT INTO `field` (`name`, `total`, `ava`) VALUES
('AI', 10, 10),
('CD', 3, 3),
('CE', 36, 36),
('CO', 6, 6),
('DB', 33, 33),
('DC', 13, 13),
('DS', 25, 25),
('EL', 6, 6),
('GC', 4, 4),
('GE', 35, 35),
('JA', 24, 24),
('MA', 10, 10),
('MIS', 14, 14),
('MM', 48, 48),
('MP', 10, 10),
('NW', 42, 42),
('OO', 20, 20),
('OS', 39, 39),
('PL', 14, 14),
('SE', 36, 36),
('VP', 11, 11),
('WN', 60, 60),
('ML', 40, 40),
('NT', 20, 20),
('NS', 31, 31),
('SC', 21, 21),
('PC', 35, 35),
('DB', 18, 18),
('WT', 21, 21),
('CC', 47, 47),
('BD', 26, 26),
('EL', 1, 1),
('ES', 12, 12);

-- --------------------------------------------------------

--
-- Table structure for table `lend`
--

CREATE TABLE `lend` (
  `hold` varchar(255) NOT NULL,
  `bid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user`, `pass`) VALUES
('1234', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `user` varchar(25) NOT NULL,
  `pass` varchar(25) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `Name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`user`, `pass`, `mail`, `Name`) VALUES
('cva', '12345', 'cva@mitindia.edu', 'cva'),
('pari', 'pari', 'pari@gmail.com', 'pari');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`user`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`mail`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
