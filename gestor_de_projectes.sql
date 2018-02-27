-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 26-02-2018 a las 16:21:27
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gestor_de_projectes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Estat`
--

CREATE TABLE `Estat` (
  `id` int(11) NOT NULL,
  `nom` varchar(70) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `Estat`
--

INSERT INTO `Estat` (`id`, `nom`) VALUES
(1, 'Sense començar'),
(2, 'En proces'),
(3, 'Terminada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registre`
--

CREATE TABLE `registre` (
  `id` int(11) NOT NULL,
  `id_Subtasca` int(11) DEFAULT NULL,
  `id_Usuari` int(11) DEFAULT NULL,
  `comentari` text COLLATE utf8_spanish2_ci NOT NULL,
  `hores` time NOT NULL,
  `estat` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Subtasca`
--

CREATE TABLE `Subtasca` (
  `id` int(11) NOT NULL,
  `id_Tasca` int(11) DEFAULT NULL,
  `nom` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `descripció` text COLLATE utf8_spanish2_ci NOT NULL,
  `participants` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `temps_maxim` time NOT NULL,
  `temps_restant` time NOT NULL,
  `estat` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Tasca`
--

CREATE TABLE `Tasca` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `descripció` text COLLATE utf8_spanish2_ci NOT NULL,
  `responsable` int(11) DEFAULT NULL,
  `estat` int(11) DEFAULT NULL,
  `temps_maxim` time NOT NULL,
  `temps_restant` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuaris`
--

CREATE TABLE `Usuaris` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `password` varchar(150) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Estat`
--
ALTER TABLE `Estat`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registre`
--
ALTER TABLE `registre`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_Subtasca` (`id_Subtasca`),
  ADD KEY `id_Usuari` (`id_Usuari`),
  ADD KEY `estat` (`estat`);

--
-- Indices de la tabla `Subtasca`
--
ALTER TABLE `Subtasca`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_Tasca` (`id_Tasca`),
  ADD KEY `Subtasca_ibfk_2` (`estat`);

--
-- Indices de la tabla `Tasca`
--
ALTER TABLE `Tasca`
  ADD PRIMARY KEY (`id`),
  ADD KEY `responsable` (`responsable`),
  ADD KEY `estat` (`estat`);

--
-- Indices de la tabla `Usuaris`
--
ALTER TABLE `Usuaris`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Estat`
--
ALTER TABLE `Estat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `registre`
--
ALTER TABLE `registre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Subtasca`
--
ALTER TABLE `Subtasca`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Tasca`
--
ALTER TABLE `Tasca`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Usuaris`
--
ALTER TABLE `Usuaris`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `registre`
--
ALTER TABLE `registre`
  ADD CONSTRAINT `registre_ibfk_1` FOREIGN KEY (`id_Subtasca`) REFERENCES `Subtasca` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `registre_ibfk_2` FOREIGN KEY (`id_Usuari`) REFERENCES `Usuaris` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `registre_ibfk_3` FOREIGN KEY (`estat`) REFERENCES `Estat` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `Subtasca`
--
ALTER TABLE `Subtasca`
  ADD CONSTRAINT `Subtasca_ibfk_1` FOREIGN KEY (`id_Tasca`) REFERENCES `Tasca` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `Subtasca_ibfk_2` FOREIGN KEY (`estat`) REFERENCES `Estat` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `Tasca`
--
ALTER TABLE `Tasca`
  ADD CONSTRAINT `Tasca_ibfk_1` FOREIGN KEY (`responsable`) REFERENCES `Usuaris` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `Tasca_ibfk_2` FOREIGN KEY (`estat`) REFERENCES `Estat` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
