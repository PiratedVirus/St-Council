-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2016 at 09:05 AM
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
  `class` varchar(15) NOT NULL,
  `song` varchar(16) NOT NULL,
  `mobile` int(16) NOT NULL,
  `age` int(2) NOT NULL,
  `urself` varchar(255) NOT NULL,
  `branch` varchar(32) NOT NULL,
  `check1` int(1) NOT NULL DEFAULT '0',
  `check2` varchar(1) NOT NULL DEFAULT '0',
  `check3` varchar(1) NOT NULL DEFAULT '0',
  `check4` varchar(1) NOT NULL DEFAULT '0',
  `academic_year` varchar(16) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `state` text NOT NULL,
  `local_hostel` int(4) NOT NULL,
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

INSERT INTO `users` (`userId`, `userName`, `Gender`, `userEmail`, `userPass`, `Skills`, `class`, `song`, `mobile`, `age`, `urself`, `branch`, `check1`, `check2`, `check3`, `check4`, `academic_year`, `dob`, `state`, `local_hostel`, `web`, `app`, `photoshop`, `animation`, `networking`, `autocad`, `katia`, `robocon`, `other`, `acting`, `dance`, `ankering`, `singing`, `drama`, `writing`, `poetry`, `drawing`, `decoration`, `painting`, `cricket`, `badminton`, `football`, `chess`, `kabbadi`, `vollyball`, `leader`, `member`) VALUES
('1', 'lorem', 'Male', '', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', '', '', '', 0, 0, '', '', 0, '0', '0', '0', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('10000', '', '', '', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', '', '', '', 0, 0, '', '', 0, '0', '0', '0', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('1111', 'chester', '', '', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'chester benginton', '', '', 7878, 0, '', '', 0, '0', '0', '0', '', '20.2.1936', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('1212', 'mike', 'Male', 'm@m.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', '', '', '', 0, 0, '', '', 0, '0', '0', '0', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('1589', 'Andya', 'Male', 'a@mc.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', '', '', '', 0, 0, '', '', 0, '0', '0', '0', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('1998', 'skulkarni', '', 's@s.in', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', '', 'year', 'songs', 0, 0, 'ur', 'clg', 0, '0', '0', '0', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('333', 'threeT', '', 'tt@t.t', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'shyam sundar', 'year', 'songs', 2147483647, 0, 'ur', 'clg', 0, '0', '0', '0', '', '12.8', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('3434', '', '', '', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', '', '', '', 0, 0, '', '', 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('3663', 'olly', '', 'o@o.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', '', 'year', 'songs', 0, 0, 'ur', 'clg', 0, '0', '0', '0', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('4545', 'fourFive', 'Male', 'f@f.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', '', 'year', 'songs', 0, 0, 'ur', 'clg', 0, '0', '0', '0', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('501', 'numb', '', '', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', '', '', '', 0, 0, '', '', 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('5555', 'Linkin Park', '', 'l@l.com', 'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f', '', '', '', 0, 0, '', '', 0, '0', '0', '0', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('7878', 'shut me down', '', 'dg@d.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'dg@d.com', 'SE', '', 0, 0, '', 'cse', 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('8989', 'sudhir', '', 's@s.s', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', '', '', '', 0, 0, '', '', 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('94213008730', 'Sudhir', 'Male', 's@gmaik.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', '', '', '', 0, 0, '', '', 0, '0', '0', '0', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('9999', 'david', '', 'dv@d.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'david gutta', '', '', 123, 0, '', '', 0, '0', '0', '0', '', '12.8', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('BE13F02F063', 'Badave Nikhil Narayan', 'Male', 'bnikhil1995@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', '', '', '', 0, 0, '', '', 0, '0', '0', '0', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('be13f04f000', 'qwerty', 'Male', 'qwe@qw.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'Computer Science And Engineering', 'year', 'song', 123456, 0, '', '', 0, '0', '0', '0', 'First Year', '1 October, 2016', 'Gujarat', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('Be14', 'Mobile', 'female', 'm@m.in', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', '', '', '', 0, 0, '', '', 0, '0', '0', '0', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('be14f05f045', 'surili agrawal', '', 'abcd@gmail.com', 'f9df304d10dbcc23be6a43790c6025f6c10ea2b77c451223b58ea0729b7b79ec', '', '', '', 0, 0, '', '', 0, '0', '0', '0', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('be15', 'qwerty', 'Male', 's@w.x', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'Computer Science And Engineering', 'year', 'song', 123456, 0, '', '', 0, '0', '0', '0', 'First Year', '1 October, 2016', 'Gujarat', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('be15f04f020', 'ssk', 'Male', 'ssk@ssk.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', '', '', '', 0, 0, '', '', 0, '0', '0', '0', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('be15f05f001', 'del', 'Male', 'd@d.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'Computer Science And Engineering', '', '', 0, 0, '', 'Computer Science And Engineering', 0, '0', '0', '0', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('be15f05f002', 'qwerty', 'Male', '', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'Computer Science And Engineering', 'year', 'song', 123456, 0, '', '', 0, '0', '0', '0', 'First Year', '1 October, 2016', 'Gujarat', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('BE15F05F003', 'name', 'Male', '', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'Computer Science And Engineering', '', '', 0, 0, '', '', 0, '0', '0', '0', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('be15f05f004', 'qwerty', 'Male', 'new', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'Computer Science And Engineering', 'year', 'song', 123456, 0, '', '', 0, '0', '0', '0', 'First Year', '1 October, 2016', 'Gujarat', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('be15f05f023', 'Mystry', 'Male', 'my@my.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'Mechanical Engineering', '', '', 2147483647, 0, '', '', 0, '0', '0', '0', 'Second Year', '18 October, 2016', 'Madhya Pradesh', 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 0),
('be15f05f024', 'Mahesh', 'Male', 'mahesh@m.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', '', '', '', 2147483647, 0, '', '', 0, '0', '0', '0', 'Third Year', '28 October, 2016', 'Manipur', 0, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('be15f05f036', 'Aniket', 'Male', 'aniket@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'Computer Science And Engineering', '', '', 8174, 0, '', '', 0, '0', '0', '0', 'Second Year', '10 October, 2001', 'Jammu and Kashmir', 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('BE15F05F037', 'sssss', 'Male', 's@s.k', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', '', '', '', 0, 0, '', '', 0, '0', '0', '0', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('be15f05f054', 'micro', 'Male', 'mc@mf.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'Computer Science And Engineering', '', '', 0, 0, '', '', 0, '0', '0', '0', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('be15f05f089', 'apple', 'Male', 'a@apple.in', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', '', '', '', 789, 0, '', '', 0, '0', '0', '0', 'Second Year', '8 October, 2016', 'Mizoram', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('we12', 'qwerty', 'Male', 'q@q.q', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'Computer Science And Engineering', 'year', 'song', 123456, 0, '', '', 0, '0', '0', '0', 'First Year', '1 October, 2016', 'Gujarat', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('we13', 'qwerty', 'Male', 'w@q.q', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'Computer Science And Engineering', 'year', 'song', 123456, 0, '', '', 0, '0', '0', '0', 'First Year', '1 October, 2016', 'Gujarat', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

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
