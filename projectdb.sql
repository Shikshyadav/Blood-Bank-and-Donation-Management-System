-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2023 at 09:53 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `id` int(11) NOT NULL,
  `Full_Name` varchar(60) NOT NULL,
  `Phone` bigint(10) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Age` int(2) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Blood_Group` varchar(3) NOT NULL,
  `Addreess` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`id`, `Full_Name`, `Phone`, `Email`, `Age`, `Gender`, `Blood_Group`, `Addreess`) VALUES
(10, 'Sagun', 9800000000, 'sagun81@gmail.com', 20, 'Female', 'B-', 'Lokanthali'),
(17, 'Sagun Rai', 9866660860, 'sagun81@gmail.com', 20, 'Female', 'AB+', 'Lokanthali'),
(18, 'Sagun Rai', 9866660860, 'shikshyadav81@gmail.com', 19, 'Female', 'AB+', 'Bhaktapur'),
(19, 'Sagun Rai', 9866660860, 'sagun81@gmail.com', 19, 'Female', 'B+', 'Lokanthali'),
(20, 'bla bla', 9866660860, 'blbla2@gmail.com', 20, 'Female', 'AB+', 'SCssc'),
(21, 'vafvr', 1234567890, 'aparna75@gmail.com', 19, 'Female', 'B+', 'gdvxcvfd'),
(22, 'Upasana Khatiwada', 8749560264, 'upasana32@gmail.com', 20, 'Female', 'O-', 'thapathali'),
(23, 'me', 4657834098, 'me4@gmail.com', 18, 'Female', 'O-', 'idk'),
(24, 'hyaaa', 6474563782, 'hyaa@gmail.com', 25, 'Female', 'A-', 'idk'),
(25, 'upasana', 7836482736, 'upasana32@gmail.com', 18, 'Female', 'O-', 'thapathali'),
(26, 'karina karki', 9866660860, 'shikshyadav81@gmail.com', 4, 'Female', 'AB+', 'qfe');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(11) NOT NULL,
  `Full_Name` varchar(30) NOT NULL,
  `Phone` bigint(10) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Blood_Group` varchar(3) NOT NULL,
  `Addreess` varchar(30) NOT NULL,
  `Note` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `Full_Name`, `Phone`, `Email`, `Blood_Group`, `Addreess`, `Note`) VALUES
(2, 'karina', 9800000000, 'karina31@gmail.com', 'AB+', 'changathali', 'ASDVSERJNGNB'),
(3, 'Sagun Rai', 9866660860, 'shikshyadav81@gmail.com', 'O+', 'Bhaktapur', 'kjdzvzxdb'),
(4, 'Upasana Khatiwada', 5678543567, 'upasana32@gmail.com', 'AB+', 'thapathali', 'jhsdgvjzsdnb'),
(5, 'Sagun Rai', 9866660860, 'shikshyadav81@gmail.com', 'O+', 'sgahrea', 'bdfhse'),
(6, 'shyam', 9866660860, 'shikshyadav81@gmail.com', 'AB+', 'sdcsc', 'fasvd'),
(7, 'hari', 9866660860, 'shikshyadav81@gmail.com', 'AB+', 'afgregr', 'sfasdgdsf'),
(16, 'agsd', 9866660860, 'shikshyadav81@gmail.com', 'AB+', 'agrwe', 'agdg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
