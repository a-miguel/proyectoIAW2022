-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-12-2022 a las 14:12:06
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mobile-repair`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `id` int(11) NOT NULL,
  `idProfesional` int(11) NOT NULL,
  `idUsuario` varchar(32) NOT NULL,
  `asunto` varchar(20) NOT NULL,
  `problema` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `foto` varchar(32) DEFAULT 'fotitos/pordefecto.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`id`, `idProfesional`, `idUsuario`, `asunto`, `problema`, `fecha`, `hora`, `foto`) VALUES
(1, 4, 'rial', 'consola nintendo est', 'Se me han estropeado los joycon de la nintendo switch.', '2022-12-08', '15:00:00', ''),
(8, 5, 'rial', 'Problemas ordenador', 'mucho ruido y ya le hice una limpieza pero sigue', '2022-12-08', '12:00:00', ''),
(10, 4, 'pan', 'problemas en la play', 'No enciende y huele como si se hubiese quemado.', '2023-01-16', '11:00:00', ''),
(14, 6, 'alri', 'movil estropeado', 'Se me ha despegado la pantalla del movil', '2022-12-09', '14:00:00', 'fotitos/movil.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajadores`
--

CREATE TABLE `trabajadores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(32) NOT NULL,
  `email` varchar(32) DEFAULT NULL,
  `pass` varchar(32) NOT NULL,
  `foto` varchar(32) NOT NULL,
  `especialidad` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `trabajadores`
--

INSERT INTO `trabajadores` (`id`, `nombre`, `email`, `pass`, `foto`, `especialidad`) VALUES
(1, 'James', 'jd.mobile@gmail.com', '1234', 'person_1-min.jpg', 'ordenadores'),
(2, 'Jean', 'js.mobile@gmail.com', '1234', 'person_4-min.jpg', 'moviles'),
(3, 'Synthia', 'sc.mobile@gmail.com', '1234', 'person_5-min.jpg', 'consolas'),
(4, 'Thomas', 'th.mobile@gmail.com', '1234', 'person_3-min.jpg', 'consolas'),
(5, 'Davin', 'ds.mobile@gmail.com', '1234', 'person_2-min.jpg', 'ordenadores'),
(6, 'Jack', 'jr.mobile@gmail.com', '1234', 'person_6-min.jpg', 'moviles');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `user` varchar(32) DEFAULT NULL,
  `passwd` varchar(32) NOT NULL,
  `email` varchar(32) DEFAULT NULL,
  `foto` varchar(32) NOT NULL DEFAULT 'user.png',
  `administrador` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `user`, `passwd`, `email`, `foto`, `administrador`) VALUES
(3, 'alri', '123', 'alri@gmail.com', '', 0),
(4, 'rial', '123', 'rial@gmail.com', 'user.png', 0),
(5, 'a', '123', 'a@a.a', 'user.png', 0),
(7, 'pan', '1234', 'pan@pan.zgz', '', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `fecha` (`fecha`,`hora`),
  ADD UNIQUE KEY `asunto` (`asunto`,`problema`),
  ADD KEY `Cita_idProfesional` (`idProfesional`),
  ADD KEY `Cita_idUsuario` (`idUsuario`);

--
-- Indices de la tabla `trabajadores`
--
ALTER TABLE `trabajadores`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user` (`user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `trabajadores`
--
ALTER TABLE `trabajadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
