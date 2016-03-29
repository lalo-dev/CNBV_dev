-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-03-2016 a las 04:08:19
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `cnbv`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auditoria`
--

CREATE TABLE IF NOT EXISTS `auditoria` (
  `idUsuarioCreador` int(11) NOT NULL,
  `fechaCreacion` datetime NOT NULL,
  `idUsuarioModificador` int(11) NOT NULL,
  `fechaModificacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estatus`
--

CREATE TABLE IF NOT EXISTS `estatus` (
`idEstatus` int(11) NOT NULL,
  `nombreEstatus` varchar(50) COLLATE utf8_bin NOT NULL,
  `descripcionEstatus` varchar(150) COLLATE utf8_bin NOT NULL,
  `idUsuarioCreadorEstatus` int(11) NOT NULL,
  `fechaCreacionEstatus` datetime NOT NULL,
  `idUsuarioModificadorEstatus` int(11) NOT NULL,
  `fechaModificacionEstatus` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenespublicaciones`
--

CREATE TABLE IF NOT EXISTS `imagenespublicaciones` (
`idImagenPublicacion` int(11) NOT NULL,
  `idPublicacionImagenesPublicaciones` int(11) NOT NULL,
  `nombreImagenesPublicaciones` varchar(150) COLLATE utf8_bin NOT NULL,
  `idEstatusImagenesPublicaciones` int(11) NOT NULL,
  `idUsuarioCreadorImagenesPublicaciones` int(11) NOT NULL,
  `fechaCreacionImagenesPublicaciones` datetime NOT NULL,
  `idUsuarioModificadorImagenesPublicaciones` int(11) NOT NULL,
  `fechaModificacionImagenesPublicaciones` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `imagenespublicaciones`
--

INSERT INTO `imagenespublicaciones` (`idImagenPublicacion`, `idPublicacionImagenesPublicaciones`, `nombreImagenesPublicaciones`, `idEstatusImagenesPublicaciones`, `idUsuarioCreadorImagenesPublicaciones`, `fechaCreacionImagenesPublicaciones`, `idUsuarioModificadorImagenesPublicaciones`, `fechaModificacionImagenesPublicaciones`) VALUES
(1, 1, 'photo2.jpg', 1, 1, '2016-03-11 00:00:00', 1, '2016-03-11 00:00:00'),
(2, 1, 'photo8.jpg', 1, 1, '2016-03-11 00:00:00', 1, '2016-03-11 00:00:00'),
(3, 1, 'photo2.jpg', 1, 1, '2016-03-11 00:00:00', 1, '2016-03-11 00:00:00'),
(4, 4, 'photo14.jpg', 1, 1, '2016-03-11 00:00:00', 1, '2016-03-11 00:00:00'),
(5, 2, 'photo7.jpg', 1, 1, '2016-03-11 00:00:00', 1, '2016-03-11 00:00:00'),
(6, 6, 'photo15.jpg', 1, 1, '2016-03-11 00:00:00', 1, '2016-03-11 00:00:00'),
(7, 2, 'photo16.jpg', 1, 1, '2016-03-11 00:00:00', 1, '2016-03-11 00:00:00'),
(8, 7, 'photo12.jpg', 1, 1, '2016-03-11 00:00:00', 1, '2016-03-11 00:00:00'),
(9, 4, 'photo11.jpg', 1, 1, '2016-03-11 00:00:00', 1, '2016-03-11 00:00:00'),
(10, 6, 'photo13.jpg', 1, 1, '2016-03-11 00:00:00', 1, '2016-03-11 00:00:00'),
(11, 1, 'photo3.jpg', 1, 1, '2016-03-11 00:00:00', 1, '2016-03-11 00:00:00'),
(12, 3, 'photo10.jpg', 1, 1, '2016-03-11 00:00:00', 1, '2016-03-11 00:00:00'),
(13, 4, 'photo8.jpg', 1, 1, '2016-03-11 00:00:00', 1, '2016-03-11 00:00:00'),
(14, 1, 'photo4.jpg', 1, 1, '2016-03-11 00:00:00', 1, '2016-03-11 00:00:00'),
(15, 2, 'photo6.jpg', 1, 1, '2016-03-11 00:00:00', 1, '2016-03-11 00:00:00'),
(16, 5, 'photo9.jpg', 1, 1, '2016-03-11 00:00:00', 1, '2016-03-11 00:00:00'),
(17, 3, 'photo1.jpg', 1, 1, '2016-03-11 00:00:00', 1, '2016-03-11 00:00:00'),
(18, 9, 'photo19.jpg', 1, 1, '2016-03-11 00:00:00', 1, '2016-03-11 00:00:00'),
(19, 10, 'photo25.jpg', 1, 1, '2016-03-11 00:00:00', 1, '2016-03-11 00:00:00'),
(20, 8, 'photo18.jpg', 1, 1, '2016-03-11 00:00:00', 1, '2016-03-11 00:00:00'),
(21, 11, 'photo23.jpg', 1, 1, '2016-03-11 00:00:00', 1, '2016-03-11 00:00:00'),
(22, 2, 'photo24.jpg', 1, 1, '2016-03-11 00:00:00', 1, '2016-03-11 00:00:00'),
(23, 12, 'photo17.jpg', 1, 1, '2016-03-11 00:00:00', 1, '2016-03-11 00:00:00'),
(24, 5, 'photo20.jpg', 1, 1, '2016-03-11 00:00:00', 1, '2016-03-11 00:00:00'),
(25, 13, 'photo22.jpg', 1, 1, '2016-03-11 00:00:00', 1, '2016-03-11 00:00:00'),
(26, 7, 'photo21.jpg', 1, 1, '2016-03-11 00:00:00', 1, '2016-03-11 00:00:00'),
(27, 15, 'photo21.jpg', 1, 1, '2016-03-11 00:00:00', 1, '2016-03-11 00:00:00'),
(28, 10, 'photo21.jpg', 1, 1, '2016-03-11 00:00:00', 1, '2016-03-11 00:00:00'),
(29, 143, 'photo21.jpg', 1, 1, '2016-03-11 00:00:00', 1, '2016-03-11 00:00:00'),
(30, 3, 'photo21.jpg', 1, 1, '2016-03-11 00:00:00', 1, '2016-03-11 00:00:00'),
(31, 16, 'photo21.jpg', 1, 1, '2016-03-11 00:00:00', 1, '2016-03-11 00:00:00'),
(32, 13, 'photo21.jpg', 1, 1, '2016-03-11 00:00:00', 1, '2016-03-11 00:00:00'),
(33, 9, 'photo21.jpg', 1, 1, '2016-03-11 00:00:00', 1, '2016-03-11 00:00:00'),
(34, 11, 'photo21.jpg', 1, 1, '2016-03-11 00:00:00', 1, '2016-03-11 00:00:00'),
(35, 12, 'photo21.jpg', 1, 1, '2016-03-11 00:00:00', 1, '2016-03-11 00:00:00'),
(36, 12, 'photo21.jpg', 1, 1, '2016-03-11 00:00:00', 1, '2016-03-11 00:00:00'),
(37, 13, 'photo21.jpg', 1, 1, '2016-03-11 00:00:00', 1, '2016-03-11 00:00:00'),
(38, 15, 'photo21.jpg', 1, 1, '2016-03-11 00:00:00', 1, '2016-03-11 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pat`
--

CREATE TABLE IF NOT EXISTS `pat` (
`idPat` int(11) NOT NULL,
  `nombrePat` varchar(100) COLLATE utf8_bin NOT NULL,
  `anioPat` int(11) NOT NULL,
  `auditoriasPat` int(11) NOT NULL,
  `seguimientosPat` int(11) NOT NULL,
  `observacionesPat` int(11) NOT NULL,
  `prasPat` int(11) NOT NULL,
  `idEstatusPat` int(11) NOT NULL,
  `activoPat` int(11) NOT NULL,
  `idUsuarioCreadorPat` int(11) NOT NULL,
  `fechaCreacionPat` datetime NOT NULL,
  `idUsuarioModificadorPat` int(11) NOT NULL,
  `fechaModificacionPat` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `patdetalle`
--

CREATE TABLE IF NOT EXISTS `patdetalle` (
`idPatDetalle` int(11) NOT NULL,
  `consecutivoPatDetalle` int(11) NOT NULL,
  `tipoPatDetalle` int(11) NOT NULL,
  `paPatDetalle` int(11) NOT NULL,
  `clavePatDetalle` int(11) NOT NULL,
  `instanciaPatDetalle` int(11) NOT NULL,
  `justificacionPatDetalle` int(11) NOT NULL,
  `areaPatDetalle` int(11) NOT NULL,
  `descripcionPatDetalle` text COLLATE utf8_bin NOT NULL,
  `objetivoPatDetalle` text COLLATE utf8_bin NOT NULL,
  `spiPatDetalle` int(11) NOT NULL,
  `sptPatDetalle` int(11) NOT NULL,
  `tsrPatDetalle` int(11) NOT NULL,
  `tshPatDetalle` int(11) NOT NULL,
  `priPatDetalle` int(11) NOT NULL,
  `prfPatDetalle` int(11) NOT NULL,
  `apPatDetalle` int(11) NOT NULL,
  `muestraPatDetalle` int(11) NOT NULL,
  `universoPatDetalle` int(11) NOT NULL,
  `pendientePatDetalle` int(11) NOT NULL,
  `riesgosPatDetalle` int(11) NOT NULL,
  `cuadrantePatDetalle` int(11) NOT NULL,
  `revisadoPatDetalle` int(11) NOT NULL,
  `verificadoPatDetalle` int(11) NOT NULL,
  `comentariosPatDetalle` int(11) NOT NULL,
  `idEstatusPatDetalle` int(11) NOT NULL,
  `idUsuarioCreadorPatDetalle` int(11) NOT NULL,
  `fechaCreacionPatDetalle` datetime NOT NULL,
  `idUsuarioModificadorPatDetalle` int(11) NOT NULL,
  `fechaModificacionPatDetalle` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicaciones`
--

CREATE TABLE IF NOT EXISTS `publicaciones` (
`idPublicacion` int(11) NOT NULL,
  `idTipoPublicacionPublicaciones` int(11) NOT NULL,
  `tituloPublicaciones` varchar(200) COLLATE utf8_bin NOT NULL,
  `textoPublicaciones` text COLLATE utf8_bin NOT NULL,
  `idEstatusPublicaciones` int(11) NOT NULL,
  `idUsuarioCreadorPublicaciones` int(11) NOT NULL,
  `fechaCreacionPublicaciones` datetime NOT NULL,
  `idUsuarioModificadorPublicaciones` int(11) NOT NULL,
  `fechaModificacionPublicaciones` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `publicaciones`
--

INSERT INTO `publicaciones` (`idPublicacion`, `idTipoPublicacionPublicaciones`, `tituloPublicaciones`, `textoPublicaciones`, `idEstatusPublicaciones`, `idUsuarioCreadorPublicaciones`, `fechaCreacionPublicaciones`, `idUsuarioModificadorPublicaciones`, `fechaModificacionPublicaciones`) VALUES
(1, 1, 'Esta es una publicacion de prueba tipo_1', 'Aqui el texto de la publicacion de prueba de tipo_1 que debera de contener mucas letras y no se que mas poner', 1, 1, '2016-03-04 11:03:25', 1, '2016-03-04 11:03:25'),
(2, 2, 'Fechas limite de entrega!', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1, 1, '2016-03-04 11:03:45', 1, '2016-03-04 11:03:45'),
(3, 1, 'Esta es una publicacion de prueba tipo_1', 'Aqui el texto de la publicacion de prueba de tipo_1 que debera de contener mucas letras y no se que mas poner', 1, 1, '2016-03-04 11:03:46', 1, '2016-03-04 11:03:46'),
(4, 1, 'Esta es una publicacion de prueba tipo_1', 'Aqui el texto de la publicacion de prueba de tipo_1 que debera de contener mucas letras y no se que mas poner', 1, 1, '2016-03-04 11:03:47', 1, '2016-03-04 11:03:47'),
(5, 1, 'Esta es una publicacion de prueba tipo_1', 'Aqui el texto de la publicacion de prueba de tipo_1 que debera de contener mucas letras y no se que mas poner', 1, 1, '2016-03-04 11:03:47', 1, '2016-03-04 11:03:47'),
(6, 1, 'Esta es una publicacion de prueba tipo_1', 'Aqui el texto de la publicacion de prueba de tipo_1 que debera de contener mucas letras y no se que mas poner', 1, 1, '2016-03-04 11:03:15', 1, '2016-03-04 11:03:15'),
(7, 1, 'Esta es una publicacion de prueba tipo_1', 'Aqui el texto de la publicacion de prueba de tipo_1 que debera de contener mucas letras y no se que mas poner', 1, 1, '2016-03-04 11:03:46', 1, '2016-03-04 11:03:46'),
(8, 2, 'Fechas limite de entrega!', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1, 1, '2016-03-04 11:03:34', 1, '2016-03-04 11:03:34'),
(9, 1, 'Esta es una publicacion de prueba tipo_1', 'Aqui el texto de la publicacion de prueba de tipo_1 que debera de contener mucas letras y no se que mas poner', 1, 1, '2016-03-04 11:03:00', 1, '2016-03-04 11:03:00'),
(10, 1, 'Esta es una publicacion de prueba tipo_1', 'Aqui el texto de la publicacion de prueba de tipo_1 que debera de contener mucas letras y no se que mas poner', 1, 1, '2016-03-04 11:03:40', 1, '2016-03-04 11:03:40'),
(11, 1, 'Esta es una publicacion de prueba tipo_1', 'Aqui el texto de la publicacion de prueba de tipo_1 que debera de contener mucas letras y no se que mas poner', 1, 1, '2016-03-04 11:03:10', 1, '2016-03-04 11:03:10'),
(12, 1, 'Esta es una publicacion de prueba tipo_1', 'Aqui el texto de la publicacion de prueba de tipo_1 que debera de contener mucas letras y no se que mas poner', 1, 1, '2016-03-04 11:03:10', 1, '2016-03-04 11:03:10'),
(13, 1, 'Esta es una publicacion de prueba tipo_1', 'Aqui el texto de la publicacion de prueba de tipo_1 que debera de contener mucas letras y no se que mas poner', 1, 1, '2016-03-04 11:03:21', 1, '2016-03-04 11:03:21'),
(14, 1, 'Esta es una publicacion de prueba tipo_1', 'Aqui el texto de la publicacion de prueba de tipo_1 que debera de contener mucas letras y no se que mas poner', 1, 1, '2016-03-04 11:03:54', 1, '2016-03-04 11:03:54'),
(15, 2, 'Fechas limite de entrega!', 'Aqui el texto de la publicacion de prueba de tipo_1 que debera de contener mucas letras y no se que mas poner', 1, 1, '2016-03-05 12:03:32', 1, '2016-03-05 12:03:32'),
(16, 2, 'Fechas limite de entrega!', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1, 1, '2016-03-05 12:03:27', 1, '2016-03-05 12:03:27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipospublicaciones`
--

CREATE TABLE IF NOT EXISTS `tipospublicaciones` (
`idTipoPublicacion` int(11) NOT NULL,
  `nombreTiposPublicaciones` varchar(50) COLLATE utf8_bin NOT NULL,
  `descripcionTiposPublicaciones` varchar(150) COLLATE utf8_bin NOT NULL,
  `imagenTiposPublicaciones` varchar(50) COLLATE utf8_bin NOT NULL,
  `idEstatusTiposPublicaciones` int(11) NOT NULL,
  `idUsuarioCreadorTiposPublicaciones` int(11) NOT NULL,
  `fechaCreacionTiposPublicaciones` datetime NOT NULL,
  `idUsuarioModificadorTiposPublicaciones` int(11) NOT NULL,
  `fechaModificacionTiposPublicaciones` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
`idUsuario` int(11) NOT NULL,
  `idNivelAccesoUsuarios` int(11) NOT NULL,
  `idDepartamentoUsuarios` int(11) DEFAULT NULL,
  `nombreUsuarios` varchar(200) COLLATE utf8_bin NOT NULL,
  `apellidoPaternoUsuarios` varchar(200) COLLATE utf8_bin NOT NULL,
  `apellidoMaternoUsuarios` varchar(200) COLLATE utf8_bin NOT NULL,
  `nombreUsuarioUsuarios` varchar(200) COLLATE utf8_bin NOT NULL,
  `contraseniaUsuarios` varchar(200) COLLATE utf8_bin NOT NULL,
  `idEstatusUsuarios` int(11) NOT NULL,
  `idUsuarioCreadorUsuarios` int(11) NOT NULL,
  `fechaCreacionUsuarios` datetime NOT NULL,
  `idUsuarioModificadorUsuarios` int(11) NOT NULL,
  `fechaModificacionUsuarios` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `idNivelAccesoUsuarios`, `idDepartamentoUsuarios`, `nombreUsuarios`, `apellidoPaternoUsuarios`, `apellidoMaternoUsuarios`, `nombreUsuarioUsuarios`, `contraseniaUsuarios`, `idEstatusUsuarios`, `idUsuarioCreadorUsuarios`, `fechaCreacionUsuarios`, `idUsuarioModificadorUsuarios`, `fechaModificacionUsuarios`) VALUES
(1, 1, 1, 'Said', 'Alarcón', 'Sosa', 'yommiyom', 'c5a8565352f361e08a36e441920a38db', 1, 1, '2016-03-16 00:00:00', 1, '2016-03-16 00:00:00'),
(2, 1, 1, 'Evelyn', 'Torres', 'Martínez', 'eve', 'eve', 1, 1, '2016-03-16 00:00:00', 1, '2016-03-16 00:00:00'),
(3, 1, 1, 'Uriel Jacobo', 'Torres', 'Martínez', 'uri', 'uri', 1, 1, '2016-03-16 00:00:00', 1, '2016-03-16 00:00:00'),
(4, 1, 1, '', 'l', '', 'S', '', 1, 1, '2016-03-16 00:00:00', 1, '2016-03-16 00:00:00'),
(5, 1, 1, '', 'l', '', 'S', '', 1, 1, '2016-03-16 00:00:00', 1, '2016-03-16 00:00:00'),
(6, 1, 1, '', 'l', '', 'S', '', 1, 1, '2016-03-16 00:00:00', 1, '2016-03-16 00:00:00'),
(7, 1, 1, '', 'l', '', 'S', '', 1, 1, '2016-03-16 00:00:00', 1, '2016-03-16 00:00:00'),
(8, 1, 1, '', 'l', '', 'S', '', 1, 1, '2016-03-16 00:00:00', 1, '2016-03-16 00:00:00'),
(9, 1, 1, 'd', '', 'MV', '(}|', 'D', 1, 1, '2016-03-16 00:00:00', 1, '2016-03-16 00:00:00'),
(10, 1, 1, 'd', '', 'MV', '(}|', 'D', 1, 1, '2016-03-16 00:00:00', 1, '2016-03-16 00:00:00'),
(11, 1, 1, 'd', '', 'MV', '(}|', 'D', 1, 1, '2016-03-16 00:00:00', 1, '2016-03-16 00:00:00'),
(12, 1, 1, '', 'l', '', 'S', '', 1, 1, '2016-03-16 00:00:00', 1, '2016-03-16 00:00:00'),
(13, 1, 1, '', 'l', '', 'S', 'S', 1, 1, '2016-03-16 00:00:00', 1, '2016-03-16 00:00:00'),
(14, 1, 1, '6', '', '', 'ұ', 'ұ', 1, 1, '2016-03-16 00:00:00', 1, '2016-03-16 00:00:00'),
(15, 1, 1, '6', '', '', 'ұ', 'ұ', 1, 1, '2016-03-16 00:00:00', 1, '2016-03-16 00:00:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estatus`
--
ALTER TABLE `estatus`
 ADD PRIMARY KEY (`idEstatus`);

--
-- Indices de la tabla `imagenespublicaciones`
--
ALTER TABLE `imagenespublicaciones`
 ADD PRIMARY KEY (`idImagenPublicacion`);

--
-- Indices de la tabla `pat`
--
ALTER TABLE `pat`
 ADD PRIMARY KEY (`idPat`);

--
-- Indices de la tabla `patdetalle`
--
ALTER TABLE `patdetalle`
 ADD PRIMARY KEY (`idPatDetalle`);

--
-- Indices de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
 ADD PRIMARY KEY (`idPublicacion`);

--
-- Indices de la tabla `tipospublicaciones`
--
ALTER TABLE `tipospublicaciones`
 ADD PRIMARY KEY (`idTipoPublicacion`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
 ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estatus`
--
ALTER TABLE `estatus`
MODIFY `idEstatus` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `imagenespublicaciones`
--
ALTER TABLE `imagenespublicaciones`
MODIFY `idImagenPublicacion` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT de la tabla `pat`
--
ALTER TABLE `pat`
MODIFY `idPat` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `patdetalle`
--
ALTER TABLE `patdetalle`
MODIFY `idPatDetalle` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
MODIFY `idPublicacion` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `tipospublicaciones`
--
ALTER TABLE `tipospublicaciones`
MODIFY `idTipoPublicacion` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
