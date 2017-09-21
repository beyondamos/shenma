<?php
namespace Home\Controller;

use Home\Controller\HomeBaseController;

/**
 * 关于我们
 */
class AboutController extends HomeBaseController
{
	public function index()
	{
		//banner
		$banner = D('Banner')->find(5);
		$this->assign('banner', $banner);
		//什马介绍
		$info = D('About')->find(1);
		$this->assign('info', $info);
		//发展历程
		$develops = D('Develop')->order('sort asc')->select();
		$this->assign('develops', $develops);

		$model = D('Article');
		$articles = $model->where(array('status' => 1, 'cate_id' => 14))->select();
		$this->assign('articles', $articles);
		$this->display();
	}

	

}
