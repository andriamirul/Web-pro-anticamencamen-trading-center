-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2018 at 04:19 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes`
--

-- --------------------------------------------------------

--
-- Table structure for table `addbarang`
--

CREATE TABLE `addbarang` (
  `idbarang` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` int(20) NOT NULL,
  `stock` int(20) NOT NULL,
  `namagambar` varchar(50) NOT NULL,
  `deskripsi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addbarang`
--

INSERT INTO `addbarang` (`idbarang`, `nama`, `harga`, `stock`, `namagambar`, `deskripsi`) VALUES
(0, 'T - Rex Cap', 75000, 13, 'Cap.jpg', 'Ini topi keren'),
(1, 'T - Rex Cup', 35000, 21, 'cup.jpg', 'Keren lohh'),
(2, 'T - Rex Doll', 125000, 121, 'trexDoll.jpg', 'Have your own cute t-rex'),
(3, 'T - Rex Pin', 15000, 232, 'trexPin.jpg', 'Cool pin for your bag or keys'),
(4, 'T - Rex Tank Shirt', 135000, 39, 'trexTank.jpg', 'Be the T-Rex it self!'),
(5, 'T - Rex Action Figure', 150000, 90, 'trexToy1a.jpg', 'Have your own T - Rex to play with you');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `username` varchar(20) NOT NULL,
  `idbarang` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `img_upload`
--

CREATE TABLE `img_upload` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `img_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `email`, `password`) VALUES
('abu', 'abu@abu', '123456'),
('bakikuck', 'bakikuck@gmail.com', '123456'),
('jehan04', 'bakikuck@gmail.com', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addbarang`
--
ALTER TABLE `addbarang`
  ADD PRIMARY KEY (`idbarang`);

--
-- Indexes for table `img_upload`
--
ALTER TABLE `img_upload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
