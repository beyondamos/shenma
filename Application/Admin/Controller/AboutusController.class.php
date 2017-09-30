<?php
namespace Admin\Controller;

use Admin\Controller\CommonController;

/**
 * 关于什马 简介
 */
class AboutusController extends CommonController
{
	/**
	 * 关于我们页面的什马简介
	 * @return [type] [description]
	 */
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

	/**
	 * 首页的
	 */
	public function shouye()
	{
		$model = D('About');
		if (IS_POST) {
			if ($model->create()) {

				if ($model->save() !== false) {
					$this->success('修改信息成功');
				} else {
					$this->error('修改信息失败');
				}
			}
		} elseif (IS_GET) {
			$info = $model->find(2);
			$this->assign('info', $info);
			$this->display();
		}
	}



	 /**
     * 文件上传
     * @return [type] [description]
     */
    public function upload(){
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =      C('UPLOAD'); // 设置附件上传根目录
        $upload->autoSub = true;
        $upload->subName = array('date','Ymd');
        $upload->saveName = time().'_'.mt_rand();
        // 上传文件 
        $info   =   $upload->upload();
        if(!$info) {// 上传错误提示错误信息
           $this->error($upload->getError());
        }else{// 上传成功 获取上传文件信息
            foreach($info as $file){
              return $file['savepath'].$file['savename'];
           }
        }
    }


    public function up()
    {
        $this->ajaxReturn($this->upload());
    }

}