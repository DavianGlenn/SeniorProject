-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2019 at 09:16 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `senior project`
--

-- --------------------------------------------------------

--
-- Table structure for table `calendarevents`
--

--
-- Dumping data for table `events`
--

INSERT INTO `calendarevents` (`id`, `title`, `date`, `created`, `modified`, `status`) VALUES
(1, 'Internet of Things World Forum', '2019-04-20', '2019-04-16 06:15:17', '2019-04-16 06:15:17', 1),
(2, 'The Future of Money and Technology Summit', '2019-04-25', '2019-04-16 06:15:17', '2019-04-16 06:15:17', 1),
(3, 'Chrome Dev Summit', '2019-04-29', '2019-04-16 06:15:17', '2019-04-16 06:15:17', 1),
(4, 'The Lean Startup Conference', '2019-04-20', '2019-04-16 06:15:17', '2019-04-16 06:15:17', 1),
(5, 'Web Submit for Developers', '2019-05-05', '2019-04-16 06:15:17', '2019-04-16 06:15:17', 1),
(6, 'Digital Codex Submit 2019', '2019-05-16', '2019-04-16 06:15:17', '2019-04-16 06:15:17', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `calendarevents`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `calendarevents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
