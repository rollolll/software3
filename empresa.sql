-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-11-2020 a las 04:31:58
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `empresa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_empresa`
--

CREATE TABLE `datos_empresa` (
  `Nit` int(11) NOT NULL,
  `Nombre_emp` text NOT NULL,
  `Telefono` varchar(15) NOT NULL,
  `Direccion` varchar(20) NOT NULL,
  `Ciudad` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datos_empresa`
--

INSERT INTO `datos_empresa` (`Nit`, `Nombre_emp`, `Telefono`, `Direccion`, `Ciudad`) VALUES
(1, 'Jorge SA', '123456', 'calle 72 k', 'Cali'),
(2, 'YakaSaS', '123456', 'asasassas', 'bogota'),
(3, 'arteria', '123456798', 'kkkkkkk', 'bogotA'),
(13, 'xdxdxdxdxdxd', '123123213213123', '321321313', 'armenia'),
(14, 'xdxdxdxdxdxd', '123123213213123', '321321313', 'armenia'),
(15, 'xdxdxdxdxdxd', '999999999999', '321321313', 'armenia'),
(16, '', '', '', ''),
(1111, '1111', '1111', '111', '11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `tipo_doc` varchar(255) NOT NULL,
  `doc_usuario` int(10) NOT NULL,
  `nombre_usuario` varchar(255) NOT NULL,
  `apellido_usuario` varchar(255) NOT NULL,
  `direccion_usuario` varchar(255) NOT NULL,
  `telefono_usuario` int(10) NOT NULL,
  `email_usuario` varchar(255) NOT NULL,
  `contrasenio_usuario` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`tipo_doc`, `doc_usuario`, `nombre_usuario`, `apellido_usuario`, `direccion_usuario`, `telefono_usuario`, `email_usuario`, `contrasenio_usuario`) VALUES
('CC', 12344, 'lina', 'prueba', 'cali', 3215457, 'lina2@gmail.com', '1234'),
('CC', 12345, 'lina', 'prueba2', 'cali', 3215457, 'lina3@gmail.com', '1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos_empresa`
--
ALTER TABLE `datos_empresa`
  ADD PRIMARY KEY (`Nit`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`doc_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos_empresa`
--
ALTER TABLE `datos_empresa`
  MODIFY `Nit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1112;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
