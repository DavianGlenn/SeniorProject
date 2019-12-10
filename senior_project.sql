-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2019 at 04:41 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

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

CREATE TABLE `calendarevents` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET latin1 NOT NULL,
  `date` date NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=Active | 0=Inactive',
  `userid` int(11) NOT NULL,
  `orgID` int(30) NOT NULL,
  `username` varchar(30) CHARACTER SET latin1 NOT NULL,
  `org_name` varchar(30) CHARACTER SET latin1 NOT NULL,
  `Type` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `calendarevents`
--

INSERT INTO `calendarevents` (`id`, `title`, `date`, `status`, `userid`, `orgID`, `username`, `org_name`, `Type`) VALUES
(20, 'Algebra Study Blitz', '2019-12-22', 1, 7, 6, 'chass', 'Math Department', 'Academic'),
(23, 'Marketing Class ', '2019-12-18', 1, 2, 1, 'Rahiem97', 'The New Steez', 'Academic'),
(24, 'Ready, Set, Excel! ', '2019-10-28', 1, 10, 8, 'erob', 'National Society of Black Engi', 'Academic'),
(25, 'Photography Class', '2019-12-19', 1, 10, 2, 'erob', 'Roletape', 'Social'),
(26, 'Senior Picture Photoshoot', '2019-12-23', 1, 10, 2, 'erob', 'Roletape', 'Social'),
(27, 'Pizza Luncheon With The Ladies', '2019-12-10', 1, 10, 7, 'erob', 'Society of Women Engineers ', 'Social'),
(28, 'Cause an Effect ', '2019-12-10', 1, 10, 7, 'erob', 'Society of Women Engineers ', 'Community Service'),
(29, 'Feed the Homeless ', '2019-11-23', 1, 10, 8, 'erob', 'National Society of Black Engi', 'Community Service'),
(30, 'Keys to Optimize your Internsh', '0000-00-00', 1, 10, 8, 'erob', 'National Society of Black Engi', 'Career Opportunity'),
(31, 'Discrete Structures Study Blit', '2019-12-10', 1, 11, 6, 'akosajohnson ', 'Math Department', 'Academic'),
(32, 'Algebra Study Blitz', '2019-12-22', 1, 11, 6, 'akosajohnson ', 'Math Department', 'Academic'),
(33, 'Marketing Class ', '2019-12-18', 1, 11, 1, 'akosajohnson ', 'The New Steez', 'Academic'),
(34, 'Ready, Set, Excel! ', '2019-10-28', 1, 11, 8, 'akosajohnson ', 'National Society of Black Engi', 'Academic'),
(35, 'Photography Class', '2019-12-19', 1, 11, 2, 'akosajohnson ', 'Roletape', 'Social'),
(36, 'Senior Picture Photoshoot', '2019-12-23', 1, 11, 2, 'akosajohnson ', 'Roletape', 'Social'),
(37, 'Pizza Luncheon With The Ladies', '2019-12-10', 1, 11, 7, 'akosajohnson ', 'Society of Women Engineers ', 'Social'),
(38, 'Cause an Effect ', '2019-12-10', 1, 11, 7, 'akosajohnson ', 'Society of Women Engineers ', 'Community Service'),
(41, 'Professional Dining 101', '2019-12-05', 1, 7, 7, 'chass', 'Society of Women Engineers ', 'Career Opportunity'),
(42, 'Career Fair For Entrepreneurs ', '2019-12-06', 1, 7, 1, 'chass', 'The New Steez', 'Career Opportunity'),
(43, 'Discrete Structures Study Blit', '2019-12-10', 1, 14, 6, 'jesusShuttle', 'Math Department', 'Academic'),
(44, 'Algebra Study Blitz', '2019-12-22', 1, 14, 6, 'jesusShuttle', 'Math Department', 'Academic'),
(45, 'Clothing Drive', '2019-12-10', 1, 16, 1, 'arlowashington', 'The New Steez', 'Community Service'),
(46, 'General Body Meeting', '2019-10-12', 1, 16, 11, 'arlowashington', 'ACM', 'Social'),
(47, 'Cisco Kickback', '2019-12-23', 1, 16, 11, 'arlowashington', 'ACM', 'Social'),
(48, 'Discrete Structures Study Blit', '2019-12-10', 1, 3, 6, 'bria0705', 'Math Department', 'Academic'),
(49, 'Algebra Study Blitz', '2019-12-22', 1, 3, 6, 'bria0705', 'Math Department', 'Academic'),
(50, 'Reading Day Study Carnival ', '2019-12-06', 1, 3, 7, 'bria0705', 'Society of Women Engineers ', 'Academic'),
(51, 'Photography Class', '2019-12-19', 1, 3, 2, 'bria0705', 'Roletape', 'Social'),
(52, 'Senior Picture Photoshoot', '2019-12-23', 1, 3, 2, 'bria0705', 'Roletape', 'Social'),
(53, 'Friends development', '2019-12-17', 1, 1, 1, 'dmglenn', 'The New Steez', 'Academic'),
(57, 'Ready, Set, Excel! ', '2019-10-28', 1, 1, 8, 'dmglenn', 'National Society of Black Engi', 'Academic'),
(58, 'Scholarship Application night', '2019-12-20', 1, 1, 9, 'dmglenn', 'SGA', 'Academic'),
(59, 'Professional Dining 101', '2019-12-05', 1, 3, 7, 'bria0705', 'Society of Women Engineers ', 'Career Opportunity'),
(60, 'Study Buddies', '2019-12-27', 1, 1, 10, 'dmglenn', 'RHA', 'Academic'),
(61, 'Photography Class', '2019-12-19', 1, 1, 2, 'dmglenn', 'Roletape', 'Social'),
(62, 'Senior Picture Photoshoot', '2019-12-23', 1, 1, 2, 'dmglenn', 'Roletape', 'Social'),
(63, 'Discrete Structures Study Blit', '2019-12-10', 1, 1, 6, 'dmglenn', 'Math Department', 'Academic'),
(64, 'Cause an Effect ', '2019-12-10', 1, 1, 7, 'dmglenn', 'Society of Women Engineers ', 'Community Service'),
(65, 'General Body Meeting', '2019-10-12', 1, 1, 11, 'dmglenn', 'ACM', 'Social'),
(66, 'Movie Night ', '2019-08-22', 1, 2, 10, 'Rahiem97', 'RHA', 'Social'),
(67, 'General Body Meeting', '2019-10-12', 1, 3, 11, 'bria0705', 'ACM', 'Social'),
(68, 'Eggnog & Hot Chocolate Social', '2019-12-09', 1, 19, 13, 'adcoop', 'Biomedical Engineering Society', 'Social'),
(69, 'Zero Prostate Cancer Walk/Run', '2019-12-10', 1, 19, 13, 'adcoop', 'Biomedical Engineering Society', 'Community Service');

-- --------------------------------------------------------

--
-- Table structure for table `checkbox`
--

CREATE TABLE `checkbox` (
  `Id` int(3) NOT NULL,
  `user_interest` varchar(100) NOT NULL,
  `Event_ID` int(11) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checkbox`
--

INSERT INTO `checkbox` (`Id`, `user_interest`, `Event_ID`, `userid`) VALUES
(2, 'Sports', 1, 3),
(4, 'Exercise', 2, 3),
(5, 'Traveling', 4, 3),
(6, 'Video Games', 5, 3),
(7, 'Sports', 1, 6),
(8, 'Exercise', 2, 6),
(9, 'Traveling', 4, 6),
(10, 'Painting', 7, 6),
(11, 'Cooking', 9, 6),
(12, 'Reading', 10, 6),
(13, 'Science and Technology', 12, 6),
(47, 'Exercise', 2, 1),
(48, 'Dance', 3, 1),
(49, 'Traveling', 4, 1),
(50, 'Sports', 1, 7),
(51, 'Traveling', 4, 7),
(52, 'Cooking', 9, 7),
(53, 'Reading', 10, 7),
(54, 'Traveling', 4, 10),
(55, 'Volunteering', 6, 10),
(56, 'Painting', 7, 10),
(57, 'Photography', 8, 10),
(58, 'Science and Technology', 12, 10),
(59, 'Exercise', 2, 11),
(60, 'Traveling', 4, 11),
(61, 'Volunteering', 6, 11),
(62, 'Painting', 7, 11),
(63, 'Photography', 8, 11),
(64, 'Science and Technology', 12, 11),
(65, 'Sports', 1, 14),
(66, 'Exercise', 2, 14),
(67, 'Photography', 8, 14),
(68, 'Exercise', 2, 15),
(69, 'Volunteering', 6, 15),
(70, 'Photography', 8, 15),
(71, 'Dance', 3, 2),
(72, 'Painting', 7, 2),
(73, 'Photography', 8, 2),
(74, 'Sports', 1, 16),
(75, 'Traveling', 4, 16),
(76, 'Video Games', 5, 16),
(77, 'Painting', 7, 17),
(78, 'Photography', 8, 17),
(79, 'Cooking', 9, 17),
(80, 'Creative Writing', 11, 17),
(93, 'Sports', 1, 18),
(94, 'Cooking', 9, 18),
(95, 'Creative Writing', 11, 18),
(96, 'Reading', 10, 18),
(110, 'skating', 14, 18),
(117, 'Sports', 1, 1),
(118, 'Traveling', 4, 19),
(119, 'Volunteering', 6, 19),
(120, 'Painting', 7, 19),
(121, 'Science and Technology', 12, 19),
(122, 'Sports', 1, 20),
(123, 'Exercise', 2, 20),
(124, 'Agriculture', 13, 20);

-- --------------------------------------------------------

--
-- Table structure for table `event_type`
--

CREATE TABLE `event_type` (
  `ID` int(11) NOT NULL,
  `Event` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_type`
--

INSERT INTO `event_type` (`ID`, `Event`) VALUES
(1, 'Sports'),
(2, 'Exercise'),
(3, 'Dance'),
(4, 'Traveling'),
(5, 'Video Games'),
(6, 'Volunteering'),
(7, 'Painting'),
(8, 'Photography'),
(9, 'Cooking'),
(10, 'Reading'),
(11, 'Creative Writin'),
(12, 'Science_Tech'),
(13, 'Agriculture');

-- --------------------------------------------------------

--
-- Table structure for table `orgevents`
--

CREATE TABLE `orgevents` (
  `ID` int(11) NOT NULL,
  `OrgID` int(11) NOT NULL,
  `org_name` varchar(250) NOT NULL,
  `Event` varchar(30) NOT NULL,
  `Type` varchar(30) NOT NULL,
  `Date` date NOT NULL,
  `Location` varchar(300) NOT NULL,
  `Time` time(6) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orgevents`
--

INSERT INTO `orgevents` (`ID`, `OrgID`, `org_name`, `Event`, `Type`, `Date`, `Location`, `Time`, `status`) VALUES
(1, 6, 'Math Department', 'Discrete Structures Study Blit', 'Academic', '2019-12-10', 'Marteena Hall room 114', '13:00:00.000000', 1),
(2, 6, 'Math Department', 'Algebra Study Blitz', 'Academic', '2019-12-22', 'Marteena Hall room 116', '15:25:00.000000', 1),
(3, 2, 'Roletape', 'Photography Class', 'Social', '2019-12-19', 'Academic Classroom Building ', '19:00:00.000000', 1),
(4, 2, 'Roletape', 'Senior Picture Photoshoot', 'Social', '2019-12-23', 'In Front Of Williams Dining Hall', '15:45:00.000000', 1),
(10, 7, 'Society of Women Engineers ', 'Reading Day Study Carnival ', 'Academic', '2019-12-06', 'Cherry 107', '03:00:00.000000', 1),
(11, 7, 'Society of Women Engineers ', 'Cause an Effect ', 'Community Service', '2019-12-10', '435 S Tate Street ', '05:00:00.000000', 1),
(12, 7, 'Society of Women Engineers ', 'Professional Dining 101', 'Career Opportunities', '2019-12-05', 'Graham 210 ', '07:30:00.000000', 1),
(13, 7, 'Society of Women Engineers ', 'Pizza Luncheon With The Ladies', 'Social', '2019-12-10', 'McNair Hall', '05:45:00.000000', 1),
(14, 8, 'National Society of Black Engineers ', 'Keys to Optimize your Internsh', 'Career Opportunities', '2019-11-13', 'McNair Auditorium ', '00:00:00.000000', 1),
(15, 8, 'National Society of Black Engineers ', 'Feed the Homeless ', 'Community Service', '2019-11-23', 'Cherry 126', '00:00:00.000000', 1),
(16, 8, 'National Society of Black Engineers ', 'Ready, Set, Excel! ', 'Academic', '2019-10-28', 'Graham 208', '00:00:00.000000', 1),
(17, 8, 'National Society of Black Engineers ', 'Town Hall Meeting ', 'Social', '2019-10-30', 'McNair Auditorium ', '00:00:00.000000', 1),
(21, 1, 'The New Steez', 'Friendsgiving', 'Social', '2019-12-25', 'Harrison', '14:00:00.000000', 1),
(23, 1, 'The New Steez', 'Friends development', 'Academic', '2019-12-17', 'Social Status', '16:03:00.000000', 1),
(24, 9, 'SGA', 'Crowning', 'Social', '2019-10-26', 'Corbett sports center', '14:00:00.000000', 1),
(25, 1, 'The New Steez', 'Clothing Drive', 'Community Service', '2019-12-10', 'Social Status', '14:00:00.000000', 1),
(26, 1, 'The New Steez', 'Career Fair For Entrepreneurs ', 'Career Opportunities', '2019-12-06', 'Corbett Sports Center', '13:00:00.000000', 1),
(27, 9, 'SGA', 'Climate Awareness', 'Community Service', '2019-12-10', 'Campus wide', '12:00:00.000000', 1),
(28, 3, 'Association of Computing Machinery  ', 'Discrete Structures Review Ses', 'Academic', '2019-12-10', 'McNair Hall', '17:00:00.000000', 1),
(29, 3, 'Association of Computing Machinery  ', 'Fellowship Dinner', 'Social', '2019-12-19', 'McNair Hall Room 213', '17:00:00.000000', 1),
(30, 9, 'SGA', 'Scholarship Application night', 'Academic', '2019-12-20', 'Student Center Rm 301', '18:00:00.000000', 1),
(31, 3, 'Association of Computing Machinery  ', 'Feed The Homeless', 'Community Service', '2019-12-21', 'House Of Prayer Church', '15:30:00.000000', 1),
(32, 3, 'Association of Computing Machinery  ', 'LinkedIn Information Session', 'Career Opportunities', '2019-12-23', 'McNair Hall Room 210', '16:00:00.000000', 1),
(33, 10, 'RHA', 'Movie Night ', 'Social', '2019-08-22', 'Holland Bowl', '18:00:00.000000', 1),
(34, 10, 'RHA', 'Kings Cafe Clean up', 'Community Service', '2019-12-10', 'Williams Dining Hall', '13:00:00.000000', 1),
(35, 10, 'RHA', 'Study Buddies', 'Academic', '2019-12-27', 'Student Center Rm 301', '19:00:00.000000', 1),
(36, 11, 'ACM', 'General Body Meeting', 'Social', '2019-10-12', 'McNair Hall Room 200', '18:00:00.000000', 1),
(37, 11, 'ACM', 'IBM Hackathon', 'Career Opportunities', '2019-12-22', 'IBM', '07:00:00.000000', 1),
(38, 11, 'ACM', 'Cisco Kickback', 'Social', '2019-12-23', 'Cherry Hall 106', '10:00:00.000000', 1),
(39, 13, 'Biomedical Engineering Society ', 'Zero Prostate Cancer Walk/Run', 'Community Service', '2019-12-10', '509 N. Elam Ave', '08:00:00.000000', 1),
(40, 13, 'Biomedical Engineering Society ', 'Eggnog & Hot Chocolate Social', 'Social', '2019-12-09', 'Barnes Auditorium ', '19:30:00.000000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `org_account`
--

CREATE TABLE `org_account` (
  `org_id` int(11) NOT NULL,
  `org_name` varchar(400) NOT NULL,
  `email` varchar(30) NOT NULL,
  `Password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `org_account`
--

INSERT INTO `org_account` (`org_id`, `org_name`, `email`, `Password`) VALUES
(1, 'The New Steez', 'thenewsteez704@gmail.com', 'd8287696'),
(2, 'Roletape', 'roletapellc@gmail.com', 'Roletape'),
(3, 'Association of Computing Machinery  ', 'acm@aggies.ncat.edu', 'd8287696'),
(4, 'CJS Beauty Boutique', 'cjs@gmail.com', 'd8287696'),
(5, 'Student Body Government', 'sbg@gmail.com', 'd8287696'),
(6, 'Math Department', 'math@gmail.com', 'd8287696'),
(7, 'Society of Women Engineers ', 'ncatswe@aggies.ncat.edu', 'ncattswe'),
(8, 'National Society of Black Engineers ', '1213_nsbe@ncat.edu', '1213nsbe'),
(9, 'SGA', 'ncatsga@ncat.edu', 'SGA'),
(10, 'RHA', 'ncatrha@ncat.edu', 'RHA'),
(11, 'ACM', 'ACM@ncat.edu', 'ACM'),
(12, 'Medical Association Pre Medical Students', 'ncatmaps@ncat.edu', 'massey'),
(13, 'Biomedical Engineering Society ', 'bmes@aggies.ncat.edu', 'massey');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `ID` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Bio` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`ID`, `user_id`, `Bio`) VALUES
(1, 3, ''),
(2, 3, ''),
(3, 3, ''),
(4, 3, ''),
(5, 3, ''),
(6, 3, 'dfa'),
(7, 3, ''),
(8, 3, ''),
(9, 3, ''),
(10, 3, ''),
(11, 3, ''),
(12, 3, ''),
(13, 1, ''),
(14, 1, ''),
(15, 1, ''),
(16, 1, ''),
(17, 1, ''),
(18, 1, ''),
(19, 1, ''),
(20, 3, ''),
(21, 3, ''),
(22, 3, ''),
(23, 3, ''),
(24, 1, ''),
(25, 2, ''),
(26, 2, ''),
(27, 2, ''),
(28, 2, ''),
(29, 2, ''),
(30, 2, ''),
(31, 2, ''),
(32, 2, ''),
(33, 2, ''),
(34, 2, ''),
(35, 2, ''),
(36, 2, ''),
(37, 2, ''),
(38, 2, ''),
(39, 2, ''),
(40, 2, ''),
(41, 2, ''),
(42, 2, ''),
(43, 1, ''),
(44, 1, ''),
(45, 3, ''),
(46, 3, ''),
(47, 3, ''),
(48, 1, ''),
(49, 3, ''),
(50, 3, ''),
(51, 3, ''),
(52, 1, ''),
(53, 1, ''),
(54, 1, ''),
(55, 2, ''),
(56, 3, ''),
(57, 2, ''),
(58, 3, ''),
(59, 3, ''),
(60, 3, ''),
(61, 1, ''),
(62, 1, ''),
(63, 1, ''),
(64, 1, ''),
(65, 1, ''),
(66, 1, ''),
(67, 3, ''),
(68, 3, ''),
(69, 3, ''),
(70, 3, ''),
(71, 3, ''),
(72, 3, ''),
(73, 3, ''),
(74, 3, ''),
(75, 4, ''),
(76, 4, ''),
(77, 4, ''),
(78, 4, ''),
(79, 4, ''),
(80, 4, ''),
(81, 5, ''),
(82, 5, ''),
(83, 5, ''),
(84, 5, 'Born in Fayetteville, NC'),
(85, 3, ''),
(86, 3, ''),
(87, 5, ''),
(88, 0, ''),
(89, 3, ''),
(90, 3, ''),
(91, 1, ''),
(92, 3, ''),
(93, 3, ''),
(94, 1, ''),
(95, 1, ''),
(96, 1, ''),
(97, 1, ''),
(98, 1, ''),
(99, 1, ''),
(100, 1, ''),
(101, 1, ''),
(102, 1, ''),
(103, 1, ''),
(104, 1, ''),
(105, 1, ''),
(106, 1, ''),
(107, 1, ''),
(108, 1, ''),
(109, 1, ''),
(110, 1, ''),
(111, 1, ''),
(112, 1, ''),
(113, 1, ''),
(114, 1, ''),
(115, 1, ''),
(116, 1, ''),
(117, 1, ''),
(118, 1, ''),
(119, 1, ''),
(120, 1, ''),
(121, 1, ''),
(122, 1, ''),
(123, 1, ''),
(124, 1, ''),
(125, 1, ''),
(126, 1, ''),
(127, 1, ''),
(128, 1, ''),
(129, 1, ''),
(130, 1, ''),
(131, 1, ''),
(132, 6, ''),
(133, 6, ''),
(134, 6, ''),
(135, 6, ''),
(136, 3, ''),
(137, 1, ''),
(138, 1, ''),
(139, 1, ''),
(140, 1, ''),
(141, 1, ''),
(142, 1, ''),
(143, 1, ''),
(144, 1, ''),
(145, 1, ''),
(146, 1, ''),
(147, 1, ''),
(148, 1, ''),
(149, 1, ''),
(150, 1, ''),
(151, 1, ''),
(152, 1, ''),
(153, 1, ''),
(154, 1, ''),
(155, 1, ''),
(156, 1, ''),
(157, 1, ''),
(158, 1, ''),
(159, 1, ''),
(160, 1, ''),
(161, 1, ''),
(162, 1, ''),
(163, 1, ''),
(164, 1, ''),
(165, 1, ''),
(166, 1, ''),
(167, 1, ''),
(168, 1, ''),
(169, 1, ''),
(170, 1, ''),
(171, 1, ''),
(172, 1, ''),
(173, 1, ''),
(174, 1, ''),
(175, 1, ''),
(176, 1, ''),
(177, 1, ''),
(178, 1, ''),
(179, 1, ''),
(180, 1, ''),
(181, 1, ''),
(182, 1, ''),
(183, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `rate_events`
--

CREATE TABLE `rate_events` (
  `id` int(30) NOT NULL,
  `Event` varchar(30) NOT NULL,
  `Rate` varchar(30) NOT NULL,
  `userid` int(250) NOT NULL,
  `org_name` varchar(250) NOT NULL,
  `Type` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rate_events`
--

INSERT INTO `rate_events` (`id`, `Event`, `Rate`, `userid`, `org_name`, `Type`) VALUES
(2, 'Ready, Set, Excel! ', 'Dissapointed', 1, 'National Society of Black Engi', 'Academic'),
(3, 'General Body Meeting', 'Satisfied', 3, 'ACM', 'Social'),
(4, 'Eggnog & Hot Chocolate Social', 'Excellent', 19, 'Biomedical Engineering Society', 'Social');

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE `user_account` (
  `First_Name` varchar(35) NOT NULL,
  `Last_Name` varchar(35) NOT NULL,
  `Username` varchar(35) NOT NULL,
  `Phone_Number` text NOT NULL,
  `Email` text NOT NULL,
  `Password` varchar(15) NOT NULL,
  `ID` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`First_Name`, `Last_Name`, `Username`, `Phone_Number`, `Email`, `Password`, `ID`) VALUES
('Davian', 'Glenn', 'dmglenn', '7046061139', 'dmglenn@aggies.ncat.edu', 'd8287696', 1),
('Rahiem', 'Thompson', 'Rahiem97', '7188103741', 'rlthomps@aggies.ncat.edu', 'rahiem97', 2),
('Bria ', 'Massey', 'bria0705', '9196380824', 'bpmassey@aggies.ncat.edu', 'massey', 3),
('Isaac ', 'Cho', 'icho', '9196787998', 'icho@aggies.ncat.edu', 'massey', 4),
('Kelvin', 'Bryant', 'kb', '', 'ksbryant@ncat.edu', 'bryant2019', 5),
('Taylor', 'Martin', 'tsmarti1', '3364102007', 'tsmarti1@aggies.ncat.edu', 'ginger4', 6),
('Chassey ', 'Mckinley', 'chass', '7042312258', 'cmckin@aggies.ncat.edu', 'd8287696', 7),
('Erica ', 'Robinson ', 'erob', '919-777-9311', 'enrobins@aggies.ncat.edu', 'massey', 10),
('Akosa ', 'Johnson ', 'akosajohnson ', '301-777-9311', 'akjohson@aggies.ncat.edu', 'massey', 11),
('Jesus', 'Shuttle', 'jesusShuttle', '7046061139', 'jesus@aggies.ncat.edu', 'd8287696', 14),
('Hulbert ', 'Glenn', 'hulbert', '7042251147', 'hulbert@aggies.ncat.edu', 'd8287696', 15),
('Arlo', 'Washington', 'arlowashington', '9803073559', 'arlowashington0@gmail.com', '2124Speedwell', 16),
('Colby', 'Sloan', 'Coco', '9802298401', 'colbysloan@gmail.com', 'cjsl1997', 17),
('Jasmine ', 'Cousar ', 'jascou', '9197779311', 'jascous@aggies.ncat.edu', '', 18),
('Alexis', 'Cooper', 'adcoop', '3367779311', 'adcoop@aggies.ncat.edu', 'massey', 19),
('Marcus', 'Bowling Jr', 'marc7765', '6789998212', 'marcbowling@aggies.ncat.edu', 'massey', 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calendarevents`
--
ALTER TABLE `calendarevents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`),
  ADD KEY `title` (`title`);

--
-- Indexes for table `checkbox`
--
ALTER TABLE `checkbox`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `userid` (`userid`) USING BTREE;

--
-- Indexes for table `orgevents`
--
ALTER TABLE `orgevents`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `OrgID` (`OrgID`),
  ADD KEY `Event` (`Event`);

--
-- Indexes for table `org_account`
--
ALTER TABLE `org_account`
  ADD PRIMARY KEY (`org_id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `rate_events`
--
ALTER TABLE `rate_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Username` (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calendarevents`
--
ALTER TABLE `calendarevents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `checkbox`
--
ALTER TABLE `checkbox`
  MODIFY `Id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `orgevents`
--
ALTER TABLE `orgevents`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `org_account`
--
ALTER TABLE `org_account`
  MODIFY `org_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=184;

--
-- AUTO_INCREMENT for table `rate_events`
--
ALTER TABLE `rate_events`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
  MODIFY `ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `calendarevents`
--
ALTER TABLE `calendarevents`
  ADD CONSTRAINT `calendarevents_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user_account` (`ID`);

--
-- Constraints for table `checkbox`
--
ALTER TABLE `checkbox`
  ADD CONSTRAINT `checkbox_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user_account` (`ID`);

--
-- Constraints for table `orgevents`
--
ALTER TABLE `orgevents`
  ADD CONSTRAINT `orgevents_ibfk_1` FOREIGN KEY (`OrgID`) REFERENCES `org_account` (`org_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
