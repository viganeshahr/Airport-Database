-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2019 at 03:37 PM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `airport`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `calculate` (IN `Quantity` INT, IN `Cst` INT, IN `FL` VARCHAR(10))  NO SQL
BEGIN 
DECLARE ct int(10);
 SET ct = Cst*Quantity;
 
UPDATE fuelconsumption SET Cost=ct WHERE FlightNo=FL;

END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `arrivals`
--

CREATE TABLE `arrivals` (
  `FlightNo` varchar(10) NOT NULL,
  `Source` char(20) NOT NULL,
  `Destination` char(20) NOT NULL,
  `RunwayNo` varchar(5) NOT NULL,
  `GateNo` int(11) NOT NULL,
  `ControllerID` varchar(10) NOT NULL,
  `Status` char(20) NOT NULL,
  `Type` char(20) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `arrivals`
--

INSERT INTO `arrivals` (`FlightNo`, `Source`, `Destination`, `RunwayNo`, `GateNo`, `ControllerID`, `Status`, `Type`, `Date`) VALUES
('NB568', 'Mumbai', 'Bengaluru', '26L', 1, 'AK47', 'On Time', 'Passenger', '2018-09-11'),
('GG393', 'Delhi', 'Dubai', '70L', 4, 'AR898', 'ON TIME', 'passenger', '2018-12-11');

-- --------------------------------------------------------

--
-- Table structure for table `atc`
--

CREATE TABLE `atc` (
  `FlightNo` varchar(10) NOT NULL,
  `ArrDep` char(10) NOT NULL,
  `ControllerID` varchar(10) NOT NULL,
  `CntrollerName` char(20) NOT NULL,
  `RunwayNo` varchar(5) NOT NULL,
  `TimeIn` varchar(15) NOT NULL,
  `TimeOut` varchar(15) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `atc`
--

INSERT INTO `atc` (`FlightNo`, `ArrDep`, `ControllerID`, `CntrollerName`, `RunwayNo`, `TimeIn`, `TimeOut`, `Date`) VALUES
('GG393', 'Arrival', 'AR898', 'Tejaas', '70L', '3:34:47', '4:10:30', '2018-11-20'),
('IG7654', 'Departure', 'AR898 ', 'Gagan Kumar', '90R', '4:45:20am', '5:00:00am', '2018-10-03'),
('KA123', 'Arrival', 'QW123', 'viganesha', '4', '12:09:10', '12:09:15', '2018-11-14'),
('NB568', 'Arrival', 'AK47', 'Sanjana', '26L', '8:26:02am', '8:35:55am', '2018-09-11');

--
-- Triggers `atc`
--
DELIMITER $$
CREATE TRIGGER `history` AFTER DELETE ON `atc` FOR EACH ROW INSERT INTO history(FlightNo,ArrDep) VALUES (old.FlightNo,old.ArrDep)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `cargoflight`
--

CREATE TABLE `cargoflight` (
  `FlightNo` varchar(10) NOT NULL,
  `Source` char(20) NOT NULL,
  `Destination` char(20) NOT NULL,
  `CargoWt` int(11) NOT NULL,
  `Crew` varchar(50) NOT NULL,
  `Airline` char(20) NOT NULL,
  `FuelPumped` int(11) NOT NULL,
  `Carriers` varchar(50) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cargoflight`
--

INSERT INTO `cargoflight` (`FlightNo`, `Source`, `Destination`, `CargoWt`, `Crew`, `Airline`, `FuelPumped`, `Carriers`, `Date`) VALUES
('KA123', 'Mangalore', 'Chennai', 1745, 'VIKAS, SHRIDHAR, VIDYA..', 'Indigo', 5654, 'DHL, FLIPKART, AMAZON.', '2018-07-05'),
('VT007', 'Bengaluru', 'Dubai', 9650, 'SUHAS, DIVYA, SHASHANK.', 'EMIRATES', 8080, 'AMAZON, AMAZON, FEDEX, UPS', '2018-10-10'),
('AD707', 'Bengaluru', 'FrankFurt', 11206, 'ANDY, SHIRLEY, DRAKE, BRIANNA.', 'LUFTHANSA', 25890, 'AMAZON, AMAZON, FEDEX, UPS, LUFTHANSA, CARGOULX.', '2018-11-22');

-- --------------------------------------------------------

--
-- Table structure for table `departures`
--

CREATE TABLE `departures` (
  `FlightNo` varchar(10) NOT NULL,
  `Source` char(20) NOT NULL,
  `Destination` char(20) NOT NULL,
  `RunwayNo` varchar(5) NOT NULL,
  `GateNo` int(11) NOT NULL,
  `ControllerID` varchar(10) NOT NULL,
  `Status` char(20) NOT NULL,
  `Type` char(20) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departures`
--

INSERT INTO `departures` (`FlightNo`, `Source`, `Destination`, `RunwayNo`, `GateNo`, `ControllerID`, `Status`, `Type`, `Date`) VALUES
('IG7654', 'Bengaluru', 'Mumbai', '90R', 4, 'AR898 ', 'Departed', 'Passenger', '2018-10-03');

-- --------------------------------------------------------

--
-- Table structure for table `fuelconsumption`
--

CREATE TABLE `fuelconsumption` (
  `FlightNo` varchar(10) NOT NULL,
  `Airline` char(20) NOT NULL,
  `Type` char(10) NOT NULL,
  `QuantityPumped` int(11) NOT NULL,
  `Cost` int(11) DEFAULT NULL,
  `UniqueID` varchar(10) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fuelconsumption`
--

INSERT INTO `fuelconsumption` (`FlightNo`, `Airline`, `Type`, `QuantityPumped`, `Cost`, `UniqueID`, `Date`) VALUES
('IG7654', 'GoAir', 'Passenger', 7863, 3066570, 'SH565', '2018-10-03'),
('KA123', 'Go air', 'passenger', 12344, 4443840, 'CD123', '2018-11-02');

-- --------------------------------------------------------

--
-- Table structure for table `fuelstorage`
--

CREATE TABLE `fuelstorage` (
  `UniqueID` varchar(10) NOT NULL,
  `CompanyName` char(20) NOT NULL,
  `Cost/Ltr` int(11) NOT NULL,
  `TankNo` int(11) NOT NULL,
  `QuantityPurchased` int(11) NOT NULL,
  `QuantityConsumed` int(11) NOT NULL,
  `QuantityAvailable` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fuelstorage`
--

INSERT INTO `fuelstorage` (`UniqueID`, `CompanyName`, `Cost/Ltr`, `TankNo`, `QuantityPurchased`, `QuantityConsumed`, `QuantityAvailable`) VALUES
('BP135', 'BHARAT PETROLEUM', 357, 9, 101545, 95231, 6817),
('CD123', 'HP', 360, 5, 90876, 80122, 1314),
('SH565', 'SHELL', 390, 3, 110000, 90000, 20000);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `SLNO` int(11) NOT NULL,
  `FlightNo` varchar(20) NOT NULL,
  `ArrDep` varchar(20) NOT NULL,
  `DATETIME` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`SLNO`, `FlightNo`, `ArrDep`, `DATETIME`) VALUES
(1, 'ABC123', 'Arrival', '2018-11-17 20:40:12'),
(2, 'VT007', 'Departue', '2018-11-30 09:52:36'),
(3, 'KA123', 'Arrival', '2018-11-30 13:04:37'),
(4, 'TR123', 'Departure', '2018-12-03 11:00:47');

-- --------------------------------------------------------

--
-- Table structure for table `maintenance`
--

CREATE TABLE `maintenance` (
  `FlightNo` varchar(10) NOT NULL,
  `Airline` char(20) NOT NULL,
  `TypeOfMaintenencae` char(20) NOT NULL,
  `PersonInCharge` char(20) NOT NULL,
  `HangerNo` int(11) NOT NULL,
  `Status` char(20) NOT NULL,
  `DateIn` date NOT NULL,
  `DateOut` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maintenance`
--

INSERT INTO `maintenance` (`FlightNo`, `Airline`, `TypeOfMaintenencae`, `PersonInCharge`, `HangerNo`, `Status`, `DateIn`, `DateOut`) VALUES
('KA123', 'INDIGO', 'REGULAR', 'AKSHITH', 34, 'IN PROGRESS', '2018-12-10', '2018-12-13'),
('GG393', 'EMIRATES', 'APU UPDATE', 'NISHANTH', 34, 'IN PROGRESS', '2018-12-16', '2018-12-31');

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `SLNO` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `LoggedIn` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `LoggedOut` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`SLNO`, `username`, `LoggedIn`, `LoggedOut`) VALUES
(1, 'pixzeal', '2018-11-17 20:22:49', '10:44:20pm'),
(2, 'pixzeal', '2018-11-17 20:42:36', '10:44:20pm'),
(3, 'pixzeal', '2018-11-17 22:06:53', '10:44:20pm'),
(4, 'reecekenny', '2018-11-17 23:36:02', '12:42:36am'),
(5, 'tejaas', '2018-11-19 20:58:58', '11:43:53pm'),
(6, 'tejaas', '2018-11-19 21:04:03', '11:43:53pm'),
(7, 'tejaas', '2018-11-20 08:58:33', '11:43:53pm'),
(8, 'tejaas', '2018-11-20 14:30:46', '11:43:53pm'),
(9, 'tejaas', '2018-11-20 14:46:55', '11:43:53pm'),
(10, 'tejaas', '2018-11-30 09:48:17', '11:43:53pm'),
(11, 'tejaas', '2018-11-30 10:24:53', '11:43:53pm'),
(12, 'tejaas', '2018-11-30 10:48:33', '11:43:53pm'),
(13, 'thanush', '2018-11-30 15:15:53', ''),
(14, 'tejaas', '2018-12-01 22:38:44', '11:43:53pm'),
(15, 'tejaas', '2018-12-01 22:51:08', '11:43:53pm'),
(16, 'tejaas', '2018-12-02 23:39:49', '11:43:53pm'),
(17, 'tejaas', '2018-12-02 23:43:57', ''),
(18, 'tejaas', '2018-12-02 23:46:44', ''),
(19, 'name1', '2018-12-03 07:05:04', '10:28:34am'),
(20, 'name2', '2018-12-03 10:57:21', ''),
(21, 'tejaas', '2019-07-04 17:13:33', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `DateOfBirth` date NOT NULL,
  `Gender` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `Password`, `Name`, `Email`, `Phone`, `DateOfBirth`, `Gender`) VALUES
('reecekenny', 'abcdef', 'Ijsjs', 'Shshs@gmail.com', '8008080', '2018-10-30', 'Male'),
('pixzeal', 'pixzeal', 'Viganesha', 'Viganeshahr@gmail.com', '8660446019', '2018-04-01', 'Male'),
('tanmay', 'tanmay123', 'Tanmay', 'Tanmayparashar039@gmail.com', '9739269859', '1998-09-03', 'Male'),
('tejaas', 'tejaas', 'Tejaas', 'Tejas.mukunda@gmail.com', '79821748', '1998-08-01', 'Male'),
('tejaasm', 'tejaas', 'Tejaasm', 'Tejas1.mukunda@gmail.com', '7982174823', '2018-11-01', 'Male'),
('thanush', 'thanush', 'Thanush', 'Thanush@gmail.com', '79821748', '2018-11-16', 'Male'),
('name1', 'name1', 'Name1', 'Hello@gmail.com', '2132142142', '2018-12-05', 'Male'),
('name2', 'name2', 'Name2', 'Name2@gmail.com', '436758648', '2018-12-06', 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arrivals`
--
ALTER TABLE `arrivals`
  ADD KEY `arrivals_ibfk_1` (`FlightNo`,`ControllerID`);

--
-- Indexes for table `atc`
--
ALTER TABLE `atc`
  ADD PRIMARY KEY (`FlightNo`,`ControllerID`);

--
-- Indexes for table `departures`
--
ALTER TABLE `departures`
  ADD KEY `Flight No` (`FlightNo`,`ControllerID`);

--
-- Indexes for table `fuelconsumption`
--
ALTER TABLE `fuelconsumption`
  ADD KEY `FlightNo` (`FlightNo`);

--
-- Indexes for table `fuelstorage`
--
ALTER TABLE `fuelstorage`
  ADD PRIMARY KEY (`UniqueID`,`TankNo`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`SLNO`);

--
-- Indexes for table `maintenance`
--
ALTER TABLE `maintenance`
  ADD KEY `FlightNo` (`FlightNo`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`SLNO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `SLNO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `SLNO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `arrivals`
--
ALTER TABLE `arrivals`
  ADD CONSTRAINT `arrivals_ibfk_1` FOREIGN KEY (`FlightNo`,`ControllerID`) REFERENCES `atc` (`FlightNo`, `ControllerID`) ON DELETE CASCADE;

--
-- Constraints for table `departures`
--
ALTER TABLE `departures`
  ADD CONSTRAINT `departures_ibfk_1` FOREIGN KEY (`FlightNo`,`ControllerID`) REFERENCES `atc` (`FlightNo`, `ControllerID`) ON DELETE CASCADE;

--
-- Constraints for table `fuelconsumption`
--
ALTER TABLE `fuelconsumption`
  ADD CONSTRAINT `fuelconsumption_ibfk_1` FOREIGN KEY (`FlightNo`) REFERENCES `atc` (`FlightNo`) ON DELETE CASCADE;

--
-- Constraints for table `maintenance`
--
ALTER TABLE `maintenance`
  ADD CONSTRAINT `maintenance_ibfk_1` FOREIGN KEY (`FlightNo`) REFERENCES `atc` (`FlightNo`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
