-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2020 at 06:57 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `admin_username` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `admin_username`, `admin_password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `allowcate_room`
--

CREATE TABLE `allowcate_room` (
  `room_id` int(11) NOT NULL,
  `room_no` int(10) NOT NULL,
  `room_type` varchar(255) NOT NULL,
  `allo_patient_name` varchar(255) NOT NULL,
  `room_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allowcate_room`
--

INSERT INTO `allowcate_room` (`room_id`, `room_no`, `room_type`, `allo_patient_name`, `room_status`) VALUES
(1, 101, 'Special', '', 0),
(3, 402, 'General', '', 0),
(5, 123, 'Special', '4', 0),
(6, 123, 'Semi Special', '4', 0),
(7, 412, 'Special', '2', 0),
(8, 123, 'Special', '1', 0),
(9, 123, 'Special', '1', 0),
(10, 562, 'Special', '2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appointment_id` int(10) NOT NULL,
  `patient_name` varchar(255) NOT NULL,
  `patient_gender` varchar(255) NOT NULL,
  `patient_blood_group` varchar(255) NOT NULL,
  `patient_dob` varchar(255) NOT NULL,
  `patient_add` varchar(255) NOT NULL,
  `patient_mobile` int(11) NOT NULL,
  `patient_city` varchar(255) NOT NULL,
  `patient_loginid` int(10) NOT NULL,
  `patient_password` varchar(255) NOT NULL,
  `patient_appoin_date` varchar(255) NOT NULL,
  `patient_appo_time` varchar(11) NOT NULL,
  `patient_dept` varchar(10) NOT NULL,
  `patient_doctor` varchar(255) NOT NULL,
  `patient_reason` varchar(255) NOT NULL,
  `patient_status` int(11) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appointment_id`, `patient_name`, `patient_gender`, `patient_blood_group`, `patient_dob`, `patient_add`, `patient_mobile`, `patient_city`, `patient_loginid`, `patient_password`, `patient_appoin_date`, `patient_appo_time`, `patient_dept`, `patient_doctor`, `patient_reason`, `patient_status`) VALUES
(1, '', 'Female', 'A', '04/01/2020', 'zscz', 2147483647, 'zcx', 1, '', '13/01/2020', 'zz', '1', '6', 'zvz', 1),
(2, 'ada', 'Female', 'A', '04/01/2020', 'adxa', 2147483647, 'ad', 1, '123', '21/01/2020', '3.00', '1', '5', 'sad', 0),
(3, '', 'Female', 'A', '12/08/2019', 'adsad', 2147483647, 'asdasd', 123, '123456', '22/01/2020', '4:00 PM', '1', '6', 'wqEAWDA', 2),
(4, 'john', 'Female', 'A', '12/02/2020', 'asas', 2147483647, 'rajkot', 1, '123456', '08/02/2020', '4:00 PM', '6', '6', 'zczdv', 2);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_id` int(11) NOT NULL,
  `dept_name` varchar(255) NOT NULL,
  `dept_description` varchar(255) NOT NULL,
  `dept_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_id`, `dept_name`, `dept_description`, `dept_status`) VALUES
(1, 'Cardiologists', 'Land meat winged called subdue without a very light in all years sea appear Lesser bring fly first land set female best perform.', 'Deactive'),
(6, 'Endocrinologists', 'Also you dry creeping beast multiply fourth abundantly our itsel signs bring our. Won form living. Whose dry you seasons divide given gathering great in', 'Active'),
(7, 'Dermatologists', 'Land meat winged called subdue without a very light in all years sea appear Lesser bring fly first land set female best perform.', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doctor_id` int(10) NOT NULL,
  `doctor_name` varchar(255) NOT NULL,
  `doctor_mobile_number` int(255) NOT NULL,
  `doctor_department` varchar(255) NOT NULL,
  `doctor_loginid` int(10) NOT NULL,
  `doctor_password` varchar(255) NOT NULL,
  `doctor_education` varchar(255) NOT NULL,
  `doctor_experiance` varchar(255) NOT NULL,
  `doctor_consultancy_charge` varchar(255) NOT NULL,
  `doctor_status` varchar(255) NOT NULL,
  `doctor_degree_certificate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doctor_id`, `doctor_name`, `doctor_mobile_number`, `doctor_department`, `doctor_loginid`, `doctor_password`, `doctor_education`, `doctor_experiance`, `doctor_consultancy_charge`, `doctor_status`, `doctor_degree_certificate`) VALUES
(5, 'dxgdee', 2147483647, '6', 13, 'sss', 'vc', '4', '1111111', 'Deactive', '35711577898814.jpeg'),
(6, 'Dr Pradip Dalwadi', 2147483647, '1', 123, '123456', 'be', '4', '2562', 'Active', '69121578055863.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_timing`
--

CREATE TABLE `doctor_timing` (
  `doctor_time_id` int(11) NOT NULL,
  `doctor_time_dr_id` int(11) NOT NULL,
  `doctor_from` varchar(255) NOT NULL,
  `doctor_to` varchar(255) NOT NULL,
  `doctor_time_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_timing`
--

INSERT INTO `doctor_timing` (`doctor_time_id`, `doctor_time_dr_id`, `doctor_from`, `doctor_to`, `doctor_time_status`) VALUES
(5, 5, '10:52 AM', '4:58 PM', 'Active'),
(9, 6, '11:01 PM', '11:01 AM', 'Active'),
(13, 6, '10:01 PM', '11:01 AM', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `medicine_id` int(10) NOT NULL,
  `medicine_name` varchar(255) NOT NULL,
  `medicine_cost` varchar(255) NOT NULL,
  `medicine_desc` varchar(255) NOT NULL,
  `medicine_ex_date` varchar(255) NOT NULL,
  `medicine_mnf_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`medicine_id`, `medicine_name`, `medicine_cost`, `medicine_desc`, `medicine_ex_date`, `medicine_mnf_date`) VALUES
(3, 'betax', '50', 'sadsad', '12/05/2020', '12/05/2018');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `patient_id` int(11) NOT NULL,
  `patient_name` varchar(255) NOT NULL,
  `patient_gender` varchar(10) NOT NULL,
  `patient_blood_group` varchar(10) NOT NULL,
  `patient_date_of_birth` varchar(255) NOT NULL,
  `patient_address` text NOT NULL,
  `patient_mobile_no` varchar(10) NOT NULL,
  `patient_city` varchar(255) NOT NULL,
  `patient_loginid` int(10) NOT NULL,
  `patient_addmission_date` varchar(255) NOT NULL,
  `patient_addmission_time` varchar(255) NOT NULL,
  `patient_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patient_id`, `patient_name`, `patient_gender`, `patient_blood_group`, `patient_date_of_birth`, `patient_address`, `patient_mobile_no`, `patient_city`, `patient_loginid`, `patient_addmission_date`, `patient_addmission_time`, `patient_password`) VALUES
(1, 'test', 'Female', 'A', '12/10/2018', 'sczscz ', '9658745895', 'cgnj', 1234, '01/08/2020', '10:13 PM', ''),
(2, 'test', 'Female', 'A', '01/06/2020', 'szcfzsdfz', '9687845265', 'rajkot', 123, '10/28/2019', '10:38 PM', '123'),
(4, 'data', 'Male', 'AB', '01/05/2020', 'asaas', '9675458965', 'rajkot', 123, '01/21/2020', '10:35 AM', '123');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL,
  `staff_name` varchar(255) NOT NULL,
  `staff_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `staff_name`, `staff_password`) VALUES
(1, 'test', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `treatment`
--

CREATE TABLE `treatment` (
  `treatment_id` int(10) NOT NULL,
  `treatment_type` varchar(255) NOT NULL,
  `treatment_cost` varchar(255) NOT NULL,
  `treatment_note` varchar(255) NOT NULL,
  `treatment_status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `treatment`
--

INSERT INTO `treatment` (`treatment_id`, `treatment_type`, `treatment_cost`, `treatment_note`, `treatment_status`) VALUES
(2, 'Blood transfusion', '1000', 'sgdysugfuysdhfgusd', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `allowcate_room`
--
ALTER TABLE `allowcate_room`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appointment_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doctor_id`);

--
-- Indexes for table `doctor_timing`
--
ALTER TABLE `doctor_timing`
  ADD PRIMARY KEY (`doctor_time_id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`medicine_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `treatment`
--
ALTER TABLE `treatment`
  ADD PRIMARY KEY (`treatment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `allowcate_room`
--
ALTER TABLE `allowcate_room`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appointment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `dept_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `doctor_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `doctor_timing`
--
ALTER TABLE `doctor_timing`
  MODIFY `doctor_time_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `medicine_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `treatment`
--
ALTER TABLE `treatment`
  MODIFY `treatment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
