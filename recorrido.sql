-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-03-2023 a las 21:03:58
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `recorrido`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_registro` (IN `Nombre_` VARCHAR(100), IN `Apellidos_` VARCHAR(100), IN `Telefono_` VARCHAR(100), IN `Correo_` VARCHAR(100), IN `ID_escuela_` INT, IN `ID_carrera_` INT, IN `Estado_` VARCHAR(100), IN `Mensaje_` VARCHAR(500))   INSERT INTO aspirante(
    nombre,
    apellidos,
    telefono,
    email,
    id_carrera,
    id_escuela,
    estado,
    msj
)
VALUES(
    Nombre_,
    Apellidos_,
    Telefono_,
    Correo_,
    ID_escuela_,
    ID_carrera_,
    Estado_,
    Mensaje_
)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aspirante`
--

CREATE TABLE `aspirante` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `id_carrera` int(11) NOT NULL,
  `id_escuela` int(11) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `msj` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `aspirante`
--

INSERT INTO `aspirante` (`id`, `nombre`, `apellidos`, `telefono`, `email`, `id_carrera`, `id_escuela`, `estado`, `msj`) VALUES
(1, 'Leslie', 'Gress', '7731254602', 'gressleslie9@gmail.com', 2, 6, 'hidalgo', 'hola'),
(2, 'Maricela', 'HernÃ¡ndez', '7731254602', 'mh@gmail.com', 2, 3, 'Hidalgo', 'Hola! me pueden informar cuantos cuatrimestres dura una carrera');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE `carrera` (
  `id_carrera` int(11) NOT NULL,
  `Nombre_carrera` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `carrera`
--

INSERT INTO `carrera` (`id_carrera`, `Nombre_carrera`) VALUES
(1, 'T.S.U Gastronomia'),
(2, 'T.S.U Turismo'),
(3, 'T.S.U Tecnologias de la Informacion'),
(4, 'Licenciatura En Gestión y Desarrollo Turístico'),
(5, 'Licenciatura en Gastronomía'),
(6, 'Ingeniería en Desarrollo y Gestión de Software');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escuela_procedencia`
--

CREATE TABLE `escuela_procedencia` (
  `id_escuela` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Municipio` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `escuela_procedencia`
--

INSERT INTO `escuela_procedencia` (`id_escuela`, `Nombre`, `Municipio`) VALUES
(1, 'CECyTHE Octavio Paz', 'Chilcuahuatla'),
(2, 'Escuela Preparatoria de Mangas', 'Tezontepec de Aldama'),
(3, 'Preparatoria Federal Ignacio Ramirez', 'Mixquiahuala de Juarez'),
(4, 'COBAEH Plantel Chilcuahuatla ', 'Chilcuahuatla'),
(5, 'CBTis No.119 Emiliano Zapata', 'Mixquiahuala de Juarez'),
(6, 'Sor Juana Ines de la Cruz', 'Tlahuelilpan'),
(7, 'Escuela Superior de Tlahuelilpan', 'Tlahuelilpan'),
(8, 'COBAEH Plantel Tlahuelilpan', 'Tlahuelilpan'),
(9, 'CETIS', 'Atitalaquia'),
(10, 'CETAC 02', 'Tezontepec de Aldama'),
(11, 'CECyTHE Plantel Presas', 'Tezontepec de Aldama'),
(12, 'COBAEH Plantel Atengo', 'Tezontepec de Aldama'),
(13, 'Otra', 'Otro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `id_proyectos` int(11) NOT NULL,
  `nombre_proyecto` varchar(100) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `imagen` longblob DEFAULT NULL,
  `id_carrera` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aspirante`
--
ALTER TABLE `aspirante`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `id_carrera` (`id_carrera`),
  ADD KEY `id_escuela` (`id_escuela`);

--
-- Indices de la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`id_carrera`);

--
-- Indices de la tabla `escuela_procedencia`
--
ALTER TABLE `escuela_procedencia`
  ADD PRIMARY KEY (`id_escuela`);

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`id_proyectos`),
  ADD KEY `fk_Carrera` (`id_carrera`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aspirante`
--
ALTER TABLE `aspirante`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `id_proyectos` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `aspirante`
--
ALTER TABLE `aspirante`
  ADD CONSTRAINT `aspirante_ibfk_1` FOREIGN KEY (`id_carrera`) REFERENCES `carrera` (`id_carrera`),
  ADD CONSTRAINT `aspirante_ibfk_2` FOREIGN KEY (`id_escuela`) REFERENCES `escuela_procedencia` (`id_escuela`);

--
-- Filtros para la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD CONSTRAINT `fk_Carrera` FOREIGN KEY (`id_carrera`) REFERENCES `carrera` (`id_carrera`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
