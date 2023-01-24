-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 29, 2022 at 06:44 AM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `benaventura`
--

-- --------------------------------------------------------

--
-- Table structure for table `bitacora`
--

CREATE TABLE `bitacora` (
  `id_bitacora` int(11) NOT NULL,
  `codigo_bitacora` varchar(10) DEFAULT NULL,
  `fecha_bitacora` date DEFAULT NULL,
  `inicio_bitacora` varchar(12) DEFAULT NULL,
  `fin_bitacora` varchar(12) DEFAULT NULL,
  `tipo_bitacora` varchar(15) DEFAULT NULL,
  `anno_bitacora` year(4) DEFAULT NULL,
  `codigo_cuenta` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bitacora`
--

INSERT INTO `bitacora` (`id_bitacora`, `codigo_bitacora`, `fecha_bitacora`, `inicio_bitacora`, `fin_bitacora`, `tipo_bitacora`, `anno_bitacora`, `codigo_cuenta`) VALUES
(1, 'CB683588', '2022-04-09', '10:34:15 am', 'sin datos', 'cliente', 2022, 'CL18585566411'),
(2, 'CB369688', '2022-04-09', '10:57:03 am', 'sin datos', 'cliente', 2022, 'CL18585566411'),
(3, 'CB207311', '2022-04-11', '10:41:06 am', '11:41:25 am', 'usuario', 2022, 'US67208600822'),
(4, 'CB316133', '2022-04-11', '11:43:15 am', 'sin datos', 'usuario', 2022, 'US67208600822'),
(5, 'CB820100', '2022-04-11', '11:45:23 am', 'sin datos', 'cliente', 2022, 'CL18585566411'),
(6, 'CB658377', '2022-04-11', '11:53:34 am', '12:20:47 pm', 'cliente', 2022, 'CL18585566411'),
(7, 'CB645155', '2022-04-11', '12:20:54 pm', '12:24:56 pm', 'cliente', 2022, 'CL18585566411'),
(8, 'CB811699', '2022-04-11', '12:28:16 pm', '12:30:37 pm', 'cliente', 2022, 'CL18585566411'),
(9, 'CB838833', '2022-04-11', '12:30:39 pm', '12:33:25 pm', 'cliente', 2022, 'CL18585566411'),
(10, 'CB428777', '2022-04-11', '12:33:28 pm', '12:38:16 pm', 'cliente', 2022, 'CL18585566411'),
(11, 'CB035000', '2022-04-11', '12:38:21 pm', '12:39:57 pm', 'cliente', 2022, 'CL18585566411'),
(12, 'CB290111', '2022-04-11', '12:40:00 pm', '12:40:12 pm', 'cliente', 2022, 'CL18585566411'),
(13, 'CB544799', '2022-04-11', '12:40:51 pm', 'sin datos', 'cliente', 2022, 'CL18585566411'),
(14, 'CB159577', '2022-04-11', '12:42:23 pm', '12:45:44 pm', 'cliente', 2022, 'CL18585566411'),
(15, 'CB613177', '2022-04-11', '12:45:48 pm', '12:48:37 pm', 'cliente', 2022, 'CL18585566411'),
(16, 'CB709844', '2022-04-11', '12:50:22 pm', '12:51:58 pm', 'cliente', 2022, 'CL18585566411'),
(17, 'CB979488', '2022-04-11', '12:51:59 pm', '12:52:33 pm', 'cliente', 2022, 'CL18585566411'),
(18, 'CB262466', '2022-04-11', '12:52:38 pm', '12:52:46 pm', 'cliente', 2022, 'CL18585566411'),
(19, 'CB116100', '2022-04-11', '12:53:45 pm', '12:54:22 pm', 'cliente', 2022, 'CL18585566411'),
(20, 'CB992599', '2022-04-11', '12:54:40 pm', '12:58:31 pm', 'cliente', 2022, 'CL18585566411'),
(21, 'CB827166', '2022-04-11', '12:58:36 pm', '12:58:45 pm', 'cliente', 2022, 'CL18585566411'),
(22, 'CB389800', '2022-04-11', '12:59:20 pm', '01:01:22 pm', 'cliente', 2022, 'CL18585566411'),
(23, 'CB777155', '2022-04-11', '01:01:53 pm', '01:02:20 pm', 'cliente', 2022, 'CL18585566411'),
(24, 'CB193655', '2022-04-11', '01:02:34 pm', 'sin datos', 'cliente', 2022, 'CL18585566411'),
(25, 'CB575711', '2022-04-11', '01:35:27 pm', 'sin datos', 'admin', 2022, 'ADM90537141611'),
(26, 'CB970622', '2022-04-11', '01:39:52 pm', 'sin datos', 'admin', 2022, 'ADM90537141611'),
(27, 'CB312555', '2022-04-11', '01:44:54 pm', '01:51:48 pm', 'admin', 2022, 'ADM90537141611'),
(28, 'CB246499', '2022-04-11', '04:19:45 pm', 'sin datos', 'admin', 2022, 'ADM90537141611'),
(29, 'CB184622', '2022-04-12', '04:19:39 pm', 'sin datos', 'admin', 2022, 'ADM90537141611'),
(30, 'CB478677', '2022-04-12', '06:13:19 pm', 'sin datos', 'admin', 2022, 'ADM90537141611'),
(31, 'CB552233', '2022-04-12', '06:21:18 pm', 'sin datos', 'cliente', 2022, 'CL18585566411'),
(32, 'CB639655', '2022-04-12', '08:04:12 pm', 'sin datos', 'cliente', 2022, 'CL18585566411'),
(33, 'CB495844', '2022-04-13', '04:35:18 pm', 'sin datos', 'cliente', 2022, 'CL18585566411'),
(34, 'CB202266', '2022-04-13', '05:25:01 pm', 'sin datos', 'admin', 2022, 'ADM90537141611'),
(35, 'CB105544', '2022-04-13', '09:49:17 pm', 'sin datos', 'admin', 2022, 'ADM90537141611'),
(36, 'CB679099', '2022-04-13', '09:49:26 pm', 'sin datos', 'cliente', 2022, 'CL18585566411'),
(37, 'CB939288', '2022-04-13', '09:53:30 pm', '09:53:52 pm', 'usuario', 2022, 'US94570246611'),
(38, 'CB593100', '2022-04-13', '10:07:13 pm', 'sin datos', 'cliente', 2022, 'CL52616725999'),
(39, 'CB095644', '2022-04-13', '11:14:13 pm', '11:17:18 pm', 'admin', 2022, 'ADM26776773088'),
(40, 'CB500811', '2022-04-13', '11:17:21 pm', 'sin datos', 'admin', 2022, 'ADM90537141611'),
(41, 'CB423955', '2022-04-19', '10:05:06 am', 'sin datos', 'cliente', 2022, 'CL18585566411'),
(42, 'CB864877', '2022-04-22', '10:53:22 am', '10:53:38 am', 'cliente', 2022, 'CL18585566411'),
(43, 'CB415200', '2022-04-22', '10:53:40 am', '07:03:55 pm', 'cliente', 2022, 'CL18585566411'),
(44, 'CB126877', '2022-04-25', '07:05:25 pm', '08:14:09 pm', 'cliente', 2022, 'CL52616725999'),
(45, 'CB252755', '2022-04-25', '08:14:14 pm', 'sin datos', 'cliente', 2022, 'CL18585566411'),
(46, 'CB633800', '2022-04-26', '09:41:44 am', 'sin datos', 'cliente', 2022, 'CL18585566411'),
(47, 'CB020833', '2022-04-26', '12:40:45 pm', '12:57:02 pm', 'cliente', 2022, 'CL18585566411'),
(48, 'CB893499', '2022-04-26', '12:57:40 pm', '01:17:17 pm', 'cliente', 2022, 'CL52616725999'),
(49, 'CB779677', '2022-04-26', '01:17:22 pm', 'sin datos', 'cliente', 2022, 'CL18585566411'),
(50, 'CB814799', '2022-04-27', '12:27:23 pm', 'sin datos', 'cliente', 2022, 'CL18585566411'),
(51, 'CB871944', '2022-04-28', '12:08:06 pm', 'sin datos', 'cliente', 2022, 'CL18585566411'),
(52, 'CB414511', '2022-05-02', '08:11:21 pm', '09:08:57 pm', 'cliente', 2022, 'CL18585566411'),
(53, 'CB848077', '2022-05-02', '09:20:07 pm', 'sin datos', 'cliente', 2022, 'CL18585566411'),
(54, 'CB240811', '2022-05-04', '11:16:21 am', 'sin datos', 'cliente', 2022, 'CL18585566411'),
(55, 'CB629377', '2022-05-05', '02:40:53 pm', 'sin datos', 'cliente', 2022, 'CL18585566411'),
(56, 'CB562266', '2022-05-05', '08:42:35 pm', 'sin datos', 'cliente', 2022, 'CL18585566411'),
(57, 'CB366422', '2022-05-06', '07:50:03 am', 'sin datos', 'cliente', 2022, 'CL18585566411'),
(58, 'CB917544', '2022-05-07', '04:38:58 am', 'sin datos', 'cliente', 2022, 'CL18585566411'),
(59, 'CB306033', '2022-05-09', '11:20:21 am', 'sin datos', 'cliente', 2022, 'CL18585566411'),
(60, 'CB290277', '2022-05-09', '05:46:24 pm', 'sin datos', 'cliente', 2022, 'CL18585566411'),
(61, 'CB776899', '2022-05-10', '10:20:08 am', 'sin datos', 'cliente', 2022, 'CL18585566411'),
(62, 'CB065788', '2022-05-10', '04:42:10 pm', 'sin datos', 'cliente', 2022, 'CL18585566411'),
(63, 'CB101966', '2022-05-13', '03:17:24 pm', 'sin datos', 'cliente', 2022, 'CL18585566411'),
(64, 'CB599522', '2022-05-16', '08:49:12 am', 'sin datos', 'cliente', 2022, 'CL18585566411'),
(65, 'CB575911', '2022-05-16', '10:03:47 am', 'sin datos', 'cliente', 2022, 'CL18585566411'),
(66, 'CB368300', '2022-05-16', '01:38:32 pm', 'sin datos', 'cliente', 2022, 'CL18585566411'),
(67, 'CB747933', '2022-05-16', '04:35:23 pm', 'sin datos', 'cliente', 2022, 'CL18585566411'),
(68, 'CB164200', '2022-05-17', '08:57:18 pm', '09:08:52 pm', 'cliente', 2022, 'CL18585566411'),
(69, 'CB108311', '2022-05-17', '09:08:54 pm', '09:12:48 pm', 'cliente', 2022, 'CL18585566411'),
(70, 'CB684155', '2022-05-17', '09:13:08 pm', '09:42:45 pm', 'cliente', 2022, 'CL18585566411'),
(71, 'CB652200', '2022-05-17', '09:42:11 pm', 'sin datos', 'admin', 2022, 'ADM90537141611'),
(72, 'CB982166', '2022-05-17', '09:42:54 pm', 'sin datos', 'cliente', 2022, 'CL52616725999'),
(73, 'CB018744', '2022-05-17', '09:44:03 pm', 'sin datos', 'admin', 2022, 'ADM90537141611'),
(74, 'CB052666', '2022-05-18', '04:34:15 pm', '04:36:02 pm', 'cliente', 2022, 'CL18585566411'),
(75, 'CB356366', '2022-05-18', '04:36:44 pm', 'sin datos', 'cliente', 2022, 'CL52616725999'),
(76, 'CB822533', '2022-05-19', '04:07:38 pm', '06:52:03 am', 'cliente', 2022, 'CL18585566411'),
(77, 'CB483166', '2022-05-20', '06:53:15 am', 'sin datos', 'cliente', 2022, 'CL52616725999'),
(78, 'CB160622', '2022-05-24', '12:00:21 pm', 'sin datos', 'cliente', 2022, 'CL52616725999'),
(79, 'CB119122', '2022-05-25', '04:05:46 pm', '04:05:59 pm', 'cliente', 2022, 'CL18585566411'),
(80, 'CB158133', '2022-05-25', '04:06:18 pm', 'sin datos', 'cliente', 2022, 'CL52616725999'),
(81, 'CB331055', '2022-05-26', '10:09:52 am', 'sin datos', 'cliente', 2022, 'CL52616725999'),
(82, 'CB324800', '2022-05-26', '07:39:02 pm', '06:14:38 pm', 'cliente', 2022, 'CL52616725999'),
(83, 'CB380266', '2022-05-27', '06:14:48 pm', 'sin datos', 'cliente', 2022, 'CL18585566411'),
(84, 'CB313266', '2022-05-28', '10:23:06 am', '11:37:27 am', 'usuario', 2022, 'US67208600822'),
(85, 'CB136111', '2022-05-31', '06:10:40 am', 'sin datos', 'cliente', 2022, 'CL18585566411'),
(86, 'CB012799', '2022-06-01', '05:00:10 pm', '05:00:17 pm', 'usuario', 2022, 'US67208600822'),
(87, 'CB976077', '2022-06-01', '05:49:21 pm', '05:50:45 pm', 'usuario', 2022, 'US57558716511'),
(88, 'CB088511', '2022-06-01', '08:20:41 pm', 'sin datos', 'cliente', 2022, 'CL18585566411'),
(89, 'CB895222', '2022-06-01', '08:32:53 pm', 'sin datos', 'admin', 2022, 'ADM90537141611'),
(90, 'CB003644', '2022-06-09', '11:10:48 am', 'sin datos', 'cliente', 2022, 'CL18585566411'),
(91, 'CB188677', '2022-06-23', '07:58:29 pm', 'sin datos', 'admin', 2022, 'ADM90537141611'),
(92, 'CB640411', '2022-06-23', '08:07:12 pm', 'sin datos', 'cliente', 2022, 'CL18585566411'),
(93, 'CB890333', '2022-06-29', '09:37:28 am', 'sin datos', 'cliente', 2022, 'CL18585566411'),
(94, 'CB160533', '2022-06-29', '11:36:39 am', 'sin datos', 'cliente', 2022, 'CL18585566411'),
(95, 'CB883100', '2022-07-01', '05:13:28 pm', 'sin datos', 'cliente', 2022, 'CL18585566411'),
(96, 'CB189622', '2022-07-02', '05:28:38 pm', 'sin datos', 'cliente', 2022, 'CL18585566411'),
(97, 'CB491844', '2022-07-02', '07:12:37 pm', 'sin datos', 'admin', 2022, 'ADM90537141611'),
(98, 'CB548100', '2022-07-03', '08:52:40 am', 'sin datos', 'admin', 2022, 'ADM90537141611'),
(99, 'CB326566', '2022-07-04', '10:03:09 am', 'sin datos', 'cliente', 2022, 'CL18585566411'),
(100, 'CB916500', '2022-07-04', '09:34:11 pm', 'sin datos', 'admin', 2022, 'ADM90537141611'),
(101, 'CB305288', '2022-07-04', '10:52:03 pm', 'sin datos', 'cliente', 2022, 'CL18585566411'),
(102, 'CB839422', '2022-07-06', '11:11:52 am', '04:18:19 am', 'admin', 2022, 'ADM90537141611'),
(103, 'CB678044', '2022-07-06', '12:18:24 pm', 'sin datos', 'cliente', 2022, 'CL18585566411'),
(104, 'CB059288', '2022-07-07', '04:18:29 am', 'sin datos', 'admin', 2022, 'ADM90537141611'),
(105, 'CB075766', '2022-07-13', '12:03:22 pm', 'sin datos', 'admin', 2022, 'ADM90537141611'),
(106, 'CB359244', '2022-07-18', '06:41:38 am', 'sin datos', 'admin', 2022, 'ADM90537141611'),
(107, 'CB147455', '2022-07-19', '09:06:20 pm', 'sin datos', 'cliente', 2022, 'CL18585566411'),
(108, 'CB593899', '2022-07-20', '09:00:45 pm', 'sin datos', 'admin', 2022, 'ADM90537141611'),
(109, 'CB503455', '2022-07-26', '10:55:17 am', 'sin datos', 'cliente', 2022, 'CL18585566411'),
(110, 'CB860200', '2022-08-02', '09:57:44 pm', 'sin datos', 'cliente', 2022, 'CL18585566411'),
(111, 'CB691644', '2022-08-11', '11:49:27 am', 'sin datos', 'admin', 2022, 'ADM90537141611'),
(112, 'CB308899', '2022-08-11', '11:49:51 am', '10:47:26 pm', 'cliente', 2022, 'CL18585566411'),
(113, 'CB452588', '2022-09-22', '10:30:46 am', 'sin datos', 'admin', 2022, 'ADM90537141611'),
(114, 'CB758255', '2022-09-22', '05:04:59 pm', 'sin datos', 'admin', 2022, 'ADM90537141611'),
(115, 'CB103355', '2022-09-22', '05:29:13 pm', 'sin datos', 'usuario', 2022, 'US67208600822'),
(116, 'CB072833', '2022-09-22', '06:51:46 pm', 'sin datos', 'cliente', 2022, 'CL18585566411'),
(117, 'CB313500', '2022-10-20', '03:43:55 pm', 'sin datos', 'usuario', 2022, 'US67208600822'),
(118, 'CB468499', '2022-10-20', '03:48:29 pm', '04:18:44 pm', 'usuario', 2022, 'US67208600822'),
(119, 'CB213299', '2022-10-20', '04:19:12 pm', '04:22:45 pm', 'usuario', 2022, 'US67208600822'),
(120, 'CB062800', '2022-10-20', '04:23:25 pm', '05:09:36 pm', 'usuario', 2022, 'US67208600822'),
(121, 'CB200155', '2022-10-20', '05:15:43 pm', '05:16:12 pm', 'usuario', 2022, 'US67208600822'),
(122, 'CB408455', '2022-10-20', '05:30:00 pm', 'sin datos', 'usuario', 2022, 'US67208600822'),
(123, 'CB441055', '2022-10-21', '07:02:39 am', 'sin datos', 'cliente', 2022, 'CL18585566411'),
(124, 'CB720744', '2022-10-21', '07:07:54 am', 'sin datos', 'admin', 2022, 'ADM90537141611'),
(125, 'CB044266', '2022-10-24', '06:35:30 pm', 'sin datos', 'cliente', 2022, 'CL18585566411'),
(126, 'CB995477', '2022-10-24', '07:22:29 pm', '07:22:37 pm', 'usuario', 2022, 'US67208600822'),
(127, 'CB269999', '2022-10-24', '08:10:16 pm', 'sin datos', 'cliente', 2022, 'CL18585566411'),
(128, 'CB159600', '2022-10-24', '09:19:53 pm', 'sin datos', 'usuario', 2022, 'US67208600822');

-- --------------------------------------------------------

--
-- Table structure for table `cargo`
--

CREATE TABLE `cargo` (
  `id_cargo` int(11) NOT NULL,
  `nombre_cargo` varchar(45) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cargo`
--

INSERT INTO `cargo` (`id_cargo`, `nombre_cargo`, `cantidad`, `descripcion`, `estado`) VALUES
(1, 'Gerencia', 1, 'Nivel mas Alto y control total.', 1),
(2, 'Administrativo', 5, 'nivel medio, control al 80%', 1),
(3, 'VENTAS', 5, 'nivel relacionado a ventas', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categorias`
--

CREATE TABLE `categorias` (
  `cod_categoria` varchar(10) NOT NULL,
  `nombre` varchar(65) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `estado` int(11) NOT NULL,
  `fecha_reg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categorias`
--

INSERT INTO `categorias` (`cod_categoria`, `nombre`, `descripcion`, `estado`, `fecha_reg`) VALUES
('CAT000001', 'Aventura', 'Actividades refernte a aventuras, pesca, etc', 1, '2022-04-27 16:52:38'),
('CAT000002', 'Campings', 'Actividad con respecto a campamentos', 1, '2022-04-27 16:52:38'),
('CAT000003', 'Alojamientos ', 'Con respecto a alojamiento de diferentes tipos de establecimientos', 1, '2022-04-27 16:54:23'),
('CAT000004', 'Tours', 'paquetes de turismo como son los tours', 1, '2022-04-27 16:54:23');

-- --------------------------------------------------------

--
-- Table structure for table `cesta`
--

CREATE TABLE `cesta` (
  `cod_cesta` int(11) NOT NULL,
  `cod_cliente` varchar(15) NOT NULL,
  `cod_servicio` varchar(41) NOT NULL,
  `personas` int(11) NOT NULL,
  `fecha_reserva` date NOT NULL,
  `ninos_menores` int(11) NOT NULL,
  `ninos_mayores` int(2) NOT NULL,
  `adultos` int(2) NOT NULL,
  `adultos_mayores` int(2) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `estado` int(2) NOT NULL DEFAULT '1',
  `fecha_reg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cesta`
--

INSERT INTO `cesta` (`cod_cesta`, `cod_cliente`, `cod_servicio`, `personas`, `fecha_reserva`, `ninos_menores`, `ninos_mayores`, `adultos`, `adultos_mayores`, `total`, `estado`, `fecha_reg`) VALUES
(26, 'US22822624944', 'SER994942284440085006956046391755693788', 4, '2022-10-24', 0, 1, 3, 0, '200.00', 1, '2022-10-25 02:17:12'),
(27, 'US22822624944', 'SER435521376331527877827541808677344833', 4, '2022-10-25', 2, 0, 2, 0, '120.00', 1, '2022-10-25 02:18:22');

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

CREATE TABLE `clientes` (
  `cod_cliente` varchar(15) NOT NULL,
  `razon_social` varchar(100) NOT NULL,
  `nombre_fantasia` varchar(80) NOT NULL,
  `rut` varchar(11) NOT NULL,
  `rubro` varchar(100) NOT NULL,
  `direccion` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `representante` varchar(100) NOT NULL,
  `contrasena` varchar(200) NOT NULL,
  `politica` int(11) NOT NULL,
  `cod_verificacion` varchar(10) NOT NULL,
  `estado_ver` int(11) NOT NULL DEFAULT '0',
  `estado` int(11) NOT NULL,
  `fecha_reg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clientes`
--

INSERT INTO `clientes` (`cod_cliente`, `razon_social`, `nombre_fantasia`, `rut`, `rubro`, `direccion`, `email`, `telefono`, `representante`, `contrasena`, `politica`, `cod_verificacion`, `estado_ver`, `estado`, `fecha_reg`) VALUES
('CL18585566411', 'turismo bus encantador', 'bus encantador', '123456789-2', 'turismo', 'prov. virgen de fatima mz. a lt.4 - carabayllo', 'yedeljim@gmail.com', '+51938893091', 'yedel jimn alpes leandro', 'bGxGeFJRdE1CK3FpLzJDTnJhUU9sdz09', 1, '', 1, 1, '2022-04-07 22:22:17'),
('CL52616725999', 'ventura tours s.a', 'ventura', '77112211-3', 'pesca', 'prov. virgen de fatima mza lt4 carabayllo', 'ventura@gmail.com', '+51938234543', 'rafael ventura', 'bGxGeFJRdE1CK3FpLzJDTnJhUU9sdz09', 1, '', 0, 1, '2022-04-14 03:04:30');

-- --------------------------------------------------------

--
-- Table structure for table `comunas`
--

CREATE TABLE `comunas` (
  `id` int(11) NOT NULL,
  `comuna` varchar(64) NOT NULL,
  `provincia_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comunas`
--

INSERT INTO `comunas` (`id`, `comuna`, `provincia_id`) VALUES
(1, 'Arica', 1),
(2, 'Camarones', 1),
(3, 'General Lagos', 2),
(4, 'Putre', 2),
(5, 'Alto Hospicio', 3),
(6, 'Iquique', 3),
(7, 'Camiña', 4),
(8, 'Colchane', 4),
(9, 'Huara', 4),
(10, 'Pica', 4),
(11, 'Pozo Almonte', 4),
(12, 'Tocopilla', 5),
(13, 'María Elena', 5),
(14, 'Calama', 6),
(15, 'Ollague', 6),
(16, 'San Pedro de Atacama', 6),
(17, 'Antofagasta', 7),
(18, 'Mejillones', 7),
(19, 'Sierra Gorda', 7),
(20, 'Taltal', 7),
(21, 'Chañaral', 8),
(22, 'Diego de Almagro', 8),
(23, 'Copiapó', 9),
(24, 'Caldera', 9),
(25, 'Tierra Amarilla', 9),
(26, 'Vallenar', 10),
(27, 'Alto del Carmen', 10),
(28, 'Freirina', 10),
(29, 'Huasco', 10),
(30, 'La Serena', 11),
(31, 'Coquimbo', 11),
(32, 'Andacollo', 11),
(33, 'La Higuera', 11),
(34, 'Paihuano', 11),
(35, 'Vicuña', 11),
(36, 'Ovalle', 12),
(37, 'Combarbalá', 12),
(38, 'Monte Patria', 12),
(39, 'Punitaqui', 12),
(40, 'Río Hurtado', 12),
(41, 'Illapel', 13),
(42, 'Canela', 13),
(43, 'Los Vilos', 13),
(44, 'Salamanca', 13),
(45, 'La Ligua', 14),
(46, 'Cabildo', 14),
(47, 'Zapallar', 14),
(48, 'Papudo', 14),
(49, 'Petorca', 14),
(50, 'Los Andes', 15),
(51, 'San Esteban', 15),
(52, 'Calle Larga', 15),
(53, 'Rinconada', 15),
(54, 'San Felipe', 16),
(55, 'Llaillay', 16),
(56, 'Putaendo', 16),
(57, 'Santa María', 16),
(58, 'Catemu', 16),
(59, 'Panquehue', 16),
(60, 'Quillota', 17),
(61, 'La Cruz', 17),
(62, 'La Calera', 17),
(63, 'Nogales', 17),
(64, 'Hijuelas', 17),
(65, 'Valparaíso', 18),
(66, 'Viña del Mar', 18),
(67, 'Concón', 18),
(68, 'Quintero', 18),
(69, 'Puchuncaví', 18),
(70, 'Casablanca', 18),
(71, 'Juan Fernández', 18),
(72, 'San Antonio', 19),
(73, 'Cartagena', 19),
(74, 'El Tabo', 19),
(75, 'El Quisco', 19),
(76, 'Algarrobo', 19),
(77, 'Santo Domingo', 19),
(78, 'Isla de Pascua', 20),
(79, 'Quilpué', 21),
(80, 'Limache', 21),
(81, 'Olmué', 21),
(82, 'Villa Alemana', 21),
(83, 'Colina', 22),
(84, 'Lampa', 22),
(85, 'Tiltil', 22),
(86, 'Santiago', 23),
(87, 'Vitacura', 23),
(88, 'San Ramón', 23),
(89, 'San Miguel', 23),
(90, 'San Joaquín', 23),
(91, 'Renca', 23),
(92, 'Recoleta', 23),
(93, 'Quinta Normal', 23),
(94, 'Quilicura', 23),
(95, 'Pudahuel', 23),
(96, 'Providencia', 23),
(97, 'Peñalolén', 23),
(98, 'Pedro Aguirre Cerda', 23),
(99, 'Ñuñoa', 23),
(100, 'Maipú', 23),
(101, 'Macul', 23),
(102, 'Lo Prado', 23),
(103, 'Lo Espejo', 23),
(104, 'Lo Barnechea', 23),
(105, 'Las Condes', 23),
(106, 'La Reina', 23),
(107, 'La Pintana', 23),
(108, 'La Granja', 23),
(109, 'La Florida', 23),
(110, 'La Cisterna', 23),
(111, 'Independencia', 23),
(112, 'Huechuraba', 23),
(113, 'Estación Central', 23),
(114, 'El Bosque', 23),
(115, 'Conchalí', 23),
(116, 'Cerro Navia', 23),
(117, 'Cerrillos', 23),
(118, 'Puente Alto', 24),
(119, 'San José de Maipo', 24),
(120, 'Pirque', 24),
(121, 'San Bernardo', 25),
(122, 'Buin', 25),
(123, 'Paine', 25),
(124, 'Calera de Tango', 25),
(125, 'Melipilla', 26),
(126, 'Alhué', 26),
(127, 'Curacaví', 26),
(128, 'María Pinto', 26),
(129, 'San Pedro', 26),
(130, 'Isla de Maipo', 27),
(131, 'El Monte', 27),
(132, 'Padre Hurtado', 27),
(133, 'Peñaflor', 27),
(134, 'Talagante', 27),
(135, 'Codegua', 28),
(136, 'Coínco', 28),
(137, 'Coltauco', 28),
(138, 'Doñihue', 28),
(139, 'Graneros', 28),
(140, 'Las Cabras', 28),
(141, 'Machalí', 28),
(142, 'Malloa', 28),
(143, 'Mostazal', 28),
(144, 'Olivar', 28),
(145, 'Peumo', 28),
(146, 'Pichidegua', 28),
(147, 'Quinta de Tilcoco', 28),
(148, 'Rancagua', 28),
(149, 'Rengo', 28),
(150, 'Requínoa', 28),
(151, 'San Vicente de Tagua Tagua', 28),
(152, 'Chépica', 29),
(153, 'Chimbarongo', 29),
(154, 'Lolol', 29),
(155, 'Nancagua', 29),
(156, 'Palmilla', 29),
(157, 'Peralillo', 29),
(158, 'Placilla', 29),
(159, 'Pumanque', 29),
(160, 'San Fernando', 29),
(161, 'Santa Cruz', 29),
(162, 'La Estrella', 30),
(163, 'Litueche', 30),
(164, 'Marchigüe', 30),
(165, 'Navidad', 30),
(166, 'Paredones', 30),
(167, 'Pichilemu', 30),
(168, 'Curicó', 31),
(169, 'Hualañé', 31),
(170, 'Licantén', 31),
(171, 'Molina', 31),
(172, 'Rauco', 31),
(173, 'Romeral', 31),
(174, 'Sagrada Familia', 31),
(175, 'Teno', 31),
(176, 'Vichuquén', 31),
(177, 'Talca', 32),
(178, 'San Clemente', 32),
(179, 'Pelarco', 32),
(180, 'Pencahue', 32),
(181, 'Maule', 32),
(182, 'San Rafael', 32),
(183, 'Curepto', 33),
(184, 'Constitución', 32),
(185, 'Empedrado', 32),
(186, 'Río Claro', 32),
(187, 'Linares', 33),
(188, 'San Javier', 33),
(189, 'Parral', 33),
(190, 'Villa Alegre', 33),
(191, 'Longaví', 33),
(192, 'Colbún', 33),
(193, 'Retiro', 33),
(194, 'Yerbas Buenas', 33),
(195, 'Cauquenes', 34),
(196, 'Chanco', 34),
(197, 'Pelluhue', 34),
(198, 'Bulnes', 35),
(199, 'Chillán', 35),
(200, 'Chillán Viejo', 35),
(201, 'El Carmen', 35),
(202, 'Pemuco', 35),
(203, 'Pinto', 35),
(204, 'Quillón', 35),
(205, 'San Ignacio', 35),
(206, 'Yungay', 35),
(207, 'Cobquecura', 36),
(208, 'Coelemu', 36),
(209, 'Ninhue', 36),
(210, 'Portezuelo', 36),
(211, 'Quirihue', 36),
(212, 'Ránquil', 36),
(213, 'Treguaco', 36),
(214, 'San Carlos', 37),
(215, 'Coihueco', 37),
(216, 'San Nicolás', 37),
(217, 'Ñiquén', 37),
(218, 'San Fabián', 37),
(219, 'Alto Biobío', 38),
(220, 'Antuco', 38),
(221, 'Cabrero', 38),
(222, 'Laja', 38),
(223, 'Los Ángeles', 38),
(224, 'Mulchén', 38),
(225, 'Nacimiento', 38),
(226, 'Negrete', 38),
(227, 'Quilaco', 38),
(228, 'Quilleco', 38),
(229, 'San Rosendo', 38),
(230, 'Santa Bárbara', 38),
(231, 'Tucapel', 38),
(232, 'Yumbel', 38),
(233, 'Concepción', 39),
(234, 'Coronel', 39),
(235, 'Chiguayante', 39),
(236, 'Florida', 39),
(237, 'Hualpén', 39),
(238, 'Hualqui', 39),
(239, 'Lota', 39),
(240, 'Penco', 39),
(241, 'San Pedro de La Paz', 39),
(242, 'Santa Juana', 39),
(243, 'Talcahuano', 39),
(244, 'Tomé', 39),
(245, 'Arauco', 40),
(246, 'Cañete', 40),
(247, 'Contulmo', 40),
(248, 'Curanilahue', 40),
(249, 'Lebu', 40),
(250, 'Los Álamos', 40),
(251, 'Tirúa', 40),
(252, 'Angol', 41),
(253, 'Collipulli', 41),
(254, 'Curacautín', 41),
(255, 'Ercilla', 41),
(256, 'Lonquimay', 41),
(257, 'Los Sauces', 41),
(258, 'Lumaco', 41),
(259, 'Purén', 41),
(260, 'Renaico', 41),
(261, 'Traiguén', 41),
(262, 'Victoria', 41),
(263, 'Temuco', 42),
(264, 'Carahue', 42),
(265, 'Cholchol', 42),
(266, 'Cunco', 42),
(267, 'Curarrehue', 42),
(268, 'Freire', 42),
(269, 'Galvarino', 42),
(270, 'Gorbea', 42),
(271, 'Lautaro', 42),
(272, 'Loncoche', 42),
(273, 'Melipeuco', 42),
(274, 'Nueva Imperial', 42),
(275, 'Padre Las Casas', 42),
(276, 'Perquenco', 42),
(277, 'Pitrufquén', 42),
(278, 'Pucón', 42),
(279, 'Saavedra', 42),
(280, 'Teodoro Schmidt', 42),
(281, 'Toltén', 42),
(282, 'Vilcún', 42),
(283, 'Villarrica', 42),
(284, 'Valdivia', 43),
(285, 'Corral', 43),
(286, 'Lanco', 43),
(287, 'Los Lagos', 43),
(288, 'Máfil', 43),
(289, 'Mariquina', 43),
(290, 'Paillaco', 43),
(291, 'Panguipulli', 43),
(292, 'La Unión', 44),
(293, 'Futrono', 44),
(294, 'Lago Ranco', 44),
(295, 'Río Bueno', 44),
(297, 'Osorno', 45),
(298, 'Puerto Octay', 45),
(299, 'Purranque', 45),
(300, 'Puyehue', 45),
(301, 'Río Negro', 45),
(302, 'San Juan de la Costa', 45),
(303, 'San Pablo', 45),
(304, 'Calbuco', 46),
(305, 'Cochamó', 46),
(306, 'Fresia', 46),
(307, 'Frutillar', 46),
(308, 'Llanquihue', 46),
(309, 'Los Muermos', 46),
(310, 'Maullín', 46),
(311, 'Puerto Montt', 46),
(312, 'Puerto Varas', 46),
(313, 'Ancud', 47),
(314, 'Castro', 47),
(315, 'Chonchi', 47),
(316, 'Curaco de Vélez', 47),
(317, 'Dalcahue', 47),
(318, 'Puqueldón', 47),
(319, 'Queilén', 47),
(320, 'Quellón', 47),
(321, 'Quemchi', 47),
(322, 'Quinchao', 47),
(323, 'Chaitén', 48),
(324, 'Futaleufú', 48),
(325, 'Hualaihué', 48),
(326, 'Palena', 48),
(327, 'Lago Verde', 49),
(328, 'Coihaique', 49),
(329, 'Aysén', 50),
(330, 'Cisnes', 50),
(331, 'Guaitecas', 50),
(332, 'Río Ibáñez', 51),
(333, 'Chile Chico', 51),
(334, 'Cochrane', 52),
(335, 'O\'Higgins', 52),
(336, 'Tortel', 52),
(337, 'Natales', 53),
(338, 'Torres del Paine', 53),
(339, 'Laguna Blanca', 54),
(340, 'Punta Arenas', 54),
(341, 'Río Verde', 54),
(342, 'San Gregorio', 54),
(343, 'Porvenir', 55),
(344, 'Primavera', 55),
(345, 'Timaukel', 55),
(346, 'Cabo de Hornos', 56),
(347, 'Antártica', 56);

-- --------------------------------------------------------

--
-- Table structure for table `descuento_servicio`
--

CREATE TABLE `descuento_servicio` (
  `cod_descuento` int(11) NOT NULL,
  `cod_servicio` varchar(41) NOT NULL,
  `cod_cliente` varchar(20) NOT NULL,
  `id_tipo_costo` int(2) NOT NULL,
  `minimo` int(3) NOT NULL,
  `maximo` int(3) NOT NULL,
  `costo` decimal(10,2) NOT NULL,
  `tipo_descuento` char(2) NOT NULL,
  `estado` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `descuento_servicio`
--

INSERT INTO `descuento_servicio` (`cod_descuento`, `cod_servicio`, `cod_cliente`, `id_tipo_costo`, `minimo`, `maximo`, `costo`, `tipo_descuento`, `estado`) VALUES
(1, 'SER598824542976736269971236674415409122', 'CL52616725999', 1, 2, 5, '10.00', '%', 1),
(2, 'SER598824542976736269971236674415409122', 'CL52616725999', 1, 6, 8, '20.00', '%', 1);

-- --------------------------------------------------------

--
-- Table structure for table `destinos`
--

CREATE TABLE `destinos` (
  `cod_destino` int(11) NOT NULL,
  `id_region` int(11) NOT NULL,
  `id_provincia` int(11) NOT NULL,
  `id_comuna` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `ruta` varchar(150) NOT NULL,
  `estado` int(2) NOT NULL,
  `fecha_reg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `destinos`
--

INSERT INTO `destinos` (`cod_destino`, `id_region`, `id_provincia`, `id_comuna`, `nombre`, `imagen`, `ruta`, `estado`, `fecha_reg`) VALUES
(9, 1, 1, 1, 'Arica', '44a765753274aebed58645a2f15eec1e.jpeg', 'http://localhost:8888/admin_benaventura/vistas/assets/destinos/', 1, '2022-09-24 00:02:43'),
(10, 2, 3, 6, 'Iquique', 'ecf2182c0698af859ecaa0267b1e6128.jpeg', 'http://localhost:8888/admin_benaventura/vistas/assets/destinos/', 1, '2022-09-24 00:03:21'),
(11, 3, 7, 17, 'Antofagasta', 'd876d36a9ca71da2ca4945ac987a56e1.jpeg', 'http://localhost:8888/admin_benaventura/vistas/assets/destinos/', 1, '2022-09-24 00:04:15'),
(12, 4, 8, 21, 'Atacama', '51da5c4017e75a47a2d627c852542bd7.jpeg', 'http://localhost:8888/admin_benaventura/vistas/assets/destinos/', 1, '2022-09-24 00:04:51'),
(13, 5, 12, 36, 'Coquimbo', '83604f138f2767bef110f19caafaf769.jpeg', 'http://localhost:8888/admin_benaventura/vistas/assets/destinos/', 1, '2022-09-24 00:05:49'),
(14, 6, 18, 65, 'Valparaiso', 'f87c351dd766f96a9104a734b28490f4.jpeg', 'http://localhost:8888/admin_benaventura/vistas/assets/destinos/', 1, '2022-09-24 00:06:13'),
(15, 7, 23, 86, 'Santiago', 'f3d36fa97cf74f7384b4d58606ed80ff.png', 'http://localhost:8888/admin_benaventura/vistas/assets/destinos/', 1, '2022-09-24 00:06:38'),
(16, 8, 28, 137, 'Coltauco', 'a9fdb46e4eb28c82ee20c4944b9c064e.jpeg', 'http://localhost:8888/admin_benaventura/vistas/assets/destinos/', 1, '2022-09-24 00:07:52');

-- --------------------------------------------------------

--
-- Table structure for table `detalles_servicio`
--

CREATE TABLE `detalles_servicio` (
  `cod_detalla_servic` varchar(41) NOT NULL,
  `cod_servicio` varchar(41) NOT NULL,
  `disponibilidad` int(11) NOT NULL,
  `incluye_hotel` int(11) NOT NULL,
  `incluye_transporte` int(11) NOT NULL,
  `incluye_recojo` int(11) NOT NULL,
  `reservar_cuando` int(3) NOT NULL,
  `medida_cuando` varchar(10) NOT NULL,
  `personas_minima` int(11) NOT NULL,
  `persona_maxima` int(11) DEFAULT NULL,
  `duracion` int(11) DEFAULT NULL,
  `medida_duracion` varchar(20) DEFAULT NULL,
  `idiomas` varchar(65) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `detalles_servicio`
--

INSERT INTO `detalles_servicio` (`cod_detalla_servic`, `cod_servicio`, `disponibilidad`, `incluye_hotel`, `incluye_transporte`, `incluye_recojo`, `reservar_cuando`, `medida_cuando`, `personas_minima`, `persona_maxima`, `duracion`, `medida_duracion`, `idiomas`) VALUES
('DSE089071860543902660262885845100078266', 'SER363338788594499384693773267363067255', 1, 0, 1, 0, 12, 'Hora', 3, NULL, 8, 'Hora', 'es,en,'),
('DSE114962823508855110411086242278286988', 'SER048368459416885134717488046885109133', 1, 0, 1, 1, 12, 'Hora', 1, NULL, 8, 'Hora', 'es,en,'),
('DSE188671912270050353940167480824993188', 'SER164463657743105367208051826574527300', 3, 0, 1, 0, 12, 'Hora', 1, NULL, 8, 'Hora', 'es,en,'),
('DSE225900708604707414807485622231125111', 'SER017083776190374745499818985441809422', 3, 0, 1, 0, 12, 'Hora', 1, NULL, NULL, NULL, NULL),
('DSE248537158859661709564610618540341555', 'SER905336388145888005564745044177868133', 2, 0, 1, 0, 12, 'Hora', 1, NULL, 8, 'Hora', ''),
('DSE272460792517751779011326364430172622', 'SER212666228907462097879920819545994644', 1, 1, 1, 1, 2, 'Dias', 4, 10, 5, 'Dias', 'es,en,'),
('DSE302038414562917130302434417266241700', 'SER119548544721591958204711421457143222', 2, 0, 1, 0, 12, 'Hora', 1, NULL, 2, 'Hora', 'es,en,'),
('DSE306568134298906443663751535386058800', 'SER044769274285267453234199488572624200', 1, 0, 1, 1, 12, 'Hora', 1, NULL, 3, 'Hora', 'es,en,'),
('DSE338128827197648669067467355127521588', 'SER435521376331527877827541808677344833', 2, 1, 1, 1, 8, 'Hora', 4, 100, 8, 'Hora', 'es,en,'),
('DSE389415145703546951636615057184129088', 'SER529357522506902476910952708144311555', 3, 0, 1, 1, 12, 'Hora', 3, NULL, 8, 'Hora', ''),
('DSE392821008303181995973797273115991744', 'SER237149349401976973868101304433054800', 1, 0, 1, 1, 12, 'Hora', 1, NULL, 12, 'Hora', 'es,'),
('DSE394670464191466141277773527014285455', 'SER681819013279791595764065255440158899', 1, 0, 1, 1, 12, 'Hora', 1, NULL, 4, 'Hora', 'es,en,'),
('DSE439352323086096268825461499413436933', 'SER994942284440085006956046391755693788', 1, 0, 1, 1, 2, 'Dias', 4, 12, 24, 'Hora', 'es,'),
('DSE464848863509284793744452227317663411', 'SER274717704669516636481611115717878755', 1, 0, 1, 1, 8, 'Hora', 1, NULL, 4, 'Hora', 'es,en,'),
('DSE535176344307585963524085911108870333', 'SER739622120138744641917061495891396288', 3, 0, 1, 1, 24, 'Hora', 3, NULL, 8, 'Hora', 'es,en,'),
('DSE584469505232240126035412541861943933', 'SER836150806747475685236595124199538966', 1, 0, 1, 0, 12, 'Hora', 1, NULL, 6, 'Hora', 'es,en,'),
('DSE587370492872038917780098060737355655', 'SER746798940732214530964687531830062155', 2, 0, 1, 1, 12, 'Hora', 1, NULL, 8, 'Hora', 'es,en,'),
('DSE592564497709667224435072214123675899', 'SER349572353357883814093195685384094455', 3, 0, 1, 0, 12, 'Hora', 3, NULL, 10, 'Hora', 'es,en,'),
('DSE646025972860107024927731167417626955', 'SER911861950632354107163999425639120488', 1, 0, 0, 0, 12, 'Hora', 1, NULL, 9, 'Hora', 'es,'),
('DSE652085847187786877287573571646832699', 'SER160920867714723766080316435357206977', 1, 0, 1, 1, 12, 'Hora', 1, NULL, 4, 'Hora', 'es,en,'),
('DSE652534064667000548264540454241594377', 'SER803180273778555449384279421313982833', 4, 1, 0, 0, 1, '', 4, NULL, 8, 'Hora', 'es,'),
('DSE773853888218619781542397627532438222', 'SER598824542976736269971236674415409122', 3, 0, 1, 1, 8, 'Hora', 5, 10, NULL, NULL, NULL),
('DSE976474942469631616754105218030495411', 'SER182505365054627481218919684468809522', 2, 0, 0, 0, 1, '', 4, NULL, 8, 'Hora', 'es,'),
('DSE981139520667731318476094037822144588', 'SER391748606861886900698390758371129099', 1, 0, 1, 1, 12, 'Hora', 1, NULL, 3, 'Hora', 'es,en,');

-- --------------------------------------------------------

--
-- Table structure for table `detalle_clientes`
--

CREATE TABLE `detalle_clientes` (
  `id_detalle_cliente` int(11) NOT NULL,
  `cod_cliente` varchar(15) NOT NULL,
  `foto_perfil` varchar(200) DEFAULT NULL,
  `foto_portada` varchar(200) DEFAULT NULL,
  `video_intro` varchar(200) DEFAULT NULL,
  `biografia` text,
  `tags` text,
  `fecha_reg` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `detalle_clientes`
--

INSERT INTO `detalle_clientes` (`id_detalle_cliente`, `cod_cliente`, `foto_perfil`, `foto_portada`, `video_intro`, `biografia`, `tags`, `fecha_reg`) VALUES
(4, 'CL18585566411', 'dc31305e1375de779e4e0dba68896d84.png', 'c4e25b3450c808e05f15836e168aa8a1.jpg', 'https://www.youtube.com/watch?v=DRERBRMMm6s&ab_channel=SouthPacificTravelSAC', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas \"Letraset\", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.  si', 'turismo,aventura,vacaciones,playa', '2022-04-23');

-- --------------------------------------------------------

--
-- Table structure for table `detalle_costo`
--

CREATE TABLE `detalle_costo` (
  `cod_detalle_costo` int(11) NOT NULL,
  `cod_servicio` varchar(41) NOT NULL,
  `cod_cliente` varchar(20) NOT NULL,
  `costo_ninos_menores` decimal(10,2) NOT NULL DEFAULT '0.00',
  `costo_ninos_mayores` decimal(10,2) NOT NULL DEFAULT '0.00',
  `costo_adultos` decimal(10,2) NOT NULL DEFAULT '0.00',
  `costo_adultos_mayores` decimal(10,2) NOT NULL DEFAULT '0.00',
  `estado` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `detalle_costo`
--

INSERT INTO `detalle_costo` (`cod_detalle_costo`, `cod_servicio`, `cod_cliente`, `costo_ninos_menores`, `costo_ninos_mayores`, `costo_adultos`, `costo_adultos_mayores`, `estado`) VALUES
(1, 'SER598824542976736269971236674415409122', 'CL52616725999', '60.00', '70.00', '80.00', '90.00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `detalle_reservacion`
--

CREATE TABLE `detalle_reservacion` (
  `id_detalle_reserva` int(11) NOT NULL,
  `cod_reservacion` varchar(41) NOT NULL,
  `tipo_persona` varchar(65) NOT NULL,
  `run` varchar(10) NOT NULL,
  `nombre` varchar(65) NOT NULL,
  `apellido` varchar(65) NOT NULL,
  `edad` int(3) NOT NULL,
  `costo` decimal(10,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `detalle_reservacion`
--

INSERT INTO `detalle_reservacion` (`id_detalle_reserva`, `cod_reservacion`, `tipo_persona`, `run`, `nombre`, `apellido`, `edad`, `costo`) VALUES
(1, 'RE414742764907570333211191603750722022', 'Adulto', '12345678', 'yedel jimn', 'alpes leandro', 34, '0.00'),
(2, 'RE414742764907570333211191603750722022', 'Adulto', '1234567876', 'maria ', 'soto solis', 25, '0.00'),
(3, 'RE414742764907570333211191603750722022', 'Niños Menores', '2345678912', 'brayan', 'soto solis', 5, '0.00'),
(4, 'RE414742764907570333211191603750722022', 'Niños Mayores', '1234567865', 'aldair', 'soto solis', 9, '0.00'),
(5, 'RE014709875974647692661507201560200388', 'Adulto', '12345678', 'yedel jimn', 'alpes leandro', 34, '0.00'),
(6, 'RE014709875974647692661507201560200388', 'Adulto', '1234567876', 'maria ', 'alpes leandro', 29, '0.00'),
(7, 'RE014709875974647692661507201560200388', 'Niños Menores', '2345678912', 'brayan', 'soto solis', 5, '0.00'),
(8, 'RE014709875974647692661507201560200388', 'Niños Mayores', '1234567865', 'aldair', 'soto solis', 9, '0.00'),
(9, 'RE393418724166861968604423120109918533', 'Adulto', '12345678', 'yedel jimn', 'alpes leandro', 14, '0.00'),
(10, 'RE393418724166861968604423120109918533', 'Adulto', '1234567876', 'yedel jimn', 'alpes leandro', 14, '0.00'),
(11, 'RE393418724166861968604423120109918533', 'Niños Menores', '2345678912', 'yedel jimn', 'alpes leandro', 5, '0.00'),
(12, 'RE393418724166861968604423120109918533', 'Niños Mayores', '1234567865', 'yedel jimn', 'alpes leandro', 11, '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `disponibilidad_servicio`
--

CREATE TABLE `disponibilidad_servicio` (
  `id_disponibilidad` int(11) NOT NULL,
  `cod_servicio` varchar(41) NOT NULL,
  `cod_cliente` varchar(20) NOT NULL,
  `hora_inicio` time NOT NULL,
  `hora_fin` time NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date DEFAULT NULL,
  `estado` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `disponibilidad_servicio`
--

INSERT INTO `disponibilidad_servicio` (`id_disponibilidad`, `cod_servicio`, `cod_cliente`, `hora_inicio`, `hora_fin`, `fecha_inicio`, `fecha_fin`, `estado`) VALUES
(1, 'SER598824542976736269971236674415409122', 'CL52616725999', '13:08:00', '14:08:00', '2022-05-28', NULL, 1),
(2, 'SER435521376331527877827541808677344833', 'CL18585566411', '08:30:00', '18:00:00', '2022-05-27', NULL, 1),
(3, 'SER212666228907462097879920819545994644', 'CL18585566411', '12:42:00', '10:05:00', '2022-06-30', NULL, 1),
(4, 'SER994942284440085006956046391755693788', 'CL18585566411', '17:48:00', '16:49:00', '2022-08-11', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `excluye_serv`
--

CREATE TABLE `excluye_serv` (
  `cod_excluye` int(20) NOT NULL,
  `cod_servicio` varchar(41) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `excluye_serv`
--

INSERT INTO `excluye_serv` (`cod_excluye`, `cod_servicio`, `descripcion`) VALUES
(1, 'SER182505365054627481218919684468809522', 'hospedaje'),
(2, 'SER182505365054627481218919684468809522', 'trajes de baño'),
(3, 'SER182505365054627481218919684468809522', 'entrada al centro recreativo'),
(4, 'SER435521376331527877827541808677344833', 'hospedaje'),
(5, 'SER435521376331527877827541808677344833', 'entrada al centro recreativo'),
(6, 'SER435521376331527877827541808677344833', 'sistema'),
(7, 'SER212666228907462097879920819545994644', 'hospedaje'),
(8, 'SER212666228907462097879920819545994644', 'entradas a las piscinas'),
(9, 'SER212666228907462097879920819545994644', 'entrada a los juegos mecanicos'),
(10, 'SER212666228907462097879920819545994644', 'desayuno');

-- --------------------------------------------------------

--
-- Table structure for table `faq_servicio`
--

CREATE TABLE `faq_servicio` (
  `cod_faq` int(11) NOT NULL,
  `cod_servicio` varchar(41) NOT NULL,
  `cod_cliente` varchar(20) NOT NULL,
  `pregunta` varchar(200) NOT NULL,
  `respuesta` text NOT NULL,
  `estado` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `galeria_servicios`
--

CREATE TABLE `galeria_servicios` (
  `cod_galeria` int(11) NOT NULL,
  `cod_cliente` varchar(15) NOT NULL,
  `cod_servicio` varchar(41) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `galeria_servicios`
--

INSERT INTO `galeria_servicios` (`cod_galeria`, `cod_cliente`, `cod_servicio`, `foto`) VALUES
(1, 'CL18585566411', 'SER212666228907462097879920819545994644', 'cc64085f55109db0f4cccd7f6ed1ba77.jpg'),
(2, 'CL18585566411', 'SER212666228907462097879920819545994644', '86a16623e5de844e9cdb7c1171eea401.jpg'),
(3, 'CL18585566411', 'SER212666228907462097879920819545994644', 'c9eaa7ab6df75208f7078709a65b4244.jpg'),
(4, 'CL18585566411', 'SER212666228907462097879920819545994644', '5281a4530ee86a1fb7650caa81d8b81f.jpg'),
(5, 'CL18585566411', 'SER212666228907462097879920819545994644', '77ee5e50c6d18d6d99da268eb1dff7fc.jpg'),
(6, 'CL18585566411', 'SER212666228907462097879920819545994644', 'f7ad0a988d934b45b4c25301d9806ae0.jpg'),
(7, 'CL18585566411', 'SER212666228907462097879920819545994644', 'acab4956a0b258aca9d7504ccae34636.jpg'),
(8, 'CL18585566411', 'SER212666228907462097879920819545994644', '978cf4e0503b2e00dc7108bfab36bd8a.jpg'),
(9, 'CL18585566411', 'SER212666228907462097879920819545994644', 'ba78d41775e753212bc0046c637c6bc6.jpg'),
(10, 'CL18585566411', 'SER435521376331527877827541808677344833', 'd38979a963956ed0d2ca2568a5bf020d.jpg'),
(11, 'CL18585566411', 'SER435521376331527877827541808677344833', 'f8092ee78e75a0dc5dbe320b3e545700.jpg'),
(12, 'CL18585566411', 'SER435521376331527877827541808677344833', 'ded3342dafcbac031b48fbe3c70b2b55.jpg'),
(13, 'CL18585566411', 'SER435521376331527877827541808677344833', 'b5c2834e77c39b6e0295a3b377b173af.jpg'),
(14, 'CL18585566411', 'SER435521376331527877827541808677344833', 'd3e06b9e77e9f019c29d9422c5668e8a.jpg'),
(15, 'CL18585566411', 'SER435521376331527877827541808677344833', '2a37fd4007eaf9c4c0c445b0b2e2d74c.jpg'),
(16, 'CL18585566411', 'SER435521376331527877827541808677344833', '1be7b7b619e840b6bdb7b382057e65f1.jpg'),
(17, 'CL18585566411', 'SER435521376331527877827541808677344833', 'a797c08325c286e0487879dbc3e327ae.jpg'),
(18, 'CL18585566411', 'SER435521376331527877827541808677344833', '3a429565ea94011a2756b6c372a994ec.jpg'),
(19, 'CL18585566411', 'SER994942284440085006956046391755693788', '6853dee62c6126df330e8f57c7b6d045.jpg'),
(20, 'CL18585566411', 'SER994942284440085006956046391755693788', '95c2f0e5e10094845d35bdc25a62b23e.jpg'),
(21, 'CL18585566411', 'SER994942284440085006956046391755693788', 'dc2c4fd152ad7e2dd45beb92f62a794e.jpg'),
(22, 'CL18585566411', 'SER994942284440085006956046391755693788', '1749460096b84fd572aefcf92a22bf49.jpg'),
(23, 'CL18585566411', 'SER994942284440085006956046391755693788', '9dfcd8bd053edf554a688bf0454a648a.jpg'),
(24, 'CL18585566411', 'SER994942284440085006956046391755693788', 'd8123cf474cc93baa171c75a2a9eaf66.jpg'),
(25, 'CL18585566411', 'SER994942284440085006956046391755693788', '132569e1b088f3b5384e7bee61ab321a.jpg'),
(26, 'CL18585566411', 'SER994942284440085006956046391755693788', 'e21785bb8f74779fd1b1d336b8fba1de.jpg'),
(27, 'CL18585566411', 'SER994942284440085006956046391755693788', '84733a0c36a7725cb582ec5a2f33031d.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `geolocalizacion`
--

CREATE TABLE `geolocalizacion` (
  `cod_localizacion` varchar(15) NOT NULL,
  `cod_cliente` varchar(15) NOT NULL,
  `id_region` int(11) NOT NULL,
  `id_provincia` int(11) NOT NULL,
  `id_comuna` int(11) NOT NULL,
  `latitud` varchar(45) NOT NULL,
  `longitud` varchar(45) NOT NULL,
  `estado` int(11) NOT NULL,
  `fecha_reg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `geolocalizacion`
--

INSERT INTO `geolocalizacion` (`cod_localizacion`, `cod_cliente`, `id_region`, `id_provincia`, `id_comuna`, `latitud`, `longitud`, `estado`, `fecha_reg`) VALUES
('GE01092541955', 'CL52616725999', 2, 3, 5, '-12.138907', '-76.9754267', 1, '2022-04-26 00:06:06'),
('GE59168537100', 'CL18585566411', 6, 18, 65, '-12.1389555', '-76.9754308', 1, '2022-04-25 23:50:46');

-- --------------------------------------------------------

--
-- Table structure for table `geo_servicios`
--

CREATE TABLE `geo_servicios` (
  `cod_geo` varchar(41) NOT NULL,
  `cod_servicio` varchar(41) NOT NULL,
  `cod_cliente` varchar(20) NOT NULL,
  `id_region` int(11) NOT NULL,
  `id_provincia` int(11) NOT NULL,
  `id_comuna` int(11) NOT NULL,
  `direccion_fisica` varchar(150) NOT NULL,
  `direccion_map` varchar(200) NOT NULL,
  `longitud` varchar(45) NOT NULL,
  `latitud` varchar(45) NOT NULL,
  `zoom` int(11) DEFAULT NULL,
  `markador` varchar(100) DEFAULT NULL,
  `estado` int(11) NOT NULL,
  `fecha_edit` datetime DEFAULT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `geo_servicios`
--

INSERT INTO `geo_servicios` (`cod_geo`, `cod_servicio`, `cod_cliente`, `id_region`, `id_provincia`, `id_comuna`, `direccion_fisica`, `direccion_map`, `longitud`, `latitud`, `zoom`, `markador`, `estado`, `fecha_edit`, `fecha_registro`) VALUES
('GES057661714516192367641584314841701333', 'SER182505365054627481218919684468809522', 'CL18585566411', 3, 7, 17, 'antofagasta centron1', 'ninguno', '-76.9753473', '-12.1390849', NULL, NULL, 1, NULL, '2022-07-04 16:19:54'),
('GES087563083311031670747997019021316633', 'SER739622120138744641917061495891396288', 'CL18585566411', 10, 37, 216, 'san nicolas', '', '-76.9753754', '-12.1390145', NULL, NULL, 1, NULL, '2022-10-24 23:59:30'),
('GES129594106929039154732095496065398455', 'SER119548544721591958204711421457143222', 'CL18585566411', 2, 4, 8, 'los lagos 675', '', '-76.9753827', '-12.1390077', NULL, NULL, 1, NULL, '2022-10-25 00:18:59'),
('GES161170600941910657633084277961092855', 'SER164463657743105367208051826574527300', 'CL18585566411', 6, 18, 65, 'valparaiso 456', '', '-76.9753576', '-12.1390109', NULL, NULL, 1, NULL, '2022-10-24 23:50:26'),
('GES162814638792805318147438699700655633', 'SER905336388145888005564745044177868133', 'CL18585566411', 4, 8, 21, 'valparaiso 456', '', '-76.9753258', '-12.1390092', NULL, NULL, 1, '2022-10-24 07:02:43', '2022-10-25 00:02:30'),
('GES209380174255065238280033192433145344', 'SER044769274285267453234199488572624200', 'CL18585566411', 3, 6, 15, 'arica 345', '', '-76.9753535', '-12.1389838', NULL, NULL, 1, NULL, '2022-10-25 00:20:21'),
('GES209693436635408578351588064360062755', 'SER681819013279791595764065255440158899', 'CL18585566411', 7, 23, 86, 'santiago 45367', '', '-76.9753596', '-12.1390211', NULL, NULL, 1, NULL, '2022-10-24 23:56:57'),
('GES214110948315608503336504804408589188', 'SER911861950632354107163999425639120488', 'CL18585566411', 5, 13, 42, 'arica 345', '', '-76.9753311', '-12.1390309', NULL, NULL, 1, NULL, '2022-10-25 00:01:36'),
('GES215162188122410395554625676085366422', 'SER994942284440085006956046391755693788', 'CL18585566411', 5, 12, 36, 'prov. virgen de fatima mza lt4 carabayllo', 'prov. virgen de fatima mza lt4 carabayllo', '-76.9753082', '-12.1390051', NULL, NULL, 1, NULL, '2022-07-26 16:03:16'),
('GES283234916009890756905339710356148155', 'SER349572353357883814093195685384094455', 'CL18585566411', 4, 10, 26, 'los lagos 675', '', '-76.9753171', '-12.1390224', NULL, NULL, 1, NULL, '2022-10-24 23:55:40'),
('GES357714752485540293684172815605039800', 'SER529357522506902476910952708144311555', 'CL18585566411', 5, 12, 38, 'monte carlo 234', '', '-76.9753554', '-12.1390078', NULL, NULL, 1, NULL, '2022-10-24 23:58:08'),
('GES394851167030442313916404928278228844', 'SER391748606861886900698390758371129099', 'CL18585566411', 13, 44, 294, 'valparaiso 456', '', '-76.9753687', '-12.1389783', NULL, NULL, 1, '2022-10-24 07:17:47', '2022-10-25 00:17:38'),
('GES423964907365367894820823869781781400', 'SER212666228907462097879920819545994644', 'CL18585566411', 2, 3, 5, 'prov. virgen de fatima mz. a lt.4 - carabayllo', 'prov. virgen de fatima mz. a lt.4 - carabayllo', '-76.9753337', '-12.1390577', NULL, NULL, 1, '2022-05-12 10:21:13', '2022-05-13 00:17:56'),
('GES424457347659728091264155052174997900', 'SER435521376331527877827541808677344833', 'CL18585566411', 5, 12, 36, 'av. ovalle 234', 'no definido', '-76.9753275', '-12.1390442', NULL, NULL, 1, NULL, '2022-05-18 02:22:17'),
('GES502577470865217709223388941061536188', 'SER048368459416885134717488046885109133', 'CL18585566411', 1, 1, 1, 'arica 345', '', '-76.9753923', '-12.1389851', NULL, NULL, 1, '2022-10-24 06:43:00', '2022-10-24 23:42:30'),
('GES608392067446188141083321608754917266', 'SER803180273778555449384279421313982833', 'CL18585566411', 3, 7, 17, 'antofagsta centro 2', 'ninguno', '-76.9753014', '-12.139076', NULL, NULL, 1, '2022-07-04 11:27:03', '2022-07-04 16:26:28'),
('GES628053238356493954927984742898357322', 'SER237149349401976973868101304433054800', 'CL18585566411', 4, 10, 27, 'alto carmen 5647', '', '-76.9753552', '-12.139015', NULL, NULL, 1, NULL, '2022-10-24 23:51:35'),
('GES805275437445440703002227811148228877', 'SER746798940732214530964687531830062155', 'CL18585566411', 7, 23, 86, 'alto carmen 5647', '', '-76.9753673', '-12.1390163', NULL, NULL, 1, '2022-10-24 07:16:06', '2022-10-25 00:15:45'),
('GES807755827618545330233611817141829611', 'SER363338788594499384693773267363067255', 'CL18585566411', 4, 9, 24, 'caldera 564', '', '-76.975363', '-12.1390087', NULL, NULL, 1, NULL, '2022-10-24 23:53:54'),
('GES833705456353331766740812153048804666', 'SER274717704669516636481611115717878755', 'CL18585566411', 9, 32, 179, 'palarco 564', '', '-76.9753645', '-12.1390043', NULL, NULL, 1, NULL, '2022-10-24 23:52:38'),
('GES868384098719126256055627227204915211', 'SER160920867714723766080316435357206977', 'CL18585566411', 13, 43, 287, 'los lagos 675', '', '-76.9753581', '-12.139019', NULL, NULL, 1, NULL, '2022-10-24 23:49:25'),
('GES887936421783173878623512530951396755', 'SER836150806747475685236595124199538966', 'CL18585566411', 12, 41, 260, 'renaico 456', '', '-76.9753821', '-12.1390208', NULL, NULL, 1, NULL, '2022-10-25 00:00:43');

-- --------------------------------------------------------

--
-- Table structure for table `idiomas`
--

CREATE TABLE `idiomas` (
  `id_idioma` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `abreviatura` char(3) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `idiomas`
--

INSERT INTO `idiomas` (`id_idioma`, `nombre`, `abreviatura`, `estado`) VALUES
(1, 'Español', 'es', 1),
(2, 'Ingles', 'en', 1);

-- --------------------------------------------------------

--
-- Table structure for table `incluye_serv`
--

CREATE TABLE `incluye_serv` (
  `cod_incluye` int(20) NOT NULL,
  `cod_servicio` varchar(41) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `incluye_serv`
--

INSERT INTO `incluye_serv` (`cod_incluye`, `cod_servicio`, `descripcion`) VALUES
(4, 'SER182505365054627481218919684468809522', 'comida'),
(5, 'SER182505365054627481218919684468809522', 'cena'),
(6, 'SER182505365054627481218919684468809522', 'tour de vino'),
(7, 'SER182505365054627481218919684468809522', ''),
(8, 'SER182505365054627481218919684468809522', ''),
(9, 'SER435521376331527877827541808677344833', 'comida'),
(10, 'SER435521376331527877827541808677344833', 'cena'),
(11, 'SER435521376331527877827541808677344833', 'tour de vino'),
(12, 'SER212666228907462097879920819545994644', 'entradas a lo centros recreativos'),
(13, 'SER212666228907462097879920819545994644', 'transporte de regreso'),
(14, 'SER212666228907462097879920819545994644', 'ropas de baño'),
(15, 'SER212666228907462097879920819545994644', 'almueroz0');

-- --------------------------------------------------------

--
-- Table structure for table `itinerario_servicio`
--

CREATE TABLE `itinerario_servicio` (
  `cod_itinerario` int(11) NOT NULL,
  `cod_servicio` varchar(41) NOT NULL,
  `cod_cliente` varchar(20) NOT NULL,
  `momento` varchar(45) NOT NULL,
  `titulo` varchar(150) NOT NULL,
  `descripcion` text NOT NULL,
  `estado` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `itinerario_servicio`
--

INSERT INTO `itinerario_servicio` (`cod_itinerario`, `cod_servicio`, `cod_cliente`, `momento`, `titulo`, `descripcion`, `estado`) VALUES
(1, 'SER212666228907462097879920819545994644', 'CL18585566411', '12: 00 pm', 'almuerzo', 'almuerzo', 1),
(2, 'SER212666228907462097879920819545994644', 'CL18585566411', '1:00 pm', 'salida', 'salida', 1),
(3, 'SER182505365054627481218919684468809522', 'CL18585566411', '12: 00 pm', 'almuerzo', 'almuerzo de todo los tours', 1),
(4, 'SER182505365054627481218919684468809522', 'CL18585566411', '1:00 pm', 'salida', 'sdsdsdsdsdsdssffsfdffdffffd', 1),
(5, 'SER435521376331527877827541808677344833', 'CL18585566411', '12: 00 pm', 'almuerzo', 'almuerzo de todos', 1),
(6, 'SER435521376331527877827541808677344833', 'CL18585566411', '1:00 pm', 'salida', 'salida del centro recreativo', 1),
(7, 'SER435521376331527877827541808677344833', 'CL18585566411', '2:00 pm', 'retorno ', 'retorno a la agencia ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `medida_duracion`
--

CREATE TABLE `medida_duracion` (
  `id_medida` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `medida_duracion`
--

INSERT INTO `medida_duracion` (`id_medida`, `nombre`, `estado`) VALUES
(1, 'Hora', 1),
(2, 'Dias', 1),
(3, 'Semanas', 1),
(4, 'Meses', 1);

-- --------------------------------------------------------

--
-- Table structure for table `provincias`
--

CREATE TABLE `provincias` (
  `id` int(11) NOT NULL,
  `provincia` varchar(64) NOT NULL,
  `region_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `provincias`
--

INSERT INTO `provincias` (`id`, `provincia`, `region_id`) VALUES
(1, 'Arica', 1),
(2, 'Parinacota', 1),
(3, 'Iquique', 2),
(4, 'El Tamarugal', 2),
(5, 'Tocopilla', 3),
(6, 'El Loa', 3),
(7, 'Antofagasta', 3),
(8, 'Chañaral', 4),
(9, 'Copiapó', 4),
(10, 'Huasco', 4),
(11, 'Elqui', 5),
(12, 'Limarí', 5),
(13, 'Choapa', 5),
(14, 'Petorca', 6),
(15, 'Los Andes', 6),
(16, 'San Felipe de Aconcagua', 6),
(17, 'Quillota', 6),
(18, 'Valparaiso', 6),
(19, 'San Antonio', 6),
(20, 'Isla de Pascua', 6),
(21, 'Marga Marga', 6),
(22, 'Chacabuco', 7),
(23, 'Santiago', 7),
(24, 'Cordillera', 7),
(25, 'Maipo', 7),
(26, 'Melipilla', 7),
(27, 'Talagante', 7),
(28, 'Cachapoal', 8),
(29, 'Colchagua', 8),
(30, 'Cardenal Caro', 8),
(31, 'Curicó', 9),
(32, 'Talca', 9),
(33, 'Linares', 9),
(34, 'Cauquenes', 9),
(35, 'Diguillín', 10),
(36, 'Itata', 10),
(37, 'Punilla', 10),
(38, 'Bio Bío', 11),
(39, 'Concepción', 11),
(40, 'Arauco', 11),
(41, 'Malleco', 12),
(42, 'Cautín', 12),
(43, 'Valdivia', 13),
(44, 'Ranco', 13),
(45, 'Osorno', 14),
(46, 'Llanquihue', 14),
(47, 'Chiloé', 14),
(48, 'Palena', 14),
(49, 'Coyhaique', 15),
(50, 'Aysén', 15),
(51, 'General Carrera', 15),
(52, 'Capitán Prat', 15),
(53, 'Última Esperanza', 16),
(54, 'Magallanes', 16),
(55, 'Tierra del Fuego', 16),
(56, 'Antártica Chilena', 16);

-- --------------------------------------------------------

--
-- Table structure for table `redes_cliente`
--

CREATE TABLE `redes_cliente` (
  `cod_redes` int(11) NOT NULL,
  `cod_cliente` varchar(15) NOT NULL,
  `facebook` varchar(100) DEFAULT NULL,
  `instagram` varchar(100) DEFAULT NULL,
  `pintrest` varchar(100) DEFAULT NULL,
  `twitter` varchar(100) DEFAULT NULL,
  `youtube` varchar(100) DEFAULT NULL,
  `whatsapp` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `redes_cliente`
--

INSERT INTO `redes_cliente` (`cod_redes`, `cod_cliente`, `facebook`, `instagram`, `pintrest`, `twitter`, `youtube`, `whatsapp`) VALUES
(1, 'CL18585566411', 'bus_encantador', 'busencantador', 'busencantador', 'bus_encantador', 'you_busencantador', ''),
(2, 'CL52616725999', 'ventura', 'ventura_ins', 'ventura', 'ventura_tw', 'you_ventura2', '');

-- --------------------------------------------------------

--
-- Table structure for table `regiones`
--

CREATE TABLE `regiones` (
  `id` int(11) NOT NULL,
  `region` varchar(64) NOT NULL,
  `abreviatura` varchar(4) NOT NULL,
  `capital` varchar(64) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `regiones`
--

INSERT INTO `regiones` (`id`, `region`, `abreviatura`, `capital`) VALUES
(1, 'Arica y Parinacota', 'AP', 'Arica'),
(2, 'Tarapacá', 'TA', 'Iquique'),
(3, 'Antofagasta', 'AN', 'Antofagasta'),
(4, 'Atacama', 'AT', 'Copiapó'),
(5, 'Coquimbo', 'CO', 'La Serena'),
(6, 'Valparaiso', 'VA', 'valparaíso'),
(7, 'Metropolitana de Santiago', 'RM', 'Santiago'),
(8, 'Libertador General Bernardo O\'Higgins', 'OH', 'Rancagua'),
(9, 'Maule', 'MA', 'Talca'),
(10, 'Ñuble', 'NB', 'Chillán'),
(11, 'Biobío', 'BI', 'Concepción'),
(12, 'La Araucanía', 'IAR', 'Temuco'),
(13, 'Los Ríos', 'LR', 'Valdivia'),
(14, 'Los Lagos', 'LL', 'Puerto Montt'),
(15, 'Aysén del General Carlos Ibáñez del Campo', 'AI', 'Coyhaique'),
(16, 'Magallanes y de la Antártica Chilena', 'MG', 'Punta Arenas');

-- --------------------------------------------------------

--
-- Table structure for table `reservaciones`
--

CREATE TABLE `reservaciones` (
  `cod_reservacion` varchar(41) NOT NULL,
  `cod_servicio` varchar(41) NOT NULL,
  `cod_cliente` varchar(20) NOT NULL,
  `cod_usuario` varchar(15) NOT NULL,
  `fecha_reserva` date NOT NULL,
  `hora_reserva` time DEFAULT NULL,
  `nro_personas` int(2) NOT NULL,
  `tipo_costo` int(2) NOT NULL,
  `costo_servicio` decimal(10,2) NOT NULL,
  `subtotal` decimal(10,2) NOT NULL,
  `igv` decimal(10,2) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `estado` int(2) NOT NULL,
  `fecha_reg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reservaciones`
--

INSERT INTO `reservaciones` (`cod_reservacion`, `cod_servicio`, `cod_cliente`, `cod_usuario`, `fecha_reserva`, `hora_reserva`, `nro_personas`, `tipo_costo`, `costo_servicio`, `subtotal`, `igv`, `total`, `estado`, `fecha_reg`) VALUES
('RE014709875974647692661507201560200388', 'SER435521376331527877827541808677344833', 'CL18585566411', 'US47357531022', '2022-06-01', NULL, 4, 2, '120.00', '120.00', '0.00', '120.00', 2, '2022-06-01 20:29:09'),
('RE393418724166861968604423120109918533', 'SER435521376331527877827541808677344833', 'CL18585566411', 'US37666907366', '2022-06-02', NULL, 4, 2, '120.00', '120.00', '0.00', '120.00', 1, '2022-06-02 05:11:03'),
('RE414742764907570333211191603750722022', 'SER435521376331527877827541808677344833', 'CL18585566411', 'US91404313699', '2022-06-04', NULL, 4, 2, '120.00', '120.00', '0.00', '120.00', 1, '2022-06-01 16:19:21');

-- --------------------------------------------------------

--
-- Table structure for table `restricciones_servicios`
--

CREATE TABLE `restricciones_servicios` (
  `cod_restriccion` varchar(41) NOT NULL,
  `cod_servicio` varchar(41) NOT NULL,
  `cod_cliente` varchar(20) NOT NULL,
  `descu_personas` int(2) NOT NULL,
  `descu_paquete` int(2) NOT NULL,
  `accesibilidad_fisica` int(2) NOT NULL,
  `mascotas` int(2) NOT NULL,
  `ninos_menores` int(2) NOT NULL,
  `edad_min_ninmen` int(2) NOT NULL,
  `edad_max_ninmen` int(2) NOT NULL,
  `ninos_mayores` int(2) NOT NULL,
  `edad_min_ninmay` int(2) NOT NULL,
  `edad_max_ninmay` int(2) NOT NULL,
  `edad_min_adultos` int(2) NOT NULL,
  `edad_max_adultos` int(2) NOT NULL,
  `adultos_mayores` int(2) NOT NULL,
  `edad_min_admay` int(2) NOT NULL,
  `edad_max_admay` int(3) NOT NULL,
  `fecha_reg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `estado` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `restricciones_servicios`
--

INSERT INTO `restricciones_servicios` (`cod_restriccion`, `cod_servicio`, `cod_cliente`, `descu_personas`, `descu_paquete`, `accesibilidad_fisica`, `mascotas`, `ninos_menores`, `edad_min_ninmen`, `edad_max_ninmen`, `ninos_mayores`, `edad_min_ninmay`, `edad_max_ninmay`, `edad_min_adultos`, `edad_max_adultos`, `adultos_mayores`, `edad_min_admay`, `edad_max_admay`, `fecha_reg`, `estado`) VALUES
('RES209811401675214121484889007328508988', 'SER212666228907462097879920819545994644', 'CL18585566411', 0, 1, 1, 0, 1, 0, 8, 1, 9, 12, 13, 65, 0, 66, 100, '2022-05-16 19:06:19', 1),
('RES299783072640007967940366786012931977', 'SER994942284440085006956046391755693788', 'CL18585566411', 0, 1, 0, 0, 0, 0, 4, 1, 5, 10, 11, 40, 1, 41, 70, '2022-07-26 16:06:37', 1),
('RES475645850095536493016613529245666266', 'SER435521376331527877827541808677344833', 'CL18585566411', 0, 1, 1, 0, 1, 0, 7, 1, 8, 12, 13, 66, 0, 67, 100, '2022-05-18 02:29:13', 1),
('RES512419049820925320096417771617624422', 'SER598824542976736269971236674415409122', 'CL52616725999', 1, 0, 1, 1, 1, 0, 8, 1, 9, 12, 13, 65, 1, 67, 100, '2022-05-18 03:06:33', 1);

-- --------------------------------------------------------

--
-- Table structure for table `servicios`
--

CREATE TABLE `servicios` (
  `cod_servicio` varchar(41) NOT NULL,
  `cod_cliente` varchar(15) NOT NULL,
  `cod_subcategori` varchar(10) NOT NULL,
  `cod_categoria` varchar(10) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `descripcion` text NOT NULL,
  `id_tipo_costo` int(11) NOT NULL,
  `costo` decimal(10,3) NOT NULL,
  `img_portada` varchar(200) NOT NULL,
  `video_servis` varchar(200) DEFAULT NULL,
  `estado` int(11) NOT NULL,
  `fecha_reg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fecha_edit` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `servicios`
--

INSERT INTO `servicios` (`cod_servicio`, `cod_cliente`, `cod_subcategori`, `cod_categoria`, `titulo`, `descripcion`, `id_tipo_costo`, `costo`, `img_portada`, `video_servis`, `estado`, `fecha_reg`, `fecha_edit`) VALUES
('SER017083776190374745499818985441809422', 'CL18585566411', 'SCA0000001', 'CAT000001', 'City Tour Puerto Montt y Puerto Varas', 'Accede a la historia de dos importantes ciudades con este city tour Puerto Montt y Puerto Varas, recorriendo sus atracciones más importantes.', 1, '240.000', 'ac5e07c0695a4c88c194b22d0da7b74c.jpg', NULL, 1, '2022-10-21 14:19:37', NULL),
('SER044769274285267453234199488572624200', 'CL18585566411', 'SCA0000002', 'CAT000001', 'Escalada y Rappel', 'Toma este tour de Escalada y Rappel y vive la aventura en los alrededores de Concepción. Incluye transporte compartido.', 1, '20.000', '1be69e698b83aeffded45c71e25a27fb.jpeg', NULL, 1, '2022-10-21 15:04:52', '2022-10-24 07:20:21'),
('SER048368459416885134717488046885109133', 'CL18585566411', 'SCA0000008', 'CAT000004', 'Tour Viña Santa Rita', 'Visita la Viña Santa Rita. El tour a la viña incluye transporte, guía y degustación de vinos.', 1, '28.000', '6a2107ad19e27f0bc7eaebaa62bfcdec.jpg', NULL, 1, '2022-10-21 15:53:14', '2022-10-24 06:43:00'),
('SER119548544721591958204711421457143222', 'CL18585566411', 'SCA0000010', 'CAT000001', 'Kayak Andino', 'Realiza este kayak andino en medio de la cordillera alrededor de Santiago. Incluye transporte privado y equipo.', 1, '40.000', '09a76d71c6b3e3323db66018d02c471e.jpeg', NULL, 1, '2022-10-21 16:08:39', '2022-10-24 07:18:59'),
('SER160920867714723766080316435357206977', 'CL18585566411', 'SCA0000008', 'CAT000004', 'Cochamó y Termas del Sol', 'Visita Cochamó y las Termas del Sol inmersas en la selva valdiviana siempre verde del Sur de Chile. Incluye transporte y guía.', 1, '20.000', '3a15e2515cee94539a39b07814c5c5fb.jpg', NULL, 1, '2022-10-21 14:41:11', '2022-10-24 06:49:25'),
('SER164463657743105367208051826574527300', 'CL18585566411', 'SCA0000009', 'CAT000004', 'City Tour Valparaíso y Viña del Mar', 'Haz este city tour Valparaíso y Viña del Mar, y recorre los cerros y hermosas playas de la Quinta Región. Incluye transporte desde Santiago.', 1, '30.000', '83ca0480a1d6daffcd51e2597e9261e8.jpg', NULL, 1, '2022-10-21 15:25:51', '2022-10-24 06:50:26'),
('SER182505365054627481218919684468809522', 'CL18585566411', 'SCA0000001', 'CAT000001', 'pesca en la playa agua dulce', 'Lorem Ipsum viene de las secciones 1.10.32 y 1.10.33 de \"de Finnibus Bonorum et Malorum\" (Los Extremos del Bien y El Mal) por Cicero, escrito en el año 45 antes de Cristo. Este libro es un tratado de teoría de éticas, muy popular durante el Renacimiento. La primera linea del Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", viene de una linea en la sección 1.10.32', 1, '65.000', 'ed7d2b28cb4c5c12cd77f6f17a33de75.jpg', NULL, 1, '2022-05-18 02:37:26', '2022-06-23 09:53:53'),
('SER212666228907462097879920819545994644', 'CL18585566411', 'SCA0000001', 'CAT000001', 'Pesca en el rio petrohue', 'El trozo de texto estándar de Lorem Ipsum usado desde el año 1500 es reproducido debajo para aquellos interesados. Las secciones 1.10.32 y 1.10.33 de \"de Finibus Bonorum et Malorum\" por Cicero son también reproducidas en su forma original exacta, acompañadas por versiones en Inglés de la traducción realizada en 1914 por H. Rackham.', 2, '123.000', '20b991e95212bcc953b7d3ccf037de17.jpg', 'https://www.youtube.com/watch?v=kGBeDcLFjSQ&ab_channel=BienTayp%C3%A1Tv', 1, '2022-05-03 02:43:21', '2022-06-29 12:46:04'),
('SER237149349401976973868101304433054800', 'CL18585566411', 'SCA0000009', 'CAT000004', 'Tour Panorámico Farellones y Valle Nevado', 'Visita el pueblo de Farellones y el centro de ski Valle Nevado en medio de la Cordillera de los Andes, a solo 60 km de Santiago.', 1, '35.000', '3bca05e5e20250225b14a8d2b9ae8cb4.jpeg', NULL, 1, '2022-10-21 15:36:58', '2022-10-24 06:51:35'),
('SER274717704669516636481611115717878755', 'CL18585566411', 'SCA0000008', 'CAT000004', 'Tour Viña Undurraga', 'Visita la clásica Viña Undurraga. Incluye transporte, guía y degustación de vinos.', 1, '35.000', 'b7eb80dcc0ecbd6b5f18d585bd6cc7c0.jpg', NULL, 1, '2022-10-21 15:57:13', '2022-10-24 06:52:38'),
('SER349572353357883814093195685384094455', 'CL18585566411', 'SCA0000008', 'CAT000004', 'Antofagasta y Mano del Desierto', 'Visita el puerto de Antofagasta y Mano del Desierto con este tour de medio día. Incluye guía, transporte y set de fotografías.', 2, '2000.000', 'd504fddbdd73bf87b8b465d99877cb82.jpg', NULL, 1, '2022-10-21 17:27:16', '2022-10-24 06:55:40'),
('SER363338788594499384693773267363067255', 'CL18585566411', 'SCA0000009', 'CAT000004', 'City Tour Arica', 'Toma este City Tour Arica y recorre los puntos más importantes de la ciudad de la eterna primavera. Incluye guía.', 2, '3000.000', 'a29d47eb76a29ced27f1a92bb3a1177a.jpeg', NULL, 1, '2022-10-21 19:47:30', '2022-10-24 06:53:54'),
('SER391748606861886900698390758371129099', 'CL18585566411', 'SCA0000001', 'CAT000001', 'Rafting Alto Biobío', 'Rema con este Rafting Alto Biobío y pasa por rápidos categoría III, mientras ves los paisajes de esta región. Incluye transporte compartido.', 1, '22.000', '103ff1af9e3441974d05aa74605e405e.jpeg', NULL, 1, '2022-10-21 15:17:24', '2022-10-24 07:17:48'),
('SER435521376331527877827541808677344833', 'CL18585566411', 'SCA0000001', 'CAT000001', 'pesca en el rio rimac', 'Si vas a utilizar un pasaje de Lorem Ipsum, necesitás estar seguro de que no hay nada avergonzante escondido en el medio del texto. Todos los generadores de Lorem Ipsum que se encuentran en Internet tienden a repetir trozos predefinidos cuando sea necesario, haciendo a este el único generador verdadero (válido) en la Internet.', 2, '120.000', 'f2d4067d89656a6763742c2b18862255.jpg', 'https://www.youtube.com/watch?v=bS5Ym5vgOrI', 1, '2022-05-14 15:20:56', '2022-05-27 06:39:05'),
('SER529357522506902476910952708144311555', 'CL18585566411', 'SCA0000008', 'CAT000004', 'Parque Nacional Alerce Andino', 'Conéctate con la naturaleza con este tour al Parque Nacional Alerce Andino, recorriendo los senderos del bosque del sur de Chile.', 2, '2000.000', '186b1a3f1d7828814f9815257b7b1528.jpg', NULL, 1, '2022-10-21 14:49:15', '2022-10-24 06:58:08'),
('SER598824542976736269971236674415409122', 'CL52616725999', 'SCA0000004', 'CAT000001', 'sky en la cordillera', 'Hay muchas variaciones de los pasajes de Lorem Ipsum disponibles, pero la mayoría sufrió alteraciones en alguna manera, ya sea porque se le agregó humor, o palabras aleatorias que no parecen ni un poco creíbles. Si vas a utilizar un pasaje de Lorem Ipsum, necesitás estar seguro de que no hay nada avergonzante escondido en el medio del texto.', 1, '90.000', '0975274b5482ab03d40908149ad2ec34.jpg', NULL, 1, '2022-05-18 02:46:55', '2022-05-25 04:49:48'),
('SER681819013279791595764065255440158899', 'CL18585566411', 'SCA0000008', 'CAT000004', 'Tour Viña Concha y Toro', 'Vive el tour Viña Concha y Toro, y conoce la leyenda del Casillero del Diablo. Incluye transporte desde tu hotel, guía y degustación de vinos.', 1, '22.000', '5b14e4e14335b660d1d0470dbf1f84dd.jpg', NULL, 1, '2022-10-21 15:44:37', '2022-10-24 06:56:57'),
('SER739622120138744641917061495891396288', 'CL18585566411', 'SCA0000008', 'CAT000004', 'Laguna Roja', 'Descubre el secreto mejor guardado del norte de Chile, con la visita del pueblo de Camiña y la Laguna Roja. Incluye transporte y guía.', 2, '25000.000', '397f1fa1b751084466b8218729d7a325.jpg', NULL, 1, '2022-10-21 20:32:45', '2022-10-24 06:59:30'),
('SER746798940732214530964687531830062155', 'CL18585566411', 'SCA0000002', 'CAT000001', 'Trekking Glaciar El Morado', 'Haz el Trekking Glaciar El Morado, de intensidad media alta y visita la cordillera de los Andes cercana a la Santiago. Incluye transporte y guía.', 1, '50.000', 'bea0f00e171d2b5f263d42af4e1de8e0.jpeg', NULL, 1, '2022-10-21 16:16:50', '2022-10-24 07:16:06'),
('SER803180273778555449384279421313982833', 'CL18585566411', 'SCA0000001', 'CAT000001', 'Pesca de truchas en el rio amazonas', 'pesca artesanal en el rio amazonas con caña de pescar', 1, '125.000', '581d48497d5d8f1402365bd1c4c4cb47.jpg', NULL, 1, '2022-05-03 01:30:09', '2022-07-04 11:27:03'),
('SER836150806747475685236595124199538966', 'CL18585566411', 'SCA0000008', 'CAT000004', 'Ancud, Dalcahue y Castro', 'Vive el encanto de Chiloé con este tour a Ancud, Dalcahue y Castro, con el que conocerás las atracciones más importantes de estas ciudades.', 1, '20.000', '6e8fff3bdbd431fb9311861773feec19.jpg', NULL, 1, '2022-10-21 14:35:10', '2022-10-24 07:00:43'),
('SER905336388145888005564745044177868133', 'CL18585566411', 'SCA0000008', 'CAT000004', 'Volcán Osorno y Saltos del Petrohué', 'Recorre los paisajes cordilleranos con este tour volcán Osorno y Saltos del Petrohué. Incluye transporte compartido desde Puerto Varas.', 1, '18.000', '56c6bed02c63386e9bd5c2ae1c2d751f.jpg', NULL, 1, '2022-10-21 14:26:52', '2022-10-24 07:02:43'),
('SER911861950632354107163999425639120488', 'CL18585566411', 'SCA0000009', 'CAT000004', 'City Tour La Serena y Coquimbo', 'Toma el City Tour La Serena y Coquimbo, y conoce los puntos más importantes de estas ciudades del norte de Chile.', 1, '40.000', 'cae000832cd04224c2f9283150c88776.jpg', NULL, 1, '2022-10-21 17:22:55', '2022-10-24 07:01:36'),
('SER994942284440085006956046391755693788', 'CL18585566411', 'SCA0000008', 'CAT000004', 'lunahuana full day', 'TOUR POR TODO EL DISTRITO DE LUNAHUANA RECORRIENDO LAS MEJORES RUTAS TURISTICAS', 2, '200.000', 'b532c83234f36245c7d191b2e7fccac0.jpg', 'https://www.youtube.com/watch?v=gQdxgflbw6I&ab_channel=ArielCruzPizarro', 1, '2022-07-26 16:00:34', '2022-07-26 11:04:41');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categorias`
--

CREATE TABLE `sub_categorias` (
  `cod_sub_cate` varchar(10) NOT NULL,
  `cod_categoria` varchar(10) NOT NULL,
  `nombre` varchar(65) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `estado` int(11) NOT NULL,
  `fecha_reg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sub_categorias`
--

INSERT INTO `sub_categorias` (`cod_sub_cate`, `cod_categoria`, `nombre`, `descripcion`, `estado`, `fecha_reg`) VALUES
('SCA0000001', 'CAT000001', 'Pesca', 'ACTIVIDAD PESQUERA', 1, '2022-04-27 17:00:54'),
('SCA0000002', 'CAT000001', 'Trekkings', 'ACTIVIDAD DE CAMINATA', 1, '2022-04-27 17:00:54'),
('SCA0000004', 'CAT000001', 'Sky Nieve', 'DEPORTE SOBRE NIEVE', 1, '2022-04-27 17:08:18'),
('SCA0000005', 'CAT000002', 'Camping', 'actividad de campamentos', 1, '2022-04-27 17:08:18'),
('SCA0000006', 'CAT000003', 'Cabañas', 'alojamiento en cabañas', 1, '2022-04-27 17:08:18'),
('SCA0000007', 'CAT000003', 'Hoteles', 'alojamiento en hoteles', 1, '2022-04-27 17:08:18'),
('SCA0000008', 'CAT000004', 'Tours', 'paquetes de turismo', 1, '2022-04-27 17:08:18'),
('SCA0000009', 'CAT000004', 'City Tours', 'TOURS DE CIUDADES', 1, '2022-10-21 15:21:07'),
('SCA0000010', 'CAT000001', 'Kayac', 'DEPORTE EXTREMO DE REMAR', 1, '2022-10-21 16:04:15');

-- --------------------------------------------------------

--
-- Table structure for table `tipo_costo`
--

CREATE TABLE `tipo_costo` (
  `id_tipo_costo` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `descripcion` varchar(65) NOT NULL,
  `estado` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tipo_costo`
--

INSERT INTO `tipo_costo` (`id_tipo_costo`, `nombre`, `descripcion`, `estado`) VALUES
(1, 'Por personas', 'precio individual por cada persona', 1),
(2, 'Por paquete', 'precio de un paquete completo', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tipo_disponibilidad`
--

CREATE TABLE `tipo_disponibilidad` (
  `id_tipo_dispon` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tipo_disponibilidad`
--

INSERT INTO `tipo_disponibilidad` (`id_tipo_dispon`, `nombre`, `descripcion`, `estado`) VALUES
(1, 'Todo los dias', 'Todo los dias del año', 1),
(2, 'Solo Dias de semana', 'solo los 5 dias de la semana', 1),
(3, 'Solo Fines de semana', 'solo sabado y domingo', 1),
(4, 'Solo Feriados', 'segun calendario', 1),
(5, 'Personalizado', 'Personalizar fechas disponibles segun lo requiera', 1);

-- --------------------------------------------------------

--
-- Table structure for table `transacciones`
--

CREATE TABLE `transacciones` (
  `cod_transaccion` varchar(200) NOT NULL,
  `cod_reservacion` varchar(41) NOT NULL,
  `id_medio_pago` int(11) NOT NULL,
  `tipo_moneda` int(11) NOT NULL,
  `monto` decimal(10,0) NOT NULL,
  `estado` int(11) NOT NULL,
  `fecha_reg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transacciones`
--

INSERT INTO `transacciones` (`cod_transaccion`, `cod_reservacion`, `id_medio_pago`, `tipo_moneda`, `monto`, `estado`, `fecha_reg`) VALUES
('vxy184414544962459391378361857729624077', 'RE014709875974647692661507201560200388', 1, 1, '120', 1, '2022-06-01 20:35:15'),
('vxy432457285127277901221635057888725677', 'RE014709875974647692661507201560200388', 1, 1, '120', 1, '2022-06-01 20:34:55'),
('vxy511140005153944481800867505774731722', 'RE014709875974647692661507201560200388', 1, 1, '120', 1, '2022-06-01 20:29:17'),
('vxy538301907424748213626592592087105955', 'RE014709875974647692661507201560200388', 1, 1, '120', 1, '2022-06-01 20:35:58');

-- --------------------------------------------------------

--
-- Table structure for table `user_admin`
--

CREATE TABLE `user_admin` (
  `cod_user` varchar(15) NOT NULL,
  `nombre` varchar(65) NOT NULL,
  `apellido` varchar(65) NOT NULL,
  `run` varchar(10) NOT NULL,
  `id_cargo` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `direccion` varchar(115) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `contrasena` varchar(200) NOT NULL,
  `cod_verificacion` varchar(10) NOT NULL,
  `estado_verif` int(2) NOT NULL,
  `estado` int(11) NOT NULL,
  `fecha_update` date DEFAULT NULL,
  `fecha_reg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_admin`
--

INSERT INTO `user_admin` (`cod_user`, `nombre`, `apellido`, `run`, `id_cargo`, `email`, `direccion`, `telefono`, `contrasena`, `cod_verificacion`, `estado_verif`, `estado`, `fecha_update`, `fecha_reg`) VALUES
('ADM26776773088', 'Jorge', 'ventura', '42456783-5', 3, 'jorge@gmail.com', 'prov. virgen de fatima mza lt4 carabayllo', '+51938893056', 'bGxGeFJRdE1CK3FpLzJDTnJhUU9sdz09', '', 0, 1, '2022-07-20', '2022-04-14 04:13:17'),
('ADM90537141611', 'yedel jimn', 'alpes leandro', '1234567891', 1, 'yedeljim@gmail.com', 'prov. virgen de fatima mz. a lt.4 - carabayllo', 'yedeljim@gmail.', 'bGxGeFJRdE1CK3FpLzJDTnJhUU9sdz09', '', 0, 1, NULL, '2022-04-08 23:06:22');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `cod_usuario` varchar(15) NOT NULL,
  `tipo_usurio` int(2) NOT NULL DEFAULT '1',
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `run` varchar(10) NOT NULL,
  `id_region` int(11) DEFAULT NULL,
  `id_provincia` int(11) DEFAULT NULL,
  `id_comuna` int(11) DEFAULT NULL,
  `direccion` varchar(115) DEFAULT NULL,
  `telefono` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contrasena` varchar(200) DEFAULT NULL,
  `politica` int(11) DEFAULT NULL,
  `cod_verificacion` varchar(10) NOT NULL,
  `estado_verif` int(2) NOT NULL,
  `estado` int(11) NOT NULL,
  `fecha_reg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`cod_usuario`, `tipo_usurio`, `nombre`, `apellido`, `run`, `id_region`, `id_provincia`, `id_comuna`, `direccion`, `telefono`, `email`, `contrasena`, `politica`, `cod_verificacion`, `estado_verif`, `estado`, `fecha_reg`) VALUES
('US57558716511', 1, 'tomy', 'aton ton', '23450089-2', NULL, NULL, NULL, 'prov. virgen de fatima mza lt4 carabayllo', '984563789', 'tomy@gmail.com', 'bGxGeFJRdE1CK3FpLzJDTnJhUU9sdz09', 1, '', 0, 5, '2022-06-01 22:46:41'),
('US67208600822', 1, 'yedel jimn', 'alpes leandro', '1234567890', 0, 0, 0, 'prov. virgen de fatima mz. a lt.4 - carabayllo', '+51938893095', 'yedeljim@gmail.com', 'bGxGeFJRdE1CK3FpLzJDTnJhUU9sdz09', 1, '', 0, 1, '2022-04-06 22:09:59'),
('US91404313699', 2, 'yedel jimn', 'alpes leandro', '12345678', 2, 3, 6, NULL, '938893095', 'yedeljim@gmail.com', NULL, NULL, '', 0, 1, '2022-06-01 15:38:20'),
('US94570246611', 1, 'victor', 'martines', '23456789-2', 0, 0, 0, 'prov. virgen de fatima mza lt4 carabayllo', '+5193856778', 'victor@gmail.com', 'bGxGeFJRdE1CK3FpLzJDTnJhUU9sdz09', 1, '', 0, 5, '2022-04-14 02:52:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bitacora`
--
ALTER TABLE `bitacora`
  ADD PRIMARY KEY (`id_bitacora`);

--
-- Indexes for table `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`id_cargo`);

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`cod_categoria`);

--
-- Indexes for table `cesta`
--
ALTER TABLE `cesta`
  ADD PRIMARY KEY (`cod_cesta`);

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`cod_cliente`);

--
-- Indexes for table `comunas`
--
ALTER TABLE `comunas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `descuento_servicio`
--
ALTER TABLE `descuento_servicio`
  ADD PRIMARY KEY (`cod_descuento`);

--
-- Indexes for table `destinos`
--
ALTER TABLE `destinos`
  ADD PRIMARY KEY (`cod_destino`);

--
-- Indexes for table `detalles_servicio`
--
ALTER TABLE `detalles_servicio`
  ADD PRIMARY KEY (`cod_detalla_servic`);

--
-- Indexes for table `detalle_clientes`
--
ALTER TABLE `detalle_clientes`
  ADD PRIMARY KEY (`id_detalle_cliente`);

--
-- Indexes for table `detalle_costo`
--
ALTER TABLE `detalle_costo`
  ADD PRIMARY KEY (`cod_detalle_costo`);

--
-- Indexes for table `detalle_reservacion`
--
ALTER TABLE `detalle_reservacion`
  ADD PRIMARY KEY (`id_detalle_reserva`);

--
-- Indexes for table `disponibilidad_servicio`
--
ALTER TABLE `disponibilidad_servicio`
  ADD PRIMARY KEY (`id_disponibilidad`);

--
-- Indexes for table `excluye_serv`
--
ALTER TABLE `excluye_serv`
  ADD PRIMARY KEY (`cod_excluye`);

--
-- Indexes for table `faq_servicio`
--
ALTER TABLE `faq_servicio`
  ADD PRIMARY KEY (`cod_faq`);

--
-- Indexes for table `galeria_servicios`
--
ALTER TABLE `galeria_servicios`
  ADD PRIMARY KEY (`cod_galeria`);

--
-- Indexes for table `geolocalizacion`
--
ALTER TABLE `geolocalizacion`
  ADD PRIMARY KEY (`cod_localizacion`);

--
-- Indexes for table `geo_servicios`
--
ALTER TABLE `geo_servicios`
  ADD PRIMARY KEY (`cod_geo`);

--
-- Indexes for table `idiomas`
--
ALTER TABLE `idiomas`
  ADD PRIMARY KEY (`id_idioma`);

--
-- Indexes for table `incluye_serv`
--
ALTER TABLE `incluye_serv`
  ADD PRIMARY KEY (`cod_incluye`);

--
-- Indexes for table `itinerario_servicio`
--
ALTER TABLE `itinerario_servicio`
  ADD PRIMARY KEY (`cod_itinerario`);

--
-- Indexes for table `medida_duracion`
--
ALTER TABLE `medida_duracion`
  ADD PRIMARY KEY (`id_medida`);

--
-- Indexes for table `provincias`
--
ALTER TABLE `provincias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `redes_cliente`
--
ALTER TABLE `redes_cliente`
  ADD PRIMARY KEY (`cod_redes`);

--
-- Indexes for table `regiones`
--
ALTER TABLE `regiones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservaciones`
--
ALTER TABLE `reservaciones`
  ADD PRIMARY KEY (`cod_reservacion`);

--
-- Indexes for table `restricciones_servicios`
--
ALTER TABLE `restricciones_servicios`
  ADD PRIMARY KEY (`cod_restriccion`);

--
-- Indexes for table `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`cod_servicio`);

--
-- Indexes for table `sub_categorias`
--
ALTER TABLE `sub_categorias`
  ADD PRIMARY KEY (`cod_sub_cate`);

--
-- Indexes for table `tipo_costo`
--
ALTER TABLE `tipo_costo`
  ADD PRIMARY KEY (`id_tipo_costo`);

--
-- Indexes for table `tipo_disponibilidad`
--
ALTER TABLE `tipo_disponibilidad`
  ADD PRIMARY KEY (`id_tipo_dispon`);

--
-- Indexes for table `transacciones`
--
ALTER TABLE `transacciones`
  ADD PRIMARY KEY (`cod_transaccion`);

--
-- Indexes for table `user_admin`
--
ALTER TABLE `user_admin`
  ADD PRIMARY KEY (`cod_user`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`cod_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bitacora`
--
ALTER TABLE `bitacora`
  MODIFY `id_bitacora` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `cargo`
--
ALTER TABLE `cargo`
  MODIFY `id_cargo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cesta`
--
ALTER TABLE `cesta`
  MODIFY `cod_cesta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `comunas`
--
ALTER TABLE `comunas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=348;

--
-- AUTO_INCREMENT for table `descuento_servicio`
--
ALTER TABLE `descuento_servicio`
  MODIFY `cod_descuento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `destinos`
--
ALTER TABLE `destinos`
  MODIFY `cod_destino` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `detalle_clientes`
--
ALTER TABLE `detalle_clientes`
  MODIFY `id_detalle_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `detalle_costo`
--
ALTER TABLE `detalle_costo`
  MODIFY `cod_detalle_costo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `detalle_reservacion`
--
ALTER TABLE `detalle_reservacion`
  MODIFY `id_detalle_reserva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `disponibilidad_servicio`
--
ALTER TABLE `disponibilidad_servicio`
  MODIFY `id_disponibilidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `excluye_serv`
--
ALTER TABLE `excluye_serv`
  MODIFY `cod_excluye` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `faq_servicio`
--
ALTER TABLE `faq_servicio`
  MODIFY `cod_faq` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galeria_servicios`
--
ALTER TABLE `galeria_servicios`
  MODIFY `cod_galeria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `idiomas`
--
ALTER TABLE `idiomas`
  MODIFY `id_idioma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `incluye_serv`
--
ALTER TABLE `incluye_serv`
  MODIFY `cod_incluye` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `itinerario_servicio`
--
ALTER TABLE `itinerario_servicio`
  MODIFY `cod_itinerario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `medida_duracion`
--
ALTER TABLE `medida_duracion`
  MODIFY `id_medida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `provincias`
--
ALTER TABLE `provincias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `redes_cliente`
--
ALTER TABLE `redes_cliente`
  MODIFY `cod_redes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `regiones`
--
ALTER TABLE `regiones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tipo_costo`
--
ALTER TABLE `tipo_costo`
  MODIFY `id_tipo_costo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tipo_disponibilidad`
--
ALTER TABLE `tipo_disponibilidad`
  MODIFY `id_tipo_dispon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;


