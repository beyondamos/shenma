<?php
namespace Admin\Controller;

use Admin\Controller\CommonController;

/**
 * 额外单信息控制器
 */
class InfoController extends CommonController
{
	public function index()
	{
		$model = D('Info');
		if (IS_POST) {
			if ($model->create()) {
				//如有有图片上传
				if ($_FILES['file_upload']['error'] != 4) {
					$model->thumbnail = ltrim(C('UPLOAD').$this->upload() ,'.');
				}
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



}