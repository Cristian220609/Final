-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-12-2023 a las 15:59:05
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `base`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultas`
--

CREATE TABLE `consultas` (
  `id` int(11) NOT NULL,
  `nombres` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `dni` int(10) UNSIGNED NOT NULL,
  `correo` varchar(255) NOT NULL,
  `celular` varchar(20) NOT NULL,
  `estado_civil` varchar(20) NOT NULL,
  `tipo_mensaje` varchar(20) NOT NULL,
  `asunto` varchar(255) NOT NULL,
  `cuerpo_mensaje` text NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT current_timestamp(),
  `nombre_real` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `consultas`
--

INSERT INTO `consultas` (`id`, `nombres`, `apellidos`, `dni`, `correo`, `celular`, `estado_civil`, `tipo_mensaje`, `asunto`, `cuerpo_mensaje`, `fecha_creacion`, `nombre_real`) VALUES
(1, '2313', '123', 1213151, 'e@gmai.com', '123', 'divorciado', 'solicitud', '123', '123', '2023-12-06 15:48:09', ''),
(18, '123', '123', 1213151, 'te1@gmail.com', '213', 'soltero', 'consulta', '213', '12323', '2023-12-06 15:59:11', 'ANTONIO ARROYO PAZ'),
(19, '23131', '2312', 74940705, 'tes1@gmail.com', '123123', 'soltero', 'reclamo', 'asd', 'asdasdad', '2023-12-06 15:59:35', 'CRISTIAN ABEL CCAMA GUTIERREZ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `producto` varchar(20) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` double NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`producto`, `cantidad`, `precio`, `fecha`) VALUES
('Camiseta Casual', 100, 19.99, '2023-12-12'),
('Jeans Slim Fit', 100, 29.99, '2023-12-12'),
('Chaqueta de Cuero', 100, 89.99, '2023-12-12'),
('Vestido Floral', 100, 49.99, '2023-12-12'),
('Zapatillas Deportiva', 100, 39.99, '2023-12-12'),
('Sudadera con Capucha', 100, 24.99, '2023-12-12'),
('Pantalones de Vestir', 100, 34.99, '2023-12-12'),
('Blusa Elegante', 100, 29.99, '2023-12-12'),
('Gorra Deportiva', 100, 14.99, '2023-12-12'),
('Falda Plisada', 100, 19.99, '2023-12-12'),
('Sweater Casual', 100, 27.99, '2023-12-12'),
('Gafas de Sol Elegant', 100, 39.99, '2023-12-12'),
('Shorts Deportivos', 100, 22.99, '2023-12-12'),
('Bolso Elegante', 100, 45.99, '2023-12-12'),
('Reloj Clásico', 100, 59.99, '2023-12-12'),
('Chaleco Casual', 100, 32.99, '2023-12-12'),
('Botines de Moda', 100, 54.99, '2023-12-12'),
('Vestido de Noche', 100, 79.99, '2023-12-12'),
('Gorra Urbana', 100, 18.99, '2023-12-12'),
('Abrigo Elegante', 100, 89.99, '2023-12-12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contrasena` varchar(255) NOT NULL,
  `DNI` int(8) NOT NULL,
  `nombre_real` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `email`, `contrasena`, `DNI`, `nombre_real`) VALUES
(1, '123', 'test@gmail.com', '123', 0, NULL),
(2, 'Cristian PRo', 'cristiangamer03@outlook.com', 'ASD#123dsadcqw1', 1213151, 'ANTONIO ARROYO PAZ'),
(3, 'CristianPRo', 'rabito112233@gmail.com', 'HOLasdas12321!', 74940705, 'CRISTIAN ABEL CCAMA GUTIERREZ');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `consultas`
--
ALTER TABLE `consultas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `consultas`
--
ALTER TABLE `consultas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
