-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-08-2016 a las 20:47:40
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sw`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `rutCliente` varchar(10) NOT NULL,
  `nombreCliente` varchar(100) NOT NULL,
  `apellidoCliente` varchar(100) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `estado` int(11) NOT NULL,
  `creado` varchar(10) DEFAULT NULL,
  `modificado` varchar(10) DEFAULT NULL,
  `eliminado` varchar(10) DEFAULT NULL,
  `fechaCreacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fechaModificado` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `fechaEliminado` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`rutCliente`, `nombreCliente`, `apellidoCliente`, `direccion`, `telefono`, `email`, `estado`, `creado`, `modificado`, `eliminado`, `fechaCreacion`, `fechaModificado`, `fechaEliminado`) VALUES
('17186568-9', 'marta', 'mella', '18 1/2 sur A', '978120330', 'martii_mvi@hotmail.com', 1, '9819875-k', NULL, NULL, '2016-08-30 18:30:24', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('17495428-3', 'daniela', 'vasquez', '19 oriente #161', '789865432', 'danii@hotmail.com', 1, '9819875-k', NULL, NULL, '2016-08-30 21:32:03', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('8691808-0', 'marco', 'toranzo', '1 sur 201', '67898765', 'marcotoranzo@hotmail.com', 1, '9819875-k', NULL, NULL, '2016-08-30 23:25:13', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('9739803-8', 'veronica', 'villalobos', '18 1/2 sur 17 1/2 pte #61', '990921387', 'veronica.villalobos@hotmail.com', 1, '9819875-k', NULL, NULL, '2016-08-30 19:08:06', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultas`
--

CREATE TABLE `consultas` (
  `idConsulta` int(11) NOT NULL,
  `rutDueno` varchar(10) NOT NULL,
  `idPaciente` int(11) NOT NULL,
  `fechaAtencion` date NOT NULL,
  `tipoConsulta` varchar(20) NOT NULL,
  `peso` varchar(10) DEFAULT NULL,
  `temperatura` varchar(10) DEFAULT NULL,
  `estatura` varchar(10) DEFAULT NULL,
  `alimentacion` varchar(100) DEFAULT NULL,
  `vacunas` varchar(100) DEFAULT NULL,
  `antiparacitarios` varchar(100) DEFAULT NULL,
  `observaciones` varchar(2000) DEFAULT NULL,
  `creado` varchar(10) DEFAULT NULL,
  `modificado` varchar(10) DEFAULT NULL,
  `eliminado` varchar(10) DEFAULT NULL,
  `fechaCreacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fechaModificado` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `fechaEliminado` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `fechaConsulta` date NOT NULL,
  `valorReferencial` varchar(10) NOT NULL,
  `medicamentos` varchar(100) NOT NULL,
  `procedimientos` varchar(100) NOT NULL,
  `diagnosticos` varchar(100) NOT NULL,
  `receta` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `consultas`
--

INSERT INTO `consultas` (`idConsulta`, `rutDueno`, `idPaciente`, `fechaAtencion`, `tipoConsulta`, `peso`, `temperatura`, `estatura`, `alimentacion`, `vacunas`, `antiparacitarios`, `observaciones`, `creado`, `modificado`, `eliminado`, `fechaCreacion`, `fechaModificado`, `fechaEliminado`, `fechaConsulta`, `valorReferencial`, `medicamentos`, `procedimientos`, `diagnosticos`, `receta`) VALUES
(2, '9739803-8', 12, '0000-00-00', 'regular', '12', '70', '40', 'Royal canin', 'Parvovirus<br/>Octuple<br/>Polivalente', 'Flovovermic', '', '9819875-k', NULL, NULL, '2016-08-30 19:16:16', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2016-08-30', '15000', 'Vitaminas', 'Revision General', 'Otitis Aguda', ''),
(3, '9739803-8', 13, '0000-00-00', 'regular', '36', '37', '75', 'Pedigree Adulto', 'Polivalente<br/>Octuple', 'Effitix', '', '9819875-k', NULL, NULL, '2016-08-30 19:24:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2016-08-30', '', '', 'vacunacion', '', ''),
(4, '9739803-8', 13, '0000-00-00', 'regular', '15', '38', '47', 'Comida de Pokemon', 'Octuple', 'Effitix', '', '9819875-k', NULL, NULL, '2016-08-30 19:52:11', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2016-08-30', '15000', '', 'Vacunacion<br/> Desparasitacion', 'Desnutricion leve', 'Vitaminas VitaminDog\r\n1 comprimido diario por 3 meses\r\n\r\nKetoprofeno\r\n1 comprimido c/8 horas'),
(6, '17495428-3', 14, '0000-00-00', 'regular', '6', '39', '30', 'Purina Dog Chow', 'antirrabica<br/>octuple', 'antiparax ', '', '9819875-k', NULL, NULL, '2016-08-30 21:39:25', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2016-08-30', '50000', 'amoxicilina', 'limpiesa quirurgica', 'Inflamación de las glándulas salibales', 'cloxacilina en jarabe\r\n5 ml cada 6 horas x 7 dias\r\n\r\nKetoprofeno\r\n5 mg cada 8 horas x 7 dias'),
(7, '17495428-3', 15, '0000-00-00', 'regular', '4.5', '37', '30', 'Master Dog', 'antirrabica<br/>octuple<br/>polivalente', 'antiparax ', 'Ligeramente bajo de peso. Por lo que se administraran vitaminas.', '9819875-k', NULL, NULL, '2016-08-30 21:54:10', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2016-08-30', '20000', 'Vitaminas Inyectables', 'Revision General', 'Desnutricion Leve', 'Calcio Vit D3\r\n1 comprimido diario a permanencia\r\n\r\nVitaminas complejo B\r\n1 comprimido diario por un mes'),
(8, '17495428-3', 16, '0000-00-00', 'regular', '2', '38', '30', 'cat chow gatitos', 'leucemia<br/>triple<br/>pif', 'Invermic', 'El paciente se encuentra en perfecto estado y saludable.', '9819875-k', NULL, NULL, '2016-08-30 22:00:13', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2016-08-30', '12000', '', 'Revision General', 'El paciente se encuentra en perfecto estado y saludable.', 'Vitaminas\r\n1 comprimido diario por tres meses'),
(9, '17495428-3', 16, '0000-00-00', 'regular', '2', '39', '30', 'Royal Canin', 'Triple vírica<br/>Rabia<br/>PIF', 'Parasital', 'Presencia de descamación y costras en patas y cola.', '9819875-k', NULL, NULL, '2016-08-30 22:08:10', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2016-08-30', '25000', 'Itrafungol', 'Revision Completa', 'Dermatofitosis (Tiña)', 'Itrafungol\r\nsemana por medio'),
(10, '17495428-3', 14, '0000-00-00', 'regular', '', '', '', '', '', '', '', '9819875-k', NULL, NULL, '2016-08-30 22:18:52', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2016-08-30', '$$1000', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `id` int(11) NOT NULL,
  `rutDueno` varchar(10) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `especie` varchar(50) NOT NULL,
  `idRaza` int(11) NOT NULL,
  `sexo` varchar(6) NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `estado` int(11) NOT NULL,
  `creado` varchar(10) DEFAULT NULL,
  `modificado` varchar(10) DEFAULT NULL,
  `eliminado` varchar(10) DEFAULT NULL,
  `fechaCreacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fechaModificado` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `fechaEliminado` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`id`, `rutDueno`, `nombre`, `especie`, `idRaza`, `sexo`, `fechaNacimiento`, `estado`, `creado`, `modificado`, `eliminado`, `fechaCreacion`, `fechaModificado`, `fechaEliminado`) VALUES
(12, '9739803-8', 'calabasita', 'Felino', 11, 'Hembra', '2010-01-27', 1, '9819875-k', NULL, NULL, '2016-08-30 19:08:39', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, '9739803-8', 'vulpix', 'Canino', 3, 'Hembra', '2015-06-03', 1, '9819875-k', NULL, NULL, '2016-08-30 19:19:47', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, '17495428-3', 'stich', 'Canino', 16, 'Macho', '2010-06-16', 1, '9819875-k', NULL, NULL, '2016-08-30 21:32:38', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, '17495428-3', 'lilo', 'Canino', 16, 'Hembra', '2014-05-06', 1, '9819875-k', NULL, NULL, '2016-08-30 21:33:03', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, '17495428-3', 'dina', 'Felino', 12, 'Hembra', '2010-01-27', 1, '9819875-k', NULL, NULL, '2016-08-30 21:33:33', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, '8691808-0', 'shasan', 'Canino', 13, 'Macho', '2010-02-17', 1, '9819875-k', NULL, NULL, '2016-08-30 23:26:13', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `razas`
--

CREATE TABLE `razas` (
  `idRaza` int(11) NOT NULL,
  `raza` varchar(30) DEFAULT NULL,
  `tipo` varchar(1) DEFAULT NULL,
  `creado` varchar(10) DEFAULT NULL,
  `modificado` varchar(10) DEFAULT NULL,
  `eliminado` varchar(10) DEFAULT NULL,
  `fechaCreacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fechaModificado` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `fechaEliminado` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `razas`
--

INSERT INTO `razas` (`idRaza`, `raza`, `tipo`, `creado`, `modificado`, `eliminado`, `fechaCreacion`, `fechaModificado`, `fechaEliminado`) VALUES
(2, 'Beagle', 'C', NULL, NULL, NULL, '2016-08-30 13:27:27', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Border Collie', 'C', NULL, NULL, NULL, '2016-08-30 13:33:32', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Fox Terrier', 'C', NULL, NULL, NULL, '2016-08-30 12:59:21', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'maine coon', 'F', NULL, NULL, NULL, '2016-08-30 13:28:43', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'siamés', 'F', NULL, NULL, NULL, '2016-08-30 13:29:04', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'Pastor AlemanX', 'F', NULL, NULL, NULL, '2016-08-30 18:42:18', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'ABISINIO', 'F', NULL, NULL, NULL, '2016-08-30 13:33:15', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'PASTOR BELGA', 'C', NULL, NULL, NULL, '2016-08-30 13:34:16', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'maltés', 'C', NULL, NULL, NULL, '2016-08-30 15:15:26', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'bulldog', 'C', NULL, NULL, NULL, '2016-08-30 15:15:36', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'husky', 'C', NULL, NULL, NULL, '2016-08-30 15:15:46', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'Angora', 'F', NULL, NULL, NULL, '2016-08-30 18:42:36', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `rut` varchar(10) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `contrasena` varchar(20) NOT NULL,
  `estado` int(11) NOT NULL,
  `administrador` int(11) NOT NULL,
  `creado` varchar(10) DEFAULT NULL,
  `modificado` varchar(10) DEFAULT NULL,
  `eliminado` varchar(10) DEFAULT NULL,
  `fechaCreado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fechaModificado` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `fechaEliminado` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `res` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`rut`, `nombre`, `apellido`, `contrasena`, `estado`, `administrador`, `creado`, `modificado`, `eliminado`, `fechaCreado`, `fechaModificado`, `fechaEliminado`, `res`) VALUES
('17186568-9', 'Marta Veronica', 'Mella Villalobos', '123', 1, 0, 'admin', 'admin', NULL, '2016-08-30 15:25:08', '2016-08-30 20:25:08', '0000-00-00 00:00:00', ''),
('8691808-0', 'marco', 'toranzo', '123', 1, 0, 'admin', NULL, NULL, '2016-08-30 23:43:48', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
('9819875-k', 'Arhel', 'Muñoz Menares', '123', 1, 0, 'admin', NULL, NULL, '2016-08-30 10:42:40', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'R.C.M.V.:3844'),
('admin', 'Administrador', '', '1234', 1, 1, 'admin', NULL, NULL, '2016-08-30 07:20:39', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`rutCliente`);

--
-- Indices de la tabla `consultas`
--
ALTER TABLE `consultas`
  ADD PRIMARY KEY (`idConsulta`),
  ADD KEY `fk_dueno` (`rutDueno`),
  ADD KEY `fk_paciente` (`idPaciente`),
  ADD KEY `fk_usuario` (`creado`);

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pacienteCliente` (`rutDueno`),
  ADD KEY `fk_raza` (`idRaza`);

--
-- Indices de la tabla `razas`
--
ALTER TABLE `razas`
  ADD PRIMARY KEY (`idRaza`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`rut`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `consultas`
--
ALTER TABLE `consultas`
  MODIFY `idConsulta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `razas`
--
ALTER TABLE `razas`
  MODIFY `idRaza` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `consultas`
--
ALTER TABLE `consultas`
  ADD CONSTRAINT `fk_dueno` FOREIGN KEY (`rutDueno`) REFERENCES `clientes` (`rutCliente`),
  ADD CONSTRAINT `fk_paciente` FOREIGN KEY (`idPaciente`) REFERENCES `pacientes` (`id`),
  ADD CONSTRAINT `fk_usuario` FOREIGN KEY (`creado`) REFERENCES `usuarios` (`rut`);

--
-- Filtros para la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD CONSTRAINT `fk_pacienteCliente` FOREIGN KEY (`rutDueno`) REFERENCES `clientes` (`rutCliente`),
  ADD CONSTRAINT `fk_raza` FOREIGN KEY (`idRaza`) REFERENCES `razas` (`idRaza`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
