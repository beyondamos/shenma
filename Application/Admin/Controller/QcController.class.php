<?php
namespace Admin\Controller;

use Admin\Controller\CommonController;


/**
 * 问题分类控制器
 */
class QcController extends CommonController
{
	/**
	 * 团队列表
	 * @return [type] [description]
	 */
	public function index()
	{
		$qc_model = D('Qc');
		$qcs = $qc_model->select();
		$this->assign('qcs', $qcs);
		$this->display();
	}

	/**
	 * 添加banner
	 */
	public function add()
	{
		if (IS_POST) {
			$qc_model = D('Qc');
			if ($qc_model->create()) {
				if ($qc_model->add()) {
					$this->success('问题分类信息添加成功', U('Qc/index'), 1);
				} else {
					$this->error('问题分类信息添加失败');
				}
			} else {
				$this->error($qc_model->getError());
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
			$qc_model = D('Qc');
            if($qc_model->create()){
                if($qc_model->save()){
                    $this->success('问题分类信息编辑成功', U('Qc/index'), 1);
                }else{
                    $this->error('问题分类团队信息编辑失败！');
                }
            }else{
                $this->error($qc_model->getError());
            }

		} elseif (IS_GET) {
			$id = I('get.id');
			$qc_model = D('Qc');
			$qc = $qc_model->find($id);
			$this->assign('qc', $qc);
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
        $qc_model = D('Qc');
        if($qc_model->delete($id)){
            $this->success('问题分类信息删除成功', U('Qc/index'), 1);
        }else{
            $this->error('问题分类信息删除失败');
        }
	}

}