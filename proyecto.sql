-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: db
-- Tiempo de generación: 06-11-2020 a las 23:29:01
-- Versión del servidor: 5.7.32
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE `preguntas` (
  `id` int(11) NOT NULL,
  `titulo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `preguntas`
--

INSERT INTO `preguntas` (`id`, `titulo`) VALUES
(1, '¿Esta es la casa que está en venta?'),
(2, '¿Tienes el teléfono del mecánico de urgencias?'),
(3, '¿Leíste el texto que tenías de tarea?'),
(4, '¿Conoces a mis abuelos?'),
(5, '¿Tiene experiencia en el rubro?'),
(6, '¿Tienes 18 años?'),
(7, '¿Cuál es su estado civil?'),
(8, '¿Tendre vacaciones este verano?'),
(9, '¿Conoces a mi hermana?'),
(10, '¿Sabes donde queda Pedasi?'),
(11, 'Debemos presentar Hoy'),
(12, '¿Vamos a viajar este fin?'),
(13, '¿Crees que regremos a confinamiento?');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuestas`
--

CREATE TABLE `respuestas` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_pregunta` int(11) NOT NULL,
  `id_respuesta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `respuestas`
--

INSERT INTO `respuestas` (`id`, `id_usuario`, `id_pregunta`, `id_respuesta`) VALUES
(8, 5, 1, 1),
(9, 5, 5, 2),
(10, 5, 6, 2),
(11, 5, 8, 1),
(12, 5, 11, 1),
(13, 5, 12, 2),
(14, 5, 13, 1),
(15, 6, 2, 1),
(16, 6, 5, 1),
(17, 6, 7, 2),
(18, 6, 8, 2),
(19, 6, 10, 1),
(20, 6, 12, 1),
(21, 7, 1, 1),
(22, 7, 2, 1),
(23, 7, 6, 1),
(24, 7, 7, 1),
(25, 7, 8, 2),
(26, 7, 10, 2),
(27, 7, 11, 2),
(28, 7, 12, 1),
(29, 7, 13, 1),
(30, 8, 2, 1),
(31, 8, 5, 2),
(32, 8, 7, 1),
(33, 8, 8, 1),
(34, 8, 9, 2),
(35, 8, 10, 1),
(36, 8, 11, 1),
(37, 8, 12, 1),
(38, 9, 2, 1),
(39, 9, 5, 2),
(40, 9, 7, 1),
(41, 9, 8, 1),
(42, 9, 9, 2),
(43, 9, 10, 1),
(44, 9, 11, 1),
(45, 9, 12, 1),
(46, 10, 1, 1),
(47, 10, 2, 1),
(48, 10, 3, 2),
(49, 10, 6, 2),
(50, 10, 10, 1),
(51, 10, 11, 1),
(52, 11, 1, 2),
(53, 11, 3, 1),
(54, 11, 4, 1),
(55, 11, 6, 2),
(56, 11, 7, 2),
(57, 11, 9, 1),
(58, 11, 10, 1),
(59, 11, 12, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `sexo` int(11) NOT NULL,
  `edad` int(11) NOT NULL,
  `salario` int(11) NOT NULL,
  `provincia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `sexo`, `edad`, `salario`, `provincia`) VALUES
(5, 'Juam', 'Perez', 1, 21, 3221, 2),
(6, 'Aldair', 'Archivold', 1, 32, 3221, 2),
(7, 'Margarita', 'Henrique', 2, 32, 3221, 2),
(8, 'Matilda', 'Lopez', 2, 23, 3221, 1),
(9, 'Matilda', 'Lopez', 2, 23, 3221, 1),
(10, 'felipe', 'romero', 1, 32, 3221, 1),
(11, 'Agustin', 'Romero', 1, 32, 3221, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `respuestas`
--
ALTER TABLE `respuestas`
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
-- AUTO_INCREMENT de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `respuestas`
--
ALTER TABLE `respuestas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
