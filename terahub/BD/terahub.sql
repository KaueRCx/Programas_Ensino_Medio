-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2023 at 01:48 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `terahub`
--

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

CREATE TABLE `clientes` (
  `cpf` bigint(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `tel` varchar(12) NOT NULL,
  `email` varchar(101) NOT NULL,
  `nasc` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clientes`
--

INSERT INTO `clientes` (`cpf`, `nome`, `cep`, `tel`, `email`, `nasc`) VALUES
(2147483647, 'asdasd', '09530211', '12', 'terapoide@gmail.com', '2023-08-20');

-- --------------------------------------------------------

--
-- Table structure for table `formvendas`
--

CREATE TABLE `formvendas` (
  `codv` int(4) NOT NULL,
  `qtd` int(3) NOT NULL,
  `dat` date NOT NULL,
  `pagto` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `formvendas`
--

INSERT INTO `formvendas` (`codv`, `qtd`, `dat`, `pagto`) VALUES
(2785, 1, '2023-08-18', 'v'),
(27854, 2, '2023-08-14', 'v');

-- --------------------------------------------------------

--
-- Table structure for table `produtos`
--

CREATE TABLE `produtos` (
  `codprod` int(4) NOT NULL,
  `descricao` varchar(60) NOT NULL,
  `valor` decimal(6,2) NOT NULL,
  `vencimento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produtos`
--

INSERT INTO `produtos` (`codprod`, `descricao`, `valor`, `vencimento`) VALUES
(220, '5', '8.00', '2023-08-08'),
(587, '578', '75.00', '2023-08-19'),
(1544, '879', '1644.00', '2023-08-13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`cpf`);

--
-- Indexes for table `formvendas`
--
ALTER TABLE `formvendas`
  ADD PRIMARY KEY (`codv`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`codprod`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
