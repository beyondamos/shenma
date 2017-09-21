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

		$model = D('Article');
		$articles = $model->where(array('status' => 1, 'cate_id' => 14))->select();
		$this->assign('articles', $articles);
		$this->display();
	}

	

}
