-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-12-2020 a las 19:41:16
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `decartonbd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `carrito`
--

INSERT INTO `carrito` (`id`, `id_usuario`, `id_producto`, `cantidad`) VALUES
(80, 14, 16, 1),
(81, 14, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `fecha_union` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `nombre`, `apellido`, `correo`, `password`, `fecha_union`) VALUES
(10, 'Ana', 'Alfaro', 'ana@hotmail.com', 'anacamila', '2020-12-03 06:28:36'),
(11, 'Sebastian', 'Muñoz', 'sebas@hotmail.com', 'sebas1234', '2020-12-03 06:39:31'),
(12, 'Juan', 'Aguilera', 'juan@gmail.com', '12345678', '2020-12-03 07:00:31'),
(13, 'Manuel', 'Lopez', 'manuel@gmail.com', 'manuel12345', '2020-12-03 07:01:34'),
(14, 'Juanma', 'Alfaro', 'juanma@gmail.com', 'juanma12345', '2020-12-03 07:06:20'),
(15, 'Julio', 'Perez', 'julio32@gmail.com', 'julio3232', '2020-12-03 07:13:34'),
(16, 'Armando', 'Ortiz', 'ortiz_armando@outlook.com', 'holahola', '2020-12-04 04:25:14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `domicilio`
--

CREATE TABLE `domicilio` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `codigo_postal` varchar(5) NOT NULL,
  `Estado` varchar(30) NOT NULL,
  `Ciudad` varchar(30) NOT NULL,
  `Fraccionamiento` varchar(30) NOT NULL,
  `Calle` varchar(30) NOT NULL,
  `num_ext` varchar(10) NOT NULL,
  `num_int` varchar(10) DEFAULT NULL,
  `telefono` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `domicilio`
--

INSERT INTO `domicilio` (`id`, `id_usuario`, `codigo_postal`, `Estado`, `Ciudad`, `Fraccionamiento`, `Calle`, `num_ext`, `num_int`, `telefono`) VALUES
(16, 10, '35015', 'Durango', 'Gomez Palacio', 'San Antonio', 'San Juan ', '268', '', '+528712334511'),
(17, 13, '35015', 'Durango', 'Lerdo', 'Miravalle', 'simon', '546', '', '8765432113'),
(18, 14, '35060', 'Chihuahua', 'Juarez', 'Ha Hey', 'Eii', '879', '', '8711456789');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `metodo_pago` varchar(20) NOT NULL,
  `total` double NOT NULL,
  `id_domicilio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`id`, `id_usuario`, `metodo_pago`, `total`, `id_domicilio`) VALUES
(9, 10, 'OXXO', 4080, 16),
(10, 13, 'OXXO', 5100, 17),
(11, 14, 'OXXO', 13910, 18);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido_detalle`
--

CREATE TABLE `pedido_detalle` (
  `id` int(11) NOT NULL,
  `id_orden` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pedido_detalle`
--

INSERT INTO `pedido_detalle` (`id`, `id_orden`, `id_producto`, `cantidad`, `precio`) VALUES
(3035, 9, 1, 1, 1360),
(3036, 9, 8, 2, 1360),
(3037, 10, 16, 1, 2750),
(3038, 10, 15, 1, 2350),
(3039, 11, 2, 1, 440),
(3040, 11, 1, 2, 1360),
(3041, 11, 3, 1, 1650),
(3042, 11, 4, 1, 500),
(3043, 11, 5, 1, 600),
(3044, 11, 6, 1, 3200),
(3045, 11, 11, 3, 1600);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `precio` double NOT NULL,
  `almacen` int(11) NOT NULL,
  `imagen` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `nombre`, `descripcion`, `precio`, `almacen`, `imagen`) VALUES
(1, 'Jersey Barcelona', 'Camiseta de visitante de FC Barcelona 2020-2021.', 1360, 47, 'img/catalogo_1.png'),
(2, 'Balon PUMA', 'Balon de futbol de la marca PUMA.', 440, 34, 'img/catalogo_2.png'),
(3, 'Tennis Dama', 'Calzado deportivo marca PUMA para dama.', 1650, 14, 'img/catalogo_3png.png'),
(4, 'Playera Dama', 'Playera deportiva sin mangas para Dama marca NIKE.', 500, 24, 'img/catalogo_4png.png'),
(5, 'Bolso Deportivo', 'Bolso deportivo unisex.', 600, 6, 'img/catalogo_5png.png'),
(6, 'Tennis Jordan', 'Calzado para Baketball marca Jordan Hombre.', 3200, 15, 'img/catalogo_6png.png'),
(7, 'Jersey Dodgers', 'Jersey Azul de LA Dodgers unisex.', 2360, 60, 'img/dodgers.jpg'),
(8, 'Jersey Seleccion Mexicana', 'Jersey de visita de la Seleccion Mexicana de Futbol.', 1360, 73, 'img/mexico.png'),
(9, 'Jersey Kansas City', 'Jersey Rojo Kansas City Patrick Mahomes.', 2400, 14, 'img/mahomes.jpg'),
(10, 'Zapatilla Depotiva Kappa', 'Calzado para futbol marca Kappa.', 1200, 4, 'img/tenis_Kappa.jpg'),
(11, 'Jersey Milan', 'Jersey AC Milan Local 2020-2021.', 1600, 25, 'img/Milan.jpg'),
(12, 'Zapatilla Depotiva PUMA', 'Calzado para futbol marca PUMA.', 3000, 8, 'img/tenis_Puma.jpg'),
(13, 'Jersey PSG', 'Jersey Alternativo Paris Saint Germain 2019-2020 (20% OFF).', 1600, 14, 'img/PSG.jpg'),
(14, 'Gorra Santos', 'Gorra Verde Club Santos Laguna.', 650, 33, 'img/santos.webp'),
(15, 'Zapatilla Deportiva ADIDAS', 'Calzado para futbol marca ADIDAS.', 2350, 21, 'img/tenis_Adidas.jpg'),
(16, 'Zapatilla Deportiva NIKE', 'Calzado para futbol marca NIKE', 2750, 11, 'img/tenis_Nike.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_carrito_usuario` (`id_usuario`),
  ADD KEY `fk_carrito_producto` (`id_producto`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `domicilio`
--
ALTER TABLE `domicilio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_domicilio_usuario` (`id_usuario`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pedido_usuario` (`id_usuario`),
  ADD KEY `fk_pedido_domicilio` (`id_domicilio`);

--
-- Indices de la tabla `pedido_detalle`
--
ALTER TABLE `pedido_detalle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pedido_detalle_orden` (`id_orden`),
  ADD KEY `fk_pedido_detalle_producto` (`id_producto`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `domicilio`
--
ALTER TABLE `domicilio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `pedido_detalle`
--
ALTER TABLE `pedido_detalle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3046;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `fk_carrito_producto` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_carrito_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `cliente` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `domicilio`
--
ALTER TABLE `domicilio`
  ADD CONSTRAINT `fk_domicilio_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `cliente` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `fk_pedido_domicilio` FOREIGN KEY (`id_domicilio`) REFERENCES `domicilio` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_pedido_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `cliente` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pedido_detalle`
--
ALTER TABLE `pedido_detalle`
  ADD CONSTRAINT `fk_pedido_detalle_orden` FOREIGN KEY (`id_orden`) REFERENCES `pedido` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_pedido_detalle_producto` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
