-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1:3307
-- 產生時間： 
-- 伺服器版本： 10.4.6-MariaDB
-- PHP 版本： 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `project`
--

-- --------------------------------------------------------

--
-- 資料表結構 `player`
--

CREATE TABLE `player` (
  `ID` varchar(250) NOT NULL,
  `Name` varchar(250) NOT NULL,
  `Passwords` varchar(250) NOT NULL,
  `Pokemon` int(150) NOT NULL,
  `Introduce` varchar(250) CHARACTER SET utf8mb4 NOT NULL,
  `plevel` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `player`
--

INSERT INTO `player` (`ID`, `Name`, `Passwords`, `Pokemon`, `Introduce`, `plevel`) VALUES
('kerry4413', '陳博凱', 'kerry0607', 5, 'hi hi', 1);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `pokemon_id` (`Pokemon`);

--
-- 已傾印資料表的限制式
--

--
-- 資料表的限制式 `player`
--
ALTER TABLE `player`
  ADD CONSTRAINT `pokemon_id` FOREIGN KEY (`Pokemon`) REFERENCES `pokemon` (`pokemon_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
