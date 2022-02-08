-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-02-2022 a las 21:32:18
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.4.27

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
  `COMPROMISOS` varchar(535) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `actas`
--

INSERT INTO `actas` (`N_ACTA`, `TEMA`, `CITADA_POR`, `HORA_INICIO`, `HORA_FIN`, `FECHA`, `PRESIDENTE`, `COMPROMISOS`) VALUES
(8, 'SEGUIENTO ETAPA PROCUTIVA', 'j', '15:27:00', '16:27:00', '2022-02-08', 'zxc', 'f'),
(11, 'SEGUIENTO ETAPA PROCUTIVA', 'j', '15:30:00', '15:30:00', '2022-02-08', 'zxc', 'f');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `participantes`
--

CREATE TABLE `participantes` (
  `ACTA_ID` int(11) NOT NULL,
  `USUARIO_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  MODIFY `N_ACTA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `USUARIO_ID` int(11) NOT NULL AUTO_INCREMENT;

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
