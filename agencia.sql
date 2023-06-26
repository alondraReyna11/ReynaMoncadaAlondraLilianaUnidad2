-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2023 at 05:05 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agencia`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `ID` int(11) NOT NULL,
  `correoElectronico` varchar(50) DEFAULT NULL,
  `Contrasena` varchar(50) DEFAULT NULL,
  `ID_Registro` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ID`, `correoElectronico`, `Contrasena`, `ID_Registro`) VALUES
(1, 'aleemoralestorres@outlook.com', '123456', 118),
(2, 'aleemoralestorres@outlook.com', '1234', 119);

-- --------------------------------------------------------

--
-- Table structure for table `lugaresturisticos`
--

CREATE TABLE `lugaresturisticos` (
  `estado` varchar(250) DEFAULT NULL,
  `municipio` varchar(250) NOT NULL,
  `lugar_turistico` varchar(80) NOT NULL,
  `precio` varchar(90) NOT NULL,
  `img` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Dumping data for table `lugaresturisticos`
--

INSERT INTO `lugaresturisticos` (`estado`, `municipio`, `lugar_turistico`, `precio`, `img`) VALUES
('SAN LUIS POTOSÍ', ' Aquismón, Axtla de Terrazas, Ciudad Valles, Coxcatlán, Ébano, El Naranjo, Huehuetlán, Matlapa, San Antonio, San Martín Chalchicuautla, San Vicente Tancuayalab, Tamasopo, Tamazunchale, Tampacán, Tampamolón Corona, Tamuín, Tancanhuitz de Santos, Tanla', 'HUASTECA POTOSINA', '$6000', 'https://moreliatravel.com/wp-content/uploads/2022/04/Huasteca-Potosina-9.jpg'),
('JALISCO', 'PUERTO VALLARTA', 'MUELLE DE PLAYA LOS MUERTOS', '7000', 'https://tipsparatuviaje.com/wp-content/uploads/2016/08/playa-los-muertos-buceo.png'),
('YUCATÁN', 'TINUM ', 'CHICHEN ITZA', '10000', 'https://dexter.cancunairporttransportations.com/vendor/blog/gallery/2021/07/chichen-itza-mexico.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `registro`
--

CREATE TABLE `registro` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Apellido` varchar(50) DEFAULT NULL,
  `FechaNacimiento` date DEFAULT NULL,
  `Direccion` varchar(100) DEFAULT NULL,
  `CorreoElectronico` varchar(100) DEFAULT NULL,
  `Telefono` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registro`
--

INSERT INTO `registro` (`ID`, `Nombre`, `Apellido`, `FechaNacimiento`, `Direccion`, `CorreoElectronico`, `Telefono`) VALUES
(4, 'Alondra LILIANA', 'REYNA MONCADA', '2000-10-11', 'saltillo', 'alondra28rm@gmail.com', '8444595274'),
(6, 'Alondra LILIANA', 'REYNA MONCADA', '2000-10-11', 'saltillo', 'alondra28rm@gmail.com', '8444595274'),
(7, 'Alondra LILIANA', 'REYNA MONCADA', '2000-10-11', 'saltillo', 'alondra28rm@gmail.com', '8444595274'),
(8, 'Alondra LILIANA', 'REYNA MONCADA', '2000-10-11', 'saltillo', 'alondra28rm@gmail.com', '8444595274'),
(9, 'Alondra LILIANA', 'REYNA MONCADA', '2000-10-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(10, 'Alondra LILIANA', 'REYNA MONCADA', '2000-10-11', 'saltillo', 'REYNAALO1110@GMAIL.COM', '8444595274'),
(11, 'Alondra LILIANA', 'REYNA MONCADA', '2000-10-11', 'saltillo', 'REYNAALO1110@GMAIL.COM', '8444595274'),
(12, 'Alondra LILIANA', 'REYNA MONCADA', '0001-11-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(13, 'Alondra LILIANA', 'REYNA MONCADA', '0001-11-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(14, 'Alondra LILIANA', 'REYNA MONCADA', '0001-11-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(15, 'Alondra LILIANA', 'REYNA MONCADA', '0001-11-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(16, 'Alondra LILIANA', 'REYNA MONCADA', '0001-11-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(17, 'Alondra LILIANA', 'REYNA MONCADA', '0001-11-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(18, 'Alondra LILIANA', 'REYNA MONCADA', '0001-11-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(20, 'Alondra LILIANA', 'REYNA MONCADA', '0001-11-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(22, 'Alondra LILIANA', 'REYNA MONCADA', '0001-11-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(27, 'Alondra LILIANA', 'REYNA MONCADA', '0001-11-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(28, 'Alondra LILIANA', 'REYNA MONCADA', '0001-11-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(29, 'Alondra LILIANA', 'REYNA MONCADA', '0001-11-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(30, 'Alondra LILIANA', 'REYNA MONCADA', '0001-11-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(31, 'Alondra LILIANA', 'REYNA MONCADA', '0001-11-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(32, 'Alondra LILIANA', 'REYNA MONCADA', '0001-11-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(33, 'Alondra LILIANA', 'REYNA MONCADA', '0001-11-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(34, 'Alondra LILIANA', 'REYNA MONCADA', '0001-11-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(35, 'Alondra LILIANA', 'REYNA MONCADA', '0001-11-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(36, 'Alondra LILIANA', 'REYNA MONCADA', '0001-11-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(37, 'Alondra LILIANA', 'REYNA MONCADA', '0001-11-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(38, 'Alondra LILIANA', 'REYNA MONCADA', '0001-11-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(39, 'Alondra LILIANA', 'REYNA MONCADA', '0001-11-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(40, 'Alondra LILIANA', 'REYNA MONCADA', '0001-11-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(41, 'Alondra LILIANA', 'REYNA MONCADA', '0001-11-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(42, 'Alondra LILIANA', 'REYNA MONCADA', '0001-11-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(43, 'Alondra LILIANA', 'REYNA MONCADA', '0001-11-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(44, 'Alondra LILIANA', 'REYNA MONCADA', '0001-11-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(45, 'Alondra LILIANA', 'REYNA MONCADA', '0001-11-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(46, 'Alondra LILIANA', 'REYNA MONCADA', '0001-11-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(47, 'Alondra LILIANA', 'REYNA MONCADA', '0001-11-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(48, 'Alondra LILIANA', 'REYNA MONCADA', '0001-11-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(49, 'Alondra LILIANA', 'REYNA MONCADA', '0001-11-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(50, 'Alondra LILIANA', 'REYNA MONCADA', '0001-11-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(51, 'Alondra LILIANA', 'REYNA MONCADA', '0001-11-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(52, 'Alondra LILIANA', 'REYNA MONCADA', '0001-11-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(53, 'Alondra LILIANA', 'REYNA MONCADA', '0001-11-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(54, 'Alondra LILIANA', 'REYNA MONCADA', '0001-11-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(55, 'Alondra LILIANA', 'REYNA MONCADA', '0001-11-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(56, 'Alondra LILIANA', 'REYNA MONCADA', '0001-11-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(57, 'Alondra LILIANA', 'REYNA MONCADA', '0001-11-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(58, 'Alondra LILIANA', 'REYNA MONCADA', '0001-11-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(59, 'Alondra LILIANA', 'REYNA MONCADA', '0001-11-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(60, 'Alondra LILIANA', 'REYNA MONCADA', '0001-11-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(61, 'Alondra LILIANA', 'REYNA MONCADA', '0001-11-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(62, 'Alondra LILIANA', 'REYNA MONCADA', '0001-11-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(63, 'Alondra LILIANA', 'REYNA MONCADA', '0001-11-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(64, 'Alondra LILIANA', 'REYNA MONCADA', '0001-11-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(65, 'Alondra LILIANA', 'REYNA MONCADA', '0001-11-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(66, 'Alondra LILIANA', 'REYNA MONCADA', '0001-11-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(67, 'Alondra LILIANA', 'REYNA MONCADA', '0001-11-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(68, 'Alondra LILIANA', 'REYNA MONCADA', '0001-11-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(69, 'Alondra LILIANA', 'REYNA MONCADA', '0001-11-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(70, 'Alondra LILIANA', 'REYNA MONCADA', '0001-11-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(71, 'Alondra LILIANA', 'REYNA MONCADA', '0001-11-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(72, 'Alondra LILIANA', 'REYNA MONCADA', '0001-11-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(73, 'Alondra LILIANA', 'REYNA MONCADA', '0001-11-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(74, 'Alondra LILIANA', 'REYNA MONCADA', '0001-11-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(75, 'Alondra LILIANA', 'REYNA MONCADA', '0001-11-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(76, 'Alondra LILIANA', 'REYNA MONCADA', '0001-11-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(77, 'Alondra LILIANA', 'REYNA MONCADA', '0001-11-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(78, 'Alondra LILIANA', 'REYNA MONCADA', '0001-11-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(79, 'Alondra LILIANA', 'REYNA MONCADA', '0001-11-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(80, 'Alondra LILIANA', 'REYNA MONCADA', '0001-11-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(81, 'Alondra LILIANA', 'REYNA MONCADA', '0001-11-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(82, 'Alondra LILIANA', 'REYNA MONCADA', '0001-11-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(83, 'Alondra LILIANA', 'REYNA MONCADA', '0001-11-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(84, 'Alondra LILIANA', 'REYNA MONCADA', '0001-11-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(85, 'Alondra LILIANA', 'REYNA MONCADA', '0001-11-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(86, 'Alondra LILIANA', 'REYNA MONCADA', '0001-11-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(87, 'Alondra LILIANA', 'REYNA MONCADA', '0001-11-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(88, 'Alondra LILIANA', 'REYNA MONCADA', '0001-11-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(89, 'Alondra LILIANA', 'REYNA MONCADA', '0001-11-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(90, 'Alondra LILIANA', 'REYNA MONCADA', '0001-11-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(91, 'Alondra LILIANA', 'REYNA MONCADA', '0001-11-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(92, 'Alondra LILIANA', 'REYNA MONCADA', '0001-11-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(93, 'Alondra LILIANA', 'REYNA MONCADA', '0001-11-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(94, 'Alondra LILIANA', 'REYNA MONCADA', '0001-11-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(95, 'Alondra LILIANA', 'REYNA MONCADA', '0001-11-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(96, 'Alondra LILIANA', 'REYNA MONCADA', '0001-11-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(97, 'Alondra LILIANA', 'REYNA MONCADA', '0001-11-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(98, 'Alondra LILIANA', 'REYNA MONCADA', '0001-11-11', 'saltillo', 'alo28rm@gmail.com', '8444595274'),
(99, 'Alondra LILIANA', 'REYNA MONCADA', '2023-05-11', 'saltillo', 'REYNAALO1110@GMAIL.COM', '8444595274'),
(100, 'Alondra LILIANA', 'REYNA MONCADA', '2023-05-11', 'saltillo', 'REYNAALO1110@GMAIL.COM', '8444595274'),
(101, 'Alondra LILIANA', 'REYNA MONCADA', '2023-05-11', 'saltillo', 'REYNAALO1110@GMAIL.COM', '8444595274'),
(102, 'Alondra LILIANA', 'REYNA MONCADA', '2023-05-11', 'saltillo', 'REYNAALO1110@GMAIL.COM', '8444595274'),
(103, 'Alondra LILIANA', 'REYNA MONCADA', '2023-05-11', 'saltillo', 'REYNAALO1110@GMAIL.COM', '8444595274'),
(104, 'Alondra LILIANA', 'REYNA MONCADA', '2023-05-11', 'saltillo', 'REYNAALO1110@GMAIL.COM', '8444595274'),
(105, 'Alondra LILIANA', 'REYNA MONCADA', '2023-05-11', 'saltillo', 'REYNAALO1110@GMAIL.COM', '8444595274'),
(106, 'Alondra LILIANA', 'REYNA MONCADA', '2023-05-11', 'saltillo', 'REYNAALO1110@GMAIL.COM', '8444595274'),
(107, 'Alondra LILIANA', 'REYNA MONCADA', '2023-05-11', 'saltillo', 'REYNAALO1110@GMAIL.COM', '8444595274'),
(108, 'Alondra LILIANA', 'REYNA MONCADA', '2023-05-11', 'saltillo', 'REYNAALO1110@GMAIL.COM', '8444595274'),
(109, 'Alondra LILIANA', 'REYNA MONCADA', '2023-05-11', 'saltillo', 'REYNAALO1110@GMAIL.COM', '8444595274'),
(110, 'Alondra LILIANA', 'REYNA MONCADA', '2023-05-11', 'saltillo', 'REYNAALO1110@GMAIL.COM', '8444595274'),
(111, 'Alondra LILIANA', 'REYNA MONCADA', '2023-05-11', 'saltillo', 'REYNAALO1110@GMAIL.COM', '8444595274'),
(112, 'Alondra LILIANA', 'REYNA MONCADA', '2023-05-11', 'saltillo', 'REYNAALO1110@GMAIL.COM', '8444595274'),
(113, 'Alondra LILIANA', 'REYNA MONCADA', '2023-05-11', 'saltillo', 'REYNAALO1110@GMAIL.COM', '8444595274'),
(114, 'Alondra LILIANA', 'REYNA MONCADA', '2023-05-11', 'saltillo', 'REYNAALO1110@GMAIL.COM', '8444595274'),
(115, 'Alondra LILIANA', 'REYNA MONCADA', '2023-05-11', 'saltillo', 'REYNAALO1110@GMAIL.COM', '8444595274'),
(116, 'Alondra LILIANA', 'REYNA MONCADA', '2023-05-11', 'saltillo', 'REYNAALO1110@GMAIL.COM', '8444595274'),
(117, 'Alondra LILIANA', 'REYNA MONCADA', '2023-05-11', 'saltillo', 'REYNAALO1110@GMAIL.COM', '8444595274'),
(118, 'alejandra', 'morales', '2001-08-16', 'ramos arizpe', 'aleemoralestorres@outlook.com', '8445278962'),
(119, 'Alejandra ', 'Morales ', '2001-08-16', 'Ramos Arizpe', 'aleemoralestorres@outlook.com', '8445278962');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_Registro` (`ID_Registro`);

--
-- Indexes for table `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registro`
--
ALTER TABLE `registro`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`ID_Registro`) REFERENCES `registro` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
