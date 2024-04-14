-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-06-2021 a las 15:05:19
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_siramec`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `almacen`
--

CREATE TABLE `almacen` (
  `cod_alm` int(11) NOT NULL,
  `nom_alm` varchar(45) NOT NULL,
  `dir_alm` varchar(45) NOT NULL,
  `tel_alm` int(11) NOT NULL,
  `tipoubi_alm` varchar(45) NOT NULL,
  `est_ubi` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `almacen`
--

INSERT INTO `almacen` (`cod_alm`, `nom_alm`, `dir_alm`, `tel_alm`, `tipoubi_alm`, `est_ubi`) VALUES
(1, 'el sol', 'andes', 123456789, 'andes', 'andes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE `articulo` (
  `cod_art` int(11) NOT NULL,
  `nom_art` varchar(45) NOT NULL,
  `tam_art` varchar(45) NOT NULL,
  `pre_art` int(11) NOT NULL,
  `cant_art` int(11) NOT NULL,
  `tipo_art` varchar(45) NOT NULL,
  `nom_img` varchar(45) NOT NULL,
  `fecha_entra` date NOT NULL,
  `cod_alm1` int(11) NOT NULL,
  `nit_cli1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`cod_art`, `nom_art`, `tam_art`, `pre_art`, `cant_art`, `tipo_art`, `nom_img`, `fecha_entra`, `cod_alm1`, `nit_cli1`) VALUES
(1, 'frijol', 'kilo', 3500, 215, 'grano', 'frijoles.jpg', '2021-05-07', 1, 1),
(2, 'sal', 'normal', 15000, 63, 'normal', 'sal.jpg', '2021-04-23', 1, 1),
(3, 'papa', '2 kilos', 3500, 48, 'tuberculo', 'papas.png', '2021-04-23', 1, 1),
(4, 'clorox', 'litro', 2000, 182, 'aseó ', 'cloro.jpg', '2021-05-11', 1, 2),
(5, 'panela', 'medio', 50000, 292, 'panela', 'panela.jpg', '2021-05-12', 1, 1),
(6, 'huevo', 'medios', 5500, 20, 'huevo', 'huevo.jpg', '2021-05-14', 1, 3),
(7, 'mantequilla', 'grandes', 7500, 99, 'mantequilla', 'mante.jpg', '2021-05-14', 1, 3),
(8, 'carne', 'porcion media', 100000, 90, 'carne', 'carne.jpg', '2021-05-14', 1, 3),
(9, 'Natipan', 'pequeños', 3700, 80, 'parva', 'pan.jpg', '2021-05-14', 1, 2),
(10, 'leche', 'medio', 4000, 100, 'lacteos', 'leche.jpg', '2021-05-14', 1, 1),
(11, 'cebolla', 'grande', 1500, 150, 'verdura', 'verdura.jpg', '2021-05-21', 1, 3),
(13, 'Aceite ', 'Medio', 12000, 55, 'aceite', 'aceite.jpg', '2021-05-14', 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `nit_cli` int(11) NOT NULL,
  `nom_cli` varchar(45) NOT NULL,
  `dir_cli` varchar(45) NOT NULL,
  `ciu_cli` varchar(45) NOT NULL,
  `tel_cli` int(11) NOT NULL,
  `email_cli` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`nit_cli`, `nom_cli`, `dir_cli`, `ciu_cli`, `tel_cli`, `email_cli`) VALUES
(1, 'esteban villa', 'la 80', 'tapartó', 321915722, 'villa@gmail.com'),
(2, 'jorge villa ', 'la cita', 'Betania', 3210182, 'jorge@gmail.com'),
(3, 'estefania', 'andes', 'medellin', 2124722197, 'esteffamorabolivar@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente_proveedor`
--

CREATE TABLE `cliente_proveedor` (
  `nit_cli5` int(11) NOT NULL,
  `nit_prov1` int(11) NOT NULL,
  `cod` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente_tranportista`
--

CREATE TABLE `cliente_tranportista` (
  `nit_cli4` int(11) NOT NULL,
  `nit_trans1` int(11) NOT NULL,
  `cod` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `destinatario`
--

CREATE TABLE `destinatario` (
  `cod_des` int(11) NOT NULL,
  `nom_des` varchar(45) NOT NULL,
  `dir_des` varchar(45) NOT NULL,
  `tel_des` double NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `destinatario`
--

INSERT INTO `destinatario` (`cod_des`, `nom_des`, `dir_des`, `tel_des`, `email`, `password`) VALUES
(36750, 'Noralba Moncayo', 'Sabaneta', 3235879432, 'nmoncayo6@misena.edu.co', 'f86878b7116b98f7899222fd0cab7af3'),
(1000535386, 'Esteban Villa', 'Andes', 3219157229, 'villa310esteban@mail.com', '202cb962ac59075b964b07152d234b70'),
(1001020538, 'Estefania Morales', 'El bosque', 3124722197, 'esteffamorabolivar123@gmail.com', '202cb962ac59075b964b07152d234b70'),
(1001144978, 'Juan Esteban Franco', 'Taparto', 3103313959, 'juanestebanf011@gmail.com', '202cb962ac59075b964b07152d234b70'),
(1027891856, 'Paola Cardona', 'San Luis Andes', 3234634021, 'paolaandreacardona1999@gmail.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_pedido`
--

CREATE TABLE `detalle_pedido` (
  `idDetalle_pedido` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_factura`
--

CREATE TABLE `estado_factura` (
  `num_estado` int(11) NOT NULL,
  `nom_estado` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estado_factura`
--

INSERT INTO `estado_factura` (`num_estado`, `nom_estado`) VALUES
(1, 'pendiente'),
(2, 'entregado'),
(3, 'anulada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura_articulo`
--

CREATE TABLE `factura_articulo` (
  `cod_fac_art` int(11) NOT NULL,
  `cod_fac1` int(11) NOT NULL,
  `cod_art1` int(11) NOT NULL,
  `cant_art` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `factura_articulo`
--

INSERT INTO `factura_articulo` (`cod_fac_art`, `cod_fac1`, `cod_art1`, `cant_art`) VALUES
(427, 1, 1, 50),
(431, 2, 11, 50),
(432, 2, 4, 1),
(433, 3, 2, 1),
(434, 3, 3, 1),
(435, 3, 4, 1),
(436, 3, 1, 1),
(437, 4, 13, 1),
(438, 4, 3, 1),
(439, 5, 7, 1),
(440, 5, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura_pedido`
--

CREATE TABLE `factura_pedido` (
  `num_fact` int(11) NOT NULL,
  `fecha` datetime NOT NULL DEFAULT current_timestamp(),
  `nit_des1` int(11) NOT NULL,
  `nom_fact` varchar(1000) NOT NULL,
  `estado_fac` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `factura_pedido`
--

INSERT INTO `factura_pedido` (`num_fact`, `fecha`, `nit_des1`, `nom_fact`, `estado_fac`) VALUES
(1, '2021-05-13 18:18:16', 1001020538, 'fac_1.pdf', 2),
(2, '2021-05-14 18:52:14', 1001020538, 'fac_2.pdf', 2),
(3, '2021-05-17 08:18:14', 1001020538, 'fac_3.pdf', 2),
(4, '2021-05-26 14:25:29', 1001020538, 'fac_4.pdf', 2),
(5, '2021-06-03 08:04:36', 1001144978, 'fac_5.pdf', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `nit_prov` int(11) NOT NULL,
  `nom_prov` varchar(45) NOT NULL,
  `dir_prov` varchar(45) NOT NULL,
  `ciu_prov` varchar(45) NOT NULL,
  `tel_prov` int(11) NOT NULL,
  `email_prov` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`nit_prov`, `nom_prov`, `dir_prov`, `ciu_prov`, `tel_prov`, `email_prov`) VALUES
(15535989, 'roman', 'andes', 'medellin', 313456, 'romanlopez@gmail.com'),
(1027891339, 'adriana cardona', 'la comuna', 'andes', 31226742, 'adrica67@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idrol` varchar(45) NOT NULL,
  `rol` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idrol`, `rol`) VALUES
('1', 'Administrador'),
('2', 'Cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transportista`
--

CREATE TABLE `transportista` (
  `nit_trans` int(11) NOT NULL,
  `nom_trans` varchar(45) NOT NULL,
  `dir_trans` varchar(45) NOT NULL,
  `ciu_trans` varchar(45) NOT NULL,
  `tel_trans` int(11) NOT NULL,
  `email_trans` varchar(45) NOT NULL,
  `placam_trans` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `transportista`
--

INSERT INTO `transportista` (`nit_trans`, `nom_trans`, `dir_trans`, `ciu_trans`, `tel_trans`, `email_trans`, `placam_trans`) VALUES
(15535103, 'juan mosquera', 'betania', 'medellin', 312784567, 'jmosquera@gmail.com', 'ttr34va');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `correo` varchar(45) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `clave` varchar(45) NOT NULL,
  `rol` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nombre`, `correo`, `usuario`, `clave`, `rol`) VALUES
(32111222, ' Bibiana álvarez', 'bybycardona.85@gmail.com', ' Byby20', '202cb962ac59075b964b07152d234b70', '2'),
(43838636, 'Patricia Bolivar', 'pato123@gmail.com', 'PatriciaB43', '202cb962ac59075b964b07152d234b70', '2'),
(1001020538, 'Estefania Morales', 'esteffamorabolivar123@gmail.com', 'Estefania12', '202cb962ac59075b964b07152d234b70', '1'),
(1027891856, 'Paola Cardona', 'paolaandreacardona1999@gmail.com', 'Pao0105', '28b0eb6a294557fe2f4b242741083a2a', '2');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `almacen`
--
ALTER TABLE `almacen`
  ADD PRIMARY KEY (`cod_alm`);

--
-- Indices de la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`cod_art`),
  ADD KEY `cod_alm_idx` (`cod_alm1`),
  ADD KEY `nit_cli1_idx` (`nit_cli1`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`nit_cli`);

--
-- Indices de la tabla `cliente_proveedor`
--
ALTER TABLE `cliente_proveedor`
  ADD PRIMARY KEY (`cod`),
  ADD KEY `nit_cli_5` (`nit_cli5`),
  ADD KEY `nit_prov_idx` (`nit_prov1`);

--
-- Indices de la tabla `cliente_tranportista`
--
ALTER TABLE `cliente_tranportista`
  ADD PRIMARY KEY (`cod`),
  ADD KEY `nit_cli_8` (`nit_cli4`),
  ADD KEY `nit_trans_idx` (`nit_trans1`);

--
-- Indices de la tabla `destinatario`
--
ALTER TABLE `destinatario`
  ADD PRIMARY KEY (`cod_des`);

--
-- Indices de la tabla `detalle_pedido`
--
ALTER TABLE `detalle_pedido`
  ADD PRIMARY KEY (`idDetalle_pedido`);

--
-- Indices de la tabla `estado_factura`
--
ALTER TABLE `estado_factura`
  ADD PRIMARY KEY (`num_estado`);

--
-- Indices de la tabla `factura_articulo`
--
ALTER TABLE `factura_articulo`
  ADD PRIMARY KEY (`cod_fac_art`),
  ADD UNIQUE KEY `cod_fac1` (`cod_fac1`,`cod_art1`),
  ADD KEY `cod_art1` (`cod_art1`);

--
-- Indices de la tabla `factura_pedido`
--
ALTER TABLE `factura_pedido`
  ADD PRIMARY KEY (`num_fact`),
  ADD KEY `nit_cli_idx` (`nit_des1`),
  ADD KEY `estado_fac` (`estado_fac`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`nit_prov`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idrol`);

--
-- Indices de la tabla `transportista`
--
ALTER TABLE `transportista`
  ADD PRIMARY KEY (`nit_trans`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`),
  ADD KEY `rol_idx` (`rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `destinatario`
--
ALTER TABLE `destinatario`
  MODIFY `cod_des` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1027899692;

--
-- AUTO_INCREMENT de la tabla `factura_articulo`
--
ALTER TABLE `factura_articulo`
  MODIFY `cod_fac_art` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=441;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `nit_prov` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1027891341;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD CONSTRAINT `cod_alm` FOREIGN KEY (`cod_alm1`) REFERENCES `almacen` (`cod_alm`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `nit_cli1` FOREIGN KEY (`nit_cli1`) REFERENCES `cliente` (`nit_cli`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cliente_proveedor`
--
ALTER TABLE `cliente_proveedor`
  ADD CONSTRAINT `nit_cli_5` FOREIGN KEY (`nit_cli5`) REFERENCES `cliente` (`nit_cli`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `nit_prov` FOREIGN KEY (`nit_prov1`) REFERENCES `proveedor` (`nit_prov`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cliente_tranportista`
--
ALTER TABLE `cliente_tranportista`
  ADD CONSTRAINT `nit_cli_8` FOREIGN KEY (`nit_cli4`) REFERENCES `cliente` (`nit_cli`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `nit_trans` FOREIGN KEY (`nit_trans1`) REFERENCES `transportista` (`nit_trans`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `factura_articulo`
--
ALTER TABLE `factura_articulo`
  ADD CONSTRAINT `factura_articulo_ibfk_1` FOREIGN KEY (`cod_fac1`) REFERENCES `factura_pedido` (`num_fact`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `factura_articulo_ibfk_2` FOREIGN KEY (`cod_art1`) REFERENCES `articulo` (`cod_art`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `factura_pedido`
--
ALTER TABLE `factura_pedido`
  ADD CONSTRAINT `factura_pedido_ibfk_3` FOREIGN KEY (`estado_fac`) REFERENCES `estado_factura` (`num_estado`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `factura_pedido_ibfk_4` FOREIGN KEY (`nit_des1`) REFERENCES `destinatario` (`cod_des`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `rol` FOREIGN KEY (`rol`) REFERENCES `rol` (`idrol`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
