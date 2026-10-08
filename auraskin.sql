-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-10-2026 a las 18:54:28
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `auraskin`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `categoria` varchar(30) NOT NULL,
  `precio` int(11) NOT NULL,
  `imagen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `nombre`, `categoria`, `precio`, `imagen`) VALUES
(1, 'Serum Cat', 'Serum', 11000, 'serum_hidratante.png'),
(2, 'Serum Wix', 'Serum', 11000, 'CAMBIO2.png'),
(3, 'Serum Aura', 'Serum', 11000, 'CAMBIO3.png'),
(4, 'Serum Skin', 'Serum', 11000, 'CAMBIO4.png'),
(5, 'Crema Glow', 'Crema', 16000, 'CAMBIOS1.png'),
(6, 'Crema Moisturizer', 'Crema', 16000, 'CAMBIOS2.png'),
(7, 'Crema Cleaning', 'Crema', 16000, 'CAMBIOS3.png'),
(8, 'Serum Skin 5', 'Serum', 11000, 'CAMBIO5.png'),
(9, 'Serum Skin 6', 'Serum', 11000, 'CAMBIO6.png'),
(10, 'Serum Skin 7', 'Serum', 11000, 'CAMBIO7.png'),
(11, 'Serum Skin 8', 'Serum', 11000, 'CAMBIO8.png'),
(12, 'Crema Glow 4', 'Crema', 16000, 'CAMBIOS4.png'),
(13, 'Crema Glow 5', 'Crema', 16000, 'CAMBIOS5.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reseñas`
--

CREATE TABLE `reseñas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `puntuación` int(11) NOT NULL,
  `reseña` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `reseñas`
--

INSERT INTO `reseñas` (`id`, `nombre`, `puntuación`, `reseña`) VALUES
(1, 'simba', 5, 'Fan de la marca'),
(2, 'tiziana', 5, 'Me encanatron el acabo de las cremas!'),
(3, 'tiziana', 5, 'Me encanatron el acabo de las cremas!'),
(4, 'Emilia', 3, 'tardo en llegar el pedido, pero los producotos muy buenos!'),
(5, 'Emilia', 3, 'tardo en llegar el pedido, pero los producotos muy buenos!'),
(6, 'Emilia', 3, 'tardo en llegar el pedido, pero los producotos muy buenos!'),
(7, 'simba2', 5, 'Voy a comprar otra vez'),
(8, 'Martina', 0, 'Me super gustaron los productos!'),
(9, 'Martina', 0, 'Me super gustaron los productos!'),
(10, 'Irina', 5, 'Amo la marca');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `reseñas`
--
ALTER TABLE `reseñas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `reseñas`
--
ALTER TABLE `reseñas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
