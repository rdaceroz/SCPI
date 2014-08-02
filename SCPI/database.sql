-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 02-08-2014 a las 06:57:52
-- Versión del servidor: 5.5.8
-- Versión de PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `scpi`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asesor`
--

CREATE TABLE IF NOT EXISTS `asesor` (
  `cod_docente` varchar(10) NOT NULL,
  `cod_proyecto` varchar(10) NOT NULL,
  KEY `fk_asesor_docente` (`cod_docente`),
  KEY `fk_asesor_proyecto` (`cod_proyecto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `asesor`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

CREATE TABLE IF NOT EXISTS `docente` (
  `cod_docente` char(10) NOT NULL,
  `dni` char(8) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `paterno` varchar(50) NOT NULL,
  `materno` varchar(50) NOT NULL,
  `nacimiento` date NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  PRIMARY KEY (`cod_docente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `docente`
--

INSERT INTO `docente` (`cod_docente`, `dni`, `nombres`, `paterno`, `materno`, `nacimiento`, `direccion`, `telefono`) VALUES
('123456', '34645768', 'Pedro', 'Perez', 'Perez', '1989-07-02', 'Ninguno', '385746'),
('CYSEMZIHBH', '13905174', 'Pascale', 'Leonard', 'Gonzalez', '2010-03-21', 'Apdo.:881-1694 Nulla Avda.', '537-198'),
('DPDDGGMVZP', '71737384', 'Maile', 'Mckinney', 'Gallagher', '1994-08-14', '240-3893 Pretium Calle', '246-248'),
('EGRCRNBGKF', '48420736', 'Kennan', 'York', 'Rocha', '2003-12-13', '107 Diam Ctra.', '718-077'),
('HFVSQDZNOE', '10031908', 'Oleg', 'Browning', 'Dalton', '1997-10-10', '697-4112 Luctus C.', '146-017'),
('IFHBSVXJIV', '94237821', 'Tasha', 'Doyle', 'Newton', '2010-03-01', '642-7747 Donec Calle', '447-411'),
('KBJWHTUDWU', '63521527', 'Denise', 'Gould', 'Hayes', '2015-05-22', '726-3419 Penatibus Calle', '218-217'),
('WLJSQPJJQM', '70968993', 'Gail', 'Roberts', 'Fox', '1997-12-04', 'Apartado núm.: 952, 6673 Malesuada C.', '398-618'),
('XETZZBTTJY', '30853778', 'Iola', 'Hancock', 'Leon', '2011-11-17', '1116 Odio Ctra.', '464-630'),
('XQUKWAATBA', '26193999', 'Thor', 'Mayo', 'Ortega', '2004-10-28', 'Apdo.:264-9426 Diam. Ctra.', '297-908'),
('YJRMJUVASM', '14120277', 'Colorado', 'Mcguire', 'Fowler', '2007-04-17', '4108 Tincidunt Av.', '394-954');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE IF NOT EXISTS `estudiante` (
  `cod_estudiante` char(10) NOT NULL,
  `dni` char(8) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `paterno` varchar(50) NOT NULL,
  `materno` varchar(50) NOT NULL,
  `nacimiento` date NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  PRIMARY KEY (`cod_estudiante`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`cod_estudiante`, `dni`, `nombres`, `paterno`, `materno`, `nacimiento`, `direccion`, `telefono`) VALUES
('1234567890', '48576923', 'Gabriel', 'Alvarez', 'Garcia', '1990-08-14', 'Jr. Gardenias 450', '565867');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jurado`
--

CREATE TABLE IF NOT EXISTS `jurado` (
  `cod_docente` char(10) NOT NULL,
  `cod_proyecto` char(10) NOT NULL,
  `cargo` enum('Presidente','Vocal','Secretario') NOT NULL,
  `nota` int(50) NOT NULL,
  KEY `fk_jurado_docente` (`cod_docente`),
  KEY `fk_jurado_proyecto` (`cod_proyecto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `jurado`
--

INSERT INTO `jurado` (`cod_docente`, `cod_proyecto`, `cargo`, `nota`) VALUES
('WLJSQPJJQM', '56565656', 'Presidente', 20),
('XETZZBTTJY', '56565656', 'Vocal', 20),
('XQUKWAATBA', '56565656', 'Secretario', 20),
('DPDDGGMVZP', '12121212', 'Presidente', 0),
('HFVSQDZNOE', '12121212', 'Vocal', 0),
('KBJWHTUDWU', '12121212', 'Secretario', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectista`
--

CREATE TABLE IF NOT EXISTS `proyectista` (
  `cod_estudiante` char(10) NOT NULL,
  `cod_proyecto` char(10) NOT NULL,
  KEY `fk_proyectista_estudiante` (`cod_estudiante`),
  KEY `fk_proyectista_proyecto` (`cod_proyecto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `proyectista`
--

INSERT INTO `proyectista` (`cod_estudiante`, `cod_proyecto`) VALUES
('1234567890', '56565656');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto`
--

CREATE TABLE IF NOT EXISTS `proyecto` (
  `cod_proyecto` char(10) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `presentacion` date NOT NULL,
  `descripcion` text NOT NULL,
  `tema` varchar(50) NOT NULL,
  PRIMARY KEY (`cod_proyecto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `proyecto`
--

INSERT INTO `proyecto` (`cod_proyecto`, `titulo`, `presentacion`, `descripcion`, `tema`) VALUES
('12121212', 'dsddfgdg', '2014-07-26', 'wrwefsdfasfsa', 'fdgdfgsd'),
('34343434', '3asfasdfa', '2014-09-21', 'dfsdf', 'sfsdfsdg'),
('56565656', 'hellooooo', '2014-06-13', 'lalalalalala', 'tutitototo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL,
  `username` varchar(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` int(11) NOT NULL,
  `email` varchar(60) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `role` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `role` (`role`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `username`, `password`, `email`, `role`) VALUES
(1, 'admin', 123, 'admin@gmail.com', 1);

--
-- Filtros para las tablas descargadas (dump)
--

--
-- Filtros para la tabla `asesor`
--
ALTER TABLE `asesor`
  ADD CONSTRAINT `asesor_ibfk_1` FOREIGN KEY (`cod_docente`) REFERENCES `docente` (`cod_docente`),
  ADD CONSTRAINT `asesor_ibfk_2` FOREIGN KEY (`cod_proyecto`) REFERENCES `proyecto` (`cod_proyecto`);

--
-- Filtros para la tabla `jurado`
--
ALTER TABLE `jurado`
  ADD CONSTRAINT `jurado_ibfk_1` FOREIGN KEY (`cod_docente`) REFERENCES `docente` (`cod_docente`),
  ADD CONSTRAINT `jurado_ibfk_2` FOREIGN KEY (`cod_proyecto`) REFERENCES `proyecto` (`cod_proyecto`);

--
-- Filtros para la tabla `proyectista`
--
ALTER TABLE `proyectista`
  ADD CONSTRAINT `proyectista_ibfk_1` FOREIGN KEY (`cod_estudiante`) REFERENCES `estudiante` (`cod_estudiante`),
  ADD CONSTRAINT `proyectista_ibfk_2` FOREIGN KEY (`cod_proyecto`) REFERENCES `proyecto` (`cod_proyecto`);
