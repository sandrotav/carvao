-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 07, 2019 at 11:41 AM
-- Server version: 5.7.27-0ubuntu0.19.04.1
-- PHP Version: 7.2.19-0ubuntu0.19.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carvao`
--
CREATE DATABASE IF NOT EXISTS `carvao` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `carvao`;

-- --------------------------------------------------------

--
-- Table structure for table `fornecedor`
--

DROP TABLE IF EXISTS `fornecedor`;
CREATE TABLE IF NOT EXISTS `fornecedor` (
  `idFornecedor` int(11) NOT NULL AUTO_INCREMENT,
  `noFornecedor` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `endFornecedor` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `CidadeFornecedor` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `UfFornecedor` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `CepFornecedor` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `placaFornecedor` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `obsFornecedor` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`idFornecedor`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fornecedor`
--

INSERT INTO fornecedor (idFornecedor, noFornecedor, endFornecedor, CidadeFornecedor, UfFornecedor, CepFornecedor, placaFornecedor, obsFornecedor ) VALUES
(1, 'Jose Aparecido', 'Rua aqui'   , 'Pitangui', 'MG', '31111650', 'yyy-9999', 'teste1'),
(2, 'Jose do Santos', 'Rua Ali'    , 'Onça'    , 'MG', '31111651', 'xxx-9999', 'teste2'),
(3, 'Jose da Silva' , 'Rua Ala Ala', 'Beaga'   , 'MG', '31111652', 'zzz-9999', 'teste3');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
