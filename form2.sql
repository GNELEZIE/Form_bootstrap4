-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  sam. 06 avr. 2019 à 11:18
-- Version du serveur :  10.1.37-MariaDB
-- Version de PHP :  7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `form2`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) COLLATE utf8_unicode_520_ci NOT NULL,
  `prenom` varchar(50) COLLATE utf8_unicode_520_ci NOT NULL,
  `sexe` varchar(10) COLLATE utf8_unicode_520_ci NOT NULL,
  `date` varchar(30) COLLATE utf8_unicode_520_ci NOT NULL,
  `com` varchar(100) COLLATE utf8_unicode_520_ci NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `sexe`, `date`, `com`, `image`) VALUES
(1, 'GNELEZIE', 'ZIE', 'Abobo', '2019-04-26', 'HOMME', 'AfficheAeep1.png'),
(2, 'GNELEZIEg', 'Gnelezie Arouna', 'Adjame', '2019-04-07', 'HOMME', 'Prof2.jpg'),
(3, 'GNELEZIEg54', 'ZIE', 'Abobo', '2019-04-19', 'HOMME', 'AfficheAeep.png'),
(4, 'merci', 'DOKOLIO', 'Abobo', '2019-04-13', 'HOMME', 'carteAeep1.png'),
(5, 'KONE', 'ZIE', 'cocody', '2019-04-24', 'HOMME', 'Prof2.jpg'),
(6, 'mercim', 'ZIE', 'Abobo', '2019-04-19', 'HOMME', 'Leti.jpg'),
(7, 'GNELEZIEk', '', 'Adjame', '2019-04-10', 'HOMME', 'CharleT.png'),
(8, 'GNELEZIEpp', 'Gnelezie Arouna', 'Abobo', '2019-04-17', 'HOMME', 'AfficheAeep.png'),
(9, 'GNELEZIEÃ¹', 'Gnelezie Arouna', 'Adjame', '2019-04-16', 'HOMME', 'carteAeep1.png');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
