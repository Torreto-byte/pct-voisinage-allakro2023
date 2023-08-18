-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 18 août 2023 à 20:40
-- Version du serveur :  8.0.21
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `pct-allakrobd`
--

-- --------------------------------------------------------

--
-- Structure de la table `beneficier`
--

DROP TABLE IF EXISTS `beneficier`;
CREATE TABLE IF NOT EXISTS `beneficier` (
  `idhabt` int NOT NULL,
  `idPrj` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `centre_santes`
--

DROP TABLE IF EXISTS `centre_santes`;
CREATE TABLE IF NOT EXISTS `centre_santes` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nomCdsan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `locCdsan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `servCdsan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `contracter-frequenter`
--

DROP TABLE IF EXISTS `contracter-frequenter`;
CREATE TABLE IF NOT EXISTS `contracter-frequenter` (
  `idCdsan` int NOT NULL,
  `idMal` int NOT NULL,
  `idhabt` int NOT NULL,
  `diagnostic` varchar(255) NOT NULL,
  `date_diagnostic` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `frequenter`
--

DROP TABLE IF EXISTS `frequenter`;
CREATE TABLE IF NOT EXISTS `frequenter` (
  `idhabt` int NOT NULL,
  `idPha` int NOT NULL,
  `medicament_achete` varchar(255) NOT NULL,
  `date_achat` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `habitants`
--

DROP TABLE IF EXISTS `habitants`;
CREATE TABLE IF NOT EXISTS `habitants` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nomHabt` varchar(255) NOT NULL,
  `prenomHabt` varchar(255) NOT NULL,
  `contactHabt` varchar(255) NOT NULL,
  `sexeHabt` varchar(255) NOT NULL,
  `date_naissanceHabt` date DEFAULT NULL,
  `date_decesHabt` date DEFAULT NULL,
  `fonctionHabt` varchar(255) NOT NULL,
  `mode_naissanceHabt` varchar(255) NOT NULL,
  `mode_decesHabt` varchar(255) DEFAULT NULL,
  `lieu_habitation` varchar(255) NOT NULL,
  `raison_deces` varchar(255) DEFAULT NULL,
  `nom_prenomPere` varchar(255) NOT NULL,
  `nom_prenomMere` varchar(255) NOT NULL,
  `nom_prenomReferent` varchar(255) DEFAULT NULL,
  `provenance` varchar(255) DEFAULT NULL,
  `mode_heberg` varchar(255) DEFAULT NULL,
  `nouvelle_destination` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `maladies`
--

DROP TABLE IF EXISTS `maladies`;
CREATE TABLE IF NOT EXISTS `maladies` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `libMal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2023_08_08_201254_create_maladies_table', 1),
(5, '2023_08_11_202950_create_pharmacies_table', 2),
(6, '2023_08_11_212535_create_centre_santes_table', 3),
(9, '2023_08_15_142629_create_roles_table', 5),
(10, '2014_10_12_000000_create_users_table', 6);

-- --------------------------------------------------------

--
-- Structure de la table `pharmacies`
--

DROP TABLE IF EXISTS `pharmacies`;
CREATE TABLE IF NOT EXISTS `pharmacies` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nomPha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lacPha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pgarPha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `projets`
--

DROP TABLE IF EXISTS `projets`;
CREATE TABLE IF NOT EXISTS `projets` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nomPrj` varchar(255) NOT NULL,
  `autPrj` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `datePrj` date NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id`, `nom`) VALUES
(1, 'Gestionnaire'),
(2, 'Chefferie'),
(3, 'Usager');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenoms` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `identifiant` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenoms`, `telephone`, `identifiant`, `password`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ESSOH', 'Wilfried', '0777163605', 'ESSOH', '$2y$10$QiCW0I4ro8YATL32ajQzc.c8dMNGRWcrfNCl2yrdOUWvuXwgU9GP.', 1, NULL, '2023-08-15 14:40:57', '2023-08-15 14:40:57');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
