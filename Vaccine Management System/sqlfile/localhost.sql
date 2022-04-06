-- phpMyAdmin SQL Dump
-- version 2.9.2
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Mar 23, 2022 at 07:38 PM
-- Server version: 5.0.27
-- PHP Version: 5.2.1
-- 
-- Database: `covidwebsite`
-- 
CREATE DATABASE `covidwebsite` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `covidwebsite`;

-- --------------------------------------------------------

-- 
-- Table structure for table `admin`
-- 

CREATE TABLE `admin` (
  `full name` varchar(50) NOT NULL,
  `Smartcard/employee id` varchar(20) NOT NULL,
  `email address` varchar(50) NOT NULL,
  `password` varchar(8) NOT NULL,
  `Phone number` varchar(10) NOT NULL,
  PRIMARY KEY  (`Smartcard/employee id`,`password`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `admin`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `case entry`
-- 

CREATE TABLE `case entry` (
  `Warden/Admin employeeid` varchar(20) NOT NULL,
  `ID` varchar(15) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `Residence/Hostel` varchar(50) NOT NULL,
  `Occupation` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `case entry`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `entry-exit`
-- 

CREATE TABLE `entry-exit` (
  `EmployeeID Guard` varchar(15) NOT NULL,
  `VehicleNo` varchar(15) NOT NULL,
  `Exit time` datetime NOT NULL,
  `Entry time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `entry-exit`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `family details`
-- 

CREATE TABLE `family details` (
  `TeacherID` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `ContactNo` varchar(10) NOT NULL,
  `Address` varchar(150) NOT NULL,
  `Fully Vaccinated` tinyint(1) NOT NULL,
  PRIMARY KEY  (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `family details`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `guardian details`
-- 

CREATE TABLE `guardian details` (
  `StudentID` varchar(20) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Contact no.` varchar(10) NOT NULL,
  `Address` varchar(150) NOT NULL,
  `Fully Vaccinated` tinyint(1) NOT NULL,
  PRIMARY KEY  (`Name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `guardian details`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `student`
-- 

CREATE TABLE `student` (
  `StudentID` varchar(15) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Hostel` varchar(15) NOT NULL,
  `Course` varchar(20) NOT NULL,
  `Year of Graduation` date NOT NULL,
  `MobileNo` varchar(10) NOT NULL,
  `Guardians contactno` varchar(10) NOT NULL,
  `Dose 1` tinyint(1) NOT NULL,
  `Dose 2` tinyint(1) NOT NULL,
  PRIMARY KEY  (`StudentID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `student`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `teacher`
-- 

CREATE TABLE `teacher` (
  `TeacherID` varchar(20) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Residence/Hostel` varchar(100) NOT NULL,
  `MobileNo` varchar(10) NOT NULL,
  `VehicleNo` varchar(20) NOT NULL,
  `Dose 1` tinyint(1) NOT NULL,
  `Dose 2` tinyint(1) NOT NULL,
  `Booster Dose` tinyint(1) NOT NULL,
  PRIMARY KEY  (`TeacherID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `teacher`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `user`
-- 

CREATE TABLE `user` (
  `full name` varchar(50) NOT NULL,
  `Smartcard/Employee Id.` varchar(20) NOT NULL,
  `Email Address` varchar(50) NOT NULL,
  `Password` varchar(8) NOT NULL,
  `Phone number` varchar(10) NOT NULL,
  PRIMARY KEY  (`Smartcard/Employee Id.`,`Password`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `user`
-- 


-- 
-- Constraints for dumped tables
-- 

-- 
-- Constraints for table `student`
-- 
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`StudentID`) REFERENCES `student` (`StudentID`);
