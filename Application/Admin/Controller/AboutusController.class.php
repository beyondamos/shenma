<?php
namespace Admin\Controller;

use Admin\Controller\CommonController;

/**
 * 关于什马 简介
 */
class AboutusController extends CommonController
{
	public function index()
	{

		$model = D('About');
		if (IS_POST) {
			if ($model->create()) {
				if ($model->save()) {
					$this->success('修改信息成功');
				} else {
					$this->error('修改信息失败');
				}
			}
		} elseif (IS_GET) {
			$info = $model->find(1);
			$this->assign('info', $info);
			$this->display();
		}
		
	}
}