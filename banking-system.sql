-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2021 at 08:43 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banking-system`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `current_balance` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`name`, `email`, `current_balance`) VALUES
('Oliver', 'oliver55@gmail.com', '830'),
('Ava', 'avvaa@gmail.com', '1250'),
('Emma', 'emma23@gmail.com', '7850'),
('John', 'john@gmail.com', '850'),
('Karan', 'kk90@gmail.com', '1550'),
('Xavier', 'xavier65@gmail.com', '3150'),
('Caroline', 'car1993@gmail.com', '1150'),
('Tina', 'tin@gmail.com', '2000'),
('Dan', 'dan@gmail.com', '2500'),
('Sara', 'sara23@gmail.com', '1100');

-- --------------------------------------------------------

--
-- Table structure for table `mini_statement`
--

CREATE TABLE `mini_statement` (
  `sender` varchar(500) NOT NULL,
  `receiver` varchar(500) NOT NULL,
  `amount` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mini_statement`
--

INSERT INTO `mini_statement` (`sender`, `receiver`, `amount`) VALUES
('Tina', 'Sara', '100'),
('Caroline', 'Xavier', '100'),
('John', 'Oliver', '100'),
('Ava', 'Dan', '100'),
('Tina', 'Sara', '100'),
('Ava', 'Oliver', '100'),
('John', 'Oliver', '50'),
('Sara', 'Oliver', '100'),
('Emma', 'Oliver', '100'),
('Tina', 'Dan', '500'),
('Dan', 'Tina', '100'),
('Caroline', 'Emma', '500'),
('John', 'Ava', '500'),
('Emma', 'Caroline', '50'),
('Oliver', 'Ava', '50'),
('Caroline', 'Karan', '200'),
('Karan', 'Oliver', '30'),
('Karan', 'John', '300'),
('Ava', 'John', '100');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
