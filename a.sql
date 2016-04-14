-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2016-04-14 06:21:54
-- 伺服器版本: 10.1.10-MariaDB
-- PHP 版本： 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `a`
--

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `u_id` varchar(16) NOT NULL,
  `u_pw` varchar(16) NOT NULL,
  `u_name` varchar(10) NOT NULL,
  `u_mail` varchar(40) NOT NULL,
  `u_phone` varchar(10) NOT NULL,
  `u_cntlogin` int(4) NOT NULL,
  `u_lastlogin` varchar(20) CHARACTER SET utf32 NOT NULL,
  `tmp_date` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `user`
--

INSERT INTO `user` (`u_id`, `u_pw`, `u_name`, `u_mail`, `u_phone`, `u_cntlogin`, `u_lastlogin`, `tmp_date`) VALUES
('abc123', 'abc321', '妮妮', 'abcwear', '0978654545', 1, '2016-04-14 11:01:15', '14'),
('root', '123456', 'root', 'afasf@gs', '0123456789', 1, '2016-04-14 10:58:59', '14');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
