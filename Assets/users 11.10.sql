-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2016 at 08:48 PM
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
  `web` int(11) DEFAULT NULL,
  `app` int(11) DEFAULT NULL,
  `photoshop` int(11) DEFAULT NULL,
  `animation` int(11) DEFAULT NULL,
  `networking` int(11) DEFAULT NULL,
  `autocad` int(11) DEFAULT NULL,
  `katia` int(11) DEFAULT NULL,
  `robocon` int(11) DEFAULT NULL,
  `other` int(11) DEFAULT NULL,
  `acting` int(11) DEFAULT NULL,
  `dance` int(11) DEFAULT NULL,
  `ankering` int(11) DEFAULT NULL,
  `singing` int(11) DEFAULT NULL,
  `drama` int(11) DEFAULT NULL,
  `writing` int(11) DEFAULT NULL,
  `poetry` int(11) DEFAULT NULL,
  `drawing` int(11) DEFAULT NULL,
  `decoration` int(11) DEFAULT NULL,
  `painting` int(11) DEFAULT NULL,
  `cricket` int(11) DEFAULT NULL,
  `badminton` int(11) DEFAULT NULL,
  `football` int(11) DEFAULT NULL,
  `chess` int(11) DEFAULT NULL,
  `kabbadi` int(11) DEFAULT NULL,
  `vollyball` int(11) DEFAULT NULL,
  `leader` int(11) DEFAULT NULL,
  `member` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userName`, `Gender`, `userEmail`, `userPass`, `Skills`, `mobile`, `academic_year`, `dob`, `state`, `local_hostel`, `web`, `app`, `photoshop`, `animation`, `networking`, `autocad`, `katia`, `robocon`, `other`, `acting`, `dance`, `ankering`, `singing`, `drama`, `writing`, `poetry`, `drawing`, `decoration`, `painting`, `cricket`, `badminton`, `football`, `chess`, `kabbadi`, `vollyball`, `leader`, `member`) VALUES
('1111', 'chester', 'Female', 'chester@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', '', 123456789, 'Final Year', '10 October, 2016', 'Maharashtra', 'Localite', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('be15f03f001', 'Civil', 'female', 'newcivil@mail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'Civil Engineering', 1234567890, 'Second Year', '23 October, 2016', 'Delhi', 'Localite', 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('be15f05f023', 'Mystry', 'Male', 'my@my.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'Mechanical Engineering', 2147483647, 'Final Year', '', 'Madhya Pradesh', 'Male', 1, 0, 0, 0, 0, 0, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 0),
('be15f05f024', 'Mahesh', 'Male', 'mahesh@m.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'Mechanical Engineering', 2147483647, 'Third Year', '28 October, 2016', 'Manipur', '0', 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('be15f05f036', 'Aniket', 'Male', 'aniket@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'Computer Science And Engineering', 8174007, 'Third Year', '10 October, 2001', 'Punjab', '', 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('be15f05f040', 'forty', 'Female', 'forty@mail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'Elctronics And Telecommunications', 2147483647, 'First Year', '10 October, 2016', 'Maharashtra', 'Localite', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('be15f05f089', 'apple', 'Male', 'a@apple.in', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'Electrical Engineering', 789, 'Second Year', '8 October, 2016', 'Mizoram', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('be15f06f007', 'IT Guy', 'Female', 'it@mail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'Information Technology', 0, '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

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
