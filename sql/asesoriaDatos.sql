-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-11-2019 a las 03:56:43
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `asesoria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asesoria`
--

CREATE TABLE `asesoria` (
  `idBitacora` int(11) NOT NULL,
  `materia` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nombreAlumno` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `matriculaAlumno` varchar(9) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(600) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `idCita` int(11) NOT NULL,
  `noTrabajador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `asesoria`
--

INSERT INTO `asesoria` (`idBitacora`, `materia`, `nombreAlumno`, `matriculaAlumno`, `descripcion`, `idCita`, `noTrabajador`) VALUES
(1, 'Proyectos ID+1', 'Alejandro', '201527112', 'Se van a ver temas del proyecto y más', 2, 201527111),
(2, 'PDI', 'Arturo Espinoza Quintero', '201527100', 'Duda sobre la implementación de la interfaz con el editor de imagenes en python', 13, 201527111),
(3, 'PRoyectos', 'Edson', '201527111', 'Duda con la implementación', 14, 201527111),
(4, 'Proyectos', 'Erik de Jesus G. Arteaga', '201525083', 'Clase de Administración del proyecto', 15, 201527111);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cita`
--

CREATE TABLE `cita` (
  `idCita` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `noTrabajador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cita`
--

INSERT INTO `cita` (`idCita`, `fecha`, `hora`, `noTrabajador`) VALUES
(2, '2019-10-26', '08:00:00', 201527111),
(13, '2019-11-04', '13:00:00', 201527111),
(14, '2019-11-06', '13:00:00', 201527111),
(15, '2019-11-13', '13:00:00', 201527111),
(16, '2019-11-20', '14:00:00', 201527111);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jueves`
--

CREATE TABLE `jueves` (
  `noTrabajador` int(11) NOT NULL,
  `siete` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ocho` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nueve` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `diez` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `once` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `doce` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `trece` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `catorce` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `quince` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `diezseis` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `diezsiete` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `diezocho` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `dieznueve` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `jueves`
--

INSERT INTO `jueves` (`noTrabajador`, `siete`, `ocho`, `nueve`, `diez`, `once`, `doce`, `trece`, `catorce`, `quince`, `diezseis`, `diezsiete`, `diezocho`, `dieznueve`) VALUES
(100397077, '', '', '', '', '', '', '', '', '', '', '', '', NULL),
(201527111, 'Investigación', '', '', '', '', '', '', '', '', '', '', '', ''),
(201527200, 'Investigación', '', '', '', '', '', '', '', '', '', '', '', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lunes`
--

CREATE TABLE `lunes` (
  `noTrabajador` int(11) NOT NULL,
  `siete` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ocho` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nueve` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `diez` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `once` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `doce` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `trece` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `catorce` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `quince` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `diezseis` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `diezsiete` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `diezocho` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `dieznueve` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `lunes`
--

INSERT INTO `lunes` (`noTrabajador`, `siete`, `ocho`, `nueve`, `diez`, `once`, `doce`, `trece`, `catorce`, `quince`, `diezseis`, `diezsiete`, `diezocho`, `dieznueve`) VALUES
(100397077, '', '', 'Asesoría', 'Asesoría', 'Investigación', 'Investigación', '', '', 'Docencia', '', '', '', NULL),
(201527111, 'Tutoría', '', '', '', '', '', '', '', '', '', '', '', ''),
(201527200, 'Tutoría', '', '', '', '', '', '', '', '', '', '', '', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `martes`
--

CREATE TABLE `martes` (
  `noTrabajador` int(11) NOT NULL,
  `siete` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ocho` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nueve` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `diez` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `once` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `doce` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `trece` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `catorce` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `quince` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `diezseis` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `diezsiete` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `diezocho` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `dieznueve` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `martes`
--

INSERT INTO `martes` (`noTrabajador`, `siete`, `ocho`, `nueve`, `diez`, `once`, `doce`, `trece`, `catorce`, `quince`, `diezseis`, `diezsiete`, `diezocho`, `dieznueve`) VALUES
(100397077, '', '', '', '', '', '', '', '', '', '', '', '', NULL),
(201527111, 'Asesoría', '', '', '', '', '', '', '', '', '', '', '', ''),
(201527200, 'Asesoría', '', '', '', '', '', '', '', '', '', '', '', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `miercoles`
--

CREATE TABLE `miercoles` (
  `noTrabajador` int(11) NOT NULL,
  `siete` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ocho` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nueve` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `diez` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `once` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `doce` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `trece` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `catorce` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `quince` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `diezseis` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `diezsiete` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `diezocho` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `dieznueve` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `miercoles`
--

INSERT INTO `miercoles` (`noTrabajador`, `siete`, `ocho`, `nueve`, `diez`, `once`, `doce`, `trece`, `catorce`, `quince`, `diezseis`, `diezsiete`, `diezocho`, `dieznueve`) VALUES
(100397077, '', '', '', '', '', '', '', '', 'Docencia', 'Docencia', '', '', NULL),
(201527111, 'Docencia', '', '', '', '', '', '', '', '', '', '', '', ''),
(201527200, 'Docencia', '', '', '', '', '', '', '', '', '', '', '', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE `profesor` (
  `noTrabajador` int(11) NOT NULL,
  `contra` varchar(8) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `cubiculo` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `edificio` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`noTrabajador`, `contra`, `nombre`, `email`, `cubiculo`, `edificio`) VALUES
(100397077, 'amonra', 'Miguel Angel Peña Azpiri', 'miguel.pena@correo.buap.mx', '0', 'CUDS'),
(201527111, 'arturo', 'Arturo Hernandéz Quintero', 'arturo@gmail.com', '202', '4'),
(201527112, '12345678', 'Aisha', 'fox@gmail.com', '202', 'CC05'),
(201527120, 'josue', 'Josue Perez Lucero', 'josue.buap@gmail.com', '202', 'CC03'),
(201527200, 'erick', 'Erick Romero Benitez', 'erickRB@gmail.com', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `viernes`
--

CREATE TABLE `viernes` (
  `noTrabajador` int(11) NOT NULL,
  `siete` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ocho` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nueve` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `diez` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `once` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `doce` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `trece` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `catorce` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `quince` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `diezseis` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `diezsiete` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `diezocho` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `dieznueve` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `viernes`
--

INSERT INTO `viernes` (`noTrabajador`, `siete`, `ocho`, `nueve`, `diez`, `once`, `doce`, `trece`, `catorce`, `quince`, `diezseis`, `diezsiete`, `diezocho`, `dieznueve`) VALUES
(100397077, '', '', '', '', '', '', '', '', 'Docencia', 'Docencia', '', '', NULL),
(201527111, 'Gestión Académica', '', '', '', '', '', '', '', '', '', '', '', ''),
(201527200, 'Gestión Académica', '', '', '', '', '', '', '', '', '', '', '', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asesoria`
--
ALTER TABLE `asesoria`
  ADD PRIMARY KEY (`idBitacora`,`idCita`,`noTrabajador`),
  ADD KEY `idCita` (`idCita`,`noTrabajador`);

--
-- Indices de la tabla `cita`
--
ALTER TABLE `cita`
  ADD PRIMARY KEY (`idCita`,`noTrabajador`),
  ADD KEY `noTrabajador` (`noTrabajador`);

--
-- Indices de la tabla `jueves`
--
ALTER TABLE `jueves`
  ADD PRIMARY KEY (`noTrabajador`);

--
-- Indices de la tabla `lunes`
--
ALTER TABLE `lunes`
  ADD PRIMARY KEY (`noTrabajador`);

--
-- Indices de la tabla `martes`
--
ALTER TABLE `martes`
  ADD PRIMARY KEY (`noTrabajador`);

--
-- Indices de la tabla `miercoles`
--
ALTER TABLE `miercoles`
  ADD PRIMARY KEY (`noTrabajador`);

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`noTrabajador`);

--
-- Indices de la tabla `viernes`
--
ALTER TABLE `viernes`
  ADD PRIMARY KEY (`noTrabajador`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asesoria`
--
ALTER TABLE `asesoria`
  MODIFY `idBitacora` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `cita`
--
ALTER TABLE `cita`
  MODIFY `idCita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asesoria`
--
ALTER TABLE `asesoria`
  ADD CONSTRAINT `asesoria_ibfk_1` FOREIGN KEY (`idCita`,`noTrabajador`) REFERENCES `cita` (`idCita`, `noTrabajador`);

--
-- Filtros para la tabla `cita`
--
ALTER TABLE `cita`
  ADD CONSTRAINT `cita_ibfk_1` FOREIGN KEY (`noTrabajador`) REFERENCES `profesor` (`noTrabajador`);

--
-- Filtros para la tabla `jueves`
--
ALTER TABLE `jueves`
  ADD CONSTRAINT `jueves_ibfk_1` FOREIGN KEY (`noTrabajador`) REFERENCES `profesor` (`noTrabajador`);

--
-- Filtros para la tabla `lunes`
--
ALTER TABLE `lunes`
  ADD CONSTRAINT `lunes_ibfk_1` FOREIGN KEY (`noTrabajador`) REFERENCES `profesor` (`noTrabajador`);

--
-- Filtros para la tabla `martes`
--
ALTER TABLE `martes`
  ADD CONSTRAINT `martes_ibfk_1` FOREIGN KEY (`noTrabajador`) REFERENCES `profesor` (`noTrabajador`);

--
-- Filtros para la tabla `miercoles`
--
ALTER TABLE `miercoles`
  ADD CONSTRAINT `miercoles_ibfk_1` FOREIGN KEY (`noTrabajador`) REFERENCES `profesor` (`noTrabajador`);

--
-- Filtros para la tabla `viernes`
--
ALTER TABLE `viernes`
  ADD CONSTRAINT `viernes_ibfk_1` FOREIGN KEY (`noTrabajador`) REFERENCES `profesor` (`noTrabajador`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
