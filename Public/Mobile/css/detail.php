<div class="cont">
	<?php
	$uid =$_GET['uid'];
	$info =$db ->cx1("tlm_news","`del`='0' and `id`='".$uid."'");
	
	//判断cookie里有没有这篇文章
	if(empty($_COOKIE['hits'])){
		$h_id = array();
		$h_id[] =$info['id'];
		$xiug = true;
	}else{
		$h_id =$_COOKIE['hits'];
		$h_id=json_decode($h_id);
		if(in_array($info['id'],$h_id)){
			$xiug = false;
		}else{
			$h_id[]= $info['id'];
			$xiug = true;
		}
	}
	$h_id=json_encode($h_id);
	setcookie('hits',$h_id,time()+3600);
	$rand = rand(1,9);
	$hits = $info['hits'];
	//判断是否要修改点击数
	if($xiug) {
		$hits = $hits + $rand;
		$db->xiugai("tlm_news", "`hits` = '" . $hits . "'", "`id`=" . $uid);
	}

?>
	<!--文章头部标题部分-->
	<div class="headbt"></div>
	<div class="titart">
		<h1><?php echo $info['category']; ?></h1>
		<h2><?php echo $info['date']; ?></h2>
		<h3><span><?php echo $info['author']; ?></span></h3>
	</div>
	
	<!--文章头部摘要部分-->
	<div class="artlinel"><img src="/home/m/images/artlinel.jpg" alt="" /></div>
	<div class="artlinep">
		<p><?php echo $info['web_description']; ?></p>
	</div>
	<div class="artliner"><img src="/home/m/images/artliner.jpg" alt="" /></div>

	<!--文章内容部分-->
	<div class="artp">
		<?php echo $info['content']; ?>
	</div>

	<!--文章结尾二维码及分享部分-->
	<div class="artqrc">
		<?php
		$id = $_GET['id'];
		$twowm =  $db ->cx1("tlm_content","`del`='0' and `kid`='".$id."'","`content`");
		echo $twowm['content'];
		?>
		
		<div class="praise">
			<img src="/home/m/images/iconeye.png" alt="" /><span><?php echo $hits;?></span>
			<img src="/home/m/images/iconcomm.png" alt=""/><span>18</span>
			<a href="javascript:" id="zan"><img src="/home/m/images/iconstar.png" alt="" /> </a>
			<span id="zan_num"><?php echo $info['zan'] ?></span>
		</div>
		
		<div class="praisezan"><img src="/home/m/images/zan.png" alt="" /></div>
	
	</div>
	<script>
		$(function () {
			var dian = true;
			var url ='/home/m/m_ajax.php';
			$("#zan").click(function(){
				if( dian ) {
					dian = false;
					$.ajax({
						type:'post',
						url: url,
						data:{
							action : 'add',
							uid : <?php echo $info['id']?>,
						},
						success:(function(data){
							$("#zan_num").html(data);
						})
					});
				}else{
					dian = true;
					$.ajax({
						type:'post',
						url:url,
						data:{
							action : 'sub',
							uid : <?php echo $info['id']?>,
						},
						success:(function(data){
							$("#zan_num").html(data);
						})
					});
				}
			})
		});
	</script>
	
	<div class="space"></div><!--间隔-->
	
	
	<!--精彩推荐-->
	<div class="boxcont">
	
		<div class="titblue">精彩推荐</div>
		<?php
		$lista = $db ->cx("tlm_news","`kid`='".$info['kid']."' and `id` != '".$info['id']."' and `del`='0' order by `id` desc limit 5" );
		if(!empty($lista)){
			foreach ($lista as $k=>$row){
				?>
				<a href="/<?php echo $row['url'].'&uid='.$row['id']?>">
					<div class="boxitem">
						<div class="imglimt"><img src="<?php echo $row['thumbnail'];?>" alt="" /></div>
						<h2><?php echo $db->cut_str(trim(strip_tags($row['category'])),20) ;?></h2>
						<!--<h3><?php echo $db->cut_str(trim(strip_tags($row['web_description'])),15);?></h3>-->
						<div class="praise">
							<img src="/home/m/images/iconeye.png" alt="" /><span><?php echo $row['hits'];?></span>
							<img src="/home/m/images/iconcomm.png" alt=""/><span>18</span>
							<img src="/home/m/images/iconstar.png" alt="" /><span><?php echo $row['zan'];?></span>
							<!--<img src="/home/m/images/clock.png" alt=""/>--><span><?php echo substr($row['date'],5,5);?></span>
						</div>
					</div>
				</a>
			<?php }
			}?>
	</div>

</div>

</body>
</html>