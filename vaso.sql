-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2016 at 12:54 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vaso`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `add_col_to_table` (IN `department_name` VARCHAR(20))  BEGIN
  ALTER TABLE `oncall` ADD COLUMN department_name varchar(255) DEFAULT NULL; 
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `department_name` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `created_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `department_name`, `description`, `status`, `create_date`, `updated_at`, `created_at`) VALUES
(2, 'USMP', '', 1, '2016-09-11 03:30:31', NULL, NULL),
(3, 'Olympus', '', 1, '2016-09-11 03:30:46', NULL, NULL),
(4, 'USSD', '', 1, '2016-09-11 03:31:00', NULL, NULL),
(5, 'VASS-01', '', 1, '2016-09-11 03:31:17', NULL, NULL),
(6, 'VASS-02', '', 1, '2016-09-11 03:31:26', NULL, NULL),
(7, 'VAM01', '', 1, '2016-09-11 03:31:35', NULL, NULL),
(8, 'VAM02', '', 1, '2016-09-11 03:31:48', NULL, NULL),
(9, 'FE-Core', '', 1, '2016-09-11 03:32:05', NULL, NULL),
(10, 'BE-Core', '', 1, '2016-09-11 03:32:20', NULL, NULL),
(11, 'SuperNova', '', 1, '2016-09-11 03:32:32', NULL, NULL),
(12, 'IMSO1', '', 1, '2016-09-11 03:32:57', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employment`
--

CREATE TABLE `employment` (
  `id` int(11) NOT NULL,
  `employment_name` varchar(255) NOT NULL,
  `employment_phone` varchar(255) NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oncall`
--

CREATE TABLE `oncall` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `USMP` varchar(255) DEFAULT NULL,
  `Olympus` varchar(255) DEFAULT NULL,
  `USSD` varchar(255) DEFAULT NULL,
  `VASS-01` varchar(255) DEFAULT NULL,
  `VASS-02` varchar(255) DEFAULT NULL,
  `VAM01` varchar(255) DEFAULT NULL,
  `VAM02` varchar(255) DEFAULT NULL,
  `FE-Core` varchar(255) DEFAULT NULL,
  `BE-Core` varchar(255) DEFAULT NULL,
  `SuperNova` varchar(255) DEFAULT NULL,
  `IMSO1` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oncall`
--

INSERT INTO `oncall` (`id`, `date`, `USMP`, `Olympus`, `USSD`, `VASS-01`, `VASS-02`, `VAM01`, `VAM02`, `FE-Core`, `BE-Core`, `SuperNova`, `IMSO1`, `created_at`, `updated_at`) VALUES
(1, '2016-08-01', 'กังวาล', 'กิตติ', 'สาวิตร', 'หฤหรรษ์', 'ปะดลพันธ์', 'อภิญญา', 'ทักษิณา', 'ณัฐวัฒน์', 'ฐากร', 'ภัทรพงษ์', 'ธนัญชัย', NULL, NULL),
(2, '2016-08-02', 'กังวาล', 'กิตติ', 'สาวิตร', 'หฤหรรษ์', 'ปะดลพันธ์', 'อภิญญา', 'ทักษิณา', 'ณัฐวัฒน์', 'สรสิช', 'ฐากร', 'ธนัญชัย', NULL, NULL),
(3, '2016-08-03', 'กังวาล', 'กิตติ', 'สาวิตร', 'หฤหรรษ์', 'ปะดลพันธ์', 'อภิญญา', 'ทักษิณา', 'ณัฐวัฒน์', 'สรสิช', 'ฐากร', 'ธนัญชัย', NULL, NULL),
(4, '2016-08-04', 'กังวาล', 'กิตติ', 'สาวิตร', 'หฤหรรษ์', 'ปะดลพันธ์', 'อภิญญา', 'ทักษิณา', 'ณัฐวัฒน์', 'สรสิช', 'ฐากร', 'ธนัญชัย', NULL, NULL),
(5, '2016-08-05', 'กังวาล', 'กิตติ', 'สาวิตร', 'หฤหรรษ์', 'ปะดลพันธ์', 'อภิญญา', 'ทักษิณา', 'วิศรุตฌ์', 'สรสิช', 'ฐากร', 'ธนัญชัย', '2016-09-11 20:11:24', '2016-09-11 13:11:24'),
(6, '2016-08-06', 'กังวาล', 'กิตติ', 'สาวิตร', 'หฤหรรษ์', 'ปะดลพันธ์', 'อภิญญา', 'ทักษิณา', 'วิศรุตฌ์', 'ณัฐวัฒน์', 'ฐากร', 'ธนัญชัย', '2016-09-17 14:14:13', '2016-09-17 07:14:13'),
(7, '2016-08-07', 'กังวาล', 'กิตติ', 'สาวิตร', 'หฤหรรษ์', 'ปะดลพันธ์', 'ปรียาทิพย์', 'ณปภัช', 'วิศรุตฌ์', 'ณัฐวัฒน์', 'สรสิช', 'สุนัตรา', NULL, NULL),
(8, '2016-08-08', 'กังวาล', 'กิตติ', 'สาวิตร', 'หฤหรรษ์', 'ปะดลพันธ์', 'ปรียาทิพย์', 'ณปภัช', 'วิศรุตฌ์', 'ณัฐวัฒน์', 'สรสิช', 'สุนัตรา', NULL, NULL),
(9, '2016-08-09', 'กังวาล', 'ยุวดี', 'สาวิตร', 'หฤหรรษ์', 'ปะดลพันธ์', 'ปรียาทิพย์', 'ณปภัช', 'วิศรุตฌ์', 'ณัฐวัฒน์', 'สรสิช', 'สุนัตรา', NULL, NULL),
(10, '2016-08-10', 'กังวาล', 'ยุวดี', 'สาวิตร', 'หฤหรรษ์', 'ปะดลพันธ์', 'ปรียาทิพย์', 'ณปภัช', 'เดโชพล', 'วิศรุตฌ์', 'สรสิช', 'สุนัตรา', NULL, NULL),
(11, '2016-08-11', 'ธวัชชัย', 'ยุวดี', 'สาวิตร', 'หฤหรรษ์', 'ปะดลพันธ์', 'ปรียาทิพย์', 'ณปภัช', 'เดโชพล', 'วิศรุตฌ์', 'ณัฐวัฒน์', 'สุนัตรา', NULL, NULL),
(12, '2016-08-12', 'ธวัชชัย', 'ยุวดี', 'สาวิตร', 'หฤหรรษ์', 'ปะดลพันธ์', 'ปรียาทิพย์', 'ณปภัช', 'เดโชพล', 'วิศรุตฌ์', 'ณัฐวัฒน์', 'สุนัตรา', NULL, NULL),
(13, '2016-08-13', 'ธวัชชัย', 'ยุวดี', 'สาวิตร', 'หฤหรรษ์', 'ปะดลพันธ์', 'ณปภัช', 'อภิญญา', 'เดโชพล', 'วิศรุตฌ์', 'ณัฐวัฒน์', 'สิทธิพร', NULL, NULL),
(14, '2016-08-14', 'ธวัชชัย', 'ยุวดี', 'สาวิตร', 'หฤหรรษ์', 'ปะดลพันธ์', 'ณปภัช', 'อภิญญา', 'เดโชพล', 'วิศรุตฌ์', 'ณัฐวัฒน์', 'สิทธิพร', NULL, NULL),
(15, '2016-08-15', 'ธวัชชัย', 'ยุวดี', 'สาวิตร', 'หฤหรรษ์', 'ปะดลพันธ์', 'ณปภัช', 'อภิญญา', 'สมนึก', 'เดโชพล', 'วิศรุตฌ์', 'สิทธิพร', NULL, NULL),
(16, '2016-08-16', 'ธวัชชัย', 'กิตติ', 'สาวิตร', 'จิรายุ', 'วิชัย', 'ณปภัช', 'อภิญญา', 'สมนึก', 'เดโชพล', 'วิศรุตฌ์', 'สิทธิพร', NULL, NULL),
(17, '2016-08-17', 'ธวัชชัย', 'กิตติ', 'สาวิตร', 'จิรายุ', 'วิชัย', 'ณปภัช', 'อภิญญา', 'สมนึก', 'เดโชพล', 'วิศรุตฌ์', 'สิทธิพร', NULL, NULL),
(18, '2016-08-18', 'ธวัชชัย', 'กิตติ', 'สาวิตร', 'จิรายุ', 'วิชัย', 'ณปภัช', 'อภิญญา', 'สมนึก', 'เดโชพล', 'วิศรุตฌ์', 'สิทธิพร', NULL, NULL),
(19, '2016-08-19', 'ธวัชชัย', 'กิตติ', 'สาวิตร', 'จิรายุ', 'วิชัย', 'ศุภกร', 'ปรียาทิพย์', 'ภัทรพงษ์', 'เดโชพล', 'วิศรุตฌ์', 'สิทธา', NULL, NULL),
(20, '2016-08-20', 'ธวัชชัย', 'กิตติ', 'สาวิตร', 'จิรายุ', 'วิชัย', 'ศุภกร', 'ปรียาทิพย์', 'ภัทรพงษ์', 'สมนึก', 'เดโชพล', 'สิทธา', NULL, NULL),
(21, '2016-08-21', 'ปัญจสาย', 'กิตติ', 'อดิศักดิ์', 'จิรายุ', 'วิชัย', 'ศุภกร', 'ปรียาทิพย์', 'ภัทรพงษ์', 'สมนึก', 'เดโชพล', 'สิทธา', NULL, NULL),
(22, '2016-08-22', 'ปัญจสาย', 'กิตติ', 'อดิศักดิ์', 'จิรายุ', 'วิชัย', 'ศุภกร', 'ปรียาทิพย์', 'ภัทรพงษ์', 'สมนึก', 'เดโชพล', 'สิทธา', NULL, NULL),
(23, '2016-08-23', 'ปัญจสาย', 'ยุวดี', 'อดิศักดิ์', 'จิรายุ', 'วิชัย', 'ศุภกร', 'ปรียาทิพย์', 'ฐากร', 'สมนึก', 'เดโชพล', 'สิทธา', NULL, NULL),
(24, '2016-08-24', 'ปัญจสาย', 'ยุวดี', 'อดิศักดิ์', 'จิรายุ', 'วิชัย', 'ศุภกร', 'ปรียาทิพย์', 'ฐากร', 'ภัทรพงษ์', 'เดโชพล', 'สิทธา', NULL, NULL),
(25, '2016-08-25', 'ปัญจสาย', 'ยุวดี', 'อดิศักดิ์', 'จิรายุ', 'วิชัย', 'ศุภกร', 'ปรียาทิพย์', 'ฐากร', 'ภัทรพงษ์', 'สมนึก', 'วสวัตติ์', NULL, NULL),
(26, '2016-08-26', 'ปัญจสาย', 'ยุวดี', 'อดิศักดิ์', 'จิรายุ', 'วิชัย', 'ทักษิณา', 'ศุภกร', 'ฐากร', 'ภัทรพงษ์', 'สมนึก', 'วสวัตติ์', NULL, NULL),
(27, '2016-08-27', 'ปัญจสาย', 'ยุวดี', 'อดิศักดิ์', 'จิรายุ', 'วิชัย', 'ทักษิณา', 'ศุภกร', 'ฐากร', 'ภัทรพงษ์', 'สมนึก', 'วสวัตติ์', NULL, NULL),
(28, '2016-08-28', 'ปัญจสาย', 'ยุวดี', 'อดิศักดิ์', 'จิรายุ', 'วิชัย', 'ทักษิณา', 'ศุภกร', 'สรสิช', 'ฐากร', 'สมนึก', 'วสวัตติ์', NULL, NULL),
(29, '2016-08-29', 'ปัญจสาย', 'ยุวดี', 'อดิศักดิ์', 'จิรายุ', 'วิชัย', 'ทักษิณา', 'ศุภกร', 'สรสิช', 'ฐากร', 'ภัทรพงษ์', 'วสวัตติ์', NULL, NULL),
(30, '2016-08-30', 'ปัญจสาย', 'กิตติ', 'อดิศักดิ์', 'จิรายุ', 'วิชัย', 'ทักษิณา', 'ศุภกร', 'สรสิช', 'ฐากร', 'ภัทรพงษ์', 'วสวัตติ์', NULL, NULL),
(31, '2016-08-31', 'ปัญจสาย', 'กิตติ', 'อดิศักดิ์', 'จิรายุ', 'วิชัย', 'ทักษิณา', 'ศุภกร', 'สรสิช', 'ฐากร', 'ภัทรพงษ์', 'วสวัตติ์', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `department_name` (`department_name`);

--
-- Indexes for table `employment`
--
ALTER TABLE `employment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oncall`
--
ALTER TABLE `oncall`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `date` (`date`),
  ADD KEY `date_2` (`date`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `employment`
--
ALTER TABLE `employment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `oncall`
--
ALTER TABLE `oncall`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
