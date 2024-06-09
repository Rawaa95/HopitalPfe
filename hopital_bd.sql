-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 04 juin 2024 à 14:23
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `hopital_bd`
--

-- --------------------------------------------------------

--
-- Structure de la table `appareillages`
--

CREATE TABLE `appareillages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `corset_siege` varchar(11) DEFAULT NULL,
  `verticalisateur` varchar(20) DEFAULT NULL,
  `acp` varchar(20) DEFAULT NULL,
  `fr` varchar(20) DEFAULT NULL,
  `deambulateur` varchar(20) DEFAULT NULL,
  `attelle_tamarak_marche` varchar(20) DEFAULT NULL,
  `attelle_anti_talus` varchar(20) DEFAULT NULL,
  `corset_garchoix` varchar(20) DEFAULT NULL,
  `orthese_main` varchar(20) DEFAULT NULL,
  `orthese_plantaire` varchar(20) DEFAULT NULL,
  `type_orthese_plantaire` text DEFAULT NULL,
  `chaussures` varchar(20) DEFAULT NULL,
  `remarque` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `visite_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `appareillages`
--

INSERT INTO `appareillages` (`id`, `corset_siege`, `verticalisateur`, `acp`, `fr`, `deambulateur`, `attelle_tamarak_marche`, `attelle_anti_talus`, `corset_garchoix`, `orthese_main`, `orthese_plantaire`, `type_orthese_plantaire`, `chaussures`, `remarque`, `created_at`, `updated_at`, `visite_id`) VALUES
(1, 'oui', 'oui', 'oui', 'oui', 'oui', 'oui', 'oui', 'oui', 'oui', 'oui', NULL, 'oui', 'oui', '2024-05-24 09:11:57', '2024-05-25 09:01:50', 1),
(2, 'oui', 'oui', 'oui', 'oui', 'oui', 'oui', 'oui', 'oui', 'oui', 'oui', 'hhhhhh', 'oui', 'bonjour', '2024-05-25 09:31:27', '2024-05-25 19:49:25', 2),
(3, 'non', 'non', 'non', 'non', 'non', 'non', 'non', 'non', 'non', 'non', NULL, 'non', NULL, '2024-05-26 12:40:24', '2024-05-29 07:26:11', 3),
(4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-26 15:02:09', '2024-05-26 15:02:09', 4),
(5, 'oui', 'oui', 'oui', 'oui', 'oui', 'oui', 'oui', 'oui', 'oui', 'oui', 'Motricités Provoquées:', 'oui', 'Motricités Provoquées:', '2024-05-30 08:35:39', '2024-05-30 19:15:30', 13);

-- --------------------------------------------------------

--
-- Structure de la table `attitude_spontanees`
--

CREATE TABLE `attitude_spontanees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `attitude_sp` varchar(255) DEFAULT NULL,
  `motricite_dd_dv_ms_mi` varchar(255) DEFAULT NULL,
  `reactions_posturales` varchar(255) DEFAULT NULL,
  `suspension_ventrale` varchar(255) DEFAULT NULL,
  `suspension_dorsale` varchar(255) DEFAULT NULL,
  `suspension_laterale` varchar(255) DEFAULT NULL,
  `reaction_balancier_MI` varchar(255) DEFAULT NULL,
  `reaction_parachute_anterieur` varchar(255) DEFAULT NULL,
  `reaction_parachute_posterieur` varchar(255) DEFAULT NULL,
  `reaction_parachute_lateral` varchar(255) DEFAULT NULL,
  `attitude_sp_shema` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `visite_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `attitude_spontanees`
--

INSERT INTO `attitude_spontanees` (`id`, `attitude_sp`, `motricite_dd_dv_ms_mi`, `reactions_posturales`, `suspension_ventrale`, `suspension_dorsale`, `suspension_laterale`, `reaction_balancier_MI`, `reaction_parachute_anterieur`, `reaction_parachute_posterieur`, `reaction_parachute_lateral`, `attitude_sp_shema`, `created_at`, `updated_at`, `visite_id`) VALUES
(1, 'oui', '1716554136.PNG', 'oui', 'ouib', 'oui', 'oui', 'oui', 'oui', 'oui', 'oui', 'oui', '2024-05-24 09:17:16', '2024-05-24 10:35:36', 1),
(2, 'bonjour', NULL, 'bonjour', 'bonjour', 'bonjour', 'bonjour', 'bonjour', 'bonjour', 'bonjour', 'bonjour', 'bonjour', '2024-05-25 09:31:27', '2024-05-25 09:31:27', 2),
(3, NULL, '1716751521.mp4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-26 12:40:24', '2024-05-26 17:25:21', 3),
(4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-26 15:02:09', '2024-05-26 15:02:09', 4),
(5, NULL, NULL, 'Motricités Provoquées:', 'Motricités Provoquées:', 'Motricités Provoquées:', 'Motricités Provoquées:', 'Motricités Provoquées:', 'Motricités Provoquées:', 'Motricités Provoquées:', 'Motricités Provoquées:', 'Motricités Provoquées:', '2024-05-30 08:35:39', '2024-05-30 19:18:18', 13);

-- --------------------------------------------------------

--
-- Structure de la table `attitude_spontanees_dds`
--

CREATE TABLE `attitude_spontanees_dds` (
  `attitude_spontanee_dd_description` varchar(255) DEFAULT NULL,
  `attitude_spontanee_dd_video` varchar(255) DEFAULT NULL,
  `visite_id` int(20) NOT NULL,
  `id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `attitude_spontanees_dds`
--

INSERT INTO `attitude_spontanees_dds` (`attitude_spontanee_dd_description`, `attitude_spontanee_dd_video`, `visite_id`, `id`) VALUES
('bbbbb', '1716741368.mp4', 2, 1),
(NULL, NULL, 1, 2),
('loulou', '1716751521.mp4', 3, 3),
(NULL, NULL, 4, 5),
('Motricités Provoquées:', NULL, 13, 6);

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` int(255) NOT NULL,
  `post_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `commentaire` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `name`, `email`, `commentaire`, `date`) VALUES
(1, 6, 'aa', 'aa@gmail.com', 'aa', '2024-05-22 08:14:48'),
(2, 6, 'bb', 'bb@gmail.com', 'aa', '2024-05-22 08:19:49'),
(3, 6, 'bb', 'bb@gmail.com', 'aaaa', '2024-05-22 08:21:39'),
(5, 6, 'speaker2', 'adm@gmail.com', 'zzlkhk', '2024-05-22 08:22:10'),
(6, 6, 'speaker2', 'adm@gmail.com', 'zhlhjrn', '2024-05-22 08:22:22'),
(7, 6, 'speaker2', 'adm@gmail.com', 'kzlzgkl', '2024-05-22 08:22:31'),
(11, 4, 'ccc', 'user@gmail.com', 'ouii', '2024-05-26 17:23:31'),
(12, 6, 'molka', 'medecin1@gmail.com', 'bonjour la vie', '2024-05-30 21:55:15'),
(13, 6, 'ibtihel', 'ibti@gmail.com', 'très intéressent', '2024-05-31 05:02:57'),
(14, 6, 'ahlem', 'ahlem@gmail.com', 'un contenue riche', '2024-05-31 05:03:43'),
(15, 6, 'kinza', 'kinza@gmail.com', 'bravo', '2024-05-31 05:04:18'),
(16, 6, 'nedia', 'nedia@gmail.com', 'un sujet important', '2024-05-31 05:05:37'),
(17, 6, 'nassim', 'nassim@gamil.com', 'merci pour les informations', '2024-05-31 05:06:35'),
(18, 8, 'ibtihel', 'ibtihel@gmail.com', 'tres bien', '2024-05-31 07:32:41');

-- --------------------------------------------------------

--
-- Structure de la table `doleances_actuelles`
--

CREATE TABLE `doleances_actuelles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `douleur` varchar(20) DEFAULT NULL,
  `douleur_localisation` varchar(255) DEFAULT NULL,
  `douleur_causes` varchar(255) DEFAULT NULL,
  `developpement_psychomoteur` varchar(255) DEFAULT NULL,
  `sourire_reponse` varchar(255) DEFAULT NULL,
  `tenue_tete` varchar(255) DEFAULT NULL,
  `marche` varchar(255) DEFAULT NULL,
  `proprete` varchar(255) DEFAULT NULL,
  `station_assise` varchar(255) DEFAULT NULL,
  `station_debout` varchar(255) DEFAULT NULL,
  `langage` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `dossier_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `doleances_actuelles`
--

INSERT INTO `doleances_actuelles` (`id`, `douleur`, `douleur_localisation`, `douleur_causes`, `developpement_psychomoteur`, `sourire_reponse`, `tenue_tete`, `marche`, `proprete`, `station_assise`, `station_debout`, `langage`, `created_at`, `updated_at`, `dossier_id`) VALUES
(1, 'oui', 'hhhhhh', 'hhhhhh', 'hhhhhhhhh', 'hhhhhhh', 'hhhhhhhh', 'hhhhhhhh', 'hhhhhhh', 'hhhhhhh', 'hhhhhhh', '1_mot', '2024-05-25 06:59:38', '2024-05-25 09:00:04', 2),
(3, 'non', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'babillage', '2024-05-26 12:40:24', '2024-05-28 21:21:51', 1),
(4, 'oui', 'chef', 'chef', 'chef', 'chef', 'chef', 'chef', 'chef', 'chef', 'chef', '1_mot', NULL, NULL, 7);

-- --------------------------------------------------------

--
-- Structure de la table `dossiers`
--

CREATE TABLE `dossiers` (
  `id` int(255) NOT NULL,
  `num_dossier` int(255) DEFAULT NULL,
  `num_facultatif` int(255) DEFAULT NULL,
  `couverture_sociale` varchar(255) DEFAULT NULL,
  `profession_pere` varchar(255) DEFAULT NULL,
  `profession_mere` varchar(255) DEFAULT NULL,
  `mode_habitat_1` varchar(255) DEFAULT NULL,
  `mode_habitat_2` varchar(255) DEFAULT NULL,
  `niveau_scolaire` varchar(255) DEFAULT NULL,
  `rendement_scolaire` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `patient_id` int(255) NOT NULL,
  `medecin_id` int(255) DEFAULT NULL,
  `secretaire_id` int(255) DEFAULT NULL,
  `scolariser` varchar(255) DEFAULT NULL,
  `supprime` varchar(255) NOT NULL DEFAULT 'non',
  `date_creation` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `dossiers`
--

INSERT INTO `dossiers` (`id`, `num_dossier`, `num_facultatif`, `couverture_sociale`, `profession_pere`, `profession_mere`, `mode_habitat_1`, `mode_habitat_2`, `niveau_scolaire`, `rendement_scolaire`, `description`, `patient_id`, `medecin_id`, `secretaire_id`, `scolariser`, `supprime`, `date_creation`) VALUES
(1, 122, 121, 'CNAM', 'aaaaaaa', 'aaaaaa', 'Rural', 'Rez-de-chaussée', 'primaire', 'aaaaaaa', 'aaaa', 4, 4, 2, 'oui', 'oui', '2024-04-16'),
(2, 143, 21, 'Payant', 'rien', 'chef', 'Rural', 'Avec escalier', 'primaire', NULL, 'oui', 1, 4, 2, 'non', 'oui', '2024-05-05'),
(4, 133, 121, 'Indigent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, 10, 2, NULL, 'oui', '2024-05-12'),
(5, 23, 23, 'Payant', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 6, 10, 2, NULL, 'oui', '2024-05-17'),
(6, 664, 234, 'Payant', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7, 10, 2, NULL, 'non', '2024-05-29'),
(7, 332, 65, 'Payant', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 9, 4, 3, NULL, 'non', '2024-05-29'),
(8, 645, 76, 'CNAM', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 10, 4, 3, NULL, 'non', '2024-05-29'),
(9, 54, 43, 'Indigent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 11, 4, 3, NULL, 'non', '2024-05-29'),
(10, 56, 65, 'CNAM', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 12, 4, 3, NULL, 'non', '2024-05-29'),
(11, 742, 76, 'Payant', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 13, 4, 3, NULL, 'non', '2024-05-29'),
(12, 876, 43, 'Indigent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 14, 4, 3, NULL, 'non', '2024-05-29'),
(13, 532, 43, 'Indigent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 15, 10, 2, NULL, 'non', '2024-05-29');

-- --------------------------------------------------------

--
-- Structure de la table `etude__facteurs`
--

CREATE TABLE `etude__facteurs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `anomalies` varchar(20) DEFAULT NULL,
  `parole` varchar(20) DEFAULT NULL,
  `concentration` varchar(20) DEFAULT NULL,
  `bruit` varchar(20) DEFAULT NULL,
  `toucher` varchar(20) DEFAULT NULL,
  `effort` varchar(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `visite_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `etude__facteurs`
--

INSERT INTO `etude__facteurs` (`id`, `anomalies`, `parole`, `concentration`, `bruit`, `toucher`, `effort`, `created_at`, `updated_at`, `visite_id`) VALUES
(1, 'oui', 'oui', 'oui', 'oui', 'oui', 'oui', '2024-05-25 11:06:18', '2024-05-25 11:06:18', 2),
(2, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-26 12:12:38', '2024-05-26 12:12:38', 1),
(3, 'non', 'non', 'non', 'non', 'non', 'non', '2024-05-26 12:40:24', '2024-05-26 12:40:24', 3),
(4, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-26 15:02:09', '2024-05-26 15:02:09', 4),
(5, 'oui', 'oui', 'oui', 'oui', 'oui', 'oui', NULL, NULL, 13);

-- --------------------------------------------------------

--
-- Structure de la table `evaluation_fonctionnelles`
--

CREATE TABLE `evaluation_fonctionnelles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `equilibre_assis_bord_table` varchar(20) DEFAULT NULL,
  `equilibre_assis_sol` varchar(20) DEFAULT NULL,
  `equilibre_debout_bipodal` varchar(20) DEFAULT NULL,
  `equilibre_unipodal` varchar(20) DEFAULT NULL,
  `temps_droite` varchar(255) DEFAULT NULL,
  `temps_gauche` varchar(255) DEFAULT NULL,
  `cms_image_description` text DEFAULT NULL,
  `gmfcs_image_description` text DEFAULT NULL,
  `gillette_image_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `visite_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `evaluation_fonctionnelles`
--

INSERT INTO `evaluation_fonctionnelles` (`id`, `equilibre_assis_bord_table`, `equilibre_assis_sol`, `equilibre_debout_bipodal`, `equilibre_unipodal`, `temps_droite`, `temps_gauche`, `cms_image_description`, `gmfcs_image_description`, `gillette_image_description`, `created_at`, `updated_at`, `visite_id`) VALUES
(1, 'non', 'oui', 'oui', 'oui', 'bonjour', 'bonjour', 'bonjour', 'bonjour', NULL, '2024-05-25 11:38:00', '2024-05-26 15:08:38', 2),
(2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-26 12:12:38', '2024-05-26 12:12:38', 1),
(3, 'non', 'non', 'non', 'non', NULL, NULL, NULL, NULL, NULL, '2024-05-26 12:40:24', '2024-05-26 12:40:24', 3),
(4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-26 15:02:09', '2024-05-26 15:02:09', 4),
(5, 'oui', 'oui', 'oui', 'oui', 'jjjj', 'jjjj', 'Motricités Provoquées:', 'Motricités Provoquées:', 'Motricités Provoquées:', NULL, NULL, 13);

-- --------------------------------------------------------

--
-- Structure de la table `evaluation_generales`
--

CREATE TABLE `evaluation_generales` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `poids` int(255) DEFAULT NULL,
  `taille` int(255) DEFAULT NULL,
  `perimetre_cranien` int(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `visite_id` int(255) NOT NULL,
  `insuffisance_respiratoire` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `evaluation_generales`
--

INSERT INTO `evaluation_generales` (`id`, `poids`, `taille`, `perimetre_cranien`, `created_at`, `updated_at`, `visite_id`, `insuffisance_respiratoire`) VALUES
(1, 0, 0, 0, '2024-05-25 12:55:04', '2024-05-25 12:58:14', 2, 'oui'),
(2, NULL, NULL, NULL, '2024-05-26 12:14:00', '2024-05-26 12:14:00', 1, NULL),
(3, NULL, NULL, NULL, '2024-05-26 12:40:24', '2024-05-26 12:40:24', 3, 'non'),
(4, NULL, NULL, NULL, '2024-05-26 15:02:09', '2024-05-26 15:02:09', 4, NULL),
(5, 5, 5, 5, NULL, NULL, 13, 'oui');

-- --------------------------------------------------------

--
-- Structure de la table `evaluation_marches`
--

CREATE TABLE `evaluation_marches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `evaluation_marche` varchar(255) DEFAULT NULL,
  `description_marche` text DEFAULT NULL,
  `vitesse_marche` varchar(255) DEFAULT NULL,
  `video_marche` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `visite_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `evaluation_marches`
--

INSERT INTO `evaluation_marches` (`id`, `evaluation_marche`, `description_marche`, `vitesse_marche`, `video_marche`, `created_at`, `updated_at`, `visite_id`) VALUES
(1, 'bonjour', 'bonjour', 'bonjour', '', '2024-05-25 12:29:27', '2024-05-25 12:29:27', 2),
(2, NULL, NULL, NULL, NULL, '2024-05-26 12:14:00', '2024-05-26 12:14:00', 1),
(3, NULL, NULL, NULL, '1716747452.mp4', '2024-05-26 12:40:24', '2024-05-26 16:17:32', 3),
(4, NULL, NULL, NULL, NULL, '2024-05-26 15:02:09', '2024-05-26 15:02:09', 4),
(5, 'Motricités Provoquées:', 'Motricités Provoquées:', 'Motricités Provoquées:', NULL, NULL, NULL, 13);

-- --------------------------------------------------------

--
-- Structure de la table `evaluation_rachis`
--

CREATE TABLE `evaluation_rachis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `deformation_rachis` varchar(255) DEFAULT NULL,
  `commentaire_deformation_rachis` text DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `visite_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `evaluation_rachis`
--

INSERT INTO `evaluation_rachis` (`id`, `deformation_rachis`, `commentaire_deformation_rachis`, `photo`, `created_at`, `updated_at`, `visite_id`) VALUES
(1, 'oui', 'bonjour', 'C:\\xampp\\tmp\\php1BF.tmp', '2024-05-25 21:03:23', '2024-05-25 21:03:23', 2),
(2, NULL, NULL, NULL, '2024-05-26 12:14:00', '2024-05-26 12:14:00', 1),
(3, 'non', NULL, '1716749589.png', '2024-05-26 12:40:24', '2024-05-26 16:53:09', 3),
(4, NULL, NULL, NULL, '2024-05-26 15:02:09', '2024-05-26 15:02:09', 4),
(5, 'oui', 'Motricités Provoquées:', NULL, NULL, NULL, 13);

-- --------------------------------------------------------

--
-- Structure de la table `evaluation_sensorielles`
--

CREATE TABLE `evaluation_sensorielles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `evaluation_sensorielle` varchar(255) DEFAULT NULL,
  `troubles_audition` varchar(255) DEFAULT NULL,
  `dyspraxie_buccofaciale` varchar(255) DEFAULT NULL,
  `troubles_deglutition` varchar(255) DEFAULT NULL,
  `trouble_langage` varchar(20) DEFAULT NULL,
  `description_langage` text DEFAULT NULL,
  `troubles_fonctions` varchar(20) DEFAULT NULL,
  `type_fonctions` varchar(255) DEFAULT NULL,
  `bilan_neuro` text DEFAULT NULL,
  `cr_bilan` text DEFAULT NULL,
  `syncinesies` text DEFAULT NULL,
  `troubles_vesico_sphincteriens` varchar(255) DEFAULT NULL,
  `troubles_anorectaux` text DEFAULT NULL,
  `acquisition_proprete_anale` varchar(20) DEFAULT NULL,
  `troubles_urinaires` varchar(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `autres_description_text` varchar(255) DEFAULT NULL,
  `autre_troubles_deglutition` varchar(255) DEFAULT NULL,
  `visite_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `evaluation_sensorielles`
--

INSERT INTO `evaluation_sensorielles` (`id`, `evaluation_sensorielle`, `troubles_audition`, `dyspraxie_buccofaciale`, `troubles_deglutition`, `trouble_langage`, `description_langage`, `troubles_fonctions`, `type_fonctions`, `bilan_neuro`, `cr_bilan`, `syncinesies`, `troubles_vesico_sphincteriens`, `troubles_anorectaux`, `acquisition_proprete_anale`, `troubles_urinaires`, `created_at`, `updated_at`, `autres_description_text`, `autre_troubles_deglutition`, `visite_id`) VALUES
(1, 'cecite_corticale', 'bonjour', 'protrusion_langue', NULL, 'oui', 'bonjour', 'oui', 'bonjour', 'oui', 'bonjour', 'oui', 'énurésie', 'bonjour', 'oui', 'oui', '2024-05-25 14:38:08', '2024-05-25 14:38:08', NULL, NULL, 2),
(2, 'strabisme', NULL, 'bavage', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pollakiurie', NULL, NULL, NULL, '2024-05-26 12:14:00', '2024-05-26 12:14:00', NULL, NULL, 1),
(3, 'strabisme', NULL, 'bavage', NULL, 'non', NULL, 'non', NULL, 'non', NULL, 'non', 'pollakiurie', NULL, 'non', 'non', '2024-05-26 12:40:24', '2024-05-26 12:40:24', NULL, NULL, 3),
(4, 'strabisme', NULL, 'bavage', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pollakiurie', NULL, NULL, NULL, '2024-05-26 15:02:09', '2024-05-26 15:02:09', NULL, NULL, 4),
(5, 'cecite_corticale', 'Motricités Provoquées:', 'autre', NULL, 'oui', 'Motricités Provoquées:', 'oui', 'Motricités Provoquées:', 'oui', 'Motricités Provoquées:', 'oui', 'dysurie', 'Motricités Provoquées:', 'oui', 'oui', NULL, NULL, 'Évaluation sensorielle :', NULL, 13);

-- --------------------------------------------------------

--
-- Structure de la table `examenpodoscopiques`
--

CREATE TABLE `examenpodoscopiques` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pied_creux` varchar(20) DEFAULT NULL,
  `pied_creux_droit` varchar(255) DEFAULT NULL,
  `pied_creux_gauche` varchar(255) DEFAULT NULL,
  `pied_plat` varchar(20) DEFAULT NULL,
  `pied_plat_droit` varchar(255) DEFAULT NULL,
  `pied_plat_gauche` varchar(255) DEFAULT NULL,
  `varus_arriere_pied` varchar(20) DEFAULT NULL,
  `varus_arriere_pied_droit` varchar(255) DEFAULT NULL,
  `varus_arriere_pied_gauche` varchar(255) DEFAULT NULL,
  `varus_avant_pied` varchar(20) DEFAULT NULL,
  `varus_avant_pied_droit` varchar(255) DEFAULT NULL,
  `varus_avant_pied_gauche` varchar(255) DEFAULT NULL,
  `valgus_arriere_pied` varchar(20) DEFAULT NULL,
  `valgus_arriere_pied_droit` varchar(255) DEFAULT NULL,
  `valgus_arriere_pied_gauche` varchar(255) DEFAULT NULL,
  `valgus_avant_pied` varchar(20) DEFAULT NULL,
  `valgus_avant_pied_droit` varchar(255) DEFAULT NULL,
  `valgus_avant_pied_gauche` varchar(255) DEFAULT NULL,
  `cassure_medio_pied` varchar(20) DEFAULT NULL,
  `cassure_medio_pied_droit` varchar(255) DEFAULT NULL,
  `cassure_medio_pied_gauche` varchar(255) DEFAULT NULL,
  `photos_podoscopique` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `visite_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `examenpodoscopiques`
--

INSERT INTO `examenpodoscopiques` (`id`, `pied_creux`, `pied_creux_droit`, `pied_creux_gauche`, `pied_plat`, `pied_plat_droit`, `pied_plat_gauche`, `varus_arriere_pied`, `varus_arriere_pied_droit`, `varus_arriere_pied_gauche`, `varus_avant_pied`, `varus_avant_pied_droit`, `varus_avant_pied_gauche`, `valgus_arriere_pied`, `valgus_arriere_pied_droit`, `valgus_arriere_pied_gauche`, `valgus_avant_pied`, `valgus_avant_pied_droit`, `valgus_avant_pied_gauche`, `cassure_medio_pied`, `cassure_medio_pied_droit`, `cassure_medio_pied_gauche`, `photos_podoscopique`, `created_at`, `updated_at`, `visite_id`) VALUES
(1, 'oui', 'bonjour', 'bonjour', 'oui', 'bonjour', 'bonjour', 'oui', 'bonjour', 'bonjour', 'oui', 'bonjour', 'bonjour', 'oui', 'bonjour', 'bonjour', 'oui', 'bonjour', 'bonjour', 'oui', 'bonjour', 'bonjour', '1716680072.png', '2024-05-25 21:34:32', '2024-05-25 21:34:32', 2),
(2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-26 12:14:00', '2024-05-26 12:14:00', 1),
(3, 'non', NULL, NULL, 'non', NULL, NULL, 'non', NULL, NULL, 'non', NULL, NULL, 'non', NULL, NULL, 'non', NULL, NULL, 'non', NULL, NULL, '1716748537.png', '2024-05-26 12:40:24', '2024-05-26 16:35:37', 3),
(4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-26 15:02:09', '2024-05-26 15:02:09', 4),
(5, 'oui', 'Motricités Provoquées:', 'Motricités Provoquées:', 'oui', 'Motricités Provoquées:', 'Motricités Provoquées:', 'oui', 'Motricités Provoquées:', 'Motricités Provoquées:', 'oui', 'Motricités Provoquées:', 'Motricités Provoquées:', 'oui', 'Motricités Provoquées:', 'Motricités Provoquées:', 'oui', 'Motricités Provoquées:', 'Motricités Provoquées:', 'oui', 'Motricités Provoquées:', 'Motricités Provoquées:', NULL, NULL, NULL, 13);

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `groupements`
--

CREATE TABLE `groupements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `designation` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `use` int(11) NOT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `groupements`
--

INSERT INTO `groupements` (`id`, `designation`, `type`, `use`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'Epaule', '', 0, NULL, NULL, NULL),
(2, 'Add (Gd pectoral)', '', 0, 1, NULL, NULL),
(12, 'Abd (déltoide)\r\n\r\n', '', 0, 1, NULL, NULL),
(13, 'Coude', '', 0, NULL, NULL, NULL),
(14, 'Fléchisseurs coude\r\n', '', 0, 13, NULL, NULL),
(15, 'TB', '', 0, 13, NULL, NULL),
(16, 'Pronateurs (rond /carré pronateur)', '', 0, 13, NULL, NULL),
(17, 'Supinateurs\r\n', '', 0, 13, NULL, NULL),
(18, 'Poignet', '', 0, NULL, NULL, NULL),
(19, 'FR du carpe\r\n', '', 0, 18, NULL, NULL),
(20, 'FC du carpe\r\n', '', 0, 18, NULL, NULL),
(21, 'Long palmaire', '', 0, 18, NULL, NULL),
(22, 'Main\r\n', '', 0, NULL, NULL, NULL),
(23, 'FCS', '', 0, 22, NULL, NULL),
(24, 'FCP', '', 0, 22, NULL, NULL),
(25, 'Long fléchisseur du pouce', '', 0, 22, NULL, NULL),
(26, 'Adducteurs du pouce', '', 0, 22, NULL, NULL),
(27, 'Hanches\r\n', '', 0, NULL, NULL, NULL),
(28, 'Psoas iliacus (Psoas)\r\n', '', 0, 27, NULL, NULL),
(29, 'Rectus femoris\r\n', '', 0, 27, NULL, NULL),
(31, 'Adductors brevis, longus, magnus', '', 0, 27, NULL, NULL),
(32, 'Gracilis (droit interne)', '', 0, 27, NULL, NULL),
(33, 'Rotateurs Internes\r\n', '', 0, 27, NULL, NULL),
(34, 'Rotateurs externes', '', 0, 27, NULL, NULL),
(35, 'Gluteus maximus (Grands fessiers)\r\n', '', 0, 27, NULL, NULL),
(36, 'Genoux', '', 0, NULL, NULL, NULL),
(37, 'Quadriceps femoris\r\n', '', 0, 36, NULL, NULL),
(38, 'Clonus : nb', '', 0, 36, NULL, NULL),
(39, 'Semitendinosis-Semimembranosus/Biceps fémoris', '', 0, 36, NULL, NULL),
(40, 'Pieds', '', 0, NULL, NULL, NULL),
(41, 'Soleus (Soléaire)\r\n', '', 0, 40, NULL, NULL),
(42, 'T.E.P : nb\r\n', '', 0, 40, NULL, NULL),
(43, 'Gastrocnemius (Jumeaux)\r\n', '', 0, 40, NULL, NULL),
(44, 'T.E.P : nb', '', 0, 40, NULL, NULL),
(45, 'Tibialis antérior (Jambier ant.)', '', 0, 40, NULL, NULL),
(46, 'Tibialis postérior (Jambier post.)', '', 0, 40, NULL, NULL),
(47, 'Extensor digitorum longus (E.C.O)\r\n', '', 0, 40, NULL, NULL),
(48, 'Flexor digitorum longus (F.C.O)\r\n', '', 0, 40, NULL, NULL),
(49, 'Extensor hallucis longus (EPGO)', '', 0, 40, NULL, NULL),
(50, 'Flexor hallucis longus (FPGO)\r\n', '', 0, 40, NULL, NULL),
(51, 'Fibulaires (Péronniers)', '', 0, 40, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `hopitaux`
--

CREATE TABLE `hopitaux` (
  `id` int(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `ville_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `hopitaux`
--

INSERT INTO `hopitaux` (`id`, `nom`, `ville_id`) VALUES
(1, 'Farhat-Hached', 3),
(2, 'Sahloul', 3),
(3, 'La Rabta', 1),
(4, 'Habib-Bourguiba', 2),
(5, 'Hédi-Chaker', 2),
(6, 'Fattouma-Bourguiba', 16),
(7, 'Tahar-Sfar', 14),
(34, 'Hôpital Ibn El Jazzar', 4),
(35, 'Hôpital les Aghlabites', 4),
(36, 'Hôpital Charles Nicolle', 1),
(37, 'HOPITAL', 1);

-- --------------------------------------------------------

--
-- Structure de la table `injection_toxines`
--

CREATE TABLE `injection_toxines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `injection_toxine` varchar(20) DEFAULT NULL,
  `date_injection` date DEFAULT NULL,
  `type_toxine` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `dose_totale_injectee` varchar(255) DEFAULT NULL,
  `dose_par_muscle` varchar(255) DEFAULT NULL,
  `visite_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `injection_toxines`
--

INSERT INTO `injection_toxines` (`id`, `injection_toxine`, `date_injection`, `type_toxine`, `created_at`, `updated_at`, `dose_totale_injectee`, `dose_par_muscle`, `visite_id`) VALUES
(1, 'oui', '2024-05-07', NULL, '2024-05-25 15:21:20', '2024-05-25 19:49:25', 'bonjour', 'bonjour', 2),
(2, NULL, NULL, NULL, '2024-05-26 12:14:00', '2024-05-26 12:14:00', NULL, NULL, 1),
(3, 'non', '2024-05-10', NULL, '2024-05-26 12:40:24', '2024-05-27 15:20:20', 'bgggg', 'bgggg', 3),
(4, NULL, NULL, NULL, '2024-05-26 15:02:09', '2024-05-26 15:02:09', NULL, NULL, 4),
(5, 'oui', '2024-05-15', 'botox_100ui', NULL, NULL, 'ensaf', 'ensaf', 13);

-- --------------------------------------------------------

--
-- Structure de la table `interrogatoires`
--

CREATE TABLE `interrogatoires` (
  `profession_pere` varchar(255) DEFAULT NULL,
  `profession_mere` varchar(255) DEFAULT NULL,
  `mode_habitat_1` varchar(20) DEFAULT NULL,
  `mode_habitat_2` varchar(20) DEFAULT NULL,
  `scolariser` varchar(20) DEFAULT NULL,
  `niveau_scolaire` varchar(20) DEFAULT NULL,
  `rendement_scolaire` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `cas_similaires` varchar(20) DEFAULT NULL,
  `consanguinite` varchar(20) DEFAULT NULL,
  `suivi_grossesse` varchar(20) DEFAULT NULL,
  `deroulement_grossesse` varchar(20) DEFAULT NULL,
  `complication` text DEFAULT NULL,
  `accouchement` varchar(20) DEFAULT NULL,
  `terme` varchar(255) DEFAULT NULL,
  `apgar` varchar(255) DEFAULT NULL,
  `pn` varchar(255) DEFAULT NULL,
  `hospitalisation_neonat` varchar(20) DEFAULT NULL,
  `nombre_jours_rea` int(255) DEFAULT NULL,
  `rea_neonat` varchar(20) DEFAULT NULL,
  `etiologies` varchar(255) DEFAULT NULL,
  `ergotherapie` varchar(20) DEFAULT NULL,
  `ergotherapie_depuis_quand` varchar(20) DEFAULT NULL,
  `ergotherapie_nb_seances` int(255) DEFAULT NULL,
  `chirurgie_orthopedique` varchar(20) DEFAULT NULL,
  `detail_chirurgie` text DEFAULT NULL,
  `par_qui` varchar(20) DEFAULT NULL,
  `dossier_id` int(255) NOT NULL,
  `crise_convulsive` varchar(255) DEFAULT NULL,
  `medecin_traitant` varchar(255) DEFAULT NULL,
  `explorations` varchar(255) DEFAULT NULL,
  `echotf` varchar(255) DEFAULT NULL,
  `tdm_cerebrale` varchar(255) DEFAULT NULL,
  `irm_cerebrale` varchar(255) DEFAULT NULL,
  `eeg` varchar(255) DEFAULT NULL,
  `rx_bassin` varchar(255) DEFAULT NULL,
  `autre_r` varchar(255) DEFAULT NULL,
  `medication` varchar(20) DEFAULT NULL,
  `medication_laquelle` varchar(255) DEFAULT NULL,
  `kinesitherapie` varchar(20) DEFAULT NULL,
  `kinesitherapie_depuis_quand` varchar(255) DEFAULT NULL,
  `kinesitherapie_nb_seances` int(255) DEFAULT NULL,
  `appareillage` varchar(20) DEFAULT NULL,
  `appareillage_laquelle` varchar(20) DEFAULT NULL,
  `orthophonie` varchar(20) DEFAULT NULL,
  `orthophonie_depuis_quand` varchar(20) DEFAULT NULL,
  `orthophonie_nb_seances` int(255) DEFAULT NULL,
  `id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `interrogatoires`
--

INSERT INTO `interrogatoires` (`profession_pere`, `profession_mere`, `mode_habitat_1`, `mode_habitat_2`, `scolariser`, `niveau_scolaire`, `rendement_scolaire`, `description`, `cas_similaires`, `consanguinite`, `suivi_grossesse`, `deroulement_grossesse`, `complication`, `accouchement`, `terme`, `apgar`, `pn`, `hospitalisation_neonat`, `nombre_jours_rea`, `rea_neonat`, `etiologies`, `ergotherapie`, `ergotherapie_depuis_quand`, `ergotherapie_nb_seances`, `chirurgie_orthopedique`, `detail_chirurgie`, `par_qui`, `dossier_id`, `crise_convulsive`, `medecin_traitant`, `explorations`, `echotf`, `tdm_cerebrale`, `irm_cerebrale`, `eeg`, `rx_bassin`, `autre_r`, `medication`, `medication_laquelle`, `kinesitherapie`, `kinesitherapie_depuis_quand`, `kinesitherapie_nb_seances`, `appareillage`, `appareillage_laquelle`, `orthophonie`, `orthophonie_depuis_quand`, `orthophonie_nb_seances`, `id`) VALUES
(NULL, NULL, NULL, NULL, NULL, 'primaire', NULL, NULL, NULL, NULL, NULL, NULL, 'Toxemie', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Premature', 'non', 'bonjour', 22, 'non', 'bonjour', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'non', 'bonjour', 'non', 'bonjour', 33, 'oui', 'bonjour', 'non', 'bonjour', 33, 1),
('chef', 'chef', 'Urbain', 'Rez-de-chaussée', 'oui', 'spécialisé', 'chef', 'chef', 'oui', 'oui', 'oui', 'oui', 'RCIU', 'vb', 'chef', 'chef', 'chef', 'oui', 4, 'oui', 'SFC', 'oui', 'chef', 6, 'oui', '6', 'gynecologue', 7, 'oui', 'chef', 'chef', 'chef', 'chef', 'chef', 'chef', 'chef', 'chef', 'oui', 'chef', 'oui', 'chef', 5, 'oui', 'chef', 'oui', 'chef', 6, 2);

-- --------------------------------------------------------

--
-- Structure de la table `kinesitherapies`
--

CREATE TABLE `kinesitherapies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kinesitherapie` varchar(20) DEFAULT NULL,
  `seances_par_semaine` int(255) DEFAULT NULL,
  `autoreeducation` varchar(20) DEFAULT NULL,
  `apprentissage_fait` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `visite_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `kinesitherapies`
--

INSERT INTO `kinesitherapies` (`id`, `kinesitherapie`, `seances_par_semaine`, `autoreeducation`, `apprentissage_fait`, `created_at`, `updated_at`, `visite_id`) VALUES
(1, 'oui', NULL, 'oui', NULL, '2024-05-25 15:00:24', '2024-05-25 15:00:24', 2),
(2, 'oui', NULL, NULL, NULL, '2024-05-26 12:14:00', '2024-05-26 12:14:00', 1),
(3, 'non', NULL, 'non', NULL, '2024-05-26 12:40:24', '2024-05-26 15:39:51', 3),
(4, NULL, NULL, NULL, NULL, '2024-05-26 15:02:09', '2024-05-26 15:02:09', 4),
(5, 'oui', 5, 'oui', NULL, NULL, NULL, 13);

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id` int(255) NOT NULL,
  `emetteur_id` int(255) NOT NULL,
  `recepteur_id` int(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `emetteur_id`, `recepteur_id`, `message`, `datetime`) VALUES
(1, 1, 2, 'bonjour', '2024-05-29 15:56:25'),
(2, 2, 1, 'cv', '2024-05-29 15:56:44');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 2),
(6, '2024_05_20_224829_create_attitude_spontanees_table', 2),
(7, '2024_05_20_225148_create_facteurs_table', 2),
(8, '2024_05_20_225936_create_attitude_spontanees_dds_table', 2),
(9, '2024_05_20_230002_create_reactions_posturales_table', 2),
(10, '2024_05_20_230030_create_evaluation_rachis_table', 2),
(11, '2024_05_20_230048_create_motricite_provoquees_table', 2),
(12, '2024_05_20_230111_create_examenpodoscopiques_table', 2),
(13, '2024_05_20_230126_create_evaluations_table', 2),
(14, '2024_05_20_230140_create_evaluation_generales_table', 2),
(15, '2024_05_20_230205_create_doleances_actuelles_table', 2),
(16, '2024_05_20_230223_create_injection_toxines_table', 2),
(17, '2024_05_20_230236_create_kinésitherapies_table', 2),
(18, '2024_05_20_230250_create_appareillages_table', 2),
(19, '2024_05_20_230323_create_evaluation_fonctionnelles_table', 2),
(20, '2024_05_20_230337_create_evaluation_marches_table', 2),
(21, '2024_05_20_232027_create_interrogatoires_table', 3),
(22, '2024_05_21_110500_create_prescriptions_table', 4),
(23, '2024_05_21_160640_create_evaluation_sensorielles_table', 5),
(24, '2024_05_21_233502_create_appareillages_table', 6),
(25, '2024_05_21_233737_create_attitude_spontanees_table', 7),
(26, '2024_05_21_234032_create_doleances_actuelles_table', 8),
(27, '2024_05_21_234137_create_etude__facteurs_table', 9),
(28, '2024_05_21_234338_create_evaluation_fonctionnelles_table', 10),
(29, '2024_05_21_234432_create_evaluation_generales_table', 11),
(30, '2024_05_21_234723_create_evaluation_marches_table', 12),
(31, '2024_05_21_234818_create_evaluation_rachis_table', 13),
(32, '2024_05_21_234911_create_evaluation_sensorielles_table', 14),
(33, '2024_05_21_235009_create_examenpodoscopiques_table', 15),
(34, '2024_05_21_235100_create_injection_toxines_table', 16),
(35, '2024_05_21_235203_create_interrogatoires_table', 17),
(36, '2024_05_21_235531_create_kinesitherapies_table', 18),
(37, '2024_05_21_235617_create_motricite_provoquees_table', 19),
(38, '2024_05_21_235716_create_prescriptions_table', 20),
(39, '2024_05_23_163056_groupements', 21);

-- --------------------------------------------------------

--
-- Structure de la table `motricite_provoquees`
--

CREATE TABLE `motricite_provoquees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `agrippement` varchar(20) DEFAULT NULL,
  `retournement_mi` varchar(20) DEFAULT NULL,
  `retournement_tete_ms` varchar(20) DEFAULT NULL,
  `redressement_membres_superieurs` varchar(20) DEFAULT NULL,
  `schema_reptation` varchar(255) DEFAULT NULL,
  `tenu_assis` varchar(20) DEFAULT NULL,
  `tire_assis` varchar(20) DEFAULT NULL,
  `assis_tailleur` varchar(20) DEFAULT NULL,
  `sur_chaise` varchar(20) DEFAULT NULL,
  `passage_assis_debout` varchar(20) DEFAULT NULL,
  `station_verticale` varchar(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `visite_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `motricite_provoquees`
--

INSERT INTO `motricite_provoquees` (`id`, `agrippement`, `retournement_mi`, `retournement_tete_ms`, `redressement_membres_superieurs`, `schema_reptation`, `tenu_assis`, `tire_assis`, `assis_tailleur`, `sur_chaise`, `passage_assis_debout`, `station_verticale`, `created_at`, `updated_at`, `visite_id`) VALUES
(1, 'non', 'non', 'non', 'non', 'bonjour', 'non', 'non', 'non', 'non', 'non', 'non', '2024-05-25 09:01:19', '2024-05-25 09:50:56', 1),
(2, 'oui', 'oui', 'oui', 'oui', 'bonjour', 'oui', 'oui', 'oui', 'oui', 'oui', 'oui', '2024-05-25 09:31:27', '2024-05-25 09:32:58', 2),
(3, 'non', 'non', 'non', 'non', NULL, 'non', 'non', 'non', 'non', 'non', 'non', '2024-05-26 12:40:24', '2024-05-26 12:40:24', 3),
(4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-26 15:02:09', '2024-05-26 15:02:09', 4),
(5, 'oui', 'oui', 'oui', 'oui', 'Motricités Provoquées:', 'oui', 'oui', 'oui', 'oui', 'oui', 'oui', NULL, NULL, 13);

-- --------------------------------------------------------

--
-- Structure de la table `ordonnances`
--

CREATE TABLE `ordonnances` (
  `id` int(8) NOT NULL,
  `contenu` longtext NOT NULL,
  `type` text NOT NULL,
  `visite_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `ordonnances`
--

INSERT INTO `ordonnances` (`id`, `contenu`, `type`, `visite_id`) VALUES
(1, 'contenu1', 'oui', 1),
(2, 'ahklh', 'ahklz', 2),
(5, 'contenu 33', 'type de contenu33', 1),
(7, 'Baclofène (10 mg)\r\n\r\nPosologie : 1 comprimé, 2 fois par jour\r\nDurée : 1 mois\r\nPhysiothérapie\r\n\r\nSéances : 1 fois par semaine\r\nDurée : 3 mois', 'contrôle', 7),
(8, 'Baclofène (10 mg)\r\nPosologie : 1 comprimé, 2 fois par jour\r\nDurée : 1 mois\r\nPhysiothérapie\r\nSéances : 1 fois par semaine\r\nDurée : 3 mois', 'Ordonnance de traitement et rééducation pédiatrique', 7);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('aaheddridi@gmail.com', '$2y$10$3UhLy1dJj41R8gEkI8WOVO95LeLrayEDos9yPtfHZviMVnTk0Lk5a', '2024-05-14 11:31:12'),
('medecin1@gmail.com', '$2y$10$gnYrnkmz89bhK0eEioobxORZTTnfnzTnMpV5h4FBdY/iPIckqpYv2', '2024-05-31 08:02:56'),
('secretaire2@gmail.com', '$2y$10$llpdAZiwlxb93AAQ3Pv/i.UZ3yBmVUDTl8NSDqNulBc/9iDEvAynC', '2024-05-14 11:33:35');

-- --------------------------------------------------------

--
-- Structure de la table `patients`
--

CREATE TABLE `patients` (
  `id` int(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `date_naissance` date NOT NULL,
  `author_id` int(255) NOT NULL,
  `parent_id` int(255) DEFAULT NULL,
  `num_telephone` int(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `sexe` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `patients`
--

INSERT INTO `patients` (`id`, `nom`, `prenom`, `photo`, `date_naissance`, `author_id`, `parent_id`, `num_telephone`, `adresse`, `sexe`) VALUES
(1, 'Amel', 'Driss', '1712413219.png', '2022-02-02', 2, 7, 20120120, 'Sfax', ''),
(4, 'boubou', 'patient2', '1712413219.png', '2000-05-05', 2, 7, 50320320, 'Mahdia', ''),
(5, 'dridii', 'ahed', '1715121149.jpg', '2023-01-04', 2, 6, 23150102, 'Sousse', ''),
(6, 'rawaa', 'ferid', NULL, '2024-05-25', 2, 6, 99673890, 'Kef centre', ''),
(7, 'molka', 'helali', '1717000694.png', '2008-01-08', 2, 6, 23445567, 'sousse', ''),
(8, 'nour', 'ahmed', '1717004183.jpg', '2018-02-15', 3, 6, 43557743, 'sousse', ''),
(9, 'Afli', 'kenza', '1717010166.jpg', '2020-01-29', 3, 6, 57568964, 'Mahdia', 'femme'),
(10, 'Ben ayed', 'Ayoub', '1717010257.jpg', '2011-06-29', 3, 7, 2966643, 'Gabes', ''),
(11, 'Sioud', 'Youssef', '1717010392.jpg', '2014-07-15', 3, 7, 66546788, 'Monastir sahlin', ''),
(12, 'Khalifa', 'Molka', '1717010603.jpg', '2023-12-20', 3, 6, 55335565, 'Bizert', ''),
(13, 'Haj amor', 'Zineb', '1717010720.jpg', '2024-02-29', 3, 6, 6575443, 'Gabes', ''),
(14, 'Ben ltifa', 'Ghali', '1717010851.jpg', '2009-02-27', 3, 6, 5443325, 'nabel', ''),
(15, 'Ben kemla', 'mayssa', '1717018050.jpg', '2024-05-08', 2, 7, 54325432, 'sousse', '');

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `contenu` text NOT NULL,
  `legende` varchar(255) NOT NULL,
  `datePost` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `contenu`, `legende`, `datePost`) VALUES
(4, 1, 'La paralysie cérébrale (PC) est une affection neurologique due à des lésions cérébrales survenues avant, pendant, ou peu après la naissance, affectant le mouvement et la coordination. Les causes incluent les accidents vasculaires cérébraux néonataux, les infections durant la grossesse, les complications à la naissance, et les traumatismes crâniens. La PC peut être spastique (rigidité musculaire), dyskinétique (mouvements involontaires), ataxique (problèmes de coordination), ou mixte. Bien qu\'incurable, des traitements comme les thérapies physiques, les médicaments et les interventions chirurgicales peuvent améliorer la qualité de vie des personnes atteintes.', '1716328052.jpg', '2024-05-31 04:51:15'),
(5, 1, 'La paralysie cérébrale (PC) est un trouble neurologique causé par des lésions cérébrales avant, pendant, ou peu après la naissance, affectant le mouvement et la coordination. Les causes incluent les AVC néonataux, infections pendant la grossesse, complications à la naissance et traumatismes crâniens. Les types principaux sont spastique (rigidité musculaire), dyskinétique (mouvements involontaires) et ataxique (problèmes de coordination). Bien qu\'incurable, des thérapies, des médicaments et des interventions chirurgicales peuvent améliorer la qualité de vie des patients.', '1716328074.jpg', '2024-05-31 04:52:21'),
(6, 1, 'La paralysie cérébrale (PC) est une affection neurologique due à des lésions cérébrales avant, pendant ou peu après la naissance. Elle affecte la motricité et la coordination. Les causes incluent les AVC néonataux, les infections pendant la grossesse et les complications à la naissance. La PC peut être spastique (rigidité musculaire), dyskinétique (mouvements involontaires) ou ataxique (problèmes de coordination). Les traitements, bien qu\'ils ne guérissent pas la PC, comme les thérapies physiques, les médicaments et les interventions chirurgicales, améliorent la qualité de vie des patients.', '1716328093.jpg', '2024-05-31 04:53:19'),
(8, 1, 'La Paralysie Cérébrale : Aperçu Rapide\r\nsurvenant avant, pendant ou peu après la naissance, affectant le mouvement, la posture et la coordination. Les principales causes incluent les accidents vasculaires cérébraux néonataux, les infections pendant la grossesse, les complications à la naissance et les traumatismes crâniens. La PC se présente sous diverses formes : spastique (rigidité musculaire), dyskinétique (mouvements involontaires), ataxique (problèmes de coordination) et mixte. Bien qu\'il n\'existe pas de remède, des traitements comme les thérapies physiques et occupationnelles, les médicaments et les interventions chirurgicales peuvent améliorer la qualité de vie des personnes atteintes.', '1717138843.avif', '2024-05-31 05:00:43'),
(9, 1, 'La paralysie cérébrale (PC) est une affection neurologique due à des lésions cérébrales avant, pendant ou peu après la naissance. Elle affecte la motricité et la coordination. Les causes incluent les AVC néonataux, les infections pendant la grossesse et les complications à la naissance. La PC peut être spastique (rigidité musculaire), dyskinétique (mouvements involontaires) ou ataxique (problèmes de coordination). Les traitements, bien qu\'ils ne guérissent pas la PC, comme les thérapies physiques, les médicaments et les interventions chirurgicales, améliorent la qualité de vie des patients.', '1717138585.jpg', '2024-05-31 04:56:25'),
(10, 1, 'La paralysie cérébrale (PC) est une affection neurologique due à des lésions cérébrales avant, pendant ou peu après la naissance. Elle affecte la motricité et la coordination. Les causes incluent les AVC néonataux, les infections pendant la grossesse et les complications à la naissance. La PC peut être spastique (rigidité musculaire), dyskinétique (mouvements involontaires) ou ataxique (problèmes de coordination). Les traitements, bien qu\'ils ne guérissent pas la PC, comme les thérapies physiques, les médicaments et les interventions chirurgicales, améliorent la qualité de vie des patients.', '1717138756.png', '2024-05-31 04:59:16');

-- --------------------------------------------------------

--
-- Structure de la table `prescriptions`
--

CREATE TABLE `prescriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `platre` varchar(20) DEFAULT NULL,
  `type_platre` text DEFAULT NULL,
  `ergotherapie` varchar(20) DEFAULT NULL,
  `depuis_quand` date DEFAULT NULL,
  `orthophonie` varchar(20) DEFAULT NULL,
  `neuropsychologique` varchar(20) DEFAULT NULL,
  `chirurgie` varchar(20) DEFAULT NULL,
  `decision_chirurgie` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `visite_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `prescriptions`
--

INSERT INTO `prescriptions` (`id`, `platre`, `type_platre`, `ergotherapie`, `depuis_quand`, `orthophonie`, `neuropsychologique`, `chirurgie`, `decision_chirurgie`, `created_at`, `updated_at`, `visite_id`) VALUES
(1, 'oui', NULL, '', NULL, 'oui', 'oui', 'oui', 'bonjour', '2024-05-25 15:38:30', '2024-05-25 15:40:02', 2),
(2, NULL, NULL, '', NULL, 'oui', NULL, NULL, NULL, '2024-05-26 12:14:00', '2024-05-26 12:14:00', 1),
(3, 'non', NULL, 'non', NULL, 'non', 'non', 'non', 'bonjpurr', '2024-05-26 12:40:24', '2024-05-28 21:21:51', 3),
(4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-26 15:02:09', '2024-05-26 15:02:09', 4),
(5, 'oui', NULL, 'oui', NULL, 'oui', 'oui', 'oui', 'Motricités Provoquées:', NULL, NULL, 13);

-- --------------------------------------------------------

--
-- Structure de la table `rdvs`
--

CREATE TABLE `rdvs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `emetteur_id` int(255) NOT NULL,
  `recepteur_id` int(255) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `note` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `dossier_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `rdvs`
--

INSERT INTO `rdvs` (`id`, `emetteur_id`, `recepteur_id`, `date`, `status`, `note`, `created_at`, `updated_at`, `dossier_id`) VALUES
(1, 2, 6, '2024-05-18', 'Pas encore', 'Urgent', '2024-05-03 12:41:31', '2024-06-03 21:26:02', 8),
(5, 2, 7, '2024-05-18', 'Validé', 'oui', '2024-05-07 21:44:45', '2024-05-07 21:47:42', 7),
(6, 2, 6, '2024-05-23', 'Annulé', 'oui', '2024-05-12 11:03:07', '2024-05-12 11:03:27', 5),
(9, 3, 6, '2024-07-03', 'Pas encore', 'urgent', '2024-05-29 18:00:52', '2024-05-29 19:13:17', 8),
(10, 3, 6, '2024-06-21', 'Pas encore', 'urgent', '2024-05-29 18:01:18', '2024-05-29 18:01:18', 8),
(11, 3, 6, '2024-08-02', 'Pas encore', 'urgent', '2024-05-29 18:02:01', '2024-05-29 18:02:01', 8),
(12, 3, 7, '2024-07-26', 'Pas encore', 'urgent', '2024-05-29 18:02:29', '2024-05-29 18:02:29', 10),
(13, 3, 6, '2024-07-10', 'Pas encore', 'urgent', '2024-05-29 18:03:01', '2024-05-29 18:03:01', 8),
(14, 3, 7, '2024-06-27', 'Pas encore', 'urgent', '2024-05-29 19:04:57', '2024-05-29 19:04:57', 10),
(15, 3, 7, '2024-06-06', 'Pas encore', 'urgent', '2024-05-29 19:05:15', '2024-05-29 19:05:15', 10),
(16, 3, 7, '2024-04-16', 'Pas encore', 'urgent', '2024-05-29 19:07:49', '2024-05-29 19:07:49', 10),
(17, 3, 6, '2024-06-06', 'Pas encore', 'urgent', '2024-05-29 19:18:36', '2024-05-29 19:20:50', 8),
(18, 3, 6, '2024-05-30', 'Pas encore', 'ffffff', '2024-05-29 19:21:26', '2024-05-29 19:21:26', 8);

-- --------------------------------------------------------

--
-- Structure de la table `reclamations`
--

CREATE TABLE `reclamations` (
  `id` int(255) NOT NULL,
  `feedback` varchar(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `recepteur_id` int(255) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `reclamations`
--

INSERT INTO `reclamations` (`id`, `feedback`, `user_id`, `recepteur_id`, `date`) VALUES
(1, 'probleme1', 3, 1, '2024-05-29 18:47:38'),
(2, 'probleme212', 2, 1, '2024-06-03 15:17:12'),
(3, 'probleme 3', 2, 1, '2024-05-29 16:55:19'),
(4, 'bonjour', 4, 1, '2024-05-30 23:58:01'),
(5, 'bonne nuit', 4, 1, '2024-05-30 23:58:19');

-- --------------------------------------------------------

--
-- Structure de la table `specific_evaluations`
--

CREATE TABLE `specific_evaluations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `g_av` varchar(255) DEFAULT NULL,
  `g_ar` varchar(255) DEFAULT NULL,
  `d_av` varchar(255) DEFAULT NULL,
  `d_ar` varchar(255) DEFAULT NULL,
  `groupement_id` bigint(20) UNSIGNED NOT NULL,
  `visite_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `specific_evaluations`
--

INSERT INTO `specific_evaluations` (`id`, `g_av`, `g_ar`, `d_av`, `d_ar`, `groupement_id`, `visite_id`, `created_at`, `updated_at`) VALUES
(7, 'add', NULL, NULL, NULL, 2, 1, '2024-05-25 09:08:54', '2024-05-25 09:08:54'),
(8, 'abd', NULL, NULL, NULL, 12, 1, '2024-05-25 09:08:54', '2024-05-25 09:08:54'),
(9, NULL, NULL, NULL, NULL, 14, 1, '2024-05-25 09:08:54', '2024-05-25 09:08:54'),
(10, 'tb', NULL, NULL, NULL, 15, 1, '2024-05-25 09:08:54', '2024-05-25 09:08:54'),
(11, NULL, NULL, NULL, NULL, 16, 1, '2024-05-25 09:08:54', '2024-05-25 09:08:54'),
(12, NULL, NULL, NULL, NULL, 17, 1, '2024-05-25 09:08:54', '2024-05-25 09:08:54'),
(13, NULL, NULL, NULL, NULL, 19, 1, '2024-05-25 09:08:54', '2024-05-25 09:08:54'),
(14, NULL, NULL, NULL, NULL, 20, 1, '2024-05-25 09:08:54', '2024-05-25 09:08:54'),
(15, NULL, NULL, NULL, NULL, 21, 1, '2024-05-25 09:08:54', '2024-05-25 09:08:54'),
(16, 'fcp', NULL, NULL, NULL, 23, 1, '2024-05-25 09:08:54', '2024-05-25 09:08:54'),
(17, NULL, NULL, NULL, NULL, 24, 1, '2024-05-25 09:08:54', '2024-05-25 09:08:54'),
(18, NULL, NULL, NULL, NULL, 25, 1, '2024-05-25 09:08:54', '2024-05-25 09:08:54'),
(19, NULL, NULL, NULL, NULL, 26, 1, '2024-05-25 09:08:54', '2024-05-25 09:08:54'),
(20, NULL, NULL, NULL, NULL, 28, 1, '2024-05-25 09:08:54', '2024-05-25 09:08:54'),
(21, NULL, NULL, NULL, NULL, 29, 1, '2024-05-25 09:08:54', '2024-05-25 09:08:54'),
(22, NULL, NULL, NULL, NULL, 31, 1, '2024-05-25 09:08:54', '2024-05-25 09:08:54'),
(23, NULL, NULL, NULL, NULL, 32, 1, '2024-05-25 09:08:54', '2024-05-25 09:08:54'),
(24, NULL, NULL, NULL, NULL, 33, 1, '2024-05-25 09:08:54', '2024-05-25 09:08:54'),
(25, NULL, NULL, NULL, NULL, 34, 1, '2024-05-25 09:08:54', '2024-05-25 09:08:54'),
(26, NULL, NULL, NULL, NULL, 35, 1, '2024-05-25 09:08:54', '2024-05-25 09:08:54'),
(27, NULL, NULL, NULL, NULL, 37, 1, '2024-05-25 09:08:54', '2024-05-25 09:08:54'),
(28, NULL, NULL, NULL, NULL, 38, 1, '2024-05-25 09:08:54', '2024-05-25 09:08:54'),
(29, NULL, NULL, NULL, NULL, 39, 1, '2024-05-25 09:08:54', '2024-05-25 09:08:54'),
(30, NULL, NULL, NULL, NULL, 41, 1, '2024-05-25 09:08:54', '2024-05-25 09:08:54'),
(31, NULL, NULL, NULL, NULL, 42, 1, '2024-05-25 09:08:54', '2024-05-25 09:08:54'),
(32, NULL, NULL, NULL, NULL, 43, 1, '2024-05-25 09:08:54', '2024-05-25 09:08:54'),
(33, NULL, NULL, NULL, NULL, 44, 1, '2024-05-25 09:08:54', '2024-05-25 09:08:54'),
(34, NULL, NULL, NULL, NULL, 45, 1, '2024-05-25 09:08:54', '2024-05-25 09:08:54'),
(35, NULL, NULL, NULL, NULL, 46, 1, '2024-05-25 09:08:54', '2024-05-25 09:08:54'),
(36, NULL, NULL, NULL, NULL, 47, 1, '2024-05-25 09:08:54', '2024-05-25 09:08:54'),
(37, NULL, NULL, NULL, NULL, 48, 1, '2024-05-25 09:08:54', '2024-05-25 09:08:54'),
(38, NULL, NULL, NULL, NULL, 49, 1, '2024-05-25 09:08:54', '2024-05-25 09:08:54'),
(39, NULL, NULL, NULL, NULL, 50, 1, '2024-05-25 09:08:54', '2024-05-25 09:08:54'),
(40, NULL, NULL, NULL, NULL, 51, 1, '2024-05-25 09:08:54', '2024-05-25 09:08:54');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `hopital_id` int(255) DEFAULT NULL,
  `carte_professionnelle` varchar(255) DEFAULT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0,
  `sexe` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `num` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `date_naissance` date NOT NULL,
  `specialite` varchar(255) DEFAULT NULL,
  `verifie` varchar(255) NOT NULL DEFAULT 'non',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `username`, `email`, `hopital_id`, `carte_professionnelle`, `role`, `sexe`, `password`, `num`, `image`, `date_naissance`, `specialite`, `verifie`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'nom administrateur', 'prenom administrateur', 'administrateur', 'administrateur1@gmail.com', 7, NULL, 1, 'homme', '$2y$10$P4Nad./fw3Ror566XzkUEuz8A1h4Gsnin/aztfVTHBnFjznayNQHm', '20320120', '1717139231.jpg', '1987-08-07', NULL, 'oui', NULL, '2024-04-04 13:08:01', '2024-05-31 05:07:11'),
(2, 'Ghawar', 'Yoser', 'Yoser', 'aaheddridi2@gmail.com', 5, '1717007018.png', 3, 'femme', '$2y$10$X5PUxlyqNIPTKXRQcgHBUe0he6kqPrcjp5vC9a./k9p7tu4DVsUt6', '21201210', '1717007018.png', '1998-04-04', 'aide soignante', 'oui', '90suWuSchZRnrubvGXOR588lMOuvtlko0pkyNxBfUZhIwQV9yGkYmc5w0smR', '2024-04-04 13:02:16', '2024-05-29 16:23:38'),
(3, 'amina', 'lakhel', 'secretaire2', 'secretaire2@gmail.com', 1, '1717004051.png', 3, 'femme', '$2y$10$yCjeLOHkALva52eKYUupvOvdUPJVlLx/jnILnkW0r7UGGqHb5n0WK', '50120120', '1717004051.jpg', '1990-08-04', 'aide soignante', 'oui', NULL, '2024-04-04 13:03:24', '2024-05-29 15:34:11'),
(4, 'salem', 'ilheni', 'salem', 'medecin1@gmail.com', 1, '1713204821.jpg', 2, 'homme', '$2y$10$Rb7man0EF3XQrcb7jqIEb.hMruGEKbQi1QwfwbxoDu.WqmUmyg3ki', '50123102', '1717003649.jpg', '1986-07-04', 'médecin physique', 'oui', NULL, '2024-04-04 13:04:43', '2024-05-29 15:27:29'),
(5, 'hamza', 'ben salem', 'hamza', 'medecin2@gmail.com', 1, '1717004616.png', 2, 'homme', '$2y$10$6YcJ3uWSowMBFFy0OllFQ.njLU81IcH3S3DOFzHKxjL2MUDyxD/ZW', '27510150', '1717004616.jpg', '1983-03-04', 'médecine  physique', 'oui', NULL, '2024-04-04 13:11:17', '2024-05-29 15:43:36'),
(6, 'Benzarti', 'Mariem', 'Mariem', 'parent1@gmail.com', 7, NULL, 4, 'femme', '$2y$10$TbxQwRQbWKaz37aqJ0s8xOCOP2koKpam2Q8SO9/txmep7RbHoD.Aq', '23012012', '1717006409.jpg', '1984-08-04', NULL, 'oui', NULL, '2024-04-04 13:13:26', '2024-05-29 16:13:29'),
(7, 'Moussa', 'Ramzi', 'Ramzi', 'parent2@gmail.com', 5, NULL, 4, 'homme', '$2y$10$nNq048jEeNHprolAZP1AeejlEWBya3p7CKjfWkaomV6hJwxh.qQ/W', '97410410', '1717006517.jpg', '1991-12-04', NULL, 'oui', NULL, '2024-04-04 13:14:43', '2024-05-29 16:15:17'),
(10, 'Belkhir', 'Nabil', 'Nabil', 'medecin3@gmail.com', 5, '1717006685.png', 2, 'homme', '$2y$10$NJiEKLOZHx1cNBg73xc/uOuhu7bHsgxnNhGL5zxkSddkTRLRU2jum', '21201210', '1717006650.jpg', '1991-12-15', 'Médecine physique', 'oui', NULL, '2024-04-15 16:13:41', '2024-05-29 16:18:05'),
(15, 'Belhedi', 'Asma', 'Asma', 'asma333@gmail.com', NULL, '1717006030.png', 2, 'femme', '$2y$10$T1AXwquyXwBtNMBvEuF6oOG0ACgB1Z.UHqPbnSWj.qHmPts7z5k4S', '99645325', '1717006030.jpg', '1975-10-17', 'médecine physique', 'oui', NULL, '2024-05-29 16:07:10', '2024-05-29 16:31:58'),
(16, 'Ferid', 'Rawaa', 'Farid rawaa', 'aaheddridi@gmail.com', NULL, '1717148503.jpg', 2, 'femme', '$2y$10$jTFANU3wh3CM1apMtvdvMOZayMS55iUVmx9ptJCWUNbMdY0AAyE4O', '24453332', NULL, '1995-06-10', 'Medecine physique', 'oui', NULL, '2024-05-31 07:41:43', '2024-06-03 13:13:09');

-- --------------------------------------------------------

--
-- Structure de la table `villes`
--

CREATE TABLE `villes` (
  `id` int(255) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `villes`
--

INSERT INTO `villes` (`id`, `nom`) VALUES
(1, 'Tunis (Capitale)'),
(2, 'Sfax'),
(3, 'Sousse'),
(4, 'Kairouan'),
(5, 'Gabès'),
(6, 'Bizerte'),
(7, 'Gafsa'),
(8, 'Nabeul'),
(9, 'Ariana'),
(10, 'Ben Arous'),
(11, 'Jendouba'),
(12, 'Kasserine'),
(13, 'Kef'),
(14, 'Mahdia'),
(15, 'Manouba'),
(16, 'Monastir'),
(17, 'Nabeul'),
(18, 'Siliana'),
(19, 'Tataouine'),
(20, 'Tozeur'),
(21, 'Zaghouan'),
(22, 'Médenine'),
(23, 'Sidi Bouzid'),
(24, 'Kébili');

-- --------------------------------------------------------

--
-- Structure de la table `visites`
--

CREATE TABLE `visites` (
  `id` int(255) NOT NULL,
  `titre` text NOT NULL,
  `type` text NOT NULL,
  `date` datetime NOT NULL,
  `dossier_id` int(11) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `supprime` varchar(255) NOT NULL DEFAULT 'non'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `visites`
--

INSERT INTO `visites` (`id`, `titre`, `type`, `date`, `dossier_id`, `slug`, `supprime`) VALUES
(1, 'visite1', 'aaa', '2024-04-18 18:14:00', 2, NULL, 'non'),
(2, 'visite2', 'jhjk', '2024-04-18 18:14:00', 2, NULL, 'non'),
(3, 'aa', 'aa', '2024-05-12 15:56:00', 1, NULL, 'non'),
(4, 'cc', 'cc', '2024-04-29 13:58:00', 1, NULL, 'non'),
(5, 'visite rawaa', 'type de visite de rawaa', '2024-05-18 15:28:00', 5, NULL, 'oui'),
(6, 'viste2', 'type', '2024-05-18 15:28:00', 5, NULL, 'non'),
(7, 'Examen total', 'contrôle', '2024-01-10 12:31:00', 6, NULL, 'non'),
(8, 'injection toxine', 'contrôle', '2024-01-17 10:32:00', 6, NULL, 'non'),
(9, 'Viste d\'urgence', 'visite', '2023-12-21 11:35:00', 6, NULL, 'non'),
(10, 'Visite de soins préventifs', 'visite', '2024-03-06 11:34:00', 6, NULL, 'non'),
(11, 'Examen total', 'contrôle', '2024-05-10 23:35:00', 6, NULL, 'non'),
(12, 'injection toxine', 'visite', '2024-01-17 09:35:00', 6, NULL, 'non'),
(13, 'Examen total', 'visite', '2024-03-01 11:51:00', 7, NULL, 'non'),
(14, 'Viste d\'urgence', 'tres urgent', '2024-02-21 15:52:00', 7, NULL, 'non'),
(15, 'Examen total', 'contrôle', '2023-11-30 13:52:00', 7, NULL, 'non'),
(16, 'injection toxine', 'tres urgent', '2024-01-10 14:53:00', 7, NULL, 'non');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `appareillages`
--
ALTER TABLE `appareillages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `attitude_spontanees`
--
ALTER TABLE `attitude_spontanees`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `attitude_spontanees_dds`
--
ALTER TABLE `attitude_spontanees_dds`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `doleances_actuelles`
--
ALTER TABLE `doleances_actuelles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `dossiers`
--
ALTER TABLE `dossiers`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `etude__facteurs`
--
ALTER TABLE `etude__facteurs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `evaluation_fonctionnelles`
--
ALTER TABLE `evaluation_fonctionnelles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `evaluation_generales`
--
ALTER TABLE `evaluation_generales`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `evaluation_marches`
--
ALTER TABLE `evaluation_marches`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `evaluation_rachis`
--
ALTER TABLE `evaluation_rachis`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `evaluation_sensorielles`
--
ALTER TABLE `evaluation_sensorielles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `examenpodoscopiques`
--
ALTER TABLE `examenpodoscopiques`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `groupements`
--
ALTER TABLE `groupements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `groupements_parent_id_foreign` (`parent_id`);

--
-- Index pour la table `hopitaux`
--
ALTER TABLE `hopitaux`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `injection_toxines`
--
ALTER TABLE `injection_toxines`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `interrogatoires`
--
ALTER TABLE `interrogatoires`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `kinesitherapies`
--
ALTER TABLE `kinesitherapies`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `motricite_provoquees`
--
ALTER TABLE `motricite_provoquees`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ordonnances`
--
ALTER TABLE `ordonnances`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `prescriptions`
--
ALTER TABLE `prescriptions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `rdvs`
--
ALTER TABLE `rdvs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reclamations`
--
ALTER TABLE `reclamations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `specific_evaluations`
--
ALTER TABLE `specific_evaluations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `specific_evaluations_groupement_id_foreign` (`groupement_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Index pour la table `villes`
--
ALTER TABLE `villes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `visites`
--
ALTER TABLE `visites`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `appareillages`
--
ALTER TABLE `appareillages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `attitude_spontanees`
--
ALTER TABLE `attitude_spontanees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `attitude_spontanees_dds`
--
ALTER TABLE `attitude_spontanees_dds`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `doleances_actuelles`
--
ALTER TABLE `doleances_actuelles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `dossiers`
--
ALTER TABLE `dossiers`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `etude__facteurs`
--
ALTER TABLE `etude__facteurs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `evaluation_fonctionnelles`
--
ALTER TABLE `evaluation_fonctionnelles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `evaluation_generales`
--
ALTER TABLE `evaluation_generales`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `evaluation_marches`
--
ALTER TABLE `evaluation_marches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `evaluation_rachis`
--
ALTER TABLE `evaluation_rachis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `evaluation_sensorielles`
--
ALTER TABLE `evaluation_sensorielles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `examenpodoscopiques`
--
ALTER TABLE `examenpodoscopiques`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `groupements`
--
ALTER TABLE `groupements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT pour la table `hopitaux`
--
ALTER TABLE `hopitaux`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT pour la table `injection_toxines`
--
ALTER TABLE `injection_toxines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `interrogatoires`
--
ALTER TABLE `interrogatoires`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `kinesitherapies`
--
ALTER TABLE `kinesitherapies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT pour la table `motricite_provoquees`
--
ALTER TABLE `motricite_provoquees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `ordonnances`
--
ALTER TABLE `ordonnances`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `prescriptions`
--
ALTER TABLE `prescriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `rdvs`
--
ALTER TABLE `rdvs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `reclamations`
--
ALTER TABLE `reclamations`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `specific_evaluations`
--
ALTER TABLE `specific_evaluations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `villes`
--
ALTER TABLE `villes`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT pour la table `visites`
--
ALTER TABLE `visites`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `groupements`
--
ALTER TABLE `groupements`
  ADD CONSTRAINT `groupements_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `groupements` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `specific_evaluations`
--
ALTER TABLE `specific_evaluations`
  ADD CONSTRAINT `specific_evaluations_groupement_id_foreign` FOREIGN KEY (`groupement_id`) REFERENCES `groupements` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
