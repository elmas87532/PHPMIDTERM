-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2016-04-14 06:21:47
-- 伺服器版本: 10.1.10-MariaDB
-- PHP 版本： 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `c`
--

-- --------------------------------------------------------

--
-- 資料表結構 `url`
--

CREATE TABLE `url` (
  `url` varchar(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `surl` varchar(50) NOT NULL,
  `click` int(4) NOT NULL,
  `time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `url`
--

INSERT INTO `url` (`url`, `name`, `surl`, `click`, `time`) VALUES
('http://www.w3school.com.cn/', '', 'http://tinyurl.com/67qyau', 0, '2016-04-14 12:12:49'),
('http://www.wibibi.com/info.php?tid=96', '', 'http://tinyurl.com/lshar78', 0, '2016-04-14 12:12:57'),
('http://blog.xuite.net/hosikawa/blog/46671668-%5BJavascript+%26+PHP%5D+%E5%AD%97%E4%B8%B2%E8%88%87%E6', 'test', 'http://tinyurl.com/zyrtabt', 0, '2016-04-14 12:17:15');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `url`
--
ALTER TABLE `url`
  ADD PRIMARY KEY (`surl`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
