-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-11-2025 a las 23:04:07
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_granero`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `cli_nit` varchar(15) NOT NULL,
  `cli_dir` varchar(100) NOT NULL,
  `cli_tel` varchar(30) NOT NULL,
  `cli_correo` varchar(60) NOT NULL,
  `cli_nombre_contacto` varchar(30) NOT NULL,
  `cli_estado` varchar(10) NOT NULL,
  `Cli_fecha_crea` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Cli_usu_crea` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_factura`
--

CREATE TABLE `detalle_factura` (
  `dfact_id` int(11) NOT NULL,
  `fact_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `pro_precio` double NOT NULL,
  `drres_cantidad` double NOT NULL,
  `drres_subtotal` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `detalle_factura`
--

INSERT INTO `detalle_factura` (`dfact_id`, `fact_id`, `pro_id`, `pro_precio`, `drres_cantidad`, `drres_subtotal`) VALUES
(1, 1, 1, 1400, 1, 2800);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `fact_id` int(11) NOT NULL,
  `fact_fechaDB` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `fact_fecha` date NOT NULL,
  `cli_nit` varchar(15) NOT NULL,
  `fact_observaciones` blob NOT NULL,
  `usu_crea` varchar(15) NOT NULL,
  `fact_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `pro_id` int(11) NOT NULL,
  `pro_nombre` varchar(30) NOT NULL,
  `pro_precio` double NOT NULL,
  `pro_estado` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`pro_id`, `pro_nombre`, `pro_precio`, `pro_estado`) VALUES
(1, 'Azucar', 2400, 'Activo'),
(2, 'Sal', 1400, 'Activo'),
(3, 'Big cola', 1600, 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `usu_id` int(40) NOT NULL,
  `usu_identificacion` int(50) NOT NULL,
  `usu_pass` varchar(50) NOT NULL,
  `usu_nombre` text NOT NULL,
  `usu_apellido` text NOT NULL,
  `usu_email` varchar(50) NOT NULL,
  `usu_tel` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usu_id`, `usu_identificacion`, `usu_pass`, `usu_nombre`, `usu_apellido`, `usu_email`, `usu_tel`) VALUES
(1, 1144599766, 'sasalele123', 'juan', 'ocampo', 'juancami44@hotmail.com', 231456809);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usu_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usu_id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
