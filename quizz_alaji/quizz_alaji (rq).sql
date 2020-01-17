-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 17 jan. 2020 à 09:18
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `quizz_alaji`
--

--
-- Déchargement des données de la table `questions`
--

INSERT INTO `questions` (`id_question`, `question`, `categorie`) VALUES
(1, 'Laquelle de ces réponses désigne un nom d\'oiseau ?', 'animal'),
(2, 'Trouvez lequel de ces films osé n\'existe pas ?', 'cinema'),
(3, 'Qu\'est ce que le Brexit?', 'politique'),
(4, 'quel format image est utiliser pour le web ?', 'web'),
(5, 'Qu\'est ce que le FDC ?', 'cosmologie'),
(6, 'Quelles sont les cinq couleurs des anneaux olympiques ?', 'sport');

--
-- Déchargement des données de la table `reponses`
--

INSERT INTO `reponses` (`id_reponses`, `reponse`, `juste_faux`, `id_question`) VALUES
(1, 'Marsouin', 1, 1),
(2, 'Figuier', 0, 1),
(3, 'Blanc-bec', 1, 1),
(4, 'Grouillot', 1, 1),
(5, 'Qui veut la bite de roger rapeau', 1, 2),
(6, 'Le silence des anus', 1, 2),
(7, 'Couche moi sur le sable et fais jaillir ton petrole', 0, 2),
(8, 'Blanche fesse et les sept mains', 1, 2),
(9, 'une race de chameau', 1, 3),
(10, 'une abréviation de \"British Exit\"', 0, 3),
(11, 'une boucle infini au parlement Britannique', 1, 3),
(12, 'La réponse D', 1, 3),
(13, '.ico', 1, 4),
(14, '.png', 1, 4),
(15, '.jpg', 0, 4),
(16, '.svg', 1, 4),
(17, 'Fédération Des Chasseur du Bas-Rhin', 1, 5),
(18, 'le Fond Diffus Cosmologique', 0, 5),
(19, 'Fond Départemental de Compensation du handicap', 1, 5),
(20, 'Fils De Chien', 1, 5),
(21, 'Jaune, rouge, orangé, bleu et vert', 1, 6),
(22, 'Jaune, bleu, vert, rose et violet', 1, 6),
(23, 'Jaune, vert, rouge, bleu et noir', 0, 6),
(24, 'Toute les couleurs de l\'arc-en-ciel !', 1, 6);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
