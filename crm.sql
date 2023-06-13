-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 13, 2023 at 08:07 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crm`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblproducts`
--

DROP TABLE IF EXISTS `tblproducts`;
CREATE TABLE IF NOT EXISTS `tblproducts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` text CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `price` mediumint NOT NULL,
  `photo` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `num` int NOT NULL,
  `cat` text CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf16 COLLATE=utf16_persian_ci;

--
-- Dumping data for table `tblproducts`
--

INSERT INTO `tblproducts` (`id`, `name`, `price`, `photo`, `num`, `cat`) VALUES
(1, 'فلش ضدآب نانو', 5000000, 'uploads/1686410914', 10, 'کالای دیجیتال'),
(3, 'لبتاب ایسوس نسل جدید12', 500000, 'uploads/1686412474', 10, 'کالای دیجیتال'),
(5, 'موبایل ایفون 13', 200000, 'uploads/1686412854', 50, 'کالای دیجیتال'),
(6, 'لبتاب ایسوس نسل جدید12', 500000, 'uploads/1686413411', 10, 'کالای دیجیتال');

-- --------------------------------------------------------

--
-- Table structure for table `tblsale`
--

DROP TABLE IF EXISTS `tblsale`;
CREATE TABLE IF NOT EXISTS `tblsale` (
  `id` int NOT NULL AUTO_INCREMENT,
  `photo` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `numsefaresh` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `cat` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `num` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `price` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `vazeat` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbltem`
--

DROP TABLE IF EXISTS `tbltem`;
CREATE TABLE IF NOT EXISTS `tbltem` (
  `id` int NOT NULL AUTO_INCREMENT,
  `flname` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `code` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `phone` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `semat` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf16 COLLATE=utf16_persian_ci;

--
-- Dumping data for table `tbltem`
--

INSERT INTO `tbltem` (`id`, `flname`, `code`, `phone`, `semat`, `email`) VALUES
(6, 'زینب دارمندی', '1250999099', '09136599739', 'ادمین', 'zeynab.mhd@gmail.com'),
(8, 'زینب محمدی', '1250666066', '09228269343', 'مدیریت رسانه', 'zeynab.mhd24@gmail.com'),
(10, 'safari', '1250666066', '09136599739', 'مدیریت رسانه', 'ns@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

DROP TABLE IF EXISTS `tblusers`;
CREATE TABLE IF NOT EXISTS `tblusers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `flname` varchar(80) COLLATE utf8mb3_persian_ci NOT NULL,
  `phone` varchar(80) COLLATE utf8mb3_persian_ci NOT NULL,
  `email` varchar(80) COLLATE utf8mb3_persian_ci NOT NULL,
  `pass` varchar(127) COLLATE utf8mb3_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_persian_ci;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `flname`, `phone`, `email`, `pass`) VALUES
(1, 'زینب محمدی', '09228269343', 'zeynab.mhd@gmail.com', '$2y$10$VRojV0pfWXiVpOg1Xr5EQOo/Kpq20.PpJ8HZBQYwpdz6brRB6myva'),
(3, 'ضحا محمدی', '09387588545', 'zoha@gmail.com', 'c6f057b86584942e415435ffb1fa93d4'),
(5, 'نرجس سفری', '09136599739', '12566606996', 'c6f057b86584942e415435ffb1fa93d4'),
(6, 'علی محمدی', '09370281028', 'ali123@gmail.com', '$2y$10$N3A50Mqe/.9PqT5pzWMzNew.fV.wU8KPOtAcKC4UL3S2SisqlsBOm');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
