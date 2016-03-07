-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-03-07 08:29:13
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
  `phone` varchar(20) NOT NULL COMMENT '电话',
  `addtime` date NOT NULL COMMENT '报名时间',
  `rank` int(3) NOT NULL COMMENT '级别',
  `link` text NOT NULL COMMENT '链接',
  PRIMARY KEY (`infoid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='个人信息' AUTO_INCREMENT=13 ;

--
-- 转存表中的数据 `user_info`
--

INSERT INTO `user_info` (`infoid`, `username`, `phone`, `addtime`, `rank`, `link`) VALUES
(3, '闫雨鸣飞', '13864419979', '2016-01-09', 7, '<embed src="http://player.youku.com/player.php/sid/XMTQ4NDI2MTU5Mg==/v.swf" allowFullScreen="true" quality="high" width="480" height="400" align="middle" allowScriptAccess="always" type="application/x-shockwave-flash"></embed>.html'),
(4, '高桂鑫', '13792150941', '2016-01-17', 5, '<iframe height=498 width=510 src="http://player.youku.com/embed/XMTQ4NDI2MjA3Mg==" frameborder=0 allowfullscreen></iframe>'),
(5, '彭继栩', '15666531580', '2016-01-09', 5, '<iframe height=498 width=510 src="http://player.youku.com/embed/XMTQ4NjAxMTYyNA==" frameborder=0 allowfullscreen></iframe>'),
(6, '王霖钰', '13869308978', '2016-01-12', 5, '<iframe height=498 width=510 src="http://player.youku.com/embed/XMTQ4NTkzMTg1Mg==" frameborder=0 allowfullscreen></iframe>'),
(7, '杨博涵', '13153388121', '2016-01-12', 5, '<iframe height=498 width=510 src="http://player.youku.com/embed/XMTQ4NjAzNjExMg==" frameborder=0 allowfullscreen></iframe>'),
(8, '谭馨钰', '15069399554', '2016-01-12', 4, '<iframe height=498 width=510 src="http://player.youku.com/embed/XMTQ4NjA3ODg4OA==" frameborder=0 allowfullscreen></iframe>'),
(9, '邢子轩', '13046072055', '2016-01-06', 4, '<embed src="http://player.youku.com/player.php/sid/XMTQ4NjEzNDUyNA==/v.swf" allowFullScreen="true" quality="high" width="480" height="400" align="middle" allowScriptAccess="always" type="application/x-shockwave-flash"></embed>'),
(10, '董芮萱', '13181935871', '2016-01-06', 4, '<iframe height=498 width=510 src="http://player.youku.com/embed/XMTQ4NjE1NjkwNA==" frameborder=0 allowfullscreen></iframe>'),
(11, '李文杰', '15315201983', '2016-01-06', 2, '<iframe height=498 width=510 src="http://player.youku.com/embed/XMTQ4NjExMDQwMA==" frameborder=0 allowfullscreen></iframe>'),
(12, '庞朔洲', '18253388566', '2016-01-10', 2, '<iframe height=498 width=510 src="http://player.youku.com/embed/XMTQ4NjE4Mjk4MA==" frameborder=0 allowfullscreen></iframe>');

-- --------------------------------------------------------

--
-- 表的结构 `user_score`
--

CREATE TABLE IF NOT EXISTS `user_score` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(60) NOT NULL COMMENT '姓名',
  `score` int(10) NOT NULL COMMENT '分数',
  `remark` varchar(80) NOT NULL COMMENT '备注',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='分数排名' AUTO_INCREMENT=36 ;

--
-- 转存表中的数据 `user_score`
--

INSERT INTO `user_score` (`id`, `username`, `score`, `remark`) VALUES
(23, '李文杰', 460, ''),
(24, '邢子轩', 100, ''),
(25, '庞朔洲', 100, ''),
(26, '彭继栩', 110, ''),
(27, '王霖钰', 500, ''),
(29, '闫雨鸣飞', 340, ''),
(31, '高桂鑫', 0, ''),
(32, '杨博涵', 127, ''),
(33, '谭馨钰', 141, ''),
(34, '赵子赫', 200, ''),
(35, '韩礼泽', 175, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
