-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 28-11-2019 a las 04:52:07
-- Versión del servidor: 5.7.17-log
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `graduacion4b`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mesas`
--

CREATE TABLE `mesas` (
  `id` int(11) NOT NULL,
  `numero` int(11) DEFAULT NULL,
  `area` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `mesas`
--

INSERT INTO `mesas` (`id`, `numero`, `area`) VALUES
(1, 1, 'A1'),
(2, 2, 'B2'),
(3, 3, NULL),
(4, 4, NULL),
(5, 5, NULL),
(6, 6, NULL),
(7, 7, NULL),
(8, 8, NULL),
(9, 9, NULL),
(10, 10, NULL),
(11, 11, NULL),
(12, 12, NULL),
(13, 13, NULL),
(14, 14, NULL),
(15, 15, NULL),
(16, 16, NULL),
(17, 17, NULL),
(18, 18, NULL),
(19, 19, NULL),
(20, 20, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservaciones`
--

CREATE TABLE `reservaciones` (
  `id` int(11) NOT NULL,
  `idUsuario` int(11) DEFAULT NULL,
  `idSilla` int(11) DEFAULT NULL,
  `paquete` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `reservaciones`
--

INSERT INTO `reservaciones` (`id`, `idUsuario`, `idSilla`, `paquete`) VALUES
(1, 12, 1, 1),
(2, 5, 3, 1),
(3, 15, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sillas`
--

CREATE TABLE `sillas` (
  `id` int(11) NOT NULL,
  `Mesa_Id` int(11) DEFAULT NULL,
  `posicion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sillas`
--

INSERT INTO `sillas` (`id`, `Mesa_Id`, `posicion`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 1, 6),
(7, 1, 7),
(8, 1, 8),
(9, 2, 1),
(10, 2, 2),
(11, 2, 3),
(12, 2, 4),
(13, 2, 5),
(14, 2, 6),
(15, 2, 7),
(16, 2, 8),
(17, 3, 1),
(18, 3, 2),
(19, 3, 3),
(20, 3, 4),
(21, 3, 5),
(22, 3, 6),
(23, 3, 7),
(24, 3, 8),
(25, 4, 1),
(26, 4, 2),
(27, 4, 3),
(28, 4, 4),
(29, 4, 5),
(30, 4, 6),
(31, 4, 7),
(32, 4, 8),
(33, 5, 1),
(34, 5, 2),
(35, 5, 3),
(36, 5, 4),
(37, 5, 5),
(38, 5, 6),
(39, 5, 7),
(40, 5, 8),
(41, 6, 1),
(42, 6, 2),
(43, 6, 3),
(44, 6, 4),
(45, 6, 5),
(46, 6, 6),
(47, 6, 7),
(48, 6, 8),
(49, 7, 1),
(50, 7, 2),
(51, 7, 3),
(52, 7, 4),
(53, 7, 5),
(54, 7, 6),
(55, 7, 7),
(56, 7, 8),
(57, 8, 1),
(58, 8, 2),
(59, 8, 3),
(60, 8, 4),
(61, 8, 5),
(62, 8, 6),
(63, 8, 7),
(64, 8, 8),
(65, 10, 1),
(66, 10, 2),
(67, 10, 3),
(68, 10, 4),
(69, 10, 5),
(70, 10, 6),
(71, 10, 7),
(72, 10, 8),
(73, 11, 1),
(74, 11, 2),
(75, 11, 3),
(76, 11, 4),
(77, 11, 5),
(78, 11, 6),
(79, 11, 7),
(80, 11, 8),
(81, 12, 1),
(82, 12, 2),
(83, 12, 3),
(84, 12, 4),
(85, 12, 5),
(86, 12, 6),
(87, 12, 7),
(88, 12, 8),
(89, 13, 1),
(90, 13, 2),
(91, 13, 3),
(92, 13, 4),
(93, 13, 5),
(94, 13, 6),
(95, 13, 7),
(96, 13, 8),
(97, 14, 1),
(98, 14, 2),
(99, 14, 3),
(100, 14, 4),
(101, 14, 5),
(102, 14, 6),
(103, 14, 7),
(104, 14, 8),
(105, 9, 1),
(106, 9, 2),
(107, 9, 3),
(108, 9, 4),
(109, 9, 5),
(110, 9, 6),
(111, 9, 7),
(112, 9, 8),
(113, 15, 1),
(114, 15, 2),
(115, 15, 3),
(116, 15, 4),
(117, 15, 5),
(118, 15, 6),
(119, 15, 7),
(120, 15, 8),
(121, 16, 1),
(122, 16, 2),
(123, 16, 3),
(124, 16, 4),
(125, 16, 5),
(126, 16, 6),
(127, 16, 7),
(128, 16, 8),
(129, 17, 1),
(130, 17, 2),
(131, 17, 3),
(132, 17, 4),
(133, 17, 5),
(134, 17, 6),
(135, 17, 7),
(136, 17, 8),
(137, 18, 1),
(138, 18, 2),
(139, 18, 3),
(140, 18, 4),
(141, 18, 5),
(142, 18, 6),
(143, 18, 7),
(144, 18, 8),
(145, 19, 1),
(146, 19, 2),
(147, 19, 3),
(148, 19, 4),
(149, 19, 5),
(150, 19, 6),
(151, 19, 7),
(152, 19, 8),
(153, 20, 1),
(154, 20, 2),
(155, 20, 3),
(156, 20, 4),
(157, 20, 5),
(158, 20, 6),
(159, 20, 7),
(160, 20, 8),
(161, 21, 1),
(162, 21, 2),
(163, 21, 3),
(164, 21, 4),
(165, 21, 5),
(166, 21, 6),
(167, 21, 7),
(168, 21, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `contrasena` varchar(200) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `lugares` int(11) NOT NULL DEFAULT '0',
  `paquete` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `contrasena`, `email`, `lugares`, `paquete`) VALUES
(1, 'Ricardo', '3a0e147df0c7a60865e795fda8ba3af75005d087a61e1d31c65a5a232080af67f64cbf14d4253cf90ef77b862728891e9790219d89ad96dc9307ae4ccdfdb549', 'Shato@mail.com', 0, NULL),
(2, 'Brian', 'bae8fb41bb270d333af0f2f03ab447a1c8adb65acb33fdc23177f4348c3c8b0df02ee9a442e670a937de0672e2293a7aff0ce2de34c31a61604d7c89bfe8e2f8', 'Brian@mail.com', 0, NULL),
(3, 'Sebastian', '036a8814df0f465834b36f0fa04a4992ef86690e1db050e3300384bcd99560d6e7ef47852abc88b75cc56140717ebda00c3b2c329fad8881f82a80458400b540', 'sebas@mail.com', 0, NULL),
(4, 'Eva', '895e6949569345854f878cfed39f64c1b1daacc80e07912a659dfa368b23222c1875047c8e1050779c55dd0f9176f5d10f05c098f0dfbc365017ff5598ef02f2', 'Conhi@mail.com', 0, NULL),
(5, 'Jared', '7fd4cc66f7c93734e8353e15514921e341614e97ac46bcbf3359f706a5896150ba721b09d3ff39551b696c47fa65dc77a38a12d006080d1a9b662a6b3de5f3fe', 'jared@hotmail.com', 0, NULL),
(6, 'Miriam', '09ec70e02451db90279ae8e1241a31c4431977933c0023d104957ead29b43edcfd7adb33aa1e05568438f0fff58a1fa99247061d3cd1fc1ec0a3290abc3f0dbb', 'Miri@mail.com', 0, NULL),
(15, 'root', '38ab972da3874f33ab1d3ccb503b9b34bf9d6af26f9f4cd942319c89e4ffac86523b37e7c7e82dc7f14250a38ef1b5257409ce49ebb231663dde785cc6ae4325', '', 2, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_paquetes`
--

CREATE TABLE `usuarios_paquetes` (
  `Id` int(11) NOT NULL,
  `IdUsuario` int(11) DEFAULT NULL,
  `paquete` int(11) DEFAULT NULL,
  `lugares` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios_paquetes`
--

INSERT INTO `usuarios_paquetes` (`Id`, `IdUsuario`, `paquete`, `lugares`) VALUES
(1, 5, 1, 2),
(2, 5, 2, 3),
(3, 5, 3, 4),
(4, 12, 1, 2),
(5, 12, 2, 3),
(6, 12, 3, 3),
(7, 13, 1, 4),
(8, 13, 2, 1),
(9, 13, 3, 3),
(10, 14, 1, 4),
(11, 14, 2, 1),
(12, 14, 3, 2),
(13, 15, 1, 4),
(14, 15, 2, 1),
(15, 15, 3, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `mesas`
--
ALTER TABLE `mesas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reservaciones`
--
ALTER TABLE `reservaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sillas`
--
ALTER TABLE `sillas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios_paquetes`
--
ALTER TABLE `usuarios_paquetes`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `mesas`
--
ALTER TABLE `mesas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `reservaciones`
--
ALTER TABLE `reservaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `sillas`
--
ALTER TABLE `sillas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `usuarios_paquetes`
--
ALTER TABLE `usuarios_paquetes`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
