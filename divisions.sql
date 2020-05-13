-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2020 at 10:45 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `countryinformation`
--

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

CREATE TABLE `divisions` (
  `Division` varchar(30) NOT NULL,
  `Dis_1` varchar(30) NOT NULL,
  `Dis_2` varchar(30) NOT NULL,
  `Dis_3` varchar(30) NOT NULL,
  `Dis_4` varchar(30) NOT NULL,
  `Dis_5` varchar(30) NOT NULL,
  `Dis_6` varchar(30) NOT NULL,
  `Dis_7` varchar(30) NOT NULL,
  `Dis_8` varchar(30) NOT NULL,
  `Dis_9` varchar(30) NOT NULL,
  `Dis_10` varchar(30) NOT NULL,
  `Dis_11` varchar(30) NOT NULL,
  `Dis_12` varchar(30) NOT NULL,
  `Dis_13` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `divisions`
--

INSERT INTO `divisions` (`Division`, `Dis_1`, `Dis_2`, `Dis_3`, `Dis_4`, `Dis_5`, `Dis_6`, `Dis_7`, `Dis_8`, `Dis_9`, `Dis_10`, `Dis_11`, `Dis_12`, `Dis_13`) VALUES
('Dhaka', 'Dhaka', 'Faridpur', 'Gazipur', 'Gopalganj', 'Kishoreganj', 'Madaripur', 'Manikganj', 'Munshiganj', 'Narayanganj', 'Narsingdi', 'Rajbari', 'Shariatpur', 'Tangail'),
('Chittagong', 'Rangamati', 'Khagrachari', 'Chandpur', 'Cox\'s Bazar', 'Comilla', 'Noakhali', 'Lakshmipur', 'Khagrachari', 'Feni', 'Bandarban', 'Brahmanbaria', '', ''),
('Barisal', 'Patuakhali', 'Jhalokati', 'Barguna', 'Bhola', 'Pirojpur', '', '', '', '', '', '', '', ''),
('Khulna', 'Khulna', 'Bagerhat', 'Chuadanga', 'Jessore', 'Jhenaidah', 'Kushtia', 'Magura', 'Meherpur', 'Narail', 'Satkhira', '', '', ''),
('Rajshahi', 'Rajshahi', 'Bogra', 'Jaipurhat', 'Naogaon', 'Natore', 'Nawabganj', 'Pabna', 'Sirajganj', '', '', '', '', ''),
('Ranpur', 'Dinajpur', 'Nilphamari', 'Lalmonirhat', 'Panchagarh', 'Kurigram', 'Rangpur', 'Thakurgaon', 'Gaibandha', '', '', '', '', ''),
('Mymensingh', 'Jamalpur', 'Netrokona', 'Mymensingh', 'Sherpur', '', '', '', '', '', '', '', '', ''),
('Sylhet', 'Moulvibazar', 'Sylhet', 'Sunamganj', 'Habiganj', '', '', '', '', '', '', '', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
