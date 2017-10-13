<?php
namespace Home\Controller;
use Think\Controller;

class HomeBaseController extends Controller
{
	/**
	 * 初始化
	 */
	public function _initialize()
	{
		// if (isMobile()) {
		// 	C('DEFAULT_THEME','Mobile');
		// }

		$this->assign('controller_name', CONTROLLER_NAME);
	}



}