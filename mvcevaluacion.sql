-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-01-2023 a las 14:23:55
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mvcevaluacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

CREATE TABLE `menu` (
  `id` int(3) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Descripcion` varchar(250) NOT NULL,
  `Dependencia` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `menu`
--

INSERT INTO `menu` (`id`, `Nombre`, `Descripcion`, `Dependencia`) VALUES
(1, 'Catalogos', 'Listado de catalogos', NULL),
(2, 'Tipos de archivos', 'Catalogo de archivos', 1),
(3, 'Profesiones', 'Listado de profesiones', 1),
(4, 'Marcas', 'Listado de marcas de autos', NULL),
(5, 'SEAT', 'Marca SEAT', 2),
(6, 'BMW', 'Marca bmw', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu_padre`
--

CREATE TABLE `menu_padre` (
  `id` int(3) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Menu_id` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `menu_padre`
--

INSERT INTO `menu_padre` (`id`, `Nombre`, `Menu_id`) VALUES
(1, 'Catalogos', 1),
(2, 'Marcas', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Dependencia` (`Dependencia`);

--
-- Indices de la tabla `menu_padre`
--
ALTER TABLE `menu_padre`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Menu_id` (`Menu_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `menu_padre`
--
ALTER TABLE `menu_padre`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`Dependencia`) REFERENCES `menu_padre` (`Menu_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
