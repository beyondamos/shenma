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
		$develops = D('Develop')->order('newstime asc')->select();
		$this->assign('develops', $develops);
		//核心团队
		$teams = D('Team')->order('sort asc')->select();
		$this->assign('teams', $teams);
		//小暖炉
		$nuanlu = D('Info')->find(1);
		$this->assign('nuanlu', $nuanlu);
		$this->display();
	}

	

}
