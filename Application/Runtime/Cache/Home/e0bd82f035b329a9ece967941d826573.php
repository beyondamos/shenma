<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="Zh-cn">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<title>什马金融-老板商学院</title>
	<link href="/Public/Mobile/css/normalize.css" rel="stylesheet" type="text/css" />
	<link href="/Public/Mobile/css/basem.css" rel="stylesheet" type="text/css">
	<link href="/Public/Mobile/css/menudown.css" rel="stylesheet" type="text/css" />
	<link href="/Public/Mobile/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<script src="/Public/Mobile/js/jquery-2.1.1.min.js"></script>
	<script src="/Public/Mobile/js/item.js"></script>
	<script src="/Public/Mobile/js/menudown.js" ></script>
	<script src="/Public/Mobile/js/bootstrap.min.js"></script>
</head>
<body>



<div class="head">
	<!--<a href="#nav-left"><img src="/Public/Mobile/images/iconhead.png" /></a>-->
	<span>老板商学院</span>
</div>


<div class="cont">
	<div class="headbt"></div>
	<!--头部图片-->
	<div class="boxcont">
		<div class="toplimt"><img src="/Public/Mobile/images/
		<?php if($category['parent_id'] == 2){ echo 'bktop01.jpg'; } elseif ($category['parent_id'] == 3) { echo 'bktop02.jpg'; } ?>" alt="" /><h1><?php echo ($category["cate_name"]); ?></h1></div>
	</div>
<div class="vlist">
	<?php if(is_array($articles)): $i = 0; $__LIST__ = $articles;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Article/vplay', array('article_id' => $vo['article_id']));?>"><div class="vlist-item vlist-item-<?php if($category['parent_id'] == 2){ echo 'yellow'; } elseif ($category['parent_id'] == 3) { echo 'blue'; } ?>">
				<h1><?php echo ($vo["title"]); ?></h1>
				<img src="/Public/Mobile/images/iconv.png" alt="" />
			</div></a><?php endforeach; endif; else: echo "" ;endif; ?>	


</div>
	
</div>

</body>
</html>