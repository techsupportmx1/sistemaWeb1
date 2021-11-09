-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-03-2017 a las 10:39:17
-- Versión del servidor: 10.0.17-MariaDB
-- Versión de PHP: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo_de_computo`
--

CREATE TABLE `equipo_de_computo` (
  `id` int(100) NOT NULL,
  `sistema_operativo` varchar(25) NOT NULL,
  `marca` varchar(30) NOT NULL,
  `modelo` varchar(30) NOT NULL,
  `num_equipo` int(20) NOT NULL,
  `procesador` varchar(40) NOT NULL,
  `serial_teclado` varchar(60) NOT NULL,
  `marca_mouse` varchar(50) NOT NULL,
  `cantidad_ram` varchar(55) NOT NULL,
  `num_serie_monitor` varchar(50) NOT NULL,
  `estado` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `equipo_de_computo`
--

INSERT INTO `equipo_de_computo` (`id`, `sistema_operativo`, `marca`, `modelo`, `num_equipo`, `procesador`, `serial_teclado`, `marca_mouse`, `cantidad_ram`, `num_serie_monitor`, `estado`) VALUES
(1, 'WINDOWS 8.1', 'Acer', 'V206HQL ', 1, 'Intel CORE TM i3-4150', 'MMLY6AM0015030684C8504', 'ACER', '6.00 GB', 'MMLY6AM0015030684C8504', 'Bueno'),
(2, 'WINDOWS 8.1', 'Acer', 'AXC-605-MO21', 2, 'INTEL COREL I3-4150', 'MMLY6AM001503068568504', 'ACER', '6.00 GB', 'MMLY6AM001503068568504', 'Bueno'),
(3, 'Windows 8.1', 'Acer', 'AXC-605-MO21', 3, 'INTEL COREL I3-4150', 'MMLY6AM001503068518504', 'Acer', '6.00GB', 'MMLY6AM001503068518504', 'Bueno'),
(4, 'Windows 8.1', 'Acer', 'AXC-605-MO21', 4, 'INTEL COREL I3-4150', 'MMLY6AM001503068518504', 'Acer', '6.00GB', 'MMLY6AM001503068518504', 'Bueno'),
(5, 'Windows 8.1', 'Acer', 'AXC-605-MO21', 5, 'INTEL COREL I3-4150', 'DTSRPAL0205020134D3000', 'Acer', '6.00GB', 'DTSRPAL0205020134D3000', 'Buenas condiciones'),
(6, 'Windows 8.1', 'Acer', 'AXC-605-MO21', 6, 'INTEL COREL I3-4150', 'MMLY6AM001503068518504', 'Acer', '6.00GB', 'DTSRPAL0205020134D3000', 'Buenas condicicones'),
(7, 'Windows 8.1', 'Acer', 'AXC-605-MO21', 7, 'INTEL COREL I3-4150', 'MMLY6AM001503068518504', 'Acer', '6.00GB', 'DTSRPAL0205020134D3000', 'Buenas condiciones'),
(8, 'Windows 8.1', 'Acer', 'AXC-605-MO21', 8, 'INTEL COREL I3-4150', 'MMLY6AM001503068518504', 'Acer', '6.00GB', 'DTSRPAL0205020134D3000', 'Buenas condiciones'),
(9, 'Windows 8.1', 'Acer', 'AXC-605-MO21', 9, 'INTEL COREL I3-4150', 'MMLY6AM001503068518504', 'Acer', '6.00GB', 'DTSRPAL0205020134D3000', 'Buenas condiciones'),
(10, 'Windows 8.1', 'Acer', 'AXC-605-MO21', 10, 'INTEL COREL I3-4150', 'MMLY6AM001503068518504', 'Acer', '6.00GB', 'DTSRPAL0205020134D3000', 'Buenas condiciones'),
(11, 'Windows 8.1', 'Acer', 'AXC-605-MO21', 11, 'INTEL COREL I3-4150', 'MMLY6AM001503068518504', 'Acer', '6.00GB', 'DTSRPAL0205020134D3000', 'Buenas condiciones'),
(12, 'Windows 8.1', 'Acer', 'AXC-605-MO21', 12, 'INTEL COREL I3-4150', 'MMLY6AM001503068518504', 'Acer', '6.00GB', 'DTSRPAL0205020134D3000', 'Buenas condiciones'),
(13, 'Windows 8.1', 'Acer', 'AXC-605-MO21', 13, 'INTEL COREL I3-4150', 'MMLY6AM001503068518504', 'Acer', '6.00GB', 'DTSRPAL0205020134D3000', 'Buenas condicones'),
(14, 'Windows 8.1', 'Acer', 'AXC-605-MO21', 14, 'INTEL COREL I3-4150', 'MMLY6AM001503068518504', 'Acer', '6.00GB', 'DTSRPAL0205020134D3000', 'Buenas condiciones'),
(15, 'Windows 8.1', 'Acer', 'AXC-605-MO21', 15, 'INTEL COREL I3-4150', 'MMLY6AM001503068518504', 'Acer', '6.00GB', 'DTSRPAL0205020134D3000', 'Buenas condiciones'),
(16, 'Windows 8.1', 'Acer', 'AXC-605-MO21', 16, 'INTEL COREL I3-4150', 'MMLY6AM001503068518504', 'Acer', '6.00GB', 'DTSRPAL0205020134D3000', 'Buenas condiciones'),
(17, 'Windows 8.1', 'Acer', 'AXC-605-MO21', 17, 'INTEL COREL I3-4150', 'MMLY6AM001503068518504', 'Acer', '6.00GB', 'DTSRPAL0205020134D3000', 'Buenas condiciones'),
(18, 'Windows 8.1', 'Acer', 'AXC-605-MO21', 18, 'INTEL COREL I3-4150', 'MMLY6AM001503068518504', 'Acer', '6.00GB', 'DTSRPAL0205020134D3000', 'Buenas condiciones'),
(19, 'Windows 8.1', 'Acer', 'AXC-605-MO21', 19, 'INTEL COREL I3-4150', 'MMLY6AM001503068518504', 'Acer', '6.00GB', 'DTSRPAL0205020134D3000', 'Buenas condiciones'),
(20, 'Windows 8.1', 'Acer', 'AXC-605-MO21', 20, 'INTEL COREL I3-4150', 'MMLY6AM001503068518504', 'Acer', '6.00GB', 'DTSRPAL0205020134D3000', 'Buenas condiciones'),
(21, 'Windows 8.1', 'Acer', 'AXC-605-MO21', 21, 'INTEL COREL I3-4150', 'MMLY6AM001503068518504', 'Acer', '6.00GB', 'DTSRPAL0205020134D3000', 'Buenas condiciones'),
(22, 'Windows 8.1', 'Acer', 'AXC-605-MO21', 22, 'INTEL COREL I3-4150', 'MMLY6AM001503068518504', 'Acer', '6.00GB', 'DTSRPAL0205020134D3000', 'Buneas condiciones'),
(23, 'Windows 8.1', 'Acer', 'AXC-605-MO21', 23, 'INTEL COREL I3-4150', 'MMLY6AM001503068518504', 'Acer', '6.00GB', 'DTSRPAL0205020134D3000', 'Buenas condiciones'),
(24, 'Windows 8.1', 'Acer', 'AXC-605-MO21', 24, 'INTEL COREL I3-4150', 'MMLY6AM001503068518504', 'Acer', '6.00GB', 'MMLY6AM001503068518504', 'Buenas condiciones'),
(25, 'Windows 8.1', 'Acer', 'AXC-605-MO21', 25, 'INTEL COREL I3-4150', 'MMLY6AM001503068518504', 'Acer', '6.00GB', 'DTSRPAL0205020134D3000', 'Buenas condiciones'),
(26, 'Windows 8.1', 'Acer', 'AXC-605-MO21', 26, 'INTEL COREL I3-4150', 'MMLY6AM001503068518504', 'Acer', '6.00GB', 'MMLY6AM001503068518504', 'Buenas condiciones'),
(27, 'Windows 8.1', 'Acer', 'AXC-605-MO21', 27, 'INTEL COREL I3-4150', 'MMLY6AM001503068518504', 'Acer', '6.00GB', 'DTSRPAL0205020134D3000', 'Buenas condicones'),
(28, 'Windows 8.1', 'Acer', 'AXC-605-MO21', 28, 'INTEL COREL I3-4150', 'MMLY6AM001503068518504', 'Acer', '6.00GB', 'DTSRPAL0205020134D3000', 'Buenas condicones'),
(29, 'Windows 8.1', 'Acer', 'AXC-605-MO21', 29, 'INTEL COREL I3-4150', 'MMLY6AM001503068518504', 'Acer', '6.00GB', 'DTSRPAL0205020134D3000', 'Buenas condiciones'),
(30, 'Windows 8.1', 'Acer', 'AXC-605-MO21', 30, 'INTEL COREL I3-4150', 'MMLY6AM001503068518504', 'Acer', '6.00GB', 'DTSRPAL0205020134D3000', 'Buenas condiciones'),
(31, 'Windows 8.1', 'Acer', 'AXC-605-MO21', 31, 'INTEL COREL I3-4150', 'MMLY6AM001503068518504', 'Acer', '6.00GB', 'DTSRPAL0205020134D3000', 'Buenas condiciones'),
(32, 'Windows 8.1', 'Acer', 'AXC-605-MO21', 32, 'INTEL COREL I3-4150', 'MMLY6AM001503068518504', 'Acer', '6.00GB', 'DTSRPAL0205020134D3000', 'Buenas condiciones'),
(33, 'Windows 8.1', 'Acer', 'AXC-605-MO21', 33, 'INTEL COREL I3-4150', 'MMLY6AM001503068518504', 'Acer', '6.00GB', 'DTSRPAL0205020134D3000', 'Buenas condiciones'),
(34, 'Windows 8.1', 'Acer', 'AXC-605-MO21', 34, 'INTEL COREL I3-4150', 'MMLY6AM001503068518504', 'Acer', '6.00GB', 'DTSRPAL0205020134D3000', 'Buenas condiciones'),
(35, 'Windows 8.1', 'Acer', 'AXC-605-MO21', 35, 'INTEL COREL I3-4150', 'MMLY6AM001503068518504', 'Acer', '6.00GB', 'DTSRPAL0205020134D3000', 'Buenas condiciones'),
(36, '1', '', '', 1, '', '', '', '', '', ''),
(37, '2', '2', '2', 2, '', '', '', '', '', ''),
(38, '5', '5', '5', 5, '5', '5', '5', '5', '5', '5'),
(39, 'windows 8.1', 'acer', 'AXC-605-MO21', 39, 'Intel core i3', 'MMLY6AM0015030684504', 'MMLY6AM0015030684504', '6.00 GB', 'DTSRPAL02050201FC3000', 'Buenas condiciones'),
(40, 'windows 8.1', 'acer', 'AXC-605-MO21', 40, 'Intel core i3', 'MMLY6AM0015030684504', 'ACER', '6.00 GB', 'DTSRPAL02050201FC3000', 'Buenas condiciones');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mantenimiento`
--

CREATE TABLE `mantenimiento` (
  `id` int(255) NOT NULL,
  `num_equipo` int(255) NOT NULL,
  `fecha_mantenimiento` varchar(30) NOT NULL,
  `nombre_del_responsable` varchar(50) NOT NULL,
  `tipo_mantenimiento` varchar(40) NOT NULL,
  `observaciones` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `mantenimiento`
--

INSERT INTO `mantenimiento` (`id`, `num_equipo`, `fecha_mantenimiento`, `nombre_del_responsable`, `tipo_mantenimiento`, `observaciones`) VALUES
(1, 20, '08/nov/2017', 'Ing. Octavio Martinez Escamilla', 'correctivo', 'falta de disco duro'),
(2, 15, '16/enero/2017', 'Ing. Octavio Martinez Escamilla', 'correctivo', 'falla tarjeta madre'),
(3, 32, '16/enero/2017', 'Ing. Octavio Martinez Escamilla', 'correctivo', 'fallos en la pantalla'),
(4, 33, '16/enero/2017', 'Ing.Octavio Martinez Escamilla', 'correctivo', 'fallos en la pantalla'),
(5, 16, '16/enero/2017', 'Ing. Octavio Martinez Escamilla', 'correctivo', 'falla la tarjeta de video');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reporte`
--

CREATE TABLE `reporte` (
  `id_reporte` int(100) NOT NULL,
  `tipo_preventivo_o_correctivo` varchar(50) NOT NULL,
  `num_equipo` int(100) NOT NULL,
  `fecha_reporte` varchar(50) NOT NULL,
  `observaciones` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(100) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `apellido paterno` varchar(30) NOT NULL,
  `apellido materno` varchar(30) NOT NULL,
  `cargo` varchar(30) NOT NULL,
  `departamento_pertenece` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`, `password`, `nombre`, `apellido paterno`, `apellido materno`, `cargo`, `departamento_pertenece`) VALUES
(0, 'mariela', 'marielaperez', '', '', '', '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `equipo_de_computo`
--
ALTER TABLE `equipo_de_computo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mantenimiento`
--
ALTER TABLE `mantenimiento`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `equipo_de_computo`
--
ALTER TABLE `equipo_de_computo`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT de la tabla `mantenimiento`
--
ALTER TABLE `mantenimiento`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
