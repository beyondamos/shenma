<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="renderer" content="webkit">
<title>什马金融</title>
<link rel="stylesheet" href="/Public/Home/css/reset.css" rel="stylesheet">
<link rel="stylesheet" href="/Public/Home/bootstrap3/css/bootstrap.min.css">
<link rel="stylesheet" href="/Public/Home/css/yinxie.css" rel="stylesheet">
<link rel="stylesheet" href="/Public/Home/css/vic.css" rel="stylesheet">
<link rel="stylesheet" href="/Public/Home/css/layout.css" rel="stylesheet">

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

<link rel="stylesheet" type="text/css" href="/Public/Home/css/index20170828.css" />
<link rel="stylesheet" type="text/css" href="/Public/Home/css/swiper.css" />
<script type="text/javascript" src="/Public/Home/js/jquery.pj.js" async="async" defer="defer"></script>
<script type="text/javascript" src="/Public/Home/js/jquery.mousewheel.min.js" async="async" defer="defer"></script>
<script type="text/javascript" src="/Public/Home/js/swiper.min.js" async="async" defer="defer"></script>
<script type="text/javascript" src="/Public/Home/js/slick/slick.min.js" async="async" defer="defer"></script>
<script type="text/javascript" src="/Public/Home/js/jquery-ui.min.js"></script>	

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
			<img alt="" src="<?php echo ($banner["thumbnail"]); ?>" />
		</div>
			
			<div class="cont">
			
                <div class="about-shenma" id="gysm">
                    <h2><?php echo ($info["title"]); ?></h2>
                    <?php echo html_entity_decode($info['content']);?>
                </div>
                
				
				
				<div class="history-shenma" id="fzlc">
					<h2>发展历程</h2>
					<div class="col-md-12 about">
						<div class="about-body">
							<div class="about-content process-content">
								<div class="process-timeline draggable ui-widget-content">
									<div id="draggable">
										<div class="process-body">

                                        <?php if(is_array($develops)): $i = 0; $__LIST__ = $develops;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="process-row">
												<div class="process-noyear"><?php echo date('Y.m', strtotime($vo['newstime'])); ?></div><i></i>
												<div class="process-content"><p><?php echo implode('<br/>', explode(';', $vo['title'])); ?></p></div>
											</div><?php endforeach; endif; else: echo "" ;endif; ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			
				
				<div class="core-shenma" id="hxtd">
                    <h2>核心团队</h2>
                    <?php if(is_array($teams)): $i = 0; $__LIST__ = $teams;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="corep">
                        <img src="<?php echo ($vo["thumbnail"]); ?>" alt="" />
                        <h3><?php echo ($vo["name"]); ?></h3>
                        <span><?php echo ($vo["post"]); ?></span>
                        <h5><?php echo ($vo["content"]); ?></h5>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
				

				
			</div>
			
			
			<div class="culture-shenma" id="qywh">
				<img src="/Public/Home/img/imgabtbk.jpg" alt="" />
				<div class="culture-shenma-md">
					<img src="/Public/Home/img/cultureMD.png" alt="" />
				</div>
			</div>
			
			
			
			<div class="cont" id="xnl">
				<div class="xnla-shenma">
					<h1><img src="<?php echo ($nuanlu["thumbnail"]); ?>" alt="" /></h1>
					<h2><?php echo ($nuanlu["title"]); ?></h2>
					<?php echo html_entity_decode($nuanlu['content']);?>
				</div>
			</div>
			
			
			
			<div class="xnl-shenma">
				<img src="/Public/Home/img/imgabtbkb.jpg" alt="" />
				<div class="xnl-shenma-md">
					<p>目前什马金融已帮助近30名山区贫困学生完成求学梦想</p>
					<p>我们的公益还在继续，让我们一起为山区的孩童播撒更多幸福的阳光</p>
				</div>
			</div>
			
			
		
		
		<!--页脚-->
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
		
<script type="text/javascript" src="/Public/Home/js/timeline.js"></script>			
</body>
</html>