-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 09 août 2023 à 07:49
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bd_php`
--

-- --------------------------------------------------------

--
-- Structure de la table `apprenants`
--

CREATE TABLE `apprenants` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `sexe` varchar(255) NOT NULL,
  `date_naissance` date NOT NULL,
  `pays` varchar(255) NOT NULL,
  `formation` varchar(255) NOT NULL,
  `tuteur` varchar(255) NOT NULL,
  `telephone` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `apprenants`
--

INSERT INTO `apprenants` (`id`, `nom`, `prenom`, `sexe`, `date_naissance`, `pays`, `formation`, `tuteur`, `telephone`) VALUES
(1, 'ZOLO', 'Eloge ', 'homme', '2018-06-08', 'RCA', 'Developpeur', 'KABORE Roch', 55663323),
(2, 'MILAMEM', 'Chatanl', 'femme', '2016-12-27', 'TCHAD', 'Developpeur', 'OUEDRAOGO Ouseini', 55332211),
(3, 'BOUDA', 'Franck', 'homme', '2017-06-07', 'Burkina Faso', 'Developpeur', 'DJERMA Aziz', 66554422),
(4, 'DAOUDA', 'Ulrich', 'homme', '2017-07-08', 'RCA', 'Developpeur', 'OUEDRAOGO Ouseini', 5225566);

-- --------------------------------------------------------

--
-- Structure de la table `tuteur`
--

CREATE TABLE `tuteur` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `sexe` varchar(255) NOT NULL,
  `telephone` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `grade` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `tuteur`
--

INSERT INTO `tuteur` (`id`, `nom`, `prenom`, `sexe`, `telephone`, `email`, `grade`) VALUES
(1, 'OUEDRAOGO', 'Ouseini', 'homme', 66552213, 'ouedraogo@gmail.com', 'Formateur web'),
(2, 'KABORE', 'Roch', 'homme', 55664422, 'roch@gmail.com', 'Formateur web'),
(3, 'DJERMA', 'Aziz', 'homme', 66552233, 'aziz@gmail.com', 'Formateur web'),
(5, 'KABRE', 'Nina', 'femme', 66332255, 'nina@gmail.com', 'Superviseur');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `apprenants`
--
ALTER TABLE `apprenants`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tuteur`
--
ALTER TABLE `tuteur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `apprenants`
--
ALTER TABLE `apprenants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `tuteur`
--
ALTER TABLE `tuteur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
