<?php
/**
 * 自定义导航控制器
 */
namespace Admin\Controller;
use Admin\Controller\CommonController;

class VideocController extends  CommonController{
    /**
     * 自定义导航列表
     */
    public function index(){
        $videoc_model = D('Videoc');
        $videoc_data = $videoc_model->getSortCategories();
        $this->assign('videoc_data', $videoc_data);
        $this->display();
    }

    /**
     * 自定义导航添加
     */
    public function add(){
        $videoc_model = D('Videoc');
        if(IS_POST){
            if($videoc_model->create()){
                if($videoc_model->add()){
                    $this->success('分类添加成功', U('Videoc/index'), 1);
                }else{
                    $this->error('分类添加失败');
                }
            }else{
                $this->error($videoc_model->getError());
            }
        }else{
            $videoc_data = D('Videoc')->where('parent_id = 0')->select();
            $this->assign('videoc_data', $videoc_data);
            $this->display();
        }
    }

    /**
     * 自定义导航编辑
     */
    public function edit(){
        if(IS_POST){
            $videoc_model = D('Videoc');
            if($videoc_model->create()){
                if($videoc_model->save()){
                    $this->success('分类编辑成功', U('Videoc/index') ,1);
                }else{
                    $this->error('分类编辑失败');
                }
            }else{
                $this->error($videoc_model->getError());
            }
        }else{
            $videoc_id = I('get.id');
            $videoc_model = D('Videoc');
            $videoc_data = $videoc_model->find($videoc_id);
            $this->assign('videoc_data', $videoc_data);
            $videocs = D('Videoc')->where('parent_id = 0')->select();
            $this->assign('videocs', $videocs);
            $this->display();
        }
    }

    /**
     * 自定义导航删除
     */
    public function delete(){
        $id = I('get.id');
        if(!$id || $id < 0) $this->error('非法操作');
        $videoc_model = D('Videoc');
        if($videoc_model->delete($id)){
            $this->success('分类删除成功');
        }else{
            $this->error('分类删除失败');
        }
    }


}