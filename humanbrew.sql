-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-02-2020 a las 20:48:50
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `humanbrew`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `employeeregistration`
--

CREATE TABLE `employeeregistration` (
  `Id_employee` int(10) NOT NULL,
  `Nombre1` varchar(50) NOT NULL,
  `Nombre2` varchar(50) NOT NULL,
  `ApellidoPaterno` varchar(50) NOT NULL,
  `ApellidoMaterno` varchar(50) NOT NULL,
  `CURP` varchar(18) NOT NULL,
  `NSS` int(11) NOT NULL,
  `FechaInicio` date NOT NULL,
  `FechaFinal` date NOT NULL,
  `FechaNacimiento` date NOT NULL,
  `LN_Ciudad` varchar(50) NOT NULL,
  `LN_Estado` varchar(50) NOT NULL,
  `LN_Pais` varchar(50) NOT NULL,
  `D_Calle` varchar(50) NOT NULL,
  `D_NoInterior` varchar(50) NOT NULL,
  `D_NoExterior` varchar(50) NOT NULL,
  `D_Colonia` varchar(50) NOT NULL,
  `D_CP` int(10) NOT NULL,
  `D_Ciudad` varchar(50) NOT NULL,
  `D_Estado` varchar(50) NOT NULL,
  `D_Pais` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `employeeregistration`
--

INSERT INTO `employeeregistration` (`Id_employee`, `Nombre1`, `Nombre2`, `ApellidoPaterno`, `ApellidoMaterno`, `CURP`, `NSS`, `FechaInicio`, `FechaFinal`, `FechaNacimiento`, `LN_Ciudad`, `LN_Estado`, `LN_Pais`, `D_Calle`, `D_NoInterior`, `D_NoExterior`, `D_Colonia`, `D_CP`, `D_Ciudad`, `D_Estado`, `D_Pais`) VALUES
(10, 'Diego', 'Diego', 'Paniagua', 'Morales', 'AAAAAA12125454', 879456, '2020-02-01', '2020-02-07', '2020-02-10', 'Queretaro', 'Queretaro', 'México', 'callepPrueba', '42', '10', 'Colinas', 76900, 'Queretaro', 'Queretaro', 'México'),
(11, 'Diego', 'Diego', 'Paniagua', 'RL', 'AAAA12345678912345', 2147483647, '2020-02-12', '0000-00-00', '2020-02-06', 'Queretaro', 'Queretaro', 'México', 'callepPrueba', '42', '10', 'Colinas', 76900, 'CORREGIDORA', 'QUERETARO', 'México'),
(12, 'Diego', 'Diego', 'Paniagua', 'RL', 'AAAA12345678912345', 2147483647, '2020-02-12', '2020-02-06', '2020-02-06', 'Queretaro', 'Queretaro', 'México', 'callepPrueba', '42', '10', 'Colinas', 76900, 'CORREGIDORA', 'QUERETARO', 'México'),
(13, 'Diego', 'Diego', 'Paniagua', 'RL', 'AAAA12345678912345', 2147483647, '2020-02-12', '0000-00-00', '2020-02-06', 'Queretaro', 'Queretaro', 'México', 'callepPrueba', '42', '10', 'Colinas', 76900, 'CORREGIDORA', 'QUERETARO', 'México');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `employeeregistration`
--
ALTER TABLE `employeeregistration`
  ADD PRIMARY KEY (`Id_employee`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `employeeregistration`
--
ALTER TABLE `employeeregistration`
  MODIFY `Id_employee` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
