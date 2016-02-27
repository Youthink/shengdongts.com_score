-- phpMyAdmin SQL Dump
-- version 4.5.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2016-02-26 23:12:53
-- 服务器版本： 10.1.11-MariaDB-log
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shengdongts_score`
--

-- --------------------------------------------------------

--
-- 表的结构 `user_info`
--

CREATE TABLE `user_info` (
  `infoid` int(10) NOT NULL,
  `username` varchar(60) NOT NULL COMMENT '姓名',
  `phone` varchar(20) NOT NULL COMMENT '电话',
  `addtime` date NOT NULL COMMENT '报名时间',
  `rank` int(3) NOT NULL COMMENT '级别',
  `link` text NOT NULL COMMENT '链接'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='个人信息';

--
-- 转存表中的数据 `user_info`
--

INSERT INTO `user_info` (`infoid`, `username`, `phone`, `addtime`, `rank`, `link`) VALUES
(1, 'hu', '1111', '1111-01-01', 1, 'http://123.com');

-- --------------------------------------------------------

--
-- 表的结构 `user_score`
--

CREATE TABLE `user_score` (
  `id` int(10) NOT NULL,
  `username` varchar(60) NOT NULL COMMENT '姓名',
  `score` int(10) NOT NULL COMMENT '分数',
  `remark` varchar(80) NOT NULL COMMENT '备注'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='分数排名';

--
-- 转存表中的数据 `user_score`
--

INSERT INTO `user_score` (`id`, `username`, `score`, `remark`) VALUES
(3, '小胡', 99, '胡方运'),
(4, '小胡', 99, '胡方运'),
(5, '小李', 99, '123'),
(6, '小李', 99, '123'),
(7, '小李', 99, '123'),
(8, '小李', 99, '123'),
(9, '小李', 99, '123'),
(10, '小李', 99, '123'),
(11, '小李', 99, '123'),
(12, 'xiaowang ', 111, '1111'),
(13, 'xiaowang ', 111, '1111'),
(14, '去', 1, '1'),
(15, '去', 1, '1'),
(16, '13110581136', 1, '1'),
(17, '13110581136', 1, '1'),
(18, '13110581136', 1, '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`infoid`);

--
-- Indexes for table `user_score`
--
ALTER TABLE `user_score`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `user_info`
--
ALTER TABLE `user_info`
  MODIFY `infoid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- 使用表AUTO_INCREMENT `user_score`
--
ALTER TABLE `user_score`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
