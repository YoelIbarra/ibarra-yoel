-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-02-2022 a las 03:01:16
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ibarra-yoel`
--
CREATE DATABASE IF NOT EXISTS `ibarra-yoel` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `ibarra-yoel`;

DELIMITER $$
--
-- Procedimientos
--
DROP PROCEDURE IF EXISTS `contactoInsertar`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `contactoInsertar` (IN `inombre` VARCHAR(50), IN `iapellido` VARCHAR(50), IN `iemail` VARCHAR(100), IN `itel` DECIMAL(15), IN `itext` VARCHAR(255))  INSERT into contacto 
(nombre,apellido,email,telefono,consulta)
VALUES (inombre,iapellido,iemail,itel,itext)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--
-- Creación: 14-01-2022 a las 18:50:37
--

DROP TABLE IF EXISTS `contacto`;
CREATE TABLE IF NOT EXISTS `contacto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefono` decimal(15,0) DEFAULT NULL,
  `consulta` varchar(255) NOT NULL,
  `fecha` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- RELACIONES PARA LA TABLA `contacto`:
--

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id`, `nombre`, `apellido`, `email`, `telefono`, `consulta`, `fecha`) VALUES
(2, 'Yoel', 'Ibarra', 'yoelibarra98@gmail.com', '2325659628', 'Prueba de envio a base de datos', '2022-01-06'),
(3, 'Yoel', 'Ibarra', 'yoelibarra98@gmail.com', '303456', 'Prueba con include base-datos.php', '2022-01-06'),
(4, 'asdas', 'dasdasdas', 'asddasdsa@asdasdas.a', '0', 'dasdasdasdas', '2022-02-07'),
(5, 'dasd', 'asdas', '23123123', '0', 'asdasd', '2022-02-07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripto`
--
-- Creación: 15-02-2022 a las 15:22:41
--

DROP TABLE IF EXISTS `inscripto`;
CREATE TABLE IF NOT EXISTS `inscripto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `documento` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `telefono` decimal(15,0) DEFAULT NULL,
  `carrera` varchar(100) NOT NULL,
  `otro` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `documento` (`documento`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- RELACIONES PARA LA TABLA `inscripto`:
--

--
-- Volcado de datos para la tabla `inscripto`
--

INSERT INTO `inscripto` (`id`, `documento`, `nombre`, `apellido`, `mail`, `telefono`, `carrera`, `otro`) VALUES
(3, 40978427, 'Steven Yoel', 'Ibarraaaa', 'yoelibarra98@gmail.com', '12331231232', 'asdasdsad', ' asddas '),
(4, 303456, 'Yoel', 'ibarra', 'yoelibarra98@gmail.com', '2325659628', 'asasddas', 'asdasd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `integrantes`
--
-- Creación: 14-01-2022 a las 18:50:37
--

DROP TABLE IF EXISTS `integrantes`;
CREATE TABLE IF NOT EXISTS `integrantes` (
  `id_persona` int(11) NOT NULL AUTO_INCREMENT,
  `carrera` varchar(100) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `id_rol` int(11) NOT NULL,
  PRIMARY KEY (`id_persona`),
  KEY `id_rol` (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- RELACIONES PARA LA TABLA `integrantes`:
--   `id_rol`
--       `rol` -> `id_rol`
--

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
-- Creación: 14-01-2022 a las 18:50:37
--

DROP TABLE IF EXISTS `rol`;
CREATE TABLE IF NOT EXISTS `rol` (
  `id_rol` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  PRIMARY KEY (`id_rol`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELACIONES PARA LA TABLA `rol`:
--

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `descripcion`) VALUES
(0, 'Presidente'),
(1, 'Tesorero'),
(2, 'Secretario');

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
