-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2017 �?08 �?09 �?01:03
-- 服务器版本: 5.5.53
-- PHP 版本: 5.6.27

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `shenma`
--

-- --------------------------------------------------------

--
-- 表的结构 `shenma_article`
--

CREATE TABLE IF NOT EXISTS `shenma_article` (
  `article_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL COMMENT '标题',
  `web_title` varchar(256) NOT NULL DEFAULT '' COMMENT '网页标题',
  `cate_id` int(11) NOT NULL DEFAULT '0' COMMENT '父级ID',
  `titleimg` varchar(300) NOT NULL COMMENT '缩略图地址',
  `content` text NOT NULL COMMENT '页面内容',
  `keywords` varchar(100) NOT NULL,
  `synopsis` text NOT NULL COMMENT '描述',
  `newstime` varchar(50) NOT NULL COMMENT '提交日期',
  `author` varchar(20) NOT NULL COMMENT '提交者',
  `is_recommend` tinyint(4) NOT NULL DEFAULT '0' COMMENT '是否推荐',
  `sort` int(11) NOT NULL DEFAULT '0' COMMENT '点击量',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '审核 1为审核 2为未审核',
  PRIMARY KEY (`article_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='新闻内容表' AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `shenma_article`
--

INSERT INTO `shenma_article` (`article_id`, `title`, `web_title`, `cate_id`, `titleimg`, `content`, `keywords`, `synopsis`, `newstime`, `author`, `is_recommend`, `sort`, `status`) VALUES
(1, '313213', '', 0, '/Public/Upload/20170808/1502161589_1992678832.png', '123123', '', '123123', '2017-08-08', 'xiaoming1', 0, 10, 1),
(2, '123123', '', 0, '', '123123', '123123', '123123', '2017-08-08', 'xiaoming1', 1, 501, 1);

-- --------------------------------------------------------

--
-- 表的结构 `shenma_auth`
--

CREATE TABLE IF NOT EXISTS `shenma_auth` (
  `auth_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT '权限id',
  `auth_name` varchar(12) NOT NULL DEFAULT '' COMMENT '权限名称',
  `parent_id` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '上级权限类别',
  `auth_url` varchar(50) NOT NULL DEFAULT '' COMMENT '权限路由',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '权限状态，是否显示在左侧菜单列表里',
  PRIMARY KEY (`auth_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=45 ;

--
-- 转存表中的数据 `shenma_auth`
--

INSERT INTO `shenma_auth` (`auth_id`, `auth_name`, `parent_id`, `auth_url`, `status`) VALUES
(1, '内容管理', 0, '', 1),
(2, '文章列表', 1, 'Article/listing', 1),
(3, '文章分类', 1, 'Category/listing', 1),
(4, '未审核信息', 1, 'Article/checkListing', 1),
(5, '添加文章', 1, 'Article/add', 0),
(6, '系统管理', 0, '', 1),
(7, '管理员列表', 6, 'User/listing', 1),
(8, '角色列表', 6, 'Role/listing', 1),
(12, '文章编辑', 1, 'Article/edit', 0),
(11, '审核', 1, 'Article/check', 0),
(10, '角色添加', 6, 'Role/add', 0),
(9, '取消审核', 1, 'Article/unCheck', 0),
(13, '文章删除', 1, 'Article/delete', 0),
(16, '角色编辑', 6, 'Role/edit', 0),
(14, '角色删除', 6, 'Role/delete', 0),
(15, '用户编辑', 6, 'User/edit', 0),
(17, '用户删除', 6, 'User/delete', 0),
(18, '修改个人密码', 6, 'User/password', 0),
(19, '添加分类', 1, 'Category/add', 0),
(20, '编辑分类', 1, 'Category/edit', 0),
(21, '删除分类', 1, 'Category/delete', 0),
(22, '用户添加', 6, 'User/add', 0),
(23, '系统设置', 0, '', 1),
(24, '网站设置', 23, 'System/webConf', 1),
(25, '自定义导航', 23, 'Nav/listing', 1),
(26, '自定义导航添加', 23, 'Nav/add', 0),
(27, '自定义导航编辑', 23, 'Nav/edit', 0),
(28, '友情链接', 23, 'Friendlink/index', 1),
(29, '友情链接添加', 23, 'Friendlink/add', 0),
(30, '友情链接编辑', 23, 'Friendlink/edit', 0),
(31, '友情链接删除', 23, 'Friendlink/delete', 0);

-- --------------------------------------------------------

--
-- 表的结构 `shenma_category`
--

CREATE TABLE IF NOT EXISTS `shenma_category` (
  `cate_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT '分类id',
  `cate_name` varchar(32) NOT NULL DEFAULT '' COMMENT '分类名称',
  `parent_id` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '上级分类id',
  `cate_title` varchar(100) NOT NULL COMMENT '栏目标题描述',
  `cate_keywords` varchar(100) NOT NULL COMMENT '栏目关键词信息',
  `description` text NOT NULL COMMENT '分类描述',
  PRIMARY KEY (`cate_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `shenma_config`
--

CREATE TABLE IF NOT EXISTS `shenma_config` (
  `conf_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT '配置id',
  `conf_name` varchar(20) NOT NULL COMMENT '配置字段',
  `conf_value` varchar(256) NOT NULL COMMENT '配置值',
  PRIMARY KEY (`conf_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `shenma_config`
--

INSERT INTO `shenma_config` (`conf_id`, `conf_name`, `conf_value`) VALUES
(1, 'record_number', ''),
(2, 'site_name', ''),
(3, 'site_title', ''),
(4, 'site_desc', ''),
(5, 'site_keywords', ''),
(6, 'site_status', '1');

-- --------------------------------------------------------

--
-- 表的结构 `shenma_friendlink`
--

CREATE TABLE IF NOT EXISTS `shenma_friendlink` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `url` varchar(256) NOT NULL DEFAULT '' COMMENT 'url',
  `name` varchar(50) NOT NULL DEFAULT '' COMMENT '链接名称',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '1为正常，0为禁用',
  `thumbnail` varchar(256) NOT NULL COMMENT '缩略图',
  `is_blank` tinyint(4) NOT NULL DEFAULT '0' COMMENT '1为新页面打开，0为当前页面打开',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='友情链接表' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `shenma_friendlink`
--

INSERT INTO `shenma_friendlink` (`id`, `url`, `name`, `status`, `thumbnail`, `is_blank`) VALUES
(1, 'http://www.baidu.com', '百度', 1, '/Public/Upload/20170808/1502161726_1691790126.png', 1);

-- --------------------------------------------------------

--
-- 表的结构 `shenma_nav`
--

CREATE TABLE IF NOT EXISTS `shenma_nav` (
  `nav_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT '导航id',
  `nav_name` varchar(20) NOT NULL COMMENT '导航名称',
  `nav_url` varchar(30) NOT NULL COMMENT '导航url',
  `sort` tinyint(3) unsigned NOT NULL COMMENT '排序',
  `is_show` tinyint(4) NOT NULL COMMENT '是否显示',
  `is_blank` tinyint(4) NOT NULL COMMENT '是否新页面',
  PRIMARY KEY (`nav_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `shenma_nav`
--

INSERT INTO `shenma_nav` (`nav_id`, `nav_name`, `nav_url`, `sort`, `is_show`, `is_blank`) VALUES
(1, '首页', '/', 50, 1, 0);

-- --------------------------------------------------------

--
-- 表的结构 `shenma_role`
--

CREATE TABLE IF NOT EXISTS `shenma_role` (
  `role_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT '角色id',
  `role_name` varchar(12) NOT NULL DEFAULT '' COMMENT '角色名称',
  `role_desc` varchar(256) NOT NULL DEFAULT '' COMMENT '角色描述',
  `auth_list` varchar(1024) NOT NULL DEFAULT '' COMMENT '角色权限的列表',
  PRIMARY KEY (`role_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `shenma_role`
--

INSERT INTO `shenma_role` (`role_id`, `role_name`, `role_desc`, `auth_list`) VALUES
(1, '管理员', '拥有全部权限', 'all'),
(2, '信息发布员', '只能使用和信息发布有关的功能', '1,2,3,4,5,12');

-- --------------------------------------------------------

--
-- 表的结构 `shenma_user`
--

CREATE TABLE IF NOT EXISTS `shenma_user` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户id',
  `username` varchar(32) NOT NULL DEFAULT '' COMMENT '用户名',
  `nickname` varchar(30) NOT NULL COMMENT '昵称，用于发布文章',
  `password` char(32) NOT NULL DEFAULT '' COMMENT '用户密码',
  `email` varchar(32) NOT NULL DEFAULT '' COMMENT '用户邮箱',
  `salt` char(6) NOT NULL DEFAULT '' COMMENT '密码盐',
  `role_id` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '角色id',
  `last_login_time` int(11) NOT NULL DEFAULT '0' COMMENT '上次登录时间',
  `last_login_ip` int(11) NOT NULL DEFAULT '0' COMMENT '上次登录ip',
  `add_time` int(11) NOT NULL DEFAULT '0' COMMENT '用户添加时间',
  `login_times` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '登录次数',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '用户状态',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `shenma_user`
--

INSERT INTO `shenma_user` (`user_id`, `username`, `nickname`, `password`, `email`, `salt`, `role_id`, `last_login_time`, `last_login_ip`, `add_time`, `login_times`, `status`) VALUES
(1, 'chunming', 'xiaoming1', 'b897633a5e0f7dc503be11173d669b3a', '328122186@qq.com', '1232', 1, 1502156092, 2130706433, 0, 40, 1),
(7, 'ishequan', 'ishequan', 'e08df8dbfee311bcb98fae8649d4e70f', '', '6sBKPA', 1, 0, 0, 1494381412, 0, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
