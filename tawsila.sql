-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 13, 2022 at 11:26 AM
-- Server version: 5.7.31
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tawsila`
--

-- --------------------------------------------------------

--
-- Table structure for table `livraison`
--

DROP TABLE IF EXISTS `livraison`;
CREATE TABLE IF NOT EXISTS `livraison` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone` int(50) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `etat` varchar(20) NOT NULL DEFAULT 'EnCours',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `livraison`
--

INSERT INTO `livraison` (`id`, `nom`, `email`, `telephone`, `adresse`, `etat`) VALUES
(3, 'aa', 'aahmed@gmail.com', 122, 'aaa', 'Valider'),
(4, 'my name', 'email@gmail.cpm', 211, 'addresse', 'Valider'),
(5, 'aa', 'aa@gmail.com', 21123112, 'aaa', 'Valider'),
(6, 'aa', 'aa@g.com', 21113443, 'aa', 'EnCours'),
(7, 'aaa', 'ahmed@gmail.com', 21113111, 'aaa', 'EnCours');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
