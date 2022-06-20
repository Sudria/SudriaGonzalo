-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2022 at 11:45 PM
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
('Gonzalo', 'cattaneo', 2, 0, ' prueba 1 2 3', 'sudria.gonzalo@gmail.com', '03794403693', 1),
('jose', 'cattaneo', 3, 0, ' mensaje de usuario sin registrar', 'sudria.gonzalo@gmail.com', '03794403693', 0),
('Gonzalo', 'cattaneo', 4, 34, ' asdasda', 'sudria.gonzalo@gmail.com', '0379440369', 0),
('Gonzalo', 'cattaneo', 5, 34, ' prueba usuario registrado', 'sudria.gonzalo@gmail.com', '0379440369', 1),
('Gonzalo', 'cattaneo', 6, 34, ' Probando msj largo.Probando msj largo.Probando msj largo.Probando msj largo.Probando msj largo.Probando msj largo.Probando msj largo.Probando msj largo.', 'sudria.gonzalo@gmail.com', '0379440369', 0);

-- --------------------------------------------------------

--
-- Table structure for table `detalles`
--

CREATE TABLE `detalles` (
  `idProducto` int(10) NOT NULL,
  `idFactura` int(10) NOT NULL,
  `cantidad` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detalles`
--

INSERT INTO `detalles` (`idProducto`, `idFactura`, `cantidad`) VALUES
(8, 71, 1),
(8, 72, 1),
(8, 73, 1),
(8, 74, 1),
(8, 75, 2),
(9, 74, 1),
(9, 75, 2),
(10, 71, 2),
(10, 72, 2),
(10, 73, 2),
(10, 74, 1),
(10, 75, 1),
(11, 75, 1),
(12, 71, 1),
(12, 72, 1),
(12, 73, 1),
(12, 75, 1);

-- --------------------------------------------------------

--
-- Table structure for table `facturas`
--

CREATE TABLE `facturas` (
  `id` int(10) NOT NULL,
  `idUsuario` int(10) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facturas`
--

INSERT INTO `facturas` (`id`, `idUsuario`, `fecha`) VALUES
(71, 34, '2022-06-16 16:48:03'),
(72, 34, '2022-06-16 17:18:05'),
(73, 34, '2022-06-16 17:19:03'),
(74, 37, '2022-06-20 13:45:00'),
(75, 39, '2022-06-20 18:43:06');

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
  `estado` tinyint(1) NOT NULL DEFAULT 1,
  `imagen` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`id`, `titulo`, `descripcion`, `categoria`, `precio`, `stock`, `estado`, `imagen`) VALUES
(8, 'Cactus espinas', 'cactus copado modificado', 'cactus', 250, 200, 1, 'cactus_2.jpg'),
(9, 'Planta', 'Planta copada', 'planta', 200, 40, 1, 'pla.jpg'),
(10, 'Suculenta', 'Suculenta copada', 'suculenta', 200, 40, 1, 'suc.jpg'),
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
  `rol` int(1) NOT NULL DEFAULT 0,
  `estado` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`nombre`, `apellido`, `email`, `direccion`, `telefono`, `usuario`, `dni`, `contra`, `id`, `rol`, `estado`) VALUES
('Gonzalo', 'Sudria', 'sudria.gonzalo@gmail.com', 'misiones 1387', '0379440369', 'bimbitou', '40049564', '$2y$10$lLykaIb8woF3zJl1onb4S.u1hIPm9hIizttWYOkdoHF6Qf8PgLWE6', 34, 1, 1),
('Tincho', 'Marti', 'tincho@gmail.co', 'asdasdas 138', '011123456', 'tinch', '4004956', '$2y$10$l6y4x7/7a22nScqHX6OJ2OZEW2eljXrMnSIUt0jyGhCTDdKUrOfOy', 35, 0, 1),
('jose', 'prueba', 'akjsndjas@asdas.com', 'misiones 1387', '0379440369', 'joseig', '40049563', '$2y$10$9o8cgHHeEe2flGoJhXr32OPK6BulhJ/o/YsfMlq162O7APFPKrZBC', 36, 0, 1),
('admin', 'admin', 'admin@admin.com', 'admin admin', '0379440369', 'admin', '54548948', '$2y$10$LXJseYvhxsA//7.J48vvNOLi.8WQ6AoxmJCI8bxLqh8WSzAoT7Bcq', 37, 1, 1),
('Gonzalo', 'cattaneo', 'sudria@gmail.com', 'misiones 1387', '0379440369', 'bimbi', '54645214', '$2y$10$PnmaymDk1x4.sT4dtNQFiOXofeM1kdgLPx2wh8Ft15uTZNY91Wnbm', 38, 0, 0),
('jose', 'cattaneo', 'asdasd@gmail.com', 'asdasd asdasd', '0379440369', 'asdasdasd', '40049569', '$2y$10$zz53Ba5xHYL0w/hpitD8Fergf8BDBVeLah36m37FJbj6rdCV2lfma', 39, 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `consultas`
--
ALTER TABLE `consultas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detalles`
--
ALTER TABLE `detalles`
  ADD PRIMARY KEY (`idProducto`,`idFactura`),
  ADD KEY `idFactura` (`idFactura`);

--
-- Indexes for table `facturas`
--
ALTER TABLE `facturas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUsuario` (`idUsuario`);

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
-- AUTO_INCREMENT for table `facturas`
--
ALTER TABLE `facturas`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detalles`
--
ALTER TABLE `detalles`
  ADD CONSTRAINT `detalles_ibfk_1` FOREIGN KEY (`idFactura`) REFERENCES `facturas` (`id`),
  ADD CONSTRAINT `detalles_ibfk_2` FOREIGN KEY (`idProducto`) REFERENCES `productos` (`id`);

--
-- Constraints for table `facturas`
--
ALTER TABLE `facturas`
  ADD CONSTRAINT `facturas_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
