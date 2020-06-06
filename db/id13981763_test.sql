-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 06, 2020 at 03:47 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id13981763_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE `card` (
  `Name` varchar(20) DEFAULT NULL,
  `CVV` int(3) DEFAULT NULL,
  `Card_Number` bigint(16) DEFAULT NULL,
  `Month` int(2) DEFAULT NULL,
  `Year` int(4) DEFAULT NULL,
  `PIN` int(4) DEFAULT NULL,
  `Balance` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `card`
--

INSERT INTO `card` (`Name`, `CVV`, `Card_Number`, `Month`, `Year`, `PIN`, `Balance`) VALUES
('Malcolm Clark', 297, 4764426908210670, 3, 2026, 1231, 5777),
('Ava Collins', 536, 4575069737903460, 3, 2021, 4214, 2666),
('Anna Miller', 434, 4164234032599500, 7, 2023, 4214, 8802),
('Aydan Moore', 797, 4808994882855110, 9, 2020, 3123, 6314),
('Paityn Wilson', 396, 4097787341056780, 11, 2024, 4124, 9441),
('Tabitha Wright', 495, 4855650475356600, 10, 2026, 4234, 2167),
('Mia Allen', 218, 4505153140685040, 12, 2026, 6546, 9082),
('Aiden Green', 564, 4325883187787040, 12, 2024, 3453, 6441),
('Andrew Campbell', 738, 4897900424281400, 2, 2020, 5245, 3605),
('Hannah Gonzalez', 400, 4832067917296860, 3, 2023, 8756, 2934),
('Dixie Evans', 793, 4821509830254830, 3, 2023, 4234, 5383),
('Finnegan Johnson', 901, 4006779762814780, 12, 2025, 6543, 3077),
('Jolie Jackson', 670, 4682772843726670, 2, 2021, 2342, 3142),
('Taylor White', 666, 4076809004481830, 10, 2025, 4234, 5725),
('Selina White', 434, 4407203457695490, 3, 2024, 1312, 8890),
('Daniel Turner', 500, 4537164423207810, 12, 2026, 6456, 3271),
('Ethen Thompson', 125, 4785921557624160, 1, 2026, 3245, 7871),
('Miranda Brown', 223, 4614927663241440, 11, 2023, 5683, 3188),
('Julia Phillips', 918, 4918202043518600, 2, 2024, 1235, 8129),
('Christopher Anderson', 130, 4455676590886770, 11, 2020, 5342, 2068);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
