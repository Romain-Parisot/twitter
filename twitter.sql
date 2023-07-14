-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : sam. 16 avr. 2022 à 18:47
-- Version du serveur :  5.7.24
-- Version de PHP : 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `twitter`
--

-- --------------------------------------------------------

--
-- Structure de la table `tweets`
--

CREATE TABLE `tweets` (
  `tweet_id` int(12) NOT NULL,
  `tweet_ctn` varchar(280) NOT NULL,
  `tweet_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tweet_users_id` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tweets`
--

INSERT INTO `tweets` (`tweet_id`, `tweet_ctn`, `tweet_date`, `tweet_users_id`) VALUES
(1, 'hello world', '2022-04-13 13:21:35', 1),
(2, 'test', '2022-04-13 13:22:51', 1),
(3, 'tweet2356', '2022-04-13 16:44:03', 1),
(4, 'its a new tweet', '2022-04-13 20:00:42', 1),
(7, 'new tweet', '2022-04-16 16:20:43', 1),
(8, 'abc', '2022-04-16 16:20:50', 1),
(9, 'tweet n°?', '2022-04-16 16:21:03', 1),
(10, 'nouveau tweet', '2022-04-16 16:21:17', 1),
(11, 'ce tweet est lié a l\'id 1', '2022-04-16 16:59:43', 1),
(12, 'ce tweet est lié a l\'id 1', '2022-04-16 17:01:01', 1),
(13, 'ce tweet est lié a l\'id 1', '2022-04-16 17:02:43', 1),
(14, 'test', '2022-04-16 17:16:48', 1),
(15, '#test', '2022-04-16 18:27:08', 1),
(16, '#tweet', '2022-04-16 18:27:18', 1);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `users_id` int(11) NOT NULL,
  `users_name` varchar(100) NOT NULL,
  `users_pseudo` varchar(100) NOT NULL,
  `users_mail` varchar(200) NOT NULL,
  `users_mdp` varchar(200) NOT NULL,
  `users_img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`users_id`, `users_name`, `users_pseudo`, `users_mail`, `users_mdp`, `users_img`) VALUES
(1, 'didier', 'didier945', 'mail@gmail.com', '$2y$10$krNbJosADHGl0s07B68rduybLpV7/TXo3ndcLyDjFb6.l3VY5ExUO', 'https://axedw.projets.iim.fr/img/avatar-85970b24bc40b1ac97fa1d88602d7036.jpg'),
(2, 'test', 'test', 'test@gmail.com', '$2y$10$N06mLTsYvsxeLXWqo71Zge6kc6Q1ARoN3ghC9OhHiNWAZOcOJdUcK', 'https://axedw.projets.iim.fr/img/avatar-85970b24bc40b1ac97fa1d88602d7036.jpg'),
(3, 'test', 'test', 'test@gmail.com', '$2y$10$XmehR0IY/Sa3VR73Yv26xeE/w7OWY3dL9L775pbhWxqC2Xyj.B.PK', 'flm'),
(4, '', '', '', '$2y$10$yYEavT1XBIaLRKnDereKuedJQSZj8Ic0nIW7jRIBi8rKotY5TV.pW', ''),
(5, 'test3', '', '', '$2y$10$.A8pEa98MuiRSghkt6gIx.WCVj8ipH5CuRINs4DCEUFA47bxK0HFy', ''),
(6, 'test4', '', '', '$2y$10$L5yz7ki5j7WEB/AdaoDeYuEfiL2Bwxdbs9X7xVBASksq/C8DEzYR2', ''),
(7, 'ddfgyuhgvgjuiuhgvg', '', '', '$2y$10$m4fVRwy2aKHPerujtu6.VOZ8PzXGVSdOMIR73.CsmfG5nT2g0JL5.', ''),
(8, 'nom', '', '', '$2y$10$cXEDC8BmUbQSEKWGiudOBOdAqkNF5bNgYaVeVhMKHqZAkX3F.la8W', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `tweets`
--
ALTER TABLE `tweets`
  ADD PRIMARY KEY (`tweet_id`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `tweets`
--
ALTER TABLE `tweets`
  MODIFY `tweet_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
