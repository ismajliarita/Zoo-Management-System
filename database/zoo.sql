-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2023 at 09:36 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zoo`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(12) NOT NULL,
  `fname` varchar(12) NOT NULL,
  `lname` varchar(12) NOT NULL,
  `email` varchar(25) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `power` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `pass`, `power`) VALUES
(1, 'test', '123', 'test@a', '321', 'User'),
(25, 'Arbnor', 'Rama', 'arama@york.citycollege.eu', 'berravo', 'User'),
(26, 'Arbnor', 'Ramabaja', 'rama@york', '123', 'User'),
(27, 'Ilber', 'Galika', 'galica.ylber@gmail.com', 'majmun', 'User'),
(28, 'Jake', 'Blake', 'jake@gmail.com', 'jaketheking', 'User'),
(29, 'Mathew', 'Anastasias', 'math@gmail.com', 'athens123', 'User'),
(40, 'admin', 'admin', 'admin@admin', 'admin', 'Admin'),
(44, 'Edon', 'Ramdi', 'ramdi@gamil', '123', 'User'),
(46, 'Matilda', 'Bonski', 'matski@gmail.com', 'bonski123', 'Helper'),
(48, 'Tringa ', 'Rexhepaj', 'trina@enail', 'tringa', 'Helper'),
(49, 'Arita', 'Ismajli', 'arita@gmail.com', 'aritamaemira', 'Admin'),
(50, 'Daniel', 'Mickins', 'daniel@hotmail.com', '123', 'Helper');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
