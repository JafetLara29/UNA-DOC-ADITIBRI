-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-10-2021 a las 09:16:52
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbaditibri`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbuser`
--

CREATE TABLE `tbuser` (
  `tbuserid` int(11) NOT NULL,
  `tbuserusername` varchar(25) NOT NULL,
  `tbuserpassword` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbuser`
--

INSERT INTO `tbuser` (`tbuserid`, `tbuserusername`, `tbuserpassword`) VALUES
(1, 'admin', 'admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`tbuserid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
