-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 27, 2018 at 12:17 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `website` varchar(50) DEFAULT NULL,
  `comment` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `email`, `website`, `comment`) VALUES
(1, 'tin', 'tin@gmail.com', 'upd.edu.ph', 'Wow!'),
(3, 'Matthew', 'matthew@gmail.com', 'none', 'Good job!'),
(4, 'Mae', 'mae@hotmail.com', 'none', 'Keep it up!'),
(6, 'Patrick', 'patrick@yahoo.com', 'patrick.com', 'Please improve your service'),
(7, 'Maria', 'maria@hotmail.com', 'maria.org', 'Well done'),
(8, 'Martha', 'martha.cruz@gmail.com', 'theblogger.com', 'Thanks for uploading this'),
(10, 'Rita', 'poorita@hotmail.com', 'senpoorita.com', 'Nice work'),
(11, 'Negatron', 'nega@gmail.com', 'negativity.com', 'Please check your resources'),
(12, 'Eunice', 'niceone@gmail.com', 'none', 'Need to improve'),
(13, 'Lakas', 'malakas@gmail.com', 'none', 'More power to you'),
(14, 'Benito', 'benito.luna@microsoft.com', 'none', 'This is a happy place'),
(15, 'Gal', 'gal@microsoft.com', 'gal@yahoo.com', 'Awesome'),
(16, 'Jol', 'jol@hotmail.com', 'none', 'Good luck!');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `password`) VALUES
(1, 'Admin', 'Admin', 'admin', 'admin123'),
(2, 'Christine', 'Alejandro', 'tin', 'tin123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
