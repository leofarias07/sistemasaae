-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 10-Set-2018 às 02:37
-- Versão do servidor: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistemasaae`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `arrecadacaos`
--

CREATE TABLE `arrecadacaos` (
  `id` int(10) UNSIGNED NOT NULL,
  `mes` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ano` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `faturamento` double NOT NULL,
  `Estorno` double NOT NULL,
  `saldofaturado` double NOT NULL,
  `contafaturada` double NOT NULL,
  `arrecadacao` double NOT NULL,
  `contasarrecadadas` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_09_08_171156_create_setorcomercials_table', 1),
(4, '2018_09_08_171220_create_servicos_table', 1),
(5, '2018_09_08_171241_create_arrecadacaos_table', 1),
(6, '2018_09_08_171325_create_servatentidos_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `servatentidos`
--

CREATE TABLE `servatentidos` (
  `id` int(10) UNSIGNED NOT NULL,
  `data` date NOT NULL,
  `setorcomercials_id` int(10) UNSIGNED NOT NULL,
  `servicos_id` int(10) UNSIGNED NOT NULL,
  `quantidade` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos`
--

CREATE TABLE `servicos` (
  `id` int(10) UNSIGNED NOT NULL,
  `setorcomercials_id` int(10) UNSIGNED NOT NULL,
  `descricao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `setorcomercials`
--

CREATE TABLE `setorcomercials` (
  `id` int(10) UNSIGNED NOT NULL,
  `descricao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `setorcomercials`
--

INSERT INTO `setorcomercials` (`id`, `descricao`, `created_at`, `updated_at`) VALUES
(1, 'Faturamento', NULL, NULL),
(3, 'Atendimento', '2018-09-09 19:38:14', '2018-09-09 19:38:14'),
(4, '115 - Atendimento', NULL, NULL),
(6, 'gfhfgh', NULL, NULL),
(7, 'Hidrometria', NULL, NULL),
(8, 'dadadad', NULL, NULL),
(9, 'vbcbcbcv', NULL, NULL),
(10, 'vvbncncncvn', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Leonardo', 'leo.farias.05@gmail.com', NULL, '$2y$10$4/syhQ0IV9ozlf7m.dg4E.W6KU0XXAV3ok63e5Dw6RpaqQBaFKlEq', NULL, 'V5onv3yzntYjjwslRiD5NX4NdMsPzzBmn0llykAWRMn31IHMr73kYSUjlrAG', '2018-09-08 21:22:14', '2018-09-08 21:22:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arrecadacaos`
--
ALTER TABLE `arrecadacaos`
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
-- Indexes for table `servatentidos`
--
ALTER TABLE `servatentidos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `servatentidos_setorcomercials_id_foreign` (`setorcomercials_id`),
  ADD KEY `servatentidos_servicos_id_foreign` (`servicos_id`);

--
-- Indexes for table `servicos`
--
ALTER TABLE `servicos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `servicos_setorcomercials_id_foreign` (`setorcomercials_id`);

--
-- Indexes for table `setorcomercials`
--
ALTER TABLE `setorcomercials`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `arrecadacaos`
--
ALTER TABLE `arrecadacaos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `servatentidos`
--
ALTER TABLE `servatentidos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `servicos`
--
ALTER TABLE `servicos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `setorcomercials`
--
ALTER TABLE `setorcomercials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `servatentidos`
--
ALTER TABLE `servatentidos`
  ADD CONSTRAINT `servatentidos_servicos_id_foreign` FOREIGN KEY (`servicos_id`) REFERENCES `servicos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `servatentidos_setorcomercials_id_foreign` FOREIGN KEY (`setorcomercials_id`) REFERENCES `setorcomercials` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `servicos`
--
ALTER TABLE `servicos`
  ADD CONSTRAINT `servicos_setorcomercials_id_foreign` FOREIGN KEY (`setorcomercials_id`) REFERENCES `setorcomercials` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
