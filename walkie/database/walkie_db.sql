-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 26, 2019 at 09:47 PM
-- Server version: 5.7.24
-- PHP Version: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `walkie_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` int(10) UNSIGNED NOT NULL,
  `dog_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `accepted_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `breeds`
--

CREATE TABLE `breeds` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `breeds`
--

INSERT INTO `breeds` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Boxer', '2019-02-25 14:29:39', '2019-02-25 14:29:39'),
(2, 'French Bulldog', '2019-02-25 14:29:39', '2019-02-25 14:29:39'),
(3, 'Yorkshire Terrier', '2019-02-25 14:29:39', '2019-02-25 14:29:39'),
(4, 'Poodle', '2019-02-25 14:29:39', '2019-02-25 14:29:39'),
(5, 'Kuvasz', '2019-02-25 14:29:39', '2019-02-25 14:29:39'),
(6, 'Miniature Schnauzer', '2019-02-25 14:29:39', '2019-02-25 14:29:39'),
(7, 'Wheaten Terrier', '2019-02-25 14:29:39', '2019-02-25 14:29:39'),
(8, 'Pug', '2019-02-25 14:29:39', '2019-02-25 14:29:39'),
(9, 'Pitbull', '2019-02-25 14:29:39', '2019-02-25 14:29:39'),
(10, 'Wheaten Terrier', '2019-02-25 14:29:39', '2019-02-25 14:29:39');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `username` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `password` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dogs`
--

CREATE TABLE `dogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `breed_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `sex` tinyint(1) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adopted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dogs`
--

INSERT INTO `dogs` (`id`, `breed_id`, `name`, `age`, `sex`, `description`, `image`, `adopted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'Binki', 4, 0, 'Not the smartest one although he has gone through professional training and knows basic commands. Aggressive but ready to start a new life with family full of children. Binki is very active and athletic pup. ', 'https://www.stockvault.net/data/2012/12/10/138879/preview16.jpg', NULL, NULL, NULL),
(2, 3, 'Fiona', 8, 1, 'Fiona is looking for a quiet household with Adults only. Will also require to be the only dog in the household as she is quite nervous around dogs and doesn\'t really want to have to interact with them. Loves people and will need a little more help with her independence training.', 'https://image.freepik.com/free-photo/dog-lying-towel_1218-460.jpg', NULL, NULL, NULL),
(3, 4, 'Abby', 1, 1, 'Abby is an active breed and needs lots of fun exciting things to keep her busy! Quick learner and loves a yummy treat for doing the right thing and he would love to continue learning using positive reinforcement training in his new home.', 'https://image.freepik.com/free-photo/looking-up-brown-cute-poodle-puppy-sitting-ground_8353-6012.jpg', NULL, NULL, NULL),
(4, 9, 'Butters', 6, 0, 'Butter is looking for a family who can spend time with him to become more confident with handling and spending time alone. He may be suitable to live with another dog. Happy, short and stout good hearted pitbull', 'https://image.freepik.com/free-photo/pitbull-dog-staring-victim-with-determined-eye_39733-200.jpg', NULL, NULL, NULL),
(5, 8, 'Mamela', 9, 1, 'Oldie but goodie. Ready to settle down with a loving family. Loves people but doesn\'t seek attention. Playful but lazy lady, perfect choice for people who don\'t want active companion. ', 'https://image.freepik.com/free-photo/pug-dog-sticking-tongue-out-lying-white-background_23-2147841026.jpg', NULL, NULL, NULL),
(6, 3, 'Lily', 3, 1, 'This gorgeous pup needs a bit of gradual confidence building around new people and new environments and getting used to human pats! \r\nShe needs to be the only animal in her household. Polly is suited to a home with adults only.', 'https://image.freepik.com/free-photo/french-bulldog-with-smiley-faces-lay-down-grass_46208-209.jpg', NULL, NULL, NULL),
(7, 6, 'Annie', 2, 1, 'Annie is a little bit uncomfortable around other dogs but she just adores her people! Is after an adults-only home that can keep up with his enthusiasm for the big wide world.', 'https://images.unsplash.com/photo-1542366065-e17e94633155?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80', NULL, NULL, NULL),
(8, 7, 'Miguel', 3, 0, 'Miguel has been working on learning all the skills necessary to begin his new life and he would love to continue this training with you. He can get a bit overwhelmed when he meets new people. ', 'https://images.unsplash.com/photo-1515755838553-3434f8b8213b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=824&q=80', NULL, NULL, NULL),
(9, 1, 'Mimi', 5, 1, 'This sweet girl is looking for a family who will be a patient and kind in helping her transition into life as an adored pet. She needs a home where she is the only pet.  While at the home she has also been building her over all general confidence.', 'https://images.unsplash.com/photo-1442605527737-ed62b867591f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80', NULL, NULL, NULL),
(10, 9, 'Cappy', 2, 0, 'Cappy is looking for a quiet household with Adults only.  He would like to spend most of his time indoors as being outside alone can be a bit worrying. Is a little under confident with meeting new dogs, so dog parks need to be avoided. ', 'https://images.unsplash.com/photo-1524435974157-2014a7e8a61c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=751&q=80', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(12, '2019_02_24_115631_create_clients_table', 1),
(13, '2019_02_24_115640_create_admins_table', 1),
(14, '2014_10_12_000000_create_users_table', 2),
(15, '2014_10_12_100000_create_password_resets_table', 2),
(16, '2019_02_24_115542_create_dogs_table', 2),
(17, '2019_02_25_140218_create_applications_table', 2),
(18, '2019_02_25_140233_create_breeds_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `phone_number` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `breeds`
--
ALTER TABLE `breeds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dogs`
--
ALTER TABLE `dogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `breeds`
--
ALTER TABLE `breeds`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dogs`
--
ALTER TABLE `dogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
