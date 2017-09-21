<?php
namespace Home\Controller;

use Home\Controller\HomeBaseController;

/**
 * 联系我们
 */
class ContactController extends HomeBaseController
{
	public function index()
	{
		$this->display();
	}

	/**
	 * 留言
	 * @return [type] [description]
	 */
	public function message()
	{
		if (IS_POST) {
			$model = D('Message');
			if ($model->create()) {
				$model->createtime  = time();
				if ($model->add()) {
					$this->success('留言成功', U('Contact/index'),1);
				} else {
					$this->error('留言失败');
				}
			} else {
				$this->error($model->getError());
			}
		}
	}

}