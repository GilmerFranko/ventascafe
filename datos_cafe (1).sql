-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-11-2020 a las 15:37:36
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `datos_cafe`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `cedula` varchar(12) NOT NULL,
  `cuenta` varchar(23) NOT NULL,
  `telefono` varchar(11) NOT NULL,
  `deuda` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `apellido`, `cedula`, `cuenta`, `telefono`, `deuda`) VALUES
(1, 'Aristeres', 'Moreno', '14053324', '1082408', '4169347026', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dinero`
--

CREATE TABLE `dinero` (
  `id` int(10) UNSIGNED NOT NULL,
  `saldo` float NOT NULL,
  `nota` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `dinero`
--

INSERT INTO `dinero` (`id`, `saldo`, `nota`) VALUES
(1, 36, ''),
(2, 12, ''),
(3, 0, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `idlogin` int(11) UNSIGNED NOT NULL,
  `usuario` varchar(8) NOT NULL,
  `clave` varchar(8) NOT NULL,
  `telefono` varchar(11) NOT NULL,
  `correo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`idlogin`, `usuario`, `clave`, `telefono`, `correo`) VALUES
(1, 'gilmer12', '1234', '04243435447', 'blabla@hhh');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicaciones`
--

CREATE TABLE `publicaciones` (
  `id` int(10) UNSIGNED NOT NULL,
  `fecha` datetime DEFAULT NULL,
  `dato` text NOT NULL,
  `likes` int(11) NOT NULL,
  `ultimoid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `publicaciones`
--

INSERT INTO `publicaciones` (`id`, `fecha`, `dato`, `likes`, `ultimoid`) VALUES
(1, '2002-04-20 20:03:00', 'hoolq', 0, 76),
(2, '2003-04-20 02:44:00', 'k', 0, 0),
(3, '2003-04-20 02:44:00', 'o2jo', 0, 0),
(4, '2003-04-20 02:44:00', 'wdow', 0, 0),
(5, '2003-04-20 02:45:00', 'wo', 0, 0),
(6, '2003-04-20 03:26:00', 'th\r\n', 0, 0),
(7, '2003-04-20 03:27:00', 'th\r\n', 0, 0),
(8, '2003-04-20 03:27:00', '', 0, 0),
(9, '2003-04-20 03:28:00', '', 0, 0),
(10, '2003-04-20 03:29:00', '', 0, 0),
(11, '2003-04-20 03:30:00', '', 0, 0),
(12, '2003-04-20 09:49:00', 'd', 0, 0),
(13, '2003-04-20 09:58:00', 'd', 0, 0),
(14, '2003-04-20 09:59:00', 'd', 0, 0),
(15, '2003-04-20 09:59:00', 'mm', 0, 0),
(16, '2003-04-20 10:00:00', 'mm', 0, 0),
(17, '2003-04-20 10:00:00', 'ddddd', 0, 0),
(18, '2003-04-20 10:00:00', 'ddddd', 0, 0),
(19, '2003-04-20 10:15:00', 'ddddd', 0, 0),
(20, '2003-04-20 10:16:00', 'ddddd', 0, 0),
(21, '2003-04-20 10:17:00', 'ddddd', 0, 0),
(22, '2003-04-20 10:19:00', 'ddddd', 0, 0),
(23, '2003-04-20 10:19:00', 'ddddd', 0, 0),
(24, '2003-04-20 10:20:00', 'ddddd', 0, 0),
(25, '2003-04-20 10:20:00', 'ddddd', 0, 0),
(26, '2003-04-20 10:20:00', 'ddddd', 0, 0),
(27, '2003-04-20 10:23:00', 'ddddd', 0, 0),
(28, '2003-04-20 10:26:00', 'ddddd', 0, 0),
(29, '2003-04-20 10:26:00', 'ddddd', 0, 0),
(30, '2003-04-20 10:27:00', 'ddddd', 0, 0),
(31, '2003-04-20 11:16:00', 'ddddd', 0, 0),
(32, '2003-04-20 11:17:00', 'ddddd', 0, 0),
(33, '2003-04-20 11:17:00', 'ddddd', 0, 0),
(34, '2003-04-20 11:18:00', 'prueba1', 0, 0),
(35, '2003-04-20 11:18:00', 'prueba 2', 0, 0),
(36, '2003-04-20 11:18:00', 'prueba3', 0, 0),
(37, '2003-04-20 11:18:00', 'prueba4', 0, 0),
(38, '2003-04-20 11:19:00', 'prueba5', 0, 0),
(39, '2003-04-20 11:21:00', 'prueba5', 0, 0),
(40, '2003-04-20 11:25:00', 'prueba5', 0, 0),
(41, '2003-04-20 11:35:00', 'hola mira chamo nesesitava saber si pudes', 0, 0),
(42, '2003-04-20 11:35:00', 'hola mira chamo nesesitava saber si pudes', 0, 0),
(43, '2003-04-20 11:35:00', 'hola mira chamo nesesitava saber si pudes', 0, 0),
(44, '2003-04-20 19:21:00', 'chavistasdemierda.com', 0, 0),
(45, '2003-04-20 19:28:00', 'chavistasdemierda.com', 0, 0),
(46, '2003-04-20 19:50:00', 'jj', 0, 0),
(47, '2003-04-20 19:50:00', '>', 0, 0),
(48, '2003-04-20 19:50:00', '<p>', 0, 0),
(49, '2003-04-20 19:51:00', '', 0, 0),
(50, '2003-04-20 19:52:00', '<p>hola</p>', 0, 0),
(51, '2003-04-20 19:54:00', 'o', 0, 0),
(52, '2003-04-20 19:55:00', ': 51\r\nFecha2003-04-20 19:54:00\r\nComentario:\r\no\r\n', 0, 0),
(53, '2003-04-20 19:55:00', 'ID: 52\r\nFecha2003-04-20 19:55:00\r\nComentario:\r\n: 51 Fecha2003-04-20 19:54:00 Comentario: o', 0, 0),
(54, '2003-04-20 19:55:00', 'ID: 53\r\nFecha2003-04-20 19:55:00\r\nComentario:\r\nID: 52 Fecha2003-04-20 19:55:00 Comentario: : 51 Fecha2003-04-20 19:54:00 Comentario: o', 0, 0),
(55, '2003-04-20 19:55:00', 'Fecha2003-04-20 19:55:00\r\nComentario:\r\nID: 53 Fecha2003-04-20 19:55:00 Comentario: ID: 52 Fecha2003-04-20 19:55:00 Comentario: : 51 Fecha2003-04-20 19:54:00 Comentario: o', 0, 0),
(56, '2003-04-20 19:55:00', 'ID: 55\r\nFecha2003-04-20 19:55:00\r\nComentario:\r\nFecha2003-04-20 19:55:00 Comentario: ID: 53 Fecha2003-04-20 19:55:00 Comentario: ID: 52 Fecha2003-04-20 19:55:00 Comentario: : 51 Fecha2003-04-20 19:54:00 Comentario: o\r\nLikes: 0\r\nID: 54\r\nFecha2003-04-20 19:55:00\r\nComentario:\r\nID: 53 Fecha2003-04-20 19:55:00 Comentario: ID: 52 Fecha2003-04-20 19:55:00 Comentario: : 51 Fecha2003-04-20 19:54:00 Comentario: o\r\nLikes: 0\r\nID: 53\r\nFecha2003-04-20 19:55:00\r\nComentario:\r\nID: 52 Fecha2003-04-20 19:55:00 Comentario: : 51 Fecha2003-04-20 19:54:00 Comentario: o\r\nLikes: 0\r\nID: 52\r\nFecha2003-04-20 19:55:00\r\nComentario:\r\n: 51 Fecha2003-04-20 19:54:00 Comentario: o\r\nLikes: 0\r\nID: 51\r\nFecha2003-04-20 19:54:00\r\nComentario:\r\no\r\nLikes:', 0, 0),
(57, '2003-04-20 19:56:00', 'ID: 56\r\nFecha2003-04-20 19:55:00\r\nComentario:\r\nID: 55 Fecha2003-04-20 19:55:00 Comentario: Fecha2003-04-20 19:55:00 Comentario: ID: 53 Fecha2003-04-20 19:55:00 Comentario: ID: 52 Fecha2003-04-20 19:55:00 Comentario: : 51 Fecha2003-04-20 19:54:00 Comentario: o Likes: 0 ID: 54 Fecha2003-04-20 19:55:00 Comentario: ID: 53 Fecha2003-04-20 19:55:00 Comentario: ID: 52 Fecha2003-04-20 19:55:00 Comentario: : 51 Fecha2003-04-20 19:54:00 Comentario: o Likes: 0 ID: 53 Fecha2003-04-20 19:55:00 Comentario: ID: 52 Fecha2003-04-20 19:55:00 Comentario: : 51 Fecha2003-04-20 19:54:00 Comentario: o Likes: 0 ID: 52 Fecha2003-04-20 19:55:00 Comentario: : 51 Fecha2003-04-20 19:54:00 Comentario: o Likes: 0 ID: 51 Fecha2003-04-20 19:54:00 Comentario: o Likes:', 0, 0),
(58, '2003-04-20 19:57:00', 'ID: 56\r\nFecha2003-04-20 19:55:00\r\nComentario:\r\nID: 55 Fecha2003-04-20 19:55:00 Comentario: Fecha2003-04-20 19:55:00 Comentario: ID: 53 Fecha2003-04-20 19:55:00 Comentario: ID: 52 Fecha2003-04-20 19:55:00 Comentario: : 51 Fecha2003-04-20 19:54:00 Comentario: o Likes: 0 ID: 54 Fecha2003-04-20 19:55:00 Comentario: ID: 53 Fecha2003-04-20 19:55:00 Comentario: ID: 52 Fecha2003-04-20 19:55:00 Comentario: : 51 Fecha2003-04-20 19:54:00 Comentario: o Likes: 0 ID: 53 Fecha2003-04-20 19:55:00 Comentario: ID: 52 Fecha2003-04-20 19:55:00 Comentario: : 51 Fecha2003-04-20 19:54:00 Comentario: o Likes: 0 ID: 52 Fecha2003-04-20 19:55:00 Comentario: : 51 Fecha2003-04-20 19:54:00 Comentario: o Likes: 0 ID: 51 Fecha2003-04-20 19:54:00 Comentario: o Likes:', 0, 0),
(59, '2003-04-20 19:57:00', 'ID: 56\r\nFecha2003-04-20 19:55:00\r\nComentario:\r\nID: 55 Fecha2003-04-20 19:55:00 Comentario: Fecha2003-04-20 19:55:00 Comentario: ID: 53 Fecha2003-04-20 19:55:00 Comentario: ID: 52 Fecha2003-04-20 19:55:00 Comentario: : 51 Fecha2003-04-20 19:54:00 Comentario: o Likes: 0 ID: 54 Fecha2003-04-20 19:55:00 Comentario: ID: 53 Fecha2003-04-20 19:55:00 Comentario: ID: 52 Fecha2003-04-20 19:55:00 Comentario: : 51 Fecha2003-04-20 19:54:00 Comentario: o Likes: 0 ID: 53 Fecha2003-04-20 19:55:00 Comentario: ID: 52 Fecha2003-04-20 19:55:00 Comentario: : 51 Fecha2003-04-20 19:54:00 Comentario: o Likes: 0 ID: 52 Fecha2003-04-20 19:55:00 Comentario: : 51 Fecha2003-04-20 19:54:00 Comentario: o Likes: 0 ID: 51 Fecha2003-04-20 19:54:00 Comentario: o Likes:', 0, 0),
(60, '2003-04-20 19:57:00', 'ID: 56\r\nFecha2003-04-20 19:55:00\r\nComentario:\r\nID: 55 Fecha2003-04-20 19:55:00 Comentario: Fecha2003-04-20 19:55:00 Comentario: ID: 53 Fecha2003-04-20 19:55:00 Comentario: ID: 52 Fecha2003-04-20 19:55:00 Comentario: : 51 Fecha2003-04-20 19:54:00 Comentario: o Likes: 0 ID: 54 Fecha2003-04-20 19:55:00 Comentario: ID: 53 Fecha2003-04-20 19:55:00 Comentario: ID: 52 Fecha2003-04-20 19:55:00 Comentario: : 51 Fecha2003-04-20 19:54:00 Comentario: o Likes: 0 ID: 53 Fecha2003-04-20 19:55:00 Comentario: ID: 52 Fecha2003-04-20 19:55:00 Comentario: : 51 Fecha2003-04-20 19:54:00 Comentario: o Likes: 0 ID: 52 Fecha2003-04-20 19:55:00 Comentario: : 51 Fecha2003-04-20 19:54:00 Comentario: o Likes: 0 ID: 51 Fecha2003-04-20 19:54:00 Comentario: o Likes:', 0, 0),
(61, '2003-04-20 19:58:00', 'j', 0, 0),
(62, '2003-04-20 19:59:00', '', 0, 0),
(63, '2003-04-20 19:59:00', '', 0, 0),
(64, '2003-04-20 20:00:00', '', 0, 0),
(65, '2003-04-20 20:00:00', 'hla como estas', 0, 0),
(66, '2003-04-20 20:01:00', 'hla como estas', 0, 0),
(67, '2004-04-20 06:32:00', 'echo \"ID: \".$view_publicaciones->get_construct(0,0). \"<br>\";echo \"ID: \".$view_publicaciones->get_construct(0,0). \"<br>\";echo \"ID: \".$view_publicaciones->get_construct(0,0). \"<br>\";echo \"ID: \".$view_publicaciones->get_construct(0,0). \"<br>\";echo \"ID: \".$view_publicaciones->get_construct(0,0). \"<br>\";echo \"ID: \".$view_publicaciones->get_construct(0,0). \"<br>\";echo \"ID: \".$view_publicaciones->get_construct(0,0). \"<br>\";echo \"ID: \".$view_publicaciones->get_construct(0,0). \"<br>\";', 0, 0),
(68, '2004-04-20 06:36:00', 'echo \"ID: \".$view_publicaciones->get_construct(0,0). \"<br>\";echo \"ID: \".$view_publicaciones->get_construct(0,0). \"<br>\";echo \"ID: \".$view_publicaciones->get_construct(0,0). \"<br>\";echo \"ID: \".$view_publicaciones->get_construct(0,0). \"<br>\";echo \"ID: \".$view_publicaciones->get_construct(0,0). \"<br>\";echo \"ID: \".$view_publicaciones->get_construct(0,0). \"<br>\";echo \"ID: \".$view_publicaciones->get_construct(0,0). \"<br>\";echo \"ID: \".$view_publicaciones->get_construct(0,0). \"<br>\";', 0, 0),
(69, '2004-04-20 06:37:00', 'echo \"ID: \".$view_publicaciones->get_construct(0,0). \"<br>\";echo \"ID: \".$view_publicaciones->get_construct(0,0). \"<br>\";echo \"ID: \".$view_publicaciones->get_construct(0,0). \"<br>\";echo \"ID: \".$view_publicaciones->get_construct(0,0). \"<br>\";echo \"ID: \".$view_publicaciones->get_construct(0,0). \"<br>\";echo \"ID: \".$view_publicaciones->get_construct(0,0). \"<br>\";echo \"ID: \".$view_publicaciones->get_construct(0,0). \"<br>\";echo \"ID: \".$view_publicaciones->get_construct(0,0). \"<br>\";', 0, 0),
(70, '2004-04-20 06:53:00', 'eheo', 0, 0),
(71, '2004-04-20 06:54:00', 'eheo', 0, 0),
(72, '2004-04-20 06:54:00', 'epoejo', 0, 0),
(73, '2004-04-20 06:54:00', 'nuvo mendaje: blablablablablbalablnuvo mendaje: blablablablablbalablnuvo mendaje: blablablablablbalablnuvo mendaje: blablablablablbalablnuvo mendaje: blablablablablbalablnuvo mendaje: blablablablablbalablnuvo mendaje: blablablablablbalablnuvo mendaje: blablablablablbalablnuvo mendaje: blablablablablbalablnuvo mendaje: blablablablablbalablnuvo mendaje: blablablablablbalablnuvo mendaje: blablablablablbalablnuvo mendaje: blablablablablbalablnuvo mendaje: blablablablablbalablnuvo mendaje: blablablablablbalablnuvo mendaje: blablablablablbalablnuvo mendaje: blablablablablbalablnuvo mendaje: blablablablablbalablnuvo mendaje: blablablablablbalablnuvo mendaje: blablablablablbalablnuvo mendaje: blablablablablbalablnuvo mendaje: blablablablablbalablnuvo mendaje: blablablablablbalablnuvo mendaje: blablablablablbalablnuvo mendaje: blablablablablbalablnuvo mendaje: blablablablablbalablnuvo mendaje: blablablablablbalablnuvo mendaje: blablablablablbalablnuvo mendaje: blablablablablbalablnuvo mendaje: blablablablablbalablnuvo mendaje: blablablablablbalablnuvo mendaje: blablablablablbalablnuvo mendaje: blablablablablbalabl', 0, 0),
(74, '2022-08-20 21:36:00', 'hoal', 0, 0),
(75, '2004-09-20 23:00:00', 'tengo que ir a buscar 2 latas donde isaura(prueba)', 0, 0),
(76, '2016-11-20 15:33:00', 'quee\r\n', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo_alcaldia`
--

CREATE TABLE `vehiculo_alcaldia` (
  `Nombres` varchar(16) DEFAULT NULL,
  `Apellidos` varchar(16) DEFAULT NULL,
  `Cedula` int(15) NOT NULL,
  `Vehiculo` varchar(4) DEFAULT NULL,
  `Marca` varchar(10) DEFAULT NULL,
  `Modelo` varchar(15) DEFAULT NULL,
  `Seriall` varchar(100) DEFAULT NULL,
  `Placa` varchar(8) DEFAULT NULL,
  `Color` varchar(10) DEFAULT NULL,
  `Edad` int(4) DEFAULT NULL,
  `Ubicacion` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `vehiculo_alcaldia`
--

INSERT INTO `vehiculo_alcaldia` (`Nombres`, `Apellidos`, `Cedula`, `Vehiculo`, `Marca`, `Modelo`, `Seriall`, `Placa`, `Color`, `Edad`, `Ubicacion`) VALUES
('Bin', 'Toreto', 11111111, '', 'Bera', 'Camarone', 'null', 'negro', '', 1999, ''),
('Daniel', 'Moreno', 13392013, '', 'Chrevrolet', 'Plus', 'nll', 'rojo', '', 2000, ''),
('Aristeres', 'Franco', 14053324, 'Moto', 'Empire', 'Kewa', 'null', 'Gris', '', 2009, 'Trementinos'),
('Jormario', 'Viloria Moreno', 24931621, 'Moto', 'Bera', 'Arsen', 'null', 'AA6T4OR', 'Azul', 2013, NULL),
('Franko', 'Moreno', 28542819, 'Moto', 'Bera', 'Jawu', 'null', 'null', 'Neg', 2015, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` int(20) UNSIGNED NOT NULL,
  `Nombre` varchar(18) NOT NULL,
  `Apellido` varchar(18) NOT NULL,
  `Cedula` int(11) NOT NULL,
  `Dinero` int(50) NOT NULL,
  `Cuenta` int(21) NOT NULL,
  `Vendido` varchar(20) NOT NULL,
  `Fecha` date NOT NULL,
  `Status` varchar(4) NOT NULL,
  `Movimiento` text NOT NULL,
  `Saldo` bigint(20) DEFAULT NULL,
  `Situacion` varchar(20) NOT NULL,
  `Latas` int(10) NOT NULL,
  `Kg` int(10) NOT NULL,
  `NumReferencia` int(20) NOT NULL,
  `Nota` varchar(120) NOT NULL,
  `Procesado` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id`, `Nombre`, `Apellido`, `Cedula`, `Dinero`, `Cuenta`, `Vendido`, `Fecha`, `Status`, `Movimiento`, `Saldo`, `Situacion`, `Latas`, `Kg`, `NumReferencia`, `Nota`, `Procesado`) VALUES
(1, 'null', 'null', 14053324, 3, 0, 'null', '2031-08-20', 'Efec', 'null', NULL, 'null', 1, 0, 1, '', 'nu'),
(2, 'Isaura', 'Hernandez', 1, 24, 1082408, 'Cafe crudo', '2022-09-20', 'Efec', 'compra', NULL, 'Sin Procesar', 6, 0, 2, '', 'No'),
(3, 'Gilmer', 'Zapata', 111, 12, 0, 'Cafe crudo', '2022-09-20', 'Efec', 'compra', NULL, 'Sin Procesar', 3, 0, 3, '', 'No');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `dinero`
--
ALTER TABLE `dinero`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`idlogin`);

--
-- Indices de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `vehiculo_alcaldia`
--
ALTER TABLE `vehiculo_alcaldia`
  ADD PRIMARY KEY (`Cedula`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `dinero`
--
ALTER TABLE `dinero`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `idlogin` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
