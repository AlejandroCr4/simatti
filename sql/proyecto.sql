-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-10-2018 a las 07:23:14
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admins`
--

CREATE TABLE `admins` (
  `ida` int(20) NOT NULL,
  `nombrea` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `passworda` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `fecharega` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `admins`
--

INSERT INTO `admins` (`ida`, `nombrea`, `passworda`, `fecharega`) VALUES
(1, 'Administrador', '123456789A', '2018-05-30 09:05:18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docentes`
--

CREATE TABLE `docentes` (
  `idd` int(20) NOT NULL,
  `nombred` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `passwordd` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `fecharegd` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `docentes`
--

INSERT INTO `docentes` (`idd`, `nombred`, `passwordd`, `fecharegd`) VALUES
(2, 'Armando', 'Lopez', '2018-05-30 10:49:17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) NOT NULL,
  `nombre` text NOT NULL,
  `identificacion` int(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `fechanac` date NOT NULL,
  `sexo` text NOT NULL,
  `rol` int(2) NOT NULL,
  `fechareg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `identificacion`, `email`, `password`, `fechanac`, `sexo`, `rol`, `fechareg`) VALUES
(1, 'sadasfsg', 2147483647, 'dfszgdfgd@gmail.com', 'sdfasgsdsf', '5435-08-05', 'Hombre', 0, '2018-05-21 00:15:50'),
(2, 'wrt6j6776j', 246462168, 'carlos898@uniminuto.edu.co', '145244', '1980-10-10', 'Hombre', 0, '2018-05-21 00:15:50'),
(3, 'a', 34, 'gfsg@gsdf', 'a', '2000-05-16', 'hdgdh', 0, '2018-05-21 00:15:50'),
(4, 'a', 787, 'fdhg@gsdfh', 'fgdfh', '0057-06-07', 'Hombre', 0, '2018-05-21 00:15:50'),
(5, 'brayaloco', 12689988, 'tfttybgtyg@uniminuto.edu', '123456', '1996-02-18', 'Hombre', 0, '2018-05-21 00:15:50'),
(6, 'daniel', 756354687, 'dcalderondq@gmail.com', 'camilo13', '2015-07-08', 'Hombre', 0, '2018-05-21 00:15:50'),
(7, 'CARLOSLOCO', 122541566, 'CARLOS96@UNIMINUTO.EDU', '123456', '2012-01-01', 'Hombre', 0, '2018-05-21 00:15:50'),
(8, 'carlosbrujo', 112233365, 'carlo96@gmail.com', '123456', '2017-02-01', 'Hombre', 0, '2018-05-21 00:15:50'),
(9, 'carlos o', 1638527412, 'lolXD@hotmail.com', 'lolXD', '2009-06-19', 'Hombre', 0, '2018-05-21 00:15:50'),
(10, 'Admin', 545445456, 'dasfsdgdf@sfgdfhdh.com', 'Admin', '2018-05-02', 'Hombre', 0, '2018-05-21 00:15:50'),
(11, 'brayan', 1245346, 'sdgfdhdfh@dfsg.com', 'a', '2018-05-24', 'Hombre', 0, '2018-05-21 00:15:50'),
(12, 'Brayan', 112124512, 'bcruzleon@uniminuto.edu.co', 'Asdfghjkl', '1998-01-25', 'Hombre', 0, '2018-05-21 00:15:50'),
(13, 'iron man', 54654564, 'ironman@gmail.com', 'friday', '2018-05-10', 'Hombre', 0, '2018-05-21 00:34:28'),
(14, 'spiderman', 655754765, 'spiderman@gmail.com', 'jane', '2018-05-17', 'Hombre', 0, '2018-05-21 00:57:36'),
(15, 'capitan america', 63469464, 'capamerica@gfdghf.com', 'america', '2018-05-08', 'Hombre', 0, '2018-05-21 02:33:08');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`ida`);

--
-- Indices de la tabla `docentes`
--
ALTER TABLE `docentes`
  ADD PRIMARY KEY (`idd`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admins`
--
ALTER TABLE `admins`
  MODIFY `ida` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `docentes`
--
ALTER TABLE `docentes`
  MODIFY `idd` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
