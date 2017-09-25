<?php
namespace Admin\Controller;

use Admin\Controller\CommonController;


/**
 * 职位控制器
 */
class PostController extends CommonController
{
    /**
     * 职位列表
     */
    public function index(){
        if(IS_GET){
            $search_name = I('get.name');
            if($search_name) $map['a.name'] = array('like',"%{$search_name}%");
            $this->assign('search_name',$search_name);
        }

        //职位数据
        $post_model = D('Post');
        $p = I('get.p') ? I('get.p') : 1;
        $post_data = $post_model->alias('a')->field('a.id,a.name,d.name as part')
            ->join('left join __DEPARTMENT__ d on a.cate_id = d.id')->where($map)->order('a.id desc')->page($p.',10')->select();
        $this->assign('post_data',$post_data);
        //分页数据
        $count = $post_model->alias('a')->where($map)->count();
        $page_model = new \Think\Page($count,10);
        $show = $page_model->show(); //分页输出显示
        $this->assign('show',$show);
        $this->display();
    }

    /**
     * 添加职位
     */
    public function add(){
    	if(IS_POST){
            $post_model = D('Post');
            if($post_model->create()){
                if($post_model->add()){
                    $this->success('职位添加成功',U('Post/index'),1);
                }else{
                    $this->error('职位添加失败');
                }
            }else{
                $this->error($post_model->getError());
            }
    	}elseif(IS_GET){

            $department_model = D('Department');
            $department_data = $department_model->getSortCategories();
            $this->assign('department_data',$department_data);

    		$this->display();
    	}
    }

    /**
     * 职位编辑
     * @return [type] [description]
     */
    public function edit(){
        if(IS_POST){
            $post_model = D('Post');
            if($post_model->create()){
                if($post_model->save()){
                    $this->success('职位编辑成功',U('Post/index'),1);
                }else{
                    $this->error('职位编辑失败');
                }
            }else{
                $this->error($post_model->getError());
            }


        }elseif(IS_GET){
            //文章数据
            $post_id = I('get.id');
            $post_model = D('Post');
            $post_data = $post_model->find($post_id);
            $this->assign('post_data' , $post_data);
            $department_model = D('Department');
            $department_data = $department_model->getSortCategories();
            $this->assign('department_data',$department_data);
            $this->display();
        }


    }   



    /**
     * 职位删除
     */
    public function delete(){
    	$id = I('get.id');
        $post_model = D('Post');
        if($post_model->delete($id)){
            $this->success('职位删除成功', U('Post/index') ,1);
        }else{
            $this->error('职位删除失败');
        }
    }



}