-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-10-2015 a las 20:21:01
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

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
) ENGINE=InnoDB AUTO_INCREMENT=161 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `address`
--

INSERT INTO `address` (`id_address`, `id_transport`, `id_city`, `name`, `address`, `lat`, `lng`, `sense_street`, `create_date`) VALUES
(1, 1, 1, 'Mexico, Cochabamba, Bolivia', 'Mexico', -17.388970233474, -66.163685917854, 1, '2015-10-22 05:06:11'),
(2, 1, 1, 'Mexico, Cochabamba, Bolivia', 'Mexico', -17.388775701767, -66.162575483322, 1, '2015-10-22 05:06:11'),
(3, 1, 1, 'Mexico, Cochabamba, Bolivia', 'Mexico', -17.388565812061, -66.161448955536, 1, '2015-10-22 05:06:11'),
(4, 1, 1, 'Mexico, Cochabamba, Bolivia', 'Mexico', -17.388376399192, -66.160306334496, 1, '2015-10-22 05:06:11'),
(5, 1, 1, 'Av Ayacucho 250, Cochabamba, Bolivia', 'Av Ayacucho 250', -17.388294490864, -66.159732341766, 1, '2015-10-22 05:06:11'),
(6, 1, 1, 'Mexico, Cochabamba, Bolivia', 'Mexico', -17.388376399192, -66.15969479084, 1, '2015-10-22 05:06:11'),
(7, 1, 1, 'Mexico, Cochabamba, Bolivia', 'Mexico', -17.388294490864, -66.159292459488, 1, '2015-10-22 05:06:11'),
(8, 1, 1, 'Mexico, Cochabamba, Bolivia', 'Mexico', -17.388146031926, -66.158466339111, 1, '2015-10-22 05:06:11'),
(9, 1, 1, 'Mexico, Cochabamba, Bolivia', 'Mexico', -17.387992453588, -66.157597303391, 1, '2015-10-22 05:06:11'),
(10, 1, 1, 'Mexico, Cochabamba, Bolivia', 'Mexico', -17.387818397982, -66.156803369522, 1, '2015-10-22 05:06:11'),
(11, 1, 1, 'Paccieri, Cochabamba, Bolivia', 'Paccieri', -17.387362781052, -66.154689788818, 1, '2015-10-22 05:06:11'),
(12, 1, 1, 'Paccieri, Cochabamba, Bolivia', 'Paccieri', -17.387265514369, -66.154325008392, 1, '2015-10-22 05:06:11'),
(13, 1, 1, 'Lanza, Cochabamba, Bolivia', 'Lanza', -17.387818397982, -66.154206991196, 1, '2015-10-22 05:06:12'),
(14, 1, 1, 'Lanza, Cochabamba, Bolivia', 'Lanza', -17.388888325412, -66.15397632122, 1, '2015-10-22 05:06:12'),
(15, 1, 1, 'Lanza, Cochabamba, Bolivia', 'Lanza', -17.38997360426, -66.153751015663, 1, '2015-10-22 05:06:12'),
(16, 1, 1, 'Lanza, Cochabamba, Bolivia', 'Lanza', -17.391053757476, -66.153536438942, 1, '2015-10-22 05:06:12'),
(17, 1, 1, 'Lanza, Cochabamba, Bolivia', 'Lanza', -17.39211854682, -66.153327226639, 1, '2015-10-22 05:06:12'),
(18, 1, 1, 'Lanza, Cochabamba, Bolivia', 'Lanza', -17.392963207036, -66.153166294098, 1, '2015-10-22 05:06:12'),
(19, 1, 1, 'Sucre, Cochabamba, Bolivia', 'Sucre', -17.393659408887, -66.153010725975, 1, '2015-10-22 05:06:12'),
(20, 1, 1, 'Sucre, Cochabamba, Bolivia', 'Sucre', -17.393557026428, -66.152468919754, 1, '2015-10-22 05:06:12'),
(21, 1, 1, 'Sucre, Cochabamba, Bolivia', 'Sucre', -17.393367618728, -66.151347756386, 1, '2015-10-22 05:06:12'),
(22, 1, 1, 'Sucre, Cochabamba, Bolivia', 'Sucre', -17.393162853426, -66.150199770927, 1, '2015-10-22 05:06:12'),
(23, 1, 1, 'Sucre, Cochabamba, Bolivia', 'Sucre', -17.392942730471, -66.149024963379, 1, '2015-10-22 05:06:12'),
(24, 1, 1, 'Sucre, Cochabamba, Bolivia', 'Sucre', -17.392732845546, -66.147893071175, 1, '2015-10-22 05:06:12'),
(25, 1, 1, 'Sucre, Cochabamba, Bolivia', 'Sucre', -17.392441053908, -66.146224737167, 1, '2015-10-22 05:06:12'),
(26, 1, 1, 'Sucre, Cochabamba, Bolivia', 'Sucre', -17.392236287569, -66.145044565201, 1, '2015-10-22 05:06:12'),
(27, 1, 1, 'Sucre, Cochabamba, Bolivia', 'Sucre', -17.392031521001, -66.14390194416, 1, '2015-10-22 05:06:12'),
(28, 1, 1, 'Av Pdte Manuel Isidoro Belzu, Cochabamba, Bolivia', 'Av Pdte Manuel Isidoro Belzu', -17.391857469237, -66.142796874046, 1, '2015-10-22 05:06:12'),
(29, 1, 1, 'Av Pdte Manuel Isidoro Belzu, Cochabamba, Bolivia', 'Av Pdte Manuel Isidoro Belzu', -17.391775562468, -66.142823696136, 2, '2015-10-22 05:07:51'),
(30, 1, 1, 'Av Pdte Manuel Isidoro Belzu, Cochabamba, Bolivia', 'Av Pdte Manuel Isidoro Belzu', -17.390741486349, -66.143311858177, 2, '2015-10-22 05:07:51'),
(31, 1, 1, 'Av Pdte Manuel Isidoro Belzu, Cochabamba, Bolivia', 'Av Pdte Manuel Isidoro Belzu', -17.389881458193, -66.143708825111, 2, '2015-10-22 05:07:51'),
(32, 1, 1, 'Av Pdte Manuel Isidoro Belzu, Cochabamba, Bolivia', 'Av Pdte Manuel Isidoro Belzu', -17.38972276208, -66.14376783371, 2, '2015-10-22 05:07:51'),
(33, 1, 1, 'Av Heroínas, Cochabamba, Bolivia', 'Av Heroínas', -17.389891696647, -66.144433021545, 2, '2015-10-22 05:07:51'),
(34, 1, 1, 'Av Heroínas, Cochabamba, Bolivia', 'Av Heroínas', -17.390111823274, -66.145597100258, 2, '2015-10-22 05:07:51'),
(35, 1, 1, 'Av Heroínas, Cochabamba, Bolivia', 'Av Heroínas', -17.390321711206, -66.14673435688, 2, '2015-10-22 05:07:51'),
(36, 1, 1, 'Av Heroínas, Cochabamba, Bolivia', 'Av Heroínas', -17.390541837316, -66.147898435593, 2, '2015-10-22 05:07:51'),
(37, 1, 1, 'Av Heroínas, Cochabamba, Bolivia', 'Av Heroínas', -17.390777320767, -66.149057149887, 2, '2015-10-22 05:07:51'),
(38, 1, 1, 'Av Heroínas, Cochabamba, Bolivia', 'Av Heroínas', -17.391002565524, -66.150189042091, 2, '2015-10-22 05:07:51'),
(39, 1, 1, 'Av Heroínas, Cochabamba, Bolivia', 'Av Heroínas', -17.391207333245, -66.151342391968, 2, '2015-10-22 05:07:51'),
(40, 1, 1, 'Antezana, Cochabamba, Bolivia', 'Antezana', -17.391381385627, -66.152350902557, 2, '2015-10-22 05:07:51'),
(41, 1, 1, 'Antezana, Cochabamba, Bolivia', 'Antezana', -17.390848989584, -66.152447462082, 2, '2015-10-22 05:07:51'),
(42, 1, 1, 'Colombia E-950, Cochabamba, Bolivia', 'Colombia E-950', -17.390214207661, -66.152554750443, 2, '2015-10-22 05:07:52'),
(43, 1, 1, 'Antezana, Cochabamba, Bolivia', 'Antezana', -17.389251792158, -66.15280687809, 2, '2015-10-22 05:07:52'),
(44, 1, 1, 'Antezana, Cochabamba, Bolivia', 'Antezana', -17.388637481743, -66.152914166451, 2, '2015-10-22 05:07:52'),
(45, 1, 1, 'Antezana, Cochabamba, Bolivia', 'Antezana', -17.387547075677, -66.15316092968, 2, '2015-10-22 05:07:52'),
(46, 1, 1, 'Antezana, Cochabamba, Bolivia', 'Antezana', -17.386646077968, -66.153472065926, 2, '2015-10-22 05:07:52'),
(47, 3, 1, 'Av. Barrientos, Cochabamba, Bolivia', 'Av. Barrientos', -17.411908166355, -66.153573989868, 1, '2015-10-27 15:18:32'),
(48, 3, 1, 'Av. Barrientos, Cochabamba, Bolivia', 'Av. Barrientos', -17.409753218625, -66.153536438942, 1, '2015-10-27 15:18:32'),
(49, 3, 1, 'Av. Barrientos, Cochabamba, Bolivia', 'Av. Barrientos', -17.408299510313, -66.153498888016, 1, '2015-10-27 15:18:32'),
(50, 3, 1, 'Av. Barrientos, Cochabamba, Bolivia', 'Av. Barrientos', -17.406625683955, -66.153434514999, 1, '2015-10-27 15:18:32'),
(51, 3, 1, 'Av. Barrientos, Cochabamba, Bolivia', 'Av. Barrientos', -17.404567931461, -66.153359413147, 1, '2015-10-27 15:18:32'),
(52, 3, 1, 'Av. Barrientos, Cochabamba, Bolivia', 'Av. Barrientos', -17.402981091578, -66.153332591057, 1, '2015-10-27 15:18:32'),
(53, 3, 1, 'San Martin, Cochabamba, Bolivia', 'San Martin', -17.401773036497, -66.153311133385, 1, '2015-10-27 15:18:32'),
(54, 3, 1, 'San Martin, Cochabamba, Bolivia', 'San Martin', -17.400657114116, -66.15326821804, 1, '2015-10-27 15:18:32'),
(55, 3, 1, 'San Martin, Cochabamba, Bolivia', 'San Martin', -17.399976295741, -66.15326821804, 1, '2015-10-27 15:18:32'),
(56, 3, 1, 'San Martin, Cochabamba, Bolivia', 'San Martin', -17.39925964208, -66.153209209442, 1, '2015-10-27 15:18:32'),
(57, 3, 1, 'San Martin, Cochabamba, Bolivia', 'San Martin', -17.39839453499, -66.153305768967, 1, '2015-10-27 15:18:32'),
(58, 3, 1, 'San Martin, Cochabamba, Bolivia', 'San Martin', -17.397514066768, -66.15346133709, 1, '2015-10-27 15:18:32'),
(59, 3, 1, 'San Martin, Cochabamba, Bolivia', 'San Martin', -17.396664308532, -66.153649091721, 1, '2015-10-27 15:18:32'),
(60, 3, 1, 'San Martin, Cochabamba, Bolivia', 'San Martin', -17.395794070102, -66.153810024261, 1, '2015-10-27 15:18:33'),
(61, 3, 1, 'San Martin, Cochabamba, Bolivia', 'San Martin', -17.39405869993, -66.154142618179, 1, '2015-10-27 15:18:33'),
(62, 3, 1, 'San Martin, Cochabamba, Bolivia', 'San Martin', -17.392318194132, -66.154480576515, 1, '2015-10-27 15:18:33'),
(63, 3, 1, 'San Martin, Cochabamba, Bolivia', 'San Martin', -17.391263644327, -66.154679059982, 1, '2015-10-27 15:18:33'),
(64, 3, 1, 'San Martin, Cochabamba, Bolivia', 'San Martin', -17.390193730788, -66.154888272285, 1, '2015-10-27 15:18:33'),
(65, 3, 1, 'San Martin, Cochabamba, Bolivia', 'San Martin', -17.388059004217, -66.155274510384, 1, '2015-10-27 15:18:33'),
(66, 3, 1, 'San Martin, Cochabamba, Bolivia', 'San Martin', -17.387531717799, -66.155376434326, 1, '2015-10-27 15:18:33'),
(67, 3, 1, 'Mexico, Cochabamba, Bolivia', 'Mexico', -17.387582910721, -66.155671477318, 1, '2015-10-27 15:18:33'),
(68, 3, 1, 'Av José Ballivian, Cochabamba, Bolivia', 'Av José Ballivian', -17.386825254002, -66.156315207481, 1, '2015-10-27 15:18:33'),
(69, 3, 1, 'Av José Ballivian, Cochabamba, Bolivia', 'Av José Ballivian', -17.385550540685, -66.157221794128, 1, '2015-10-27 15:18:33'),
(70, 3, 1, 'Av José Ballivian, Cochabamba, Bolivia', 'Av José Ballivian', -17.38432189294, -66.158117651939, 1, '2015-10-27 15:18:33'),
(71, 3, 1, 'Av José Ballivian, Cochabamba, Bolivia', 'Av José Ballivian', -17.383088117529, -66.159061789513, 1, '2015-10-27 15:18:33'),
(72, 3, 1, 'Av José Ballivian, Cochabamba, Bolivia', 'Av José Ballivian', -17.382571055651, -66.159448027611, 1, '2015-10-27 15:18:33'),
(73, 3, 1, 'Av Ramón Rivero, Cochabamba, Bolivia', 'Av Ramón Rivero', -17.382299725566, -66.159410476685, 1, '2015-10-27 15:18:33'),
(74, 3, 1, 'Av Ramón Rivero, Cochabamba, Bolivia', 'Av Ramón Rivero', -17.382207575635, -66.159136891365, 1, '2015-10-27 15:18:33'),
(75, 3, 1, 'Av Ramón Rivero, Cochabamba, Bolivia', 'Av Ramón Rivero', -17.382023275632, -66.15814447403, 1, '2015-10-27 15:18:33'),
(76, 3, 1, 'Av Ramón Rivero, Cochabamba, Bolivia', 'Av Ramón Rivero', -17.381644436156, -66.15577340126, 1, '2015-10-27 15:18:33'),
(77, 3, 1, 'Av Ramón Rivero, Cochabamba, Bolivia', 'Av Ramón Rivero', -17.381526688591, -66.155306696892, 1, '2015-10-27 15:18:33'),
(78, 3, 1, 'Av Ramón Rivero, Cochabamba, Bolivia', 'Av Ramón Rivero', -17.381347507369, -66.154378652573, 1, '2015-10-27 15:18:33'),
(79, 3, 1, 'Av Ramón Rivero, Cochabamba, Bolivia', 'Av Ramón Rivero', -17.381009622302, -66.152490377426, 1, '2015-10-27 15:18:33'),
(80, 3, 1, 'Av Ramón Rivero, Cochabamba, Bolivia', 'Av Ramón Rivero', -17.380907232765, -66.151385307312, 1, '2015-10-27 15:18:33'),
(81, 3, 1, 'T.Beltran, Cochabamba, Bolivia', 'T.Beltran', -17.380840679535, -66.149690151215, 1, '2015-10-27 15:18:33'),
(82, 3, 1, 'Av Ramón Rivero, Cochabamba, Bolivia', 'Av Ramón Rivero', -17.380707573002, -66.147909164429, 1, '2015-10-27 15:18:33'),
(83, 3, 1, 'Av Ramón Rivero, Cochabamba, Bolivia', 'Av Ramón Rivero', -17.380620541755, -66.147227883339, 1, '2015-10-27 15:18:33'),
(84, 3, 1, 'Av Ramón Rivero 1212, Cochabamba, Bolivia', 'Av Ramón Rivero 1212', -17.380067636398, -66.14561855793, 1, '2015-10-27 15:18:33'),
(85, 3, 1, 'Av Ramón Rivero, Cochabamba, Bolivia', 'Av Ramón Rivero', -17.379325307134, -66.143349409103, 1, '2015-10-27 15:18:33'),
(86, 3, 1, 'T.Rivero, Cochabamba, Bolivia', 'T.Rivero', -17.37892598394, -66.142126321793, 1, '2015-10-27 15:18:33'),
(87, 3, 1, 'Ave Ramon Rivero, Cochabamba, Bolivia', 'Ave Ramon Rivero', -17.378214367371, -66.142255067825, 1, '2015-10-27 15:18:33'),
(88, 3, 1, 'Rotonda Muyurina, Cochabamba, Bolivia', 'Rotonda Muyurina', -17.377589780765, -66.142260432243, 1, '2015-10-27 15:18:34'),
(89, 3, 1, 'Rotonda Muyurina, Cochabamba, Bolivia', 'Rotonda Muyurina', -17.377390117384, -66.141890287399, 1, '2015-10-27 15:18:34'),
(90, 3, 1, 'Av 23 de Marzo, Cochabamba, Bolivia', 'Av 23 de Marzo', -17.377175095038, -66.141144633293, 1, '2015-10-27 15:18:34'),
(91, 3, 1, 'Av 23 de Marzo, Cochabamba, Bolivia', 'Av 23 de Marzo', -17.376857680637, -66.13957285881, 1, '2015-10-27 15:18:34'),
(92, 3, 1, 'Av 23 de Marzo, Cochabamba, Bolivia', 'Av 23 de Marzo', -17.376611940078, -66.138778924942, 1, '2015-10-27 15:18:34'),
(93, 3, 1, 'Av 23 de Marzo, Cochabamba, Bolivia', 'Av 23 de Marzo', -17.376258687446, -66.138006448746, 1, '2015-10-27 15:18:34'),
(94, 3, 1, 'Av 23 de Marzo, Cochabamba, Bolivia', 'Av 23 de Marzo', -17.375485624961, -66.136665344238, 1, '2015-10-27 15:18:34'),
(95, 3, 1, 'Av 23 de Marzo, Cochabamba, Bolivia', 'Av 23 de Marzo', -17.37475863607, -66.135222315788, 1, '2015-10-27 15:18:34'),
(96, 3, 1, 'Av 23 de Marzo, Cochabamba, Bolivia', 'Av 23 de Marzo', -17.37464600373, -66.134423017502, 1, '2015-10-27 15:18:34'),
(97, 3, 1, 'Av 23 de Marzo, Cochabamba, Bolivia', 'Av 23 de Marzo', -17.37464600373, -66.132786870003, 1, '2015-10-27 15:18:34'),
(98, 3, 1, 'Av 23 de Marzo, Cochabamba, Bolivia', 'Av 23 de Marzo', -17.374630644769, -66.131156086922, 1, '2015-10-27 15:18:34'),
(99, 3, 1, 'Av 23 de Marzo, Cochabamba, Bolivia', 'Av 23 de Marzo', -17.374686960953, -66.130329966545, 1, '2015-10-27 15:18:34'),
(100, 3, 1, 'Av 23 de Marzo, Cochabamba, Bolivia', 'Av 23 de Marzo', -17.374942943386, -66.129573583603, 1, '2015-10-27 15:18:34'),
(101, 3, 1, 'RN 4, Cochabamba, Bolivia', 'RN 4', -17.37528083965, -66.129149794579, 1, '2015-10-27 15:18:34'),
(102, 3, 1, 'RN 4, Cochabamba, Bolivia', 'RN 4', -17.375777443633, -66.128227114677, 1, '2015-10-27 15:18:34'),
(103, 3, 1, 'RN 4, Cochabamba, Bolivia', 'RN 4', -17.376954952851, -66.12650513649, 1, '2015-10-27 15:18:34'),
(104, 3, 1, 'RN 4, Cochabamba, Bolivia', 'RN 4', -17.377605139477, -66.125571727753, 1, '2015-10-27 15:18:34'),
(105, 3, 1, 'RN 4, Cochabamba, Bolivia', 'RN 4', -17.378168291383, -66.12476170063, 1, '2015-10-27 15:18:34'),
(106, 3, 1, 'RN 4, Cochabamba, Bolivia', 'RN 4', -17.379309948566, -66.123023629189, 1, '2015-10-27 15:18:34'),
(107, 3, 1, 'RN 4, Cochabamba, Bolivia', 'RN 4', -17.380492554553, -66.121285557747, 1, '2015-10-27 15:18:34'),
(108, 3, 1, 'RN 4, Cochabamba, Bolivia', 'RN 4', -17.379780944073, -66.122165322304, 2, '2015-10-27 15:24:31'),
(109, 3, 1, 'RN 4, Cochabamba, Bolivia', 'RN 4', -17.378337236616, -66.124305725098, 2, '2015-10-27 15:24:31'),
(110, 3, 1, 'RN 4, Cochabamba, Bolivia', 'RN 4', -17.376596581282, -66.126821637154, 2, '2015-10-27 15:24:31'),
(111, 3, 1, 'RN 4, Cochabamba, Bolivia', 'RN 4', -17.375726247409, -66.128087639809, 2, '2015-10-27 15:24:31'),
(112, 3, 1, 'Av 23 de Marzo, Cochabamba, Bolivia', 'Av 23 de Marzo', -17.374835430808, -66.129423379898, 2, '2015-10-27 15:24:31'),
(113, 3, 1, 'Av 23 de Marzo, Cochabamba, Bolivia', 'Av 23 de Marzo', -17.374569208913, -66.130410432816, 2, '2015-10-27 15:24:31'),
(114, 3, 1, 'Av 23 de Marzo, Cochabamba, Bolivia', 'Av 23 de Marzo', -17.374528251664, -66.133704185486, 2, '2015-10-27 15:24:31'),
(115, 3, 1, 'Av 23 de Marzo, Cochabamba, Bolivia', 'Av 23 de Marzo', -17.374584567879, -66.134986281395, 2, '2015-10-27 15:24:31'),
(116, 3, 1, 'Av 23 de Marzo, Cochabamba, Bolivia', 'Av 23 de Marzo', -17.375035096974, -66.136155724525, 2, '2015-10-27 15:24:31'),
(117, 3, 1, 'Av 23 de Marzo, Cochabamba, Bolivia', 'Av 23 de Marzo', -17.375721127786, -66.137228608131, 2, '2015-10-27 15:24:31'),
(118, 3, 1, 'Av 23 de Marzo, Cochabamba, Bolivia', 'Av 23 de Marzo', -17.376320122735, -66.138371229172, 2, '2015-10-27 15:24:31'),
(119, 3, 1, 'Av 23 de Marzo, Cochabamba, Bolivia', 'Av 23 de Marzo', -17.376734810399, -66.139594316483, 2, '2015-10-27 15:24:31'),
(120, 3, 1, 'Av Del Ejercito, Cochabamba, Bolivia', 'Av Del Ejercito', -17.37730308456, -66.142346262932, 2, '2015-10-27 15:24:31'),
(121, 3, 1, 'Av Del Ejercito, Cochabamba, Bolivia', 'Av Del Ejercito', -17.37784575914, -66.142421364784, 2, '2015-10-27 15:24:31'),
(122, 3, 1, 'Ave Ramon Rivero, Cochabamba, Bolivia', 'Ave Ramon Rivero', -17.378485703511, -66.14240527153, 2, '2015-10-27 15:24:31'),
(123, 3, 1, 'Ave Ramon Rivero, Cochabamba, Bolivia', 'Ave Ramon Rivero', -17.37886966906, -66.142576932907, 2, '2015-10-27 15:24:31'),
(124, 3, 1, 'Av Ramón Rivero, Cochabamba, Bolivia', 'Av Ramón Rivero', -17.379381621873, -66.143826842308, 2, '2015-10-27 15:24:31'),
(125, 3, 1, 'Av Ramón Rivero, Cochabamba, Bolivia', 'Av Ramón Rivero', -17.379939648808, -66.145259141922, 2, '2015-10-27 15:24:31'),
(126, 3, 1, 'Av Ramón Rivero, Cochabamba, Bolivia', 'Av Ramón Rivero', -17.380395284219, -66.146541237831, 2, '2015-10-27 15:24:31'),
(127, 3, 1, 'Av Ramón Rivero, Cochabamba, Bolivia', 'Av Ramón Rivero', -17.380651258671, -66.147345900536, 2, '2015-10-27 15:24:31'),
(128, 3, 1, 'Av Ramón Rivero, Cochabamba, Bolivia', 'Av Ramón Rivero', -17.380825321094, -66.149395108223, 2, '2015-10-27 15:24:31'),
(129, 3, 1, 'Av Ramón Rivero, Cochabamba, Bolivia', 'Av Ramón Rivero', -17.380912352243, -66.151857376099, 2, '2015-10-27 15:24:31'),
(130, 3, 1, 'Av Del Ejercito, Cochabamba, Bolivia', 'Av Del Ejercito', -17.380159787407, -66.1517983675, 2, '2015-10-27 15:24:31'),
(131, 3, 1, 'Av Del Ejercito, Cochabamba, Bolivia', 'Av Del Ejercito', -17.379816780638, -66.151782274246, 2, '2015-10-27 15:24:31'),
(132, 3, 1, 'Av del Ejército, Cochabamba, Bolivia', 'Av del Ejército', -17.379791183093, -66.15209877491, 2, '2015-10-27 15:24:31'),
(133, 3, 1, 'Av Del Ejercito, Cochabamba, Bolivia', 'Av Del Ejercito', -17.380036919384, -66.152195334435, 2, '2015-10-27 15:24:31'),
(134, 3, 1, 'Av Del Ejercito, Cochabamba, Bolivia', 'Av Del Ejercito', -17.380272416355, -66.152077317238, 2, '2015-10-27 15:24:31'),
(135, 3, 1, 'Av Ramón Rivero, Cochabamba, Bolivia', 'Av Ramón Rivero', -17.380866276934, -66.152012944221, 2, '2015-10-27 15:24:32'),
(136, 3, 1, 'Av Papa Paulo, Cochabamba, Bolivia', 'Av Papa Paulo', -17.381526688591, -66.151937842369, 2, '2015-10-27 15:24:32'),
(137, 3, 1, 'Av Papa Paulo, Cochabamba, Bolivia', 'Av Papa Paulo', -17.381844094897, -66.152324080467, 2, '2015-10-27 15:24:32'),
(138, 3, 1, 'La Paz, Cochabamba, Bolivia', 'La Paz', -17.382325322761, -66.152377724648, 2, '2015-10-27 15:24:32'),
(139, 3, 1, 'Av Salamanca, Cochabamba, Bolivia', 'Av Salamanca', -17.382622249961, -66.152163147926, 2, '2015-10-27 15:24:32'),
(140, 3, 1, 'Av Salamanca, Cochabamba, Bolivia', 'Av Salamanca', -17.383385043492, -66.152635216713, 2, '2015-10-27 15:24:32'),
(141, 3, 1, 'Av Salamanca, Cochabamba, Bolivia', 'Av Salamanca', -17.384178550166, -66.153139472008, 2, '2015-10-27 15:24:32'),
(142, 3, 1, 'Chuquisaca, Cochabamba, Bolivia', 'Chuquisaca', -17.384480593738, -66.15359544754, 2, '2015-10-27 15:24:32'),
(143, 3, 1, 'Chuquisaca, Cochabamba, Bolivia', 'Chuquisaca', -17.384859427344, -66.153965592384, 2, '2015-10-27 15:24:32'),
(144, 3, 1, 'Chuquisaca, Cochabamba, Bolivia', 'Chuquisaca', -17.386257009404, -66.156186461449, 2, '2015-10-27 15:24:32'),
(145, 3, 1, 'Chuquisaca, Cochabamba, Bolivia', 'Chuquisaca', -17.386671674555, -66.156851649284, 2, '2015-10-27 15:24:32'),
(146, 3, 1, 'Mexico, Cochabamba, Bolivia', 'Mexico', -17.387649461499, -66.156009435654, 2, '2015-10-27 15:24:32'),
(147, 3, 1, 'Mexico, Cochabamba, Bolivia', 'Mexico', -17.387762085838, -66.156379580498, 2, '2015-10-27 15:24:32'),
(148, 3, 1, '25 de Mayo 365, Cochabamba, Bolivia', '25 de Mayo 365', -17.38881153657, -66.156181097031, 2, '2015-10-27 15:24:32'),
(149, 3, 1, '25 de Mayo 268, Cochabamba, Bolivia', '25 de Mayo 268', -17.390060631059, -66.155982613564, 2, '2015-10-27 15:24:32'),
(150, 3, 1, '25 de Mayo, Cochabamba, Bolivia', '25 de Mayo', -17.391616867997, -66.155725121498, 2, '2015-10-27 15:24:32'),
(151, 3, 1, '25 de Mayo, Cochabamba, Bolivia', '25 de Mayo', -17.39428905975, -66.155188679695, 2, '2015-10-27 15:24:32'),
(152, 3, 1, '25 de Mayo, Cochabamba, Bolivia', '25 de Mayo', -17.396879307977, -66.154700517654, 2, '2015-10-27 15:24:32'),
(153, 3, 1, '25 de Mayo, Cochabamba, Bolivia', '25 de Mayo', -17.398619770366, -66.154362559319, 2, '2015-10-27 15:24:32'),
(154, 3, 1, '25 de Mayo, Cochabamba, Bolivia', '25 de Mayo', -17.400641757339, -66.153970956802, 2, '2015-10-27 15:24:32'),
(155, 3, 1, '25 de Mayo, Cochabamba, Bolivia', '25 de Mayo', -17.401916365483, -66.154013872147, 2, '2015-10-27 15:24:32'),
(156, 3, 1, 'Punata, Cochabamba, Bolivia', 'Punata', -17.402305400737, -66.154062151909, 2, '2015-10-27 15:24:32'),
(157, 3, 1, 'Punata, Cochabamba, Bolivia', 'Punata', -17.402279806338, -66.154528856277, 2, '2015-10-27 15:24:32'),
(158, 3, 1, 'Francisco Velarde, Cochabamba, Bolivia', 'Francisco Velarde', -17.403129538474, -66.154561042786, 2, '2015-10-27 15:24:32'),
(159, 3, 1, 'Tarata, Cochabamba, Bolivia', 'Tarata', -17.403318936063, -66.15381538868, 2, '2015-10-27 15:24:32'),
(160, 3, 1, 'Tarata, Cochabamba, Bolivia', 'Tarata', -17.403324054914, -66.153359413147, 2, '2015-10-27 15:24:32');

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
  `status` tinyint(1) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `transport`
--

INSERT INTO `transport` (`id_transport`, `id_type`, `id_city`, `line`, `status`, `create_date`) VALUES
(1, 1, 1, 'G', 1, '2015-10-03 18:27:15'),
(2, 2, 1, '207', 0, '2015-10-03 18:27:15'),
(3, 1, 1, 'H', 1, '2015-10-03 18:47:24'),
(4, 2, 1, '260', 0, '2015-10-04 04:50:07'),
(5, 1, 2, '12z', 0, '2015-10-04 04:50:07');

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
  MODIFY `id_address` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=161;
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
