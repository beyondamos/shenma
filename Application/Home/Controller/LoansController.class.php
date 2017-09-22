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
		$this->display();
	}

	public function index2()
	{
		$banner = D('Banner')->find(6);
		$this->assign('banner', $banner);
		$this->display();
	}

}