/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100424
 Source Host           : localhost:3306
 Source Schema         : football_base

 Target Server Type    : MySQL
 Target Server Version : 100424
 File Encoding         : 65001

 Date: 13/12/2023 01:27:35
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2019_12_14_000001_create_personal_access_tokens_table', 1);
INSERT INTO `migrations` VALUES (4, '2023_12_12_103811_create_teams_table', 1);
INSERT INTO `migrations` VALUES (5, '2023_12_12_103841_create_players_table', 1);
INSERT INTO `migrations` VALUES (6, '2023_12_12_104312_create_positions_table', 1);
INSERT INTO `migrations` VALUES (7, '2023_12_12_125100_positions', 2);
INSERT INTO `migrations` VALUES (8, '2023_12_12_125336_user_id', 3);
INSERT INTO `migrations` VALUES (9, '2023_12_12_141229_create_users_table', 4);
INSERT INTO `migrations` VALUES (10, '2023_12_12_144218_create_positions_table', 5);
INSERT INTO `migrations` VALUES (11, '2023_12_12_144356_position_id', 5);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `last_used_at` timestamp(0) NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `personal_access_tokens_token_unique`(`token`) USING BTREE,
  INDEX `personal_access_tokens_tokenable_type_tokenable_id_index`(`tokenable_type`, `tokenable_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for players
-- ----------------------------
DROP TABLE IF EXISTS `players`;
CREATE TABLE `players`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int NOT NULL,
  `team_id` int NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `active` int NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of players
-- ----------------------------
INSERT INTO `players` VALUES (1, 'Arisabalaga', 'Kepa', 29, 1, '2023-12-11 16:02:04', '2023-12-12 21:17:11', 1);
INSERT INTO `players` VALUES (2, 'Lunin', 'Andrey', 24, 1, '2023-12-11 16:02:04', '2023-12-12 16:02:10', 1);
INSERT INTO `players` VALUES (3, 'Garcia', 'Fran', 24, 1, '2023-12-11 16:02:04', '2023-12-12 21:11:45', 1);
INSERT INTO `players` VALUES (4, 'Inaki', 'Pena', 24, 2, '2023-12-11 16:02:04', '2023-12-11 16:02:04', 1);
INSERT INTO `players` VALUES (5, 'Ilkay', 'Gündogan', 32, 2, '2023-12-11 16:02:04', '2023-12-11 16:02:04', 1);
INSERT INTO `players` VALUES (6, 'Robert', 'Lewandowski', 35, 2, '2023-12-11 16:02:04', '2023-12-11 16:02:04', 1);
INSERT INTO `players` VALUES (7, 'Sergi', 'Roberto', 31, 2, '2023-12-11 16:02:04', '2023-12-11 16:02:04', 1);
INSERT INTO `players` VALUES (8, 'Victor', 'Lindelöf', 29, 3, '2023-12-11 16:02:04', '2023-12-11 16:02:04', 1);
INSERT INTO `players` VALUES (9, 'Diogo ', 'Dalot', 24, 3, '2023-12-11 16:02:04', '2023-12-11 16:02:04', 1);
INSERT INTO `players` VALUES (10, 'Alejandro', 'Garnacho', 19, 3, '2023-12-11 16:02:04', '2023-12-11 16:02:04', 1);
INSERT INTO `players` VALUES (11, 'nabozara', 'gela', 25, 13, '2023-12-12 21:23:52', '2023-12-12 21:23:52', 1);

-- ----------------------------
-- Table structure for positions
-- ----------------------------
DROP TABLE IF EXISTS `positions`;
CREATE TABLE `positions`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` int NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of positions
-- ----------------------------
INSERT INTO `positions` VALUES (1, 'Common User', 1);
INSERT INTO `positions` VALUES (2, 'Admin', 1);

-- ----------------------------
-- Table structure for teams
-- ----------------------------
DROP TABLE IF EXISTS `teams`;
CREATE TABLE `teams`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  `updated_at` timestamp(0) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  `active` int NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 16 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of teams
-- ----------------------------
INSERT INTO `teams` VALUES (1, 'Real-Madrid', 'realmadrid.png', '2023-12-12 19:48:15', '2023-12-12 19:48:15', 1);
INSERT INTO `teams` VALUES (2, 'Barcelona', '1702414360.png', '2023-12-13 00:52:40', '2023-12-12 20:52:40', 1);
INSERT INTO `teams` VALUES (3, 'Manchester', 'manchester.png', '2023-12-12 22:30:21', '2023-12-12 22:30:21', 1);
INSERT INTO `teams` VALUES (4, 'Dinamo', 'dinamo.png', '2023-12-12 20:54:08', '2023-12-12 20:54:08', 2);
INSERT INTO `teams` VALUES (5, 'ტესტ', '2023-12-12 dinamo.png', '2023-12-12 20:54:08', '2023-12-12 20:54:08', 2);
INSERT INTO `teams` VALUES (6, 'ტესტ', '2023-12-12_dinamo.png', '2023-12-12 20:54:08', '2023-12-12 20:54:08', 2);
INSERT INTO `teams` VALUES (7, 'ტესტ', '2023-12-12_C:\\xampp new\\tmp\\php6DF3.tmp', '2023-12-12 20:54:08', '2023-12-12 20:54:08', 2);
INSERT INTO `teams` VALUES (8, 'ტესტ', '2023-12-12_C:\\xampp new\\tmp\\php5C6B.tmp', '2023-12-12 20:54:08', '2023-12-12 20:54:08', 2);
INSERT INTO `teams` VALUES (9, 'ტესტ', '1702399939.png', '2023-12-12 20:54:08', '2023-12-12 20:54:08', 2);
INSERT INTO `teams` VALUES (10, 'ტესტ', '1702399955.png', '2023-12-12 20:54:08', '2023-12-12 20:54:08', 2);
INSERT INTO `teams` VALUES (11, 'hehe', '1702400015.png', '2023-12-12 20:54:08', '2023-12-12 20:54:08', 2);
INSERT INTO `teams` VALUES (12, 'hehe', '1702400051.png', '2023-12-12 20:54:50', '2023-12-12 20:54:50', 2);
INSERT INTO `teams` VALUES (13, 'Dinamo', '1702400077.png', '2023-12-12 22:30:19', '2023-12-12 22:30:19', 1);
INSERT INTO `teams` VALUES (14, 'Mimino', '1702400242.jpg', '2023-12-12 22:30:20', '2023-12-12 22:30:20', 1);
INSERT INTO `teams` VALUES (15, '2131232', '1702413779.jpg', '2023-12-13 00:52:43', '2023-12-12 20:52:43', 0);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `position_id` int NOT NULL DEFAULT 1,
  `token` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `is_active` int NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'admin', 'admin@google.com', '$2y$10$WKCySByoMTbsTJD1DLKznum0x../5Dgm6/9AwS6hml48ggbKzu7bO', 2, '4744bb81b54b130ad6e1be83317d28cb', '2023-12-12 14:37:58', '2023-12-12 14:37:58', 1);
INSERT INTO `users` VALUES (2, 'just_user', 'just_user@google.com', '$2y$10$o/J5GGu7UM.O2jNx6Zj3NOTaH95zet258Q5sqDgplRvtuf9O1DSz2', 1, 'ce47975b7b54ca1a45792f9889ba3201', '2023-12-12 14:38:41', '2023-12-12 14:38:41', 1);
INSERT INTO `users` VALUES (3, 'admin2', 'admin2@gmail.com', '$2y$10$x0YWZImYuhHQWIGTupxikub/X6.BIa7IVV5WeoRbZlHwJDHRbNle6', 2, NULL, '2023-12-12 15:27:18', '2023-12-12 15:27:18', 1);

SET FOREIGN_KEY_CHECKS = 1;
