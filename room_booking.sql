-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2023 at 03:25 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `room_booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `accountID` varchar(255) NOT NULL,
  `typeID` varchar(255) DEFAULT NULL,
  `registerID` int(40) DEFAULT NULL,
  `loginID` varchar(255) DEFAULT NULL,
  `bookingID` char(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`accountID`, `typeID`, `registerID`, `loginID`, `bookingID`) VALUES
('acc1', 'student', 202604, '202604@student.upm.edu.my', '1'),
('acc10', 'staff', 342512, 'salleh@upm.my', '0'),
('acc11', 'admin', 123456, 'ccsebook@upm.my', '0'),
('acc2', 'staff', 345627, 'zamili@upm.my', '2'),
('acc3', 'student', 209488, '209488@student.upm.edu.my', '5'),
('acc4', 'staff', 890367, 'ina@upm.my', '6'),
('acc5', 'staff', 789123, 'maryam@upm.my', '7'),
('acc6', 'student', 202747, '202747@student.upm.edu.my', '8'),
('acc7', 'student', 203732, '203732@student.upm.edu.my', '3'),
('acc8', 'student', 203136, '203136@student.upm.edu.my', '0'),
('acc9', 'staff', 457835, 'zuraidah@upm.my', '0');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `email`, `password`) VALUES
('123456', 'CCSEBook', 'ccsebook@upm.my', '$2y$04$9K/hKhKZhjX4NNYbpNotbeQxVcmTtZGo3dHpjUmvlyGl82BudKXdK');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bookingID` int(10) NOT NULL,
  `registerID` int(40) DEFAULT NULL,
  `fullName` varchar(255) DEFAULT NULL,
  `loginID` varchar(255) DEFAULT NULL,
  `yearStudy` varchar(255) DEFAULT NULL,
  `mobileNumber` char(15) DEFAULT NULL,
  `personIC` varchar(255) DEFAULT NULL,
  `roomType` varchar(255) DEFAULT NULL,
  `roomID` varchar(255) DEFAULT NULL,
  `bookingDate` date DEFAULT NULL,
  `bookingTime` time(6) DEFAULT NULL,
  `roomFacilities` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bookingID`, `registerID`, `fullName`, `loginID`, `yearStudy`, `mobileNumber`, `personIC`, `roomType`, `roomID`, `bookingDate`, `bookingTime`, `roomFacilities`) VALUES
(1, 202604, 'Haifa Julia', '202604@student.upm.edu.my', '4th Year', '018-3883239', 'Dr Ahmad Maslan', 'Lecture Hall', 'DK1', '2023-01-30', '10:00:00.000000', 'Monitor, Sound Sytstem'),
(2, 345627, 'Zamili Ibrahim', 'zamili@upm.my', 'Staff', '012-6748933', 'Dr Ahmad Shukri', 'Audotorium', 'Faculty Audotorium', '2023-01-20', '14:00:00.000000', 'Monitor, Sound Sytstem'),
(3, 203732, 'Aida Akmar', '203732@student.upm.edu.my', '4th Year', '015-6789123', 'Prof Alyani', 'Lecture Room', 'Room1', '2023-01-10', '12:00:00.371000', 'Monitor, Sound Sytstem'),
(4, 789123, 'Siti Maryam', 'maryam@upm.my', 'Staff', '019-6547632', 'Siti Maryam', 'Thinker Space', 'Faculty Thinker Space', '2023-01-21', '10:00:00.000000', 'Monitor, Sound Sytstem'),
(5, 209488, 'Tasnim Mahdiya', '209488@student.upm.edu.my', '4th Year', '011-2435678', 'Prof Yaakob', 'Lecture Room', 'Room3', '2023-01-15', '12:00:00.000000', 'Projector, Sound Sytstem'),
(6, 890367, 'Ina Harun', 'ina@upm.my', 'Staff', '013-8976521', 'Dr Fazirul', 'Lecture Hall', 'DK5', '2023-02-06', '08:00:00.000000', 'Monitor, Sound Sytstem'),
(7, 789123, 'Siti Maryam', 'maryam@upm.my', 'Staff', '012-3456789', 'Dr Ratna', 'Thinker Space', 'Faculty Thinker Space', '2023-01-28', '12:00:00.000000', 'Monitor, Sound Sytstem'),
(8, 202747, 'Ain Syafiqah', '202747@student.upm.edu.my', '4th Year', '014-9267016', 'Dr Barirah', 'Audotorium', 'Faculty Audotorium', '2023-01-12', '10:00:00.000000', 'Monitor, Sound Sytstem'),
(9, 203136, 'AMMAR YUSOFF BIN FAISAL IBRAHIM', '203136@student.upm.edu.my', 'PhD', '017298807', 'mdm faruzan', 'Lecture Hall', 'DK4', '2023-01-15', '14:00:00.000000', 'Soundsystem/Mic'),
(10, 203136, 'AMMAR YUSOFF BIN FAISAL IBRAHIM', '203136@student.upm.edu.my', '2nd Year', '017298807', 'mdm faruzan', 'Lecture Hall', 'DK5', '2023-01-15', '10:00:00.000000', 'Monitor'),
(19, 203136, 'AMMAR YUSOFF BIN FAISAL IBRAHIM', '203136@student.upm.edu.my', '1st Year', '017298807', 'mdm faruzan', 'Lecture Room', 'Room2', '2023-01-15', '10:00:00.000000', 'Tables'),
(20, 203136, 'AMMAR YUSOFF BIN FAISAL IBRAHIM', '203136@student.upm.edu.my', '4th Year', '017298807', 'mdm faruzan', 'Auditorium', 'Faculty_Auditorium', '2023-01-15', '11:00:00.000000', 'Tables'),
(21, 203136, 'AMMAR YUSOFF BIN FAISAL IBRAHIM', '203136@student.upm.edu.my', '4th Year', '017298807', 'mdm faruzan', 'Auditorium', 'Faculty_Auditorium', '2023-01-15', '11:00:00.000000', 'Tables'),
(22, 203136, 'AMMAR YUSOFF BIN FAISAL IBRAHIM', '203136@student.upm.edu.my', '4th Year', '017298807', 'mdm faruzan', 'Auditorium', 'Faculty_Auditorium', '2023-01-15', '11:00:00.000000', 'Tables'),
(23, 203136, 'AMMAR YUSOFF BIN FAISAL IBRAHIM', '203136@student.upm.edu.my', '2nd Year', '017298807', 'mdm faruzan', 'Lecture Room', 'Room2', '2023-01-15', '10:00:00.000000', 'Soundsystem/Mic'),
(24, 203136, 'AMMAR YUSOFF BIN FAISAL IBRAHIM', '203136@student.upm.edu.my', 'PhD', '017298807', 'mdm faruzan', 'Lecture Room', 'Room2', '2023-01-15', '11:00:00.000000', 'Tables'),
(25, 203136, 'AMMAR YUSOFF BIN FAISAL IBRAHIM', '203136@student.upm.edu.my', 'PhD', '017298807', 'mdm faruzan', 'Lecture Room', 'Room2', '2023-01-15', '11:00:00.000000', 'Tables');

-- --------------------------------------------------------

--
-- Table structure for table `bookingdetails`
--

CREATE TABLE `bookingdetails` (
  `bookingID` int(10) NOT NULL,
  `fullName` varchar(255) DEFAULT NULL,
  `yearStudy` varchar(255) DEFAULT NULL,
  `mobileNumber` char(15) DEFAULT NULL,
  `personIC` varchar(255) DEFAULT NULL,
  `loginID` varchar(255) DEFAULT NULL,
  `registerID` int(40) DEFAULT NULL,
  `roomID` varchar(255) DEFAULT NULL,
  `bookingDate` date DEFAULT NULL,
  `bookingTime` time(6) DEFAULT NULL,
  `roomFacilities` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookingdetails`
--

INSERT INTO `bookingdetails` (`bookingID`, `fullName`, `yearStudy`, `mobileNumber`, `personIC`, `loginID`, `registerID`, `roomID`, `bookingDate`, `bookingTime`, `roomFacilities`) VALUES
(1, 'Haifa Julia', '4th Year', '018-3883239', 'Dr Ahmad Maslan', '202604@student.upm.edu.my', 202604, 'Lecture Hall', '2023-01-30', '10:00:00.000000', 'Monitor, Sound Sytstem'),
(2, 'Zamili Ibrahim', 'Staff', '012-6748933', 'Dr Ahmad Shukri', 'zamili@upm.my', 345627, 'Audotorium', '2023-01-20', '14:00:00.000000', 'Monitor, Sound Sytstem'),
(3, 'Aida Akmar', '4th Year', '015-6789123', 'Prof Alyani', '203732@student.upm.edu.my', 203732, 'Lecture Room', '2023-01-10', '12:00:00.371000', 'Monitor, Sound Sytstem'),
(4, 'Siti Maryam', 'Staff', '019-6547632', 'Siti Maryam', 'maryam@upm.my', 789123, 'Thinker Space', '2023-01-21', '10:00:00.000000', 'Monitor, Sound Sytstem'),
(5, 'Tasnim Mahdiya', '4th Year', '011-2435678', 'Prof Yaakob', '209488@student.upm.edu.my', 209488, 'Lecture Room', '2023-01-15', '12:00:00.000000', 'Projector, Sound Sytstem'),
(6, 'Ina Harun', 'Staff', '013-8976521', 'Dr Fazirul', 'ina@upm.my', 890367, 'Lecture Hall', '2023-02-06', '08:00:00.000000', 'Monitor, Sound Sytstem'),
(7, 'Siti Maryam', 'Staff', '012-3456789', 'Dr Ratna', 'maryam@upm.my', 789123, 'Thinker Space', '2023-01-28', '12:00:00.000000', 'Monitor, Sound Sytstem'),
(8, 'Ain Syafiqah', '4th Year', '014-9267016', 'Dr Barirah', '202747@student.upm.edu.my', 202747, 'Audotorium', '2023-01-12', '10:00:00.000000', 'Monitor, Sound Sytstem');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `booking_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `booking_date`) VALUES
(1, '2023-01-30'),
(2, '2023-01-20'),
(3, '2023-01-10'),
(4, '2023-01-21'),
(5, '2023-01-15'),
(6, '2023-02-06'),
(7, '2023-01-28'),
(8, '2023-01-12');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `loginID` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`loginID`, `password`) VALUES
('202604@student.upm.edu.my', 'Haifa123'),
('202747@student.upm.edu.my', 'Ain123'),
('203136@student.upm.edu.my', 'Ammar123'),
('203732@student.upm.edu.my', 'Aida123'),
('209488@student.upm.edu.my', 'Tasnim123'),
('ccsebook@upm.my', 'CCSE1923'),
('ina@upm.my', 'Ina123'),
('maryam@upm.my', 'Maryam123'),
('salleh@upm.my', 'Salleh123'),
('zamili@upm.my', 'Zamili123'),
('zuraidah@upm.my', 'Zuraidah123');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `name`, `email`, `password`) VALUES
('342512', 'Salleh Amin', 'salleh@upm.my', '$2y$04$colmB7hdLupL4abXY6lyR.W9vQN/qCPvtjYV6kz8XwmtaSKHwWyZ.'),
('345627', 'Zamili Ibrahim', 'zamili@upm.my', '$2y$04$AUCudlew0lBe9GV5OFWTyelV2wJXT9gxNH.dzBCqX.3cw4Sdf6wzi'),
('457835', 'Zuraidah Zan', 'zuraidah@upm.my', '$2y$04$ScaWBUxuhIrpF3mx4C7u0.kSTAteF9bEUgO7AhPaKGkVUY8mjm1jq'),
('789123', 'Siti Maryam', 'maryam@upm.my', '$2y$04$2Tc3Hn0Fae1agixk.x2OQeU76pChD6KHBOcK9.SymVB2Pvhua96tq');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `matrix_id` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`matrix_id`, `name`, `email`, `password`) VALUES
('202604', 'Haifa Julia', '202604@student.upm.edu.my', '$2y$04$/jdsmDY.U/HhkpXob08MAuucBQfWN8Y.QrIBhQg9zrj5PWM3aCh7C'),
('202747', 'Ain Syafiqah', '202747@student.upm.edu.my', '$2y$04$hxdSOlw7T8jCU2QF.4EXYemjUrA1NJ/pC5HzxaJjmhoCACqoIW2yG'),
('203136', 'Ammar Yusoff', '203136@student.upm.edu.my', '$2y$04$JCX63xOlNyIOslHKBp/oGeAer8jAsjksqx4Wk6MnCIsblfolRxUF6'),
('203732', 'Aida Akmar', '203732@student.upm.edu.my', '$2y$04$P1Udm7SKyUbXrEG.PUIKHu6RYSgxV1cV.YcMbIad1WuSCG8Wqr4kO'),
('209488', 'Tasnim Mahdiya', '209488@student.upm.edu.my', '$2y$04$2KNtt7l4B4pu7IQC20pXBuXjOn.KePTNWO6lb8wWPIp3g4YvTumRC'),
('213456', 'Luqman', '213456@student.upm.edu.my', '$2y$04$ePgF8.cRFCLI2/mRcVz5re4Hvp5uEOmJCoXC7jc.evMyrYPW5zfhW');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `registerID` int(40) NOT NULL,
  `typeID` varchar(255) NOT NULL,
  `userName` varchar(255) DEFAULT NULL,
  `userPass` varchar(255) DEFAULT NULL,
  `mobileNumber` char(15) DEFAULT NULL,
  `loginID` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`registerID`, `typeID`, `userName`, `userPass`, `mobileNumber`, `loginID`) VALUES
(123456, 'admin', 'CCSEBook', 'CCSE1923', '011-1111111', 'ccsebook@upm.my'),
(202604, 'student', 'Haifa Julia', 'Haifa123', '018-3883239', '202604@student.upm.edu.my'),
(202747, 'student', 'Ain Syafiqah', 'Ain123', '014-9267016', '202747@student.upm.edu.my'),
(203136, 'student', 'Ammar Yusoff', 'Ammar123', '012-3456789', '203136@student.upm.edu.my'),
(203732, 'student', 'Aida Akmar', 'Aida123', '015-6789123', '203732@student.upm.edu.my'),
(209488, 'student', 'Tasnim Mahdiya', 'Tasnim123', '011-2435678', '209488@student.upm.edu.my'),
(342512, 'staff', 'Salleh Amin', 'Salleh123', '011-7342456', 'salleh@upm.my'),
(345627, 'staff', 'Zamili Ibrahim', 'Zamili123', '012-6748933', 'zamili@upm.my'),
(457835, 'staff', 'Zuraidah Zan', 'Zuraidah123', '016-7843210', 'zuraidah@upm.my'),
(789123, 'staff', 'Siti Maryam', 'Maryam123', '019-6547632', 'maryam@upm.my'),
(890367, 'staff', 'Ina Harun', 'Ina123', '013-8976521', 'ina@upm.my');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`accountID`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bookingID`);

--
-- Indexes for table `bookingdetails`
--
ALTER TABLE `bookingdetails`
  ADD PRIMARY KEY (`bookingID`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`loginID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`matrix_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`registerID`,`typeID`),
  ADD KEY `loginID` (`loginID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bookingID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`loginID`) REFERENCES `login` (`loginID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
