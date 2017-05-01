-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2017 at 08:48 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hoc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(10) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `Email`, `Password`) VALUES
(1, 'admin@gmail.com', '123456Be');

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

CREATE TABLE `certificates` (
  `id` int(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Certificates` varchar(100) NOT NULL,
  `Certificate_Caption` varchar(150) NOT NULL,
  `Course_Certificates` varchar(100) NOT NULL,
  `Course_Caption` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `certificates`
--

INSERT INTO `certificates` (`id`, `Email`, `Certificates`, `Certificate_Caption`, `Course_Certificates`, `Course_Caption`) VALUES
(4, 'siddheshkadam136@gmail.com', 'Certificates/cert-1014-516024.jpg', 'Certi 1', 'Course_Certificates/cert-1068-516024.jpg', 'Certi 2'),
(5, 'siddheshkadam136@gmail.com', 'Certificates/Declaration_Form_Siddhesh.jpg', 'Certi 3', '', ''),
(6, 'bill@gmail.com', 'Certificates/cert-1014-516024 (1).jpg', 'certi1', 'Course_Certificates/', ''),
(7, 'vishal@gmail.com', 'Certificates/Hydrangeas.jpg', 'It\'s about Course Era Certificate ', '', ''),
(8, 'raj@gmail.com', '', '', '', ''),
(9, 'anmol@gmail.com', 'Certificates/', '', 'Course_Certificates/', ''),
(10, 'shashank@gmail.com', 'Certificates/', '', 'Course_Certificates/', ''),
(11, 'mj@gmail.com', 'Certificates/', '', 'Course_Certificates/', ''),
(12, '013mb@gmail.com', 'Certificates/Hydrangeas.jpg', 'It\'s Oracle Certification', 'Course_Certificates/', ''),
(14, 'sanjay@gmail.com', 'Certificates/Lighthouse.jpg', '', '', ''),
(15, 'sanjay@gmail.com', 'Certificates/Penguins.jpg', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(50) NOT NULL,
  `Event_Name` varchar(100) NOT NULL,
  `Date_From` varchar(100) NOT NULL,
  `Date_To` varchar(100) NOT NULL,
  `Time_From` varchar(100) NOT NULL,
  `Time_To` varchar(100) NOT NULL,
  `Event_Fees` varchar(200) NOT NULL,
  `Lecturer_Name` varchar(100) NOT NULL,
  `Venue` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `Event_Name`, `Date_From`, `Date_To`, `Time_From`, `Time_To`, `Event_Fees`, `Lecturer_Name`, `Venue`) VALUES
(1, 'Workshop on Python Basics', '7 February, 2017', '9 February, 2017', '10:00 am', '4:00 pm', '2000', 'Rahul Kanojiya', 'Lab 209'),
(2, 'Ruby on Rails', '11 February, 2017', '18 February, 2017', '9:00 am', '5:00 pm', '2400', 'Rahul Kanojia', 'Lab 206');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(10) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Surname` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Mobile` varchar(50) DEFAULT NULL,
  `Pincode` varchar(50) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `Year` varchar(50) DEFAULT NULL,
  `Course` varchar(50) DEFAULT NULL,
  `Division` varchar(50) DEFAULT NULL,
  `Roll_No` int(100) NOT NULL,
  `Profile` varchar(255) NOT NULL,
  `yoa` varchar(100) NOT NULL,
  `yoc` varchar(50) NOT NULL,
  `Pointers` double NOT NULL,
  `future_option` varchar(50) NOT NULL,
  `Higher_Studies_option` varchar(50) NOT NULL,
  `GRE` varchar(20) NOT NULL,
  `TOEFL` varchar(20) NOT NULL,
  `IELTS` varchar(20) NOT NULL,
  `CAT` varchar(20) NOT NULL,
  `GATE` varchar(20) NOT NULL,
  `Certifications` varchar(20) NOT NULL,
  `Courses` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `Name`, `Surname`, `Email`, `Mobile`, `Pincode`, `Password`, `Year`, `Course`, `Division`, `Roll_No`, `Profile`, `yoa`, `yoc`, `Pointers`, `future_option`, `Higher_Studies_option`, `GRE`, `TOEFL`, `IELTS`, `CAT`, `GATE`, `Certifications`, `Courses`) VALUES
(65, 'Siddhesh', 'Kadam', 'siddheshkadam136@gmail.com', '08655494371', '401104', '123456Be', 'Fourth Year', 'Information Technology', 'B', 75, 'profile_pic/img090.jpg', '2014', '2017', 9, 'Higher_Studies', 'MS', '300', '0', '0', '0', '0', 'Yes', 'Yes'),
(66, 'Bill', 'Gates', 'bill@gmail.com', '08655498570', '401105', '123456Ty', 'Fourth Year', 'Information Technology', 'B', 73, 'profile_pic/7.PNG', '2014', '2017', 7, 'Placements', '', '0', '0', '0', '0', '0', 'Yes', 'No'),
(67, 'Vishal', 'Tiwari', 'vishal@gmail.com', '9878675678', '401103', '123456Be', 'Third Year', 'Computer Engineering', 'B', 45, 'profile_pic/Koala.jpg', '2015', '2019', 8, 'Higher_Studies', 'ME', '0', '0', '0', '0', '250', 'Yes', 'No'),
(68, 'Raj', 'Surve', 'raj@gmail.com', '9809889765', '401108', '123456Be', 'Fourth Year', 'Information Technology', 'B', 75, 'profile_pic/Lighthouse.jpg', '2014', '2017', 9, 'Entrepreneurship', '', '0', '0', '0', '0', '0', 'No', 'No'),
(69, 'Anmol', 'Vyas', 'anmol@gmail.com', '8767895645', '401103', '123456Be', 'Third Year', 'Computer Engineering', 'A', 34, 'profile_pic/Chrysanthemum.jpg', '2015', '2019', 9.3, 'Higher_Studies', 'MBA', '0', '0', '0', '290', '0', 'No', 'No'),
(70, 'Shashank', 'Mishra', 'shashank@gmail.com', '9878345261', '401102', '123456Be', 'Third Year', 'Civil Engineering', 'B', 67, 'profile_pic/Jellyfish.jpg', '2016', '2020', 7.9, 'Placements', '', '0', '0', '0', '0', '0', 'No', 'No'),
(71, 'Mukesh', 'Joshi', 'mj@gmail.com', '9089765645', '401105', '123456Be', 'First Year', 'EXTC', 'A', 23, 'profile_pic/Tulips.jpg', '2016', '2020', 7.9, 'Higher_Studies', 'MS', '220', '240', '280', '0', '0', 'No', 'No'),
(72, 'Mihir', 'Mehta', '013mb@gmail.com', '9089878675', '401109', '123456Be', 'Fourth Year', 'Computer Engineering', 'A', 56, 'profile_pic/Lighthouse.jpg', '2013', '2020', 6.9, 'Placements', '', '0', '0', '0', '0', '0', 'Yes', 'No'),
(73, 'Sanjay', 'Yadav', 'sanjay@gmail.com', '9089786756', '401109', '123456Be', 'Fourth Year', 'Information Technology', 'B', 56, 'profile_pic/Desert.jpg', '2013', '2017', 8, 'Placements', '', '0', '0', '0', '0', '0', 'No', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `student_registration`
--

CREATE TABLE `student_registration` (
  `id` int(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Surname` varchar(50) NOT NULL,
  `Event_Name` varchar(50) NOT NULL,
  `Payment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_registration`
--

INSERT INTO `student_registration` (`id`, `Email`, `Name`, `Surname`, `Event_Name`, `Payment`) VALUES
(3, 'siddheshkadam136@gmail.com', 'Siddhesh', 'Kadam', 'Workshop on Python Basics', 'Yes'),
(5, 'bill@gmail.com', 'Bill', 'Gates', 'Ruby on Rails', 'No'),
(7, 'siddheshkadam136@gmail.com', 'Siddhesh', 'Kadam', 'Ruby on Rails', 'No'),
(8, 'admin@gmail.com', 'Sanjay', 'Yadav', 'Workshop on Python Basics', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Surname` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Mobile` varchar(50) NOT NULL,
  `Pincode` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Profile` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `Name`, `Surname`, `Email`, `Mobile`, `Pincode`, `Password`, `Profile`) VALUES
(1, 'siddhesh', 'kadam', 'siddheshkadam136@gmail.com', '08655498570', '401105', '9224040545Tr', 'images/7.PNG'),
(2, 'siddhesh', 'kadam', 'siddheshkadam136@gmail.com', '08655498570', '401105', '9224040545Tr', 'images/7.PNG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certificates`
--
ALTER TABLE `certificates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_registration`
--
ALTER TABLE `student_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `certificates`
--
ALTER TABLE `certificates`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
--
-- AUTO_INCREMENT for table `student_registration`
--
ALTER TABLE `student_registration`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
