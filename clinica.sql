-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-10-2020 a las 01:47:00
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `clinica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultas`
--

CREATE TABLE `consultas` (
  `id` int(11) NOT NULL,
  `idPaciente` int(11) NOT NULL,
  `Diagnostico` text COLLATE utf8_spanish_ci NOT NULL,
  `Medicamento` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `consultas`
--

INSERT INTO `consultas` (`id`, `idPaciente`, `Diagnostico`, `Medicamento`) VALUES
(1, 123456789, 'Gripe', 'Grippal'),
(2, 987654321, 'Diabetes', 'Metformina'),
(3, 1245224, 'Gripe', 'Grippal'),
(4, 41234567, 'Infección Intestinal', 'Antibioticos'),
(5, 99459454, 'Gripe', 'Acetaminofen'),
(6, 2147483647, 'Tos', 'Clorferamina'),
(7, 2147483647, 'Gripe', 'Clorferamina'),
(8, 93938493, 'Tos', 'Antigrip'),
(9, 948953895, 'Gripe', 'Acetaminofen'),
(10, 2147483647, 'Diabetes', 'Metformina'),
(11, 9495943, 'Gripe', 'Acetaminofen');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `id` int(11) NOT NULL,
  `Documento` int(11) NOT NULL,
  `Nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `Apellido` text COLLATE utf8_spanish_ci NOT NULL,
  `Fecha_Nacimiento` date NOT NULL,
  `Tipo_de_Sangre` text COLLATE utf8_spanish_ci NOT NULL,
  `Padecimientos_Anteriores` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`id`, `Documento`, `Nombre`, `Apellido`, `Fecha_Nacimiento`, `Tipo_de_Sangre`, `Padecimientos_Anteriores`) VALUES
(1, 123456789, 'paciente', 'rosales', '2020-08-11', '+AB', 'Gripe'),
(2, 987654321, 'pedro', 'ramos', '2020-08-12', 'B', 'Infección Intestinal'),
(4, 1245224, 'enfermo', 'ruiz', '2020-09-17', 'O', 'Diabetes'),
(5, 9589584, 'Jane', 'Rodriguez', '1999-02-03', 'O', 'Gripe'),
(6, 2147483647, 'Stefany', 'Rodriguez', '2019-10-10', 'A', 'Tos'),
(7, 2147483647, 'Juan', 'Arevalo', '1995-05-07', 'A', 'Gripe'),
(8, 2147483647, 'Jassmin', 'Garcia', '2003-03-07', 'o', 'Infección Intestinal'),
(9, 238948932, 'Jane', 'Rodriguez', '1929-02-09', 'o', 'Infección Intestinal');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `Nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `Usuario` text COLLATE utf8_spanish_ci NOT NULL,
  `Password` text COLLATE utf8_spanish_ci NOT NULL,
  `Perfil` text COLLATE utf8_spanish_ci NOT NULL,
  `Foto` text COLLATE utf8_spanish_ci NOT NULL,
  `Estado` int(11) NOT NULL,
  `Ultimo_Login` datetime NOT NULL,
  `Fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `Nombre`, `Usuario`, `Password`, `Perfil`, `Foto`, `Estado`, `Ultimo_Login`, `Fecha`) VALUES
(14, 'tester2', 'tester2', '$2a$07$asxx54ahjppf45sd87a5aut7woOLXGHNvxmSZ/7D2OzmIs1BcBV8m', 'Administrador', 'vistas/img/usuarios/tester2/720.png', 1, '2020-09-17 19:51:49', '2020-10-08 06:04:27'),
(16, 'enfermero', 'enfermero', '$2a$07$asxx54ahjppf45sd87a5au4jkE9ac/aNzlSfbJjVcSuG61lXjf/wC', 'Vendedor', '', 1, '0000-00-00 00:00:00', '2020-09-18 13:52:44'),
(17, 'tester', 'tester', '$2a$07$asxx54ahjppf45sd87a5aut7woOLXGHNvxmSZ/7D2OzmIs1BcBV8m', 'Administrador', '', 1, '2020-10-09 16:19:16', '2020-10-09 22:19:16'),
(18, 'medico1', 'medico1', '$2a$07$asxx54ahjppf45sd87a5auqGqYFCPU/sR/7H5BlY1YnfQT30evHJG', 'Especial', '', 1, '0000-00-00 00:00:00', '2020-09-18 13:55:38'),
(19, 'Jane', 'janelha', '$2a$07$asxx54ahjppf45sd87a5auFWLavMe6fPjcjb7DHE.aC5EwbhI/51m', 'Vendedor', '', 1, '0000-00-00 00:00:00', '2020-10-08 02:47:28'),
(20, 'Stefany', 'stefany', '$2a$07$asxx54ahjppf45sd87a5autktFY3lAu4TOaGkIC.Wxry74XygOXN.', 'Vendedor', '', 1, '0000-00-00 00:00:00', '2020-10-08 02:47:29'),
(21, 'Anderson', 'anderson', '$2a$07$asxx54ahjppf45sd87a5au0jc4z5X2kdqcHfTFq29WHN7DVfBSvnC', 'Vendedor', '', 0, '0000-00-00 00:00:00', '2020-10-08 02:47:47');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `consultas`
--
ALTER TABLE `consultas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `consultas`
--
ALTER TABLE `consultas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
