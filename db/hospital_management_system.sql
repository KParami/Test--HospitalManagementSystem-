-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 10, 2021 at 05:35 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `AppointmentDate` date NOT NULL,
  `PhoneNo` int(15) NOT NULL,
  `Doctor` varchar(50) NOT NULL,
  `Department` varchar(50) NOT NULL,
  `Reason` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`FirstName`, `LastName`, `Email`, `AppointmentDate`, `PhoneNo`, `Doctor`, `Department`, `Reason`) VALUES
('Test', 'example', 'example@gmail.com', '2021-05-13', 761234567, 'Dr. Fernando', 'PHYSICIAN', 'fhhfj wfnwjw gwui ww'),
('test001', 'test01', 'aaa@gmail.com', '2021-05-22', 712345678, 'Dr.G V Soysa', 'SURGERY', 'ddbd hdi uwi dhiuh'),
('testnew', 'user', 'aaa@gmail.com', '2021-05-28', 712345678, 'Dr.T S Silva', 'NEUROLOGIST', 'hhr y uii5'),
('test123', 'example', 'aaa@gmail.com', '2021-05-26', 721231235, 'Dr.T S Silva', 'NEUROLOGIST', 'blaaksjkhsjhsjkfnsc'),
('online appointment', 'test ', 'appointment@gmail.com', '2021-05-21', 715637892, 'Dr.G V Soysa', 'NEUROLOGIST', 'blah blah blah.....'),
('appointment', 'example', 'qwert@gmail.com', '2021-05-29', 761234567, 'Dr.T S Silva', 'CHILDREN DOCTOR', 'blah blah blah.....dgwggwg'),
('appointment new', 'example', 'qwert@gmail.com', '2021-05-29', 761234567, 'Dr.T S Silva', 'CHILDREN DOCTOR', 'blah blah blah.....dgwggwg');

-- --------------------------------------------------------

--
-- Table structure for table `clinic`
--

CREATE TABLE `clinic` (
  `id` varchar(20) NOT NULL,
  `clinicname` varchar(50) NOT NULL,
  `doctorname` varchar(50) NOT NULL,
  `category` varchar(30) NOT NULL,
  `clinicday` varchar(20) NOT NULL,
  `opentime` time(1) NOT NULL,
  `closetime` time(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clinic`
--

INSERT INTO `clinic` (`id`, `clinicname`, `doctorname`, `category`, `clinicday`, `opentime`, `closetime`) VALUES
('1231', 'Cardiology', 'Mr.I S Samarakoon', 'CARDIOLOGY', 'TUESDAY', '09:00:00.0', '00:00:00.0'),
('1256', 'neurology', 'Mr.I S Samarakoon', 'NEUROLOGIST', 'THURSDAY', '09:00:00.0', '15:00:00.0'),
('7864', 'podiatry', 'Mr. P V Fernando', 'PODIATRIST', 'FRIDAY', '09:00:00.0', '14:00:00.0'),
('D0012', 'text001', 'testuser', 'PSYCHIATRIST', 'FRIDAY', '08:30:00.0', '00:00:00.0'),
('D098', 'test', 'test', 'test', 'monday', '40:03:12.0', '08:03:12.0'),
('D012', 'example', 'testuser', 'SURGERY', 'FRIDAY', '09:20:00.0', '13:20:00.0');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Name` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Comment` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Name`, `Email`, `Comment`) VALUES
('', '', ''),
('', '', ''),
('new user', 'ar@gmail.com', 'sagdbr weury y rrrerg'),
('parami', 'qkeyboard446@gmail.com', 'mggke k3m '),
('example', 'qkeyboard446@gmail.com', 're rg jtytjffd h '),
('test', 'qwert@gmail.com', 'test experiment '),
('new user', 'ar@gmail.com', 'bfhbv rbui fn'),
('new feedback', 'aaa@gmail.com', ' hui hufi huufu ihiow dwdwddd dkkjknc sm sndvwhf');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `Name` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `City` varchar(15) NOT NULL,
  `NIC` int(15) NOT NULL,
  `DOB` varchar(50) NOT NULL,
  `MobileNo` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`Name`, `Address`, `City`, `NIC`, `DOB`, `MobileNo`, `Email`) VALUES
('new user', 'horizon campus', 'Malabe', 12345678, '2021-05-27', 712345678, 'ar@gmail.com'),
('addpatient', 'test example ,new', 'new', 12345678, '2008-07-17', 112666777, 'newuser@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `registerusers`
--

CREATE TABLE `registerusers` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `PhoneNumber` int(15) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `ConfirmPassword` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registerusers`
--

INSERT INTO `registerusers` (`Name`, `Email`, `PhoneNumber`, `Password`, `ConfirmPassword`) VALUES
('test01', 'parami@gmail.com', 712345678, 'test', 'test'),
('test', 'test@gmail.com', 712345678, 'test', 'test'),
('test', 'parami@gmail.com', 761234567, 'test', 'test'),
('new001 admini', 'parami@gmail.com', 721231235, '1234567', '1234567'),
('parami', 'ar@gmail.com', 761234567, '1234567', '1234567'),
('new user', 'example@gmail.com', 761234567, '12345', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `birthdate` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `phoneno` int(11) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `country` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`firstname`, `lastname`, `email`, `birthdate`, `address`, `city`, `phoneno`, `nationality`, `country`, `gender`) VALUES
('test12', 'test2', 'test12@gmail.com', '1998-08-17', 'test example', 'tst', 112666777, 'Srilankan', 'Sri Lanka', 'Female'),
('testuser0001', 'example', 'example@gmail.com', '2013-01-15', 'test example,', 'test example', 715647383, 'Srilankan', 'Sri Lanka', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `viewdoctors`
--

CREATE TABLE `viewdoctors` (
  `id` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `contact` int(11) NOT NULL,
  `consultancyfee` varchar(15) NOT NULL,
  `experience` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `viewdoctors`
--

INSERT INTO `viewdoctors` (`id`, `name`, `qualification`, `email`, `category`, `contact`, `consultancyfee`, `experience`, `password`) VALUES
('D03', 'new user', 'Phd', '', 'PHYSICIAN 15', 761234567, 'Rs.600', '4years', '12345'),
('D01', 'Dr.M M Fernando', 'MBBS', '', 'physician', 712346574, 'Rs.500', '3Years', '1234'),
('D09', 'ashan', 'MBBS', '', 'physician', 712346574, 'Rs.500', '3Years', 'admin'),
('D05', 'Ishan B. Samarakoon', 'MBBS', '', 'neurology', 765436278, 'Rs.600', '4years', '124567'),
('D09', 'Mahela Siriwardhana', 'Phd', '', 'CHILDREN DOCTOR', 756787654, 'Rs.300', '3 Years', '2345'),
('D8', 'Newdoc', 'Phd', '', 'Allergists/Immunologists', 721231235, 'Rs.450', '5years', '12345');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
