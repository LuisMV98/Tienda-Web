-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-05-2022 a las 00:22:52
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bebos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `nombre` varchar(30) NOT NULL,
  `direccion` varchar(60) NOT NULL,
  `tarjeta` varchar(20) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `contraseña` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nombre`, `direccion`, `tarjeta`, `correo`, `contraseña`) VALUES
('Ines  Rojas Huerta', 'Miguel Hidalgo #46', '987654321', 'ines.rojas@alumno.buap.mx', '4321'),
('Luis Moreno Vega', 'Niños Heroes #32', '123456789', 'luis.morenov@alumno.buap.mx', '1234'),
('Julian Perez Hernandez', 'Av. 16 de septiembre #37', '918273645', 'julian@correo.com', 'contra'),
('Ana Moreno', 'Niños Heroes #32', '4534769812', 'jazz.moreno@gmail.com', 'caracoles');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
