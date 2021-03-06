<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="renderer" content="webkit">
    <title>什马金融后台管理系统</title>
	<link href="/Public/Admin/css/base.css" rel="stylesheet" type="text/css"/>
	<link href="/Public/Admin/css/bootstrap.min.css" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="/Public/Admin/js/html5shiv.js"></script>
	<script src="/Public/Admin/js/respond.min.js"></script>
	<![endif]-->
	<script src="/Public/Admin/js/jquery-1.11.1.min.js"></script>
	<script src="/Public/Admin/js/bootstrap.min.js"></script>
	<!-- <script src="/Public/Admin/js/laydate/laydate.js"></script> -->
</head>
<body>
<div class="nav-top">
	<div class="nav-top-center">
		<div class="nav-top-left">
			<a href="<?php echo U('Admin/Index/index');?>"><img src="/Public/Admin/images/logo.png" alt=""/><span>后台管理</span></a>
		</div>
		<div class="nav-top-right">
			
			<!--用户及下拉列表-->
			<ul id="topnav">
				<li>
					<a href="javascript:;"><?php echo ($login_user_data["username"]); ?><!-- <img src="/Public/Admin/images/ard.png" alt="" /> --></a><!--用户名-->
			
<!-- 					<span><dl>
						<a href="javascript:;">基本资料</a><br/>
						<a href="javascript:;">账号信息</a><br/>
					</dl></span> -->
				</li>
			</ul>
			
			<a href="<?php echo U('Login/logout');?>" class="topnavimg">退出登录</a>
			<a href="<?php echo U('Home/Index/index');?>" target="_blank" class="topnavimg">网站首页</a>
		</div>
	</div>
</div>
<div class="nav-topb"></div>
<div style="float:left" id="my_menu" class="sdmenu">
	<div>
		<span><a href="<?php echo U('Admin/Index/index');?>">后台首页</a></span>
	</div>
	<div>	
		<span>首页<i class="glyphicon glyphicon-plus" aria-hidden="true"></i></span>
		<a href="<?php echo U('Banner/index', array('classify' => 1));?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Banner图设置</a>
		<a href="<?php echo U('Aboutus/shouye');?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;关于什马</a>
		<a href="<?php echo U('Carousel/index');?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;轮播图设置</a>
		<a href="<?php echo U('Brand/index');?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;合作品牌</a>
		<a href="<?php echo U('Nav/index');?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;底部导航设置</a>
		<a href="<?php echo U('Add/index', array('classify' => 1));?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;首页附加信息</a>
	</div>
	<div>
		<span>借款申请<i class="glyphicon glyphicon-plus" aria-hidden="true"></i></span>
		<a href="<?php echo U('Banner/edit', array('id' => 6 ));?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Banner设置</a>
		<a href="<?php echo U('Icon/index');?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Banner图标设置</a>
		<a href="<?php echo U('Banner/index', array('classify' => 4));?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;商家中部设置</a>
		<a href="<?php echo U('Product/index');?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;商家产品设置</a>
		<a href="<?php echo U('Add/index', array('classify' => 2));?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;商家附加信息</a>
		<a href="<?php echo U('Banner/edit', array('id' => 16));?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;消费者商品分期</a>
		<a href="<?php echo U('Productf/index', array('classify' => 16));?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;消费者商品图</a>
		<a href="<?php echo U('Banner/edit', array('id' => 17));?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;消费者现金分期</a>
		<a href="<?php echo U('Productf/index', array('classify' => 17));?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;消费者现金图</a>
		<a href="<?php echo U('Add/index', array('classify' => 3));?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;消费者附加信息</a>
	</div>
	<div>
		<span>关于什马<i class="glyphicon glyphicon-plus" aria-hidden="true"></i></span>
		<a href="<?php echo U('Banner/edit', array('id' => 5));?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Banner图设置</a>
		<a href="<?php echo U('Aboutus/index');?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;什马介绍</a>
		<a href="<?php echo U('Develop/index');?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;发展历程</a>
		<a href="<?php echo U('Team/index');?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;核心团队</a>
		<a href="<?php echo U('Info/index', array('id' => 1));?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;小暖炉助学计划</a>
		<a href="<?php echo U('Add/index', array('classify' => 4));?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;附加信息</a>
	</div>
	<div>
		<span>新闻资讯<i class="glyphicon glyphicon-plus" aria-hidden="true"></i></span>
		<a href="<?php echo U('Banner/edit', array('id' => 9));?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Banner设置</a>
		<a href="<?php echo U('Banner/index', array('classify' => 8));?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;新闻Banner图</a>
		<a href="<?php echo U('Article/index', array('cate_id' => 1));?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;什马新闻</a>
		<a href="<?php echo U('Article/index', array('cate_id' => 2));?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;行业动态</a>
		<a href="<?php echo U('Add/index', array('classify' => 5));?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;附加信息</a>
	</div>
	<div>
		<span>老板商学院<i class="glyphicon glyphicon-plus" aria-hidden="true"></i></span>
		<a href="<?php echo U('Banner/edit', array('id' => 10));?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Banner设置</a>
		<a href="<?php echo U('Info/index', array('id' => 2));?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;商学院简介</a>
		<a href="<?php echo U('Banner/edit', array('id' => 18));?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;什马大讲堂</a>
		<a href="<?php echo U('Banner/edit', array('id' => 11));?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;老板社区</a>
		<a href="<?php echo U('Add/index', array('classify' => 6));?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;附加信息</a>
	</div>
	<div>	
		<span>联系我们<i class="glyphicon glyphicon-plus" aria-hidden="true"></i></span>
		<a href="<?php echo U('Banner/edit', array('id' => 12));?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Banner设置</a>
		<a href="<?php echo U('Department/index');?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;地点部门设置</a>
		<a href="<?php echo U('Post/index');?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;职位设置</a>
		<a href="<?php echo U('Qc/index');?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;问题栏目</a>
		<a href="<?php echo U('Question/index');?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;问题设置</a>
		<a href="<?php echo U('Message/index');?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;留言信息</a>
		<a href="<?php echo U('Add/index', array('classify' => 7));?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;附加信息</a>
	</div>
	<div><span></span></div>
	<div>
		<span><a href="<?php echo U('Admin/Index/index');?>">移动端管理</a></span>
	</div>
	<div>	
		<span>首页<i class="glyphicon glyphicon-plus" aria-hidden="true"></i></span>
		<a href="<?php echo U('Bannerm/index', array('classify' => 1));?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Banner图设置</a>
	</div>
	<div>	
		<span>老板商学院<i class="glyphicon glyphicon-plus" aria-hidden="true"></i></span>
		<a href="<?php echo U('Bannerm/edit', array('id' => 3));?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Banner图设置</a>
	</div>
	<div>	
		<span>学习视频<i class="glyphicon glyphicon-plus" aria-hidden="true"></i></span>
		<a href="<?php echo U('Videoc/index');?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;栏目设置</a>
		<a href="<?php echo U('Video/index');?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;视频设置</a>
	</div>
	<div><span></span></div>
	<?php if(is_array($user_auth_list)): $i = 0; $__LIST__ = $user_auth_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo[0][auth_id] != 1): ?><div>
		<span><?php echo ($vo[0]['auth_name']); ?><i class="glyphicon glyphicon-plus" aria-hidden="true"></i></span>
		<?php if(is_array($vo)): $i = 0; $__LIST__ = array_slice($vo,1,null,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i; if($val['status'] == 1): ?><a href="<?php echo U($val['auth_url']) ?>"><?php echo ($val["auth_name"]); ?></a><?php endif; endforeach; endif; else: echo "" ;endif; ?>
	</div><?php endif; endforeach; endif; else: echo "" ;endif; ?>

</div>

<div class="cont">
	<div class="contmain">
		
		<!-- 账号信息 -->
		<div class="boxi">
		
			<div class="boxil">
				<img src="/Public/Admin/images/iconhead.png" alt="" />
				<div>
					<h1><?php echo ($login_user_data["username"]); ?><span><?php echo ($role_info["role_name"]); ?></span></h1>
					<h4>登录次数：<?php echo (session('login_times')); ?><span>上次登录：<?php echo date('Y-m-d H:i:s',session('last_login_time')) ?> </span></h4>
					<h4 class="let3">登&nbsp;录&nbsp;IP：<?php echo long2ip(session('last_login_ip')) ?></h4>
					
					
					<div class="btnblue">
						<a href="<?php echo U('User/password');?>" class="btn btna">修改个人信息</a>
					</div>
				
				</div>
			</div>
			
			<div class="boxir">
				<div>
					<a href="javascript:;"><?php echo ($article_total); ?><br/><span>全部文章</span></a>
					<a href="<?php echo U('Article/checkListing');?>"><?php echo ($article_uncheck_num); ?><br/><span>未审核文章</span></a>
					
					
				</div>
				<div style="clear:both;"></div>
				<div class="btnblue">
					<a href="<?php echo U('Article/listing');?>" class="btn btna">文章列表</a>
				</div>
			</div>
		</div>
		
		<!-- 系统信息 访问来源 -->
		<div class="boxii">
			
			<div class="boxil">
				<h1>系统信息</h1>
				<ul>
					<li><span>服务器操作系统：</span><span><?php echo ($server_data["os"]); ?></span></li>
					<li><span>Socket支持：</span><span><?php echo $server_data['is_socket'] == 1 ? '是' : '否'; ?></span></li>
					<li><span>GD版本：</span><span><?php echo ($server_data["gd"]["GD Version"]); ?></span></li>
					<li><span>上传文件：</span><span><?php echo ($server_data["upload"]); ?></span></li>
				</ul>
				<ul>
					<li><span>PHP版本：</span><span><?php echo ($server_data["php_version"]); ?></span></li>
					<li><span>Web服务器：</span><span><?php echo ($server_data["web"]); ?></span></li>
					<li><span>时区设置：</span><span><?php echo ($server_data["timezone"]); ?></span></li>
					<li><span>程序编码：</span><span>UTF-8</span></li>
					<li><span>服务器ip：</span><span><?php echo ($server_data["host_ip"]); ?></span></li>
				</ul>
				
			</div>
			
		</div>
		



	
	</div>
</div>
<script src="/Public/Admin/js/sdmenu.js"></script>
</body>
</html>