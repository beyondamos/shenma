<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="renderer" content="webkit">
<title><?php echo ($site_title); ?></title>
<meta name="keywords" content="<?php echo ($site_keyword); ?>">
<meta name="description" content="<?php echo ($site_desc); ?>">
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
<link rel="stylesheet" href="/Public/Home/css/jquery.fullPage.css">    <link rel="stylesheet" href="/Public/Home/css/owl.transitions.css">

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
		<li class="active"><a href="/">首页</a></li>
		<li><a href="<?php echo U('Loans/index');?>" class="fw200">借款申请</a></li>
		<!-- <li><a href="javascript:;" class="fw200">借款申请</a></li> -->
		<li><a href="<?php echo U('About/index');?>" class="fw200">关于什马</a></li>
		<li><a href="<?php echo U('Article/index');?>" class="fw200">新闻资讯</a></li>
		<li><a href="<?php echo U('Edu/index');?>" class="fw200">老板商学院</a></li>
		<li><a href="<?php echo U('About/index#xnl');?>" class="fw200">小暖炉公益</a></li>
		<li><a href="<?php echo U('Contact/index');?>" class="fw200">联系我们</a></li>
      </ul>
		<dl>
			<a href="<?php echo U('Loans/index2');?>"><img src="/Public/Home/img/linkxfz.png" alt="" />消费者借款 >></a>
			<a href="<?php echo U('Loans/index');?>"><img src="/Public/Home/img/linksh.png" alt="" />商户借款 >></a>
		</dl>
    </div>
  </div>
		<img src="/Public/Home/img/headbk.png" alt=""/>
</nav>

<div id='load'><div class="square-spin"></div></div>
<div id="main-container">
        
    <div id="fullpage">
        <div class="section firstpage banner">
			<div class="carousel slide" id="carousel-example"  data-ride="carousel">
				<!--ol class="carousel-indicators">
					<li class="active" data-slide-to="0" data-target="#carousel-example"></li>
					<li data-slide-to="1" data-target="#carousel-example"></li>
					<li data-slide-to="2" data-target="#carousel-example"></li>
					<li data-slide-to="3" data-target="#carousel-example"></li>
				</ol>-->
				<div class="imgQR-fixed"><img src="/Public/Home/img/QR.jpg" alt="" /></div>
				
				
				<div class="carousel-inner">
                    <?php if(is_array($banners)): $i = 0; $__LIST__ = $banners;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><!-- 			<div class="item active"><a href="javascript:;"><img class="bannerwidth" alt="" src="/Public/Home/img/b1.jpg" /></a></div> -->
					<div class="item <?php if($i == 1): ?>active<?php endif; ?>"><a href="<?php echo ($vo["url"]); ?>"><img <?php if($i == 1): ?>class="bannerwidth"<?php endif; ?> alt="" src="<?php echo ($vo["thumbnail"]); ?>" /></a></div><?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
				<a class="left carousel-control" href="#carousel-example" role="button" data-slide="prev"><img src="/Public/Home/img/arl.png" alt="" /></a>
				<a class="right carousel-control" href="#carousel-example" role="button" data-slide="next"><img src="/Public/Home/img/arr.png" alt="" /></a>
			</div>
			<script type="text/javascript">
				$(".carousel-control.left").hover(function () {
					$(".carousel-control.left img").css('display','block');
					$(".carousel-control.left img").animate({ "left": "30px" }, 300);
				}, function () {
					$(".carousel-control.left img").animate({ "left": "0" }, 300,function(){
						$(".carousel-control.left img").css('display','none');});
				});
				
				$(".carousel-control.right").hover(function () {
					$(".carousel-control.right img").css('display','block');
					$(".carousel-control.right img").animate({ "right": "30px" }, 300);
				}, function () {
					$(".carousel-control.right img").animate({ "right": "0" }, 300,function(){
						$(".carousel-control.right img").css('display','none');});
				});
			</script>
        </div>
		
		
		
    <div class="section content1">
	<div class="maskbar"></div>
            <div class="pc_version h92">
                <div class="home-secondblock h100">
                    <div class="container relative">
                        <div class="row">
                            <ul class="nav nav-tabs  tab_toggle tab-btn" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#buycar" id="restFp" role="tab" data-toggle="tab">分期买车</a>
                                </li>
                                <li role="presentation">
                                    <a href="#purchase" role="tab" data-toggle="tab">分期进货</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <!-- <img class="img2 opacity0" src="/Public/Home/img/store.png" alt=""> -->
                                <div role="tabpanel" class="tab-pane fade in active" id="buycar">
                                    <img class="img1 opacity0" src="/Public/Home/img/xiang.png" alt="">
                                    <img class="img2 opacity0" src="/Public/Home/img/store.png" alt="">
                                    <img class="img3 opacity0" src="/Public/Home/img/jinmen.png" alt="">
                                    <div class="img4 opacity0">
                                        <img class="img-responsive" src="/Public/Home/img/xuanche.png" alt="">
                                        <img class="img5 opacity0" src="/Public/Home/img/tiziliao.png" alt="">
                                        <img class="img6 opacity0" src="/Public/Home/img/guoshenhe.png" alt="">
                                    </div>
                                    <img class="img7 opacity0" src="/Public/Home/img/huijia.png" alt="">
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="purchase">
								
                                    <img class="img2b opacity0" src="/Public/Home/img/store.png" alt="">
                                    
                                    <img class="w31 bottom_img2" src="/Public/Home/img/purchase_vendor.png" alt="">
                                    <div class="img8">
                                        <img class="bottom_img11" src="/Public/Home/img/purchase_xiang_2.png" alt="">
                                        <img class="bottom_img3" src="/Public/Home/img/jinhuo_img2.png" alt="">
                                        <img class="bottom_img4" src="/Public/Home/img/jinhuo_img3.png" alt="">
                                        <div class="common_animate">
                                            <!-- <p class="get-product">收货啦~</p> -->
                                            <img class="img-responsive bottom_img6" src="/Public/Home/img/che_2.png" alt="">
                                            <div class="common_animate_sub">
                                                <img class="img-responsive bottom_img7" src="/Public/Home/img/kache_2.png" alt="">
                                                <img class="bottom_img8" src="/Public/Home/img/kache_weiqi.png" class="img100">
                                                <img class="bottom_img9" src="/Public/Home/img/kache_weiqi.png" class="img100">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
	</div>
       
		
		
		
		<!--关于什马-->
		<div class="section main-about content2">
			<div class="">
				<div class="main-about-bk"></div>
				<h2><?php echo ($about["title"]); ?></h2>
                <?php echo html_entity_decode($about['content']);?>
				<h3><a href="<?php echo ($about["url"]); ?>">more</a></h3>
			</div>
		</div>
		
		
		<!--业务介绍-->
		<div class="section content3">
			<button class="btnud"><span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></button>
			
			<div class="bg-style hxyw2">
				<div class="swiper-container bg_div-left">
					<div class="swiper-wrapper ">
                    <?php
 $num = count($carousels); for ($i=1;$i<=$num; $i++): ?>
						<div class="swiper-slide pub_sd bg_<?php echo $i;?>"><img class="bg_<?php echo $i;?>imgl" src="<?php echo $carousels[$i]['thumbnail1'];?>" alt=""/></div>
                        <?php
 endfor; ?>

					</div>
				</div>
				<div class="swiper-container R_bg">
					<div class="swiper-wrapper">
                      <?php
 for($i=$num; $i >=1; $i--): ?>  

						<div class="swiper-slide bg_<?php echo $i;?>"><img class="bg_<?php echo $i;?>img" src="<?php echo $carousels[$i]['thumbnail2'];?>" alt="" /><img class="bg_<?php echo $i;?>imgb" src="<?php echo $carousels[$i]['thumbnail3'];?>" alt="" /></div>
                        <?php
 endfor; ?>

					</div>
				</div>
			</div>
		</div>
	
		
		
		
		<!--新闻资讯-->
		<div class="section content4">
		<div class="maskbarb"></div>
		<div class="box-news">
			<div class="box-newsmd">
			
				<!--标题文字-->
				<h2><img src="/Public/Home/img/imgtxt01.jpg" alt=""/></h2>
				
				<div class="box-news-img">
					<div class="imglimtc"><img src="<?php echo ($top_article["thumbnail"]); ?>" alt=""/></div>
					<a href="<?php echo U('Article/detail', array('article_id' => $top_article['article_id']));?>">
						<?php echo mb_substr($top_article['title'],0,20,'utf-8');?>...<span><?php echo ($top_article["newstime"]); ?></span>
						<i><?php echo mb_substr($top_article['synopsis'],0,35,'utf-8');?>...</i>
					</a>
				</div>
				<ul>
                    <?php if(is_array($recommend_articles)): $i = 0; $__LIST__ = $recommend_articles;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Article/detail', array('article_id' => $vo['article_id']));?>">
						<b><?php echo substr($vo['newstime'], -2 , 2);?></b><?php echo mb_substr($vo['title'],0,18,'utf-8');?>...<span><?php echo ($vo["newstime"]); ?></span>
						<i><?php echo mb_substr($vo['synopsis'],0,25,'utf-8');?>...</i>
					</a><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
		</div>	
		</div>
		
		

		<!--品牌区-->
		<div class="section box-logo content5">
			<div class="section box-logomd">

				<!--标题文字-->
				<h2><img src="/Public/Home/img/imgtxt02.jpg" alt=""/></h2>
				
				<div class="carousel slide" id="carousel-exampleb"  data-ride="carousel">
					<div class="carousel-inner">
						<div class="item active box-logomd">
						  <?php if(is_array($brands)): $i = 0; $__LIST__ = array_slice($brands,0,10,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo ($vo["url"]); ?>" target="_blank"><img src="<?php echo ($vo["thumbnail"]); ?>" alt=""/><h5><?php echo ($vo["name"]); ?></h5></a><?php endforeach; endif; else: echo "" ;endif; ?>
						</div>

                        <?php if($count > 10): ?><div class="item box-logomd">
                          <?php if(is_array($brands)): $i = 0; $__LIST__ = array_slice($brands,10,10,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo ($vo["url"]); ?>" target="_blank"><img src="<?php echo ($vo["thumbnail"]); ?>" alt=""/><h5><?php echo ($vo["name"]); ?></h5></a><?php endforeach; endif; else: echo "" ;endif; ?>
						</div><?php endif; ?> 
                        <?php if($count > 20): ?><div class="item box-logomd">
                          <?php if(is_array($brands)): $i = 0; $__LIST__ = array_slice($brands,19,10,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo ($vo["url"]); ?>" target="_blank"><img src="<?php echo ($vo["thumbnail"]); ?>" alt=""/><h5><?php echo ($vo["name"]); ?></h5></a><?php endforeach; endif; else: echo "" ;endif; ?>
						</div><?php endif; ?> 
					</div>
					
				</div>
			</div>
			<a class="left carousel-control" href="#carousel-exampleb" role="button" data-slide="prev"><img src="/Public/Home/img/arl.png" alt="" /></a>
			<a class="right carousel-control" href="#carousel-exampleb" role="button" data-slide="next"><img src="/Public/Home/img/arr.png" alt="" /></a>
		</div>
		
		
		
		
		
		<!--联系方式-->
		<div class="section contact-us content7">
			<img src="/Public/Home/img/imgtxt03.jpg" alt=""/>
			
			<div class="contact-left">
				<h4>什马互联网金融信息服务(上海)有限公司</h4>
				<h6>Shenma Internet Financial Information Service Co.,Ltd.</h6>
				<!-- <h5>公司名称：什马互联网金融信息服务(上海)有限公司</h5> -->
				<h5>公司地址：上海市长宁区凌空SOHO5号楼1楼</h5>
				<h5>合作邮箱：hezuo@shenmajr.com</h5>
				<h5>联系电话：400-088-6177&nbsp;&nbsp;021-62156265</h5>
				<h5>媒体合作：pr@shenmajr.com</h5>
				
				<div class="contact-map">
					<a href="http://api.map.baidu.com/geocoder?output=html&amp;address=%e4%b8%8a%e6%b5%b7%e5%b8%82%e9%95%bf%e5%ae%81%e5%8c%ba%e5%87%8c%e7%a9%basoho5%e5%8f%b7%e6%a5%bc1%e6%a5%bc" title="点击查看地图" ><img src="/Public/Home/img/map.jpg" alt="" /></a><dt>
				</div>
			</div>
		</div>
		
				
		<div class="section footer fp-auto-height">
            <footer class="home-footer" >
                <div class="container">
					<!-- <img class="footer-imgtemp" src="/Public/Home/img/foot.jpg" alt=""> -->
					<div class="row footer-wrap">
                        <div class="col-xs-6 col-sm-6">
							<h1><img src="/Public/Home/img/footlogob.png" alt=""></h1>
                            <?php if(is_array($navs)): $i = 0; $__LIST__ = $navs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo['parent_id'] == 0): ?><ul>
								<li><?php echo ($vo["name"]); ?></li>
                            
                                <?php if(is_array($navs)): $i = 0; $__LIST__ = $navs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i; if($nav['parent_id'] == $vo['id']): ?><li><a href="<?php echo ($nav["url"]); ?>"><?php echo ($nav["name"]); ?></a></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
							</ul><?php endif; endforeach; endif; else: echo "" ;endif; ?>

							
							<h6>©什马互联网金融信息服务(上海)有限公司 | 沪ICP备15005382号-2</h6>
                        </div>
						
						<div class="col-xs-6 col-sm-6">
                            <!-- <div class="footer-logo">
                                <img class="img-responsive" src="/Public/Home/img/footer_logo.png" alt="">
                            </div> -->
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
                                    <p class="text-center fw200">什马个人号</p>
                                </div>
                            </div>
							<div class="col-xs-4 col-sm-4">
                                <div class="two-code pull-left">
                                    <img class="img-responsive" src="/Public/Home/img/qr03.jpg" alt="">
                                    <p class="text-center fw200">什马商户号</p>
                                </div>
                            </div>
							
                        </div>
						
                    </div>
                </div>
            </footer>
        </div>
		
	</div>	
		


<script type="text/javascript">
    $(function(){
        $(window).resize(function(){
            $("#main-container").css("marginTop", $('.navbar').height());
            // $("#main-container").css("min-height", $(window).height() -$('.footer').height());
        }).resize();
    })
</script>

			<script type="text/javascript" src="/Public/Home/js/IndexFp.js" async="async" defer="defer"></script><!--PC端滚屏动画-->
	

        <script type="text/javascript">
            $(function(){
                $('.bg_height').height($(window).height() - $('nav').height());
            })
        </script>
        <script type="text/javascript" src="/Public/Home/js/IndexCommon.js" async="async" defer="defer"></script><!--移动端与PC端公用JS-->

<div class="hidden"></div>

</body>
<script type="text/javascript" src="/Public/Home/js/index20170823.js" async="async" defer="defer"></script>
</html>