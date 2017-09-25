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

			<div class="apply-top">
				<img src="<?php echo ($banner["thumbnail"]); ?>" alt="" />
				<div class="apply-top-md">
					<?php if(is_array($icons)): $i = 0; $__LIST__ = $icons;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo ($vo["url"]); ?>" class="anc"><img src="<?php echo ($vo["thumbnail"]); ?>" alt="" /><h1><?php echo ($vo["name"]); ?></h1><h2><?php echo ($vo["name_e"]); ?></h2></a><?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
			</div>
			
	
			
			<div class="apply-app">
				<div class="apply-app-md">
					<h3><img src="/Public/Home/img/txt.png" alt="" /></h3>
					<!-- <a href="javascript:;"><img src="/Public/Home/img/btnarr.png" alt="" /><h1>立即申请</h1></a> -->
					<a href="javascript:;"><img src="/Public/Home/img/btn.jpg" alt="" /></a>
				</div>
			</div>
			
			
			

			<div class="apply-cartoon">
				<img src="<?php echo ($banners['0']['thumbnail']); ?>" alt="" />
<!-- 				<div class="apply-cartoon-md">
					<img src="/Public/Home/img/cartoon.png" alt="" />
				</div> -->
			</div>

			<div class="apply-goods">
				<img src="<?php echo ($banners['1']['thumbnail']); ?>" alt="" />
<!-- 				<div class="apply-goods-md">
					<img src="/Public/Home/img/imgoods.png" alt="" />
				</div> -->
			</div>
			
			<div class="apply-loans">
				<img src="/Public/Home/img/bkimgArr.png" alt="" />
				<div class="apply-loans-md" id="anchora">
					<div class="apply-loans-mda">
						<span><img src="/Public/Home/img/txtxyd.png" alt="" /></span>
						<ul>
							<i><img src="/Public/Home/img/icon07.png" alt="" /><h4>产品特点</h4></i>
							<li>1.最高初始授信额度200万</li>
							<li>2.最高初始授信额度200万</li>
							<li>3.最高初始授信额度200万</li>
						</ul>
						
						<ul>
							<i><img src="/Public/Home/img/icon08.png" alt="" /><h4>适用人群</h4></i>
							<li>事业合伙人下属交通工具，农资，农机，家电经销商法人年龄：18-60周岁</li>
						</ul>
						
						<ul>
							<i><img src="/Public/Home/img/icon06.png" alt="" /><h4>申请资料</h4></i>
							<li>工商营业执照&nbsp;&nbsp;&nbsp;&nbsp;法人身份证正反面</li>
							<li>还款银行卡正面</li>
						</ul>
						
						<ul>
							<i><img src="/Public/Home/img/icon05.png" alt="" /><h4>申请流程</h4></i>
							<b>1.下载什马金融APP</b><br/>
							<b>2.经销商在线准入</b><br/>
							<b>3.准入通过，选择“信用袋”产品</b><br/>
							<b>4.申请用款</b>
						</ul>
						
					</div>
					
					
					
					<div class="apply-loans-mdb" id="anchorb">
						<span><img src="/Public/Home/img/txtxsd.png" alt="" /></span>
						<ul>
							<i><img src="/Public/Home/img/icon11.png" alt="" /><h4>产品特点</h4></i>
							<li>1.一期3个月，1次性还款，到期还本付息</li>
							<li>2.商户初始授信额度为3万/5万，根据商户袋中及贷后行为评估，可提升额度到5万/8万/10万</li>
						</ul>
						
						<ul>
							<i><img src="/Public/Home/img/icon12.png" alt="" /><h4>适用人群</h4></i>
							<li>事业合伙人下属交通工具，农资，农机，家电经销商法人年龄：18-60周岁</li>
						</ul>
						
						<ul>
							<i><img src="/Public/Home/img/icon10.png" alt="" /><h4>申请资料</h4></i>
							<li>工商营业执照&nbsp;&nbsp;&nbsp;&nbsp;法人身份证正反面</li>
							<li>还款银行卡正面</li>
						</ul>
						
						<ul>
							<i><img src="/Public/Home/img/icon09.png" alt="" /><h4>申请流程</h4></i>
							<b>1.下载并登陆什马金融APP</b><br/>
							<b>2.事情"新生贷"</b><br/>
							<b>3.在线提交申请资料</b><br/>
							<b>4.通过审核</b><br/>
							<b>5.申请用款</b><br/>
							<b>6.完成进贷</b>
						</ul>
					</div>
					
				</div>
			</div>
			
			
		
		<div class="fp-auto-height">
            <footer class="home-footer" >
                <div class="container">
					<!-- <img class="footer-imgtemp" src="/Public/Home/img/foot.jpg" alt=""> -->
					<div class="row footer-wrap">
                        <div class="col-xs-6 col-sm-6">
							<h1><img src="/Public/Home/img/footlogob.png" alt=""></h1>
							<ul>
								<li>借款申请</li>
								<li><a href="javascript:;">商户借款</a></li>
								<li><a href="javascript:;">消费者借款</a></li>
							</ul>
							
							<ul>
								<li>关于什马</li>
								<li><a href="javascript:;">公司介绍</a></li>
								<li><a href="javascript:;">发展历程</a></li>
								<li><a href="javascript:;">核心团队</a></li>
								<li><a href="javascript:;">企业文化</a></li>
							</ul>
							
							<ul>
								<li>新闻资讯</li>
								<li><a href="javascript:;">公司新闻</a></li>
								<li><a href="javascript:;">行业资讯</a></li>
								<li><a href="javascript:;">视频专区</a></li>
							</ul>
							
							<ul>
								<li>老板商学院</li>
								<li><a href="javascript:;">老板大讲堂</a></li>
								<li><a href="javascript:;">老板社区</a></li>
							</ul>
							
							<ul>
								<li>联系方式</li>
								<li><a href="javascript:;">诚聘英才</a></li>
								<li><a href="javascript:;">常见问题</a></li>
								<li><a href="javascript:;">在线客服</a></li>
							</ul>
							
							<h6>©什马互联网金融信息服务(上海)有限公司 | 沪ICP备15005382号-2</h6>
                        </div>
						
						<div class="col-xs-6 col-sm-6">
							<h4>什马分期 就是低息</h4>
							<h4>服务热线：400-088-6177</h4>
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
	<script>
		$(".anc").click(function(){
			var href = $(this).attr("href");
			var pos = $(href).offset().top;
			$("html,body").animate({scrollTop: pos}, 1000);
			return false;
		});
	</script>

</body>
</html>