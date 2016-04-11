-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-04-11 21:35:49
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shengdongts_score`
--

-- --------------------------------------------------------

--
-- 表的结构 `user_info`
--

CREATE TABLE IF NOT EXISTS `user_info` (
  `infoid` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(60) NOT NULL COMMENT '姓名',
  `school` varchar(60) NOT NULL COMMENT '学校',
  `grade` varchar(60) NOT NULL COMMENT '班级',
  `studyplace` varchar(60) NOT NULL COMMENT '学习地点',
  `phone` varchar(20) NOT NULL COMMENT '电话',
  `addtime` date NOT NULL COMMENT '报名时间',
  `moneytime` date NOT NULL COMMENT '续费日期',
  `remark` varchar(60) NOT NULL COMMENT '备注',
  PRIMARY KEY (`infoid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='会员档案' AUTO_INCREMENT=15 ;

--
-- 转存表中的数据 `user_info`
--

INSERT INTO `user_info` (`infoid`, `username`, `school`, `grade`, `studyplace`, `phone`, `addtime`, `moneytime`, `remark`) VALUES
(4, '高桂鑫', '', '', '', '13792150941', '2016-01-17', '0000-00-00', ''),
(5, '彭继栩', '', '', '', '15666531580', '2016-01-09', '0000-00-00', ''),
(6, '王霖钰', '', '', '', '13869308978', '2016-01-12', '0000-00-00', ''),
(7, '杨博涵', '', '', '', '13153388121', '2016-01-12', '0000-00-00', ''),
(8, '谭馨钰', '', '', '', '15069399554', '2016-01-12', '0000-00-00', ''),
(10, '董芮萱', '', '', '', '13181935871', '2016-01-06', '0005-05-05', ''),
(11, '李文杰', '', '', '', '15315201983', '2016-01-06', '0004-04-04', ''),
(12, '庞朔洲', '', '', '', '18253388566', '2016-01-10', '0003-03-03', ''),
(13, '你好你好', '你好你好', '你好2你好', '你好你好', '111122222', '0002-02-02', '0002-02-02', '你好你好'),
(14, '333344', '3334', '3334', '33334', '33334', '0003-03-04', '0003-03-04', '3334');

-- --------------------------------------------------------

--
-- 表的结构 `user_rank`
--

CREATE TABLE IF NOT EXISTS `user_rank` (
  `rankid` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(60) NOT NULL COMMENT '姓名',
  `facelink` varchar(200) NOT NULL COMMENT '用户头像',
  `testtime` date NOT NULL COMMENT '考试时间',
  `rank` int(3) NOT NULL COMMENT '级别',
  `onejump` int(8) NOT NULL COMMENT ' 一分钟单摇',
  `twojump` int(8) NOT NULL COMMENT '连续双摇',
  `threejump` int(8) NOT NULL COMMENT '连续三摇',
  `link` text NOT NULL COMMENT '链接',
  PRIMARY KEY (`rankid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='个人信息' AUTO_INCREMENT=15 ;

--
-- 转存表中的数据 `user_rank`
--

INSERT INTO `user_rank` (`rankid`, `username`, `facelink`, `testtime`, `rank`, `onejump`, `twojump`, `threejump`, `link`) VALUES
(4, '3333', '22333', '0003-03-03', 223333, 22333, 22333, 22333, 'http://hufangyun.com'),
(5, '彭继栩', '', '2016-01-09', 5, 0, 0, 0, ''),
(6, '王霖钰', '', '2016-01-12', 5, 0, 0, 0, ''),
(7, '杨博涵', '', '2016-01-12', 5, 0, 0, 0, ''),
(8, '谭馨钰', '', '2016-01-12', 4, 0, 0, 0, ''),
(9, '邢子轩', '', '2016-01-06', 4, 0, 0, 0, ''),
(10, '董芮萱', '', '2016-01-06', 4, 0, 0, 0, ''),
(11, '李文杰', '', '2016-01-06', 2, 0, 0, 0, ''),
(12, '庞朔洲', '', '2016-01-10', 2, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- 表的结构 `user_score`
--

CREATE TABLE IF NOT EXISTS `user_score` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(60) NOT NULL COMMENT '姓名',
  `score` int(10) NOT NULL COMMENT '分数',
  `remark` varchar(80) NOT NULL COMMENT '备注',
  `facelink` varchar(200) NOT NULL COMMENT '头像链接',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='分数排名' AUTO_INCREMENT=41 ;

--
-- 转存表中的数据 `user_score`
--

INSERT INTO `user_score` (`id`, `username`, `score`, `remark`, `facelink`) VALUES
(23, '李文杰', 460, '', ''),
(24, '邢子轩', 100, '', ''),
(25, '庞朔洲', 100, '', ''),
(26, '彭继栩', 110, '', ''),
(27, '王霖钰', 500, '', ''),
(29, '闫雨鸣飞', 340, '', ''),
(31, '高桂鑫', 0, '', ''),
(32, '杨博涵', 127, '', ''),
(33, '谭馨钰', 141, '', ''),
(34, '赵子赫', 200, '', ''),
(35, '韩礼泽', 175, '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
