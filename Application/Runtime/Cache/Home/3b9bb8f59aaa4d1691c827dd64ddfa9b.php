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
      <a class="navbar-brand" href="index.html"><img src="/Public/Home/img/header_logo.jpg" alt=""></a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
		<li><a href="/">首页</a></li>
		<li <?php if($controller_name == 'Loans'): ?>class="active"<?php endif; ?>><a href="<?php echo U('Loans/index');?>" class="fw200">借款申请</a></li>
		<!-- <li><a href="javascript:;" class="fw200">借款申请</a></li> -->
		<li <?php if($controller_name == 'About'): ?>class="active"<?php endif; ?>><a href="<?php echo U('About/index');?>" class="fw200">关于什马</a></li>
		<li  <?php if($controller_name == 'Article'): ?>class="active"<?php endif; ?>><a href="<?php echo U('Article/index');?>" class="fw200">新闻资讯</a></li>
		<li <?php if($controller_name == 'Edu'): ?>class="active"<?php endif; ?>><a href="<?php echo U('Edu/index');?>" class="fw200">老板商学院</a></li>
		<li><a href="javascript:;" class="fw200">小暖炉公益</a></li>
		<li <?php if($controller_name == 'Contact'): ?>class="active"<?php endif; ?>><a href="<?php echo U('Contact/index');?>" class="fw200">联系我们</a></li>
      </ul>
    </div>
  </div>
</nav>

		<div class="bannertop">
			<img alt="" src="/Public/Home/img/bannerabt.jpg" />
		</div>
			
			<div class="cont">
			
			
				<div class="about-shenma">
					<h2>关于什马</h2>
					<p>什马互联网金融信息服务（上海）有限公司，简称什马金融，成立于2015年1月， 总部位于国内金融中心上海。</br>
					是一家专注在县乡镇渠道，服务于8亿农村市场的国内领先的互联网金融公司，公司成立伊始以农村交通工具领域为切入点，并依托上市公司等行业强势资源，业务快速覆盖全国。</p>
					<p>公司两大核心产品什马分期和信用贷分别为农民和商家提供消费金融和供应链金融服务，旨在帮助更多的经销商做好生意、做大生意，使销售资金得以快速的回笼。</p>
					<p>截止2017年7月，什马金融合作网点遍布全国31个省达35000多家，为近50%的商户和几十万农民家庭提供了金融服务解决方案。整体业务规模超50亿元。预计至2017年底，合作农村网点将超过5万家，业务涵盖交通工具、家电、3c、农资、农机等各版块，业务超100亿元。 </p>
					<p>公司以“让农民拥有和城里人一样的金融服务”为核心理念，旨在通过普惠金融方式，为广大农民提供优质高效低成本的互联网金融服务，目前不仅是农村交通工具领域国内最大的互联网公司，更是国内农村金融领域的领跑者之一。</p>
				</div>
				
				
				
				<div class="history-shenma">
					<h2>发展历程</h2>
					<div class="carousel slide" id="carousel-example"  data-ride="carousel">
						<div class="carousel-inner">
							<div class="item active"><a href="javascript:;"><img class="bannerwidth" alt="" src="/Public/Home/img/hist01.jpg" /></a></div>
							<div class="item"><a href="javascript:;"><img alt="" src="/Public/Home/img/hist02.jpg" /></a></div>
							<div class="item"><a href="javascript:;"><img alt="" src="/Public/Home/img/hist03.jpg" /></a></div>
						</div>
						<a class="left carousel-control" href="#carousel-example" role="button" data-slide="prev"><img src="/Public/Home/img/alh.png" alt="" /></a>
						<a class="right carousel-control" href="#carousel-example" role="button" data-slide="next"><img src="/Public/Home/img/arh.png" alt="" /></a>
					</div>
				</div>
				
				
				
				<div class="core-shenma">
					<h2>核心团队</h2>
					
					<?php if(is_array($articles)): $i = 0; $__LIST__ = $articles;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="corep">
						<img src="<?php echo ($vo["titleimg"]); ?>" alt="" />
						<h3><?php echo ($vo["title"]); ?></h3>
						<span><?php echo ($vo["synopsis"]); ?></span>
						<h5><?php echo html_entity_decode($vo['content']);?></h5>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>


				</div>
				
			</div>
			
			
			<div class="culture-shenma">
				<img src="/Public/Home/img/imgabtbk.jpg" alt="" />
				<div class="culture-shenma-md">
					<img src="/Public/Home/img/cultureMD.png" alt="" />
				</div>
			</div>
			
			
			
			<div class="cont">
				<div class="xnla-shenma">
					<h1><img src="/Public/Home/img/xnlogo.png" alt="" /></h1>
					<h2>小暖炉助学计划</h2>
					<p>小暖炉助学计划是由热心公益事业的什马金融公司、什马金融内部员工、以及社会志愿者共同发起的，在遵守宪法、法律、法规和国家政策，遵守社会道德风尚的前提下以扶贫帮困献爱心为主的公益扶贫计划。</p>
					<p>1、帮扶对象：贫困学生、留守儿童；以学习优秀，积极向上的初、高中生为主；</p>
					<p>2、帮扶宗旨：让贫穷的孩子都有书读，用知识改变命运；</p>
				</div>
			</div>
			
			
			
			<div class="xnl-shenma">
				<img src="/Public/Home/img/imgabtbkb.jpg" alt="" />
				<div class="xnl-shenma-md">
					<p>目前什马金融已帮助近30名山区贫困学生完成求学梦想</p>
					<p>我们的公益还在继续，让我们一起为山区的孩童播撒更多幸福的阳光</p>
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
                                <div class="two-code pull-left">
                                    <img class="img-responsive" src="/Public/Home/img/qr02.jpg" alt="">
                                    <p class="text-center fw200">消费者微信自助借款</p>
                                </div>
                            </div>
							<div class="col-xs-4 col-sm-4">
                                <div class="two-code pull-left">
                                    <img class="img-responsive" src="/Public/Home/img/qr03.jpg" alt="">
                                    <p class="text-center fw200">商户综合服务</p>
                                </div>
                            </div>
							
                        </div>
						
                    </div>
                </div>
            </footer>

        </div>
		
</body>
</html>