-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 19, 2022 at 04:53 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinema`
--

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

DROP TABLE IF EXISTS `film`;
CREATE TABLE IF NOT EXISTS `film` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_film` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `auteur_film` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `producteur_film` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_de_production` date NOT NULL,
  `date_de_publication` date NOT NULL,
  `creer_par` int(11) NOT NULL,
  `creer_le` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id`, `nom_film`, `auteur_film`, `producteur_film`, `date_de_production`, `date_de_publication`, `creer_par`, `creer_le`) VALUES
(1, 'Nom 1', 'Auteur 1', 'Producteur 1', '2022-04-19', '2022-04-19', 1, '2022-04-19'),
(3, 'Nom 2', 'Auteur 2', 'Producteur 2', '2022-04-19', '2022-05-07', 1, '2022-04-19'),
(4, 'Nom 3', 'Auteur 3', 'Producteur 3', '2022-04-19', '2022-04-19', 1, '2022-04-19'),
(5, 'Nom 4', 'Auteur 4', 'Producteur 4', '2022-04-19', '2022-04-19', 1, '2022-04-19');

-- --------------------------------------------------------

--
-- Table structure for table `proprietaire`
--

DROP TABLE IF EXISTS `proprietaire`;
CREATE TABLE IF NOT EXISTS `proprietaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom_utilisateur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proprietaire`
--

INSERT INTO `proprietaire` (`id`, `nom`, `prenom`, `nom_utilisateur`, `password`, `email`, `roles`) VALUES
(1, 'AHADJITSE', 'Yawo Florent', 'Flore', '$2y$13$52USTeaqN57AmxZgZECtBub7jHmHB.bE7f6G5dFbfyZhbzuOZ2f0u', 'flore@email.com', '[]');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
