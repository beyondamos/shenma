<?php
namespace Home\Controller;

use Home\Controller\HomeBaseController;

/**
 * 贷款控制器
 */
class LoansController extends HomeBaseController
{

	/**
	 * [index description]
	 * @return [type] [description]
	 */
	public function index()
	{

		$banner = D('Banner')->find(6);
		$this->assign('banner', $banner);
		//图标
		$icons = D('Icon')->select();
		$this->assign('icons', $icons);
		//中部banner
		$banners = D('Banner')->where(array('classify' => 4))->select();
		$this->assign('banners', $banners);
		$this->display();
	}

	public function index2()
	{
		$banner = D('Banner')->find(6);
		$this->assign('banner', $banner);
		//图标
		$icons = D('Icon')->select();
		$this->assign('icons', $icons);
		$this->display();
	}

}