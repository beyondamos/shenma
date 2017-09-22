<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="renderer" content="webkit">
	<title>甫劳科技后台管理系统</title>
	<link href="/Public/Admin/css/base.css" rel="stylesheet" type="text/css"/>
	<link href="/Public/Admin/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/Public/Admin/uploadify/uploadify.css" />
	<!--[if lt IE 9]>
	<script src="/Public/Admin/js/html5shiv.js"></script>
	<script src="/Public/Admin/js/respond.min.js"></script>
	<![endif]-->
	<script src="/Public/Admin/js/jquery-1.11.1.min.js"></script>
	<script src="/Public/Admin/js/bootstrap.min.js"></script>
	<script src="/Public/Admin/js/laydate/laydate.js"></script>
	<script charset="utf-8" src="/Public/Admin/kindeditor/kindeditor.js"></script>
	<script charset="utf-8" src="/Public/Admin/kindeditor/lang/zh_CN.js"></script>
	<script>
		KindEditor.ready(function(K) {
			window.editor = K.create('#editor_id');
		});
	</script>


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
					<img src="/Public/Admin/images/head.jpg" alt=""/><!--用户头像-->
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
		<span>内容管理<i class="glyphicon glyphicon-plus" aria-hidden="true"></i></span>
		<a>首页</a>
		<a href="<?php echo U('Banner/index');?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Banner图设置</a>
		<a href="<?php echo U('Aboutus/shouye');?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;关于什马</a>
		<a href="<?php echo U('Brand/index');?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;合作品牌</a>
		<a>借款申请</a>
		<a href="<?php echo U('Banner/index');?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Banner设置</a>
		<a>关于什马</a>
		<a href="<?php echo U('Banner/edit', array('id' => 5));?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Banner图设置</a>
		<a href="<?php echo U('Aboutus/index');?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;什马介绍</a>
		<a href="<?php echo U('Develop/index');?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;发展历程</a>
		<a href="<?php echo U('Banner/index');?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;核心团队</a>
		<a href="<?php echo U('Banner/index');?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;小暖炉助学计划</a>
		<a>新闻资讯</a>
		<a href="<?php echo U('Banner/index');?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;什马新闻</a>
		<a href="<?php echo U('Banner/index');?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;行业动态</a>
		<a>老板商学院</a>
		<a>联系我们</a>
		<a href="<?php echo U('Banner/index');?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;留言信息</a>
	</div>
	<?php if(is_array($user_auth_list)): $i = 0; $__LIST__ = $user_auth_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div>
		<span><?php echo ($vo[0]['auth_name']); ?><i class="glyphicon glyphicon-plus" aria-hidden="true"></i></span>
		<?php if(is_array($vo)): $i = 0; $__LIST__ = array_slice($vo,1,null,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i; if($val['status'] == 1): ?><a href="<?php echo U($val['auth_url']) ?>"><?php echo ($val["auth_name"]); ?></a><?php endif; endforeach; endif; else: echo "" ;endif; ?>
	</div><?php endforeach; endif; else: echo "" ;endif; ?>
</div>

<div class="cont">
	<div class="contmain">

		<div class="boxi">
			<h1>关于什马</h1>

			<form action="<?php echo U('Aboutus/shouye');?>" method="post" enctype="multipart/form-data">
				<div class="boxinb">
					<span>文章标题</span><input type="text" class="form-control"  name="title" value="<?php echo ($info["title"]); ?>">
				</div>
				<div class="boxinb">
					<span>标题图片</span>
					<a href="javascript:;" class="form-control upfn"><input type="file" id='file_upload'  name="file_upload" /></a><i class="upfnb"><?php echo ($info["thumbnail"]); ?></i>
				</div>
				<div class="boxinb">
                   <span>链&nbsp;接&nbsp;地&nbsp;址</span><input type="text" name="url" class="form-control" value="<?php echo ($info["url"]); ?>">
               </div>
				<div class="boxuediter">
					<div class="lets2">正&nbsp;&nbsp;&nbsp;&nbsp;文</div>
					<div class="uediter">
						<textarea id="editor_id" name="content" style="width:700px;height:300px;">
						<?php echo ($info["content"]); ?>
						</textarea>
					</div>
				</div>
				<div class="boxinbtn">
					<input type="hidden" name="id" value="<?php echo ($info["id"]); ?>">
					<input type="submit"  value="确定" class="btn btna" />
					<input type="reset" value="重置" class="btn btnb" />
				</div>

			</form>
		</div>

	</div>
</div>
<script src="/Public/Admin/js/sdmenu.js"></script>
<script>
	$().ready(function(){
		var date = new Date();
		var dateStr = date.getFullYear()+'-';
		var month = date.getMonth()+ 1;
		if(month < 10){
			month = '0'+month;
		}
		dateStr += month + '-';

		var day = date.getDate();
		if(day < 10){
			day = '0' + day;
		}
		dateStr += day;
//		alert(dateStr);
		$('#demo').val(dateStr);



		$(".upfn").on("change","input[type='file']",function(){
			var filePath = $(this).val();
			var arr = filePath.split('\\');
			var fileName = arr[arr.length-1];
			$(".upfnb").html(fileName);
		});


	});
</script>
</body>
</html>