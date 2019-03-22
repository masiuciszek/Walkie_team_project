-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Czas generowania: 22 Mar 2019, 10:58
-- Wersja serwera: 5.7.24
-- Wersja PHP: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `walkie_db`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `applications`
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
-- Struktura tabeli dla tabeli `breeds`
--

CREATE TABLE `breeds` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `breeds`
--

INSERT INTO `breeds` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Boxer', '2019-02-25 12:29:39', '2019-02-25 12:29:39'),
(2, 'French Bulldog', '2019-02-25 12:29:39', '2019-02-25 12:29:39'),
(3, 'Yorkshire Terrier', '2019-02-25 12:29:39', '2019-02-25 12:29:39'),
(4, 'Poodle', '2019-02-25 12:29:39', '2019-02-25 12:29:39'),
(5, 'Kuvasz', '2019-02-25 12:29:39', '2019-02-25 12:29:39'),
(6, 'Miniature Schnauzer', '2019-02-25 12:29:39', '2019-02-25 12:29:39'),
(7, 'Wheaten Terrier', '2019-02-25 12:29:39', '2019-02-25 12:29:39'),
(8, 'Pug', '2019-02-25 12:29:39', '2019-02-25 12:29:39'),
(9, 'Pitbull', '2019-02-25 12:29:39', '2019-02-25 12:29:39'),
(10, 'Border Terrier', '2019-02-25 12:29:39', '2019-02-25 12:29:39'),
(11, 'Alaskan Malamute ', NULL, NULL),
(12, 'American Staffordshire Terrier', NULL, NULL),
(13, 'Australian Shepherd', NULL, NULL),
(14, 'Basset Hound', NULL, NULL),
(15, 'Belgian Sheepdog', NULL, NULL),
(16, 'Belgian Malinois', NULL, NULL),
(17, 'Bernese Mountain Dog ', NULL, NULL),
(18, 'Bichon Frise ', NULL, NULL),
(19, ' Black Russian Terrier', NULL, NULL),
(20, 'Border Collie', NULL, NULL),
(21, 'Bolognese', NULL, NULL),
(22, ' Borzoi ', NULL, NULL),
(23, 'Bracco Italiano ', NULL, NULL),
(24, 'Bloodhound', NULL, NULL),
(25, 'Briard ', NULL, NULL),
(26, 'Broholmer', NULL, NULL),
(27, 'Bull Terrier', NULL, NULL),
(28, 'Bulldog', NULL, NULL),
(29, 'Bullmastiff ', NULL, NULL),
(30, 'Cairn Terriers', NULL, NULL),
(31, 'Canaan Dog', NULL, NULL),
(32, 'Cardigan Welsh Corgi', NULL, NULL),
(33, ' Cane Corso', NULL, NULL),
(34, 'Cavalier King Charles Spaniel', NULL, NULL),
(35, 'Cesky Terrier', NULL, NULL),
(36, 'Central Asian Shepherd Dog', NULL, NULL),
(37, 'Chihuahua', NULL, NULL),
(38, 'Chinese Shar-Pei', NULL, NULL),
(39, 'Chow Chow', NULL, NULL),
(40, 'Cocker Spaniel', NULL, NULL),
(41, 'Collie', NULL, NULL),
(42, 'Croatian Sheepdog', NULL, NULL),
(43, 'Dalmatian', NULL, NULL),
(44, 'Dachshund', NULL, NULL),
(45, 'Deutscher Wachtelhund ', NULL, NULL),
(46, 'Doberman', NULL, NULL),
(47, ' Dogo Argentino', NULL, NULL),
(48, 'Dogue de Bordeaux ', NULL, NULL),
(49, 'English Cocker Spaniel ', NULL, NULL),
(50, 'English Setter', NULL, NULL),
(51, 'English Foxhound', NULL, NULL),
(52, 'English Springer Spaniel', NULL, NULL),
(53, 'English Toy Spaniel ', NULL, NULL),
(54, 'Field Spaniel ', NULL, NULL),
(55, ' Finnish Lapphund ', NULL, NULL),
(56, 'Flat-Coated Retriever', NULL, NULL),
(57, 'French Spaniel', NULL, NULL),
(58, 'German Longhaired Pointer', NULL, NULL),
(59, 'German Shepherd Dog', NULL, NULL),
(60, 'German Shorthaired Pointer', NULL, NULL),
(61, 'German Spitz ', NULL, NULL),
(62, 'Giant Schnauzer', NULL, NULL),
(63, 'Giant Schnauzer', NULL, NULL),
(64, 'Gordon Setter', NULL, NULL),
(65, ' Great Dane', NULL, NULL),
(66, 'Greyhound', NULL, NULL),
(67, ' Hovawart', NULL, NULL),
(68, 'Irish Red and White Setter ', NULL, NULL),
(69, 'Irish Setter ', NULL, NULL),
(70, 'Irish Terrier', NULL, NULL),
(71, 'Irish Water Spaniel ', NULL, NULL),
(72, 'Italian Greyhound ', NULL, NULL),
(73, 'Komondor', NULL, NULL),
(74, 'Labrador Retriever', NULL, NULL),
(75, 'Leonberger', NULL, NULL),
(76, 'Maltese', NULL, NULL),
(77, 'Mastiff ', NULL, NULL),
(78, 'Miniature Pinscher', NULL, NULL),
(79, 'Neapolitan Mastiff ', NULL, NULL),
(80, 'Newfoundland', NULL, NULL),
(81, 'Norwich Terrier', NULL, NULL),
(82, 'Nova Scotia Duck Tolling Retriever', NULL, NULL),
(83, 'Old English Sheepdog', NULL, NULL),
(84, ' Papillon', NULL, NULL),
(85, 'Pekingese', NULL, NULL),
(86, 'Pointer ', NULL, NULL),
(87, 'Pomeranian', NULL, NULL),
(88, 'Polish Lowland Sheepdog', NULL, NULL),
(89, 'Portuguese Water Dog ', NULL, NULL),
(90, 'Rhodesian Ridgeback ', NULL, NULL),
(91, 'Rottweiler', NULL, NULL),
(92, 'Russell Terrier ', NULL, NULL),
(93, 'Saint Bernard', NULL, NULL),
(94, 'Saluki', NULL, NULL),
(95, 'Samoyed', NULL, NULL),
(96, 'Scottish Terrier ', NULL, NULL),
(97, 'Shetland Sheepdog', NULL, NULL),
(98, 'Shiba Inu ', NULL, NULL),
(99, 'Shih Tzu', NULL, NULL),
(100, 'Siberian Husky', NULL, NULL),
(101, 'Skye Terrier', NULL, NULL),
(102, 'Smooth Fox Terrier', NULL, NULL),
(103, 'Sussex Spaniel', NULL, NULL),
(104, 'Swedish Vallhund', NULL, NULL),
(105, 'Tibetan Mastiff', NULL, NULL),
(106, 'Weimaraner', NULL, NULL),
(107, 'Welsh Terrier ', NULL, NULL),
(108, 'Welsh Springer Spaniel', NULL, NULL),
(109, 'Whippet', NULL, NULL),
(110, 'Wire Fox Terrier ', NULL, NULL),
(111, 'Mongrel', NULL, NULL),
(112, 'Golden Retriever', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `dogs`
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
-- Zrzut danych tabeli `dogs`
--

INSERT INTO `dogs` (`id`, `breed_id`, `name`, `age`, `sex`, `description`, `image`, `adopted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'Binki', 7, 0, 'Not the smartest one although he has gone through professional training and knows basic commands. Aggressive but ready to start a new life with family full of children. Binki is very active and athletic pup.', 'https://www.stockvault.net/data/2012/12/10/138879/preview16.jpg', NULL, NULL, '2019-03-11 13:20:41'),
(2, 3, 'Fiona', 8, 1, 'Fiona is looking for a quiet household with Adults only. Will also require to be the only dog in the household as she is quite nervous around dogs and doesn\'t really want to have to interact with them. Loves people and will need a little more help with her independence training.', 'https://image.freepik.com/free-photo/dog-lying-towel_1218-460.jpg', NULL, NULL, NULL),
(3, 4, 'Abby', 1, 1, 'Abby is an active breed and needs lots of fun exciting things to keep her busy! Quick learner and loves a yummy treat for doing the right thing and he would love to continue learning using positive reinforcement training in his new home.', 'https://image.freepik.com/free-photo/looking-up-brown-cute-poodle-puppy-sitting-ground_8353-6012.jpg', NULL, NULL, NULL),
(4, 9, 'Butters', 6, 0, 'Butter is looking for a family who can spend time with him to become more confident with handling and spending time alone. He may be suitable to live with another dog. Happy, short and stout good hearted pitbull', 'https://image.freepik.com/free-photo/pitbull-dog-staring-victim-with-determined-eye_39733-200.jpg', NULL, NULL, NULL),
(5, 8, 'Mamela', 9, 1, 'Oldie but goodie. Ready to settle down with a loving family. Loves people but doesn\'t seek attention. Playful but lazy lady, perfect choice for people who don\'t want active companion. ', 'https://image.freepik.com/free-photo/pug-dog-sticking-tongue-out-lying-white-background_23-2147841026.jpg', NULL, NULL, NULL),
(6, 3, 'Lily', 3, 1, 'This gorgeous pup needs a bit of gradual confidence building around new people and new environments and getting used to human pats! \r\nShe needs to be the only animal in her household. Polly is suited to a home with adults only.', 'https://image.freepik.com/free-photo/french-bulldog-with-smiley-faces-lay-down-grass_46208-209.jpg', NULL, NULL, NULL),
(7, 6, 'Annie', 2, 1, 'Annie is a little bit uncomfortable around other dogs but she just adores her people! Is after an adults-only home that can keep up with his enthusiasm for the big wide world.', 'https://images.unsplash.com/photo-1542366065-e17e94633155?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80', NULL, NULL, NULL),
(8, 7, 'Miguel', 3, 0, 'Miguel has been working on learning all the skills necessary to begin his new life and he would love to continue this training with you. He can get a bit overwhelmed when he meets new people. ', 'https://images.unsplash.com/photo-1515755838553-3434f8b8213b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=824&q=80', NULL, NULL, NULL),
(9, 1, 'Mimi', 5, 1, 'This sweet girl is looking for a family who will be a patient and kind in helping her transition into life as an adored pet. She needs a home where she is the only pet.  While at the home she has also been building her over all general confidence.', 'https://images.unsplash.com/photo-1442605527737-ed62b867591f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80', NULL, NULL, NULL),
(10, 9, 'Cappy', 2, 0, 'Cappy is looking for a quiet household with Adults only.  He would like to spend most of his time indoors as being outside alone can be a bit worrying. Is a little under confident with meeting new dogs, so dog parks need to be avoided. ', 'https://images.unsplash.com/photo-1524435974157-2014a7e8a61c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=751&q=80', NULL, NULL, NULL),
(12, 100, 'Howard', 7, 0, 'Ears back wide eyed this human feeds me, i should be a god and murf pratt ungow ungow, so and sometimes switches in french and say \"miaou\" just because well why not and attempt to leap between furniture but woefully miscalibrate and bellyflop onto the floor.', 'https://images.unsplash.com/photo-1489924034176-2e678c29d4c6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=751&q=80', NULL, NULL, NULL),
(13, 76, 'Gigi', 5, 1, 'Ears back wide eyed this human feeds me, i should be a god and murf pratt ungow ungow, so and sometimes switches in french and say \"miaou\" just because well why not and attempt to leap between furniture but woefully miscalibrate and bellyflop onto the floor.', 'https://images.unsplash.com/photo-1481285689591-43b93cc44811?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=922&q=80', NULL, NULL, NULL),
(14, 111, 'Stan', 8, 0, 'Ears back wide eyed this human feeds me, i should be a god and murf pratt ungow ungow, so and sometimes switches in french and say \"miaou\" just because well why not and attempt to leap between furniture but woefully miscalibrate and bellyflop onto the floor.', 'https://images.unsplash.com/photo-1549119842-af161160bcda?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80', NULL, NULL, NULL),
(15, 82, 'Ipsum', 1, 0, 'Ears back wide eyed this human feeds me, i should be a god and murf pratt ungow ungow, so and sometimes switches in french and say \"miaou\" just because well why not and attempt to leap between furniture but woefully miscalibrate and bellyflop onto the floor.', 'https://images.unsplash.com/photo-1544568100-847a948585b9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=667&q=80', NULL, NULL, NULL),
(16, 37, 'Henry', 7, 0, 'Ears back wide eyed this human feeds me, i should be a god and murf pratt ungow ungow, so and sometimes switches in french and say \"miaou\" just because well why not and attempt to leap between furniture but woefully miscalibrate and bellyflop onto the floor.', 'https://images.unsplash.com/photo-1513757271804-385fb022e70a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80', NULL, NULL, NULL),
(17, 111, 'Ricky', 6, 0, 'Ears back wide eyed this human feeds me, i should be a god and murf pratt ungow ungow, so and sometimes switches in french and say \"miaou\" just because well why not and attempt to leap between furniture but woefully miscalibrate and bellyflop onto the floor.', 'https://images.unsplash.com/uploads/1412433710756bfa9ec14/d568362b?ixlib=rb-1.2.1&auto=format&fit=crop&w=755&q=80', NULL, NULL, NULL),
(18, 111, 'Pinky', 4, 1, 'Ears back wide eyed this human feeds me, i should be a god and murf pratt ungow ungow, so and sometimes switches in french and say \"miaou\" just because well why not and attempt to leap between furniture but woefully miscalibrate and bellyflop onto the floor.', 'https://images.unsplash.com/photo-1471288650586-1307139b2b77?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80', NULL, NULL, NULL),
(19, 112, 'Mixa', 6, 1, 'Ears back wide eyed this human feeds me, i should be a god and murf pratt ungow ungow, so and sometimes switches in french and say \"miaou\" just because well why not and attempt to leap between furniture but woefully miscalibrate and bellyflop onto the floor.', 'https://images.unsplash.com/photo-1516473212791-67452d765cdf?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80', NULL, NULL, NULL),
(20, 16, 'Calvin', 1, 0, 'Ears back wide eyed this human feeds me, i should be a god and murf pratt ungow ungow, so and sometimes switches in french and say \"miaou\" just because well why not and attempt to leap between furniture but woefully miscalibrate and bellyflop onto the floor.', 'https://images.unsplash.com/photo-1503845249142-1b2e3948476e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=753&q=80', NULL, NULL, NULL),
(21, 111, 'Hobbs', 2, 0, 'Ears back wide eyed this human feeds me, i should be a god and murf pratt ungow ungow, so and sometimes switches in french and say \"miaou\" just because well why not and attempt to leap between furniture but woefully miscalibrate and bellyflop onto the floor.', 'https://images.unsplash.com/photo-1487341290491-1081724e5844?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80', NULL, NULL, NULL),
(22, 93, 'Scooby', 5, 0, 'Ears back wide eyed this human feeds me, i should be a god and murf pratt ungow ungow, so and sometimes switches in french and say \"miaou\" just because well why not and attempt to leap between furniture but woefully miscalibrate and bellyflop onto the floor.', 'https://images.unsplash.com/photo-1532978748279-bdafb5027c44?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80', NULL, NULL, NULL),
(23, 111, 'Vilo', 8, 1, 'Ears back wide eyed this human feeds me, i should be a god and murf pratt ungow ungow, so and sometimes switches in french and say \"miaou\" just because well why not and attempt to leap between furniture but woefully miscalibrate and bellyflop onto the floor.', 'https://images.unsplash.com/photo-1477884213360-7e9d7dcc1e48?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1500&q=80', NULL, NULL, NULL),
(24, 43, 'Ratter', 4, 0, 'Ears back wide eyed this human feeds me, i should be a god and murf pratt ungow ungow, so and sometimes switches in french and say \"miaou\" just because well why not and attempt to leap between furniture but woefully miscalibrate and bellyflop onto the floor.', 'https://images.unsplash.com/photo-1543398386-928c45b6d3c4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1400&q=80', NULL, NULL, NULL),
(25, 59, 'Jerky', 6, 0, 'Ears back wide eyed this human feeds me, i should be a god and murf pratt ungow ungow, so and sometimes switches in french and say \"miaou\" just because well why not and attempt to leap between furniture but woefully miscalibrate and bellyflop onto the floor.', 'https://images.unsplash.com/photo-1550165298-e574b8c3c7f6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=687&q=80', NULL, NULL, NULL),
(26, 111, 'Kipper', 9, 0, 'Ears back wide eyed this human feeds me, i should be a god and murf pratt ungow ungow, so and sometimes switches in french and say \"miaou\" just because well why not and attempt to leap between furniture but woefully miscalibrate and bellyflop onto the floor.', 'https://images.unsplash.com/photo-1549576091-58ccfe99ac6e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80', NULL, NULL, NULL),
(27, 74, 'Harley', 3, 0, 'Ears back wide eyed this human feeds me, i should be a god and murf pratt ungow ungow, so and sometimes switches in french and say \"miaou\" just because well why not and attempt to leap between furniture but woefully miscalibrate and bellyflop onto the floor.', 'https://images.unsplash.com/photo-1499789853431-fcbf274f57b9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80', NULL, NULL, NULL),
(28, 34, 'Betty', 2, 1, 'Ears back wide eyed this human feeds me, i should be a god and murf pratt ungow ungow, so and sometimes switches in french and say \"miaou\" just because well why not and attempt to leap between furniture but woefully miscalibrate and bellyflop onto the floor.', 'https://images.unsplash.com/photo-1544229173-e8173ff71985?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=676&q=80', NULL, NULL, NULL),
(29, 111, 'Deisel', 7, 0, 'Ears back wide eyed this human feeds me, i should be a god and murf pratt ungow ungow, so and sometimes switches in french and say \"miaou\" just because well why not and attempt to leap between furniture but woefully miscalibrate and bellyflop onto the floor.', 'https://images.unsplash.com/photo-1495146829871-3f0a61ee20ea?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80', NULL, NULL, NULL),
(30, 37, 'April', 8, 1, 'Ears back wide eyed this human feeds me, i should be a god and murf pratt ungow ungow, so and sometimes switches in french and say \"miaou\" just because well why not and attempt to leap between furniture but woefully miscalibrate and bellyflop onto the floor.', 'https://images.unsplash.com/photo-1505964786881-21450f5f7ae9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=889&q=80', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(10, '2014_10_12_000000_create_users_table', 1),
(11, '2014_10_12_100000_create_password_resets_table', 1),
(12, '2019_02_24_115542_create_dogs_table', 1),
(13, '2019_02_25_140218_create_applications_table', 1),
(14, '2019_02_25_140233_create_breeds_table', 1),
(15, '2019_03_19_141044_create_walks_table', 1),
(16, '2019_03_21_141755_create_reviews_table', 1),
(17, '2019_03_21_142610_create_votes_table', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `reviews`
--

CREATE TABLE `reviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `dog_id` int(10) UNSIGNED NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `approved` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `reviews`
--

INSERT INTO `reviews` (`id`, `user_id`, `dog_id`, `text`, `approved`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'qwertyuio', 0, '2019-03-22 08:16:34', '2019-03-22 08:16:34'),
(2, 2, 1, 'zsxdcfvghjkl', 1, '2019-03-22 08:22:21', '2019-03-22 08:22:34'),
(3, 2, 1, 'kotek', 0, '2019-03-22 08:29:16', '2019-03-22 08:29:16'),
(4, 2, 1, 'edrftghjkl', 0, '2019-03-22 08:43:51', '2019-03-22 08:43:51');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `email_verified_at`, `user_name`, `password`, `remember_token`, `admin`, `phone_number`, `age`, `gender`, `created_at`, `updated_at`) VALUES
(1, 'Artur', 'Boruc', 'walkie.mmk@hotmail.com', NULL, 'Admin', '$2y$10$HWnsshPNTDGlE.8rkgNIHeSllN77.KOMe6J5r8EilaYCuTCPLCFoS', NULL, 1, '66666666', 18, 'female', '2019-03-22 08:14:17', '2019-03-22 08:14:17'),
(2, 'Marta', 'Mas', 'kkk@gmail.com', NULL, 'marti', '$2y$10$Nw2jr9gYj2EkJY1qwEaefu4pX4EFrKTCh3W88QlehzA0ff.DuYImO', NULL, 0, '66666666', 18, 'female', '2019-03-22 08:22:03', '2019-03-22 08:22:03');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `votes`
--

CREATE TABLE `votes` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `review_id` int(10) UNSIGNED NOT NULL,
  `vote` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `votes`
--

INSERT INTO `votes` (`id`, `user_id`, `review_id`, `vote`, `created_at`, `updated_at`) VALUES
(1, 2, 2, 1, '2019-03-22 08:55:07', '2019-03-22 08:55:07'),
(2, 2, 2, 0, '2019-03-22 08:55:10', '2019-03-22 08:55:10');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `walks`
--

CREATE TABLE `walks` (
  `id` int(10) UNSIGNED NOT NULL,
  `dog_id` int(10) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `hour` tinyint(4) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `walks`
--

INSERT INTO `walks` (`id`, `dog_id`, `date`, `hour`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2019-03-22', 14, 1, '2019-03-22 08:15:15', '2019-03-22 08:15:15'),
(2, 1, '2019-03-22', 12, 2, '2019-03-22 08:22:15', '2019-03-22 08:22:15'),
(3, 1, '2019-03-22', 18, 2, '2019-03-22 08:43:40', '2019-03-22 08:43:40');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `breeds`
--
ALTER TABLE `breeds`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `dogs`
--
ALTER TABLE `dogs`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeksy dla tabeli `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_user_name_unique` (`user_name`);

--
-- Indeksy dla tabeli `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `walks`
--
ALTER TABLE `walks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `walks_dog_id_date_hour_unique` (`dog_id`,`date`,`hour`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `applications`
--
ALTER TABLE `applications`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `breeds`
--
ALTER TABLE `breeds`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT dla tabeli `dogs`
--
ALTER TABLE `dogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT dla tabeli `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT dla tabeli `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `votes`
--
ALTER TABLE `votes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `walks`
--
ALTER TABLE `walks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
