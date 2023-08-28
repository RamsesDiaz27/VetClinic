-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-08-2023 a las 00:27:48
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `escuela2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id` int(11) NOT NULL,
  `dueño` varchar(50) NOT NULL,
  `tipo_animal` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `edad` int(10) NOT NULL,
  `sintomas` varchar(50) NOT NULL,
  `fecha` date DEFAULT NULL,
  `hora` time(6) NOT NULL,
  `telefono_dueño` int(10) NOT NULL,
  `nombre_contacto` varchar(50) NOT NULL,
  `telefono_contacto` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id`, `dueño`, `tipo_animal`, `nombre`, `edad`, `sintomas`, `fecha`, `hora`, `telefono_dueño`, `nombre_contacto`, `telefono_contacto`) VALUES
(35, 'Montoya2', 'perro', 'Tomate', 4, 'Vacunación antirrabica', '2023-08-03', '14:11:00.000000', 961245789, 'Claudio Torres', 961456789),
(37, 'Montoya2', 'gato', 'Ruperto', 5, 'Baño y limpieza general', '2023-08-03', '14:32:00.000000', 961234558, 'Pedro Sola', 961224568),
(40, 'Pereira5', 'conejo', 'Sami', 2, 'Resfriado', '2023-08-26', '12:48:00.000000', 961123456, 'Andres Montoya', 123456789),
(41, 'Pereira5', 'pajaro', 'Ignacio', 1, 'No ha comido en 2 días', '2023-08-25', '12:58:00.000000', 12345678, 'Rivers', 12345678),
(42, 'Pereira5', 'gato', 'Minino', 1, 'Ninguno, necesita vacunación', '2023-08-10', '17:49:00.000000', 123456666, 'Rivers', 123456789),
(43, 'Pereira5', 'perro', 'Pochito', 2, 'Vacunación y baño', '2023-08-18', '13:11:00.000000', 123456789, 'rivers', 123456789);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `id` int(4) NOT NULL,
  `dueño` varchar(50) NOT NULL,
  `tipo_animal` varchar(30) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `edad` int(2) NOT NULL,
  `sintomas` varchar(250) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time(6) NOT NULL,
  `telefono_dueño` int(10) NOT NULL,
  `nombre_contacto` varchar(50) NOT NULL,
  `telefono_contacto` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `nombre`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `codigo` varchar(50) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `apellido_paterno` varchar(50) DEFAULT NULL,
  `apellido_materno` varchar(50) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `correo_electronico` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `contraseña` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `cuenta_bancaria` varchar(50) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `codigo_postal` varchar(10) DEFAULT NULL,
  `rfc` varchar(20) DEFAULT NULL,
  `id_rol` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `codigo`, `nombre`, `apellido_paterno`, `apellido_materno`, `telefono`, `correo_electronico`, `contraseña`, `cuenta_bancaria`, `direccion`, `codigo_postal`, `rfc`, `id_rol`) VALUES
(1, '', 'Administrador', '', '', '', 'admin@admin.com', '1234', '', '', '', '', 1),
(2, 'Jiménez1', 'María', 'Jiménez', 'Torres', '9612338967', 'maria_jimenez@gmail.com', '1234', '045646472184935', 'Tuxtla Gutiérrez', '29000', 'JTMA010810MR6', 2),
(3, 'Montoya2', 'Valeria Sofía', 'Montoya', 'Franco', '9671083613', 'valeriasofiam.f@gmail.com', '1234', '979049150770', 'Calle Jalisco #44', '29240', 'MOFV010319JM4', 2),
(4, 'Montoya3', 'Andres', 'Montoya', 'Zabaleta', '9613378545', 'andres@gmail.com', '1234', '12345678912', 'Cipres pino', '29045', 'MOZJ000HCS', 2),
(5, 'Gordillo4', 'Ramses', 'Gordillo', 'Diaz', '961455588', 'gordi@gmail.com', '1234', '12345678912', 'av las nieves', '29045', '88888888888', 2),
(6, 'Pereira5', 'Manuel', 'Pereira', 'Palazuelos', '9613378649', 'manu@gmail.com', '1234', '123456789', 'boulevard', '29045', '1234567894561', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `correo_electronico` (`correo_electronico`),
  ADD KEY `fk_roles` (`id_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_roles` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
