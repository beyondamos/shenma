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

<!--引用百度地图API-->
<style type="text/css">
    html,body{margin:0;padding:0;}
    .iw_poi_title {color:#CC5522;font-size:14px;font-weight:bold;overflow:hidden;padding-right:13px;white-space:nowrap}
    .iw_poi_content {font:12px arial,sans-serif;overflow:visible;padding-top:4px;white-space:-moz-pre-wrap;word-wrap:break-word}
</style>
<script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>


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
			<img alt="" src="/Public/Home/img/bannerContact.jpg" />
		</div>

		<!--招聘区-->
		<div class="contact-recruit">
			
			<div class="contact-recruitmd">
				<h1>最新职位</h1>
				<div class="navtabs">
					<!-- 选项卡头 -->
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#tab01" role="tab" data-toggle="tab">上海</a></li>
						<li role="presentation"><a href="#tab02" role="tab" data-toggle="tab">成都</a></li>
						<li role="presentation"><a href="#tab03" role="tab" data-toggle="tab">西安</a></li>
						<li role="presentation"><a href="#tab04" role="tab" data-toggle="tab">杭州</a></li>
						<li role="presentation"><a href="#tab05" role="tab" data-toggle="tab">贵州</a></li>
						<li role="presentation"><a href="#tab06" role="tab" data-toggle="tab">北京</a></li>
						<li role="presentation"><a href="#tab07" role="tab" data-toggle="tab">河北</a></li>
						<li role="presentation"><a href="#tab08" role="tab" data-toggle="tab">重庆</a></li>
					</ul>

					<!-- 招聘内容 -->
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="tab01">
							<div class="box-news-item">
							
								<!-- 招聘内容详情 -->
								<div class="contact-recruit-detail">
									<ul>
										<li>
											<h2>系统运维工程师(1人)</h2>
											<h4>岗位要求：</h4>
												<h5>1、计算机相关专业本科以上学历，三年以上工作经验</h5>
												<h5>2、熟悉linux和Windows系统</h5>
												<h5>2、熟悉linux和Windows系统</h5>
												<h5>2、熟悉linux和Windows系统</h5>
												<h5>2、熟悉linux和Windows系统</h5>
												<h5>2、熟悉linux和Windows系统</h5>
												<h5>2、熟悉linux和Windows系统</h5>
										</li>
										
										<li>
											<h2>系统运维工程师(1人)</h2>
											<h4>岗位要求：</h4>
												<h5>1、计算机相关专业本科以上学历，三年以上工作经验</h5>
												<h5>2、熟悉linux和Windows系统</h5>
												<h5>2、熟悉linux和Windows系统</h5>
												<h5>2、熟悉linux和Windows系统</h5>
												<h5>2、熟悉linux和Windows系统</h5>
												<h5>2、熟悉linux和Windows系统</h5>
												<h5>2、熟悉linux和Windows系统</h5>
										</li>
										
										<li>
											<h2>系统运维工程师(1人)</h2>
											<h4>岗位要求：</h4>
												<h5>1、计算机相关专业本科以上学历，三年以上工作经验</h5>
												<h5>2、熟悉linux和Windows系统</h5>
												<h5>2、熟悉linux和Windows系统</h5>
												<h5>2、熟悉linux和Windows系统</h5>
												<h5>2、熟悉linux和Windows系统</h5>
												<h5>2、熟悉linux和Windows系统</h5>
												<h5>2、熟悉linux和Windows系统</h5>
										</li>
										
										<li>
											<h2>系统运维工程师(1人)</h2>
											<h4>岗位要求：</h4>
												<h5>1、计算机相关专业本科以上学历，三年以上工作经验</h5>
												<h5>2、熟悉linux和Windows系统</h5>
												<h5>2、熟悉linux和Windows系统</h5>
												<h5>2、熟悉linux和Windows系统</h5>
												<h5>2、熟悉linux和Windows系统</h5>
												<h5>2、熟悉linux和Windows系统</h5>
												<h5>2、熟悉linux和Windows系统</h5>
										</li>
									</ul>
								</div><!-- 招聘内容详情 end-->
				
							</div>
						</div>
						<div role="tabpanel" class="tab-pane" id="tab02">
							<div class="box-news-item">
								
								<!-- 招聘内容详情 -->
								<div class="contact-recruit-detail">
									<ul>
										<li>
											<h2>贷后经理(10人)</h2>
											<h4>岗位要求：</h4>
												<h5>1、财经专业本科以上学历，三年以上工作经验</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
										</li>
										
										<li>
											<h2>贷后经理(10人)</h2>
											<h4>岗位要求：</h4>
												<h5>1、财经专业本科以上学历，三年以上工作经验</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
										</li>
										
										<li>
											<h2>贷后经理(10人)</h2>
											<h4>岗位要求：</h4>
												<h5>1、财经专业本科以上学历，三年以上工作经验</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
										</li>
										
										<li>
											<h2>贷后经理(10人)</h2>
											<h4>岗位要求：</h4>
												<h5>1、财经专业本科以上学历，三年以上工作经验</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
										</li>
										
									</ul>
								</div><!-- 招聘内容详情 end-->
							</div>
						</div>
						<div role="tabpanel" class="tab-pane" id="tab03">
							<div class="box-news-item">
								
								<!-- 招聘内容详情 -->
								<div class="contact-recruit-detail">
									<ul>
										<li>
											<h2>系统运维工程师(1人)</h2>
											<h4>岗位要求：</h4>
												<h5>1、计算机相关专业本科以上学历，三年以上工作经验</h5>
												<h5>2、熟悉linux和Windows系统</h5>
												<h5>2、熟悉linux和Windows系统</h5>
												<h5>2、熟悉linux和Windows系统</h5>
												<h5>2、熟悉linux和Windows系统</h5>
												<h5>2、熟悉linux和Windows系统</h5>
												<h5>2、熟悉linux和Windows系统</h5>
										</li>
										
										<li>
											<h2>系统运维工程师(1人)</h2>
											<h4>岗位要求：</h4>
												<h5>1、计算机相关专业本科以上学历，三年以上工作经验</h5>
												<h5>2、熟悉linux和Windows系统</h5>
												<h5>2、熟悉linux和Windows系统</h5>
												<h5>2、熟悉linux和Windows系统</h5>
												<h5>2、熟悉linux和Windows系统</h5>
												<h5>2、熟悉linux和Windows系统</h5>
												<h5>2、熟悉linux和Windows系统</h5>
										</li>
										
										<li>
											<h2>系统运维工程师(1人)</h2>
											<h4>岗位要求：</h4>
												<h5>1、计算机相关专业本科以上学历，三年以上工作经验</h5>
												<h5>2、熟悉linux和Windows系统</h5>
												<h5>2、熟悉linux和Windows系统</h5>
												<h5>2、熟悉linux和Windows系统</h5>
												<h5>2、熟悉linux和Windows系统</h5>
												<h5>2、熟悉linux和Windows系统</h5>
												<h5>2、熟悉linux和Windows系统</h5>
										</li>
										
										<li>
											<h2>系统运维工程师(1人)</h2>
											<h4>岗位要求：</h4>
												<h5>1、计算机相关专业本科以上学历，三年以上工作经验</h5>
												<h5>2、熟悉linux和Windows系统</h5>
												<h5>2、熟悉linux和Windows系统</h5>
												<h5>2、熟悉linux和Windows系统</h5>
												<h5>2、熟悉linux和Windows系统</h5>
												<h5>2、熟悉linux和Windows系统</h5>
												<h5>2、熟悉linux和Windows系统</h5>
										</li>
									</ul>
								</div><!-- 招聘内容详情 end-->
				
							</div>
						</div>
						<div role="tabpanel" class="tab-pane" id="tab04">
							<div class="box-news-item">
								<!-- 招聘内容详情 -->
								<div class="contact-recruit-detail">
									<ul>
										<li>
											<h2>贷后经理(10人)</h2>
											<h4>岗位要求：</h4>
												<h5>1、财经专业本科以上学历，三年以上工作经验</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
										</li>
										
										<li>
											<h2>贷后经理(10人)</h2>
											<h4>岗位要求：</h4>
												<h5>1、财经专业本科以上学历，三年以上工作经验</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
										</li>
										
										<li>
											<h2>贷后经理(10人)</h2>
											<h4>岗位要求：</h4>
												<h5>1、财经专业本科以上学历，三年以上工作经验</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
										</li>
										
										<li>
											<h2>贷后经理(10人)</h2>
											<h4>岗位要求：</h4>
												<h5>1、财经专业本科以上学历，三年以上工作经验</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
										</li>
										
									</ul>
								</div><!-- 招聘内容详情 end-->	
							</div>
						</div>
						<div role="tabpanel" class="tab-pane" id="tab05">
							<div class="box-news-item">
								<!-- 招聘内容详情 -->
								<div class="contact-recruit-detail">
									<ul>
										<li>
											<h2>系统运维工程师(1人)</h2>
											<h4>岗位要求：</h4>
												<h5>1、计算机相关专业本科以上学历，三年以上工作经验</h5>
												<h5>2、熟悉linux和Windows系统</h5>
												<h5>2、熟悉linux和Windows系统</h5>
												<h5>2、熟悉linux和Windows系统</h5>
												<h5>2、熟悉linux和Windows系统</h5>
												<h5>2、熟悉linux和Windows系统</h5>
												<h5>2、熟悉linux和Windows系统</h5>
										</li>
										
										<li>
											<h2>系统运维工程师(1人)</h2>
											<h4>岗位要求：</h4>
												<h5>1、计算机相关专业本科以上学历，三年以上工作经验</h5>
												<h5>2、熟悉linux和Windows系统</h5>
												<h5>2、熟悉linux和Windows系统</h5>
												<h5>2、熟悉linux和Windows系统</h5>
												<h5>2、熟悉linux和Windows系统</h5>
												<h5>2、熟悉linux和Windows系统</h5>
												<h5>2、熟悉linux和Windows系统</h5>
										</li>
										
										<li>
											<h2>系统运维工程师(1人)</h2>
											<h4>岗位要求：</h4>
												<h5>1、计算机相关专业本科以上学历，三年以上工作经验</h5>
												<h5>2、熟悉linux和Windows系统</h5>
												<h5>2、熟悉linux和Windows系统</h5>
												<h5>2、熟悉linux和Windows系统</h5>
												<h5>2、熟悉linux和Windows系统</h5>
												<h5>2、熟悉linux和Windows系统</h5>
												<h5>2、熟悉linux和Windows系统</h5>
										</li>
										
										<li>
											<h2>系统运维工程师(1人)</h2>
											<h4>岗位要求：</h4>
												<h5>1、计算机相关专业本科以上学历，三年以上工作经验</h5>
												<h5>2、熟悉linux和Windows系统</h5>
												<h5>2、熟悉linux和Windows系统</h5>
												<h5>2、熟悉linux和Windows系统</h5>
												<h5>2、熟悉linux和Windows系统</h5>
												<h5>2、熟悉linux和Windows系统</h5>
												<h5>2、熟悉linux和Windows系统</h5>
										</li>
									</ul>
								</div><!-- 招聘内容详情 end-->
				
							</div>
						</div>
						<div role="tabpanel" class="tab-pane" id="tab06">
							<div class="box-news-item">
								<!-- 招聘内容详情 -->
								<div class="contact-recruit-detail">
									<ul>
										<li>
											<h2>贷后经理(10人)</h2>
											<h4>岗位要求：</h4>
												<h5>1、财经专业本科以上学历，三年以上工作经验</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
										</li>
										
										<li>
											<h2>贷后经理(10人)</h2>
											<h4>岗位要求：</h4>
												<h5>1、财经专业本科以上学历，三年以上工作经验</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
										</li>
										
										<li>
											<h2>贷后经理(10人)</h2>
											<h4>岗位要求：</h4>
												<h5>1、财经专业本科以上学历，三年以上工作经验</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
										</li>
										
										<li>
											<h2>贷后经理(10人)</h2>
											<h4>岗位要求：</h4>
												<h5>1、财经专业本科以上学历，三年以上工作经验</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
										</li>
										
									</ul>
								</div><!-- 招聘内容详情 end-->
							</div>
						</div>
						<div role="tabpanel" class="tab-pane" id="tab07">
							<div class="box-news-item">
								<!-- 招聘内容详情 -->
								<div class="contact-recruit-detail">
									<ul>
										<li>
											<h2>系统运维工程师(1人)</h2>
											<h4>岗位要求：</h4>
												<h5>1、计算机相关专业本科以上学历，三年以上工作经验</h5>
												<h5>2、熟悉linux和Windows系统</h5>
												<h5>2、熟悉linux和Windows系统</h5>
												<h5>2、熟悉linux和Windows系统</h5>
												<h5>2、熟悉linux和Windows系统</h5>
												<h5>2、熟悉linux和Windows系统</h5>
												<h5>2、熟悉linux和Windows系统</h5>
										</li>
										
										<li>
											<h2>系统运维工程师(1人)</h2>
											<h4>岗位要求：</h4>
												<h5>1、计算机相关专业本科以上学历，三年以上工作经验</h5>
												<h5>2、熟悉linux和Windows系统</h5>
												<h5>2、熟悉linux和Windows系统</h5>
												<h5>2、熟悉linux和Windows系统</h5>
												<h5>2、熟悉linux和Windows系统</h5>
												<h5>2、熟悉linux和Windows系统</h5>
												<h5>2、熟悉linux和Windows系统</h5>
										</li>
										
										<li>
											<h2>系统运维工程师(1人)</h2>
											<h4>岗位要求：</h4>
												<h5>1、计算机相关专业本科以上学历，三年以上工作经验</h5>
												<h5>2、熟悉linux和Windows系统</h5>
												<h5>2、熟悉linux和Windows系统</h5>
												<h5>2、熟悉linux和Windows系统</h5>
												<h5>2、熟悉linux和Windows系统</h5>
												<h5>2、熟悉linux和Windows系统</h5>
												<h5>2、熟悉linux和Windows系统</h5>
										</li>
										
										<li>
											<h2>系统运维工程师(1人)</h2>
											<h4>岗位要求：</h4>
												<h5>1、计算机相关专业本科以上学历，三年以上工作经验</h5>
												<h5>2、熟悉linux和Windows系统</h5>
												<h5>2、熟悉linux和Windows系统</h5>
												<h5>2、熟悉linux和Windows系统</h5>
												<h5>2、熟悉linux和Windows系统</h5>
												<h5>2、熟悉linux和Windows系统</h5>
												<h5>2、熟悉linux和Windows系统</h5>
										</li>
									</ul>
								</div><!-- 招聘内容详情 end-->
				
							</div>
						</div>
						<div role="tabpanel" class="tab-pane" id="tab08">
							<div class="box-news-item">
								<!-- 招聘内容详情 -->
								<div class="contact-recruit-detail">
									<ul>
										<li>
											<h2>贷后经理(10人)</h2>
											<h4>岗位要求：</h4>
												<h5>1、财经专业本科以上学历，三年以上工作经验</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
										</li>
										
										<li>
											<h2>贷后经理(10人)</h2>
											<h4>岗位要求：</h4>
												<h5>1、财经专业本科以上学历，三年以上工作经验</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
										</li>
										
										<li>
											<h2>贷后经理(10人)</h2>
											<h4>岗位要求：</h4>
												<h5>1、财经专业本科以上学历，三年以上工作经验</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
										</li>
										
										<li>
											<h2>贷后经理(10人)</h2>
											<h4>岗位要求：</h4>
												<h5>1、财经专业本科以上学历，三年以上工作经验</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
												<h5>2、熟悉贷款流程</h5>
										</li>
										
									</ul>
								</div><!-- 招聘内容详情 end-->
							</div>
						</div>
					</div><!-- 招聘内容 end-->
				</div>
				
				
				
				<!-- 招聘email -->
				<div class="contact-recruit-email">
					<a href="mailto:smjr-hr@shenmajr.com">投递邮箱：smjr-hr@shenmajr.com</a>
				</div><!-- 招聘email end-->	
				
				
				
				<!-- 招聘菜单 -->
				<div class="contact-recruit-nav">
					<a data-toggle="collapse" data-target="#claps-tit01r">
						<div class="panel-info-titl"><img src="/Public/Home/img/navimg01.jpg" alt=""/><br/>信审风控中心</div>
					</a>
					<div id="claps-tit01r" class="claps-area collapse in">
						<div class="container-fluid">
							<div class="row">
								<li><a href="javascript:;">系统运维工程师(1人)</a></li>
								<li><a href="javascript:;">系统运维工程师(1人)</a></li>
								<li><a href="javascript:;">系统运维工程师(1人)</a></li>
								<li><a href="javascript:;">系统运维工程师(1人)</a></li>
							</div>
						</div>
					</div>
					
					<a data-toggle="collapse" data-target="#claps-tit02r">
						<div class="panel-info-titl"><img src="/Public/Home/img/navimg02.jpg" alt=""/><br/>安全中心</div>
					</a>
					<div id="claps-tit02r" class="claps-area collapse on">
						<div class="container-fluid">
							<div class="row">
								<li><a href="javascript:;">贷前工程师(10人)</a></li>
								<li><a href="javascript:;">贷后工程师(12人)</a></li>
								<li><a href="javascript:;">售前工程师(15人)</a></li>
							</div>
						</div>
					</div>
					
					<a data-toggle="collapse" data-target="#claps-tit03r">
						<div class="panel-info-titl"><img src="/Public/Home/img/navimg03.jpg" alt=""/><br/>产品研发中心</div>
					</a>
					<div id="claps-tit03r" class="claps-area collapse on">
						<div class="container-fluid">
							<div class="row">
								<li><a href="javascript:;">系统运维工程师(1人)</a></li>
								<li><a href="javascript:;">系统运维工程师(1人)</a></li>
								<li><a href="javascript:;">系统运维工程师(1人)</a></li>
								<li><a href="javascript:;">系统运维工程师(1人)</a></li>
							</div>
						</div>
					</div>
					
					<a data-toggle="collapse" data-target="#claps-tit04r">
						<div class="panel-info-titl"><img src="/Public/Home/img/navimg04.jpg" alt=""/><br/>信息技术中心</div>
					</a>
					<div id="claps-tit04r" class="claps-area collapse on">
						<div class="container-fluid">
							<div class="row">
								<li><a href="javascript:;">系统运维工程师(1人)</a></li>
								<li><a href="javascript:;">系统运维工程师(1人)</a></li>
								<li><a href="javascript:;">系统运维工程师(1人)</a></li>
								<li><a href="javascript:;">系统运维工程师(1人)</a></li>
								<li><a href="javascript:;">系统运维工程师(1人)</a></li>
							</div>
						</div>
					</div>
				</div><!-- 招聘菜单 end-->
				


				
			</div>
		</div>	
		
		
		
		<!--常见问题-->
		<div class="contact-qa">
			<img src="/Public/Home/img/contactbk.jpg" alt="" />
			
			<div class="contact-qar">
			<h1>常见问题</h1>
				<!--第一题-->
				<a data-toggle="collapse" data-target="#claps-tit01">
					<div class="panel-info-titl clapstit-acta">APP操作</div>
				</a>
				<div id="claps-tit01" class="claps-area collapse in">
					<div class="container-fluid">
						<div class="row">
							<!--第一题 第1条-->
							<a data-toggle="collapse" data-target="#claps-tit0101">
								<div class="panel-info-titl clapstit-acta">换了新手机，如何绑定账户?</div>
							</a>
							<div id="claps-tit0101" class="claps-area collapse in">
								<div class="container-fluid">
									<div class="row">
										<h3>在APP应用登录界面点击“更改手机”发起申请后</h3>
										<h3>工作日时间段09:00-18:00当天处理，非工作日时间段顺延至工作日处理</h3>
									</div>
								</div>
							</div><!--第一题 第1条 end-->
							
							<!--第一题 第2条-->
							<a data-toggle="collapse" data-target="#claps-tit0102">
								<div class="panel-info-titl clapstit-actb">如何更换手机号码?</div>
							</a>
							<div id="claps-tit0102" class="claps-area collapse on">
								<div class="container-fluid">
									<div class="row">
										<h3>更换手机号</h3>
									</div>
								</div>
							</div><!--第一题 第2条 end-->
							
							<!--第一题 第3条-->
							<a data-toggle="collapse" data-target="#claps-tit0103">
								<div class="panel-info-titl clapstit-actb">密码忘记如何操作?</div>
							</a>
							<div id="claps-tit0103" class="claps-area collapse on">
								<div class="container-fluid">
									<div class="row">
										<h3>密码忘记如何操作</h3>
									</div>
								</div>
							</div><!--第一题 第3条 end-->
							
							
						</div>
					</div>
				</div><!--第一题 end-->
				
				<a data-toggle="collapse" data-target="#claps-tit02">
					<div class="panel-info-titl clapstit-actb">我要贷款</div>
				</a>
				<div id="claps-tit02" class="claps-area collapse on">
					<div class="container-fluid">
						<div class="row">
							<h3>我要贷款我要贷款</h3>
						</div>
					</div>
				</div>
				
				<a data-toggle="collapse" data-target="#claps-tit03">
					<div class="panel-info-titl clapstit-actb">我要买车</div>
				</a>
				<div id="claps-tit03" class="claps-area collapse on">
					<div class="container-fluid">
						<div class="row">
							<h3>我要买车我要买车</h3>
						</div>
					</div>
				</div>
				
				<a data-toggle="collapse" data-target="#claps-tit04">
					<div class="panel-info-titl clapstit-actb">如何更换手机号码?</div>
				</a>
				<div id="claps-tit04" class="claps-area collapse on">
					<div class="container-fluid">
						<div class="row">
							<h3>换了新手机，如何更换手机号码?</h3>
						</div>
					</div>
				</div>
			
				<a data-toggle="collapse" data-target="#claps-tit05">
					<div class="panel-info-titl clapstit-actb">如何更换手机号码?</div>
				</a>
				<div id="claps-tit05" class="claps-area collapse on">
					<div class="container-fluid">
						<div class="row">
							<h3>换了新手机，如何更换手机号码?</h3>
						</div>
					</div>
				</div>
				
				
			</div>
			
			
			<script type="text/javascript">
			   $(document).ready(function(){
				   $(".contact-qar .panel-info-titl").click(function(){
						if($(this).hasClass("clapstit-acta")){
							$(this).removeClass("clapstit-acta");
							$(this).addClass("clapstit-actb");
						}else{
							$(this).removeClass("clapstit-actb");
							$(this).addClass("clapstit-acta");
						}
				   });
			   });
			</script>
			
			
		</div>
		
		
		
		<!--百度地图容器-->
		<div class="boxmapcont"><div id="dituContent"></div><!-- <div class="boxmapmask"></div> --></div>



		<!--联系方式-->
		<div class="contact-msg">
			<img src="/Public/Home/img/contactus.png" alt="" />
			
			<div class="contact-msgl">
				<form action="<?php echo U('Contact/message');?>" method="post">
					<label>姓名</label><input value="" type="text" name="name" id="" placeholder="" />
					<label>手机</label><input value="" type="text" name="phone" id="" placeholder="" />
					<label>邮箱</label><input type="text" value="" name="email" id="email" placeholder=""/>
					<textarea id="" name="info" rows="" cols="" placeholder=""></textarea>
					<input type="submit" value="提交" class="contact-msg-btn" />
				</form>
			</div>
			<div class="contact-msgr">
				<h4>什马互联网金融信息服务(上海)有限公司</h4>
				<h6>Shenma Internet Financial Information Service Co.,Ltd.</h6>
				<!-- <h5>公司名称：什马互联网金融信息服务(上海)有限公司</h5> -->
				<h5>公司地址：上海市长宁区凌空SOHO5号楼1楼</h5>
				<h5>合作邮箱：hezuo@shenmajr.com</h5>
				<h5>联系电话：400-088-6177&nbsp;&nbsp;021-62156265</h5>
				<h5>媒体合作：PR@SHENMAJR.COM</h5>
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

<script type="text/javascript">
    //创建和初始化地图函数：
    function initMap(){
        createMap();//创建地图
        setMapEvent();//设置地图事件
        addMapControl();//向地图添加控件
        addMarker();//向地图中添加marker
    }
    
    //创建地图函数：
    function createMap(){
        var map = new BMap.Map("dituContent");//在百度地图容器中创建一个地图
        var point = new BMap.Point(121.359195,31.228224);//定义一个中心点坐标
        map.centerAndZoom(point,18);//设定地图的中心点和坐标并将地图显示在地图容器中
        window.map = map;//将map变量存储在全局
    }
    
    //地图事件设置函数：
    function setMapEvent(){
        map.enableDragging();//启用地图拖拽事件，默认启用(可不写)
        map.disableScrollWheelZoom();//启用地图滚轮放大缩小
        map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)
        map.enableKeyboard();//启用键盘上下左右键移动地图
    }
	

	
	
	
    
    //地图控件添加函数：
    function addMapControl(){
        //向地图中添加缩放控件
	var ctrl_nav = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
	map.addControl(ctrl_nav);
                }
    
    //标注点数组
    var markerArr = [{title:"什马互联网金融",content:"什马互联网金融信息服务(上海)有限公司",point:"121.359161|31.22846",isOpen:1,icon:{w:23,h:25,l:46,t:21,x:9,lb:12}}
		 ];
    //创建marker
    function addMarker(){
        for(var i=0;i<markerArr.length;i++){
            var json = markerArr[i];
            var p0 = json.point.split("|")[0];
            var p1 = json.point.split("|")[1];
            var point = new BMap.Point(p0,p1);
			var iconImg = createIcon(json.icon);
            var marker = new BMap.Marker(point,{icon:iconImg});
			var iw = createInfoWindow(i);
			var label = new BMap.Label(json.title,{"offset":new BMap.Size(json.icon.lb-json.icon.x+10,-20)});
			marker.setLabel(label);
            map.addOverlay(marker);
            label.setStyle({
                        borderColor:"#808080",
                        color:"#333",
                        cursor:"pointer"
            });
			
			(function(){
				var index = i;
				var _iw = createInfoWindow(i);
				var _marker = marker;
				_marker.addEventListener("click",function(){
				    this.openInfoWindow(_iw);
			    });
			    _iw.addEventListener("open",function(){
				    _marker.getLabel().hide();
			    })
			    _iw.addEventListener("close",function(){
				    _marker.getLabel().show();
			    })
				label.addEventListener("click",function(){
				    _marker.openInfoWindow(_iw);
			    })
				if(!!json.isOpen){
					label.hide();
					_marker.openInfoWindow(_iw);
				}
			})()
        }
    }
    //创建InfoWindow
    function createInfoWindow(i){
        var json = markerArr[i];
        var iw = new BMap.InfoWindow("<b class='iw_poi_title' title='" + json.title + "'>" + json.title + "</b><div class='iw_poi_content'>"+json.content+"</div>");
        return iw;
    }
    //创建一个Icon
    function createIcon(json){
        var icon = new BMap.Icon("http://app.baidu.com/map/images/us_mk_icon.png", new BMap.Size(json.w,json.h),{imageOffset: new BMap.Size(-json.l,-json.t),infoWindowOffset:new BMap.Size(json.lb+5,1),offset:new BMap.Size(json.x,json.h)})
        return icon;
    }
    
    initMap();//创建和初始化地图
</script>






























</html>