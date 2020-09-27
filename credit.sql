-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2019 at 11:28 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";



--
-- Database: `credit`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `creditAmount` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `email`, `creditAmount`) VALUES
('vijaya', 'vijaya@gmail.com', '1000'),
('lakshmi', 'lakshmi@gmail.com', '4500'),
('anjali', 'anjali@gmail.com', '2000'),
('swapna', 'swapna@gmail.com', '2500'),
('dhivya', 'dhivya@gmail.com', '3000'),
('swathi', 'swathi@gmail.com', '4000'),
('gowthami', 'gowthami@gmail.com', '5000'),
('swetha', 'swetha@gmail.com', '10000'),
('sai', 'sai@gmail.com', '10500'),
('sasi', 'sasi@gmail.com', '15500');

-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);
COMMIT;








