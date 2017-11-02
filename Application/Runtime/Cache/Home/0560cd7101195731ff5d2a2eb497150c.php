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


<div class="navtopbtn">
	<a href="<?php echo U('Loans/index2');?>"><img src="/Public/Mobile/images/linkxfz.png" alt="" />消费者申请 >></a>
	<a href="<?php echo U('Loans/index');?>"><img src="/Public/Mobile/images/linksh.png" alt="" />商家申请 >></a>
</div>

<!--头部图片-->
<div class="banind">
	<div class="swiper-container">
        <div class="swiper-wrapper">
        	<?php if(is_array($banners)): $i = 0; $__LIST__ = $banners;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="swiper-slide"><a href="<?php echo ($vo["url"]); ?>"><img alt="" src="<?php echo ($vo["thumbnail"]); ?>" /></a></div><?php endforeach; endif; else: echo "" ;endif; ?>	
        </div>
    </div>
	
	<script>
		var swiper = new Swiper('.banind .swiper-container', {
			paginationClickable: true,
			spaceBetween:0,
			loop: true,
			centeredSlides: true,
			autoplay: 5000,
			autoplayDisableOnInteraction: false
		});
    </script>
</div>


<div class="box-cartoon">
	<div class="box-cartoon-btn">
		<a href="javascript:;" id="btna" class="box-cartoon-act">分期进货</a>
		<a href="javascript:;" id="btnb">分期买车</a>
	</div>
	
	<!--分期进货-->
	<div class="box-cartoona" id="areaa">
		<div class="swiper-container swiper-containera">
			<div class="swiper-wrapper">
				<div class="swiper-slide"><img alt="" src="/Public/Mobile/images/carta01.jpg" /></div>
				<div class="swiper-slide"><img alt="" src="/Public/Mobile/images/carta02.jpg" /></div>
				<div class="swiper-slide"><img alt="" src="/Public/Mobile/images/carta03.jpg" /></div>
				<div class="swiper-slide"><img alt="" src="/Public/Mobile/images/carta04.jpg" /></div>
				<div class="swiper-slide"><img alt="" src="/Public/Mobile/images/carta05.jpg" /></div>
			</div>
			<div class="swiper-pagination swiper-paginationa"></div>
		</div>
	</div>

	<!--分期买车-->
	<div class="box-cartoonb" id="areab" style="height:0;">
		<div class="swiper-container swiper-containerb">
			<div class="swiper-wrapper">
				<div class="swiper-slide"><img alt="" src="/Public/Mobile/images/cartb01.jpg" /></div>
				<div class="swiper-slide"><img alt="" src="/Public/Mobile/images/cartb02.jpg" /></div>
				<div class="swiper-slide"><img alt="" src="/Public/Mobile/images/cartb03.jpg" /></div>
				<div class="swiper-slide"><img alt="" src="/Public/Mobile/images/cartb04.jpg" /></div>
				<div class="swiper-slide"><img alt="" src="/Public/Mobile/images/cartb05.jpg" /></div>
			</div>
			<div class="swiper-pagination swiper-paginationb"></div>
		</div>
	</div>
	

</div>

<script>
	$(function(){
		
		var swipera = new Swiper('.box-cartoona .swiper-containera', {
		pagination: '.box-cartoona .swiper-paginationa',
		paginationClickable: true,
		paginationType: 'fraction',
		spaceBetween:0,
		loop: true,
		centeredSlides: true,
		autoplay: 1000,
		autoplayDisableOnInteraction: false,
		effect: 'fade'
	});
	
	
	var swiperb = new Swiper('.box-cartoonb .swiper-containerb', {
		pagination: '.box-cartoonb .swiper-paginationb',
		paginationClickable: true,
		paginationType: 'fraction',
		spaceBetween:0,
		loop: true,
		centeredSlides: true,
		autoplay: 1000,
		autoplayDisableOnInteraction: false,
		effect: 'fade'
	});	
	
	
		$("#btna").click(function(){
			swipera.startAutoplay();
			swiperb.stopAutoplay();
			$("#areaa").css('height','auto');
			$("#areab").css('height','0');
			$("#btna").addClass('box-cartoon-act');
			$("#btnb").removeClass('box-cartoon-act');
		});
		$("#btnb").click(function(){
			swiperb.startAutoplay();
			swipera.stopAutoplay();
			$("#areab").css('height','auto');
			$("#areaa").css('height','0');
			$("#btnb").addClass('box-cartoon-act');
			$("#btna").removeClass('box-cartoon-act');
		});
	});	
</script>

<!--关于什马-->
<div class="main-about">
	<img src="/Public/Mobile/images/bkabt.jpg" alt="" />
	<div class="main-about-md">
		<h2><?php echo ($about["title"]); ?></h2>
		<?php echo html_entity_decode($about['content']);?>
		<div class="main-about-more"><a href="<?php echo ($about["url"]); ?>">more</a></div>
	</div>
</div>


<div class="box-adv">
	<div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img class="bg_1img" src="/Public/Mobile/images/imgr01.jpg" alt="" /><img class="bg_1imgb" src="/Public/Mobile/images/imgr01b.jpg" alt="" /></div>
            <div class="swiper-slide"><img class="bg_2img" src="/Public/Mobile/images/imgr02.jpg" alt="" /><img class="bg_2imgb" src="/Public/Mobile/images/imgr02b.jpg" alt="" /></div>
            <div class="swiper-slide"><img class="bg_3img" src="/Public/Mobile/images/imgr03.jpg" alt="" /><img class="bg_3imgb" src="/Public/Mobile/images/imgr03b.jpg" alt="" /></div>
            <div class="swiper-slide"><img class="bg_4img" src="/Public/Mobile/images/imgr04.jpg" alt="" /><img class="bg_4imgb" src="/Public/Mobile/images/imgr04b.jpg" alt="" /></div>
        </div>
		
		<div class="swiper-pagination"></div>
    </div>
	
	<script>
		var swiperadv = new Swiper('.box-adv .swiper-container', {
			pagination: '.box-adv .swiper-pagination',
			paginationClickable: true,
			spaceBetween:0,
			loop: true,
			centeredSlides: true,
			autoplay: 3000,
			autoplayDisableOnInteraction: false,
			onSlideChangeEnd:function(swiperadv){
				swiperadv.startAutoplay();
			}
		});
		
		$('.bg_1img').click(function() {
			swiperadv.stopAutoplay();
			$('.bg_1img').css('visibility', 'hidden');
			$('.bg_1imgb').css('visibility','visible');
		})
		
		$('.bg_1imgb').click(function() {
			swiperadv.startAutoplay();
			$('.bg_1imgb').css('visibility', 'hidden');
			$('.bg_1img').css('visibility','visible');
		})
		
		$('.bg_2img').click(function() {
			swiperadv.stopAutoplay();
			$('.bg_2img').css('visibility', 'hidden');
			$('.bg_2imgb').css('visibility','visible');
		})
		
		$('.bg_2imgb').click(function() {
			swiperadv.startAutoplay();
			$('.bg_2imgb').css('visibility', 'hidden');
			$('.bg_2img').css('visibility','visible');
		})
		
		$('.bg_3img').click(function() {
			swiperadv.stopAutoplay();
			$('.bg_3img').css('visibility', 'hidden');
			$('.bg_3imgb').css('visibility','visible');
		})
		
		$('.bg_3imgb').click(function() {
			swiperadv.startAutoplay();
			$('.bg_3imgb').css('visibility', 'hidden');
			$('.bg_3img').css('visibility','visible');
		})
		
		$('.bg_4img').click(function() {
			swiperadv.stopAutoplay();
			$('.bg_4img').css('visibility', 'hidden');
			$('.bg_4imgb').css('visibility','visible');
		})
		
		$('.bg_4imgb').click(function() {
			swiperadv.startAutoplay();
			$('.bg_4imgb').css('visibility', 'hidden');
			$('.bg_4img').css('visibility','visible');
		})
		
    </script>
</div>

	
	
	


<!--新闻-->
<div class="box-news">
	<!--标题文字
	<h2><img src="/Public/Mobile/images/imgtxt01.jpg" alt=""/></h2>-->
	<h4>新闻资讯</h4>
	<h6>NEWS AND VIEWS</h6>
	
	<div class="box-news-img">
		<a href="<?php echo U('Article/detail', array('article_id' => $top_article['article_id']));?>"><div class="imglimtc"><img src="<?php echo ($top_article["thumbnail"]); ?>" alt=""/></div>
			<b><?php echo mb_substr($top_article['title'],0,20,'utf-8');?>...</b>
			<i><?php echo mb_substr($top_article['synopsis'],0,35,'utf-8');?>...</i>
		</a>
	</div>
	<ul>
		<?php if(is_array($recommend_articles)): $i = 0; $__LIST__ = $recommend_articles;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Article/detail', array('article_id' => $vo['article_id']));?>">
			<b><?php echo substr($vo['newstime'], -2 , 2);?></b><?php echo mb_substr($vo['title'],0,18,'utf-8');?>...<span><?php echo ($vo["newstime"]); ?></span>
			<i><?php echo mb_substr($vo['synopsis'],0,25,'utf-8');?>...</i>
		</a><?php endforeach; endif; else: echo "" ;endif; ?>
	</ul>
	<div class="news-more">
		<a href="<?php echo U('Article/index');?>">more</a>
	</div>
	
</div>




<!--品牌区-->
<div class="box-logo">
	<!--标题文字
	<h2><img src="/Public/Mobile/images/imgtxt02.jpg" alt=""/></h2>-->
	<h4>投资机构&合作品牌</h4>
	<h6>INVESTMENT INSTITUTIONS & PARTNERS</h6>
	
	
	<div class="swiper-container">
        <div class="swiper-wrapper">


            <div class="swiper-slide">
				<div class="box-logomd">
				<?php if(is_array($brands)): $i = 0; $__LIST__ = array_slice($brands,0,10,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo ($vo["url"]); ?>" target="_blank"><img src="<?php echo ($vo["thumbnail"]); ?>" alt=""/><h5><?php echo ($vo["name"]); ?></h5></a><?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
			</div>


			<?php if($count > 10): ?><div class="swiper-slide">
				<div class="box-logomd">
				<?php if(is_array($brands)): $i = 0; $__LIST__ = array_slice($brands,10,10,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo ($vo["url"]); ?>" target="_blank"><img src="<?php echo ($vo["thumbnail"]); ?>" alt=""/><h5><?php echo ($vo["name"]); ?></h5></a><?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
			</div><?php endif; ?> 


			<?php if($count > 20): ?><div class="swiper-slide">
				<div class="box-logomd">
				<?php if(is_array($brands)): $i = 0; $__LIST__ = array_slice($brands,20,10,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo ($vo["url"]); ?>" target="_blank"><img src="<?php echo ($vo["thumbnail"]); ?>" alt=""/><h5><?php echo ($vo["name"]); ?></h5></a><?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
			</div><?php endif; ?> 

			<?php if($count > 30): ?><div class="swiper-slide">
				<div class="box-logomd">
				<?php if(is_array($brands)): $i = 0; $__LIST__ = array_slice($brands,30,10,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo ($vo["url"]); ?>" target="_blank"><img src="<?php echo ($vo["thumbnail"]); ?>" alt=""/><h5><?php echo ($vo["name"]); ?></h5></a><?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
			</div><?php endif; ?> 


        </div>
		
		<!--<div class="swiper-pagination"></div>-->
		<?php if($count <= 40): ?><div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div><?php endif; ?> 
    </div>
	
	<script>
		var swiper = new Swiper('.box-logo .swiper-container', {
			pagination: '.box-logo .swiper-pagination',
			paginationClickable: true,
			nextButton: '.swiper-button-next',
			prevButton: '.swiper-button-prev',
			spaceBetween:0,
			loop: true,
			centeredSlides: true,
			autoplay: 60000,
			autoplayDisableOnInteraction: false
		});
    </script>
</div>





<!--联系方式-->
<div class="contact-us">
	<h4>联系方式</h4>
	<h6>CONTACT</h6>
	<div class="contact-usmd">
		<h1>什马互联网金融信息服务(上海)有限公司</h1>
		<h2>Shenma Internet Financial Information Service Co.,Ltd.</h2>
		<!-- <h5>公司名称：什马互联网金融信息服务(上海)有限公司</h5> -->
		<h5>公司地址：上海市长宁区凌空SOHO5号楼1楼</h5>
		<h5>合作邮箱：hezuo@shenmajr.com</h5>
		<h5>联系电话：400-088-6177&nbsp;&nbsp;021-62156265</h5>
		<h5>媒体合作：PR@SHENMAJR.COM</h5>
	</div>
	<div class="contact-map">
		<a href="http://api.map.baidu.com/geocoder?output=html&amp;address=%e4%b8%8a%e6%b5%b7%e5%b8%82%e9%95%bf%e5%ae%81%e5%8c%ba%e5%87%8c%e7%a9%basoho5%e5%8f%b7%e6%a5%bc1%e6%a5%bc" title="点击查看地图" ><img src="/Public/Mobile/images/map.jpg" alt="" /></a><dt>
	</div>
</div>
		
		
		
	
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