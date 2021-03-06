<?php
namespace Admin\Controller;

use Admin\Controller\CommonController;

class TeamController extends CommonController
{
	/**
	 * 团队列表
	 * @return [type] [description]
	 */
	public function index()
	{
		$team_model = D('Team');
		$teams = $team_model->select();
		$this->assign('teams', $teams);
		$this->display();
	}

	/**
	 * 添加banner
	 */
	public function add()
	{
		if (IS_POST) {
			$team_model = D('Team');
			if ($team_model->create()) {

				if ($team_model->add()) {
					$this->success('团队信息添加成功', U('Team/index'), 1);
				} else {
					$this->error('团队信息添加失败');
				}
			} else {
				$this->error($team_model->getError());
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
			$team_model = D('Team');
            if($team_model->create()){

                if($team_model->save() !== false){
                    $this->success('团队信息编辑成功');
                }else{
                    $this->error('团队信息编辑失败！');
                }
            }else{
                $this->error($team_model->getError());
            }

		} elseif (IS_GET) {
			$id = I('get.id');
			$team_model = D('Team');
			$team = $team_model->find($id);
			$this->assign('team', $team);
			$this->display();
		}
		
	}


	/**
	 * 删除信息
	 * @return [type] [description]
	 */
	public function delete()
	{
		$id = I('get.id');
        $team_model = D('Team');
        if($team_model->delete($id)){
            $this->success('团队信息删除成功', U('Team/index'), 1);
        }else{
            $this->error('团队信息删除失败');
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