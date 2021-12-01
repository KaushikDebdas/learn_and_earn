-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2021 at 10:25 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learn_and_earn`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `ID` int(10) NOT NULL,
  `CourseCode` varchar(255) NOT NULL,
  `CourseName` varchar(255) NOT NULL,
  `DepartmentsID` int(10) NOT NULL,
  `UserID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`ID`, `CourseCode`, `CourseName`, `DepartmentsID`, `UserID`) VALUES
(1, 'CSI - 121', 'SPL', 1, 1),
(2, 'MATH - 003', 'Elementary Calculus', 1, 1),
(3, 'CSE - 225', 'Digital Logic Design', 1, 1),
(4, 'PHY - 105', 'Physics', 1, 1),
(5, 'ACN - 1205', 'Financial Accounting I', 2, 1),
(6, 'MKT - 4204', 'Strategic Marketing', 2, 1),
(7, 'EEE - 3305', 'Engineering Electromagnetics', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `ID` int(10) NOT NULL,
  `DepartmentName` varchar(255) NOT NULL,
  `DepartmentCode` varchar(100) NOT NULL,
  `UserID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`ID`, `DepartmentName`, `DepartmentCode`, `UserID`) VALUES
(1, 'Computer Science & Engineering', 'CSE', 1),
(2, 'Bachelor of Business Administration', 'BBA', 1),
(3, 'Electrical and Electronics Engineering', 'EEE', 1);

-- --------------------------------------------------------

--
-- Table structure for table `filesharing`
--

CREATE TABLE `filesharing` (
  `FileID` int(10) NOT NULL,
  `FileName` varchar(255) NOT NULL,
  `FilePath` varchar(255) NOT NULL,
  `CourseName` varchar(25) NOT NULL,
  `UploadDate` date NOT NULL,
  `UserID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `groupstudy`
--

CREATE TABLE `groupstudy` (
  `ID` int(10) NOT NULL,
  `GroupDateTime` timestamp NULL DEFAULT NULL,
  `GroupStudyDescription` varchar(255) NOT NULL,
  `GroupStudyStartTime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `GroupStudyEndTime` timestamp NULL DEFAULT NULL,
  `Status` varchar(255) DEFAULT NULL,
  `UserID` int(10) NOT NULL,
  `CourseID` int(10) NOT NULL,
  `InterestedStudents` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `groupstudy`
--

INSERT INTO `groupstudy` (`ID`, `GroupDateTime`, `GroupStudyDescription`, `GroupStudyStartTime`, `GroupStudyEndTime`, `Status`, `UserID`, `CourseID`, `InterestedStudents`) VALUES
(1, '2021-11-08 15:08:15', 'I want to study SPL in a group.', '2021-11-12 07:44:37', '2021-10-31 08:02:26', 'Incomplete', 1, 1, 'Rafsan Hq, Tanzeen Jahan, Tarek Mahmud'),
(2, '2021-10-30 13:29:03', 'I need to form a group for the SPL LAB project. ', '2021-11-14 17:09:24', '2021-10-31 08:19:00', 'Incomplete', 1, 1, 'Tarek Mahmud, Shahin Alam'),
(3, '2021-11-01 19:24:00', 'This is new group study. Test 1', '2021-11-14 17:09:31', '2021-11-16 19:24:00', NULL, 1, 2, 'Tarek Mahmud,Shahin Alam'),
(4, '2021-11-07 17:46:29', 'This is new group study. Test 1', '2021-11-14 17:08:37', '2021-11-16 19:24:00', NULL, 2, 2, 'Tarek Mahmud'),
(5, '2021-11-07 17:46:00', 'Test 2', '2021-11-14 17:08:39', '2021-11-08 17:46:00', NULL, 2, 7, 'Tarek Mahmud'),
(6, '2021-11-07 17:50:00', 'Math Test Group Rafsan', '2021-11-14 17:08:45', '2021-11-08 17:50:00', NULL, 2, 2, 'Tarek Mahmud'),
(7, NULL, 'Math', '2021-11-19 17:49:00', '2021-11-27 17:49:00', NULL, 1, 1, NULL),
(8, NULL, 'Math', '2021-11-14 17:56:00', '2021-11-17 17:56:00', NULL, 1, 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `interested_ingroupstudy`
--

CREATE TABLE `interested_ingroupstudy` (
  `UserID` int(10) NOT NULL,
  `GroupStudyID` int(10) NOT NULL,
  `InterestedUserName` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `interested_inpost`
--

CREATE TABLE `interested_inpost` (
  `UserID` int(10) NOT NULL,
  `PostID` int(10) NOT NULL,
  `InterestedUserName` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `PaymentId` int(10) NOT NULL,
  `PaymentDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `PaymentDescription` varchar(255) NOT NULL,
  `PaymentAmount` double NOT NULL DEFAULT 0,
  `UserID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `ID` int(10) NOT NULL,
  `PostDateTime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `SelectedStartTime` timestamp NULL DEFAULT NULL,
  `SelectedEndTime` timestamp NULL DEFAULT NULL,
  `Payment` double NOT NULL DEFAULT 200,
  `Gender` varchar(25) NOT NULL,
  `PostDescription` varchar(255) NOT NULL,
  `Result` int(10) DEFAULT NULL,
  `Comment` varchar(255) DEFAULT NULL,
  `Rating` int(10) DEFAULT NULL,
  `UserID` int(10) NOT NULL,
  `CourseID` int(11) NOT NULL,
  `InterestedStudents` text DEFAULT NULL,
  `TutorName` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`ID`, `PostDateTime`, `SelectedStartTime`, `SelectedEndTime`, `Payment`, `Gender`, `PostDescription`, `Result`, `Comment`, `Rating`, `UserID`, `CourseID`, `InterestedStudents`, `TutorName`) VALUES
(2, '2021-11-14 17:10:32', '2021-11-02 16:34:00', '2021-11-06 16:34:00', 500, 'Male', 'I want to study DSD.', NULL, 'Good', 3, 1, 3, 'Rafsan Hq, Tarek Mahmud, Tanzeen Jahan, Sushmita Mondal', 'Tarek Mahmud'),
(3, '2021-11-14 18:58:54', '2021-11-02 18:18:00', '2021-11-03 18:18:00', 100, 'Male', 'I want to study Accounting.', NULL, NULL, NULL, 1, 5, 'Shahin Alam, Sushmita Mondal', NULL),
(10, '2021-11-13 22:35:21', '2021-11-04 18:26:00', '2021-12-03 18:26:00', 250, 'Female', 'I want to study Accounting. [Rafsan]', 1, 'Good', 4, 2, 5, 'Kaushik Debdas,Tanzeen Jahan', 'Kaushik Debdas');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `PhoneNumber` char(11) NOT NULL,
  `Image` varchar(255) DEFAULT NULL,
  `Password` varchar(255) NOT NULL,
  `Created_At` date DEFAULT NULL,
  `Updated_At` date DEFAULT NULL,
  `AverageRating` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `Email`, `UserName`, `Gender`, `PhoneNumber`, `Image`, `Password`, `Created_At`, `Updated_At`, `AverageRating`) VALUES
(1, 'kaushikdebdas27@gmail.com', 'Kaushik Debdas', 'male', '01757921768', '1636754250.jpg', 'e56ff8d6474efa3631433cc7180f3c46', '2021-10-25', '2021-10-25', NULL),
(2, 'irafsan162037@bscse.uiu.ac.bd', 'Rafsan Hq', 'male', '01515663630', '1635713681.JPG', '3497e6692d194875753ba2c6bb3c2aed', '2021-10-31', '2021-10-31', NULL),
(8, 'malam162016@bscse.uiu.ac.bd', 'Shahin Alam', 'male', '01705883565', '1635932237.jpg', 'd946b7ac50e8b678d056874f53041510', '2021-11-03', '2021-11-03', 0),
(9, 'ktanzeen162046@bscse.uiu.ac.bd', 'Tanzeen Jahan', 'female', '01620573368', '1635932361.jpg', '6b9096dead7b236b4c0852e6e81cc79f', '2021-11-03', '2021-11-03', 0),
(10, 'smondal171211@bscse.uiu.ac.bd', 'Sushmita Mondal', 'female', '01792214546', '1635932493.jpg', '3d2a865001e22eeddef524f181018e1f', '2021-11-03', '2021-11-03', 0),
(11, 'tmahmud162066@bscse.uiu.ac.bd', 'Tarek Mahmud', 'male', '01620792510', '1635933442.jpg', 'a415a16a0dbfb70465e96b9b7ee050fa', '2021-11-03', '2021-11-03', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `CourseCode` (`CourseCode`),
  ADD KEY `FKCourse656903` (`DepartmentsID`),
  ADD KEY `FKCourse747545` (`UserID`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `DepartmentName` (`DepartmentName`),
  ADD UNIQUE KEY `DepartmentCode` (`DepartmentCode`),
  ADD KEY `FKDepartment134658` (`UserID`);

--
-- Indexes for table `filesharing`
--
ALTER TABLE `filesharing`
  ADD PRIMARY KEY (`FileID`),
  ADD KEY `FKFileSharin634619` (`UserID`);

--
-- Indexes for table `groupstudy`
--
ALTER TABLE `groupstudy`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FKGroupStudy373537` (`UserID`),
  ADD KEY `FKGroupStudy472264` (`CourseID`);

--
-- Indexes for table `interested_ingroupstudy`
--
ALTER TABLE `interested_ingroupstudy`
  ADD PRIMARY KEY (`UserID`,`GroupStudyID`),
  ADD KEY `FKInterested870973` (`UserID`),
  ADD KEY `FKInterested71355` (`GroupStudyID`);

--
-- Indexes for table `interested_inpost`
--
ALTER TABLE `interested_inpost`
  ADD PRIMARY KEY (`UserID`,`PostID`),
  ADD KEY `FKInterested549544` (`UserID`),
  ADD KEY `FKInterested122897` (`PostID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`PaymentId`),
  ADD KEY `FKPayment544373` (`UserID`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FKPost23559` (`UserID`),
  ADD KEY `CourseID` (`CourseID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `PhoneNumber` (`PhoneNumber`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `filesharing`
--
ALTER TABLE `filesharing`
  MODIFY `FileID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `groupstudy`
--
ALTER TABLE `groupstudy`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `PaymentId` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `FKCourse656903` FOREIGN KEY (`DepartmentsID`) REFERENCES `department` (`ID`),
  ADD CONSTRAINT `FKCourse747545` FOREIGN KEY (`UserID`) REFERENCES `user` (`ID`);

--
-- Constraints for table `department`
--
ALTER TABLE `department`
  ADD CONSTRAINT `FKDepartment134658` FOREIGN KEY (`UserID`) REFERENCES `user` (`ID`);

--
-- Constraints for table `filesharing`
--
ALTER TABLE `filesharing`
  ADD CONSTRAINT `FKFileSharin634619` FOREIGN KEY (`UserID`) REFERENCES `user` (`ID`);

--
-- Constraints for table `groupstudy`
--
ALTER TABLE `groupstudy`
  ADD CONSTRAINT `FKGroupStudy373537` FOREIGN KEY (`UserID`) REFERENCES `user` (`ID`),
  ADD CONSTRAINT `FKGroupStudy472264` FOREIGN KEY (`CourseID`) REFERENCES `course` (`ID`);

--
-- Constraints for table `interested_ingroupstudy`
--
ALTER TABLE `interested_ingroupstudy`
  ADD CONSTRAINT `FKInterested71355` FOREIGN KEY (`GroupStudyID`) REFERENCES `groupstudy` (`ID`),
  ADD CONSTRAINT `FKInterested870973` FOREIGN KEY (`UserID`) REFERENCES `user` (`ID`);

--
-- Constraints for table `interested_inpost`
--
ALTER TABLE `interested_inpost`
  ADD CONSTRAINT `FKInterested122897` FOREIGN KEY (`PostID`) REFERENCES `post` (`ID`),
  ADD CONSTRAINT `FKInterested549544` FOREIGN KEY (`UserID`) REFERENCES `user` (`ID`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `FKPayment544373` FOREIGN KEY (`UserID`) REFERENCES `user` (`ID`);

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `FKPost23559` FOREIGN KEY (`UserID`) REFERENCES `user` (`ID`),
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`CourseID`) REFERENCES `course` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
