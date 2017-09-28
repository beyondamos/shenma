-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2017 �?09 �?28 �?02:03
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
-- 表的结构 `shenma_about`
--

CREATE TABLE IF NOT EXISTS `shenma_about` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL COMMENT '标题',
  `url` varchar(255) NOT NULL DEFAULT '' COMMENT '链接',
  `thumbnail` varchar(255) NOT NULL COMMENT '背景图',
  `content` text NOT NULL COMMENT '页面内容',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='新闻内容表' AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `shenma_about`
--

INSERT INTO `shenma_about` (`id`, `title`, `url`, `thumbnail`, `content`) VALUES
(1, '小暖炉', '', '', '&lt;p style=&quot;color:#242424;font-size:17px;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	小暖炉助学计划是由热心公益事业的什马金融公司、什马金融内部员工、以及社会志愿者共同发起的，在遵守宪法、法律、法规和国家政策，遵守社会道德风尚的前提下以扶贫帮困献爱心为主的公益扶贫计划。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;color:#242424;font-size:17px;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	1、帮扶对象：贫困学生、留守儿童；以学习优秀，积极向上的初、高中生为主；\r\n&lt;/p&gt;\r\n&lt;p style=&quot;color:#242424;font-size:17px;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	2、帮扶宗旨：让贫穷的孩子都有书读，用知识改变命运；\r\n&lt;/p&gt;'),
(2, '关于什马', '12312312123213123213213', '/Public/Upload/20170922/1506048343_1568812728.jpg', '&lt;p&gt;\r\n	什马互联网金融信息服务（上海）有限公司，简称什马金融，成立于2015年1月，总部位于国内金融中心上海。是一家专注在县乡镇渠道，服务于8亿农村市场的国内领先的互联网金融公司\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	公司成立伊始以农村交通工具领域为切入点，并依托上市公司等行业强势资源，业务快速覆盖全国。\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	公司两大核心产品什马分期和信用贷分别为农民和商家提供消费金融和供应链金融服务，旨在帮助更多的经销商做好生意、做大生意，使销售资金得以快速的回笼。\r\n&lt;/p&gt;');

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
  `is_recommend` tinyint(4) NOT NULL DEFAULT '0' COMMENT '首页多条推荐',
  `is_top` tinyint(4) NOT NULL DEFAULT '0' COMMENT '首页top推荐',
  PRIMARY KEY (`article_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='新闻内容表' AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `shenma_article`
--

INSERT INTO `shenma_article` (`article_id`, `title`, `web_title`, `cate_id`, `titleimg`, `content`, `keywords`, `synopsis`, `newstime`, `author`, `is_recommend`, `is_top`) VALUES
(1, '第一篇测试新闻', '第一篇测试新闻', 1, '/Public/Upload/20170925/1506319956_778809515.jpg', '第一篇测试新闻', '', '第一篇测试新闻', '2017-09-25', 'xiaoming1', 0, 0),
(2, '第二篇测试新闻', '第二篇测试新闻', 1, '/Public/Upload/20170925/1506320041_2037099294.jpg', '第二篇测试新闻', '', '第二篇测试新闻', '2017-09-25', 'xiaoming1', 0, 1),
(3, '第3篇测试文章', '第二篇测试新闻', 2, '/Public/Upload/20170925/1506320891_550013904.jpg', '第二篇测试新闻', '', '第二篇测试新闻', '2017-09-25', 'xiaoming1', 1, 0),
(4, '第4篇测试文章', '第4篇测试文章', 2, '/Public/Upload/20170925/1506320953_2128939445.jpg', '第4篇测试文章', '', '第4篇测试文章', '2017-09-25', 'xiaoming1', 1, 0),
(5, '123213213', '第一篇测试新闻', 1, '/Public/Upload/20170925/1506320996_1430288709.jpg', '123213', '', '123213', '2017-09-25', 'xiaoming1', 1, 0),
(6, '123123', '123123213', 1, '', '123213', '', '123213', '2017-09-25', 'xiaoming1', 1, 0),
(7, '1231231111123234234234', '123213', 2, '', '123213', '', '123123', '2017-09-25', 'xiaoming1', 1, 0);

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=85 ;

--
-- 转存表中的数据 `shenma_auth`
--

INSERT INTO `shenma_auth` (`auth_id`, `auth_name`, `parent_id`, `auth_url`, `status`) VALUES
(1, '内容管理', 0, '', 1),
(2, '文章列表', 1, 'Article/index', 0),
(68, '职位信息', 1, 'Post/index', 0),
(5, '添加文章', 1, 'Article/add', 0),
(6, '系统管理', 0, '', 1),
(7, '管理员列表', 6, 'User/listing', 1),
(8, '角色列表', 6, 'Role/listing', 1),
(12, '文章编辑', 1, 'Article/edit', 0),
(3, '部门信息', 1, 'Department/index', 0),
(10, '角色添加', 6, 'Role/add', 0),
(13, '文章删除', 1, 'Article/delete', 0),
(16, '角色编辑', 6, 'Role/edit', 0),
(14, '角色删除', 6, 'Role/delete', 0),
(15, '用户编辑', 6, 'User/edit', 0),
(17, '用户删除', 6, 'User/delete', 0),
(18, '修改个人密码', 6, 'User/password', 0),
(19, '添加部门', 1, 'Department/add', 0),
(20, '编辑部门', 1, 'Department/edit', 0),
(21, '删除部门', 1, 'Department/delete', 0),
(22, '用户添加', 6, 'User/add', 0),
(23, '系统设置', 0, '', 1),
(24, '网站设置', 23, 'System/webConf', 1),
(25, '首页底部导航', 1, 'Nav/index', 0),
(26, '导航添加', 1, 'Nav/add', 0),
(27, '导航编辑', 1, 'Nav/edit', 0),
(28, '合作品牌', 1, 'Brand/index', 0),
(29, '合作品牌添加', 1, 'Brand/add', 0),
(30, '合作品牌编辑', 1, 'Brand/edit', 0),
(31, '合作品牌删除', 1, 'Brand/delete', 0),
(45, '留言列表', 1, 'Message/index', 0),
(46, '留言删除', 1, 'Message/delete', 0),
(47, '留言查看', 1, 'Message/info', 0),
(48, 'Banner列表', 1, 'Banner/index', 0),
(49, 'Banner添加', 1, 'Banner/add', 0),
(50, 'Banner编辑', 1, 'Banner/edit', 0),
(51, '什马简介', 1, 'Aboutus/index', 0),
(52, '发展历程', 1, 'Develop/index', 0),
(53, '发展历程添加', 1, 'Develop/add', 0),
(54, '发展历程编辑', 1, 'Develop/edit', 0),
(55, '发展历程删除', 1, 'Develop/delete', 0),
(56, '首页什马简介', 1, 'Aboutus/shouye', 0),
(57, 'Banner图标设置', 1, 'Icon/index', 0),
(58, '图标编辑', 1, 'Icon/edit', 0),
(59, '产品列表', 1, 'Product/index', 0),
(60, '产品编辑', 1, 'Product/edit', 0),
(61, '产品编辑', 1, 'Product/delete', 0),
(62, '产品添加', 1, 'Product/add', 0),
(63, '团队信息', 1, 'Team/index', 0),
(64, '团队信息编辑', 1, 'Team/edit', 0),
(65, '添加团队信息', 1, 'Team/add', 0),
(66, '删除团队信息', 1, 'Team/delete', 0),
(67, '单信息设置', 1, 'Info/index', 0),
(69, '职位添加', 1, 'Post/add', 0),
(70, '职位编辑', 1, 'Post/edit', 0),
(71, '职位删除', 1, 'Post/delete', 0),
(72, '问题分类', 1, 'Qc/index', 0),
(73, '问题分类添加', 1, 'Qc/add', 0),
(74, '问题分类编辑', 1, 'Qc/edit', 0),
(75, '问题分类删除', 1, 'Qc/delete', 0),
(76, '问题列表', 1, 'Question/index', 0),
(77, '问题添加', 1, 'Question/add', 0),
(78, '问题编辑', 1, 'Question/edit', 0),
(79, '问题删除', 1, 'Question/delete', 0),
(80, '轮播列表', 1, 'Carousel/index', 0),
(81, '轮播添加', 1, 'Carousel/add', 0),
(82, '轮播编辑', 1, 'Carousel/edit', 0),
(83, '轮播删除', 1, 'Carousel/delete', 0),
(84, '导航删除', 1, 'Nav/edit', 0);

-- --------------------------------------------------------

--
-- 表的结构 `shenma_banner`
--

CREATE TABLE IF NOT EXISTS `shenma_banner` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `url` varchar(256) NOT NULL DEFAULT '' COMMENT 'url',
  `name` varchar(50) NOT NULL DEFAULT '' COMMENT '链接名称',
  `thumbnail` varchar(256) NOT NULL COMMENT '缩略图',
  `sort` tinyint(4) NOT NULL DEFAULT '0' COMMENT '顺序',
  `classify` tinyint(4) NOT NULL DEFAULT '0' COMMENT '分类',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='友情链接表' AUTO_INCREMENT=16 ;

--
-- 转存表中的数据 `shenma_banner`
--

INSERT INTO `shenma_banner` (`id`, `url`, `name`, `thumbnail`, `sort`, `classify`) VALUES
(1, '123123123', '第一张', '/Public/Upload/20170921/1505956113_1392164059.jpg', 1, 1),
(2, '213213213', '第2张', '/Public/Upload/20170921/1505956130_606835435.jpg', 2, 1),
(3, '123123', '第3张', '/Public/Upload/20170921/1505956147_498624648.jpg', 3, 1),
(4, '123213', '第4张', '/Public/Upload/20170921/1505956164_704730493.jpg', 10, 1),
(5, '123213', '关于我们', '/Public/Upload/20170921/1505958524_1209540722.jpg', 1, 3),
(6, '12321313', '借款申请banner', '/Public/Upload/20170922/1506059128_950678200.jpg', 1, 2),
(7, '13213213', '商户进货贷', '/Public/Upload/20170925/1506302509_1776309795.png', 1, 4),
(8, '123123213', '核心产品banner', '/Public/Upload/20170925/1506302775_422591589.png', 2, 4),
(9, '134123213', '新闻资讯', '/Public/Upload/20170925/1506318149_1022369721.jpg', 0, 5),
(10, '123213213', '老板商学院', '/Public/Upload/20170925/1506323394_1751433130.jpg', 0, 6),
(11, '123213123', '老板社区', '/Public/Upload/20170925/1506324014_1641799524.png', 0, 6),
(12, '', '联系我们', '/Public/Upload/20170925/1506324422_925569988.jpg', 0, 7),
(13, '11111', '第一张', '/Public/Upload/20170927/1506475425_775454612.jpg', 1, 8),
(14, '123123', '第2张', '/Public/Upload/20170927/1506475558_187202306.jpg', 2, 8),
(15, '123123213', '第3张', '/Public/Upload/20170927/1506475618_449450261.jpg', 3, 8);

-- --------------------------------------------------------

--
-- 表的结构 `shenma_brand`
--

CREATE TABLE IF NOT EXISTS `shenma_brand` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `url` varchar(256) NOT NULL DEFAULT '' COMMENT 'url',
  `name` varchar(50) NOT NULL DEFAULT '' COMMENT '链接名称',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '1为正常，0为禁用',
  `thumbnail` varchar(256) NOT NULL COMMENT '缩略图',
  `is_blank` tinyint(4) NOT NULL DEFAULT '0' COMMENT '1为新页面打开，0为当前页面打开',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='友情链接表' AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `shenma_brand`
--

INSERT INTO `shenma_brand` (`id`, `url`, `name`, `status`, `thumbnail`, `is_blank`) VALUES
(1, 'http://www.baidu.com', '顺为资本', 1, '/Public/Upload/20170915/1505439830_1471526976.png', 0),
(2, 'http://www.baidu.com', '峰瑞资本', 1, '/Public/Upload/20170915/1505439306_1759848785.png', 0),
(3, 'http://www.baidu.com', '北极光创投', 1, '/Public/Upload/20170915/1505439354_1960900315.png', 0),
(4, 'http://www.baidu.com', '华创资本', 1, '/Public/Upload/20170915/1505439382_1388362111.png', 0),
(5, 'http://www.baidu.com', '信中利', 1, '/Public/Upload/20170915/1505439420_1036568804.png', 0),
(6, 'http://www.baidu.com', '新大洲本田', 1, '/Public/Upload/20170915/1505439443_1689504697.png', 0),
(7, 'http://www.baidu.com', '雅迪电动车', 1, '/Public/Upload/20170915/1505439467_1699157341.png', 0),
(8, 'http://www.baidu.com', '豪爵', 1, '/Public/Upload/20170915/1505439493_937432950.png', 0),
(9, 'http://www.baidu.com', '金彭', 1, '/Public/Upload/20170915/1505439521_533915130.png', 0),
(10, 'http://www.baidu.com', '新大洲', 1, '/Public/Upload/20170915/1505439543_239773102.png', 0);

-- --------------------------------------------------------

--
-- 表的结构 `shenma_carousel`
--

CREATE TABLE IF NOT EXISTS `shenma_carousel` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `name` varchar(50) NOT NULL DEFAULT '' COMMENT '链接名称',
  `thumbnail1` varchar(256) NOT NULL DEFAULT '' COMMENT '缩略图',
  `thumbnail2` varchar(256) NOT NULL DEFAULT '',
  `thumbnail3` varchar(256) NOT NULL DEFAULT '',
  `sort` tinyint(4) NOT NULL DEFAULT '0' COMMENT '顺序',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='友情链接表' AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `shenma_carousel`
--

INSERT INTO `shenma_carousel` (`id`, `name`, `thumbnail1`, `thumbnail2`, `thumbnail3`, `sort`) VALUES
(1, '第一张', '/Public/Upload/20170926/1506386812_370368380.png', '/Public/Upload/20170926/1506386812_1712470916.png', '/Public/Upload/20170926/1506386812_415027315.png', 10),
(2, '第2套图', '/Public/Upload/20170926/1506387333_503064594.png', '/Public/Upload/20170926/1506387333_1369760074.png', '/Public/Upload/20170926/1506387333_696539910.png', 10);

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
-- 表的结构 `shenma_department`
--

CREATE TABLE IF NOT EXISTS `shenma_department` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT '分类id',
  `name` varchar(32) NOT NULL DEFAULT '' COMMENT '分类名称',
  `parent_id` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '上级id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- 转存表中的数据 `shenma_department`
--

INSERT INTO `shenma_department` (`id`, `name`, `parent_id`) VALUES
(1, '上海', 0),
(2, '信审风控中心', 1),
(3, '成都', 0),
(4, '西安', 0),
(5, '杭州', 0),
(6, '贵州', 0),
(7, '北京', 0),
(8, '安全中心', 1),
(9, '产品研发中心', 1),
(10, '信息技术中心', 1),
(11, '新部门', 3);

-- --------------------------------------------------------

--
-- 表的结构 `shenma_develop`
--

CREATE TABLE IF NOT EXISTS `shenma_develop` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `title` varchar(255) NOT NULL DEFAULT '' COMMENT '发展名称',
  `thumbnail` varchar(256) NOT NULL DEFAULT '',
  `newstime` char(10) NOT NULL DEFAULT '' COMMENT '时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='发展历程表' AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `shenma_develop`
--

INSERT INTO `shenma_develop` (`id`, `title`, `thumbnail`, `newstime`) VALUES
(1, '什马金融成立', '/Public/Upload/20170928/1506561754_1043244688.jpg', '2017-09-01'),
(2, '第2张', '/Public/Upload/20170928/1506561760_1128571938.jpg', '2017-09-28'),
(3, '第3张', '/Public/Upload/20170928/1506561766_1139172261.jpg', '2017-09-14'),
(4, '', '0', '');

-- --------------------------------------------------------

--
-- 表的结构 `shenma_icon`
--

CREATE TABLE IF NOT EXISTS `shenma_icon` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `url` varchar(256) NOT NULL DEFAULT '' COMMENT 'url',
  `name` varchar(50) NOT NULL DEFAULT '' COMMENT '链接名称',
  `name_e` varchar(100) NOT NULL DEFAULT '' COMMENT '英文名称',
  `thumbnail` varchar(256) NOT NULL COMMENT '缩略图',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='Banner图标' AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `shenma_icon`
--

INSERT INTO `shenma_icon` (`id`, `url`, `name`, `name_e`, `thumbnail`) VALUES
(1, '123123213', '商家贷款', 'Business loans', '/Public/Upload/20170925/1506300950_520147208.png'),
(2, '4234234234234', '消费者贷款', 'Consumer loans', '/Public/Upload/20170925/1506301262_1864146358.png');

-- --------------------------------------------------------

--
-- 表的结构 `shenma_info`
--

CREATE TABLE IF NOT EXISTS `shenma_info` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL COMMENT '标题',
  `thumbnail` varchar(300) NOT NULL COMMENT '缩略图地址',
  `content` text NOT NULL COMMENT '页面内容',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='新闻内容表' AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `shenma_info`
--

INSERT INTO `shenma_info` (`id`, `title`, `thumbnail`, `content`) VALUES
(1, '小暖炉助学计划', '/Public/Upload/20170925/1506317422_999256213.png', '&lt;p style=&quot;color:#242424;font-size:17px;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	小暖炉助学计划是由热心公益事业的什马金融公司、什马金融内部员工、以及社会志愿者共同发起的，在遵守宪法、法律、法规和国家政策，遵守社会道德风尚的前提下以扶贫帮困献爱心为主的公益扶贫计划。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;color:#242424;font-size:17px;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	1、帮扶对象：贫困学生、留守儿童；以学习优秀，积极向上的初、高中生为主；\r\n&lt;/p&gt;\r\n&lt;p style=&quot;color:#242424;font-size:17px;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	2、帮扶宗旨：让贫穷的孩子都有书读，用知识改变命运；\r\n&lt;/p&gt;'),
(2, '老板商学院简介', '', '老板商学院是由知名互联网金融公司什马金融围绕商户经营体系所建立的综合性商户服务平台。旨在为什马商户提供更多的在线培训、销售技巧、经营辅导、宣传推广等多种增值性服务，让您的销售资金快速回笼，生意越做越大');

-- --------------------------------------------------------

--
-- 表的结构 `shenma_message`
--

CREATE TABLE IF NOT EXISTS `shenma_message` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(10) NOT NULL DEFAULT '' COMMENT '姓名',
  `phone` char(11) NOT NULL DEFAULT '' COMMENT '手机',
  `email` varchar(50) NOT NULL DEFAULT '' COMMENT '邮箱',
  `info` text NOT NULL COMMENT '留言信息',
  `createtime` int(11) NOT NULL DEFAULT '0' COMMENT '留言时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='留言表' AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `shenma_message`
--

INSERT INTO `shenma_message` (`id`, `name`, `phone`, `email`, `info`, `createtime`) VALUES
(3, '1231', '13262523405', '213123@qq.com', '3123123123', 1505444019);

-- --------------------------------------------------------

--
-- 表的结构 `shenma_nav`
--

CREATE TABLE IF NOT EXISTS `shenma_nav` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT '导航id',
  `name` varchar(20) NOT NULL COMMENT '导航名称',
  `url` varchar(30) NOT NULL COMMENT '导航url',
  `sort` tinyint(3) unsigned NOT NULL COMMENT '排序',
  `parent_id` smallint(6) NOT NULL COMMENT '上级id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- 转存表中的数据 `shenma_nav`
--

INSERT INTO `shenma_nav` (`id`, `name`, `url`, `sort`, `parent_id`) VALUES
(1, '借款申请', '213123123', 1, 0),
(2, '关于什马', '111111', 2, 0),
(3, '商户借款', '123123213', 50, 1),
(4, '消费者借款', '123123', 50, 1),
(5, '公司介绍', '123123', 50, 2),
(6, '发展历程', '123123', 50, 2),
(7, '核心团队', '123', 50, 2),
(8, '企业文化', '123123', 50, 2),
(9, '新闻资讯', '123', 50, 0),
(10, '公司新闻', '123', 50, 9),
(11, '行业资讯', '213', 50, 9),
(12, '老板商学院', '123', 50, 0),
(13, '老板大讲堂', '213', 50, 12),
(14, '老板社区', '213', 50, 12),
(15, '联系方式', '', 50, 0),
(16, '诚聘英才', '123', 50, 15),
(17, '常见问题', '123', 50, 15),
(18, '在线客服', '123', 50, 15);

-- --------------------------------------------------------

--
-- 表的结构 `shenma_post`
--

CREATE TABLE IF NOT EXISTS `shenma_post` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL COMMENT '职位名称',
  `cate_id` int(11) NOT NULL DEFAULT '0' COMMENT '父级ID',
  `content` text NOT NULL COMMENT '页面内容',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='职位表' AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `shenma_post`
--

INSERT INTO `shenma_post` (`id`, `name`, `cate_id`, `content`) VALUES
(1, '系统运维工程师（1人）', 2, '&lt;p&gt;\r\n	系统运维工程师(1人)&amp;nbsp;\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&amp;nbsp;岗位要求：\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&amp;nbsp;1、计算机相关专业本科以上学历，三年以上工作经验\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&amp;nbsp;2、熟悉linux和Windows系统&amp;nbsp;\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&amp;nbsp;2、熟悉linux和Windows系统&amp;nbsp;\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&amp;nbsp;2、熟悉linux和Windows系统\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	2、熟悉linux和Windows系统&amp;nbsp;\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&amp;nbsp;2、熟悉linux和Windows系统&amp;nbsp;\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&amp;nbsp;2、熟悉linux和Windows系统\r\n&lt;/p&gt;'),
(2, '新的职位招1人', 10, '&lt;p&gt;\r\n	测试信息&lt;span&gt;测试信息&lt;/span&gt;&lt;span&gt;测试信息&lt;/span&gt;&lt;span&gt;测试信息&lt;/span&gt;&lt;span&gt;测试信息&lt;/span&gt;\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&lt;span&gt;.&lt;span&gt;测试信息&lt;/span&gt;&lt;span&gt;测试信息&lt;/span&gt;&lt;span&gt;测试信息&lt;/span&gt;&lt;span&gt;测试信息&lt;/span&gt;&lt;span&gt;测试信息&lt;/span&gt;&lt;/span&gt;\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&lt;span&gt;&lt;span&gt;测试信息&lt;/span&gt;&lt;span&gt;测试信息&lt;/span&gt;&lt;span&gt;测试信息&lt;/span&gt;&lt;span&gt;测试信息&lt;/span&gt;&lt;span&gt;测试信息&lt;/span&gt;&lt;/span&gt;\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&lt;span&gt;&lt;span&gt;测试信息&lt;/span&gt;&lt;span&gt;测试信息&lt;/span&gt;&lt;span&gt;测试信息&lt;/span&gt;&lt;span&gt;测试信息&lt;/span&gt;&lt;span&gt;测试信息&lt;/span&gt;&lt;/span&gt;\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&lt;span&gt;&lt;span&gt;测试信息&lt;/span&gt;&lt;span&gt;测试信息&lt;/span&gt;&lt;span&gt;测试信息&lt;/span&gt;&lt;span&gt;测试信息&lt;/span&gt;&lt;span&gt;测试信息&lt;/span&gt;&lt;br /&gt;\r\n&lt;/span&gt;\r\n&lt;/p&gt;'),
(3, '新职位测试', 11, '新职位测试新职位测试新职位测试新职位测试');

-- --------------------------------------------------------

--
-- 表的结构 `shenma_product`
--

CREATE TABLE IF NOT EXISTS `shenma_product` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `url` varchar(256) NOT NULL DEFAULT '' COMMENT 'url',
  `name` varchar(50) NOT NULL DEFAULT '' COMMENT '链接名称',
  `thumbnail` varchar(256) NOT NULL COMMENT '缩略图',
  `sort` tinyint(4) NOT NULL DEFAULT '0' COMMENT '顺序',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='友情链接表' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `shenma_product`
--

INSERT INTO `shenma_product` (`id`, `url`, `name`, `thumbnail`, `sort`) VALUES
(1, '123123213213', '信用贷', '/Public/Upload/20170925/1506303899_464808054.png', 10);

-- --------------------------------------------------------

--
-- 表的结构 `shenma_qc`
--

CREATE TABLE IF NOT EXISTS `shenma_qc` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `qc` varchar(100) NOT NULL COMMENT '问题分类',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='核心团队' AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `shenma_qc`
--

INSERT INTO `shenma_qc` (`id`, `qc`) VALUES
(1, 'App操作'),
(2, '我要贷款'),
(3, '我要买车'),
(4, '如何更换手机号码');

-- --------------------------------------------------------

--
-- 表的结构 `shenma_question`
--

CREATE TABLE IF NOT EXISTS `shenma_question` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `question` varchar(100) NOT NULL COMMENT '问题',
  `qc_id` smallint(6) NOT NULL DEFAULT '0' COMMENT '问题分类id',
  `answer` text NOT NULL COMMENT '答案',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='问题表' AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `shenma_question`
--

INSERT INTO `shenma_question` (`id`, `question`, `qc_id`, `answer`) VALUES
(1, '换了新手机，如何绑定账户', 1, '在APP应用登录界面点击“更改手机”发起申请后，工作日时间段09:00-18:00当天处理，非工作日时间段顺延至工作日处理'),
(2, '我要贷款', 2, '123123123');

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
-- 表的结构 `shenma_team`
--

CREATE TABLE IF NOT EXISTS `shenma_team` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL COMMENT '标题',
  `post` char(10) NOT NULL DEFAULT '' COMMENT '职务',
  `thumbnail` varchar(300) NOT NULL COMMENT '缩略图地址',
  `content` text NOT NULL COMMENT '页面内容',
  `sort` int(11) NOT NULL DEFAULT '0' COMMENT '排序',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='核心团队' AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `shenma_team`
--

INSERT INTO `shenma_team` (`id`, `name`, `post`, `thumbnail`, `content`, `sort`) VALUES
(1, '陈小凤', '董事长', '/Public/Upload/20170925/1506315643_1088500336.jpg', '行业最年轻传奇女性领军带领新大洲电动车从四万销量提升到五十万', 1),
(2, '宁锐', 'CEO', '/Public/Upload/20170925/1506316045_1229404465.jpg', '不墨守成规的连续创业者因其经典营销案例登录《鲁豫有约》国内第一人', 2);

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `shenma_user`
--

INSERT INTO `shenma_user` (`user_id`, `username`, `nickname`, `password`, `email`, `salt`, `role_id`, `last_login_time`, `last_login_ip`, `add_time`, `login_times`, `status`) VALUES
(1, 'chunming', 'xiaoming1', 'b897633a5e0f7dc503be11173d669b3a', '328122186@qq.com', '1232', 1, 1506559326, 2130706433, 0, 53, 1),
(7, 'ishequan', 'ishequan', 'e08df8dbfee311bcb98fae8649d4e70f', '', '6sBKPA', 1, 0, 0, 1494381412, 0, 1),
(8, 'shenma', 'shenma', 'e0872f7bc5e019bf4ad8c24f15d72cc5', 'shenma@qq.com', 'E0iAvl', 1, 0, 0, 1505444079, 0, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
