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
	<!--<a href="#nav-left"><img src="/Public/Mobile/images//iconhead.png" /></a>-->
	<span>老板商学院</span>
</div>


<div class="cont">
	<div class="headbt"></div>
	<!--头部图片-->
	<div class="boxcontv">
		<!--<video controls="controls" autoplay loop id="videoa"><source src="/Public/Mobile/images//v.mp4" type="video/mp4"></video>-->
		<video controls="controls" preload="auto" autoplay="autoplay" loop="loop" width="100%" height="auto">  
			<source  src="<?php echo ($article["video"]); ?>" type="video/mp4" >
		</video><!-- -->
 
	</div>
</div>

</body>
</html>