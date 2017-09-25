<?php
namespace Admin\Controller;

use Admin\Controller\CommonController;

/**
 * Banner上的图标设置
 */
class IconController extends CommonController
{

	public function index()
	{
		$icons = D('Icon')->order('id asc')->select();
		$this->assign('icons', $icons);
		$this->display();
	}


	public function edit()
	{
		if (IS_POST) {
			$icon_model = D('Icon');
            if($icon_model->create()){
                if($_FILES['file_upload']['error'] != 4 ){
                    $icon_model->thumbnail = ltrim(C('UPLOAD').$this->upload() ,'.');
                }
                if($icon_model->save()){
                    $this->success('Banner图标编辑成功', U('Icon/index'), 1);
                }else{
                    $this->error('Banner图标编辑失败！');
                }
            }else{
                $this->error($icon_model->getError());
            }

		} elseif (IS_GET) {
			$id = I('get.id');
			$icon_model = D('Icon');
			$icon = $icon_model->find($id);
			$this->assign('icon', $icon);
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