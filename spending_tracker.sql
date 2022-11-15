-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-11-2022 a las 01:35:42
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `spending_tracker`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gastos`
--

CREATE TABLE `gastos` (
  `id` int(11) NOT NULL,
  `cantidad` float(8,2) NOT NULL,
  `categoria` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp(),
  `descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `gastos`
--

INSERT INTO `gastos` (`id`, `cantidad`, `categoria`, `fecha`, `descripcion`) VALUES
(2, 34.50, 6, '2022-09-26 20:19:52', 'jugos '),
(3, 23.99, 1, '2022-09-26 20:21:33', 'agua mineral '),
(4, 38.00, 1, '2022-09-26 20:23:13', 'palomitas '),
(5, 432.00, 1, '2022-09-26 20:23:52', 'picaña '),
(6, 12.00, 1, '2022-09-26 20:25:15', 'coca cola '),
(8, 65.00, 1, '2022-09-26 20:28:22', 'doritos '),
(9, 105.00, 1, '2022-09-26 20:29:15', 'comida china '),
(10, 576.00, 1, '2022-09-26 20:29:58', 'cartas yugi oh '),
(11, 22.00, 1, '2022-10-03 21:47:51', 'burro'),
(12, 18.00, 1, '2022-10-03 21:54:10', 'fuze tea'),
(13, 400.00, 1, '2022-10-03 23:25:31', 'gym'),
(16, 12.00, 6, '2022-10-10 21:30:59', 'coca cola'),
(17, 100.00, 6, '2022-11-10 23:06:44', 'longaniza'),
(23, 20.00, 1, '2022-11-13 23:16:53', 'salbutes'),
(24, 32.00, 6, '2022-11-14 05:37:37', 'sabritas'),
(25, 124.00, 6, '2022-11-14 06:16:19', 'papas'),
(26, 32.00, 5, '2022-11-14 06:54:28', 'Renta'),
(27, 32.00, 22, '2022-11-14 22:02:33', 'taxi');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gastos_categorias`
--

CREATE TABLE `gastos_categorias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `gastos_categorias`
--

INSERT INTO `gastos_categorias` (`id`, `nombre`) VALUES
(1, 'comida'),
(5, 'gastos fijos'),
(6, 'Diversión'),
(22, 'transporte');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `correo`, `password`, `telefono`, `nombre`, `status`) VALUES
(1, 'davidarzaplo@gmail.com', '123123', '123123', 'david', 1),
(2, 'papid@gmail.com', '123123', '9983044559', '1', 1),
(21, 'davidarzapalo0223@outlook.com', '123456789', '9983044559', 'David A', 1),
(22, 'Lv1dgamer@gmail.com', '1234', '1224667', 'david Isai', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `gastos`
--
ALTER TABLE `gastos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `gastos_categorias`
--
ALTER TABLE `gastos_categorias`
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
-- AUTO_INCREMENT de la tabla `gastos`
--
ALTER TABLE `gastos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `gastos_categorias`
--
ALTER TABLE `gastos_categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
