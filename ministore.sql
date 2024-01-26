-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : ven. 26 jan. 2024 à 12:48
-- Version du serveur : 5.7.39
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ministore`
--

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20240109082716', '2024-01-09 08:27:29', 19),
('DoctrineMigrations\\Version20240110110130', '2024-01-10 11:01:45', 46),
('DoctrineMigrations\\Version20240110114357', '2024-01-10 11:44:00', 28),
('DoctrineMigrations\\Version20240110121755', '2024-01-10 12:18:00', 64),
('DoctrineMigrations\\Version20240110142212', '2024-01-10 14:22:21', 15),
('DoctrineMigrations\\Version20240110143749', '2024-01-10 14:37:53', 76),
('DoctrineMigrations\\Version20240111093238', '2024-01-11 09:32:51', 63),
('DoctrineMigrations\\Version20240112093733', '2024-01-12 09:37:44', 78),
('DoctrineMigrations\\Version20240112140853', '2024-01-12 14:09:05', 21),
('DoctrineMigrations\\Version20240112141447', '2024-01-12 14:14:52', 17),
('DoctrineMigrations\\Version20240112141605', '2024-01-12 14:16:08', 59),
('DoctrineMigrations\\Version20240112142810', '2024-01-12 14:28:33', 15),
('DoctrineMigrations\\Version20240112142940', '2024-01-12 14:29:46', 10),
('DoctrineMigrations\\Version20240112143423', '2024-01-12 14:34:30', 49),
('DoctrineMigrations\\Version20240119095208', '2024-01-19 09:52:19', 75),
('DoctrineMigrations\\Version20240122095302', '2024-01-22 09:53:34', 76),
('DoctrineMigrations\\Version20240122104101', '2024-01-22 10:41:04', 81),
('DoctrineMigrations\\Version20240122124023', '2024-01-22 12:40:33', 53),
('DoctrineMigrations\\Version20240122183752', '2024-01-22 18:38:11', 67),
('DoctrineMigrations\\Version20240124134621', '2024-01-24 13:46:29', 70),
('DoctrineMigrations\\Version20240125124654', '2024-01-25 12:47:31', 37),
('DoctrineMigrations\\Version20240126104849', '2024-01-26 10:49:03', 16);

-- --------------------------------------------------------

--
-- Structure de la table `logo`
--

CREATE TABLE `logo` (
  `id` int(11) NOT NULL,
  `img_logo` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `logo`
--

INSERT INTO `logo` (`id`, `img_logo`) VALUES
(1, 'main-logo.png');

-- --------------------------------------------------------

--
-- Structure de la table `messenger_messages`
--

CREATE TABLE `messenger_messages` (
  `id` bigint(20) NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `headers` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue_name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `available_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `delivered_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `nav`
--

CREATE TABLE `nav` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `nav`
--

INSERT INTO `nav` (`id`, `nom`, `lien`) VALUES
(1, 'Product', '/produit');

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `reference` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivery_adress` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `reference`, `delivery_adress`, `created_at`) VALUES
(100, 3, '65b11a63d702d', 'BLACKPINK AURELIEN, 66 rue clos des villa, 59300, Valenciennes', '2024-01-24 14:10:43'),
(101, 1, '65b223040774e', 'Locker 24/7 Esso Boussu, 103 RUE NEUVE null, 7300, BOUSSU', '2024-01-25 08:59:48'),
(102, 3, '65b372607479c', 'BEAUTY PHONE, 2 RUE DU FAUBOURG DES POSTES null, 59000, LILLE', '2024-01-26 08:50:40'),
(103, 3, '65b37496c3227', 'BEAUTY PHONE, 2 RUE DU FAUBOURG DES POSTES null, 59000, LILLE', '2024-01-26 09:00:06');

-- --------------------------------------------------------

--
-- Structure de la table `orders_details`
--

CREATE TABLE `orders_details` (
  `orders_id` int(11) NOT NULL,
  `products_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `prix` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `orders_details`
--

INSERT INTO `orders_details` (`orders_id`, `products_id`, `quantity`, `prix`) VALUES
(100, 8, 1, 870),
(101, 3, 1, 98000),
(102, 3, 1, 98000),
(102, 13, 1, 14900),
(103, 3, 2, 98000),
(103, 9, 1, 68000);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` double NOT NULL,
  `stock` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_id` int(11) DEFAULT NULL,
  `caracteristique` longtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `nom`, `prix`, `stock`, `description`, `image`, `type_id`, `caracteristique`) VALUES
(3, 'IPHONE 10', 98000, '5', 'Discover the iPhone 10, a concentrate of power and sophistication. Its Super Retina display, 12 MP dual camera and revolutionary Face ID provide an unparalleled experience. With a sleek glass and stainless steel design, the iPhone 10 combines style and performance. The A11 Bionic processor delivers exceptional responsiveness. Choose excellence with this iconic Apple smartphone.', 'insta-item1.jpg', 1, 'Modèle : iPhone X\r\nCouleur : Gris sidéral\r\nSystème d\'exploitation : iOS 11\r\nType de SIM : Nano SIM\r\nNombre de SIM : 1 SIM\r\nProcesseur : Puce A11\r\nBatterie : Li-ion 2716 mAh\r\nType de charge : Compatible, chargeur en option\r\nCharge rapide : Oui\r\nAutonomie en communication : 21 h'),
(4, 'IPHONE 11', 110000, '5', 'Are you new to the iPhone?\r\nThere are so many reasons to love iPhone. Why choose iPhone.\r\nIt’s easy to transfer your photos, messages, and content from your old device with the Migrate to iOS app.\r\nOnce you’ve set up your new iPhone, you’ll find iOS very easy to use.\r\nYou can also have peace of mind, because the iPhone is secure and your data is always protected.', 'product-item2.jpg', 1, NULL),
(5, 'IPHONE 8', 78000, '5', 'The iPhone 8 combines sophistication and efficiency. With its Retina display, a 12 MP camera and the powerful A11 Bionic chip, this smartphone offers remarkable performance. Its glass and aluminum design brings a modern touch. Enjoy security with Touch ID. Simplify your daily life with the iPhone 8, a perfect fusion of style and power.', 'product-item3.jpg', 1, NULL),
(6, 'IPHONE 13', 150000, '5', 'Discover technological excellence with the iPhone 13, Apple’s latest jewel. Featuring a sleek design, Super Retina XDR display, and a powerful A15 Bionic chip, this device redefines the mobile experience. Capture unforgettable moments with an advanced camera system, enjoy extended battery life and exceptional performance. The iPhone 13, a perfect fusion of aesthetics, innovation and reliability to accompany your digital life', 'cart-item1.jpg', 1, NULL),
(7, 'IPHONE 12', 130000, '5', 'Explore excellence with the iPhone 12, Apple’s iconic smartphone. Featuring a sophisticated Ceramic Shield design, a vibrant Super Retina XDR display, and the powerful A14 Bionic chip, this device delivers an exceptional experience. Capture stunning images with an advanced camera system, enjoy 5G connectivity for blazing speed, and experience uncompromising performance. The iPhone 12, a perfect fusion of style, performance and innovation to meet all your mobile requirements.', 'product-item5.jpg', 1, NULL),
(8, 'PINK WATCH', 87000, '5', 'Explore the perfect blend of style and technology with the Apple Watch Rose. This iconic smartwatch not only offers an elegant aesthetic with its refined pink case, but also intelligent connectivity and advanced features. Track your physical activity, measure your health, and stay connected in style. The Apple Watch Rose, a perfect fusion between trendy design and technological innovation, to accompany your daily life with style and sophistication.', 'cart-item2.jpg', 2, NULL),
(9, 'APPLE WATCH ULTRA 2', 68000, '5', 'The most robust and powerful Apple Watch Ultra 2 still pushes the limits. With the all-new SiP S9. A new way to magically interact with your watch without touching the screen. The brightest screen ever on an Apple device. And for the first time, the opportunity to choose a carbon neutral case-bracelet association.', 'insta-item2.jpg', 2, NULL),
(10, 'APPLE WATCH NIKE', 75000, '5', 'Quickly access your training program, track your progress or start a run with a simple gesture. With the new Nike Globe dial that combines analog and digital elements with practical complications, it’s never been easier to keep an eye on your goals.', 'product-item8.jpg', 2, NULL),
(11, 'APPLE WATCH HERMES', 65000, '5', 'Inspired by the brand’s signature cotton canvas, first presented in 1930, Toile H is a bracelet that is both light and durable and features the classic Hermes checkerboard. In another style of weaving, the Twill Jump bracelet features a colorful border creating a delicate contrast that subtly evokes the care given to the finishes of Hermès products. These two bracelet styles are available in Simple Tour format.', 'product-item9.jpg', 2, NULL),
(12, 'APPLE WATCH SE', 75000, '5', 'Simple ways to stay connected. Motivating training data. Innovative health and safety features. And for the first time, carbon neutral wristband associations. The Apple Watch SE offers great features at an affordable price.', 'product-item10.jpg', 2, NULL),
(13, 'AirPods 2nd generation', 14900, '5', 'Extended battery life, Siri voice activation and optional wireless charging box. AirPods offer an incredible wireless listening experience. Remove them from their case and they work immediately with all your devices. Wear them to your ears and they connect immediately to make you enjoy a perfectly detailed high quality sound. Magically.', 'AirPods 2e generation.png', 3, NULL),
(14, 'AirPods 3rd generation', 19900, '5', 'Extended battery life, Siri voice activation and optional wireless charging box. AirPods offer an incredible wireless listening experience. Remove them from their case and they work immediately with all your devices. Wear them to your ears and they connect immediately to make you enjoy a perfectly detailed high quality sound. Magically.', 'AirPods 3e generation.png', 3, NULL),
(15, 'AirPods Pro 2nd generation', 27900, '5', 'Apple AirPods Pro are premium wireless headphones that offer an immersive sound experience thanks to their active noise cancellation. Their in-ear design with silicone tips ensures a custom fit, while the Transparency mode keeps you aware of the environment. Water and sweat resistant, these headphones offer exceptional audio quality in a compact and stylish format.', 'AirPods Pro 2e generation.png', 3, NULL),
(16, 'AirPods Max', 57900, '5', 'The helmet as you know it has been completely redesigned. From pads to the top of the C-arm, AirPods Max are designed to fit perfectly on all head shapes to provide optimal sound insulation. Enough to fully immerse yourself in the sound.', 'AirPods Max.png', 3, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `type`
--

INSERT INTO `type` (`id`, `nom`) VALUES
(1, 'Smatphone'),
(2, 'Watch'),
(3, 'AirPods');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `num_tel` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `num_maison` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom_voie` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ville` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code_postale` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `roles`, `password`, `num_tel`, `num_maison`, `nom_voie`, `ville`, `code_postale`, `nom`, `prenom`) VALUES
(1, 'pierredefauquet@gmail.com', '[\"ROLE_ADMIN\"]', '$2y$13$fi/appHotL6PYMPXAokz6OziaNuu9gdV9cU19bgpRjkN6lFu4xE4a', '0782018817', '11A', 'rue voltaire', 'ONNAING', '59264', 'defauquet', 'pierre'),
(3, 'laurentdfauquet@free.fr', '[\"ROLE_USER\"]', '$2y$13$Qh1UD.clIGA42nP3HErsA.P/m/mMMtxyxJgU8Bei9vxJ740ydGery', '0623431755', '1', 'rue de l\'yser', 'ABSCON', '59215', 'defauquet', 'laurent'),
(4, 'andrea@gmail.com', '[\"ROLE_USER\"]', '$2y$13$10ECc1mHb0CeQUOIg3K6QOTt5ic1WVIKMEhsl/De8s0w3Uhj/oWLS', '0782018817', '05', 'rue de la mer', 'onnaing', '59264', 'defauquet', 'andrea'),
(5, 'pierredefauquetDWWM@sofip.fr', '[\"ROLE_ADMIN\"]', '$2y$13$.RvDdPlDCtWRnoOovOkkkeMPdbZXKpz9ulWZgxnZWBScCi.RoEMwG', '0782018817', '66', 'rue clos des villa', 'VALENCIENNES', '59300', 'Defauquet', 'Pierre');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  ADD KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  ADD KEY `IDX_75EA56E016BA31DB` (`delivered_at`);

--
-- Index pour la table `nav`
--
ALTER TABLE `nav`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_E52FFDEEAEA34913` (`reference`),
  ADD KEY `IDX_E52FFDEEA76ED395` (`user_id`);

--
-- Index pour la table `orders_details`
--
ALTER TABLE `orders_details`
  ADD PRIMARY KEY (`orders_id`,`products_id`),
  ADD KEY `IDX_835379F1CFFE9AD6` (`orders_id`),
  ADD KEY `IDX_835379F16C8A81A9` (`products_id`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_29A5EC27C54C8C93` (`type_id`);

--
-- Index pour la table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `nav`
--
ALTER TABLE `nav`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `type`
--
ALTER TABLE `type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `FK_E52FFDEEA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `orders_details`
--
ALTER TABLE `orders_details`
  ADD CONSTRAINT `FK_835379F16C8A81A9` FOREIGN KEY (`products_id`) REFERENCES `produit` (`id`),
  ADD CONSTRAINT `FK_835379F1CFFE9AD6` FOREIGN KEY (`orders_id`) REFERENCES `orders` (`id`);

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `FK_29A5EC27C54C8C93` FOREIGN KEY (`type_id`) REFERENCES `type` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
