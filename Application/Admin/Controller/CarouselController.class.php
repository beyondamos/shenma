<?php
namespace Admin\Controller;

use Admin\Controller\CommonController;

/**
 * 轮播设置
 */
class CarouselController extends CommonController
{
	/**
	 * 轮播列表
	 * @return [type] [description]
	 */
	public function index()
	{
		$carousel_model = D('Carousel');
		$carousels = $carousel_model->select();
		$this->assign('carousels', $carousels);
		$this->display();
	}

	/**
	 * 添加banner
	 */
	public function add()
	{
		if (IS_POST) {
			$carousel_model = D('Carousel');
			if ($carousel_model->create()) {

				if ($carousel_model->add()) {
					$this->success('轮播图添加成功', U('Carousel/index'), 1);
				} else {
					$this->error('轮播图添加失败');
				}
			} else {
				$this->error($carousel_model->getError());
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
			$carousel_model = D('Carousel');
            if($carousel_model->create()){


                if($carousel_model->save() !== false){
                    $this->success('轮播图编辑成功');
                }else{
                    $this->error('轮播图编辑失败！');
                }
            }else{
                $this->error($carousel_model->getError());
            }

		} elseif (IS_GET) {
			$id = I('get.id');
			$carousel_model = D('Carousel');
			$carousel = $carousel_model->find($id);
			$this->assign('carousel', $carousel);
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
        $carousel_model = D('Carousel');
        if($carousel_model->delete($id)){
            $this->success('轮播图删除成功', U('Carousel/index'), 1);
        }else{
            $this->error('轮播图删除失败');
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