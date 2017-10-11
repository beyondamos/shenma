<?php
namespace Home\Controller;

use Home\Controller\HomeBaseController;

/**
 * 老板商学院
 */
class EduController extends HomeBaseController
{
	public function index()
	{
				//seo
		$seo = D('Seo')->find(5);
		$this->assign('seo', $seo);
		//banner
		$banner = D('Banner')->find(10);
		$this->assign('banner', $banner);
		//简介
		$info = D('Info')->find(2);
		$this->assign('info', $info);
		//什马大讲堂
		$jiangtang = D('Banner')->find(18);
		$this->assign('jiangtang', $jiangtang);	

		//老板社区
		$shequ = D('Banner')->find(11);
		$this->assign('shequ', $shequ);



		$this->display();
	}
}
