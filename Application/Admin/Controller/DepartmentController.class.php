<?php
namespace Admin\Controller;

use Admin\Controller\CommonController;

/**
 * 地点部门控制器
 */
class DepartmentController extends CommonController
{
    /**
     * 分类列表
     */
    public function index(){
        $department_model = D('Department');
        $department_data = $department_model->getSortCategories();
        $this->assign('department_data',$department_data);
        $this->display();
    }


    /**
     * 添加分类
     */
    public function add(){
        if(IS_POST){
            $department_model = D('Department');
            if($department_model->create()){
                if($department_model->add()){
                    $this->success('分类添加成功', U('Department/index'),1);
                }else{
                    $this->error('分类添加失败');
                }
            }else{
                $this->error($department_model->getError());
            }
        }elseif(IS_GET){
            $department_model = D('Department');
            $department_data = $department_model->getSortCategories();
            $this->assign('department_data', $department_data);
            $this->display();
        }
    }

    /**
     * 分类编辑
     * @return [type] [description]
     */
    public function edit(){
        if(IS_POST){
            $department_model = D('Department');
            if(!$department_model->judgeParentClass(I('post.id'),I('post.parent_id'))) $this->error('分类选择错误');
            if($department_model->create()){
                if($department_model->save()){
                    $this->success('编辑分类成功',U('Department/index'),1);
                }else{  
                    $this->error('分类编辑失败');
                }
            }else{
                $this->error($department_model->getError());
            }
        }elseif(IS_GET){
            $cate_id = I('get.id');
            $department_model = D('Department');
            $department_info = $department_model->find($cate_id);
            $this->assign('department_info', $department_info);
            $department_data = $department_model->getSortCategories();
            $this->assign('department_data', $department_data);
            $this->display();
        }
    }

    /**
     * 删除分类
     * 分类下存在子类不能删除
     * 分类下存在文章不能删除
     */
    public function delete(){
        $id = I('get.id');
        $department_model = D('Department');
        if($department_model->deleteCategory($id)){
            $this->success('删除部门信息成功');
        }else{
            $this->error('删除部门信息失败');
        }
    }
}