<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="Zh-cn">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title><?php echo ($seo["title"]); ?></title>
<meta name="keywords" content="<?php echo ($seo["keywords"]); ?>">
<meta name="description" content="<?php echo ($seo["synopsis"]); ?>">
    <link href="/Public/Mobile/css/basem.css" rel="stylesheet" type="text/css">
    <link href="/Public/Mobile/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/Public/Mobile/css/swiper.css">
    <script src="/Public/Mobile/js/jquery-2.1.1.min.js"></script>
    <script src="/Public/Mobile/js/bootstrap.min.js"></script>
    <script src="/Public/Mobile/js/swiper.min.js"></script>
        <!--引用百度地图API-->

    <?php if($controller_name == 'Contact'): ?><style type="text/css">
        html,body{margin:0;padding:0;}
        .iw_poi_title {color:#CC5522;font-size:14px;font-weight:bold;overflow:hidden;padding-right:13px;white-space:nowrap}
        .iw_poi_content {font:12px arial,sans-serif;overflow:visible;padding-top:4px;white-space:-moz-pre-wrap;word-wrap:break-word}
    </style>
    <script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script><?php endif; ?>

</head>
<body <?php if($controller_name == 'Video' ): ?>style="background-color:#e5e5e5"<?php endif; ?> >
<div id="nav-left" class="nav-left">
    <div class="nav-left-main">
        <a href="<?php echo U('Home/index');?>">首页</a>
        <a href="<?php echo U('Loans/index');?>">业务申请</a>
        <a href="<?php echo U('About/index');?>">关于什马</a>
        <a href="<?php echo U('Article/index');?>">新闻资讯</a>
        <a href="<?php echo U('Edu/index');?>">老板商学院</a>
        <a href="<?php echo U('About/index#xnl');?>">小暖炉</a>
        <a href="<?php echo U('Contact/index');?>">联系我们</a>
    </div>
    <div class="nav-left-plus"><a href="#" class="xnav-left-exit"></a></div>
</div>

<div class="head">
    <span><img src="/Public/Mobile/images/logom.png" alt="" /></span>
    <a href="#nav-left" class="head-icon-r"><img src="/Public/Mobile/images/menu.png" /></a>
</div>


<div class="headbt"></div>

	<!--头部图片-->
	<div class="boxcont">
		<div class="toplimt"><img src="/Public/Mobile/images/bktop0<?php if($videoc['parent_id'] ==1): ?>1<?php else: ?>2<?php endif; ?>.jpg" alt="" /><h1><?php echo ($videoc["name"]); ?></h1></div>
	</div>
<div class="vlist">
	<?php if(is_array($videos)): $i = 0; $__LIST__ = $videos;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Video/vplay', array('id' => $vo['id']));?>"><div class="vlist-item vlist-item-<?php if($videoc['parent_id'] ==1): ?>yellow<?php else: ?>blue<?php endif; ?>">
			<h1><?php echo ($vo["title"]); ?></h1>
			<img src="/Public/Mobile/images/iconv.png" alt="" />
		</div>
		</a><?php endforeach; endif; else: echo "" ;endif; ?>

</div>
		
<div class="boxfootup"></div>
<!--页脚-->
<div class="boxfoot">
    <h3>什马分期 就是低息</h3>
    <h2>服务热线：400-088-6177</h2>
    <div class="boxfootqra">
        <div class="boxfootqr">
            <img src="/Public/Mobile/images/qr01.jpg" alt="">
            <p>商户APP下载</p>
        </div>
        <div class="boxfootqr">
            <img src="/Public/Mobile/images/qr02.jpg" alt="">
            <p>什马个人号</p>
        </div>
        <div class="boxfootqr">
            <img src="/Public/Mobile/images/qr03.jpg" alt="">
            <p>什马商户号</p>
        </div>
    </div>
    <div class="boxfooticp"><p>什马互联网金融信息服务(上海)有限公司 | 沪ICP备15005382号-2</p></div>
</div>

</body>

</html>