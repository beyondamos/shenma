-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2017 �?10 �?11 �?13:42
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
(1, '关于什马', '', '', '&lt;p style=&quot;color:#242424;font-size:17px;font-family:&amp;quot;background-color:#FFFFFF;&quot;&gt;\r\n	什马互联网金融信息服务（上海）有限公司，简称什马金融，成立于2015年1月，总部位于国内金融中心上海。是一家专注在县乡镇渠道，服务于8亿农村市场的国内领先的互联网金融公司&lt;br /&gt;\r\n公司成立伊始以农村交通工具领域为切入点，并依托上市公司等行业强势资源，业务快速覆盖全国。&lt;br /&gt;\r\n公司两大核心产品什马分期和信用贷分别为农民和商家提供消费金融和供应链金融服务，旨在帮助更多的经销商做好生意、做大生意，使销售资金得以快速的回笼。&lt;br /&gt;\r\n&lt;/p&gt;'),
(2, '关于什马', 'http://sm.daydaylearn.cn/About/index.html', '/Public/Upload/20170922/1506048343_1568812728.jpg', '&lt;p&gt;\r\n	什马互联网金融信息服务（上海）有限公司，简称什马金融，成立于2015年1月，总部位于国内金融中心上海。是一家专注在县乡镇渠道，服务于8亿农村市场的国内领先的互联网金融公司\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	公司成立伊始以农村交通工具领域为切入点，并依托上市公司等行业强势资源，业务快速覆盖全国。\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	公司两大核心产品什马分期和信用贷分别为农民和商家提供消费金融和供应链金融服务，旨在帮助更多的经销商做好生意、做大生意，使销售资金得以快速的回笼。\r\n&lt;/p&gt;');

-- --------------------------------------------------------

--
-- 表的结构 `shenma_add`
--

CREATE TABLE IF NOT EXISTS `shenma_add` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `url` varchar(256) NOT NULL DEFAULT '' COMMENT 'url',
  `name` varchar(50) NOT NULL DEFAULT '' COMMENT '链接名称',
  `thumbnail` varchar(256) NOT NULL COMMENT '缩略图',
  `sort` tinyint(4) NOT NULL DEFAULT '0' COMMENT '顺序',
  `classify` tinyint(4) NOT NULL DEFAULT '0' COMMENT '分类',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='附加表' AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `shenma_add`
--

INSERT INTO `shenma_add` (`id`, `url`, `name`, `thumbnail`, `sort`, `classify`) VALUES
(1, '123213', '23123', '/Public/Upload/20171009/1507508740_1007348842.png', 10, 1);

-- --------------------------------------------------------

--
-- 表的结构 `shenma_article`
--

CREATE TABLE IF NOT EXISTS `shenma_article` (
  `article_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL COMMENT '标题',
  `web_title` varchar(256) NOT NULL DEFAULT '' COMMENT '网页标题',
  `cate_id` int(11) NOT NULL DEFAULT '0' COMMENT '父级ID',
  `thumbnail` varchar(300) NOT NULL COMMENT '缩略图地址',
  `content` text NOT NULL COMMENT '页面内容',
  `keywords` varchar(100) NOT NULL,
  `synopsis` text NOT NULL COMMENT '描述',
  `newstime` varchar(50) NOT NULL COMMENT '提交日期',
  `author` varchar(20) NOT NULL COMMENT '提交者',
  `is_recommend` tinyint(4) NOT NULL DEFAULT '0' COMMENT '首页多条推荐',
  `is_top` tinyint(4) NOT NULL DEFAULT '0' COMMENT '首页top推荐',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0为未发布，1为已经发布',
  `click` int(11) NOT NULL DEFAULT '0' COMMENT '点击量',
  PRIMARY KEY (`article_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='新闻内容表' AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `shenma_article`
--

INSERT INTO `shenma_article` (`article_id`, `title`, `web_title`, `cate_id`, `thumbnail`, `content`, `keywords`, `synopsis`, `newstime`, `author`, `is_recommend`, `is_top`, `status`, `click`) VALUES
(1, '什马公益丨爱是世间最美的花 小暖炉首次义卖活动圆满落幕', '什马公益丨爱是世间最美的花 小暖炉首次义卖活动圆满落幕', 1, '/Public/Upload/20171008/1507446008_1479169924.jpg', '第一篇测试新闻', '', '第一篇测试新闻', '2017-04-06', '什马', 1, 0, 1, 0),
(2, '优秀经销商丨相信资本的力量 探寻宁夏虎义学借助什马金融成功创业之路', '优秀经销商丨相信资本的力量 探寻宁夏虎义学借助什马金融成功创业之路', 1, '/Public/Upload/20171008/1507446024_391988360.jpg', '&lt;p&gt;\r\n	&lt;span style=&quot;color:#3E3E3E;font-size:16px;font-family:微软雅黑;background-color:#FFFFFF;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;自&lt;/span&gt;&lt;span style=&quot;color:#3E3E3E;font-size:16px;font-family:微软雅黑;background-color:#FFFFFF;&quot;&gt;2014年电动车产业首次出现负增长以来，中国电动车行业就一直处于低迷与动荡之中，终端竞争激烈、市场容量骤减、经营成本增加等等因素，不断敲打着本就脆弱的行业信心，为此几年来整个行业一直在寻找突破与发展之法，然而，时至今日似乎收效胜微。&lt;/span&gt; \r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&lt;span style=&quot;color:#3E3E3E;font-size:16px;font-family:微软雅黑;background-color:#FFFFFF;&quot;&gt;&lt;span style=&quot;color:#3E3E3E;font-family:微软雅黑;font-size:16px;background-color:#FFFFFF;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;特别是身处一线的诸多经销商，他们对当下产业现状更是深有感触，库存的居高不下，运营成本的不断攀升，加之利润的一度压缩等等，使得本就捉襟见肘的运作资本，雪上加霜。&lt;/span&gt;&lt;br /&gt;\r\n&lt;/span&gt; \r\n&lt;/p&gt;', '', '自2014年电动车产业首次出现负增长以来，中国电动车行业就一直处于低迷与动荡之中，终端竞争激烈、市场容量骤减、经营成本增加等等因素，不断敲打着本就脆弱的行业信心，为此几年来整个行业一直在寻找突破与发展之法，然而，时至今日似乎收效胜微。', '2017-05-04', '什马', 0, 1, 1, 1003),
(3, '什马商户在线准入功能即将上线 动动手指轻松填资料', '什马商户在线准入功能即将上线 动动手指轻松填资料', 2, '/Public/Upload/20170925/1506320891_550013904.jpg', '从2015年公司成立以来，&lt;br /&gt;\r\n什马金融同许多B端经销商一起成长，&lt;br /&gt;\r\n信用袋、新生贷等供应链金融解决方案，&lt;br /&gt;\r\n为经销商朋友解决了不少生意上的困扰，&lt;br /&gt;\r\n进货不再难，&lt;br /&gt;\r\n资金运营好流转，&lt;br /&gt;\r\n生意做更大！&lt;br /&gt;\r\n如今，&lt;br /&gt;\r\n与什马合作的商家已经超过30,000家，&lt;br /&gt;\r\n老板说了 ，&lt;br /&gt;\r\n今年的小目标是超过60,000家！&lt;br /&gt;\r\n&lt;br /&gt;\r\n可是，&lt;br /&gt;\r\n以往想加入什马的经销商都需要手写合同，&lt;br /&gt;\r\n快递来什马总部，&lt;br /&gt;\r\n有时候不小心写错一个字来回修改，&lt;br /&gt;\r\n这样真的麻烦又误事儿。&lt;br /&gt;\r\n&lt;br /&gt;\r\n不过，&lt;br /&gt;\r\n现在您就不用再担心了啦！&lt;br /&gt;\r\n什马已经开通了商户在线准入机制&lt;br /&gt;\r\n新功能预计5月上旬就可使用咯，&lt;br /&gt;\r\n&lt;br /&gt;\r\n只要您动一动手指，&lt;br /&gt;\r\n在线填写资料，&lt;br /&gt;\r\n就可轻松成为什马合作经销商，&lt;br /&gt;\r\n且最快当天开户！&lt;br /&gt;\r\n在这个旺季&lt;br /&gt;\r\n让什马金融与您一起赚不停！&lt;br /&gt;', '', '什马商户在线准入功能即将上线 动动手指轻松填资料', '2017-05-12', '什马', 1, 0, 1, 47),
(4, '什马金融CEO宁锐：唤醒农村征信土壤', '什马金融CEO宁锐：唤醒农村征信土壤', 2, '/Public/Upload/20170925/1506320953_2128939445.jpg', '推荐语：&lt;br /&gt;\r\n&lt;br /&gt;\r\n第一，什马在电动车领域的品牌和渠道合作能力，保证公司能够在该品类构建获客和风控的壁垒。第二，乡镇渠道目前还是蓝海市场，什马的运营体系的积累能够帮助公司延展到其他乡镇人民的生活消费品类。第三，团队在电动车行业的积累，成立1年来稳健的成长证明了团队的学习能力和高效的执行力。&lt;br /&gt;\r\n&lt;br /&gt;\r\n——邓锋 北极光创投创始人&lt;br /&gt;\r\n&lt;br /&gt;\r\n金融和农村互联网是顺为一直重点关注的两个领域，什马金融独特的商业模式把这两个领域巧妙的结合在一起，团队有大局观，执行力强，勇于开拓，业务增长飞快，是一家难得的优秀公司，我们很荣幸能够成为什马金融的伙伴，并将长期持续支持公司的发展！&lt;br /&gt;\r\n&lt;br /&gt;\r\n——许达来 顺为资本合伙人&lt;br /&gt;\r\n&lt;br /&gt;\r\n口述：宁锐 什马金融CEO&lt;br /&gt;\r\n&lt;br /&gt;\r\n创业的思考是从旅行开始的。&lt;br /&gt;\r\n&lt;br /&gt;\r\n我答应了妻子一个旅行，但很久都没有实践。工作了几年，到了一个天花板，我计划把旅行付诸实践。做了一个计划书，想通过赞助商的资金来支持我们的环球旅行，但没人理解这种疯狂的行为。男人嘛说到做到，还是上路了。上路后陆陆续续接到了很多广告邀约，开心地玩着突然感受到打工与自由之间的距离，就萌生了创业的想法。&lt;br /&gt;\r\n&lt;br /&gt;\r\n07年第一次创业，我做了一家目录销售的电子商务公司。当时移动互联网还未普及，我们在街道旁发杂志，杂志上有商品目录和公司电话，想买就打电话。第一天运营就有八千块钱的营业额。这个公司经历了起来和下滑，做了两年多时间把它卖掉了。第一次创业只知道埋头做事，不知道抬头看路，这个反思是我最大的收获。当时没有为公司融资，自己还打包送货，而创始人更应该做战略资源方面的事情。&lt;br /&gt;\r\n&lt;br /&gt;\r\n有了第一次创业经验，我又开始了第二次创业————开办品牌战略公司，我们的定位是只做本土客户，不参与任何比稿。几年中，我们服务了各种各样的品牌。在服务电动车品类的时候，我看到了农村市场的巨大潜力。刚好遇到了新大洲电动车品牌负责人陈小凤，一拍即合，决定要挖掘农村消费市场的机遇，确定以金融加交通为入口。&lt;br /&gt;\r\n&lt;br /&gt;\r\n我们为公司取名什马金融。经常有人问，是什么金融，我说是什马金融，感觉是很好的传播方式，就这样定下了公司的名字。&lt;br /&gt;\r\n&lt;br /&gt;\r\n15年1月份什马金融创立，我们和一家消费金融公司合作市场灰度的测试是上海和西双版纳。通过一个半月的测试，得出结论：城市没有市场，城市的信贷已经太发达，不适合我们。瞄准农村市场后，我们组成了核心团队，陈小凤整合电动车行业资源，我来做CEO该干的事情，找人找钱找方向。我们还找来了在交通工具领域有十多年从业经验的闫欣负责市场销售。我们还有个合伙人闫总则负责整个中国大区的销售，这样我们的铁三角就形成了。&lt;br /&gt;\r\n&lt;br /&gt;\r\n坚定方向，开始一点点搭建。&lt;br /&gt;\r\n&lt;br /&gt;\r\n借力到独立&lt;br /&gt;\r\n&lt;br /&gt;\r\n在什马金融没有介入之前，农村也有自己的一套征信系统。以西双版纳为例，村民找老板买摩托车，是赊账的，写个欠条车就开走。让我们很惊讶的是赊了很多年，坏账几乎为零。老板每个月都会催钱，还能催到。为什么呢？其实是风控做得好，很多经销商做了八年十年，对村民知根知底。在西双版纳当地寨子里，经销商对村里每家人口多少、主要劳动力是谁、挣多少钱、老赖是谁一清二楚。这是在熟人经济下的特定生态。&lt;br /&gt;\r\n&lt;br /&gt;\r\n以当地经销商小老板为核心的熟人经济，正好与什马金融的渠道资源吻合，我们采用B2B2C的模式，让乡镇的经销商与什马金融合作，什马再联合金融机构帮助用户购买电动车、三轮车、摩托车等交通工具时提供分期付款服务。对于经销商来说，他们能推进高价值产品售卖。&lt;br /&gt;\r\n&lt;br /&gt;\r\n一开始我们在每个门店放个高拍仪，用于拍照采集征信，但是硬件有一个致命弱点，模式重，损耗率高，库存很烦人。我和团队反复探讨，决定放弃硬件，开发APP。APP目前供商户操作，用于拍照录入用户信息，把C端农民用户的征信信息传到什马后台。什马金融的核心风控是熟人经济的稳定性。我们会收集身份证、储蓄卡、户口本、惠农卡等各种信息来判定用户的稳定性。&lt;br /&gt;\r\n&lt;br /&gt;\r\n最初，第一批订单从提交资料到授信用了很久，用户觉得我们太慢了，经过优化达到了平均两小时可完成一个订单。用户还是觉得我们慢。我亲眼目睹一个商户为一个客户重填了十多次单子，到晚上还在挑灯写单子。这个场景让团队反思：我们这么烂的用户体验，可农民还很崇拜，可见他们的需求多么强烈，一个字，改。15年8、9月份，我们的征信系统，经过优化，实现了一个订单十五分钟就能完成。用户的满意度快速提高，将来还会更快。&lt;br /&gt;\r\n&lt;br /&gt;\r\n融资一拍即合&lt;br /&gt;\r\n&lt;br /&gt;\r\n天使轮我们当了自己的天使，A轮我们开始做融资。&lt;br /&gt;\r\n&lt;br /&gt;\r\n接触没几家，就和峰瑞资本一拍即和。第一次见了投资总监赵治远，听说赵治远在等人的时候无聊，从垃圾箱翻出了什马的BP，当即就打电话约见面，他见到了我以后就帮我约创始人李丰。第二天我和李丰一直聊到半夜十一、二点。李丰问的很细致，从小学问起，做了什么、遇到了什么人、对事情怎么看，我的前世今生都快问完了。一周时间不到，签约。我们成了峰瑞资本成立以来投的第一个项目。签约那天临时通知我，我只好穿个拖鞋和短裤就去了，一点准备都没有。&lt;br /&gt;\r\n&lt;br /&gt;\r\n之后顺为也要签，他们来看项目的时候吓我一跳，三十号人一起来，声势浩大。雷军问我和陈小凤的分工、遇到重大分歧的怎么决定等等，我就如实回答，陈小凤有眼光，我有纵横布局的能力，大家优势结合。A轮完成之后，B轮也很顺利。2016年年中拿了顺为资本、北极光、华创资本、峰瑞资本联合完成了什马的近亿元B轮融资。&lt;br /&gt;\r\n&lt;br /&gt;\r\n成熟与未来&lt;br /&gt;\r\n&lt;br /&gt;\r\n我们两个产品“什马分期”和“信用袋”已经成熟，业务覆盖全国31个省，合作网点达两万多家。&lt;br /&gt;\r\n&lt;br /&gt;\r\n我们上游合作机构有三类，银行、消费金融和互联网金融，比如说北京银行、京东金融、铜板街等，他们提供资金，我们是服务商。我的创业压力主要来自于团队文化融合，以前我们几十号人挤在一个办公室，氛围愉快、沟通顺畅，团队规模到一百人的时候，每个新员工我都先去找谈心，团队扩充到两百人就谈不过来了。我们开了一个栏目叫光头有约，因为我是光头嘛。我每周抽半个小时时间，约几个人来我办公室聊聊天，有利于团队稳定。&lt;br /&gt;\r\n&lt;br /&gt;\r\n我们希望做农民心中可信赖的综合金融服务平台，让农民可以享有跟城里人一样的金融服务我有一个百花齐放三年计划，第一年先增加品类，不止车，家电、3C我们都会去做，然后验证逻辑，到第三年百花绽放。2015年我们干成了一件事，让农民知道买车钱不用一次性付掉。2016年我们希望农民有自己还息的能力，2017年我们想让农民知道什马金融除了帮你买电动车还可以买其他东西。农村是片蓝海，这里面有太多的东西能做。&lt;br /&gt;\r\n&lt;br /&gt;\r\n（本报记者 郑淯心 采访整理）&lt;br /&gt;\r\n&lt;br /&gt;\r\n企业简介：&lt;br /&gt;\r\n&lt;br /&gt;\r\n什马互联网金融信息服务（上海）有限公司，简称什马金融，成立于2015年1月，总部位于国内金融中心上海。 是一家以线下渠道为承载点，以电动车、摩托车等新能源交通工具领域为切入点，专注服务于中国广大农村8亿农民，围绕农村构建的综合金融服务平台。&lt;br /&gt;\r\n&lt;br /&gt;\r\n目前两大核心产品什马分期和信用袋分别为农民和商家提供消费金融、供应链金融服务。&lt;br /&gt;', '', '目前两大核心产品什马分期和信用袋分别为农民和商家提供消费金融、供应链金融服务。', '2017-03-08', '什马', 1, 0, 1, 2),
(5, '什马金融与湖北消金首批试单成功 为今年首个持证金融机构合作', '什马金融与湖北消金首批试单成功 为今年首个持证金融机构合作', 1, '/Public/Upload/20170925/1506320996_1430288709.jpg', '&lt;span style=&quot;color:#3E3E3E;font-family:微软雅黑;background-color:#FFFFFF;font-size:14px;&quot;&gt;什马金融&lt;/span&gt;&lt;span style=&quot;color:#3E3E3E;font-family:微软雅黑;background-color:#FFFFFF;font-size:14px;&quot;&gt;与包括湖北消金在内的数十家资金方保持着密切合作，这些资金方&lt;/span&gt;&lt;span style=&quot;color:#3E3E3E;font-family:微软雅黑;background-color:#FFFFFF;font-size:14px;&quot;&gt;包括宁波通商行、安心保险、北京银行&lt;/span&gt;&lt;span style=&quot;color:#3E3E3E;font-family:微软雅黑;background-color:#FFFFFF;font-size:14px;&quot;&gt;等。在强大资金方的支持与合作下，什马金融已建立起缜密而独特的风控体系，通过整合乡镇熟人经济与互联网金融的征信系统模型，契合农村市场消费金融需求与场景，为农民、农村、农业提供更多、更好、更快捷的金融服务。&lt;/span&gt;', '', '什马金融与包括湖北消金在内的数十家资金方保持着密切合作，这些资金方包括宁波通商行、安心保险、北京银行等。在强大资金方的支持与合作下，什马金融已建立起缜密而独特的风控体系，通过整合乡镇熟人经济与互联网金融的征信系统模型，契合农村市场消费金融需求与场景，为农民、农村、农业提供更多、更好、更快捷的金融服务。', '2017-04-18', '什马', 1, 0, 1, 2001),
(6, '飞马贷上线啦！首单放款成功 找什马借钱更方便！', '飞马贷上线啦！首单放款成功 找什马借钱更方便！', 1, '/Public/Upload/20171008/1507447452_1674743259.jpg', '&lt;span style=&quot;color:#3E3E3E;font-family:微软雅黑;font-size:14px;background-color:#FFFFFF;&quot;&gt;飞马贷是什马金融推出的一款用于&lt;/span&gt;&lt;span style=&quot;color:#3E3E3E;font-family:微软雅黑;font-size:14px;background-color:#FFFFFF;&quot;&gt;B端经销商受托支付、现金借贷的金融产品。皆在更好的为什马金融的广大客户提供更全面的金融服务。飞马贷具有高授信，最高100万；且拥有放款快的特点，材料齐全，实时放款，最快1秒放款；还款时，只需要绑定银行卡自动扣款即可。&lt;/span&gt;&lt;br /&gt;', '', '4月18日，什马金融旗下全新产品飞马贷正式上线，并成功完成第一笔放款。', '2017-04-20', '什马', 1, 0, 1, 1004),
(7, '什马金融与安心保险正式签署战略合作协议', '什马金融与安心保险正式签署战略合作协议', 2, '/Public/Upload/20171008/1507446153_490176736.jpg', '近日，什马金融与安心保险正式签署战略合作协议。双方在合法合规的前提下，互惠互利的基础上，通过强强联手，资源互补，以统一的资源整合优势结成长期共同发展之联盟，为客户提供全产业、全方位、一体化综合金融服务。&lt;br /&gt;\r\n&lt;br /&gt;\r\n双方将构建全面战略合作关系，实现客户、资源共享，并在信用保证保险等方面进行合作，同时在风险控制、资产处置、个人征信、拓展资金及资产证券化等多领域进行资源共享。&lt;br /&gt;\r\n&lt;br /&gt;\r\n什马金融与包括安心保险在内的数家金融机构及优秀互金平台保持密切合作。在这些合作伙伴的支持下，什马金融已建立起缜密而独特的风控体系，通过整合乡镇熟人经济与互联网金融的征信系统模型，契合农村市场消费金融需求与场景，为农民、农村、农业提供更多、更好、更快捷的金融服务。&lt;br /&gt;', '', '什马金融与安心保险正式签署战略合作协议', '2017-05-05', '什马', 1, 0, 1, 2),
(8, '1分期丨触及消费者的分期神器 什马金融C端APP即将上线！', '1分期丨触及消费者的分期神器 什马金融C端APP即将上线！', 1, '/Public/Upload/20171008/1507445497_1896051612.jpg', '1分期是什马金融旗下的全新C端金融产品，主要用于C端消费者申请消费分期。1分期将正式于5月登录各大应用商店，为什马金融创造多品类多场景金融消费打下坚实基础。消费者可自行搜索并下载，届时也可登录什马金融官网扫描二维码进行下载。', '', '1分期是什马金融旗下的全新C端金融产品，主要用于C端消费者申请消费分期。1分期将正式于5月登录各大应用商店，为什马金融创造多品类多场景金融消费打下坚实基础。消费者可自行搜索并下载，届时也可登录什马金融官网扫描二维码进行下载。', '2017-04-27', '什马', 1, 0, 1, 5002),
(9, '423423423', '234234', 1, '', '&lt;img src=&quot;/Public/Upload/kindeditor/image/20171010/20171010055824_76868.png&quot; alt=&quot;&quot; /&gt;', '', '', '2017-10-10', 'xiaoming1', 0, 0, 0, 1);

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=97 ;

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
(24, '网站设置', 6, 'System/webConf', 1),
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
(84, '导航删除', 1, 'Nav/edit', 0),
(85, '消费者产品', 1, 'Productf/index', 0),
(86, '消费者产品添加', 1, 'Productf/add', 0),
(87, '消费者产品编辑', 1, 'Productf/edit', 0),
(88, '消费者产品删除', 1, 'Productf/delete', 0),
(89, 'Banner删除', 1, 'Banner/delete', 0),
(90, '图片上传', 1, 'Banner/up', 0),
(91, '附加信息', 1, 'Add/index', 0),
(92, '附加信息添加', 1, 'Add/add', 0),
(93, '附加信息删除', 1, 'Add/delete', 0),
(94, '附加信息编辑', 1, 'Add/edit', 0),
(95, 'SEO设置', 6, 'Seo/index', 1),
(96, 'SEO删除', 6, 'Seo/edit', 0);

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='banner表' AUTO_INCREMENT=24 ;

--
-- 转存表中的数据 `shenma_banner`
--

INSERT INTO `shenma_banner` (`id`, `url`, `name`, `thumbnail`, `sort`, `classify`) VALUES
(1, 'javascript:;', '第一张', '/Public/Upload/20170921/1505956113_1392164059.jpg', 1, 1),
(2, 'javascript:;', '第2张', '/Public/Upload/20170921/1505956130_606835435.jpg', 2, 1),
(3, 'javascript:;', '第3张', '/Public/Upload/20170921/1505956147_498624648.jpg', 3, 1),
(4, 'javascript:;', '第4张', '/Public/Upload/20170921/1505956164_704730493.jpg', 4, 1),
(5, '123213', '关于我们', '/Public/Upload/20170921/1505958524_1209540722.jpg', 1, 3),
(6, '12321313', '借款申请banner', '/Public/Upload/20170922/1506059128_950678200.jpg', 1, 2),
(7, '13213213', '商户进货贷', '/Public/Upload/20170928/1506566713_1129115494.jpg', 1, 4),
(8, '123123213', '核心产品banner', '/Public/Upload/20170928/1506566685_1425885725.png', 2, 4),
(9, '134123213', '新闻资讯', '/Public/Upload/20170925/1506318149_1022369721.jpg', 0, 5),
(10, '123213213', '老板商学院', '/Public/Upload/20170925/1506323394_1751433130.jpg', 0, 6),
(11, '123213123', '老板社区', '/Public/Upload/20170925/1506324014_1641799524.png', 0, 6),
(12, '', '联系我们', '/Public/Upload/20170925/1506324422_925569988.jpg', 0, 7),
(13, '11111', '第一张', '/Public/Upload/20170927/1506475425_775454612.jpg', 1, 8),
(14, '123123', '第2张', '/Public/Upload/20170927/1506475558_187202306.jpg', 2, 8),
(15, '123123213', '第3张', '/Public/Upload/20170927/1506475618_449450261.jpg', 3, 8),
(16, '', '消费者商品分期', '/Public/Upload/20170928/1506577927_739484615.png', 0, 9),
(17, '', '消费者现金分期', '/Public/Upload/20170928/1506578122_1767109376.png', 0, 9),
(18, '', '什马大讲堂', '/Public/Upload/20170928/1506579396_762841288.jpg', 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `shenma_brand`
--

CREATE TABLE IF NOT EXISTS `shenma_brand` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `url` varchar(256) NOT NULL DEFAULT '' COMMENT 'url',
  `name` varchar(50) NOT NULL DEFAULT '' COMMENT '链接名称',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '1为正常，0为禁用',
  `sort` smallint(6) NOT NULL DEFAULT '0' COMMENT '排序',
  `thumbnail` varchar(256) NOT NULL COMMENT '缩略图',
  `is_blank` tinyint(4) NOT NULL DEFAULT '0' COMMENT '1为新页面打开，0为当前页面打开',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='友情链接表' AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `shenma_brand`
--

INSERT INTO `shenma_brand` (`id`, `url`, `name`, `status`, `sort`, `thumbnail`, `is_blank`) VALUES
(1, 'http://shunwei.com/', '顺为资本', 1, 0, '/Public/Upload/20170915/1505439830_1471526976.png', 0),
(2, 'https://www.freesvc.com/', '峰瑞资本', 1, 0, '/Public/Upload/20170915/1505439306_1759848785.png', 0),
(3, 'http://www.nlightvc.com/', '北极光创投', 1, 0, '/Public/Upload/20170915/1505439354_1960900315.png', 0),
(4, 'http://www.chinagrowthcapital.com/', '华创资本', 1, 0, '/Public/Upload/20170930/1506781619_16857160.png', 0),
(5, 'http://www.chinaequity.net/', '信中利', 1, 0, '/Public/Upload/20170915/1505439420_1036568804.png', 0),
(6, 'http://honda-sundiro.com/', '新大洲本田', 1, 0, '/Public/Upload/20170915/1505439443_1689504697.png', 0),
(7, 'http://www.yadea.com.cn/', '雅迪电动车', 1, 0, '/Public/Upload/20170915/1505439467_1699157341.png', 0),
(8, 'http://www.haojue.com/', '豪爵', 1, 0, '/Public/Upload/20170915/1505439493_937432950.png', 0),
(9, 'http://jsjpcy.ddc.net.cn/', '金彭', 1, 0, '/Public/Upload/20170915/1505439521_533915130.png', 0),
(10, 'http://honda-sundiro.com/', '新大洲', 1, 0, '/Public/Upload/20170915/1505439543_239773102.png', 0);

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='友情链接表' AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `shenma_carousel`
--

INSERT INTO `shenma_carousel` (`id`, `name`, `thumbnail1`, `thumbnail2`, `thumbnail3`, `sort`) VALUES
(1, '第一张', '/Public/Upload/20171009/1507525919_1910356638.jpg', '/Public/Upload/20171009/1507526111_205058950.jpg', '/Public/Upload/20171009/1507526237_1408163132.jpg', 10),
(2, '第2套图', '/Public/Upload/20171009/1507525930_1826909051.jpg', '/Public/Upload/20171009/1507526154_1548047180.jpg', '/Public/Upload/20171009/1507526247_269861829.jpg', 10),
(3, '第3张', '/Public/Upload/20171009/1507525952_156367334.jpg', '/Public/Upload/20171009/1507526164_1230583324.jpg', '/Public/Upload/20171009/1507526257_363906174.jpg', 10),
(4, '第四套图', '/Public/Upload/20171009/1507525966_1628411632.jpg', '/Public/Upload/20171009/1507526174_705346322.jpg', '/Public/Upload/20171009/1507526267_919038897.jpg', 10);

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
(1, 'record_number', '沪ICP备15005382号-2'),
(2, 'site_name', '什马金融-互联网金融_农村渠道金融_乡镇通路金融 | 什马分期APP'),
(3, 'site_title', '什马金融-互联网金融_农村渠道金融_乡镇通路金融 | 什马分期APP'),
(4, 'site_desc', '什马主要为农村金融、通路金融、渠道金融等提供什马分期、信用袋、新生贷等产品，为乡镇经营贷款、进货贷款、开店贷款、低息贷款提供了供应链式金融服务。官方热线：400-088-6177'),
(5, 'site_keywords', '什马,什马金融,什马分期,什马互联网金融,什马农村金融,什马供应链金融,什马乡镇金融,什马通路金融,什马信用贷,农村金融,通路金融,渠道金融,经营贷款,进货贷款,开店贷款,低息贷款,农村供应链金融,信用袋,新生贷'),
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=37 ;

--
-- 转存表中的数据 `shenma_department`
--

INSERT INTO `shenma_department` (`id`, `name`, `parent_id`) VALUES
(1, '上海', 0),
(2, '信审风控中心', 1),
(3, '四川', 0),
(4, '河北', 0),
(5, '山西', 0),
(6, '内蒙古', 0),
(7, '北京', 0),
(8, '安全中心', 1),
(9, '产品研发中心', 1),
(10, '信息技术中心', 1),
(11, '新部门', 3),
(12, '黑龙江', 0),
(13, '吉林', 0),
(14, '辽宁', 0),
(15, '陕西', 0),
(16, '甘肃', 0),
(17, '青海', 0),
(18, '新疆', 0),
(19, '宁夏', 0),
(20, '山东', 0),
(21, '河南', 0),
(22, '江苏', 0),
(23, '浙江', 0),
(24, '安徽', 0),
(25, '江西', 0),
(26, '福建', 0),
(27, '湖北', 0),
(28, '湖南', 0),
(29, '广东', 0),
(30, '广西', 0),
(31, '海南', 0),
(32, '云南', 0),
(33, '贵州', 0),
(34, '西藏', 0),
(35, '天津', 0),
(36, '重庆', 0);

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='发展历程表' AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `shenma_develop`
--

INSERT INTO `shenma_develop` (`id`, `title`, `thumbnail`, `newstime`) VALUES
(1, '什马金融成立', '/Public/Upload/20170928/1506561754_1043244688.jpg', '2015-01-01'),
(2, '免息宝正式上线', '/Public/Upload/20170928/1506561760_1128571938.jpg', '2015-02-28'),
(3, '免息宝APP上线', '/Public/Upload/20170928/1506561766_1139172261.jpg', '2015-07-01'),
(5, '信用袋APP上线', '/Public/Upload/20170930/1506768900_1752008456.jpg', '2015-08-01'),
(6, '完成A轮融资', '/Public/Upload/20170930/1506769863_950194820.jpg', '2015-11-30'),
(7, '什马分期上线', '/Public/Upload/20171008/1507419286_1497757411.jpg', '2016-03-01'),
(8, '完成B轮融资', '/Public/Upload/20171008/1507419337_1381022038.jpg', '2016-08-01'),
(9, '完成B+轮融资', '/Public/Upload/20171008/1507419368_1290115150.jpg', '2017-01-01');

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
(1, 'http://sm.daydaylearn.cn/Loans/index.html', '商家贷款', 'Business loans', '/Public/Upload/20170925/1506300950_520147208.png'),
(2, 'http://sm.daydaylearn.cn/Loans/index2.html', '消费者贷款', 'Consumer loans', '/Public/Upload/20170925/1506301262_1864146358.png');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='留言表' AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `shenma_message`
--

INSERT INTO `shenma_message` (`id`, `name`, `phone`, `email`, `info`, `createtime`) VALUES
(4, '测试', '13900000000', '000@abc.com', 'ceshi', 1506781156);

-- --------------------------------------------------------

--
-- 表的结构 `shenma_nav`
--

CREATE TABLE IF NOT EXISTS `shenma_nav` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT '导航id',
  `name` varchar(20) NOT NULL COMMENT '导航名称',
  `url` varchar(256) NOT NULL COMMENT '导航url',
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
(3, '商户借款', 'http://sm.daydaylearn.cn/Loans/index.html', 50, 1),
(4, '消费者借款', 'http://sm.daydaylearn.cn/Loans/index2.html', 50, 1),
(5, '公司介绍', 'http://sm.daydaylearn.cn/About/index.html#gysm', 50, 2),
(6, '发展历程', 'http://sm.daydaylearn.cn/About/index.html#fzlc', 50, 2),
(7, '核心团队', 'http://sm.daydaylearn.cn/About/index.html#hxtd', 50, 2),
(8, '企业文化', 'http://sm.daydaylearn.cn/About/index.html#qywh', 50, 2),
(9, '新闻资讯', '123', 50, 0),
(10, '公司新闻', 'http://sm.daydaylearn.cn/Article/index/cate_id/1.html', 50, 9),
(11, '行业资讯', 'http://sm.daydaylearn.cn/Article/index/cate_id/2.html', 50, 9),
(12, '老板商学院', '123', 50, 0),
(13, '老板大讲堂', 'http://sm.daydaylearn.cn/Edu/index.html#djt', 50, 12),
(14, '老板社区', 'http://sm.daydaylearn.cn/Edu/index.html#lbsq', 50, 12),
(15, '联系方式', '', 50, 0),
(16, '诚聘英才', 'http://sm.daydaylearn.cn/Contact/index.html#cpyc', 50, 15),
(17, '常见问题', 'http://sm.daydaylearn.cn/Contact/index.html#cjwt', 50, 15),
(18, '在线客服', 'http://sm.daydaylearn.cn/Contact/index.html#zxkf', 50, 15);

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='友情链接表' AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `shenma_product`
--

INSERT INTO `shenma_product` (`id`, `url`, `name`, `thumbnail`, `sort`) VALUES
(1, '123123213213', '信用贷', '/Public/Upload/20170928/1506566755_723773006.png', 10),
(2, '213123', '新生贷', '/Public/Upload/20170928/1506566774_1235792859.png', 10);

-- --------------------------------------------------------

--
-- 表的结构 `shenma_productf`
--

CREATE TABLE IF NOT EXISTS `shenma_productf` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `name` varchar(50) NOT NULL DEFAULT '' COMMENT '链接名称',
  `thumbnail` varchar(256) NOT NULL COMMENT '缩略图',
  `sort` tinyint(4) NOT NULL DEFAULT '0' COMMENT '顺序',
  `classify` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='产品表2' AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `shenma_productf`
--

INSERT INTO `shenma_productf` (`id`, `name`, `thumbnail`, `sort`, `classify`) VALUES
(1, '第一张', '/Public/Upload/20170928/1506578332_720019109.png', 1, 16),
(2, '第二张', '/Public/Upload/20170928/1506578344_43623345.png', 2, 16),
(3, '第一张', '/Public/Upload/20170928/1506578776_1006944826.png', 1, 17),
(4, '第二张', '/Public/Upload/20170928/1506578791_1624058579.png', 2, 17),
(5, '第三张', '/Public/Upload/20170928/1506578804_323668314.png', 3, 17);

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
(4, '我要还款');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='问题表' AUTO_INCREMENT=16 ;

--
-- 转存表中的数据 `shenma_question`
--

INSERT INTO `shenma_question` (`id`, `question`, `qc_id`, `answer`) VALUES
(1, '换了新手机，如何绑定账户', 1, '在APP应用登录界面点击“更改手机”发起申请后，工作日时间段09:00-18:00当天处理，非工作日时间段顺延至工作日处理'),
(12, '为什么办理业务会被拒绝？', 4, '什马金融有严格的风控体系，审核规范严格，这既是对消费者负责，也是公司业务贯彻的制度'),
(3, '如何更换手机号码？', 1, '在APP应用点击“我”——点击“修改绑定手机号”——点击后上传身份证正反面照片，审核通过后重新登录即可'),
(4, '忘记密码如何操作？', 1, '第一步：点击忘记密码\r\n第二步：输入商家使用手机号码\r\n第三步：检验通过后，输入手机短信验证码\r\n第四步：输入两次新密码，即可重置密码成功\r\n第五步：使用新密码重新登录，完成密码重置操作'),
(5, '贷款额度如何确定？', 2, '我们会根据商家经营情况，征信信息，综合情况给出相应的贷款额度'),
(6, '如何申请APP开户合作？', 2, '提供相关资质材料，审核通过后，即可办理'),
(7, '如何还款？', 2, '我们会通过您在办理业务时授权的银行卡进行扣款，如客户遇到银行卡或者其他客观原因导致无法扣款的， 可致电客服热线400-088-6177进行咨询'),
(8, '可以在哪里办理什马分期？', 3, '什马金融现在覆盖了全国31个省的2万多家网点 您可以通过400-088-6177客服电话，查询离您最近的网点'),
(9, '办理什马分期需要具备哪些条件？', 3, '持有中国大陆居民身份证\r\n18-55周岁\r\n有合法收入来源'),
(10, '申请的时候需要哪些资料？', 3, '二代居民身份证\r\n证明材料（如惠农卡、社保卡、信用卡、学生证等）\r\n银行卡'),
(11, '办理审核需要多久？', 3, '平均审核时间20分钟，如遇特殊情况比如联系人不配合接听电话等，审核时间会相应延长'),
(13, '如何查询还款金额？', 4, '您可以通过400-088-6177客服电话，咨询客服人员查询'),
(14, '如何提前还款？', 4, '需要您正常还款3个月后才可以提前还款，您可以通过400-088-6177客服电话申请提前还款'),
(15, '什马分期每月几号还款？', 4, '每月还款日是您申请办理业务生效当天。例如：5月1号申请办理通过，每月的1号为您的还款日');

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
-- 表的结构 `shenma_seo`
--

CREATE TABLE IF NOT EXISTS `shenma_seo` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL COMMENT '名称',
  `title` varchar(256) NOT NULL DEFAULT '' COMMENT '网页标题',
  `keywords` varchar(100) NOT NULL,
  `synopsis` text NOT NULL COMMENT '描述',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='SEO表' AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `shenma_seo`
--

INSERT INTO `shenma_seo` (`id`, `name`, `title`, `keywords`, `synopsis`) VALUES
(1, '商家借款', '商家借款', '商家借款', '商家借款1'),
(2, '消费者借款', '消费者借款', '消费者借款', '消费者借款'),
(3, '关于什马', '关于什马', '关于什马', '关于什马'),
(4, '新闻资讯', '新闻资讯', '新闻资讯1', '新闻资讯'),
(5, '老板商学院', '老板商学院', '老板商学院', '老板商学院'),
(6, '联系我们', '联系我们', '联系我们', '联系我们');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='核心团队' AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `shenma_team`
--

INSERT INTO `shenma_team` (`id`, `name`, `post`, `thumbnail`, `content`, `sort`) VALUES
(1, '陈小凤', '董事长', '/Public/Upload/20170925/1506315643_1088500336.jpg', '行业最年轻传奇女性领军带领新大洲电动车从四万销量提升到五十万', 1),
(2, '宁锐', 'CEO', '/Public/Upload/20170925/1506316045_1229404465.jpg', '不墨守成规的连续创业者因其经典营销案例登录《鲁豫有约》国内第一人', 2),
(3, '闫 欣', 'CSO', '/Public/Upload/20170930/1506772750_2077325945.jpg', '行业营销风云人物10年以上交通工具行业从业经验', 3),
(4, '李雁飞', 'CPO', '/Public/Upload/20170930/1506772855_1364925401.jpg', '10年以上大型知名互联网公司经验产品人', 4),
(5, '苗向彬', 'CTO', '/Public/Upload/20170930/1506772892_1792646680.jpg', '资深软件技术战略专家及工程团队管理者', 5),
(6, '姜彤胃', 'CRO', '/Public/Upload/20170930/1506772918_1120184938.jpg', '10年以上专注银行+互联网金融风险管理', 6),
(7, '李 璐', '资金运营', '/Public/Upload/20170930/1506772962_1728387659.jpg', '上海厚本金融运营管理部总监国际蛋白质科学中心上海/中心主管', 7);

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
(1, 'chunming', 'xiaoming1', 'b897633a5e0f7dc503be11173d669b3a', '328122186@qq.com', '1232', 1, 1507725477, 2130706433, 0, 68, 1),
(8, 'shenma', 'shenma', 'e0872f7bc5e019bf4ad8c24f15d72cc5', 'shenma@qq.com', 'E0iAvl', 1, 1507446410, 1883314357, 1505444079, 4, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
