-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2022 at 09:35 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `espinnitas`
--

-- --------------------------------------------------------

--
-- Table structure for table `consultas`
--

CREATE TABLE `consultas` (
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `id` int(10) NOT NULL,
  `usuarioId` int(100) NOT NULL,
  `mensaje` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `consultas`
--

INSERT INTO `consultas` (`nombre`, `apellido`, `id`, `usuarioId`, `mensaje`, `email`, `telefono`, `estado`) VALUES
('Gonzalo', 'cattaneo', 2, 0, ' prueba 1 2 3', 'sudria.gonzalo@gmail.com', '03794403693', 0),
('jose', 'cattaneo', 3, 0, ' mensaje de usuario sin registrar', 'sudria.gonzalo@gmail.com', '03794403693', 0),
('Gonzalo', 'cattaneo', 4, 34, ' asdasda', 'sudria.gonzalo@gmail.com', '0379440369', 0),
('Gonzalo', 'cattaneo', 5, 34, ' prueba usuario registrado', 'sudria.gonzalo@gmail.com', '0379440369', 1),
('Gonzalo', 'cattaneo', 6, 34, ' Probando msj largo.Probando msj largo.Probando msj largo.Probando msj largo.Probando msj largo.Probando msj largo.Probando msj largo.Probando msj largo.', 'sudria.gonzalo@gmail.com', '0379440369', 0);

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `id` int(15) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `categoria` varchar(9) NOT NULL,
  `precio` float NOT NULL,
  `stock` int(6) NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT 1,
  `imagen` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`id`, `titulo`, `descripcion`, `categoria`, `precio`, `stock`, `activo`, `imagen`) VALUES
(8, 'Cactus espinas', 'cactus copado modificado', 'cactus', 250, 200, 1, 'cactus_2.jpg'),
(9, 'Planta', 'Planta copada', 'planta', 200, 40, 1, 'pla.jpg'),
(10, 'Suculenta', 'Suculenta copada', 'suculenta', 200, 40, 0, 'suc.jpg'),
(11, 'Opuntia', ' Cactus Lindo', 'cactus', 800, 20, 1, 'cactus.jpg'),
(12, 'Garra de oso', 'Garra de oso muy linda ', 'cactus', 300, 30, 1, 'cactus_1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `direccion` varchar(40) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `dni` varchar(8) NOT NULL,
  `contra` varchar(100) NOT NULL,
  `id` int(11) NOT NULL,
  `rol` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`nombre`, `apellido`, `email`, `direccion`, `telefono`, `usuario`, `dni`, `contra`, `id`, `rol`) VALUES
('Gonzalo', 'Sudria', 'sudria.gonzalo@gmail.com', 'misiones 1387', '0379440369', 'bimbitou', '40049564', '$2y$10$lLykaIb8woF3zJl1onb4S.u1hIPm9hIizttWYOkdoHF6Qf8PgLWE6', 34, 1),
('Tincho', 'Marti', 'tincho@gmail.co', 'asdasdas 138', '011123456', 'tinch', '4004956', '$2y$10$l6y4x7/7a22nScqHX6OJ2OZEW2eljXrMnSIUt0jyGhCTDdKUrOfOy', 35, 0),
('jose', 'prueba', 'akjsndjas@asdas.com', 'misiones 1387', '0379440369', 'joseig', '40049563', '$2y$10$9o8cgHHeEe2flGoJhXr32OPK6BulhJ/o/YsfMlq162O7APFPKrZBC', 36, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `consultas`
--
ALTER TABLE `consultas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `consultas`
--
ALTER TABLE `consultas`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
