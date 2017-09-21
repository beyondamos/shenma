<?php
namespace Admin\Controller;

use Admin\Controller\CommonController;

/**
 * 后台留言控制器
 */
class MessageController extends CommonController
{
	/**
	 * 留言列表
	 * @return [type] [description]
	 */
	public function index()
	{
		$model = D('Message');
		$messages = $model->order('id desc')->select();
		$this->assign('messages', $messages);
		$this->display();
	}

	/**
	 * 留言详情
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function info($id)
	{
		$message = D('Message')->find($id);
		$this->assign('message', $message);
		$this->display();
	}

	public function delete($id)
	{
		$message = D('Message');
		if ($message->delete($id)) {
			$this->success('删除留言成功', U('Message/index') ,1);
		}
	}

}