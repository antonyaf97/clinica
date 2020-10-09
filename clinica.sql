-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-09-2020 a las 14:28:31
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `documento` int(11) NOT NULL,
  `email` text COLLATE utf8_spanish_ci NOT NULL,
  `telefono` text COLLATE utf8_spanish_ci NOT NULL,
  `direccion` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `compras` int(11) NOT NULL,
  `ultima_compra` datetime NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `documento`, `email`, `telefono`, `direccion`, `fecha_nacimiento`, `compras`, `ultima_compra`, `fecha`) VALUES
(1, 'paciente1', 123456789, 'paciente@gmail.com', '(502) 123-4567', 'guatemala', '2020-08-11', 14, '2020-08-14 19:10:42', '2020-09-18 01:37:23'),
(2, 'paciente2', 987654321, 'paciente2@gmail.com', '(123) 456-7891', 'Guatemala', '2020-08-12', 22, '2020-09-12 14:21:20', '2020-09-18 01:37:48'),
(3, 'pacente3', 2147483647, 'paciente3@gmail.com', '(502) 446-6444', 'ciudad', '2020-09-10', 18, '2020-09-12 14:17:36', '2020-09-18 01:38:06'),
(5, 'enfermo', 1245224, 'enfermo@gmail.com', '(451) 122-1666', 'Salama', '2020-09-17', 0, '0000-00-00 00:00:00', '2020-09-18 01:47:04');

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
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `Nombre`, `Usuario`, `Password`, `Perfil`, `Foto`, `Estado`, `Ultimo_Login`, `fecha`) VALUES
(14, 'tester', 'tester2', '$2a$07$asxx54ahjppf45sd87a5aut7woOLXGHNvxmSZ/7D2OzmIs1BcBV8m', 'Administrador', 'vistas/img/usuarios/tester2/720.png', 1, '2020-09-17 19:51:49', '2020-09-18 01:51:49'),
(16, 'enfermero', 'enfermero', '$2a$07$asxx54ahjppf45sd87a5au4jkE9ac/aNzlSfbJjVcSuG61lXjf/wC', 'Vendedor', '', 1, '0000-00-00 00:00:00', '2020-09-18 01:52:44'),
(17, 'tester', 'tester', '$2a$07$asxx54ahjppf45sd87a5aut7woOLXGHNvxmSZ/7D2OzmIs1BcBV8m', 'Administrador', '', 1, '2020-09-17 19:58:21', '2020-09-18 01:58:21'),
(18, 'medico1', 'medico1', '$2a$07$asxx54ahjppf45sd87a5auqGqYFCPU/sR/7H5BlY1YnfQT30evHJG', 'Especial', '', 1, '0000-00-00 00:00:00', '2020-09-18 01:55:38');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
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
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
