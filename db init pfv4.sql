-- --------------------------------------------------------
-- Hôte:                         localhost
-- Version du serveur:           10.4.24-MariaDB - mariadb.org binary distribution
-- SE du serveur:                Win64
-- HeidiSQL Version:             12.0.0.6468
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Listage de la structure de la base pour pf_test
CREATE DATABASE IF NOT EXISTS `pf_test` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `pf_test`;

-- Listage de la structure de table pf_test. t_conge
CREATE TABLE IF NOT EXISTS `t_conge` (
  `id_demande` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `date_demande` varchar(50) DEFAULT NULL,
  `date_sortie` varchar(50) DEFAULT NULL,
  `date_reprise` varchar(50) DEFAULT NULL,
  `validation_sup` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT 'en attente',
  `validation_rh` varchar(10) DEFAULT 'en attente',
  `nbj` double DEFAULT NULL,
  `interime` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_demande`),
  KEY `foreign` (`id_user`),
  CONSTRAINT `foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

-- Listage des données de la table pf_test.t_conge : ~0 rows (environ)
INSERT INTO `t_conge` (`id_demande`, `id_user`, `date_demande`, `date_sortie`, `date_reprise`, `validation_sup`, `validation_rh`, `nbj`, `interime`) VALUES
  (7, 29, '22/09/2022', '2022-09-22', '2022-09-24', 'validée', 'validée', 2, 'Bouchra');

-- Listage de la structure de table pf_test. users
CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(50) NOT NULL,
  `Prenom` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `superieur` varchar(100) NOT NULL DEFAULT '',
  `pwd` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `solde` int(11) NOT NULL,
  `interime` varchar(100) NOT NULL,
  `autoriser_interime` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4;

-- Listage des données de la table pf_test.users : ~20 rows (environ)
INSERT INTO `users` (`id_user`, `Nom`, `Prenom`, `email`, `superieur`, `pwd`, `status`, `solde`, `interime`, `autoriser_interime`) VALUES
  (1, 'Aboujaafar', 'Oussama', '1@1.1', 'bichara Ismail', '123', 'usr', 18, 'Rour Badr', 0),
  (4, 'bichara', 'Ismail', 'oaboujaa@uniq.ma', 'RH', '456', 'resp', 502, '', 1),
  (5, 'rh', 'rrh', 'rh@rh.rh', 'DRH', '123', 'rh', 20, '', 0),
  (6, 'Zair', 'Hamza', '3@3.3', 'Rour Badr', '123', 'usr', 4, '', 0),
  (7, 'Daoui', 'Achraf', '4@4.4', 'Rour Badr', '123', 'usr', 752, '', 0),
  (8, 'Souissi', 'Issa', '8@8.8', 'bichara Ismail', '123', 'usr', 7, '', 0),
  (9, 'Bouhlal', 'Hamza', 'rh@rh.rh', 'Fikri Ahmad', '123', 'usr', 41, '', 0),
  (10, 'Rour', 'Badr', '5@5.5', 'RH', '123', 'resp', 35, '', 0),
  (11, 'Fikri', 'Ahmad', '6@6.6', 'RH', '123', 'resp', 40, '', 0),
  (12, 'Makayssi', 'Mouad', '7@7.7', 'Fikri Ahmad', '123', 'usr', 41, '', 0),
  (20, 'Zerg', 'Ayoub', '9@9.9', 'Fikri Ahmad', '123', 'usr', 1, '', 0),
  (24, 'test', 'test', 'ismailbichara123@gmail.com', 'test', 'iXm6sNp8', 'usr', 20, '', 0),
  (25, 'test1', 'test1', 'fzgze@gmail.com', 'Rour Badr', 'cLLLc3KH', 'usr', 30, '', 0),
  (26, 'test', 'test', '1@1.1d', 'Rour Badr', 'BJ5WCBz1', 'usr', 50, '', 0),
  (27, 'Aaouam', 'Hajar', 'hajar.aaouam@pierre-fabre.com', 'RH', '123', 'rh', 10, '', 0),
  (28, 'Nachid', 'Amine', 'amine.nachid@pierre-fabre.com', 'RH', '123', 'resp', 15, '', 0),
  (29, 'Bousserhane', 'Sara', 'sara.bousserhane@pierre-fabre.com', 'Nachid Amine', '123', 'usr', 18, 'Bouchra', 0),
  (30, 'Cherkaoui', 'Hind', 'hind.cherkaoui@pierre-fabre.com', 'Aaouam Hajar', '123', 'rh', 20, '', 0),
  (32, 'ouss', 'tes', '11@1.1', 'Rour Badr', '6VNEh3e3', 'rh', 41, 'oussa', 0),
  (33, 'drh', 'drh', 'drh@rh.rh', 'drh', '123', 'drh', 0, '', 0);


-- Listage de la structure de la base pour pwdmanager
CREATE DATABASE IF NOT EXISTS `pwdmanager` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `pwdmanager`;

-- Listage de la structure de table pwdmanager. data
CREATE TABLE IF NOT EXISTS `data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `compte` varchar(50) DEFAULT NULL,
  `identifiant` varchar(100) DEFAULT NULL,
  `pwd` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Listage des données de la table pwdmanager.data : ~3 rows (environ)
INSERT INTO `data` (`id`, `compte`, `identifiant`, `pwd`) VALUES
  (1, 'key', 'none', '$2y$10$EMdI1K1ZxPrXdviN9SO0XeEFLCRXKZ5XYxMdcPzV2CAqQNhCEevLK'),
  (2, 'vector', 'none', '$2y$10$BkfCDTkZCY1Mq4loEMWgsuy61aHV3xHimZ5gW3ThKNw5DBPk7ujUC'),
  (3, 'Epic', 'themp10', 'DdCJzfoKrFQqCoZY8hI5odqBs8lQav**');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;