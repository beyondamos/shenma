<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <title>甫劳科技后台管理系统</title>
    <link href="/Public/Admin/css/base.css" rel="stylesheet" type="text/css"/>
    <link href="/Public/Admin/css/bootstrap.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="/Public/Admin/js/html5shiv.js"></script>
    <script src="/Public/Admin/js/respond.min.js"></script>
    <![endif]-->
    <script src="/Public/Admin/js/jquery-1.11.1.min.js"></script>

    <script src="/Public/Admin/js/bootstrap.min.js"></script>
<!--引入CSS-->
<link rel="stylesheet" type="text/css" href="/Public/Admin/uploader/webuploader.css">
<!--引入JS-->
<script type="text/javascript" src="/Public/Admin/uploader/webuploader.js"></script>
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
		<a href="<?php echo U('Add/index', array('classify' => 1));?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;首页附加信息</a>
		<a>借款申请</a>
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
		<a>关于什马</a>
		<a href="<?php echo U('Banner/edit', array('id' => 5));?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Banner图设置</a>
		<a href="<?php echo U('Aboutus/index');?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;什马介绍</a>
		<a href="<?php echo U('Develop/index');?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;发展历程</a>
		<a href="<?php echo U('Team/index');?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;核心团队</a>
		<a href="<?php echo U('Info/index', array('id' => 1));?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;小暖炉助学计划</a>
		<a href="<?php echo U('Add/index', array('classify' => 4));?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;附加信息</a>
		<a>新闻资讯</a>
		<a href="<?php echo U('Banner/edit', array('id' => 9));?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Banner设置</a>
		<a href="<?php echo U('Banner/index', array('classify' => 8));?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;新闻Banner图</a>
		<a href="<?php echo U('Article/index', array('cate_id' => 1));?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;什马新闻</a>
		<a href="<?php echo U('Article/index', array('cate_id' => 2));?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;行业动态</a>
		<a href="<?php echo U('Add/index', array('classify' => 5));?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;附加信息</a>
		<a>老板商学院</a>
		<a href="<?php echo U('Banner/edit', array('id' => 10));?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Banner设置</a>
		<a href="<?php echo U('Info/index', array('id' => 2));?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;商学院简介</a>
		<a href="<?php echo U('Banner/edit', array('id' => 18));?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;什马大讲堂</a>
		<a href="<?php echo U('Banner/edit', array('id' => 11));?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;老板社区</a>
		<a href="<?php echo U('Add/index', array('classify' => 6));?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;附加信息</a>
		<a>联系我们</a>
		<a href="<?php echo U('Banner/edit', array('id' => 12));?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Banner设置</a>
		<a href="<?php echo U('Department/index');?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;地点部门设置</a>
		<a href="<?php echo U('Post/index');?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;职位设置</a>
		<a href="<?php echo U('Qc/index');?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;问题栏目</a>
		<a href="<?php echo U('Question/index');?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;问题设置</a>
		<a href="<?php echo U('Message/index');?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;留言信息</a>
		<a href="<?php echo U('Add/index', array('classify' => 7));?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;附加信息</a>
	</div>
	<?php if(is_array($user_auth_list)): $i = 0; $__LIST__ = $user_auth_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo[0][auth_id] != 1): ?><div>
		<span><?php echo ($vo[0]['auth_name']); ?><i class="glyphicon glyphicon-plus" aria-hidden="true"></i></span>
		<?php if(is_array($vo)): $i = 0; $__LIST__ = array_slice($vo,1,null,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i; if($val['status'] == 1): ?><a href="<?php echo U($val['auth_url']) ?>"><?php echo ($val["auth_name"]); ?></a><?php endif; endforeach; endif; else: echo "" ;endif; ?>
	</div><?php endif; endforeach; endif; else: echo "" ;endif; ?>
</div>

    <div class="cont">
       <div class="contmain">

          <div class="boxi">
             <h1>编辑轮播图</h1>

             <form action="<?php echo U('Carousel/edit');?>" method="post" enctype="multipart/form-data">
                <div class="boxin">
                   <span>轮播图名称</span><input type="text" name="name" class="form-control" value="<?php echo ($carousel["name"]); ?>">
               </div>
              <div class="boxinb">
              <span>左侧图</span><span>665x955</span>
                    <div id="uploader-demo">
                        <!--用来存放item-->
                        
                        <div id="filePicker1">选择图片</div>
                        <input id="thumbnail1" type="hidden" name="thumbnail1" value="<?php echo ($carousel["thumbnail1"]); ?>">
                        <img id="oldimg1" src="<?php echo ($carousel["thumbnail1"]); ?>" width="300px" height="200px">
                        <div id="fileList1" class="uploader-list"></div>
                    </div>
              </div>
                            <div class="boxinb">
              <span>右侧图</span><span>1255x955</span>
                    <div id="uploader-demo">
                        <!--用来存放item-->
                        
                        <div id="filePicker2">选择图片</div>
                        <input id="thumbnail2" type="hidden" name="thumbnail2" value="<?php echo ($carousel["thumbnail2"]); ?>">
                        <img id="oldimg2" src="<?php echo ($carousel["thumbnail2"]); ?>" width="300px" height="200px">
                        <div id="fileList2" class="uploader-list"></div>
                    </div>
              </div>
                            <div class="boxinb">
              <span>右侧隐藏图</span><span>1255x955</span>
                    <div id="uploader-demo">
                        <!--用来存放item-->
                        
                        <div id="filePicker3">选择图片</div>
                        <input id="thumbnail3" type="hidden" name="thumbnail3" value="<?php echo ($carousel["thumbnail3"]); ?>">
                        <img id="oldimg3" src="<?php echo ($carousel["thumbnail3"]); ?>" width="300px" height="200px">
                        <div id="fileList3" class="uploader-list"></div>
                    </div>
              </div>
                <div class="boxinb">
                   <span>顺&nbsp;&nbsp;&nbsp;&nbsp;序</span><input type="text" name="sort" class="form-control" value="<?php echo ($carousel["sort"]); ?>">
               </div>
               <input type="hidden" name="id" value="<?php echo ($carousel["id"]); ?>">
            <div class="boxinbtn">
               <input type="submit"  value="确定" class="btn btna" />
               <input type="reset"  value="重置" class="btn btnb" />
           </div>

       </form>
   </div>

</div>
</div>
<script src="/Public/Admin/js/sdmenu.js"></script>

<script type="text/javascript">
var $list=$("#fileList1");   //这几个初始化全局的百度文档上没说明，好蛋疼。 
   // var $btn =$("#ctlBtn");   //开始上传  
   var thumbnailWidth = 100;   //缩略图高度和宽度 （单位是像素），当宽高度是0~1的时候，是按照百分比计算，具体可以看api文档  
   var thumbnailHeight = 100;  
// 初始化Web Uploader
var uploader = WebUploader.create({
    // 选完文件后，是否自动上传。
    auto: true,
    // swf文件路径
    swf: '/Public/Admin/uploader/Uploader.swf',
    // 文件接收服务端。
    server: '<?php echo U('Admin/Banner/up');?>',
    // 选择文件的按钮。可选。
    // 内部根据当前运行是创建，可能是input元素，也可能是flash.
    pick: '#filePicker1',
    // // 只允许选择图片文件。
    // accept: {
    //     title: 'Images',
    //     extensions: 'gif,jpg,jpeg,bmp,png',
    //     mimeTypes: 'image/*'
    // }
});

   // 文件上传成功，给item添加成功class, 用样式标记上传成功。  
   uploader.on( 'uploadSuccess', function( file , response) {  
        $("#oldimg1").attr('src', '/Public/Upload/'+response);
        $("#thumbnail1").attr('value', '/Public/Upload/'+response);
   });  

</script>





<script type="text/javascript">
var $list=$("#fileList2");   //这几个初始化全局的百度文档上没说明，好蛋疼。 
   // var $btn =$("#ctlBtn");   //开始上传  
   var thumbnailWidth = 100;   //缩略图高度和宽度 （单位是像素），当宽高度是0~1的时候，是按照百分比计算，具体可以看api文档  
   var thumbnailHeight = 100;  
// 初始化Web Uploader
var uploader = WebUploader.create({
    // 选完文件后，是否自动上传。
    auto: true,
    // swf文件路径
    swf: '/Public/Admin/uploader/Uploader.swf',
    // 文件接收服务端。
    server: '<?php echo U('Admin/Banner/up');?>',
    // 选择文件的按钮。可选。
    // 内部根据当前运行是创建，可能是input元素，也可能是flash.
    pick: '#filePicker2',
    // // 只允许选择图片文件。
    // accept: {
    //     title: 'Images',
    //     extensions: 'gif,jpg,jpeg,bmp,png',
    //     mimeTypes: 'image/*'
    // }
});

   // 文件上传成功，给item添加成功class, 用样式标记上传成功。  
   uploader.on( 'uploadSuccess', function( file , response) {  
        $("#oldimg2").attr('src', '/Public/Upload/'+response);
        $("#thumbnail2").attr('value', '/Public/Upload/'+response);
   });  

</script>






<script type="text/javascript">
var $list=$("#fileList3");   //这几个初始化全局的百度文档上没说明，好蛋疼。 
   // var $btn =$("#ctlBtn");   //开始上传  
   var thumbnailWidth = 100;   //缩略图高度和宽度 （单位是像素），当宽高度是0~1的时候，是按照百分比计算，具体可以看api文档  
   var thumbnailHeight = 100;  
// 初始化Web Uploader
var uploader = WebUploader.create({
    // 选完文件后，是否自动上传。
    auto: true,
    // swf文件路径
    swf: '/Public/Admin/uploader/Uploader.swf',
    // 文件接收服务端。
    server: '<?php echo U('Admin/Banner/up');?>',
    // 选择文件的按钮。可选。
    // 内部根据当前运行是创建，可能是input元素，也可能是flash.
    pick: '#filePicker3',
    // // 只允许选择图片文件。
    // accept: {
    //     title: 'Images',
    //     extensions: 'gif,jpg,jpeg,bmp,png',
    //     mimeTypes: 'image/*'
    // }
});

   // 文件上传成功，给item添加成功class, 用样式标记上传成功。  
   uploader.on( 'uploadSuccess', function( file , response) {  
        $("#oldimg3").attr('src', '/Public/Upload/'+response);
        $("#thumbnail3").attr('value', '/Public/Upload/'+response);
   });  

</script>


</body>
</html>