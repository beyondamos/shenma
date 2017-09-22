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
					<a href="<?php echo U('Loans/index');?>" class="anc"><img src="/Public/Home/img/biz.png" alt="" /><h1>商家贷款</h1><h2>Business loans</h2></a>
					<a href="<?php echo U('Loans/index2');?>" class="anc"><img src="/Public/Home/img/cust.png" alt="" /><h1>消费者贷款</h1><h2>Consumer loans</h2></a>
				</div>
			</div>
			
			
			
			
			<!--什么是商品分期？-->
			<div class="goods-spfq" id="anchora">
				<div class="goods-spfq-md">
					<img src="/Public/Home/img/iconSp.png" alt="" />
					<h3>什么是商品分期？</h3>
					<span></span>
					<p>商品分期是什马金融针对终端消费者推出的，<br/>凭借信用评估可分期购买所需商品的消费金融产品。</p>
					<img src="/Public/Home/img/imgNm.png" alt="" />
				</div>
			</div>
			
			
			<!--核心产品-->
			<div class="goods-core">
				<img src="/Public/Home/img/bkimgArr.png" alt="" />
				<div class="goods-core-md">
					<h2><span>核心产品</span><br/>CORE PRODUCTS</h2>
					
					<div class="goods-core-md-btn">
						<a href="javascript:;"><img src="/Public/Home/img/iconSmfq.png" alt="" /><span>什马分期</span></a>
						<a href="javascript:;"><img src="/Public/Home/img/icon1fq.png" alt="" /><span>1分期</span></a>
					</div>
					
					<div class="goods-core-md-five">
						<a href="javascript:;"><img src="/Public/Home/img/icon5a.png" alt="" /><i>操作简单</i><span>5分钟办单</span></a>
						<a href="javascript:;"><img src="/Public/Home/img/icon5b.png" alt="" /><i>审核快</i><span>最快秒过</span></a>
						<a href="javascript:;"><img src="/Public/Home/img/icon5c.png" alt="" /><i>利率低</i><span>月供更少</span></a>
						<a href="javascript:;"><img src="/Public/Home/img/icon5d.png" alt="" /><i>到账快</i><span>最快T+1到账</span></a>
						<a href="javascript:;"><img src="/Public/Home/img/icon5e.png" alt="" /><i>资料少</i><span>身份证和银行卡</span></a>
					</div>
					
					<div class="goods-core-md-process">
						<div class="goods-core-phone"><img src="/Public/Home/img/imgSj.png" alt="" /></div>
						<h3>申请流程</h3>
						<h4>APPLICATION PROCESS</h4>
						<a href="javascript:;"><img src="/Public/Home/img/num6a1.png" alt="" />下载什马金融APP</a>
						<a href="javascript:;"><img src="/Public/Home/img/num6a2.png" alt="" />点击什马分期</a>
						<a href="javascript:;"><img src="/Public/Home/img/num6a3.png" alt="" />录入申办信息</a>
						<a href="javascript:;"><img src="/Public/Home/img/num6a4.png" alt="" />上传证件</a>
						<a href="javascript:;"><img src="/Public/Home/img/num6a5.png" alt="" />确认提交</a>
						<a href="javascript:;"><img src="/Public/Home/img/num6a6.png" alt="" />等待结果</a>
					</div>
					
				</div>
			</div>
			
			
			
			<!--下载什马App-->
			<div class="apply-app">
				<div class="apply-app-md">
					<h3><img src="/Public/Home/img/txt.png" alt="" /></h3>
					<a href="javascript:;"><img src="/Public/Home/img/btn.jpg" alt="" /></a>
				</div>
			</div>
			
			
			<!--什么是现金分期？-->
			<div class="goods-spfq" id="anchorb">
				<div class="goods-spfq-md">
					<img src="/Public/Home/img/iconSp.png" alt="" />
					<h3>什么是现金分期？</h3>
					<span></span>
					<p>现金分期是什马金融针对终端消费者推出的，<br/>凭借信用评估可分期借贷小额现金的金融产品。</p>
					<img src="/Public/Home/img/imgXedk.png" alt="" />
				</div>
			</div>
			
			
			<!--核心产品-->
			<div class="goods-core goods-coreb">
				<img src="/Public/Home/img/bkimgArr.png" alt="" />
				<div class="goods-core-md">
					<h2><span>核心产品</span><br/>CORE PRODUCTS</h2>
					
					<div class="goods-core-md-fkh">
						<img src="/Public/Home/img/imgFkh.png" alt="" />
					</div>
					
					<div class="goods-core-md-process">
						<div class="goods-core-phone"><img src="/Public/Home/img/imgSjb.png" alt="" /></div>
						<h3>申请方式一：微信自助办理</h3>
						<h4>APPLICATION OF A WAY:WECHAT FOR SELF-HELP</h4>
						<a href="javascript:;"><img src="/Public/Home/img/num6b1.png" alt="" />微信搜索并关注“什马个人号”</a>
						<a href="javascript:;"><img src="/Public/Home/img/num6b2.png" alt="" />选择“放开花”</a>
						<a href="javascript:;"><img src="/Public/Home/img/num6b3.png" alt="" />我要借贷</a>
						<a href="javascript:;"><img src="/Public/Home/img/num6b4.png" alt="" />填写资料</a>
						<a href="javascript:;"><img src="/Public/Home/img/num6a5.png" alt="" />提交审核</a>
						<a href="javascript:;"><img src="/Public/Home/img/num6a6.png" alt="" />等待放款</a>
					</div>
					
					<div class="goods-core-md-process goods-core-md-processb">
						<div class="goods-core-phone"><img src="/Public/Home/img/imgKf.png" alt="" /></div>
						<h3>申请方式二：由客服代为办理</h3>
						<h4>APPLICATION OF TWO WAY:BY THE CUSTOMER SERVICE ON BEHALF OF THE HANDLE</h4>
						<a href="javascript:;"><img src="/Public/Home/img/iconkfb.png" alt="" />服务热线：400-088-6177</a>
					</div>
					
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