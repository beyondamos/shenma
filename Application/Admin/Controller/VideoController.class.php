<?php
/**
 * 视频控制器
 */
namespace Admin\Controller;
use Admin\Controller\CommonController;

class VideoController extends  CommonController{
    /**
     * 自定义导航列表
     */
    public function index(){
        $video_model = D('Video');
        $video_data = $video_model->field('v.id, v.title, c.name')->alias('v')->join('LEFT JOIN __VIDEOC__ c on v.cate_id = c.id')->select();
        $this->assign('video_data', $video_data);
        $this->display();
    }

    /**
     * 自定义导航添加
     */
    public function add(){
        $video_model = D('Video');
        if(IS_POST){
            if($video_model->create()){
                if($video_model->add()){
                    $this->success('视频添加成功', U('Video/index'), 1);
                }else{
                    $this->error('视频添加失败');
                }
            }else{
                $this->error($video_model->getError());
            }
        }else{
            $videoc_data = D('Videoc')->getSortCategories();
            $this->assign('videoc_data', $videoc_data);
            $this->display();
        }
    }

    /**
     * 自定义导航编辑
     */
    public function edit(){
        if(IS_POST){
            $video_model = D('Video');
            if($video_model->create()){
                if($video_model->save()){
                    $this->success('视频编辑成功', U('Video/index') ,1);
                }else{
                    $this->error('视频编辑失败');
                }
            }else{
                $this->error($video_model->getError());
            }
        }else{
            $video_id = I('get.id');
            $video_model = D('Video');
            $video_data = $video_model->find($video_id);
            $this->assign('video_data', $video_data);
            $videoc_data = D('Videoc')->getSortCategories();
            $this->assign('videoc_data', $videoc_data);
            $this->display();
        }
    }

    /**
     * 自定义导航删除
     */
    public function delete(){
        $id = I('get.id');
        if(!$id || $id < 0) $this->error('非法操作');
        $video_model = D('Videoc');
        if($video_model->delete($id)){
            $this->success('分类删除成功');
        }else{
            $this->error('分类删除失败');
        }
    }


}