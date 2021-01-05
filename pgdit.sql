-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2021 at 11:10 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


-- Database: `pgdit`

CREATE TABLE `testimonial` (
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `father` varchar(100) NOT NULL,
  `mother` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `examination` varchar(100) NOT NULL,
  `roll` int(4) NOT NULL,
  `year` int(4) NOT NULL,
  `gpa` varchar(4) NOT NULL,
  `payment` varchar(10) NOT NULL,
  `approve` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `testimonial` (`email`, `password`, `name`, `father`, `mother`, `address`, `mobile`, `examination`, `roll`, `year`, `gpa`, `payment`, `approve`) VALUES
('kazi@gmail.com', '1234', 'Kazi Naima', 'Kazi Hossain', 'Kazi Kulsum', 'Mirpur, Dhaka', '', '', 0, 0, '', '', 1),
('manik@gmail.com', '1212', 'Md. Manik', 'Md. Mollah', 'Farzana Akter', 'Gazipur Sadar', '', '', 0, 0, '', '', 1),
('rupa@gmail.com', '111', 'Rupa Akter', 'Mr. Rayhan', 'Ms. Roksana', 'Gilshan 1, Dhaka', '', '', 0, 0, '', '', 1);

-- Indexes for table `testimonial`

ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`email`);


