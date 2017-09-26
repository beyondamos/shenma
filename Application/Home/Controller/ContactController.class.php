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
		//banner
		$banner = D('Banner')->find(12);
		$this->assign('banner', $banner);

		//地点
		$locations = D('Department')->order('id asc')->select();
		$this->assign('locations', $locations);
		$parent_id = $locations[0]['id'];
		//部门
		$departments = D('Department')->where(array('parent_id' => $parent_id))->order('id asc')->select();
		$this->assign('departments', $departments);
		// $cate_id = $departments[0]['id'];
		//职位
		$posts = D('Post')->order('id asc')->select();
		$this->assign('posts', $posts);

		//问题
		$questions = D('Question')->select();
		$this->assign('questions', $questions);
		//问题类别
		$qcs = D('Qc')->select();
		$this->assign('qcs', $qcs);


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


	/**
	 * ajax获取职位信息
	 * @return [type] [description]
	 */
	public function getPostInfo()
	{
		$location_id = I('post.location_id');

		//部门
		$departments = D('Department')->where(array('parent_id' => $location_id))->order('id asc')->select();
		$this->assign('departments', $departments);
		// $cate_id = $departments[0]['id'];
		//职位
		$posts = D('Post')->order('id asc')->select();
		$this->assign('posts', $posts);
		$content = $this->fetch('getPostInfo');
		echo $content;
	}


	/**
	 * ajax获取职位信息
	 * @return [type] [description]
	 */
	public function getPost()
	{

		$post_id = I('post.post_id');
		//职位
		$post = D('Post')->find($post_id);
		$this->assign('post', $post);
		$content = $this->fetch('getPost');
		echo $content;
	}



}