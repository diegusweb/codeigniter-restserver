-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-10-2015 a las 04:40:40
-- Versión del servidor: 5.5.27
-- Versión de PHP: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `2015_busbo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `address`
--

CREATE TABLE IF NOT EXISTS `address` (
  `id_address` int(11) NOT NULL,
  `id_transport` int(11) NOT NULL,
  `id_city` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `lat` double NOT NULL,
  `lng` double NOT NULL,
  `sense_street` int(5) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `address`
--

INSERT INTO `address` (`id_address`, `id_transport`, `id_city`, `name`, `address`, `lat`, `lng`, `sense_street`, `create_date`) VALUES
(1, 1, 1, 'Mexico, Cochabamba, Bolivia', 'Mexico', -17.388970233474, -66.163685917854, 1, '2015-10-22 01:06:11'),
(2, 1, 1, 'Mexico, Cochabamba, Bolivia', 'Mexico', -17.388775701767, -66.162575483322, 1, '2015-10-22 01:06:11'),
(3, 1, 1, 'Mexico, Cochabamba, Bolivia', 'Mexico', -17.388565812061, -66.161448955536, 1, '2015-10-22 01:06:11'),
(4, 1, 1, 'Mexico, Cochabamba, Bolivia', 'Mexico', -17.388376399192, -66.160306334496, 1, '2015-10-22 01:06:11'),
(5, 1, 1, 'Av Ayacucho 250, Cochabamba, Bolivia', 'Av Ayacucho 250', -17.388294490864, -66.159732341766, 1, '2015-10-22 01:06:11'),
(6, 1, 1, 'Mexico, Cochabamba, Bolivia', 'Mexico', -17.388376399192, -66.15969479084, 1, '2015-10-22 01:06:11'),
(7, 1, 1, 'Mexico, Cochabamba, Bolivia', 'Mexico', -17.388294490864, -66.159292459488, 1, '2015-10-22 01:06:11'),
(8, 1, 1, 'Mexico, Cochabamba, Bolivia', 'Mexico', -17.388146031926, -66.158466339111, 1, '2015-10-22 01:06:11'),
(9, 1, 1, 'Mexico, Cochabamba, Bolivia', 'Mexico', -17.387992453588, -66.157597303391, 1, '2015-10-22 01:06:11'),
(10, 1, 1, 'Mexico, Cochabamba, Bolivia', 'Mexico', -17.387818397982, -66.156803369522, 1, '2015-10-22 01:06:11'),
(11, 1, 1, 'Paccieri, Cochabamba, Bolivia', 'Paccieri', -17.387362781052, -66.154689788818, 1, '2015-10-22 01:06:11'),
(12, 1, 1, 'Paccieri, Cochabamba, Bolivia', 'Paccieri', -17.387265514369, -66.154325008392, 1, '2015-10-22 01:06:11'),
(13, 1, 1, 'Lanza, Cochabamba, Bolivia', 'Lanza', -17.387818397982, -66.154206991196, 1, '2015-10-22 01:06:12'),
(14, 1, 1, 'Lanza, Cochabamba, Bolivia', 'Lanza', -17.388888325412, -66.15397632122, 1, '2015-10-22 01:06:12'),
(15, 1, 1, 'Lanza, Cochabamba, Bolivia', 'Lanza', -17.38997360426, -66.153751015663, 1, '2015-10-22 01:06:12'),
(16, 1, 1, 'Lanza, Cochabamba, Bolivia', 'Lanza', -17.391053757476, -66.153536438942, 1, '2015-10-22 01:06:12'),
(17, 1, 1, 'Lanza, Cochabamba, Bolivia', 'Lanza', -17.39211854682, -66.153327226639, 1, '2015-10-22 01:06:12'),
(18, 1, 1, 'Lanza, Cochabamba, Bolivia', 'Lanza', -17.392963207036, -66.153166294098, 1, '2015-10-22 01:06:12'),
(19, 1, 1, 'Sucre, Cochabamba, Bolivia', 'Sucre', -17.393659408887, -66.153010725975, 1, '2015-10-22 01:06:12'),
(20, 1, 1, 'Sucre, Cochabamba, Bolivia', 'Sucre', -17.393557026428, -66.152468919754, 1, '2015-10-22 01:06:12'),
(21, 1, 1, 'Sucre, Cochabamba, Bolivia', 'Sucre', -17.393367618728, -66.151347756386, 1, '2015-10-22 01:06:12'),
(22, 1, 1, 'Sucre, Cochabamba, Bolivia', 'Sucre', -17.393162853426, -66.150199770927, 1, '2015-10-22 01:06:12'),
(23, 1, 1, 'Sucre, Cochabamba, Bolivia', 'Sucre', -17.392942730471, -66.149024963379, 1, '2015-10-22 01:06:12'),
(24, 1, 1, 'Sucre, Cochabamba, Bolivia', 'Sucre', -17.392732845546, -66.147893071175, 1, '2015-10-22 01:06:12'),
(25, 1, 1, 'Sucre, Cochabamba, Bolivia', 'Sucre', -17.392441053908, -66.146224737167, 1, '2015-10-22 01:06:12'),
(26, 1, 1, 'Sucre, Cochabamba, Bolivia', 'Sucre', -17.392236287569, -66.145044565201, 1, '2015-10-22 01:06:12'),
(27, 1, 1, 'Sucre, Cochabamba, Bolivia', 'Sucre', -17.392031521001, -66.14390194416, 1, '2015-10-22 01:06:12'),
(28, 1, 1, 'Av Pdte Manuel Isidoro Belzu, Cochabamba, Bolivia', 'Av Pdte Manuel Isidoro Belzu', -17.391857469237, -66.142796874046, 1, '2015-10-22 01:06:12'),
(29, 1, 1, 'Av Pdte Manuel Isidoro Belzu, Cochabamba, Bolivia', 'Av Pdte Manuel Isidoro Belzu', -17.391775562468, -66.142823696136, 2, '2015-10-22 01:07:51'),
(30, 1, 1, 'Av Pdte Manuel Isidoro Belzu, Cochabamba, Bolivia', 'Av Pdte Manuel Isidoro Belzu', -17.390741486349, -66.143311858177, 2, '2015-10-22 01:07:51'),
(31, 1, 1, 'Av Pdte Manuel Isidoro Belzu, Cochabamba, Bolivia', 'Av Pdte Manuel Isidoro Belzu', -17.389881458193, -66.143708825111, 2, '2015-10-22 01:07:51'),
(32, 1, 1, 'Av Pdte Manuel Isidoro Belzu, Cochabamba, Bolivia', 'Av Pdte Manuel Isidoro Belzu', -17.38972276208, -66.14376783371, 2, '2015-10-22 01:07:51'),
(33, 1, 1, 'Av Heroínas, Cochabamba, Bolivia', 'Av Heroínas', -17.389891696647, -66.144433021545, 2, '2015-10-22 01:07:51'),
(34, 1, 1, 'Av Heroínas, Cochabamba, Bolivia', 'Av Heroínas', -17.390111823274, -66.145597100258, 2, '2015-10-22 01:07:51'),
(35, 1, 1, 'Av Heroínas, Cochabamba, Bolivia', 'Av Heroínas', -17.390321711206, -66.14673435688, 2, '2015-10-22 01:07:51'),
(36, 1, 1, 'Av Heroínas, Cochabamba, Bolivia', 'Av Heroínas', -17.390541837316, -66.147898435593, 2, '2015-10-22 01:07:51'),
(37, 1, 1, 'Av Heroínas, Cochabamba, Bolivia', 'Av Heroínas', -17.390777320767, -66.149057149887, 2, '2015-10-22 01:07:51'),
(38, 1, 1, 'Av Heroínas, Cochabamba, Bolivia', 'Av Heroínas', -17.391002565524, -66.150189042091, 2, '2015-10-22 01:07:51'),
(39, 1, 1, 'Av Heroínas, Cochabamba, Bolivia', 'Av Heroínas', -17.391207333245, -66.151342391968, 2, '2015-10-22 01:07:51'),
(40, 1, 1, 'Antezana, Cochabamba, Bolivia', 'Antezana', -17.391381385627, -66.152350902557, 2, '2015-10-22 01:07:51'),
(41, 1, 1, 'Antezana, Cochabamba, Bolivia', 'Antezana', -17.390848989584, -66.152447462082, 2, '2015-10-22 01:07:51'),
(42, 1, 1, 'Colombia E-950, Cochabamba, Bolivia', 'Colombia E-950', -17.390214207661, -66.152554750443, 2, '2015-10-22 01:07:52'),
(43, 1, 1, 'Antezana, Cochabamba, Bolivia', 'Antezana', -17.389251792158, -66.15280687809, 2, '2015-10-22 01:07:52'),
(44, 1, 1, 'Antezana, Cochabamba, Bolivia', 'Antezana', -17.388637481743, -66.152914166451, 2, '2015-10-22 01:07:52'),
(45, 1, 1, 'Antezana, Cochabamba, Bolivia', 'Antezana', -17.387547075677, -66.15316092968, 2, '2015-10-22 01:07:52'),
(46, 1, 1, 'Antezana, Cochabamba, Bolivia', 'Antezana', -17.386646077968, -66.153472065926, 2, '2015-10-22 01:07:52');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `id_city` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `pref` varchar(10) NOT NULL,
  `cod` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `city`
--

INSERT INTO `city` (`id_city`, `name`, `pref`, `cod`) VALUES
(1, 'Cochabamba', 'cbba', 1),
(2, 'Santa cruz', 'scz', 233),
(3, 'La Paz', 'lpz', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transport`
--

CREATE TABLE IF NOT EXISTS `transport` (
  `id_transport` int(11) NOT NULL,
  `id_type` int(5) NOT NULL,
  `id_city` int(5) NOT NULL,
  `line` varchar(150) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `transport`
--

INSERT INTO `transport` (`id_transport`, `id_type`, `id_city`, `line`, `create_date`) VALUES
(1, 1, 1, 'G', '2015-10-03 14:27:15'),
(2, 2, 1, '207', '2015-10-03 14:27:15'),
(3, 1, 1, 'H', '2015-10-03 14:47:24'),
(4, 2, 1, '260', '2015-10-04 00:50:07'),
(5, 1, 2, '12z', '2015-10-04 00:50:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `type`
--

CREATE TABLE IF NOT EXISTS `type` (
  `id_type` int(11) NOT NULL,
  `name` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `type`
--

INSERT INTO `type` (`id_type`, `name`) VALUES
(1, 'Micro'),
(2, 'Trufi');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id_address`);

--
-- Indices de la tabla `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id_city`);

--
-- Indices de la tabla `transport`
--
ALTER TABLE `transport`
  ADD PRIMARY KEY (`id_transport`);

--
-- Indices de la tabla `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id_type`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `address`
--
ALTER TABLE `address`
  MODIFY `id_address` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT de la tabla `city`
--
ALTER TABLE `city`
  MODIFY `id_city` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `transport`
--
ALTER TABLE `transport`
  MODIFY `id_transport` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `type`
--
ALTER TABLE `type`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
