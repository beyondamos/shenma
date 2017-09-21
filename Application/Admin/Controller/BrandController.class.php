<?php
/**
 * 友情链接控制器
 */
namespace Admin\Controller;
use Admin\Controller\CommonController;

class BrandController extends CommonController{
    /**
     * 品牌信息列表展示
     */
    public function index(){
        $brand_model = D('Brand');
        $brand_data = $brand_model->select();
        $this->assign('brand_data', $brand_data);
        $this->display();
    }

    /**
     * 添加友情链接
     */
    public function add(){
        if(IS_POST){
           $brand_model = D('brand');
           if($brand_model->create()){
                if($_FILES['file_upload']['error'] != 4 ){
                    $brand_model->thumbnail = ltrim(C('UPLOAD').$this->upload() ,'.');
                }
               if($brand_model->add()){
                   $this->success('合作品牌添加成功', U('brand/index'), 1);
               }else{
                    $this->error('合作品牌添加失败');
               }
           }else{
                $this->error($brand_model->getError());
           }
        }else{
            $this->display();
        }
    }

    /**
     * 友情链接编辑
     */
    public function edit(){
        if(IS_POST){
            $brand_model = D('brand');
            if($brand_model->create()){
                if($_FILES['file_upload']['error'] != 4 ){
                    $brand_model->thumbnail = ltrim(C('UPLOAD').$this->upload() ,'.');
                }
                if($brand_model->save()){
                    $this->success('合作品牌编辑成功', U('brand/index'), 1);
                }else{
                    $this->error('合作品牌编辑失败！');
                }
            }else{
                $this->error($brand_model->getError());
            }
        }else{
            $id = I('get.id');
            $brand_model = D('brand');
            $brand_data = $brand_model->find($id);
            $this->assign('brand_data', $brand_data);
            $this->display();
        }
    }

    /**
     * 删除友情链接
     */
    public function delete(){
        $id = I('get.id');
        $brand_model = D('brand');
        if($brand_model->delete($id)){
            $this->success('合作品牌删除成功', U('brand/index'), 1);
        }else{
            $this->error('合作品牌删除失败');
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