-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2025-03-27 09:11:21
-- 伺服器版本： 10.4.32-MariaDB
-- PHP 版本： 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `hw5_0321`
--

-- --------------------------------------------------------

--
-- 資料表結構 `mystudent`
--

CREATE TABLE `mystudent` (
  `sno` int(10) NOT NULL,
  `name` varchar(12) NOT NULL,
  `address` varchar(50) NOT NULL,
  `birthday` date NOT NULL,
  `username` varchar(12) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `mystudent`
--

INSERT INTO `mystudent` (`sno`, `name`, `address`, `birthday`, `username`, `password`) VALUES
(1, '一同學', '新北市', '2003-01-01', 'apple', '123456'),
(2, '二同學', '台北市', '2003-02-02', 'ball', '123456'),
(3, '三同學', '基隆市', '2003-03-03', 'cat', '123456'),
(4, '四同學', '嘉義市', '2003-04-04', 'dog', '123456'),
(5, '五同學', '台南市', '2003-05-05', 'elephant', '123456'),
(6, '六同學', '高雄市', '2003-06-06', 'food', '123456');

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `sno` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `user`
--

INSERT INTO `user` (`sno`, `username`, `password`) VALUES
(1, 'apple', '123456'),
(2, 'ball', '123456'),
(3, 'cat', '123456'),
(4, 'dog', '123456'),
(5, 'elephant', '123456'),
(6, 'food', '123456');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `mystudent`
--
ALTER TABLE `mystudent`
  ADD PRIMARY KEY (`sno`);

--
-- 資料表索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`sno`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `mystudent`
--
ALTER TABLE `mystudent`
  MODIFY `sno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `user`
--
ALTER TABLE `user`
  MODIFY `sno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
