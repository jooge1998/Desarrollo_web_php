-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-03-2022 a las 22:46:08
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `desarrollo_web`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actas`
--

CREATE TABLE `actas` (
  `N_ACTA` int(11) NOT NULL,
  `TEMA` varchar(255) NOT NULL,
  `CITADA_POR` varchar(255) NOT NULL,
  `HORA_INICIO` time NOT NULL,
  `HORA_FIN` time NOT NULL,
  `FECHA` date NOT NULL,
  `PRESIDENTE` varchar(255) NOT NULL,
  `LUGAR` varchar(455) NOT NULL,
  `ORDEN_DIA` varchar(535) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `actas`
--

INSERT INTO `actas` (`N_ACTA`, `TEMA`, `CITADA_POR`, `HORA_INICIO`, `HORA_FIN`, `FECHA`, `PRESIDENTE`, `LUGAR`, `ORDEN_DIA`) VALUES
(8, 'SEGUIENTO ETAPA PROCUTIVA', 'Rector', '15:27:00', '16:27:00', '2022-02-08', 'ing milton perea', 'bioclimatico', 'horarios'),
(21, 'MATRICULAS', 'RECTOR', '16:19:00', '18:19:00', '2022-03-04', 'jefe de dpto de ing', 'bioclimatico', 'MATIRICULAS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `participantes`
--

CREATE TABLE `participantes` (
  `ID` int(11) NOT NULL,
  `ACTA_ID` int(11) NOT NULL,
  `USUARIO_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `participantes`
--

INSERT INTO `participantes` (`ID`, `ACTA_ID`, `USUARIO_ID`) VALUES
(1, 8, 1),
(2, 8, 2),
(3, 8, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `USUARIO_ID` int(11) NOT NULL,
  `NOMBRE` varchar(255) NOT NULL,
  `CARGO` varchar(255) NOT NULL,
  `CONTACTO` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`USUARIO_ID`, `NOMBRE`, `CARGO`, `CONTACTO`) VALUES
(1, 'JUAN PEREZ', 'ING SISTEMAS', '30456532'),
(2, 'MARIA GONZALEZ', 'LIC EN LENGUAS', '3114567800'),
(3, 'DANIEL RAMIREZ', 'INFORMATICO', '3226543322');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actas`
--
ALTER TABLE `actas`
  ADD PRIMARY KEY (`N_ACTA`);

--
-- Indices de la tabla `participantes`
--
ALTER TABLE `participantes`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ACTA_ID` (`ACTA_ID`),
  ADD KEY `USUARIO_ID` (`USUARIO_ID`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`USUARIO_ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actas`
--
ALTER TABLE `actas`
  MODIFY `N_ACTA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `participantes`
--
ALTER TABLE `participantes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `USUARIO_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `participantes`
--
ALTER TABLE `participantes`
  ADD CONSTRAINT `participantes_ibfk_1` FOREIGN KEY (`ACTA_ID`) REFERENCES `actas` (`N_ACTA`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `participantes_ibfk_2` FOREIGN KEY (`USUARIO_ID`) REFERENCES `usuario` (`USUARIO_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
