<?php if (!defined('THINK_PATH')) exit();?>				<?php if(is_array($departments)): $i = 0; $__LIST__ = $departments;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$department): $mod = ($i % 2 );++$i;?><a data-toggle="collapse" data-target="#claps-tit<?php echo ($i); ?>r">
						<div class="panel-info-titl"><!-- <img src="/Public/Home/img/navimg01.jpg" alt=""/><br/> --><?php echo ($department["name"]); ?></div>
					</a>
					<div id="claps-tit<?php echo ($i); ?>r" class="claps-area collapse <?php if($i == 1): ?>in <?php else: ?> on<?php endif; ?>">
						<div class="container-fluid">
							<div class="row">
								<?php if(is_array($posts)): $j = 0; $__LIST__ = $posts;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$post): $mod = ($j % 2 );++$j; if($post['cate_id'] == $department['id']): ?><li class="post" post="<?php echo ($post['id']); ?>"><a href="javascript:;" ><?php echo ($post["name"]); ?></a></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
							</div>
						</div>
					</div><?php endforeach; endif; else: echo "" ;endif; ?>