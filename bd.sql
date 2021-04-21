-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : mer. 21 avr. 2021 à 17:55
-- Version du serveur :  5.7.32
-- Version de PHP : 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données : `stock_produit`
--

-- --------------------------------------------------------

--
-- Structure de la table `Catégorie`
--

CREATE TABLE `Catégorie` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Catégorie`
--

INSERT INTO `Catégorie` (`id`, `nom`, `created_at`, `updated_at`) VALUES
(1, 'refrigérateur', '2021-04-19 14:47:14', '2021-04-19 14:47:14'),
(2, 'splites', NULL, '2021-04-21 16:51:25'),
(3, 'Téléviseur', '2021-04-21 09:11:25', '2021-04-29 09:11:25'),
(4, 'Congélateurs', '2021-05-05 09:11:25', '2021-04-21 16:52:45');

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id`, `name`, `adresse`, `telephone`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Aziz', 'vgkgvksv', '2213141414', 'ufkzf@gmail.com', '2021-04-06 10:30:41', '2021-04-14 10:30:41'),
(2, 'Amir', 'vkgsvsf', '2234152514', 'ètfjyf@gmail.com', '2021-04-26 10:30:41', '2021-04-29 10:30:41');

-- --------------------------------------------------------

--
-- Structure de la table `generations`
--

CREATE TABLE `generations` (
  `id` int(10) UNSIGNED NOT NULL,
  `mode` int(11) NOT NULL,
  `date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quantite` int(11) NOT NULL,
  `stock_actuel` int(11) NOT NULL,
  `prix_achat` int(11) NOT NULL,
  `prix_uni` int(11) NOT NULL,
  `entree_par` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_produit` int(11) NOT NULL,
  `id_vendeur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `generations`
--

INSERT INTO `generations` (`id`, `mode`, `date`, `quantite`, `stock_actuel`, `prix_achat`, `prix_uni`, `entree_par`, `created_at`, `updated_at`, `id_produit`, `id_vendeur`) VALUES
(2, 1, '2021-04-23', 56, 56, 0, 300000, 1, '2021-04-17 08:35:43', '2021-04-19 16:29:03', 2, 1),
(3, 0, '2021-04-28', 21, 21, 700000, 900000, 1, '2021-04-20 09:51:09', '2021-04-20 14:35:39', 3, 3),
(4, 0, '2021-06-15', 20, 20, 500000, 750000, 1, '2021-04-20 10:49:22', '2021-04-20 10:49:22', 3, 4),
(5, 0, '2021-04-01', 5, 5, 1000000, 1500000, 1, '2021-04-20 12:06:57', '2021-04-20 12:06:57', 4, 1),
(6, 0, '2021-04-01', 5, 5, 1000000, 1500000, 1, '2021-04-20 12:07:51', '2021-04-20 12:07:51', 4, 1),
(7, 0, '2021-04-02', 20, 20, 300000, 400000, 1, '2021-04-20 14:35:29', '2021-04-20 14:35:29', 4, 3);

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_07_08_204536_create_generations_table', 1),
('2016_07_08_230735_create_types_table', 1),
('2016_07_11_192315_create_clients_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `Produit`
--

CREATE TABLE `Produit` (
  `id` int(11) NOT NULL,
  `id_categorie` varchar(255) NOT NULL,
  `nom_produit` varchar(255) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Produit`
--

INSERT INTO `Produit` (`id`, `id_categorie`, `nom_produit`, `detail`, `created_at`, `updated_at`) VALUES
(1, '2', 'SPLTE STS12 1,5CV R22', '', NULL, NULL),
(2, '1', 'REFRIGERATEUR    STR 5858 K', '', NULL, NULL),
(3, '4', 'TV32 / TV43', 'Facture normalisée à l\'appui', NULL, NULL),
(4, '1', 'CONGELATEUR  STCD335H', 'Facture normalisée à l\'appui', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `sortie`
--

CREATE TABLE `sortie` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `id_client` int(11) NOT NULL,
  `montant_total` int(11) NOT NULL,
  `montant_paye` int(11) NOT NULL,
  `montant_due` int(11) NOT NULL,
  `vendu_par` int(11) NOT NULL,
  `moyen_paiement` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `sortie`
--

INSERT INTO `sortie` (`id`, `date`, `id_client`, `montant_total`, `montant_paye`, `montant_due`, `vendu_par`, `moyen_paiement`, `quantite`, `updated_at`, `created_at`, `deleted_at`) VALUES
(1, '2021-04-05', 1, 150000, 50000, 100000, 1, 2, 50, '2021-04-20 09:59:53', NULL, NULL),
(2, '2021-04-21', 2, 120000, 100000, 20000, 2, 0, 0, '2021-04-20 10:00:09', '2021-04-19 13:35:21', NULL),
(3, '2021-05-12', 1, 250000, 200000, 50000, 1, 0, 0, '2021-04-20 18:14:07', '2021-04-20 09:57:30', NULL),
(5, '2021-04-22', 2, 120000, 10000, 20000, 1, 0, 0, '2021-04-20 15:15:39', '2021-04-20 15:15:39', NULL),
(8, '2021-05-25', 2, 3000, 200000, 50000, 1, 0, 0, '2021-04-20 18:13:47', '2021-04-20 17:01:25', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `types`
--

CREATE TABLE `types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `types`
--

INSERT INTO `types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'ajouter', '2021-04-17 08:34:14', '2021-04-17 08:34:14'),
(2, 'modifier', '2021-04-17 08:34:21', '2021-04-17 08:34:21'),
(3, 'supprimer', '2021-04-17 08:34:27', '2021-04-17 08:34:27');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `noms` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `noms`, `email`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ali', 'ali@gmail.com', 'ali225', 1, NULL, NULL, NULL),
(2, 'free bryan', 'free@gmail.com', 'free225', 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `vendeur`
--

CREATE TABLE `vendeur` (
  `id` int(11) NOT NULL,
  `nom_vendeur` varchar(255) NOT NULL,
  `email_vendeur` varchar(255) NOT NULL,
  `téléphone_vendeur` int(11) NOT NULL,
  `address_vendeur` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `vendeur`
--

INSERT INTO `vendeur` (`id`, `nom_vendeur`, `email_vendeur`, `téléphone_vendeur`, `address_vendeur`) VALUES
(1, 'Ali', 'lol@gmail.com', 12345656, ''),
(2, 'koffi', 'ol@gmail.com', 12345678, ''),
(3, 'Moussa', 'gdhd@gmail.com', 111111111, 'rbkjhvnzrlvk'),
(4, 'Jacques', 'yiiuf@yahoo.fr', 101010101, 'rvegviefehuv');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Catégorie`
--
ALTER TABLE `Catégorie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `generations`
--
ALTER TABLE `generations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Index pour la table `Produit`
--
ALTER TABLE `Produit`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sortie`
--
ALTER TABLE `sortie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_pseudo_unique` (`noms`);

--
-- Index pour la table `vendeur`
--
ALTER TABLE `vendeur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Catégorie`
--
ALTER TABLE `Catégorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `generations`
--
ALTER TABLE `generations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `Produit`
--
ALTER TABLE `Produit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `sortie`
--
ALTER TABLE `sortie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `types`
--
ALTER TABLE `types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `vendeur`
--
ALTER TABLE `vendeur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
