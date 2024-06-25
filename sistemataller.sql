-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3307
-- Tiempo de generación: 25-11-2022 a las 01:27:44
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
-- Base de datos: `sistemataller`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `ID_Cliente` int(11) NOT NULL,
  `CI_Cliente` varchar(30) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Fecha_Nac` date NOT NULL,
  `Telefono` int(11) NOT NULL,
  `Estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`ID_Cliente`, `CI_Cliente`, `Nombre`, `Apellido`, `Fecha_Nac`, `Telefono`, `Estado`) VALUES
(1, '12636269LP', 'Miguel', 'Mamani', '2001-12-21', 74032744, 1),
(3, '12345678LP', 'Juan', 'Mendoza', '2000-03-12', 87654321, 0),
(5, '47382911LP', 'Juan', 'Mendoza', '2000-05-23', 64738291, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diagnostico`
--

CREATE TABLE `diagnostico` (
  `ID_Diagnostico` int(11) NOT NULL,
  `Placa` varchar(30) NOT NULL,
  `CI_Empleado` varchar(30) NOT NULL,
  `Tipo_Reparacion` varchar(255) NOT NULL,
  `Descripcion` varchar(255) NOT NULL,
  `Fecha_Diagnostico` date NOT NULL,
  `Estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `diagnostico`
--

INSERT INTO `diagnostico` (`ID_Diagnostico`, `Placa`, `CI_Empleado`, `Tipo_Reparacion`, `Descripcion`, `Fecha_Diagnostico`, `Estado`) VALUES
(1, 'UTF830', '3482019LP', 'Mantenimiento', 'Cambio de Pastillas de freno', '2021-01-21', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `ID_Empleado` int(11) NOT NULL,
  `CI_Empleado` varchar(30) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Profesion` varchar(50) NOT NULL,
  `Fecha_Nac` date NOT NULL,
  `Estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`ID_Empleado`, `CI_Empleado`, `Nombre`, `Apellido`, `Profesion`, `Fecha_Nac`, `Estado`) VALUES
(1, '3482019LP', 'William Omar', 'Torrez', 'Ingenieria Autotronica', '1997-12-21', 1),
(3, '1234567LP', 'Clemente', 'Mamani', 'Mecanica Automotriz', '1980-11-23', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entregas`
--

CREATE TABLE `entregas` (
  `ID_Entrega` int(11) NOT NULL,
  `ID_Reparacion` int(11) NOT NULL,
  `Placa` varchar(30) NOT NULL,
  `CI_Cliente` varchar(30) NOT NULL,
  `CI_Empleado` varchar(30) NOT NULL,
  `Fecha_Hora` datetime NOT NULL,
  `Estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reparaciones`
--

CREATE TABLE `reparaciones` (
  `ID_Reparacion` int(11) NOT NULL,
  `ID_Diagnostico` int(11) NOT NULL,
  `Placa` varchar(30) NOT NULL,
  `CI_Cliente` varchar(30) NOT NULL,
  `CI_Empleado` varchar(30) NOT NULL,
  `Fecha_Inicio` date NOT NULL,
  `Fecha_Fin` date NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `Descripcion` varchar(255) NOT NULL,
  `Total` double NOT NULL,
  `Estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `rol` varchar(255) NOT NULL,
  `Estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID`, `user`, `password`, `rol`, `Estado`) VALUES
(1, 'admin', '1234', 'admin', 1),
(8, 'MiguelTorrez', '1234', 'admin', 1),
(14, 'juan', 'asvb', 'user', 1),
(18, 'armin', 'asdf', 'user', 1),
(19, 'asdff', '12345', 'user', 1),
(23, 'prueba', 'asdf', 'admin', 0),
(24, 'miki', '1234', 'admin', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE `vehiculos` (
  `ID_Vehiculo` int(11) NOT NULL,
  `Placa` varchar(30) NOT NULL,
  `CI_Cliente` varchar(30) NOT NULL,
  `Marca` varchar(100) NOT NULL,
  `Modelo` varchar(100) NOT NULL,
  `Color` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `vehiculos`
--

INSERT INTO `vehiculos` (`ID_Vehiculo`, `Placa`, `CI_Cliente`, `Marca`, `Modelo`, `Color`) VALUES
(1, 'UTF830', '12636269LP', 'Toyota', 'Hilux 4x4 2011', 'Rojo'),
(3, 'XLM987', '12636269LP', 'Nissan', 'NV400 Ariya', 'Plomo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`ID_Cliente`),
  ADD UNIQUE KEY `CI_Cliente` (`CI_Cliente`);

--
-- Indices de la tabla `diagnostico`
--
ALTER TABLE `diagnostico`
  ADD PRIMARY KEY (`ID_Diagnostico`),
  ADD UNIQUE KEY `CI_Empleado` (`CI_Empleado`),
  ADD UNIQUE KEY `Placa` (`Placa`),
  ADD KEY `CI_Empleado_2` (`CI_Empleado`),
  ADD KEY `Placa_2` (`Placa`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`ID_Empleado`,`CI_Empleado`),
  ADD UNIQUE KEY `CI_Empleado` (`CI_Empleado`);

--
-- Indices de la tabla `entregas`
--
ALTER TABLE `entregas`
  ADD PRIMARY KEY (`ID_Entrega`),
  ADD KEY `ID_Reparacion` (`ID_Reparacion`);

--
-- Indices de la tabla `reparaciones`
--
ALTER TABLE `reparaciones`
  ADD PRIMARY KEY (`ID_Reparacion`),
  ADD UNIQUE KEY `ID_Diagnostico` (`ID_Diagnostico`),
  ADD UNIQUE KEY `Placa` (`Placa`),
  ADD KEY `CI_Empleado` (`CI_Empleado`),
  ADD KEY `Placa_2` (`Placa`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `user` (`user`);

--
-- Indices de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD PRIMARY KEY (`ID_Vehiculo`,`Placa`),
  ADD UNIQUE KEY `Placa` (`Placa`),
  ADD KEY `vehiculos_ibfk_1` (`CI_Cliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `ID_Cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `diagnostico`
--
ALTER TABLE `diagnostico`
  MODIFY `ID_Diagnostico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `ID_Empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `entregas`
--
ALTER TABLE `entregas`
  MODIFY `ID_Entrega` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reparaciones`
--
ALTER TABLE `reparaciones`
  MODIFY `ID_Reparacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  MODIFY `ID_Vehiculo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `diagnostico`
--
ALTER TABLE `diagnostico`
  ADD CONSTRAINT `diagnostico_ibfk_1` FOREIGN KEY (`CI_Empleado`) REFERENCES `empleado` (`CI_Empleado`),
  ADD CONSTRAINT `fk_diagnostico_vehiculo` FOREIGN KEY (`Placa`) REFERENCES `vehiculos` (`Placa`);

--
-- Filtros para la tabla `entregas`
--
ALTER TABLE `entregas`
  ADD CONSTRAINT `entregas_ibfk_1` FOREIGN KEY (`ID_Reparacion`) REFERENCES `reparaciones` (`ID_Reparacion`);

--
-- Filtros para la tabla `reparaciones`
--
ALTER TABLE `reparaciones`
  ADD CONSTRAINT `fk_reparacion_diagnostico` FOREIGN KEY (`ID_Diagnostico`) REFERENCES `diagnostico` (`ID_Diagnostico`),
  ADD CONSTRAINT `fk_reparacion_empleado` FOREIGN KEY (`CI_Empleado`) REFERENCES `empleado` (`CI_Empleado`),
  ADD CONSTRAINT `reparaciones_ibfk_1` FOREIGN KEY (`Placa`) REFERENCES `diagnostico` (`Placa`);

--
-- Filtros para la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD CONSTRAINT `vehiculos_ibfk_1` FOREIGN KEY (`CI_Cliente`) REFERENCES `clientes` (`CI_Cliente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
