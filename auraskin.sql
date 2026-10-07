-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-10-2026 a las 00:35:36
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
(1, 'Serum Cat', 'Serum', 11000, 'CELESTE.png'),
(2, 'Serum Wix', 'Serum', 11000, 'AuraSkinamarillo2.png'),
(3, 'Serum Aura', 'Serum', 11000, 'verdenuevo.png'),
(4, 'Serum Skin', 'Serum', 11000, 'nuevovioleta.png'),
(5, 'Crema Glow', 'Crema', 16000, 'cremaamarillo.png'),
(6, 'Crema Moist', 'Crema', 16000, 'cremarosa.png'),
(7, 'Crema Clean', 'Crema', 16000, 'cremault.png');

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
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `reseñas`
--
ALTER TABLE `reseñas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
