-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : sam. 06 août 2022 à 18:58
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `shop_city`
--

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `id_produit` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prix` varchar(10) NOT NULL,
  `quantite_en_stock` int(11) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id_produit`, `nom`, `prix`, `quantite_en_stock`, `description`, `image`) VALUES
(9, 'Chaussure Adidas ', '109 $', 50, 'Hausse des températures prévue cette saison sur l\'échelle de la mode chez Adidas Originals avec cette basket basse. Une fusion réussie de modernité et de caractère.', 'https://photos6.shoes.fr/photos/188/18898694/18898694_200_A.jpg'),
(10, 'Nike Victori Benassi', '29 $', 58, 'La Nike Victori One revisite un classique qui vous accompagnera de la plage aux gradins. Légère, confortable et agréable sous le pied, elle présente une nouvelle mousse plus souple pour un confort optimal. Sa semelle intérieure profilée dotée d\'un motif d\'adhérence enveloppe et maintient parfaitement votre pied en place. Le large strap rembourré est aussi confortable que stylé.', 'https://photos6.shoes.fr/photos/190/19008114/19008114_500_A.jpg'),
(12, 'Chaussures De BasketBall', '45 $', 52, 'Chaussures De BasketBall Hommes Nouveau Chaussures', 'https://www.cdiscount.com/pdt2/4/9/6/1/700x700/mp44969496/rw/chaussures-de-basketball-hommes-nouveau-chaussures.jpg'),
(13, 'Richelieu Brogue', '170$', 30, 'Ce Richelieu présente un bout droit fleuri et un jeu de perforations qui lui confère une alllure moins formelle.\r\nLa surpiqure vient dessiner un plastron qui permet à ce semi-brogue de se distinguer.\r\nLes finitions de couleurs de patines sont réalisées à la main et donnent un aspect unique à chaque paire.', 'https://www.loding.fr/5155-big_default/chaussures-richelieu-brogue-bout-fleuri-317-soleto.jpg'),
(14, 'Sneakers Lioni 717', '150 $', 20, 'Ces sneakers se distinguent par son empiècement de couleur en veau velours sur le cadre au LodinG perforé.', 'https://www.loding.fr/4885-big_default/sneaker-confort-en-cuir-pour-homme-made-in-italy.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `username`, `password`, `email`) VALUES
(1, 'sofiane', 'admin@123', ''),
(2, 'admin', 'admin@123', 'admin@gmail.com'),
(3, 'Bessel', 'bessel@123', 'bessel@bessel.org'),
(4, 'Sofiane', 'azerty', 'sofiane@sofiane.org');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id_produit`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `id_produit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
