-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-12-2022 a las 21:59:48
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `estudiantetemporada`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `id` int(11) NOT NULL,
  `nombrecompleto` varchar(70) DEFAULT NULL,
  `departamento` varchar(20) DEFAULT NULL,
  `usuario` varchar(20) DEFAULT NULL,
  `ci` varchar(30) DEFAULT NULL,
  `fechanacimiento` date DEFAULT NULL,
  `cpt` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`id`, `nombrecompleto`, `departamento`, `usuario`, `ci`, `fechanacimiento`, `cpt`) VALUES
(1, 'Grover Osvaldo Rodriguez Apaza', 'Oruro', 'FuryAlumno', '13814701', '2022-12-14', '458374'),
(2, 'Osvaldo Ramirez', 'La Paz', 'OsvaldoAlumno', '92387444', '1988-11-09', '343'),
(3, 'Gennady Korotevich', 'Beni', 'TouristAlumno', '23434', '2022-12-08', '23434'),
(6, 'Abraham Cruz', 'Tarija', 'Abraham', '987654321', '1990-12-09', '123'),
(7, 'Adriana Campos', 'La Paz', 'Adriana', '987654322', '1999-02-23', '456'),
(8, 'Aidee Marca', 'La Paz', 'Aidee', '987654323', '1991-02-02', '456'),
(9, 'Ana Quispe', 'La Paz', 'Ana', '235791116', '1992-12-23', '3422'),
(10, 'Andres Aguirre', 'Potosi', 'Andres', '235791117', '1998-10-12', '49283'),
(11, 'Cafu de Brasil', 'Brasilia', 'Cafu', '235791118', '1989-01-01', '29837'),
(12, 'Carlos Lampe', 'La Paz', 'Carlos', '235791119', '1975-01-12', '10988'),
(13, 'David Casto', 'La Paz', 'David', '235791120', '1999-01-01', '23398'),
(14, 'Diana Alcantara', 'Beni', 'Diana', '235791121', '1981-01-01', '238338'),
(15, 'Edilson Ramirez', 'La Paz', 'Edilson', '235791122', '1897-12-12', '29388'),
(16, 'Elsa Apaza', 'La Paz', 'Elsa', '235791123', '1897-01-01', '293874'),
(17, 'Erica Quispe', 'La Paz', 'Erica', '235791124', '1921-02-02', '28337'),
(18, 'Ester Quino', 'La Paz', 'Ester', '235791125', '1981-12-12', '29838'),
(19, 'Felipe Perez', 'La Paz', 'Felipe', '235791126', '1898-01-17', '2922'),
(20, 'Felix Apaza', 'La Paz', 'Felix', '235791127', '1976-12-12', '283988'),
(21, 'Fernando Jallasa', 'La Paz', 'Fernando', '235791128', '1987-12-23', '92898'),
(22, 'Oliver Rodriguez', 'La Paz', 'Oliver', '235791148', '1987-02-23', '2394837'),
(23, 'Nelson Rodriguez', 'La Paz', 'Nelson', '235791145', '1956-03-23', '304098');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `deposito_caja`
--

CREATE TABLE `deposito_caja` (
  `id` int(11) NOT NULL,
  `usuario` varchar(30) DEFAULT NULL,
  `monto` double DEFAULT NULL,
  `nro_tramite` varchar(10) NOT NULL,
  `fecha` datetime DEFAULT NULL,
  `descripcion` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `deposito_caja`
--

INSERT INTO `deposito_caja` (`id`, `usuario`, `monto`, `nro_tramite`, `fecha`, `descripcion`) VALUES
(1, 'Abraham', 65, '1000', '2022-12-02 02:29:36', 'INF-111'),
(2, 'Abraham', 65, '1001', '2022-12-04 12:29:36', 'INF-143'),
(3, 'Abraham', 65, '1002', '2022-11-14 12:29:36', 'INF-164'),
(4, 'Adriana', 65, '1003', '2022-12-14 07:13:28', 'INF-111'),
(6, 'Adriana', 65, '1004', '2022-12-14 07:17:00', 'INF-131'),
(7, 'Adriana', 65, '1005', '2022-12-14 07:27:12', 'INF-121'),
(8, 'Aidee', 65, '1006', '2022-12-14 07:31:26', 'INF-111'),
(9, 'Aidee', 65, '1007', '2022-12-14 07:32:38', 'INF-143'),
(10, 'Aidee', 65, '1008', '2022-12-14 07:36:14', 'INF-131'),
(11, 'Ana', 65, '1009', '2022-12-14 07:41:22', 'INF-111'),
(12, 'Ana', 65, '1010', '2022-12-14 07:42:52', 'INF-112'),
(13, 'Ana', 65, '1011', '2022-12-14 07:44:24', 'INF-161'),
(14, 'Andres', 65, '1012', '2022-12-14 07:51:08', 'INF-111'),
(15, 'Andres', 65, '1013', '2022-12-14 07:53:07', 'INF-143'),
(16, 'Andres', 65, '1014', '2022-12-14 07:55:01', 'INF-131'),
(17, 'Cafu', 65, '1015', '2022-12-14 08:00:03', 'INF-325'),
(18, 'Cafu', 65, '1016', '2022-12-14 08:01:33', 'INF-273'),
(19, 'Carlos', 65, '1017', '2022-12-14 08:04:32', 'INF-111'),
(20, 'Carlos', 65, '1018', '2022-12-14 08:05:17', 'INF-143'),
(21, 'David', 65, '1019', '2022-12-14 08:20:34', 'INF-111'),
(22, 'David', 65, '1020', '2022-12-14 08:21:24', 'INF-143'),
(23, 'Diana', 65, '1021', '2022-12-14 08:24:38', 'INF-111'),
(24, 'Diana', 65, '1022', '2022-12-14 08:25:28', 'INF-143'),
(25, 'Edilson', 65, '1023', '2022-12-14 08:27:51', 'INF-111'),
(26, 'Edilson', 65, '1024', '2022-12-14 08:28:21', 'INF-143'),
(27, 'Elsa', 65, '1025', '2022-12-14 08:31:38', 'INF-111'),
(28, 'Elsa', 65, '1026', '2022-12-14 08:32:07', 'INF-143'),
(29, 'Erica', 65, '1027', '2022-12-14 08:34:50', 'INF-111'),
(30, 'Erica', 65, '1028', '2022-12-14 08:35:17', 'INF-143'),
(31, 'Ester', 65, '1029', '2022-12-14 08:43:39', 'INF-112'),
(32, 'Ester', 65, '1030', '2022-12-14 08:44:16', 'INF-121'),
(33, 'Felipe', 65, '1031', '2022-12-14 08:46:05', 'INF-112'),
(34, 'Felipe', 65, '1032', '2022-12-14 08:46:30', 'INF-121'),
(35, 'Felix', 65, '1033', '2022-12-14 08:49:49', 'INF-112'),
(36, 'Felix', 65, '1034', '2022-12-14 08:50:14', 'INF-121'),
(37, 'Fernando', 65, '1035', '2022-12-14 08:52:04', 'INF-112'),
(38, 'Fernando', 65, '1036', '2022-12-14 08:52:29', 'INF-121'),
(39, 'OsvaldoAlumno', 65, '1037', '2022-12-14 08:57:24', 'INF-131'),
(41, 'Oliver', 65, '1040', '2022-12-14 09:02:42', 'INF-121'),
(42, 'Nelson', 65, '1041', '2022-12-14 09:04:44', 'INF-161'),
(43, 'Oliver', 65, '1039', '2022-12-14 09:08:35', 'INF-161'),
(44, 'Oliver', 65, '1039', '2022-12-14 09:11:46', 'INF-111'),
(45, 'Nelson', 65, '1042', '2022-12-14 09:44:34', 'INF-121');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE `materia` (
  `id` int(11) NOT NULL,
  `sigla` varchar(30) NOT NULL,
  `descripcion` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `materia`
--

INSERT INTO `materia` (`id`, `sigla`, `descripcion`) VALUES
(2, 'INF-111', 'INTRODUCCION A LA INFORMATICA'),
(3, 'INF-112', 'ORGANIZACIÓN DE COMPUTADORAS'),
(4, 'INF-121', 'ALGORITMOS Y PROGRAMACION'),
(5, 'INF-131', 'ESTRUCTURA DE DATOS Y ALGORITMOS'),
(6, 'INF-143', 'TALLER DE PROGRAMACIÓN'),
(7, 'INF-161', 'DISEÑO Y ADMINISTRACIÓN DE BASE DE DATOS'),
(8, 'INF-164', 'TEORIA DE LA INFORMACION Y CODIFICACION'),
(9, 'INF-273', 'TELEMATICA'),
(10, 'INF-325', 'PROGRAMACION VIRTUAL'),
(11, 'LAB-111', 'LABORATORIO DE INF-111');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia_inscrita`
--

CREATE TABLE `materia_inscrita` (
  `id_estudiante` int(11) DEFAULT NULL,
  `id_materia` int(11) DEFAULT NULL,
  `nro_tramite` varchar(20) NOT NULL,
  `fecha` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `materia_inscrita`
--

INSERT INTO `materia_inscrita` (`id_estudiante`, `id_materia`, `nro_tramite`, `fecha`) VALUES
(6, 2, '1000', '2022-12-14 06:36:33'),
(6, 6, '1001', '2022-12-14 06:51:54'),
(6, 8, '1002', '2022-12-14 06:56:18'),
(7, 2, '1003', '2022-12-14 07:14:31'),
(7, 5, '1004', '2022-12-14 07:17:25'),
(7, 4, '1005', '2022-12-14 07:27:27'),
(8, 2, '1006', '2022-12-14 07:31:41'),
(8, 6, '1007', '2022-12-14 07:32:54'),
(8, 5, '1008', '2022-12-14 07:37:29'),
(9, 2, '1009', '2022-12-14 07:41:37'),
(9, 3, '1010', '2022-12-14 07:43:10'),
(9, 7, '1011', '2022-12-14 07:44:42'),
(10, 2, '1012', '2022-12-14 07:51:28'),
(10, 6, '1013', '2022-12-14 07:53:18'),
(10, 5, '1014', '2022-12-14 07:55:12'),
(11, 10, '1015', '2022-12-14 08:00:29'),
(11, 9, '1016', '2022-12-14 08:01:43'),
(12, 2, '1017', '2022-12-14 08:04:43'),
(12, 6, '1018', '2022-12-14 08:05:26'),
(13, 2, '1019', '2022-12-14 08:20:57'),
(13, 6, '1020', '2022-12-14 08:21:34'),
(14, 2, '1021', '2022-12-14 08:24:48'),
(14, 6, '1022', '2022-12-14 08:25:36'),
(15, 2, '1023', '2022-12-14 08:28:03'),
(15, 6, '1024', '2022-12-14 08:28:30'),
(16, 2, '1025', '2022-12-14 08:31:46'),
(16, 6, '1026', '2022-12-14 08:32:16'),
(17, 2, '1027', '2022-12-14 08:35:00'),
(17, 6, '1028', '2022-12-14 08:35:24'),
(18, 3, '1029', '2022-12-14 08:43:56'),
(18, 4, '1030', '2022-12-14 08:44:29'),
(19, 3, '1031', '2022-12-14 08:46:14'),
(19, 4, '1032', '2022-12-14 08:46:40'),
(20, 3, '1033', '2022-12-14 08:49:57'),
(20, 4, '1034', '2022-12-14 08:50:22'),
(21, 3, '1035', '2022-12-14 08:52:12'),
(21, 4, '1036', '2022-12-14 08:52:39'),
(2, 5, '1037', '2022-12-14 08:59:18'),
(22, 2, '1039', '2022-12-14 09:12:01'),
(22, 4, '1040', '2022-12-14 09:02:54'),
(23, 7, '1041', '2022-12-14 09:05:35'),
(23, 4, '1042', '2022-12-14 09:45:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas`
--

CREATE TABLE `notas` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `periodo` varchar(15) DEFAULT NULL,
  `gestion` year(4) DEFAULT NULL,
  `materia` varchar(15) DEFAULT NULL,
  `nota` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `notas`
--

INSERT INTO `notas` (`id`, `id_usuario`, `periodo`, `gestion`, `materia`, `nota`) VALUES
(1, 1, 'primero', 2017, 'INF-111', 90),
(2, 1, 'primero', 2017, 'LAB-111', 99),
(5, 1, 'primero', 2017, 'INF-112', 89),
(6, 1, 'primero', 2017, 'INF-113', 89),
(7, 1, 'primero', 2017, 'MAT-114', 89),
(8, 1, 'primero', 2017, 'MAT-115', 89),
(9, 1, 'primero', 2017, 'LIN-116', 89),
(10, 1, 'segundo', 2017, 'INF-121', 80),
(11, 1, 'segundo', 2017, 'LAB-121', 70),
(12, 1, 'segundo', 2017, 'FIS-122', 60),
(13, 1, 'segundo', 2017, 'LAB-122', 53),
(14, 1, 'segundo', 2017, 'MAT-123', 89),
(15, 1, 'segundo', 2017, 'MAT-124', 82),
(16, 1, 'segundo', 2017, 'MAT-125', 81),
(17, 1, 'primero', 2018, 'INF-131', 80),
(18, 1, 'primero', 2018, 'LAB-131', 70),
(19, 1, 'primero', 2018, 'FIS-132', 60),
(20, 1, 'primero', 2018, 'LAB-132', 53),
(21, 1, 'primero', 2018, 'EST-133', 89),
(22, 1, 'primero', 2018, 'MAT-134', 82),
(23, 1, 'primero', 2018, 'MAT-135', 81),
(24, 1, 'segundo', 2018, 'INF-141', 80),
(25, 1, 'segundo', 2018, 'INF-142', 70),
(26, 1, 'segundo', 2018, 'INF-143', 60),
(27, 1, 'segundo', 2018, 'INF-144', 53),
(28, 1, 'segundo', 2018, 'EST-145', 81),
(29, 1, 'primero', 2019, 'INF-151', 81),
(30, 1, 'primero', 2019, 'INF-152', 79),
(31, 1, 'primero', 2019, 'INF-153', 70),
(32, 1, 'primero', 2019, 'INF-154', 83),
(33, 1, 'primero', 2019, 'EST-155', 93),
(34, 1, 'primero', 2019, 'MAT-156', 81),
(35, 1, 'segundo', 2019, 'INF-161', 71),
(36, 1, 'segundo', 2019, 'INF-162', 70),
(37, 1, 'segundo', 2019, 'INF-163', 70),
(38, 1, 'segundo', 2019, 'INF-164', 53),
(39, 1, 'segundo', 2019, 'EST-165', 100),
(40, 1, 'segundo', 2019, 'INF-166', 81),
(41, 1, 'primero', 2020, 'INF-271', 71),
(42, 1, 'primero', 2020, 'INF-272', 70),
(43, 1, 'primero', 2020, 'INF-273', 70),
(44, 1, 'primero', 2020, 'LAB-273', 53),
(45, 1, 'primero', 2020, 'INF-311', 100),
(46, 1, 'primero', 2020, 'INF-312', 81),
(47, 1, 'segundo', 2020, 'INF-281', 71),
(48, 1, 'segundo', 2020, 'INF-282', 70),
(49, 1, 'segundo', 2020, 'INF-313', 70),
(50, 1, 'segundo', 2020, 'INF-314', 53),
(51, 1, 'segundo', 2020, 'INF-315', 100),
(52, 1, 'segundo', 2020, 'INF-316', 81),
(53, 1, 'primero', 2021, 'INF-391', 71),
(54, 1, 'primero', 2021, 'INF-398', 70),
(55, 1, 'primero', 2021, 'INF-318', 70),
(56, 1, 'primero', 2021, 'INF-319', 53),
(57, 1, 'primero', 2021, 'INF-320', 100),
(59, 1, 'segundo', 2021, 'INF-399', 81);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ultimo`
--

CREATE TABLE `ultimo` (
  `nro_tramite` varchar(10) NOT NULL,
  `id_materia` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ultimo`
--

INSERT INTO `ultimo` (`nro_tramite`, `id_materia`) VALUES
('1000', '2'),
('1001', '6'),
('1002', '8'),
('1003', '2'),
('1004', '5'),
('1005', '4'),
('1006', '2'),
('1007', '6'),
('1008', '5'),
('1009', '2'),
('1010', '3'),
('1011', '7'),
('1012', '2'),
('1013', '6'),
('1014', '5'),
('1015', '10'),
('1016', '9'),
('1017', '2'),
('1018', '6'),
('1019', '2'),
('1020', '6'),
('1021', '2'),
('1022', '6'),
('1023', '2'),
('1024', '6'),
('1025', '2'),
('1026', '6'),
('1027', '2'),
('1028', '6'),
('1029', '3'),
('1030', '4'),
('1031', '3'),
('1032', '4'),
('1033', '3'),
('1034', '4'),
('1035', '3'),
('1036', '4'),
('1037', '5'),
('1038', '7'),
('1039', '2'),
('1040', '4'),
('1041', '7'),
('1042', '4');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `deposito_caja`
--
ALTER TABLE `deposito_caja`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `materia_inscrita`
--
ALTER TABLE `materia_inscrita`
  ADD PRIMARY KEY (`nro_tramite`);

--
-- Indices de la tabla `notas`
--
ALTER TABLE `notas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ultimo`
--
ALTER TABLE `ultimo`
  ADD PRIMARY KEY (`nro_tramite`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `deposito_caja`
--
ALTER TABLE `deposito_caja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de la tabla `materia`
--
ALTER TABLE `materia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `notas`
--
ALTER TABLE `notas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
