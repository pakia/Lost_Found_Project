-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2019 at 09:29 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lostfound`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_profile`
--

CREATE TABLE `admin_profile` (
  `id` int(11) NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `l_name` varchar(100) NOT NULL,
  `about` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_profile`
--

INSERT INTO `admin_profile` (`id`, `f_name`, `l_name`, `about`, `email`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Sohana', 'Kabir', 'web developer', 'borna350@diu.edu.bd', '1556889161.jpg', '2019-05-03 07:12:41', '2019-05-03 07:12:41');

-- --------------------------------------------------------

--
-- Table structure for table `founditem`
--

CREATE TABLE `founditem` (
  `id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `u_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `u_image` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(100) NOT NULL,
  `f_i_description` varchar(1000) NOT NULL,
  `f_i_date` varchar(100) NOT NULL,
  `f_location` varchar(100) NOT NULL,
  `f_image` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `founditem`
--

INSERT INTO `founditem` (`id`, `u_id`, `u_name`, `u_image`, `category`, `f_i_description`, `f_i_date`, `f_location`, `f_image`, `status`, `created_at`, `updated_at`) VALUES
(3, 2, 'Sohana Kabir Barna', '1554537810.jpg', 'Calculator', 'Ms 100', '2019-04-09', '504 room', '1555756671.jpg', 1, '2019-05-01 21:33:08', '2019-05-01 15:33:08');

-- --------------------------------------------------------

--
-- Table structure for table `lostitem`
--

CREATE TABLE `lostitem` (
  `id` int(11) NOT NULL,
  `usr_id` int(11) NOT NULL,
  `usr_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `usr_image` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(100) NOT NULL,
  `l_description` varchar(100) NOT NULL,
  `l_date` varchar(100) NOT NULL,
  `l_location` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lostitem`
--

INSERT INTO `lostitem` (`id`, `usr_id`, `usr_name`, `usr_image`, `category`, `l_description`, `l_date`, `l_location`, `status`, `created_at`, `updated_at`) VALUES
(2, 2, 'Sohana Kabir Barna', '1554537810.jpg', 'Clearance', 'hhhhhyyu', '2019-05-05', 'room number:405', 1, '2019-05-02 08:03:44', '2019-05-02 02:03:44'),
(4, 2, 'Sohana Kabir Barna', '1554537810.jpg', 'Walet', 'gghhjjkkk', '2019-05-07', 'fggg', 1, '2019-05-02 17:49:19', '2019-05-02 00:10:18'),
(5, 2, 'Sohana Kabir Barna', '1554537810.jpg', 'Walet', 'dddddddddddd', '2019-05-08', 'room number:405', 1, '2019-05-02 17:49:20', '2019-05-02 00:21:57'),
(6, 2, 'Sohana Kabir Barna', '1554537810.jpg', 'Calculator', 'hhhhhhhhhhhhh', '2019-05-13', 'bgggggggggg', 1, '2019-05-02 06:43:55', '2019-05-02 00:43:55'),
(7, 2, 'Sohana Kabir Barna', '1554537810.jpg', 'Pendrive', 'ggggggggg', '2019-05-07', 'hhhhhh', 1, '2019-05-02 17:49:20', '2019-05-02 02:03:33'),
(11, 3, 'Sumona Kabir', '1556815280.JPG', 'Clearance', 'jjjjjjjjjjjjjjjjjj', '2019-05-24', 'mmmmmmmmmmmmmm', 1, '2019-05-02 17:48:15', '2019-05-02 11:48:15');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `show_profile`
--

CREATE TABLE `show_profile` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `batch` varchar(100) NOT NULL,
  `section` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `show_profile`
--

INSERT INTO `show_profile` (`id`, `user_id`, `first_name`, `last_name`, `department`, `batch`, `section`, `email`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'Sohana', 'kabir', 'swe', '17th', 'D', 'barna35-1239@diu.edu.bd', '1551509816.png', '2019-03-02 00:56:56', '2019-03-02 00:56:56'),
(2, 1, 'Kabir', 'Borna', 'swe', '17th', 'D', 'borna350@gmail.com', '1552714025.png', '2019-03-15 23:27:05', '2019-03-15 23:27:05'),
(3, 2, 'Sohana kabir', 'Borna', 'Swe', '17th', 'D', 'barna35-1239@diu.edu.bd', '1554537792.jpg', '2019-04-06 02:03:12', '2019-04-06 02:03:12'),
(4, 3, 'Sumona Kabir', 'Shorna', 'Swe', '16th', 'D', 'borna350@diu.edu.bd', '1556814729.jpg', '2019-05-02 10:32:09', '2019-05-02 10:32:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `image`, `email`, `status`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Sohana Kabir Barna', '1554537810.jpg', 'barna35-1239@diu.edu.bd', 1, NULL, '$2y$10$eIArN1yWPv9SoIufYv/xeuyYeuU7bo44veEHJZJxj2fyDkIg2R/5e', 'u0J3Y2eZs1dm6qMZzav6SgCdjh5E3CTFU2QkjDjxjP2UlFYoW1wibLFHGoxC', '2019-04-06 02:00:26', '2019-05-03 11:44:39'),
(3, 'Sumona Kabir', '1556815280.JPG', 'borna350@diu.edu.bd', 1, NULL, '$2y$10$1m5TW4Y55iwqgjgPx9Jifuwm8OadB8XunYoosd/k.yZk6uiuCO6qG', 'sf1Ge1N0mq5AuqER0xJ6c0LOaJRynLUWxQApUVoUlPhltCr4Q2jLwvl2XADR', '2019-05-02 10:07:25', '2019-05-03 12:04:15'),
(4, 'sohana', NULL, 'sohana@diu.edu.bd', 0, NULL, '$2y$10$qdvfGX5/utGUu92shVQe4elG5XqNRzoGPTd2JVpy.7XAOo.ydSgZq', NULL, '2019-05-03 09:44:01', '2019-05-03 09:44:01'),
(6, 'shorna', NULL, 'shorna@diu.edu.bd', 0, NULL, '$2y$10$0xZ7UoTS.BhLAAMnz4R64uZt2TD/YEO5luI1eRgQ4UNN.DvFsEVxK', NULL, '2019-05-03 12:01:24', '2019-05-03 12:01:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_profile`
--
ALTER TABLE `admin_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `founditem`
--
ALTER TABLE `founditem`
  ADD PRIMARY KEY (`id`),
  ADD KEY `u_id` (`u_id`),
  ADD KEY `founditem_ibfk_1` (`u_image`),
  ADD KEY `u_name` (`u_name`,`u_image`);

--
-- Indexes for table `lostitem`
--
ALTER TABLE `lostitem`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`usr_id`),
  ADD KEY `usr_name` (`usr_name`),
  ADD KEY `usr_image` (`usr_image`);

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
-- Indexes for table `show_profile`
--
ALTER TABLE `show_profile`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `image` (`image`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_profile`
--
ALTER TABLE `admin_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `founditem`
--
ALTER TABLE `founditem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `lostitem`
--
ALTER TABLE `lostitem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `show_profile`
--
ALTER TABLE `show_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `founditem`
--
ALTER TABLE `founditem`
  ADD CONSTRAINT `founditem_ibfk_1` FOREIGN KEY (`u_image`) REFERENCES `users` (`image`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `founditem_ibfk_2` FOREIGN KEY (`u_name`) REFERENCES `users` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lostitem`
--
ALTER TABLE `lostitem`
  ADD CONSTRAINT `lostitem_ibfk_1` FOREIGN KEY (`usr_name`) REFERENCES `users` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lostitem_ibfk_2` FOREIGN KEY (`usr_image`) REFERENCES `users` (`image`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
