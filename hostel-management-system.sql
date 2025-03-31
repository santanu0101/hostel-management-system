-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 30, 2024 at 05:33 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hostel-management-system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `img_path` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `login_token` varchar(200) DEFAULT NULL,
  `login_dttm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `name`, `email`, `img_path`, `password`, `login_token`, `login_dttm`) VALUES
(1, 'Hacker', 'admin@gmail.com', 'upload1/google.jpeg', '1234', '7f100b7b36092fb9b06dfb4fac360931', '2024-10-28 21:26:07');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int NOT NULL,
  `email` varchar(200) DEFAULT NULL,
  `content` text,
  `dttm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `email`, `content`, `dttm`) VALUES
(1, 'san@raj', 'hi, i am hacker', '2024-10-26 21:39:02'),
(2, 'san@raj', 'hello go', '2024-10-26 21:47:47'),
(3, 'jack@dev', 'jdbsjdbfjsd', '2024-10-28 20:50:07');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int NOT NULL,
  `student_id` varchar(30) NOT NULL,
  `name` varchar(200) NOT NULL,
  `course` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `dttm` datetime NOT NULL,
  `ip` varchar(15) NOT NULL,
  `img_path` varchar(200) DEFAULT NULL,
  `room_no` varchar(100) DEFAULT NULL,
  `status` varchar(100) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `student_id`, `name`, `course`, `gender`, `phone`, `address`, `email`, `dttm`, `ip`, `img_path`, `room_no`, `status`) VALUES
(41, 'STD0075808', 'santanu raj', 'MCA', 'Male', '1233456789', 'South 24 parganas, Subhasgram Sukanta Sarani', 'san@raj', '2024-10-25 19:02:03', '::1', 'upload/17298631231790.jpeg', '104', 'approved'),
(44, 'STD0075877', 'jack sparrow', 'BCA', 'Male', '12345678', 'South 24 parganas, Subhasgram Sukanta Sarani', 'jack@dev', '2024-10-25 21:02:38', '::1', 'upload/17298703585211.jpeg', NULL, '0'),
(45, 'STD0078461', 'sumon raj', 'B.Tech ECE', 'Male', '123456', 'South 24 parganas, Subhasgram Sukanta Sarani', 'aniket@mail', '2024-10-28 21:06:29', '::1', 'upload/17301297895905.jpeg', '105', '0');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(110) NOT NULL,
  `img_path` varchar(200) DEFAULT NULL,
  `password` varchar(200) NOT NULL,
  `login_token` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `rem_token` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `expire` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `login_dttm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `name`, `email`, `img_path`, `password`, `login_token`, `rem_token`, `expire`, `login_dttm`) VALUES
(23, 'santanu raj', 'san@raj', 'upload/17298631231790.jpeg', 'c20ad4d76fe97759aa27a0c99bff6710', '9087cd8bfa9c1968b20d8f6d0b81cbbb', NULL, NULL, '2024-10-29 12:19:37'),
(26, 'jack sparrow', 'jack@dev', 'upload/17298703585211.jpeg', 'c20ad4d76fe97759aa27a0c99bff6710', '1b932eaf9f7c0cb84f471a560097ddb8', NULL, NULL, '2024-10-29 12:08:47'),
(27, 'sumon raj', 'aniket@mail', 'upload/17301297895905.jpeg', 'c20ad4d76fe97759aa27a0c99bff6710', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
