-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2017 年 09 月 22 日 17:26
-- 服务器版本: 5.5.53
-- PHP 版本: 5.4.45

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
(1, '关于什马', '', '', '&lt;p style=&quot;color:#242424;font-size:16px;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	什马互联网金融信息服务（上海）有限公司，简称什马金融，成立于2015年1月， 总部位于国内金融中心上海。&lt;br /&gt;\r\n是一家专注在县乡镇渠道，服务于8亿农村市场的国内领先的互联网金融公司，公司成立伊始以农村交通工具领域为切入点，并依托上市公司等行业强势资源，业务快速覆盖全国。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;color:#242424;font-size:16px;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	公司两大核心产品什马分期和信用贷分别为农民和商家提供消费金融和供应链金融服务，旨在帮助更多的经销商做好生意、做大生意，使销售资金得以快速的回笼。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;color:#242424;font-size:16px;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	截止2017年7月，什马金融合作网点遍布全国31个省达35000多家，为近50%的商户和几十万农民家庭提供了金融服务解决方案。整体业务规模超50亿元。预计至2017年底，合作农村网点将超过5万家，业务涵盖交通工具、家电、3c、农资、农机等各版块，业务超100亿元。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;color:#242424;font-size:16px;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	公司以“让农民拥有和城里人一样的金融服务”为核心理念，旨在通过普惠金融方式，为广大农民提供优质高效低成本的互联网金融服务，目前不仅是农村交通工具领域国内最大的互联网公司，更是国内农村金融领域的领跑者之一。\r\n&lt;/p&gt;'),
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
  `video` varchar(255) NOT NULL COMMENT '视频',
  `content` text NOT NULL COMMENT '页面内容',
  `keywords` varchar(100) NOT NULL,
  `synopsis` text NOT NULL COMMENT '描述',
  `newstime` varchar(50) NOT NULL COMMENT '提交日期',
  `author` varchar(20) NOT NULL COMMENT '提交者',
  `is_recommend` tinyint(4) NOT NULL DEFAULT '0' COMMENT '是否推荐',
  `hits` int(11) NOT NULL DEFAULT '0' COMMENT '点击次数',
  `sort` int(11) NOT NULL DEFAULT '0' COMMENT '排序',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '审核 1为审核 2为未审核',
  PRIMARY KEY (`article_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='新闻内容表' AUTO_INCREMENT=34 ;

--
-- 转存表中的数据 `shenma_article`
--

INSERT INTO `shenma_article` (`article_id`, `title`, `web_title`, `cate_id`, `titleimg`, `video`, `content`, `keywords`, `synopsis`, `newstime`, `author`, `is_recommend`, `hits`, `sort`, `status`) VALUES
(4, '什马分期', '', 7, '', '', '', '', '', '2017-09-12', 'xiaoming1', 0, 0, 50, 1),
(5, '1分期', '', 7, '', '', '', '', '', '2017-09-12', 'xiaoming1', 0, 0, 50, 1),
(2, '新生贷', '', 7, '', '', '', '', '', '2017-08-08', 'xiaoming1', 1, 0, 0, 1),
(3, '信用贷', '', 7, '', '/Public/Upload/20170911/1505094249_1821566381.mp4', '', '', '', '2017-09-11', 'xiaoming1', 0, 0, 50, 1),
(6, '骑行意外保障', '', 7, '', '', '', '', '', '2017-09-12', 'xiaoming1', 0, 1, 50, 1),
(7, '车辆盗抢保障', '', 7, '', '', '', '', '', '2017-09-12', 'xiaoming1', 0, 0, 50, 1),
(8, '商户意外保障', '', 7, '', '', '', '', '', '2017-09-12', 'xiaoming1', 0, 0, 50, 1),
(9, '产品授信申请流程', '', 6, '', '', '', '', '', '2017-09-12', 'xiaoming1', 0, 2, 50, 1),
(10, '产品分期办理流程', '', 6, '', '', '', '', '', '2017-09-12', 'xiaoming1', 0, 0, 50, 1),
(11, '售后常见问题', '', 6, '', '', '', '', '', '2017-09-12', 'xiaoming1', 0, 0, 50, 1),
(12, '经销商准入', '', 6, '', '', '', '', '', '2017-09-12', 'xiaoming1', 0, 1, 50, 1),
(13, '消费金融行业发展的背景和趋势', '', 8, '', '', '', '', '', '2017-09-12', 'xiaoming1', 0, 0, 50, 1),
(14, '交通工具行业发展的背景和趋势', '', 8, '', '', '', '', '', '2017-09-12', 'xiaoming1', 0, 0, 50, 1),
(15, '风控的意识和实践', '', 9, '', '', '', '', '', '2017-09-12', 'xiaoming1', 0, 0, 50, 1),
(16, '网点催收的技巧', '', 9, '', '', '', '', '', '2017-09-12', 'xiaoming1', 0, 0, 50, 1),
(17, '合规意识', '', 9, '', '', '', '', '', '2017-09-12', 'xiaoming1', 0, 3, 50, 1),
(18, '门店的开发与管理', '', 10, '', '', '', '', '', '2017-09-12', 'xiaoming1', 0, 0, 50, 1),
(19, '渠道销售与管理', '', 10, '', '', '', '', '', '2017-09-12', 'xiaoming1', 0, 0, 50, 1),
(20, '门店分期的推荐技巧', '', 10, '', '', '', '', '', '2017-09-12', 'xiaoming1', 0, 0, 50, 1),
(21, '大客户维护与管理', '', 10, '', '', '', '', '', '2017-09-12', 'xiaoming1', 0, 0, 50, 1),
(22, '数据化管理', '', 11, '', '', '', '', '', '2017-09-12', 'xiaoming1', 0, 0, 50, 1),
(23, '项目管理', '', 11, '', '', '', '', '', '2017-09-12', 'xiaoming1', 0, 0, 50, 1),
(24, '这是一篇测试文章', '这是一篇测试文章', 12, '/Public/Upload/20170914/1505352807_1665875793.jpg', '', '这是一篇测试文章', '', '这是一篇测试文章', '2017-09-14', 'xiaoming1', 0, 0, 50, 1),
(25, '第2篇测试文章', '', 12, '', '', '第2篇测试文章', '', '第2篇测试文章', '2017-09-14', 'xiaoming1', 0, 0, 50, 1),
(26, '第3篇测试文章', '第2篇测试文章', 12, '', '', '第2篇测试文章', '', '第2篇测试文章', '2017-09-14', 'xiaoming1', 0, 0, 50, 1),
(27, '陈小凤', '', 14, '/Public/Upload/20170914/1505366183_255608817.jpg', '', '&lt;h5 style=&quot;font-size:15px;font-family:&amp;quot;font-weight:500;color:#9396A5;text-align:center;&quot;&gt;\r\n	行业最年轻传奇女性领军带领新大洲电动车从四万销量提升到五十万\r\n&lt;/h5&gt;', '', '董事长', '2017-09-14', 'xiaoming1', 0, 0, 50, 1),
(28, '宁 锐', '', 14, '/Public/Upload/20170914/1505366211_96927425.jpg', '', '&lt;h5 style=&quot;font-size:15px;font-family:&amp;quot;font-weight:500;color:#9396A5;text-align:center;&quot;&gt;\r\n	不墨守成规的连续创业者因其经典营销案例登录《鲁豫有约》国内第一人\r\n&lt;/h5&gt;', '', 'CEO', '2017-09-14', 'xiaoming1', 0, 0, 50, 1),
(29, '宁 锐', '', 14, '/Public/Upload/20170914/1505366253_75328688.jpg', '', '&lt;h5 style=&quot;font-size:15px;font-family:&amp;quot;font-weight:500;color:#9396A5;text-align:center;&quot;&gt;\r\n	不墨守成规的连续创业者因其经典营销案例登录《鲁豫有约》国内第一人\r\n&lt;/h5&gt;', '', 'CEO', '2017-09-14', 'xiaoming1', 0, 0, 50, 1),
(30, '宁 锐', '', 14, '/Public/Upload/20170914/1505366285_1108243450.jpg', '', '&lt;h5 style=&quot;font-size:15px;font-family:&amp;quot;font-weight:500;color:#9396A5;text-align:center;&quot;&gt;\r\n	不墨守成规的连续创业者因其经典营销案例登录《鲁豫有约》国内第一人\r\n&lt;/h5&gt;', '', 'CEO', '2017-09-14', 'xiaoming1', 0, 0, 50, 1),
(31, '宁 锐', '', 14, '/Public/Upload/20170914/1505366315_467811491.jpg', '', '&lt;h5 style=&quot;font-size:15px;font-family:&amp;quot;font-weight:500;color:#9396A5;text-align:center;&quot;&gt;\r\n	不墨守成规的连续创业者因其经典营销案例登录《鲁豫有约》国内第一人\r\n&lt;/h5&gt;', '', 'CEO', '2017-09-14', 'xiaoming1', 0, 0, 50, 1),
(32, '宁 锐', '', 14, '/Public/Upload/20170914/1505366342_1655340530.jpg', '', '&lt;h5 style=&quot;font-size:15px;font-family:&amp;quot;font-weight:500;color:#9396A5;text-align:center;&quot;&gt;\r\n	不墨守成规的连续创业者因其经典营销案例登录《鲁豫有约》国内第一人\r\n&lt;/h5&gt;', '', 'CEO', '2017-09-14', 'xiaoming1', 0, 0, 50, 1),
(33, '宁 锐', '', 14, '/Public/Upload/20170914/1505366360_1067971827.jpg', '', '&lt;h5&gt;\r\n	不墨守成规的连续创业者因其经典营销案例登录《鲁豫有约》国内第一人\r\n&lt;/h5&gt;', '', 'CEO', '2017-09-14', 'xiaoming1', 0, 0, 50, 1);

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=59 ;

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
(28, '合作品牌', 1, 'Brand/index', 0),
(29, '合作品牌添加', 1, 'Brand/add', 0),
(30, '合作品牌编辑', 1, 'Brand/edit', 0),
(31, '合作品牌删除', 1, 'Brand/delete', 0),
(45, '留言列表', 1, 'Message/index', 1),
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
(58, '图标编辑', 1, 'Icon/edit', 0);

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='友情链接表' AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `shenma_banner`
--

INSERT INTO `shenma_banner` (`id`, `url`, `name`, `thumbnail`, `sort`, `classify`) VALUES
(1, '123123123', '第一张', '/Public/Upload/20170921/1505956113_1392164059.jpg', 1, 1),
(2, '213213213', '第2张', '/Public/Upload/20170921/1505956130_606835435.jpg', 2, 1),
(3, '123123', '第3张', '/Public/Upload/20170921/1505956147_498624648.jpg', 3, 1),
(4, '123213', '第4张', '/Public/Upload/20170921/1505956164_704730493.jpg', 10, 1),
(5, '123213', '关于我们', '/Public/Upload/20170921/1505958524_1209540722.jpg', 1, 3),
(6, '12321313', '借款申请banner', '/Public/Upload/20170922/1506059128_950678200.jpg', 1, 2);

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- 转存表中的数据 `shenma_category`
--

INSERT INTO `shenma_category` (`cate_id`, `cate_name`, `parent_id`, `cate_title`, `cate_keywords`, `description`) VALUES
(1, '老板商学院', 0, '老板商学院', '老板商学院', '老板商学院'),
(2, '秩序白银', 1, '秩序白银', '秩序白银', '秩序白银'),
(3, '荣耀黄金', 1, '荣耀黄金', '荣耀黄金', '荣耀黄金'),
(4, '尊贵白金', 1, '尊贵白金', '尊贵白金', '尊贵白金'),
(5, '永恒钻石', 1, '永恒钻石', '永恒钻石', '永恒钻石'),
(6, '办单流程', 2, '办单流程', '办单流程', '40分钟\r\n你将会了解如何成为什马合伙人\r\n开始你的轻松赚钱之旅\r\n从一个青铜菜鸟直接晋级到白银段位'),
(7, '什马产品', 2, '什马产品', '什马产品', '边吃边看，一顿饭的时间\r\n让你了解所有什马金融产品'),
(8, '行业相关', 3, '行业相关', '行业相关', '一局王者的时间\r\n让您尽情领略最前沿的行业资讯'),
(9, '风控相关', 3, '风控相关', '风控相关', '已经是老板的你\r\n意识到了眼前的风险么？'),
(10, '销售技巧', 3, '销售技巧', '销售技巧', '如何提升销量？\r\n如果拓宽渠道？\r\n怎么和你的大客户打交道？'),
(11, '业务相关技能', 3, '业务相关技能', '业务相关技能', '员工不听话？\r\n事情总是延期？\r\n教你如何做一个合格的管理者'),
(12, '什马新闻', 0, '什马新闻', '什马新闻', '什马新闻'),
(13, '行业动态', 0, '行业动态', '行业动态', '行业动态'),
(14, '核心团队', 0, '核心团队', '核心团队', '核心团队');

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
-- 表的结构 `shenma_develop`
--

CREATE TABLE IF NOT EXISTS `shenma_develop` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `url` varchar(256) NOT NULL DEFAULT '' COMMENT 'url',
  `name` varchar(50) NOT NULL DEFAULT '' COMMENT '链接名称',
  `thumbnail` varchar(256) NOT NULL COMMENT '缩略图',
  `sort` tinyint(4) NOT NULL DEFAULT '0' COMMENT '顺序',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='发展历程表' AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `shenma_develop`
--

INSERT INTO `shenma_develop` (`id`, `url`, `name`, `thumbnail`, `sort`) VALUES
(1, '123123123', '第一张', '/Public/Upload/20170921/1505962887_1842293840.jpg', 1),
(2, '23123213', '第2张', '/Public/Upload/20170921/1505962915_1441838237.jpg', 2),
(3, '345345', '第3张', '/Public/Upload/20170921/1505962931_2090506420.jpg', 3);

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Banner图标' AUTO_INCREMENT=1 ;

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `shenma_user`
--

INSERT INTO `shenma_user` (`user_id`, `username`, `nickname`, `password`, `email`, `salt`, `role_id`, `last_login_time`, `last_login_ip`, `add_time`, `login_times`, `status`) VALUES
(1, 'chunming', 'xiaoming1', 'b897633a5e0f7dc503be11173d669b3a', '328122186@qq.com', '1232', 1, 1506046857, 2130706433, 0, 48, 1),
(7, 'ishequan', 'ishequan', 'e08df8dbfee311bcb98fae8649d4e70f', '', '6sBKPA', 1, 0, 0, 1494381412, 0, 1),
(8, 'shenma', 'shenma', 'e0872f7bc5e019bf4ad8c24f15d72cc5', 'shenma@qq.com', 'E0iAvl', 1, 0, 0, 1505444079, 0, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
