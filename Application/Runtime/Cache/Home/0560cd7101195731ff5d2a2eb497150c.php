<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="Zh-cn">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<title>什马金融-老板商学院</title>
	<link href="/shenma/Public/Mobile/css/normalize.css" rel="stylesheet" type="text/css" />
	<link href="/shenma/Public/Mobile/css/basem.css" rel="stylesheet" type="text/css">
	<link href="/shenma/Public/Mobile/css/menudown.css" rel="stylesheet" type="text/css" />
	<link href="/shenma/Public/Mobile/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<script src="/shenma/Public/Mobile/js/jquery-2.1.1.min.js"></script>
	<script src="/shenma/Public/Mobile/js/item.js"></script>
	<script src="/shenma/Public/Mobile/js/menudown.js" ></script>
	<script src="/shenma/Public/Mobile/js/bootstrap.min.js"></script>
</head>
<body>



<div class="head">
	<!--<a href="#nav-left"><img src="/shenma/Public/Mobile/images/iconhead.png" /></a>-->
	<span>老板商学院</span>
</div>


<div class="cont">
	
	<!--头部选项开始-->
	<div class="headbt"></div>
	<div class="headbtn">
		<a href="javascript:;" id="btna"><img src="/shenma/Public/Mobile/images/btn01.jpg" alt/><span>秩序<br/>白银</span></a>
		<a href="javascript:;" id="btnb"><img src="/shenma/Public/Mobile/images/btn02.jpg" alt/><span>荣耀<br/>黄金</span></a>
		<a href="javascript:;" id="btnc"><img src="/shenma/Public/Mobile/images/btn03.jpg" alt/><span>尊贵<br/>白金</span></a>
		<a href="javascript:;" id="btnd"><img src="/shenma/Public/Mobile/images/btn04.jpg" alt/><span>永恒<br/>钻石</span></a>
	</div>
	<!--头部选项结束-->


	<!--秩序白银-->
	<div class="boxcont" id="areaa">

	<?php if(is_array($categories)): $i = 0; $__LIST__ = $categories;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo['parent_id'] == 2): ?><a href="<?php echo U('Article/listing', array('cate_id' => $vo['cate_id']));?>"><div class="boxitem">
			<div class="imglimt"><img src="/shenma/Public/Mobile/images/bkitem01.jpg" alt="" /><h1><?php echo ($vo['cate_name']); ?></h1></div>
			<div class="txtlimt">
				<h2><?php echo ($vo['description']); ?></h2>
			</div>
			<div class="boxitemz"><img src="/shenma/Public/Mobile/images/iconz.png" alt="" /><?php echo ($vo["zans"]); ?></div>
			<div class="boxitemarr"><img src="/shenma/Public/Mobile/images/arr.png" alt="" /></div>
		</div></a><?php endif; endforeach; endif; else: echo "" ;endif; ?>

	</div>

	<!--荣耀黄金-->
	<div class="boxcont" id="areab" style="display:none;">
	<?php if(is_array($categories)): $i = 0; $__LIST__ = $categories;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo['parent_id'] == 3): ?><a href="<?php echo U('Article/listing', array('cate_id' => $vo['cate_id']));?>"><div class="boxitem">
			<div class="imglimt"><img src="/shenma/Public/Mobile/images/bkitem02.jpg" alt="" /><h1><?php echo ($vo['cate_name']); ?></h1></div>
			<div class="txtlimt">
				<h2><?php echo ($vo['description']); ?></h2>
			</div>
			<div class="boxitemz"><img src="/shenma/Public/Mobile/images/iconz.png" alt="" /><?php echo ($vo["zans"]); ?></div>
			<div class="boxitemarr"><img src="/shenma/Public/Mobile/images/arr.png" alt="" /></div>
		</div></a><?php endif; endforeach; endif; else: echo "" ;endif; ?>
	</div>

	<!--尊贵白金-->
	<div class="boxcont" id="areac" style="display:none;">
		<?php if(is_array($categories)): $i = 0; $__LIST__ = $categories;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo['parent_id'] == 4): ?><a href="<?php echo U('Article/listing', array('cate_id' => $vo['cate_id']));?>"><div class="boxitem">
			<div class="imglimt"><img src="/shenma/Public/Mobile/images/bkitem01.jpg" alt="" /><h1><?php echo ($vo['cate_name']); ?></h1></div>
			<div class="txtlimt">
				<h2><?php echo ($vo['description']); ?></h2>
			</div>
			<div class="boxitemz"><img src="/shenma/Public/Mobile/images/iconz.png" alt="" /><?php echo ($vo["zans"]); ?></div>
			<div class="boxitemarr"><img src="/shenma/Public/Mobile/images/arr.png" alt="" /></div>
		</div></a><?php endif; endforeach; endif; else: echo "" ;endif; ?>
	</div>

	<!--永恒钻石-->
	<div class="boxcont" id="aread" style="display:none;">
			<?php if(is_array($categories)): $i = 0; $__LIST__ = $categories;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo['parent_id'] == 5): ?><a href="<?php echo U('Article/listing', array('cate_id' => $vo['cate_id']));?>"><div class="boxitem">
			<div class="imglimt"><img src="/shenma/Public/Mobile/images/bkitem01.jpg" alt="" /><h1><?php echo ($vo['cate_name']); ?></h1></div>
			<div class="txtlimt">
				<h2><?php echo ($vo['description']); ?></h2>
			</div>
			<div class="boxitemz"><img src="/shenma/Public/Mobile/images/iconz.png" alt="" /><?php echo ($vo["zans"]); ?></div>
			<div class="boxitemarr"><img src="/shenma/Public/Mobile/images/arr.png" alt="" /></div>
		</div></a><?php endif; endforeach; endif; else: echo "" ;endif; ?>
	</div>
	
</div>

</body>
</html>