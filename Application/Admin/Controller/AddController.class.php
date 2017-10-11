<?php
/**
 * Banner控制器
 */
namespace Admin\Controller;

use Admin\Controller\CommonController;

class AddController extends CommonController
{
	/**
	 * Banner列表
	 * @return [type] [description]
	 */
	public function index()
	{
		$classify = I('get.classify');
		$add_model = D('Add');
		$adds = $add_model->where(array('classify' => $classify))->select();
		$this->assign('adds', $adds);
		$this->assign('classify', $classify);
		$this->display();
	}

	/**
	 * 添加banner
	 */
	public function add()
	{
		if (IS_POST) {
			$add_model = D('Add');
			if ($add_model->create()) {
				if ($add_model->add()) {
					$this->success('信息添加成功', U('Add/index', array('classify' => I('post.classify'))), 1);
				} else {
					$this->error('信息添加失败');
				}
			} else {
				$this->error($add_model->getError());
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
			$add_model = D('Add');
            if($add_model->create()){
                if($add_model->save() !== false){
                    $this->success('信息编辑成功');
                }else{
                    $this->error('信息编辑失败！');
                }
            }else{
                $this->error($add_model->getError());
            }

		} elseif (IS_GET) {
			$id = I('get.id');
			$add_model = D('Add');
			$add = $add_model->find($id);
			$this->assign('add', $add);
			$this->display();
		}
		
	}


	/**
	 * 删除banner
	 * @return [type] [description]
	 */
	public function delete()
	{
		$id = I('get.id');
        $classify = I('get.classify');
        $add_model = D('Add');
        if($add_model->delete($id)){
            $this->success('信息删除成功', U('Add/index', array('classify' => $classify)), 1);
        }else{
            $this->error('信息删除失败');
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
