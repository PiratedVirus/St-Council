-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2016 at 08:48 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `students`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` varchar(11) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `userEmail` varchar(60) NOT NULL,
  `userPass` varchar(255) NOT NULL,
  `Skills` varchar(255) NOT NULL,
  `mobile` int(16) NOT NULL,
  `academic_year` varchar(16) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `state` text NOT NULL,
  `local_hostel` varchar(16) NOT NULL,
  `web` int(11) NOT NULL DEFAULT '0',
  `app` int(11) NOT NULL DEFAULT '0',
  `photoshop` int(11) NOT NULL DEFAULT '0',
  `animation` int(11) NOT NULL DEFAULT '0',
  `networking` int(11) NOT NULL DEFAULT '0',
  `autocad` int(11) NOT NULL DEFAULT '0',
  `katia` int(11) NOT NULL DEFAULT '0',
  `robocon` int(11) NOT NULL DEFAULT '0',
  `other` int(11) NOT NULL DEFAULT '0',
  `acting` int(11) NOT NULL DEFAULT '0',
  `dance` int(11) DEFAULT '0',
  `ankering` int(11) NOT NULL DEFAULT '0',
  `singing` int(11) NOT NULL DEFAULT '0',
  `drama` int(11) NOT NULL DEFAULT '0',
  `writing` int(11) NOT NULL DEFAULT '0',
  `poetry` int(11) NOT NULL DEFAULT '0',
  `drawing` int(11) NOT NULL DEFAULT '0',
  `decoration` int(11) NOT NULL DEFAULT '0',
  `painting` int(11) NOT NULL DEFAULT '0',
  `cricket` int(11) NOT NULL DEFAULT '0',
  `badminton` int(11) NOT NULL DEFAULT '0',
  `football` int(11) NOT NULL DEFAULT '0',
  `chess` int(11) NOT NULL DEFAULT '0',
  `kabbadi` int(11) NOT NULL DEFAULT '0',
  `vollyball` int(11) NOT NULL DEFAULT '0',
  `leader` int(11) NOT NULL DEFAULT '0',
  `member` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userName`, `Gender`, `userEmail`, `userPass`, `Skills`, `mobile`, `academic_year`, `dob`, `state`, `local_hostel`, `web`, `app`, `photoshop`, `animation`, `networking`, `autocad`, `katia`, `robocon`, `other`, `acting`, `dance`, `ankering`, `singing`, `drama`, `writing`, `poetry`, `drawing`, `decoration`, `painting`, `cricket`, `badminton`, `football`, `chess`, `kabbadi`, `vollyball`, `leader`, `member`) VALUES
('1111', 'chester', 'Female', '', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'Elctronics And Telecommunications', 7878, 'First Year', '20.2.1936', '', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('be15f03f001', 'Civil', 'female', 'newcivil@mail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'Civil Engineering', 1234567890, 'Second Year', '23 October, 2016', 'Delhi', 'Hostelite', 0, 0, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, 0),
('be15f05f023', 'Mystry', 'Male', 'my@my.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'Mechanical Engineering', 2147483647, 'Final Year', '', 'Madhya Pradesh', 'Male', 1, 0, 0, 0, 0, 0, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 0),
('be15f05f024', 'Mahesh', 'Male', 'mahesh@m.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'Mechanical Engineering', 2147483647, 'Third Year', '28 October, 2016', 'Manipur', '0', 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('be15f05f036', 'Aniket', 'Male', 'aniket@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'Computer Science And Engineering', 8174007, 'Third Year', '10 October, 2001', 'Punjab', '', 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('be15f05f089', 'apple', 'Male', 'a@apple.in', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'Electrical Engineering', 789, 'Second Year', '8 October, 2016', 'Mizoram', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
