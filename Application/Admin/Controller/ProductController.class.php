<?php
namespace Admin\Controller;

use Admin\Controller\CommonController;

/**
 * 产品控制器
 */
class ProductController extends CommonController
{
	/**
	 * 产品列表
	 * @return [type] [description]
	 */
	public function index()
	{
		$product_model = D('Product');
		$products = $product_model->select();
		$this->assign('products', $products);
		$this->display();
	}

	/**
	 * 添加banner
	 */
	public function add()
	{
		if (IS_POST) {
			$product_model = D('Product');
			if ($product_model->create()) {
				if ($product_model->add()) {
					$this->success('产品添加成功', U('Product/index'), 1);
				} else {
					$this->error('产品添加失败');
				}
			} else {
				$this->error($product_model->getError());
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
			$product_model = D('Product');
            if($product_model->create()){

                if($product_model->save() !== false){
                    $this->success('产品编辑成功');
                }else{
                    $this->error('产品编辑失败！');
                }
            }else{
                $this->error($product_model->getError());
            }

		} elseif (IS_GET) {
			$id = I('get.id');
			$product_model = D('Product');
			$product = $product_model->find($id);
			$this->assign('product', $product);
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
        $product_model = D('Product');
        if($product_model->delete($id)){
            $this->success('产品删除成功', U('Product/index'), 1);
        }else{
            $this->error('产品删除失败');
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
