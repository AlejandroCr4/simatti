-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-05-2018 a las 21:32:42
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `nombre` text NOT NULL,
  `identificacion` int(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `fechanac` date NOT NULL,
  `sexo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nombre`, `identificacion`, `email`, `password`, `fechanac`, `sexo`) VALUES
('sadasfsg', 2147483647, 'dfszgdfgd@gmail.com', 'sdfasgsdsf', '5435-08-05', 'Hombre'),
('wrt6j6776j', 246462168, 'carlos898@uniminuto.edu.co', '145244', '1980-10-10', 'Hombre'),
('a', 34, 'gfsg@gsdf', 'a', '2000-05-16', 'hdgdh'),
('a', 787, 'fdhg@gsdfh', 'fgdfh', '0057-06-07', 'Hombre'),
('brayaloco', 12689988, 'tfttybgtyg@uniminuto.edu', '123456', '1996-02-18', 'Hombre'),
('daniel', 756354687, 'dcalderondq@gmail.com', 'camilo13', '2015-07-08', 'Hombre'),
('CARLOSLOCO', 122541566, 'CARLOS96@UNIMINUTO.EDU', '123456', '2012-01-01', 'Hombre'),
('carlosbrujo', 112233365, 'carlo96@gmail.com', '123456', '2017-02-01', 'Hombre'),
('carlos o', 1638527412, 'lolXD@hotmail.com', 'lolXD', '2009-06-19', 'Hombre'),
('Admin', 545445456, 'dasfsdgdf@sfgdfhdh.com', 'Admin', '2018-05-02', 'Hombre'),
('brayan', 1245346, 'sdgfdhdfh@dfsg.com', 'a', '2018-05-24', 'Hombre');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
