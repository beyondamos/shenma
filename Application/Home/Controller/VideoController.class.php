<?php
namespace Home\Controller;
use Home\Controller\HomeBaseController;

class VideoController extends HomeBaseController
{
    public function index()
    {
        $videocs = D('Videoc')->order('id asc')->select();
        $this->assign('videocs', $videocs);
        $this->display();
    }

    /**
     * 栏目列表
     * @return [type] [description]
     */
    public function index2()
    {

        $id = I('get.id');
        $videoc = D('Videoc')->find($id);
        $videos = D('Video')->where(array('cate_id' => $id))->select();
        $this->assign('videos', $videos);
        $this->assign('videoc', $videoc);
        $this->display();
    }

    public function vplay()
    {
        $id = I('get.id');
        $video = D('Video')->find($id);
        $this->assign('video', $video);
        $this->display();
    }

}