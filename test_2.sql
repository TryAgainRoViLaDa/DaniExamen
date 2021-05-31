-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-05-2021 a las 22:25:46
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `test`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugadors`
--

CREATE TABLE `jugadors` (
  `nick` varchar(50) DEFAULT NULL,
  `contrasenya` varchar(20) DEFAULT NULL,
  `codi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `jugadors`
--

INSERT INTO `jugadors` (`nick`, `contrasenya`, `codi`) VALUES
('joav2222333222', '222', 37),
('joav22223332222', '222', 38),
('juan', 'juanito', 39),
('juan2', '222', 40),
('juan22', '222', 41),
('juan223', '332', 42),
('juan2233', '4444', 43),
('juan22332', '112', 44),
('dani', '123', 45),
('', '', 46),
('Osvaldo', '123', 47),
('klk', 'klk', 48),
('bondia', 'bondia', 49);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partida`
--

CREATE TABLE `partida` (
  `codi` int(11) NOT NULL,
  `posicioX_jug` float NOT NULL,
  `posicioY_jug` float NOT NULL,
  `id_jugador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `partida`
--

INSERT INTO `partida` (`codi`, `posicioX_jug`, `posicioY_jug`, `id_jugador`) VALUES
(10, 1692, 420, 47),
(11, 1491.33, 292, 45),
(12, 710, 2444.5, 37);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `jugadors`
--
ALTER TABLE `jugadors`
  ADD PRIMARY KEY (`codi`);

--
-- Indices de la tabla `partida`
--
ALTER TABLE `partida`
  ADD PRIMARY KEY (`codi`),
  ADD KEY `id_jugador` (`id_jugador`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `jugadors`
--
ALTER TABLE `jugadors`
  MODIFY `codi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT de la tabla `partida`
--
ALTER TABLE `partida`
  MODIFY `codi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `partida`
--
ALTER TABLE `partida`
  ADD CONSTRAINT `partida_ibfk_1` FOREIGN KEY (`id_jugador`) REFERENCES `jugadors` (`codi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
