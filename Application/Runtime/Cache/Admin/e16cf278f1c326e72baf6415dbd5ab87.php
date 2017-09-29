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
		<a href="<?php echo U('Banner/index', array('classify' => 1));?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Banner图设置</a>
		<a href="<?php echo U('Aboutus/shouye');?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;关于什马</a>
		<a href="<?php echo U('Carousel/index');?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;轮播图设置</a>
		<a href="<?php echo U('Brand/index');?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;合作品牌</a>
		<a href="<?php echo U('Nav/index');?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;底部导航设置</a>
		<a>借款申请</a>
		<a href="<?php echo U('Banner/edit', array('id' => 6 ));?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Banner设置</a>
		<a href="<?php echo U('Icon/index');?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Banner图标设置</a>
		<a href="<?php echo U('Banner/index', array('classify' => 4));?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;商家中部设置</a>
		<a href="<?php echo U('Product/index');?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;商家产品设置</a>
		<a href="<?php echo U('Banner/edit', array('id' => 16));?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;消费者商品分期</a>
		<a href="<?php echo U('Productf/index', array('classify' => 16));?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;消费者商品图</a>
		<a href="<?php echo U('Banner/edit', array('id' => 17));?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;消费者现金分期</a>
		<a href="<?php echo U('Productf/index', array('classify' => 17));?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;消费者现金图</a>
		<a>关于什马</a>
		<a href="<?php echo U('Banner/edit', array('id' => 5));?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Banner图设置</a>
		<a href="<?php echo U('Aboutus/index');?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;什马介绍</a>
		<a href="<?php echo U('Develop/index');?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;发展历程</a>
		<a href="<?php echo U('Team/index');?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;核心团队</a>
		<a href="<?php echo U('Info/index', array('id' => 1));?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;小暖炉助学计划</a>
		<a>新闻资讯</a>
		<a href="<?php echo U('Banner/edit', array('id' => 9));?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Banner设置</a>
		<a href="<?php echo U('Banner/index', array('classify' => 8));?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;新闻Banner图</a>
		<a href="<?php echo U('Article/index', array('cate_id' => 1));?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;什马新闻</a>
		<a href="<?php echo U('Article/index', array('cate_id' => 2));?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;行业动态</a>
		<a>老板商学院</a>
		<a href="<?php echo U('Banner/edit', array('id' => 10));?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Banner设置</a>
		<a href="<?php echo U('Info/index', array('id' => 2));?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;商学院简介</a>
		<a href="<?php echo U('Banner/edit', array('id' => 18));?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;什马大讲堂</a>
		<a href="<?php echo U('Banner/edit', array('id' => 11));?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;老板社区</a>
		<a>联系我们</a>
		<a href="<?php echo U('Banner/edit', array('id' => 12));?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Banner设置</a>
		<a href="<?php echo U('Department/index');?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;地点部门设置</a>
		<a href="<?php echo U('Post/index');?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;职位设置</a>
		<a href="<?php echo U('Qc/index');?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;问题栏目</a>
		<a href="<?php echo U('Question/index');?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;问题设置</a>
		<a href="<?php echo U('Message/index');?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;留言信息</a>
	</div>
	<?php if(is_array($user_auth_list)): $i = 0; $__LIST__ = $user_auth_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo[0][auth_id] != 1): ?><div>
		<span><?php echo ($vo[0]['auth_name']); ?><i class="glyphicon glyphicon-plus" aria-hidden="true"></i></span>
		<?php if(is_array($vo)): $i = 0; $__LIST__ = array_slice($vo,1,null,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i; if($val['status'] == 1): ?><a href="<?php echo U($val['auth_url']) ?>"><?php echo ($val["auth_name"]); ?></a><?php endif; endforeach; endif; else: echo "" ;endif; ?>
	</div><?php endif; endforeach; endif; else: echo "" ;endif; ?>
</div>

<div class="cont">
	<div class="contmain">

		<div class="boxi">
			<h1>添加文章</h1>

			<form action="<?php echo U('Article/add');?>" method="post" enctype="multipart/form-data">
				<div class="boxinb">
					<span>文章标题</span><input type="text" class="form-control"  name="title">
				</div>
				<div class="boxinb">
					<span>网页标题</span><input type="text" class="form-control"  name="web_title">
				</div>
				<div class="boxinb">
					<span>信息属性</span>
					<label><input type="checkbox" name="is_top"/>首页头条</label>
					<label><input type="checkbox" name="is_recommend"/>首页多条推荐</label>
					<label><input type="checkbox" name="status"/>发布</label>
				</div>
				<div class="boxinb">
					<div class="boxinbl">
						<span class="lets2">作&nbsp;&nbsp;&nbsp;&nbsp;者</span><input type="text" class="form-control" name="author" value="<?php echo ($login_user_data["nickname"]); ?>">
					</div>
					<div class="boxinbr">
						<span class="lets2">日&nbsp;&nbsp;&nbsp;&nbsp;期</span><input type="text" id="demo"  class="form-control laydate-icon" name="newstime"  value="">
					</div>
				</div>
				<div class="boxinb">
					<span class="lets2">点&nbsp;击&nbsp;量</span><input type="text"  class="form-control"  value="0"  name="click">
				</div>
				<div class="boxinb">
					<span class="lets3">关&nbsp;键&nbsp;词</span><input type="text"  class="form-control" placeholder="多个关键词用“,”半角逗号隔开"  name="keywords">
				</div>
				<div class="boxinb">
					<span>标题图片</span>
					<a href="javascript:;" class="form-control upfn"><input type="file" id='file_upload'  name="file_upload" /></a><i class="upfnb"></i>
				</div>
				<div class="boxtextb">
					<span>内容简介</span><textarea  rows="6" class="form-control" name="synopsis"></textarea>
				</div>

				<div class="boxuediter">
					<div class="lets2">正&nbsp;&nbsp;&nbsp;&nbsp;文</div>


					<div class="uediter">
						
						<textarea id="editor_id" name="content" style="width:700px;height:300px;">

						</textarea>

					</div>
				</div>
				<div class="boxinbtn">
					<input type="hidden" name="cate_id" value="<?php echo ($cate_id); ?>">
					<input type="submit"  value="确定" class="btn btna" />
					<input type="reset" value="重置" class="btn btnb" />
				</div>

			</form>
		</div>

	</div>
</div>
<script>
	;!function(){
		laydate({
			elem: '#demo'
		})
	}();
</script>
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