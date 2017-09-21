<?php
namespace Admin\Controller;

use Admin\Controller\CommonController;

/**
 * 发展历程控制器
 */
class DevelopController extends CommonController
{
	/**
	 * 发展历程列表
	 * @return [type] [description]
	 */
	public function index()
	{
		$model = D('Develop');
		$develops = $model->select();
		$this->assign('develops', $develops);
		$this->display();
	}

	/**
	 * 添加发展历程
	 */
	public function add()
	{
		if (IS_POST) {
			$model = D('Develop');
			if ($model->create()) {
				//如有有图片上传
				if ($_FILES['file_upload']['error'] != 4) {
					$model->thumbnail = ltrim(C('UPLOAD').$this->upload() ,'.');
				}
				if ($model->add()) {
					$this->success('发展历程添加成功', U('Develop/index'), 1);
				} else {
					$this->error('发展历程添加失败');
				}
			} else {
				$this->error($model->getError());
			}
		} else {
			$this->display();
		}
	}


	/**
	 * banner编辑
	 * @return [type] [description]
	 */
	public function edit()
	{
		if (IS_POST) {
			$develop_model = D('Develop');
            if($develop_model->create()){
                if($_FILES['file_upload']['error'] != 4 ){
                    $develop_model->thumbnail = ltrim(C('UPLOAD').$this->upload() ,'.');
                }
                if($develop_model->save()){
                    $this->success('发展历程编辑成功', U('Develop/index'), 1);
                }else{
                    $this->error('发展历程编辑失败！');
                }
            }else{
                $this->error($develop_model->getError());
            }

		} elseif (IS_GET) {
			$id = I('get.id');
			$develop_model = D('Develop');
			$develop = $develop_model->find($id);
			$this->assign('develop', $develop);
			$this->display();
		}
		
	}



	/**
	 * 删除发展历程
	 * @return [type] [description]
	 */
	public function delete()
	{
		$id = I('get.id');
        $develop_model = D('Develop');
        if($develop_model->delete($id)){
            $this->success('发展历程删除成功', U('Develop/index'), 1);
        }else{
            $this->error('发展历程删除成功');
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
