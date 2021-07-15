-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-07-2021 a las 21:08:35
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(400) NOT NULL,
  `imagen` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `descripcion`, `imagen`) VALUES
(1, 'Mujeres', 'mujer', 'woman.JPG'),
(2, 'Hombres', 'hombre', 'men.JPG'),
(3, 'Accesorios', 'Acessorios', 'accesorio.JPG');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `envios`
--

CREATE TABLE `envios` (
  `id_envio` int(11) NOT NULL,
  `id_venta` int(11) NOT NULL,
  `estado` varchar(250) COLLATE utf8_bin NOT NULL,
  `direccion` varchar(250) COLLATE utf8_bin NOT NULL,
  `cp` varchar(11) COLLATE utf8_bin NOT NULL,
  `telefono` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `envios`
--

INSERT INTO `envios` (`id_envio`, `id_venta`, `estado`, `direccion`, `cp`, `telefono`) VALUES
(68, 88, 'Baja California Sur', 'cfvghbjn', '123456789', '234567'),
(69, 89, 'Baja California Sur', '34567', '23456789', '45678'),
(70, 90, 'Coahuila de Zaragoza', 'Cda Benito 18, San Antonio, Milpa Alta', '1234567', '1234567');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(300) NOT NULL,
  `descripcion` text NOT NULL,
  `precio` double NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `talla` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `precio`, `imagen`, `id_categoria`, `talla`, `color`) VALUES
(1, 'Pans para hombre', 'Pantalones deportivos de hombres con cordón con estampado de dibujo', 350, 'pans1.webp', 1, 'M', 'negro'),
(19, 'Pans para hombre con franjas', 'Pantalones deportivos de hombres con cordón con estampado de slogan', 360, 'pans2.webp', 2, 'M', 'negro'),
(20, 'Shork negro mujer', 'Shorts biker unicolor de elasticidad alta', 84, 'short1.webp', 3, 'S', 'negro'),
(21, 'Leggings deportivos', 'Leggings deportivos con estampado de mármol panel con malla', 217, 'legins1.webp', 4, 'G', 'blanco'),
(22, 'Leggings deportivos ', 'Leggings deportivos ajustados de lado de rayas', 179, 'legins2.webp', 5, 'M', 'negro'),
(23, 'Conjunto deportivo', 'Capucha con cordón con cremallera con pantalones deportivos', 664, 'conjunto2.webp', 6, 'L', 'gris'),
(24, 'Conjunto con short', 'Camiseta con estampado de letra de color combinado con shorts track', 473, 'conjunto1.webp', 7, 'M', 'conbinado'),
(25, 'Pieza de short', 'Shorts deportivos de cintura elástica unido en contraste', 346, 'short2.webp', 8, 'S', 'gris,negro,blanco'),
(26, 'Cazadora', 'Cazadora deportiva con capucha irregular con cremallera impermeable', 349, 'chamarra1.webp', 13, 'G', 'blanco'),
(27, 'Conjunto sport', 'Conjunto deportivo transpirable suave de color combinado', 433, 'conjun4.webp', 11, 'S', 'negro, rojo'),
(28, 'Sudadera y pans', 'Sudadera con forro térmico unida con estampado de letra con joggers', 60, 'conjunto5.webp', 12, 'G', 'gris y azul'),
(29, 'Jeans', '4 piezas leggings deportivos de cintura con banda ancha de buena elasticidad', 800, 'jeans1.webp', 14, 'M', 'griz,amarillo,rosa,azul'),
(30, 'Chamarra deportiva', 'Chaquetas deportivas para hombre Deportivo', 335, 'chamarra2.webp', 10, 'M', 'blanco y azul'),
(31, 'Gafas de sol', 'Gafas de sol de ciclismo deportivas con lentes tintadas para hombre', 99, 'accesorio1.webp', 15, 'M', 'gris'),
(32, 'Camisa negra', 'Camiseta deportiva con malla', 187, 'blusa2.webp', 16, 'M', 'negro'),
(33, 'Top para mujer', 'Top con estampado de letras sin sujetador', 140, 'blusa3.webp', 18, 'S', 'blanco'),
(34, 'Pans gris deportivo ', 'Pans deportivos de cintura con cordón con estampado de letra', 349, 'pansh3.webp', 18, 'M', 'gris'),
(36, 'Pantalón deportivo', 'Pantalones & leggings deportivos para hombre Deportivo', 231, 'pansh2.webp', 17, 'G', 'gris'),
(37, 'Top deportivo', 'Top tank deportivo con estampado de slogan', 123, 'blusa4.webp', 19, 'M', 'naranja'),
(38, 'Mancuerna', '1 pieza mancuerna de agua fitness', 93, 'accesorio2.webp', 20, 'Unitalla', 'rosa'),
(39, 'Capucha deportiva', 'Capucha deportiva unicolor con cordón', 134, 'blusa5.webp', 21, 'L', 'vino'),
(40, 'Leggins para hombre', 'Leggings deportivos panel en contraste con bolsillo de móvil', 278, 'pansh1.webp', 23, 'XL', 'gris y negro'),
(41, 'Liga para pierna', 'Equipo de deporte Ejercicio físico', 88, 'accesrio3.webp', 25, 'Unitalla', 'negro y rosa'),
(42, 'Sudadera para hombre', 'Sudadera deportiva de manga raglán con cremallera media', 310, 'sudaderah1.webp', 28, 'M', 'negro'),
(43, 'Chamarra deportiva ', 'Cazadora anorak con bolsillo delantero con parche', 444, 'chamarra3.webp', 27, 'XL', 'blanco'),
(44, 'Sudadera top', 'Capucha deportiva corta con cordón de hombros caídos unicolor', 245, 'sudadera1.webp\r\n', 26, 'M', 'gris'),
(45, 'Banda de resitencia', '1 pieza banda de resistencia del pedal del cinturón', 189, 'accesrio4.webp', 31, 'Unitalla', 'negro'),
(46, 'Sudadera anorak', 'Cazadora anorak deportiva con cremallera media de dos colores', 240, 'sudadera2.webp', 32, 'L', 'negro'),
(47, 'Zapatos deportivos', 'Zapatos deportivos para hombre Liso Lazada', 602, 'zapatos1.webp', 34, '27', 'negro'),
(48, 'Banda para glúteos', 'Banda de resistencia de entrenamiento de glúteos de ombré', 93, 'accesorio5.webp', 34, 'Unitalla', 'rosa'),
(49, 'Sudadera deportiva lisa', 'Cazadoras deportivas Cremallera Liso', 301, 'sudadera3.webp', 35, 'M', 'negro'),
(50, 'Sudadera deportiva ', 'Sudadera deportiva unicolor con cremallera con ojal de pulgar', 269, 'sudadera4.webp', 38, 'XL', 'morado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_venta`
--

CREATE TABLE `productos_venta` (
  `id` int(11) NOT NULL,
  `id_venta` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` double NOT NULL,
  `precio` double NOT NULL,
  `subtotal` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos_venta`
--

INSERT INTO `productos_venta` (`id`, `id_venta`, `id_producto`, `cantidad`, `precio`, `subtotal`) VALUES
(60, 71, 50, 5, 269, 1345),
(69, 79, 48, 1, 93, 93),
(70, 80, 50, 1, 269, 269),
(71, 81, 50, 1, 269, 269),
(72, 82, 50, 1, 269, 269),
(73, 83, 50, 1, 269, 269),
(74, 84, 49, 1, 301, 301),
(75, 85, 49, 1, 301, 301),
(76, 86, 50, 1, 269, 269),
(77, 87, 49, 1, 301, 301),
(78, 88, 49, 1, 301, 301),
(79, 88, 50, 1, 269, 269),
(80, 89, 50, 1, 269, 269),
(81, 90, 49, 1, 301, 301);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_usuario`
--

CREATE TABLE `registro_usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_bin NOT NULL,
  `apellido_paterno` varchar(255) COLLATE utf8_bin NOT NULL,
  `apellido_materno` varchar(255) COLLATE utf8_bin NOT NULL,
  `usuario` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `registro_usuario`
--

INSERT INTO `registro_usuario` (`id_usuario`, `nombre`, `apellido_paterno`, `apellido_materno`, `usuario`, `email`, `password`) VALUES
(1, 'Michelle', 'Gonzalez', 'Ortz', 'mich', 'mich@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(14, 'Alejandro', 'Pozos', 'Rivera', 'alex', 'alex@gmai.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(15, 'xdcfghj', 'fghj', 'cfgvhbjk', 'xdfcghj', 'xdcfghj', '340f399d5e7e5cc2fb11c57c3dff8fc5e5402cbd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(255) COLLATE utf8_bin NOT NULL,
  `apellido_paterno` varchar(255) COLLATE utf8_bin NOT NULL,
  `apellido_materno` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `telefono` varchar(255) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `apellido_paterno`, `apellido_materno`, `email`, `telefono`, `password`) VALUES
(1, '', '', '', '', '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
(2, '345678', '45678', '456789', '45678@mj', '234567', '1f03a0a8c9498844274f4d789a310b415060c1d0'),
(3, '', '', '', '', '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `total` double NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id`, `id_usuario`, `total`, `fecha`) VALUES
(68, 3, 0, '2021-07-14 12:07:28'),
(88, 3, 570, '2021-07-14 12:07:38'),
(89, 3, 269, '2021-07-14 12:07:27'),
(90, 3, 301, '2021-07-14 13:07:56');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `envios`
--
ALTER TABLE `envios`
  ADD PRIMARY KEY (`id_envio`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos_venta`
--
ALTER TABLE `productos_venta`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registro_usuario`
--
ALTER TABLE `registro_usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `envios`
--
ALTER TABLE `envios`
  MODIFY `id_envio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `productos_venta`
--
ALTER TABLE `productos_venta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT de la tabla `registro_usuario`
--
ALTER TABLE `registro_usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
