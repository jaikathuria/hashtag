-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2016 at 01:07 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hashtag`
--

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `sno` int(200) NOT NULL,
  `fr0m` varchar(20) NOT NULL,
  `t0` varchar(20) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`sno`, `fr0m`, `t0`, `message`) VALUES
(6, 'jai', 'manpreet', 'hellow'),
(7, 'manpreet', 'jai', 'hellow'),
(8, 'manpreet', 'jai', 'how re you'),
(9, 'manpreet', 'jai', 'done'),
(10, 'daksh', 'jai', 'hellow'),
(11, 'daksh', 'manpreet', 'han g'),
(12, 'daksh', 'jai', 'checking'),
(13, 'Saroj', 'jai', 'Jai hello'),
(14, 'jai', 'Saroj', 'hi mom how are you'),
(15, 'jai', 'Saroj', 'ehna time'),
(16, 'Saroj', 'jai', 'Me fine what about you. '),
(17, 'jai', 'manpreet', 'Heyya'),
(18, 'jaikathuria', 'jaikathuria', 'hellow mr how are you'),
(19, 'jaikathuria', 'manpreet', 'hii'),
(20, 'jaikathuria', 'manpreet', 'heyya'),
(21, 'jaikathuria', 'manpreet', 'checking the site for complettion\r\n'),
(22, 'jaikathuria', 'manpreet', 'hiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sno` int(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sno`, `username`, `name`, `password`) VALUES
(6, 'jai', 'jai', 'zxcvb'),
(7, 'abc', '', 'abc'),
(8, 'xyz', '', 'xyz'),
(10, 'manpreet', 'manpreet', '12345'),
(11, 'daksh', 'daskh', '123'),
(12, '', '', ''),
(13, 'Saroj', 'Saroj Rani', '13272'),
(14, 'jaikathuria', 'jai', 'zxcvb');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `sno` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sno` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
