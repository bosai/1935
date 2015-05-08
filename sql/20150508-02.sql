-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 05 月 08 日 16:17
-- 服务器版本: 5.5.40
-- PHP 版本: 5.4.33

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `1935`
--

-- --------------------------------------------------------

--
-- 表的结构 `bs_about`
--

CREATE TABLE IF NOT EXISTS `bs_about` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `out_content` text NOT NULL,
  `out_add_time` int(11) NOT NULL DEFAULT '0',
  `out_save_time` int(11) NOT NULL DEFAULT '0',
  `out_people` varchar(30) NOT NULL DEFAULT 'admin',
  `out_last_release` int(13) NOT NULL,
  `belong` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='关于我们表' AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `bs_about`
--

INSERT INTO `bs_about` (`id`, `out_content`, `out_add_time`, `out_save_time`, `out_people`, `out_last_release`, `belong`) VALUES
(1, 'tetaas', 0, 0, 'admin', 0, 0),
(2, 'tetaas', 0, 0, 'admin', 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `bs_basic`
--

CREATE TABLE IF NOT EXISTS `bs_basic` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sic_title` varchar(50) NOT NULL,
  `sic_logo` varchar(50) NOT NULL DEFAULT 'logo.png',
  `sic_keyword` varchar(100) NOT NULL DEFAULT '博赛工贸科技',
  `sic_description` varchar(200) NOT NULL DEFAULT '赛博工贸科技',
  `sic_phone` varchar(15) NOT NULL DEFAULT '0755-22222222',
  `sic_addres` varchar(100) NOT NULL DEFAULT '深圳市罗湖区宝安南路3083蔡屋围发展大厦903',
  `sic_email` varchar(50) NOT NULL DEFAULT '11245.qq.com',
  `sic_friends` varchar(100) NOT NULL DEFAULT 'www.baidu.com,百度',
  `sic_bottom` varchar(500) NOT NULL DEFAULT 'Copyright &copy; 版权所有：博赛工贸 All Rights Reserved | 备案号：粤ICP备11071742号 ',
  `sic_last_release` int(13) NOT NULL COMMENT 'Last Change',
  `belong` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='网站基本设置表' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `bs_basic`
--

INSERT INTO `bs_basic` (`id`, `sic_title`, `sic_logo`, `sic_keyword`, `sic_description`, `sic_phone`, `sic_addres`, `sic_email`, `sic_friends`, `sic_bottom`, `sic_last_release`, `belong`) VALUES
(1, '', 'logo.png', '博赛工贸科技', '赛博工贸科技', '0755-22222222', '深圳市罗湖区宝安南路3083蔡屋围发展大厦903', '11245.qq.com', 'www.baidu.com,百度', 'Copyright &copy; 版权所有：博赛工贸 All Rights Reserved | 备案号：粤ICP备11071742号 ', 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `bs_contact`
--

CREATE TABLE IF NOT EXISTS `bs_contact` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `act_title` varchar(50) NOT NULL,
  `art_content` text NOT NULL,
  `art_map_coordinate` varchar(50) NOT NULL,
  `art_map_title` varchar(100) NOT NULL,
  `art_map_content` varchar(700) NOT NULL,
  `art_last_release` int(13) NOT NULL,
  `belong` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='联系我们表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `bs_log`
--

CREATE TABLE IF NOT EXISTS `bs_log` (
  `log_id` int(11) NOT NULL AUTO_INCREMENT,
  `log_userid` int(5) NOT NULL COMMENT 'User''s UID',
  `log_action` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Action',
  `log_time` int(13) NOT NULL COMMENT 'Action time',
  `log_ip` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'IP Address',
  `log_ua` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'User-Agent',
  `belong` int(4) NOT NULL,
  PRIMARY KEY (`log_id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk COMMENT='Log' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `bs_menu`
--

CREATE TABLE IF NOT EXISTS `bs_menu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `is_display` enum('0','1') DEFAULT '1',
  `mod_id` int(10) NOT NULL,
  `s_belong` int(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='子菜单表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `bs_message`
--

CREATE TABLE IF NOT EXISTS `bs_message` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `mes_name` varchar(10) NOT NULL,
  `mes_phone` int(11) NOT NULL,
  `mes_email` varchar(50) NOT NULL,
  `mes_content` varchar(1000) NOT NULL,
  `is_see` enum('0','1') NOT NULL DEFAULT '0',
  `mes_last_release` int(13) NOT NULL,
  `belong` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='留言表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `bs_modular`
--

CREATE TABLE IF NOT EXISTS `bs_modular` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `is_display` enum('0','1') DEFAULT '1',
  `s_belong` int(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='模块表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `bs_news`
--

CREATE TABLE IF NOT EXISTS `bs_news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `new_title` varchar(100) NOT NULL,
  `new_pic` varchar(50) NOT NULL DEFAULT '1.png',
  `new_content` text NOT NULL,
  `new_add_time` int(11) NOT NULL DEFAULT '0',
  `new_save_time` int(11) NOT NULL DEFAULT '0',
  `new_people` varchar(30) NOT NULL DEFAULT 'admin',
  `is_display` enum('0','1') NOT NULL DEFAULT '1',
  `cat_id` int(11) NOT NULL,
  `new_sort` int(5) DEFAULT NULL,
  `news_last_release` int(13) NOT NULL,
  `belong` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='新闻表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `bs_news_class`
--

CREATE TABLE IF NOT EXISTS `bs_news_class` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `is_display` enum('0','1') DEFAULT '1',
  `last_release` int(13) NOT NULL,
  `belong` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='新闻分类表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `bs_product`
--

CREATE TABLE IF NOT EXISTS `bs_product` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `introduct` varchar(1000) NOT NULL,
  `advantage` varchar(500) DEFAULT NULL,
  `model` varchar(50) DEFAULT NULL,
  `pic` varchar(200) NOT NULL,
  `is_display` enum('0','1') NOT NULL DEFAULT '1',
  `cat_id` int(11) NOT NULL,
  `Recommend` enum('0','1') NOT NULL DEFAULT '0',
  `pro_sort` int(5) DEFAULT NULL,
  `pro_add_time` int(11) NOT NULL,
  `pro_last_release` int(13) NOT NULL,
  `belong` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='产品表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `bs_product_class`
--

CREATE TABLE IF NOT EXISTS `bs_product_class` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL DEFAULT '0',
  `path` varchar(100) NOT NULL DEFAULT '0-1',
  `pro_class_sort` int(5) DEFAULT NULL,
  `last_release` int(13) NOT NULL,
  `belong` int(4) NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='产品分类表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `bs_site`
--

CREATE TABLE IF NOT EXISTS `bs_site` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='站点表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `bs_user`
--

CREATE TABLE IF NOT EXISTS `bs_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(20) NOT NULL,
  `password` char(32) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sex` enum('0','1') NOT NULL DEFAULT '0',
  `last_id` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='用户表' AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
