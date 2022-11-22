-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2018 at 08:07 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sesiones`
--

-- --------------------------------------------------------

--
-- Table structure for table `directivos`
--
drop database if  exists sesiones;
create database sesiones;
use sesiones;
CREATE TABLE `directivos` (
  `DNI` int(8) NOT NULL,
  `NOMBRE` varchar(20) NOT NULL,
  `PASSWORD` varchar(6) NOT NULL,
  `CARGO` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `directivos`
--

INSERT INTO `directivos` (`DNI`, `NOMBRE`, `PASSWORD`, `CARGO`) VALUES
(222, 'JOSE', 'JOSE', 'Jefe de Taller'),
(333, 'MARTA', 'MARTA', 'Oficina');

-- --------------------------------------------------------

--
-- Table structure for table `operaciones`
--

CREATE TABLE `operaciones` (
  `codigo` int(11) NOT NULL,
  `matricula` varchar(8) NOT NULL,
  `dni_operario` int(8) DEFAULT NULL,
  `cod_trabajo` int(3) NOT NULL,
  `tiempo_en_minutos` float DEFAULT NULL,
  `TERMINADO` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `operaciones`
--

INSERT INTO `operaciones` (`codigo`, `matricula`, `dni_operario`, `cod_trabajo`, `tiempo_en_minutos`, `TERMINADO`) VALUES
(1, '7654BYX', 666, 1, 50, 1),
(2, '1682DCF', 666, 2, 0, 0),
(3, '7187HMB', 777, 1, 33, 1),
(4, '4529JSP', 888, 6, 7, 1),
(5, '1212BNF', 888, 1, 0, 0),
(6, 'SE1234DF', 777, 6, 70, 1),
(7, '8562CMB', 888, 7, 70, 1),
(8, '7622GMB', 666, 5, 0, 0),
(9, '8725GBF', 777, 14, 450, 1),
(10, '8745FBC', 777, 15, 0, 0),
(11, '9152FZB', NULL, 14, NULL, NULL),
(12, '8365HND', NULL, 15, NULL, NULL),
(13, '7490BZF', NULL, 5, NULL, NULL),
(14, '8954CTF', NULL, 6, NULL, NULL),
(15, '0907CHT', NULL, 2, NULL, NULL);
-- --------------------------------------------------------

--
-- Table structure for table `operarios`
--

CREATE TABLE `operarios` (
  `DNI` int(8) NOT NULL DEFAULT '0',
  `NOMBRE` varchar(20) NOT NULL,
  `PASSWORD` varchar(6) NOT NULL,
  `FORMACION` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `operarios`
--

INSERT INTO `operarios` (`DNI`, `NOMBRE`, `PASSWORD`, `FORMACION`) VALUES
(666, 'LUIS', 'LUIS', 'F.P. 2º GRADO'),
(777, 'MANUEL', 'MANUEL', 'INGENIERO TÉCNICO'),
(888, 'MIGUEL', 'MIGUEL', 'CICLO SUPERIOR');

-- --------------------------------------------------------

--
-- Table structure for table `trabajos`
--

CREATE TABLE `trabajos` (
  `cod_trabajo` int(3) NOT NULL,
  `nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trabajos`
--

INSERT INTO `trabajos` (`cod_trabajo`, `nombre`) VALUES
(1, 'Cambio de Aceite'),
(2, 'Sustitución de Filtro de Aire'),
(5, 'Reparación de Pinchazo'),
(6, 'Sustitución de neumático'),
(7, 'Carga de Aire Acondicionado'),
(8, 'Sustitución de Batería'),
(14, 'Cambio de Correa'),
(15, 'Kit de distribución');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `directivos`
--
ALTER TABLE `directivos`
  ADD PRIMARY KEY (`DNI`);

--
-- Indexes for table `operaciones`
--
ALTER TABLE `operaciones`
  ADD PRIMARY KEY (`codigo`);

--
-- Indexes for table `operarios`
--
ALTER TABLE `operarios`
  ADD PRIMARY KEY (`DNI`);

--
-- Indexes for table `trabajos`
--
ALTER TABLE `trabajos`
  ADD PRIMARY KEY (`cod_trabajo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `operaciones`
--
ALTER TABLE `operaciones`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `trabajos`
--
ALTER TABLE `trabajos`
  MODIFY `cod_trabajo` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
