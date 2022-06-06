-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2022 at 03:05 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mybakery`
--

-- --------------------------------------------------------

--
-- Table structure for table `cake`
--

CREATE TABLE `cake` (
  `id` int(11) NOT NULL,
  `cake_name` varchar(250) NOT NULL,
  `cake_shape` varchar(250) NOT NULL,
  `cake_size` varchar(15) NOT NULL,
  `cake_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cake`
--

INSERT INTO `cake` (`id`, `cake_name`, `cake_shape`, `cake_size`, `cake_date`) VALUES
(4, 'red velvet', 'Rectangle', 'Medium', '2022-06-02'),
(5, 'blue', 'Rectangle', 'Medium', '2022-06-02'),
(6, 'red spider', 'Rectangle', 'Small', '2022-06-02'),
(7, 'Lava Choco', 'Rectangle', 'Medium', '2022-06-16'),
(8, 'Flag cake', 'Rectangle', 'Medium', '2022-06-06'),
(9, 'choco brownies', 'Square', 'Medium', '2022-06-06'),
(10, 'choco', 'Rectangle', 'Small', '2022-06-06');

-- --------------------------------------------------------

--
-- Table structure for table `cake_order`
--

CREATE TABLE `cake_order` (
  `id_order` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `name` text NOT NULL,
  `cake_name` varchar(250) NOT NULL,
  `order_status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `user` varchar(250) NOT NULL,
  `pass` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `email`, `user`, `pass`) VALUES
(1, 'blabla@gmail.com', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cake`
--
ALTER TABLE `cake`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cake_order`
--
ALTER TABLE `cake_order`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cake`
--
ALTER TABLE `cake`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `cake_order`
--
ALTER TABLE `cake_order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
