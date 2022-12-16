-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 15-12-2022 a las 10:35:54
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `confecamaras`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mainmenu`
--

CREATE TABLE `mainmenu` (
  `id` int(11) NOT NULL,
  `text` varchar(32) NOT NULL,
  `url` varchar(32) NOT NULL,
  `options` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `mainmenu`
--

INSERT INTO `mainmenu` (`id`, `text`, `url`, `options`) VALUES
(1, '¿Que és?', '#hero', NULL),
(2, 'Empresarios', '#businessman', NULL),
(3, 'Instituciones Educativas', '#institutions', NULL),
(4, 'Estudiantes', '#students', NULL),
(5, 'Documentos y Enlaces', 'javascript:;', 'data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\"');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sections`
--

CREATE TABLE `sections` (
  `id` int(11) NOT NULL,
  `title` varchar(32) NOT NULL,
  `subtitle` varchar(32) DEFAULT NULL,
  `image` varchar(64) DEFAULT NULL,
  `content` text NOT NULL,
  `contentalt` text DEFAULT NULL,
  `textlink` varchar(128) NOT NULL,
  `urllink` varchar(64) NOT NULL,
  `optlink` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sections`
--

INSERT INTO `sections` (`id`, `title`, `subtitle`, `image`, `content`, `contentalt`, `textlink`, `urllink`, `optlink`) VALUES
(1, 'Educación y Formación Dual', NULL, '', 'La Educación y Formación Dual es una modalidad que combina el aprendizaje académico con la enseñanza práctica en las empresas.', 'Para más información consulta los enlaces y documentos que tenemos para tí.', 'Ver Documentos ', 'javascript:;', 'data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\"'),
(2, 'Empresarios', 'Vinculate para:', 'images/businessman.png', '<li>Incidir en los programas de formación que se acoplen a las necesidades de su empresa.</li>\n                        <li>Promover la productividad y a innovación empresarial.</li>\n                        <li>Reducir la rotación de personal.</li>\n                        <li>Aportar a la formación de estudiantes y a la competitividad del sector.</li>', 'Consulta cómo vincular tu empresa', 'Ver más', 'pdf/guia-vinculacion-empresas.pdf', NULL),
(3, 'Instituciones Educativas', NULL, 'images/did-you-know-01.png', '<li>La Educación y Formación Dual permite crear alianzas con el sector productivo.</li>\r\n                        <li>Genera el desarrollo de conocimiento e innovación de acuerdo con las necesidades y el talento humano requerido.</li>\r\n                        <li>Contribuye a la mejora continua de las organizaciones.</li>', 'Consulta cómo registrar tu Institución Educativa', 'Ver más', 'pdf/procedimiento-obtencion-registros.pdf', NULL),
(4, 'Estudiantes', NULL, 'images/students.png', '<li>Adquiere experiencia mientras estudias.</li>\r\n                        <li>Incrementa la probabilidad de emplearte una vez termines tu proceso de formación.</li>\r\n                        <li>Ahorra tiempo valioso para tu vida profesional.</li>\r\n                        <li>Alterna tu aprendizaje conociendo las necesidades reales que afrontan las empresas.</li>\r\n                        <li>Altas posibilidades de continuar trabajando en la empresa al finalizar tu carrera.</li>', NULL, 'Conoce aquí las Instituciones Educativas y los programas que se están ofreciendo en la modalidad Dual', 'pdf/listado-modalidad-dual.pdf', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `title` varchar(32) NOT NULL,
  `text` text NOT NULL,
  `image` varchar(32) NOT NULL,
  `textlink` varchar(32) NOT NULL,
  `urllink` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `text`, `image`, `textlink`, `urllink`) VALUES
(1, 'Empresario', 'Participar en un proceso de Educación y Formación Dual mejora la productividad, las capacidades de innovación de su empresa y reduce la rotación de personal.', 'images/did-you-know-01.png', 'Conoce más información', '#businessman'),
(2, 'Institución Educativa', 'La Educación y Formación Dual te permite mejorar la calidad de los programas acádemicos y generar alianzas con el sector productivo.', 'images/did-you-know-02.png', 'Conoce más información', '#institutions'),
(3, 'Estudiante', 'La Educación y Formación Dual te permite aprender en un ambiente laboral real, fortaleciendo habilidades y competencias que te ayudarán a acelerar el accesso a tu primer empleo.', 'images/did-you-know-03.png', 'Conoce más información', '#students');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(64) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `password`) VALUES
(1, 'Melissa Sierra', 'melissa', 'c84a48fe0c8ee29631595ee58d81df94');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `mainmenu`
--
ALTER TABLE `mainmenu`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `mainmenu`
--
ALTER TABLE `mainmenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
