/*
Navicat MySQL Data Transfer

Source Server         : Localhost
Source Server Version : 100131
Source Host           : localhost:3306
Source Database       : sistemasaae

Target Server Type    : MYSQL
Target Server Version : 100131
File Encoding         : 65001

Date: 2018-09-21 15:58:15
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for arrecadacaos
-- ----------------------------
DROP TABLE IF EXISTS `arrecadacaos`;
CREATE TABLE `arrecadacaos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `mes` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ano` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `faturamento` double NOT NULL,
  `estorno` double NOT NULL,
  `saldofaturado` double NOT NULL,
  `contafaturada` double NOT NULL,
  `condicao` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `arrecadacao` double NOT NULL,
  `contasarrecadadas` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of arrecadacaos
-- ----------------------------
INSERT INTO `arrecadacaos` VALUES ('1', '08', '2018', '10000', '10000', '100000', '100000', '1', '100000', '10000002', null, '2018-09-21 12:57:35');
INSERT INTO `arrecadacaos` VALUES ('2', '08', '08', '8', '80', '8', '8', '0', '8', '8', '2018-09-21 12:55:44', '2018-09-21 12:55:52');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('1', '2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2', '2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('3', '2018_09_08_171156_create_setorcomercials_table', '1');
INSERT INTO `migrations` VALUES ('4', '2018_09_08_171220_create_servicos_table', '1');
INSERT INTO `migrations` VALUES ('5', '2018_09_08_171241_create_arrecadacaos_table', '1');
INSERT INTO `migrations` VALUES ('6', '2018_09_08_171325_create_servatentidos_table', '1');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for servatentidos
-- ----------------------------
DROP TABLE IF EXISTS `servatentidos`;
CREATE TABLE `servatentidos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `setorcomercials_id` int(10) unsigned NOT NULL,
  `servicos_id` int(10) unsigned NOT NULL,
  `quantidade` int(11) NOT NULL,
  `condicao` int(11) DEFAULT NULL,
  `dataacao` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `servatentidos_setorcomercials_id_foreign` (`setorcomercials_id`),
  KEY `servatentidos_servicos_id_foreign` (`servicos_id`),
  CONSTRAINT `servatentidos_servicos_id_foreign` FOREIGN KEY (`servicos_id`) REFERENCES `servicos` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of servatentidos
-- ----------------------------
INSERT INTO `servatentidos` VALUES ('2', '1', '2', '13', null, '2018-09-21', null, null);

-- ----------------------------
-- Table structure for servicos
-- ----------------------------
DROP TABLE IF EXISTS `servicos`;
CREATE TABLE `servicos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `setorcomercials_id` int(10) unsigned NOT NULL,
  `descricao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `condicao` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `servicos_setorcomercials_id_foreign` (`setorcomercials_id`),
  CONSTRAINT `servicos_setorcomercials_id_foreign` FOREIGN KEY (`setorcomercials_id`) REFERENCES `setorcomercials` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of servicos
-- ----------------------------
INSERT INTO `servicos` VALUES ('2', '1', 'Teste', '1', null, null);
INSERT INTO `servicos` VALUES ('3', '4', 'Teste5', '1', '2018-09-20 15:58:51', '2018-09-20 16:03:51');
INSERT INTO `servicos` VALUES ('4', '4', 'tester', '1', '2018-09-20 17:20:15', '2018-09-20 17:20:15');
INSERT INTO `servicos` VALUES ('5', '4', 'dfhfhdhdh', '1', '2018-09-21 11:34:18', '2018-09-21 11:34:18');

-- ----------------------------
-- Table structure for setorcomercials
-- ----------------------------
DROP TABLE IF EXISTS `setorcomercials`;
CREATE TABLE `setorcomercials` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `descricao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `condicao` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of setorcomercials
-- ----------------------------
INSERT INTO `setorcomercials` VALUES ('1', 'Faturamento', '1', null, null);
INSERT INTO `setorcomercials` VALUES ('3', 'Atendimento', '1', '2018-09-09 16:38:14', '2018-09-09 16:38:14');
INSERT INTO `setorcomercials` VALUES ('4', '115 - Atendimento', '1', null, null);
INSERT INTO `setorcomercials` VALUES ('6', 'gfhfgh', '0', null, '2018-09-20 13:52:03');
INSERT INTO `setorcomercials` VALUES ('7', 'Hidrometria', '1', null, null);
INSERT INTO `setorcomercials` VALUES ('8', 'dadadad', '0', null, '2018-09-20 13:52:09');
INSERT INTO `setorcomercials` VALUES ('9', 'vbcbcbcv2', '0', null, '2018-09-20 13:52:12');
INSERT INTO `setorcomercials` VALUES ('10', 'vvbncncncvn', '0', null, '2018-09-20 12:08:57');
INSERT INTO `setorcomercials` VALUES ('11', 'hdhdhdhdhf', '0', null, '2018-09-19 17:50:38');
INSERT INTO `setorcomercials` VALUES ('12', 'fjfgjfgjfgjf', '0', null, '2018-09-19 17:48:57');
INSERT INTO `setorcomercials` VALUES ('13', 'sdfdfgsdgsdgsdgsdg', '0', null, '2018-09-19 17:47:45');
INSERT INTO `setorcomercials` VALUES ('14', 'dhdfhdfhdfhdf', null, null, null);
INSERT INTO `setorcomercials` VALUES ('15', 'gsdgsdgdsgsd', null, null, null);
INSERT INTO `setorcomercials` VALUES ('16', 'afasfasfasfasf', '0', '2018-09-19 19:30:01', '2018-09-19 19:34:11');
INSERT INTO `setorcomercials` VALUES ('17', 'asdasdasd', '0', '2018-09-19 19:34:16', '2018-09-20 12:08:55');
INSERT INTO `setorcomercials` VALUES ('18', 'Leitor', '1', '2018-09-20 12:09:05', '2018-09-20 12:09:05');
INSERT INTO `setorcomercials` VALUES ('19', 'Teste modal', '1', '2018-09-20 16:09:31', '2018-09-20 16:09:31');
INSERT INTO `setorcomercials` VALUES ('20', 'dsdsdsdsewet', '1', '2018-09-20 16:17:12', '2018-09-20 16:17:12');
INSERT INTO `setorcomercials` VALUES ('21', 'dsdsdsd', '1', '2018-09-20 16:18:56', '2018-09-20 16:18:56');
INSERT INTO `setorcomercials` VALUES ('22', 'Tect6', '1', '2018-09-20 16:19:04', '2018-09-20 16:19:04');
INSERT INTO `setorcomercials` VALUES ('23', 'Teste67', '1', '2018-09-20 17:06:11', '2018-09-20 17:06:11');
INSERT INTO `setorcomercials` VALUES ('24', 'Texte34', '1', '2018-09-20 17:07:03', '2018-09-20 17:07:03');
INSERT INTO `setorcomercials` VALUES ('25', 'Teste7', '1', '2018-09-21 11:34:04', '2018-09-21 11:34:04');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'Leonardo', 'leo.farias.05@gmail.com', null, '$2y$10$4/syhQ0IV9ozlf7m.dg4E.W6KU0XXAV3ok63e5Dw6RpaqQBaFKlEq', null, 'wxW4QjNUcPX4jDqze6ahDgCwlLPLhd3sqY6UHSTbBQRUPNn8kZkFKBkb2cew', '2018-09-08 18:22:14', '2018-09-08 18:22:14');
SET FOREIGN_KEY_CHECKS=1;
