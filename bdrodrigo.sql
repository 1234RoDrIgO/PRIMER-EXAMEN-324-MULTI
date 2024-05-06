-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3307
-- Tiempo de generación: 06-05-2024 a las 08:08:01
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdrodrigo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `idUsuario` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`idUsuario`) VALUES
(1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banco`
--

CREATE TABLE `banco` (
  `idBanco` int(20) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `banco`
--

INSERT INTO `banco` (`idBanco`, `nombre`) VALUES
(1, 'Banco Nacional de Bolivia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `idUsuario` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`idUsuario`) VALUES
(2),
(3),
(4),
(5),
(6),
(7),
(8),
(9),
(10),
(11),
(12),
(13);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `controla_admi_banco`
--

CREATE TABLE `controla_admi_banco` (
  `idUsuario` int(20) NOT NULL,
  `idBanco` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `controla_admi_banco`
--

INSERT INTO `controla_admi_banco` (`idUsuario`, `idBanco`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuenta`
--

CREATE TABLE `cuenta` (
  `idCuenta` int(20) NOT NULL,
  `nroCuenta` varchar(30) NOT NULL,
  `tipoCuenta` varchar(20) NOT NULL,
  `departamento` varchar(20) NOT NULL,
  `monto` int(20) NOT NULL,
  `idBanco` int(20) NOT NULL,
  `idUsuario` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cuenta`
--

INSERT INTO `cuenta` (`idCuenta`, `nroCuenta`, `tipoCuenta`, `departamento`, `monto`, `idBanco`, `idUsuario`) VALUES
(3, '100000789456', 'caja de ahorro', '01', 550, 1, 4),
(5, '100000159753', 'cuenta Corriente', '07', 900, 1, 4),
(6, '100000147258', 'cuenta Corriente', '06', 450, 1, 5),
(7, '100000439761', 'caja de ahorro', '01', 550, 1, 6),
(8, '100000183729', 'caja de ahorro', '09', 400, 1, 7),
(9, '100000444888', 'caja de ahorro', '08', 500, 1, 8),
(12, '100000444785', 'caja de ahorro', '02', 400, 1, 11),
(13, '100000784577', 'caja de ahorro', '04', 300, 1, 12),
(14, '100000412365', 'cuenta Corriente', '05', 200, 1, 13),
(15, '100000779955', 'caja de ahorro', '02', 150, 1, 2),
(16, '100000124533', 'caja de ahorro', '02', 1500, 1, 3),
(21, '100000704010', 'caja de ahorro', '02', 640, 1, 10),
(25, '100002250123', 'caja de ahorro', '09', 1500, 1, 4),
(26, '100002000123', 'DPF', '06', 150, 1, 3),
(60, '1472580014', 'DPF', '05', 140, 1, 2),
(61, '1450780000', 'DPF', '04', 500, 1, 10),
(62, '1054710000', 'cuenta corriente', '05', 1500, 1, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movimiento`
--

CREATE TABLE `movimiento` (
  `idMovimiento` int(20) NOT NULL,
  `monto` int(20) NOT NULL,
  `tipoMovimiento` varchar(20) NOT NULL,
  `fecha` date NOT NULL,
  `idCuenta` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `movimiento`
--

INSERT INTO `movimiento` (`idMovimiento`, `monto`, `tipoMovimiento`, `fecha`, `idCuenta`) VALUES
(3, 55, 'retiro', '2024-03-27', 3),
(5, 10, 'retiro', '2024-03-22', 5),
(6, 100, 'deposito', '2024-03-30', 6),
(7, 250, 'deposito', '2024-03-29', 7),
(8, 150, 'deposito', '2024-04-01', 8),
(9, 60, 'retiro', '2024-04-04', 9),
(12, 40, 'retiro', '2024-04-01', 12),
(13, 50, 'retiro', '2024-04-04', 13),
(16, 80, 'retiro', '2024-04-04', 3),
(18, 60, 'retiro', '2024-03-17', 5),
(19, 80, 'retiro', '2024-03-01', 6),
(20, 150, 'deposito', '2024-03-02', 7),
(21, 10, 'retiro', '2024-03-03', 8),
(22, 50, 'retiro', '2024-03-05', 9),
(25, 60, 'deposito', '2024-03-11', 12),
(26, 80, 'deposito', '2024-03-22', 13),
(28, 10, 'retiro', '2024-03-05', 3),
(29, 10, 'retiro', '2024-03-05', 5),
(30, 20, 'retiro', '2024-03-08', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `idUsuario` int(20) NOT NULL,
  `tipoUsuario` varchar(20) NOT NULL,
  `ci` int(20) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `paterno` varchar(30) NOT NULL,
  `materno` varchar(30) NOT NULL,
  `fnacimiento` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `contraseña` varchar(50) NOT NULL,
  `telefono` int(20) NOT NULL,
  `fCreacion` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`idUsuario`, `tipoUsuario`, `ci`, `nombre`, `paterno`, `materno`, `fnacimiento`, `email`, `contraseña`, `telefono`, `fCreacion`) VALUES
(1, 'admin', 14245439, 'Rodrigo', 'Gutierrez', 'Mamani', '2000-09-09', 'gmrodrigorgm@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 67035863, '2024-04-20 21:30:07'),
(2, 'cliente', 14245440, 'Mariela', 'Gutierrez', 'Mamani', '2000-09-09', 'gmmarielargm@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 67035863, '2024-04-20 22:18:55'),
(3, 'cliente', 45274567, 'Nicol', 'Ticona', 'Aduviri', '2003-08-10', 'nicolYa@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 78945612, '2024-04-20 22:18:55'),
(4, 'cliente', 1234778, 'Liliana', 'Cusi', 'Mamani', '2001-01-29', 'lilianaCu@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 69852147, '2024-04-20 22:18:55'),
(5, 'cliente', 947841, 'Selena', 'Gutierrez', 'Cori', '1998-08-17', 'selenaGu@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 65417812, '2024-04-20 22:18:55'),
(6, 'cliente', 15467894, 'Sol', 'Perez', 'Perez', '2005-04-14', 'solPe@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 78412365, '2024-04-20 22:18:55'),
(7, 'cliente', 9871155, 'Evo', 'Morales', 'Ayma', '1994-11-15', 'evoMo@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 75315982, '2024-04-20 22:18:55'),
(8, 'cliente', 9874125, 'Marcelo', 'Ovando', 'Mamani', '1996-12-12', 'marceloOv@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 74125877, '2024-04-20 22:18:55'),
(9, 'cliente', 1234785, 'Jose', 'Camacho', 'Loza', '1999-07-09', 'joseCa@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 77788899, '2024-04-20 22:18:55'),
(10, 'cliente', 996837, 'Enrique', 'Ruffo', 'Nieto', '1991-04-13', 'enriqueRu@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 74444112, '2024-04-20 22:18:55'),
(11, 'cliente', 993781, 'Eddy', 'Gutierrez', 'Gutierrez', '1998-11-01', 'eddyGu@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 70000897, '2024-04-20 22:18:55'),
(12, 'cliente', 941257, 'Julia', 'Mamani', 'Mamani', '1990-06-14', 'juliaMa@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 70098030, '2024-04-20 22:18:55'),
(13, 'cliente', 14785978, 'Daniela', 'Velasco', 'Soto', '2005-08-18', 'danielaVe@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 65470890, '2024-04-20 22:18:55');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`idUsuario`);

--
-- Indices de la tabla `banco`
--
ALTER TABLE `banco`
  ADD PRIMARY KEY (`idBanco`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idUsuario`);

--
-- Indices de la tabla `controla_admi_banco`
--
ALTER TABLE `controla_admi_banco`
  ADD KEY `idUsuario` (`idUsuario`),
  ADD KEY `idBanco` (`idBanco`);

--
-- Indices de la tabla `cuenta`
--
ALTER TABLE `cuenta`
  ADD PRIMARY KEY (`idCuenta`),
  ADD KEY `idBanco` (`idBanco`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Indices de la tabla `movimiento`
--
ALTER TABLE `movimiento`
  ADD PRIMARY KEY (`idMovimiento`),
  ADD KEY `idCuenta` (`idCuenta`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `idUsuario` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `banco`
--
ALTER TABLE `banco`
  MODIFY `idBanco` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idUsuario` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `cuenta`
--
ALTER TABLE `cuenta`
  MODIFY `idCuenta` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT de la tabla `movimiento`
--
ALTER TABLE `movimiento`
  MODIFY `idMovimiento` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `idUsuario` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD CONSTRAINT `administrador_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `persona` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `persona` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `controla_admi_banco`
--
ALTER TABLE `controla_admi_banco`
  ADD CONSTRAINT `controla_admi_banco_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `administrador` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `controla_admi_banco_ibfk_2` FOREIGN KEY (`idBanco`) REFERENCES `banco` (`idBanco`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cuenta`
--
ALTER TABLE `cuenta`
  ADD CONSTRAINT `cuenta_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `cliente` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cuenta_ibfk_2` FOREIGN KEY (`idBanco`) REFERENCES `banco` (`idBanco`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `movimiento`
--
ALTER TABLE `movimiento`
  ADD CONSTRAINT `movimiento_ibfk_1` FOREIGN KEY (`idCuenta`) REFERENCES `cuenta` (`idCuenta`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
