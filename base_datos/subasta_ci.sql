-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-12-2016 a las 03:22:47
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `subasta_ci`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogosubasta`
--

CREATE TABLE `catalogosubasta` (
  `id` int(11) NOT NULL,
  `IsActiva` int(11) NOT NULL DEFAULT '1',
  `Usuario_id` int(11) NOT NULL,
  `Subasta_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `catalogosubasta`
--

INSERT INTO `catalogosubasta` (`id`, `IsActiva`, `Usuario_id`, `Subasta_id`) VALUES
(1, 1, 2, 1),
(2, 1, 3, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripcion`
--

CREATE TABLE `inscripcion` (
  `id` int(11) NOT NULL,
  `fechaInscripcion` date NOT NULL,
  `Usuario_id` int(11) NOT NULL,
  `CatalogoSubasta_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `inscripcion`
--

INSERT INTO `inscripcion` (`id`, `fechaInscripcion`, `Usuario_id`, `CatalogoSubasta_id`) VALUES
(1, '2016-11-29', 3, 1),
(2, '2016-11-29', 2, 2),
(3, '2016-11-27', 4, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oferta`
--

CREATE TABLE `oferta` (
  `id` int(11) NOT NULL,
  `valor` float NOT NULL,
  `Usuario_id` int(11) NOT NULL,
  `Subasta_id` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `oferta`
--

INSERT INTO `oferta` (`id`, `valor`, `Usuario_id`, `Subasta_id`, `updated_at`, `created_at`) VALUES
(15, 255, 2, 2, '2016-12-02 04:59:50', '2016-12-02 04:59:50'),
(16, 257, 2, 2, '2016-12-02 06:41:53', '2016-12-02 06:41:53'),
(17, 258, 2, 2, '2016-12-02 06:42:28', '2016-12-02 06:42:28'),
(18, 258, 2, 2, '2016-12-01 23:54:55', '2016-12-01 23:54:55'),
(19, 260, 2, 2, '2016-12-01 23:54:59', '2016-12-01 23:54:59'),
(20, 274, 2, 2, '2016-12-01 23:56:04', '2016-12-01 23:56:04'),
(21, 276, 2, 2, '2016-12-01 23:56:10', '2016-12-01 23:56:10'),
(22, 277, 4, 2, '2016-12-01 23:59:59', '2016-12-01 23:59:59'),
(23, 281, 4, 2, '2016-12-02 00:00:09', '2016-12-02 00:00:09'),
(24, 290, 2, 2, '2016-12-02 01:59:48', '2016-12-02 01:59:48'),
(25, 300, 4, 2, '2016-12-02 02:00:01', '2016-12-02 02:00:01'),
(26, 500, 2, 2, '2016-12-02 02:00:09', '2016-12-02 02:00:09'),
(27, 1000, 4, 2, '2016-12-02 02:00:17', '2016-12-02 02:00:17'),
(28, 1500, 2, 2, '2016-12-02 02:00:26', '2016-12-02 02:00:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `IsLote` int(11) NOT NULL DEFAULT '0',
  `foto` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TipoProducto_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `nombre`, `IsLote`, `foto`, `TipoProducto_id`) VALUES
(1, 'Camisa Polo', 1, 'camisa_polo.jpg', 2),
(3, 'Cocina', 0, 'cocina.jpg', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subasta`
--

CREATE TABLE `subasta` (
  `id` int(11) NOT NULL,
  `fechaSubasta` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `precioSujerido` float NOT NULL,
  `precioActual` float DEFAULT NULL,
  `fechaFinal` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `descripcion` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Producto_id` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `FINALIZADA` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `subasta`
--

INSERT INTO `subasta` (`id`, `fechaSubasta`, `precioSujerido`, `precioActual`, `fechaFinal`, `descripcion`, `Producto_id`, `updated_at`, `FINALIZADA`) VALUES
(1, '2016-12-02 01:50:21', 50, 50, '0000-00-00 00:00:00', 'Esto si esta chivo compralo', 1, '2016-12-02 01:50:21', 1),
(2, '2016-12-02 02:18:02', 250, 1500, '2016-12-02 02:18:00', 'Puja papu', 3, '2016-12-02 02:18:02', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subastaterminada`
--

CREATE TABLE `subastaterminada` (
  `id` int(11) NOT NULL,
  `IsReadquisicion` int(11) NOT NULL DEFAULT '0',
  `montoOfertaFinal` float NOT NULL,
  `montoDescuento` float DEFAULT '0',
  `CatalogoSubasta_id` int(11) NOT NULL,
  `TarifaComprador_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarifacomprador`
--

CREATE TABLE `tarifacomprador` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `porcentajeTarifa` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoproducto`
--

CREATE TABLE `tipoproducto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tipoproducto`
--

INSERT INTO `tipoproducto` (`id`, `nombre`) VALUES
(1, 'Electronicos'),
(2, 'Moda y Belleza');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipousuario`
--

CREATE TABLE `tipousuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tipousuario`
--

INSERT INTO `tipousuario` (`id`, `nombre`) VALUES
(1, 'Administrador'),
(2, 'Cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `correo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `apodo` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `capacidadPago` float NOT NULL DEFAULT '0',
  `TipoUsuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `apellido`, `correo`, `password`, `apodo`, `capacidadPago`, `TipoUsuario_id`) VALUES
(2, 'Dario', 'Motto', 'dario.motto@hotmail.com', '12345', 'ARATTO', 10000, 1),
(3, 'Roman', 'Araya', 'dar@motto.c', '12345', 'MOTTO', 2000, 2),
(4, 'Andre ', 'Leto', 'andre@leto.com', '12345', 'Leto', 10000, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `catalogosubasta`
--
ALTER TABLE `catalogosubasta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_CatalogoSubasta_Usuario1_idx` (`Usuario_id`),
  ADD KEY `fk_CatalogoSubasta_Subasta1_idx` (`Subasta_id`);

--
-- Indices de la tabla `inscripcion`
--
ALTER TABLE `inscripcion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Inscripcion_Usuario_idx` (`Usuario_id`),
  ADD KEY `fk_Inscripcion_CatalogoSubasta_idx` (`CatalogoSubasta_id`);

--
-- Indices de la tabla `oferta`
--
ALTER TABLE `oferta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Oferta_Usuario1_idx` (`Usuario_id`),
  ADD KEY `fk_Oferta_Subasta1_idx` (`Subasta_id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Producto_TipoProducto1_idx` (`TipoProducto_id`);

--
-- Indices de la tabla `subasta`
--
ALTER TABLE `subasta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Subasta_Producto1_idx` (`Producto_id`);

--
-- Indices de la tabla `subastaterminada`
--
ALTER TABLE `subastaterminada`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_SubastaTerminada_CatalogoSubasta1_idx` (`CatalogoSubasta_id`),
  ADD KEY `fk_SubastaTerminada_TarifaComprador1_idx` (`TarifaComprador_id`);

--
-- Indices de la tabla `tarifacomprador`
--
ALTER TABLE `tarifacomprador`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipoproducto`
--
ALTER TABLE `tipoproducto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `correo_UNIQUE` (`correo`),
  ADD KEY `fk_Usuario_TipoUsuario_idx` (`TipoUsuario_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `catalogosubasta`
--
ALTER TABLE `catalogosubasta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `inscripcion`
--
ALTER TABLE `inscripcion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `oferta`
--
ALTER TABLE `oferta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `subasta`
--
ALTER TABLE `subasta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `subastaterminada`
--
ALTER TABLE `subastaterminada`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tarifacomprador`
--
ALTER TABLE `tarifacomprador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tipoproducto`
--
ALTER TABLE `tipoproducto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `catalogosubasta`
--
ALTER TABLE `catalogosubasta`
  ADD CONSTRAINT `fk_CatalogoSubasta_Subasta1` FOREIGN KEY (`Subasta_id`) REFERENCES `subasta` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_CatalogoSubasta_Usuario1` FOREIGN KEY (`Usuario_id`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `inscripcion`
--
ALTER TABLE `inscripcion`
  ADD CONSTRAINT `fk_Inscripcion_CatalogoSubasta1` FOREIGN KEY (`CatalogoSubasta_id`) REFERENCES `catalogosubasta` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Inscripcion_Usuario1` FOREIGN KEY (`Usuario_id`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `oferta`
--
ALTER TABLE `oferta`
  ADD CONSTRAINT `fk_Oferta_Subasta1` FOREIGN KEY (`Subasta_id`) REFERENCES `subasta` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Oferta_Usuario1` FOREIGN KEY (`Usuario_id`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `fk_Producto_TipoProducto1` FOREIGN KEY (`TipoProducto_id`) REFERENCES `tipoproducto` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `subasta`
--
ALTER TABLE `subasta`
  ADD CONSTRAINT `fk_Subasta_Producto1` FOREIGN KEY (`Producto_id`) REFERENCES `producto` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `subastaterminada`
--
ALTER TABLE `subastaterminada`
  ADD CONSTRAINT `fk_SubastaTerminada_CatalogoSubasta1` FOREIGN KEY (`CatalogoSubasta_id`) REFERENCES `catalogosubasta` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_SubastaTerminada_TarifaComprador1` FOREIGN KEY (`TarifaComprador_id`) REFERENCES `tarifacomprador` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_Usuario_TipoUsuario` FOREIGN KEY (`TipoUsuario_id`) REFERENCES `tipousuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
