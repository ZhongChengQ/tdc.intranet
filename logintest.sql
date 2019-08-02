-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1:3306
-- 產生時間： 2019-07-30 05:19:04
-- 伺服器版本： 5.7.26
-- PHP 版本： 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `logintest`
--

-- --------------------------------------------------------

--
-- 資料表結構 `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `e_id` int(11) NOT NULL AUTO_INCREMENT,
  `account` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `u_email` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` char(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`e_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `employee`
--

INSERT INTO `employee` (`e_id`, `account`, `pass`, `name`, `u_email`, `position`) VALUES
(1, 'admin', 'adminpass', '', 'admin@gmail.com', '管理者'),
(2, 'peter', 'peterpass', '', 'peter@yahoo.com.tw', NULL),
(5, 'peter0221', '$2y$10$/zfvl6DhhFcy4aLATOZQnexVzlGIkp0pjN3L8GbkUKPLYXD7Lm72G', 'é‚±å¿ èª ', 'qaz0963215623@gmail.com', NULL),
(6, 'morgan', '$2y$10$76WZTddCPjMnOLo749LM/.qWsQiTOpcUIUz6T1uEc12Ra4c00RrXu', 'é‚±å˜‰è¼', 'morgan@gmail.com', NULL),
(7, 'lee', '$2y$10$8l9ki3s0AVL5kK/VcfS8be07zB5hPPX6.sBYtoqnzCCFrWdMHip0u', 'æŽå°é¾', 'dragonlee@gmail.com', NULL),
(8, 'abc', '$2y$10$UwS9x7m71kgbqN3gWgEToOHh4sBg2buVN9SgZ5B.srX7Ky1HIWA0i', 'æ­ªåœ‹äºº', 'abc@gmail.com', NULL),
(9, 'peterchiu', '$2y$10$X03juWmKBbSDDTdytby/.e8YvNDX09gsSB374LJoIsO7gkX2gpatu', 'é‚±æ¯”ç‰¹', 'peterchiu@gmail.com', NULL),
(10, 'wu', '$2y$10$OL6fS9/nADtPNCwqH5OPvOwS/HoGY5dU4FjNjLEmpe0EFIhbtlNsK', 'ç„¡ä¸­ç·š', 'wunoline@yahoo.com.tw', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
