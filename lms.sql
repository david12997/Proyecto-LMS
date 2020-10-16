-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 15-10-2020 a las 22:17:13
-- Versión del servidor: 8.0.21-0ubuntu0.20.04.4
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `lms`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id_administrador` int NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contraseña` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int NOT NULL,
  `nombre_categoria` varchar(50) NOT NULL,
  `ruta_icono` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_curso`
--

CREATE TABLE `categoria_curso` (
  `id_categoria_curso` int NOT NULL,
  `id_curso` int DEFAULT NULL,
  `id_categoria` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_maestro`
--

CREATE TABLE `categoria_maestro` (
  `id_categoria_maestro` int NOT NULL,
  `id_maestro` int DEFAULT NULL,
  `id_categoria` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `componente_curso`
--

CREATE TABLE `componente_curso` (
  `id_componente` int NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `estado` int NOT NULL,
  `ruta` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE `curso` (
  `id_curso` int NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `estado` text NOT NULL,
  `ruta_icono` varchar(255) NOT NULL,
  `descripcion_curso` mediumtext NOT NULL,
  `duracion_curso` int NOT NULL,
  `precio_curso` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`id_curso`, `nombre`, `estado`, `ruta_icono`, `descripcion_curso`, `duracion_curso`, `precio_curso`) VALUES
(1, 'Biología', 'ok', 'assets/img/Biologia.png', 'Biología de 0 100, iremos profundizando poco a poco  desde biología celular y molecular hasta  bioquímica, codificación  y modificación del genoma humano...', 40, 35000),
(2, 'Fisíca ', 'ok', 'assets/img/fisica.png', 'Descubirendo el universo y su funcionamiento, prediciendo el futuro alterando el tiempo y el espacio...', 60, 40000),
(3, 'Matematicas', 'ok', 'assets/img/matematicas.png', 'Desde aritmetica basica hasta calculo integral y algebral lineal con pyton para Inteligencia Artificial', 60, 80000),
(4, 'Calculo diferencial', 'ok', 'assets/img/calculo1.jpeg', 'En este curso estudiaremos las propiedades de las funciones sus operaciones, introduciremos el concepto e limite y profundizaremos en las reglas de derivación ', 40, 20000),
(5, 'Musica', 'ok', 'assets/img/musica.png', 'Aprenderemos todo sobre el mundo de la musica ', 40, 5000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso_componente`
--

CREATE TABLE `curso_componente` (
  `id_curso_componente` int NOT NULL,
  `id_curso` int DEFAULT NULL,
  `id_componente` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso_estudiante`
--

CREATE TABLE `curso_estudiante` (
  `id_curso_estudiante` int NOT NULL,
  `id_curso` int DEFAULT NULL,
  `id_estudiante` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `curso_estudiante`
--

INSERT INTO `curso_estudiante` (`id_curso_estudiante`, `id_curso`, `id_estudiante`) VALUES
(1, 2, 5),
(2, 5, 5),
(3, 2, 7),
(4, 3, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso_maestro`
--

CREATE TABLE `curso_maestro` (
  `id_curso_maestro` int NOT NULL,
  `id_curso` int DEFAULT NULL,
  `id_maestro` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `id_estudiante` int NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contraseña` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`id_estudiante`, `nombre`, `email`, `contraseña`) VALUES
(5, 'David Castaneda', 'davidc12997@gmial.com', '$2y$04$wiDnH9lh40q9TX8r9Q25OOtX0OPZmM0J20KtEZTZfPwUp78.PSxy2'),
(6, 'cristian delgadillo', 'cristiannd094@gmail.com', '$2y$04$sC7UH17rQamlTrZzjgsllOkqieGbD8/uls.IiVsxoE1J/yNUTorbK'),
(7, 'maribel diaz', 'horaimita-9417@hotmail.com', '$2y$04$BYHYsx1oresqsdz.3JgCzuOOzlw0dB27TOQ4nChVrdDCv1yGNnenm');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maestro`
--

CREATE TABLE `maestro` (
  `id_maestro` int NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contraseña` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id_administrador`),
  ADD UNIQUE KEY `uq_email` (`email`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`),
  ADD UNIQUE KEY `uq_nombre_categoria` (`nombre_categoria`),
  ADD UNIQUE KEY `uq_ruta_icono` (`ruta_icono`);

--
-- Indices de la tabla `categoria_curso`
--
ALTER TABLE `categoria_curso`
  ADD PRIMARY KEY (`id_categoria_curso`),
  ADD KEY `fk_curso_categoria` (`id_curso`),
  ADD KEY `fk_categoria_curso` (`id_categoria`);

--
-- Indices de la tabla `categoria_maestro`
--
ALTER TABLE `categoria_maestro`
  ADD PRIMARY KEY (`id_categoria_maestro`),
  ADD KEY `fk_maestro_categoria` (`id_maestro`),
  ADD KEY `fk_categoria_maestro` (`id_categoria`);

--
-- Indices de la tabla `componente_curso`
--
ALTER TABLE `componente_curso`
  ADD PRIMARY KEY (`id_componente`),
  ADD UNIQUE KEY `uq_ruta` (`ruta`);

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id_curso`),
  ADD UNIQUE KEY `uq_nombre` (`nombre`),
  ADD UNIQUE KEY `uq_ruta_icono` (`ruta_icono`);

--
-- Indices de la tabla `curso_componente`
--
ALTER TABLE `curso_componente`
  ADD PRIMARY KEY (`id_curso_componente`),
  ADD KEY `fk_curso_componente` (`id_curso`),
  ADD KEY `fk_componente_curso` (`id_componente`);

--
-- Indices de la tabla `curso_estudiante`
--
ALTER TABLE `curso_estudiante`
  ADD PRIMARY KEY (`id_curso_estudiante`),
  ADD KEY `fk_curso_estudiante` (`id_curso`),
  ADD KEY `fk_estudiante_curso` (`id_estudiante`);

--
-- Indices de la tabla `curso_maestro`
--
ALTER TABLE `curso_maestro`
  ADD PRIMARY KEY (`id_curso_maestro`),
  ADD KEY `fk_curso_m` (`id_curso`),
  ADD KEY `fk_maestro_curso` (`id_maestro`);

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`id_estudiante`),
  ADD UNIQUE KEY `uq_email` (`email`);

--
-- Indices de la tabla `maestro`
--
ALTER TABLE `maestro`
  ADD PRIMARY KEY (`id_maestro`),
  ADD UNIQUE KEY `uq_email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id_administrador` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `categoria_curso`
--
ALTER TABLE `categoria_curso`
  MODIFY `id_categoria_curso` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `categoria_maestro`
--
ALTER TABLE `categoria_maestro`
  MODIFY `id_categoria_maestro` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `componente_curso`
--
ALTER TABLE `componente_curso`
  MODIFY `id_componente` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `curso`
--
ALTER TABLE `curso`
  MODIFY `id_curso` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `curso_componente`
--
ALTER TABLE `curso_componente`
  MODIFY `id_curso_componente` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `curso_estudiante`
--
ALTER TABLE `curso_estudiante`
  MODIFY `id_curso_estudiante` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `curso_maestro`
--
ALTER TABLE `curso_maestro`
  MODIFY `id_curso_maestro` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  MODIFY `id_estudiante` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `maestro`
--
ALTER TABLE `maestro`
  MODIFY `id_maestro` int NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `categoria_curso`
--
ALTER TABLE `categoria_curso`
  ADD CONSTRAINT `fk_categoria_curso` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`),
  ADD CONSTRAINT `fk_curso_categoria` FOREIGN KEY (`id_curso`) REFERENCES `curso` (`id_curso`);

--
-- Filtros para la tabla `categoria_maestro`
--
ALTER TABLE `categoria_maestro`
  ADD CONSTRAINT `fk_categoria_maestro` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`),
  ADD CONSTRAINT `fk_maestro_categoria` FOREIGN KEY (`id_maestro`) REFERENCES `maestro` (`id_maestro`);

--
-- Filtros para la tabla `curso_componente`
--
ALTER TABLE `curso_componente`
  ADD CONSTRAINT `fk_componente_curso` FOREIGN KEY (`id_componente`) REFERENCES `componente_curso` (`id_componente`),
  ADD CONSTRAINT `fk_curso_componente` FOREIGN KEY (`id_curso`) REFERENCES `curso` (`id_curso`);

--
-- Filtros para la tabla `curso_estudiante`
--
ALTER TABLE `curso_estudiante`
  ADD CONSTRAINT `fk_curso_estudiante` FOREIGN KEY (`id_curso`) REFERENCES `curso` (`id_curso`),
  ADD CONSTRAINT `fk_estudiante_curso` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiante` (`id_estudiante`);

--
-- Filtros para la tabla `curso_maestro`
--
ALTER TABLE `curso_maestro`
  ADD CONSTRAINT `fk_curso_m` FOREIGN KEY (`id_curso`) REFERENCES `curso` (`id_curso`),
  ADD CONSTRAINT `fk_maestro_curso` FOREIGN KEY (`id_maestro`) REFERENCES `maestro` (`id_maestro`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
