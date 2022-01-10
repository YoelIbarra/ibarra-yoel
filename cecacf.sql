-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-01-2022 a las 16:21:13
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cecacf`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--
-- Error leyendo la estructura de la tabla cecacf.contacto: #1932 - Table 'cecacf.contacto' doesn't exist in engine
-- Error leyendo datos de la tabla cecacf.contacto: #1064 - Algo está equivocado en su sintax cerca 'FROM `cecacf`.`contacto`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `integrantes`
--

CREATE TABLE `integrantes` (
  `id_persona` int(11) NOT NULL,
  `carrera` varchar(100) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `id_rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `integrantes`
--

INSERT INTO `integrantes` (`id_persona`, `carrera`, `nombre`, `apellido`, `id_rol`) VALUES
(1, 'Diseñadora Grafica', 'Luciana', 'Castro', 0),
(2, 'Ingeniería en Sistemas de Información', 'Steven Yoel', 'Ibarra', 1),
(3, 'Medicina', 'Stefania', 'Baldoma', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `descripcion`) VALUES
(0, 'Presidente'),
(1, 'Tesorero'),
(2, 'Secretario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudesinscripcion`
--
-- Error leyendo la estructura de la tabla cecacf.solicitudesinscripcion: #1932 - Table 'cecacf.solicitudesinscripcion' doesn't exist in engine
-- Error leyendo datos de la tabla cecacf.solicitudesinscripcion: #1064 - Algo está equivocado en su sintax cerca 'FROM `cecacf`.`solicitudesinscripcion`' en la linea 1

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `integrantes`
--
ALTER TABLE `integrantes`
  ADD PRIMARY KEY (`id_persona`),
  ADD KEY `id_rol` (`id_rol`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `integrantes`
--
ALTER TABLE `integrantes`
  MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `integrantes`
--
ALTER TABLE `integrantes`
  ADD CONSTRAINT `integrantes_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
