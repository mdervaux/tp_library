-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 06 fév. 2024 à 16:12
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
-- Base de données : `tp_library`
--

-- --------------------------------------------------------

--
-- Structure de la table `livre`
--

CREATE TABLE `livre` (
  `id` int(11) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `auteur` varchar(50) NOT NULL,
  `poids` int(11) DEFAULT NULL,
  `taille` int(11) DEFAULT NULL,
  `id_type_livre` int(11) NOT NULL,
  `emprunte` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `livre`
--

INSERT INTO `livre` (`id`, `titre`, `auteur`, `poids`, `taille`, `id_type_livre`, `emprunte`) VALUES
(1, 'Le Seigneur des Anneaux', 'J.R.R. Tolkien', 2, NULL, 1, 0),
(2, 'Harry Potter à l\'école des sorciers', 'J.K. Rowling', 1, NULL, 1, 0),
(3, '1984', 'George Orwell', NULL, 15, 2, 1),
(4, 'L\'Alchimiste', 'Paulo Coelho', NULL, 16, 2, 0),
(5, 'Le Petit Prince', 'Antoine de Saint-Exupéry', 1, NULL, 1, 0),
(6, 'The Catcher in the Rye', 'J.D. Salinger', NULL, 14, 2, 0),
(7, 'Don Quixote', 'Miguel de Cervantes', 1, NULL, 1, 0),
(8, 'Les Misérables', 'Victor Hugo', 2, NULL, 1, 0),
(9, 'The Great Gatsby', 'F. Scott Fitzgerald', NULL, 17, 2, 0),
(10, 'To Kill a Mockingbird', 'Harper Lee', 1, NULL, 1, 0);

-- --------------------------------------------------------

--
-- Structure de la table `pret`
--

CREATE TABLE `pret` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `id_livre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `intitule` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`id`, `intitule`) VALUES
(1, 'Admin'),
(2, 'Membre');

-- --------------------------------------------------------

--
-- Structure de la table `type_livre`
--

CREATE TABLE `type_livre` (
  `id` int(11) NOT NULL,
  `intitule` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `type_livre`
--

INSERT INTO `type_livre` (`id`, `intitule`) VALUES
(1, 'Physique'),
(2, 'Numérique');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `nom_utilisateur` varchar(50) NOT NULL,
  `mot_de_passe` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `id_role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom_utilisateur`, `mot_de_passe`, `email`, `id_role`) VALUES
(1, 'admin_master', 'azerty', 'admin@example.com', 1),
(2, 'john_doe', 'azerty', 'john.doe@example.com', 2),
(3, 'jane_smith', 'azerty', 'jane.smith@example.com', 2),
(4, 'admin_support', 'azerty', 'support@admin.com', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `livre`
--
ALTER TABLE `livre`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_type_livre` (`id_type_livre`);

--
-- Index pour la table `pret`
--
ALTER TABLE `pret`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_livre` (`id_livre`),
  ADD KEY `fk_utilisateur` (`id_utilisateur`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `type_livre`
--
ALTER TABLE `type_livre`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_role` (`id_role`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `livre`
--
ALTER TABLE `livre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `pret`
--
ALTER TABLE `pret`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `type_livre`
--
ALTER TABLE `type_livre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `livre`
--
ALTER TABLE `livre`
  ADD CONSTRAINT `fk_type_livre` FOREIGN KEY (`id_type_livre`) REFERENCES `type_livre` (`id`);

--
-- Contraintes pour la table `pret`
--
ALTER TABLE `pret`
  ADD CONSTRAINT `fk_livre` FOREIGN KEY (`id_livre`) REFERENCES `livre` (`id`),
  ADD CONSTRAINT `fk_utilisateur` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id`);

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `fk_role` FOREIGN KEY (`id_role`) REFERENCES `role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
