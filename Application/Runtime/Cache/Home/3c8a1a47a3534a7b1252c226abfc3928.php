<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="renderer" content="webkit">
<title><?php echo ($article["title"]); ?></title>
<meta name="keywords" content="<?php echo ($article["keywords"]); ?>">
<meta name="description" content="<?php echo ($article["synopsis"]); ?>">
<link rel="stylesheet" href="/Public/Home/css/reset.css" rel="stylesheet">
<link rel="stylesheet" href="/Public/Home/bootstrap3/css/bootstrap.min.css">
<link rel="stylesheet" href="/Public/Home/css/yinxie.css" rel="stylesheet">
<link rel="stylesheet" href="/Public/Home/css/vic.css" rel="stylesheet">

<link rel="stylesheet" href="/Public/Home/css/animate.css">
<link href="/Public/Home/img/favicon.ico" type="image/x-icon" rel="shortcut icon">
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="/Public/static/bootstrap/js/html5shiv.js"></script>
<![endif]-->
<!--[if lte IE 9]>
<script type="text/javascript" src="/Public/static/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="/Public/static/js/ie9hack.js"></script>
<![endif]-->
<!--[if gte IE 9]><!-->
<script type="text/javascript" src="/Public/Home/jquery-2.0.3.min.js"></script>
<script type="text/javascript" src="/Public/Home/bootstrap3/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/Public/Home/jquery.fullPage.js"></script>
<script type="text/javascript" src="/Public/Home/owl-carousel/owl.carousel.js" async="async" defer="defer"></script>
<script type="text/javascript" src="/Public/Home/js/jquery.timelinr-0.9.53.js" async="async" defer="defer"></script>




<link rel="stylesheet" type="text/css" href="/Public/Home/css/index20170828.css" />
<link rel="stylesheet" type="text/css" href="/Public/Home/css/swiper.css" />
<script type="text/javascript" src="/Public/Home/js/jquery.pj.js" async="async" defer="defer"></script>
<script type="text/javascript" src="/Public/Home/js/jquery.mousewheel.min.js" async="async" defer="defer"></script>
<script type="text/javascript" src="/Public/Home/js/swiper.min.js" async="async" defer="defer"></script>
<script type="text/javascript" src="/Public/Home/js/slick/slick.min.js" async="async" defer="defer"></script>




<script type="text/javascript">
$.fn.extend({
    animateCss: function(animationName) {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        this.addClass('animated ' + animationName);
    }
});
         document.onreadystatechange = completeLoading;
        function completeLoading() {
            if (document.readyState == "complete") {
                $('.footer,.navbar,#main-container').fadeIn();
                $('#load').fadeOut();
            }
    }
$(function() {
    $('#load').height($(window).height());
    var winW = $(window).width();
    if (winW > 767) {
        $('.mobile_version').hide();
    } else {
        $('.pc_version').hide();
    }
    // $('[data-toggle="popover"]').popover();
        
    //tab show reset

    $('.scrollTopLi').click(function() {
		$.fn.fullpage.moveTo('banner',1);
	})
})


</script>

</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top mobile_nav">
	 
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo U('Home/index');?>"><img src="/Public/Home/img/header_logo.jpg" alt=""></a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
		<li><a href="<?php echo U('Home/index');?>">首页</a></li>
		<li <?php if($controller_name == 'Loans'): ?>class="active"<?php endif; ?>><a href="<?php echo U('Loans/index');?>" class="fw200">借款申请</a></li>
		<!-- <li><a href="javascript:;" class="fw200">借款申请</a></li> -->
		<li <?php if($controller_name == 'About'): ?>class="active"<?php endif; ?>><a href="<?php echo U('About/index');?>" class="fw200">关于什马</a></li>
		<li  <?php if($controller_name == 'Article'): ?>class="active"<?php endif; ?>><a href="<?php echo U('Article/index');?>" class="fw200">新闻资讯</a></li>
		<li <?php if($controller_name == 'Edu'): ?>class="active"<?php endif; ?>><a href="<?php echo U('Edu/index');?>" class="fw200">老板商学院</a></li>
		<li><a href="<?php echo U('About/index#xnl');?>" class="fw200">小暖炉公益</a></li>
		<li <?php if($controller_name == 'Contact'): ?>class="active"<?php endif; ?>><a href="<?php echo U('Contact/index');?>" class="fw200">联系我们</a></li>
      </ul>
    </div>
  </div>
</nav>

		<div class="bannertop">
			<img alt="" src="/Public/Home/img/bannerlist.jpg" />
		</div>
			<!-- <img alt="" src="/Public/Home/img/bannerlist.jpg" style="width:100%;min-width:1200px;" /> -->
			
			<div class="cont">
				<div class="cont-detail">
					<div class="cont-detail-nav">
						<a href="/">首页&gt;</a>
						<a href="<?php echo U('Article/index');?>">新闻资讯</a>&nbsp;&ndash;&nbsp;<?php if($article["cate_id"] == 1 ): ?>什马新闻<?php else: ?>行业动态<?php endif; echo ($category["cate_name"]); ?>
					</div>
					
					<h1><?php echo ($article["title"]); ?>
						<i><span><?php echo ($article["newstime"]); ?></span><span><?php echo ($article["author"]); ?></span><span><?php if($article["cate_id"] == 1 ): ?>什马新闻<?php else: ?>行业动态<?php endif; ?></span></i>
					</h1>
					
					<?php echo html_entity_decode($article['content']);?>

					<div class="cont-detail-prenext">
						<?php if($last_article): ?><a href="<?php echo U('Article/detail', array('article_id' => $last_article['article_id']));?>">上一篇：<?php echo ($last_article["title"]); ?></a><?php endif; ?>
						<?php if($next_article): ?><a href="<?php echo U('Article/detail', array('article_id' => $next_article['article_id']));?>">下一篇：<?php echo ($next_article["title"]); ?></a><?php endif; ?>
					</div>
					
					<h6><a  onclick="javascript:history.back(-1);">返回&gt;&gt;</a><h6>
					
				</div>
			</div>

	
		
		<div class="fp-auto-height">
            <footer class="home-footer home-footerb" >
                <div class="container">
					<!-- <img class="footer-imgtemp" src="/Public/Home/img/foot.jpg" alt=""> -->
					<div class="row footer-wrap">
                        <div class="col-xs-6 col-sm-6">
							<h1><img src="/Public/Home/img/footlogob.png" alt=""></h1>
							<h3>什马分期 就是低息</h3>
							<h2>服务热线：400-088-6177</h2>
							<h6>©什马互联网金融信息服务(上海)有限公司 | 沪ICP备15005382号-2</h6>
                        </div>
						
						<div class="col-xs-6 col-sm-6">
							
							<div class="col-xs-4 col-sm-4">
                                <div class="two-code pull-right">
                                    <img class="img-responsive" src="/Public/Home/img/qr01.jpg" alt="">
                                    <p class="text-center fw200">商户APP下载</p>
                                </div>
                            </div>
                            <div class="col-xs-4 col-sm-4">
                                <div class="two-code pull-right">
                                    <img class="img-responsive" src="/Public/Home/img/qr02.jpg" alt="">
                                    <p class="text-center fw200">什马个人号</p>
                                </div>
                            </div>
							<div class="col-xs-4 col-sm-4">
                                <div class="two-code pull-right">
                                    <img class="img-responsive" src="/Public/Home/img/qr03.jpg" alt="">
                                    <p class="text-center fw200">什马商户号</p>
                                </div>
                            </div>
							
                        </div>
						
                    </div>
                </div>
            </footer>
        </div>
		
</body>
</html>