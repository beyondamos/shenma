<?php
namespace Admin\Controller;

use Admin\Controller\CommonController;

/**
 * 问题控制器
 */
class QuestionController extends CommonController
{

	/**
	 * 问题列表
	 * @return [type] [description]
	 */
	public function index()
	{
		$question_model = D('Question');
		$questions = $question_model->select();
		$this->assign('questions', $questions);
		$this->display();
	}

	/**
	 * 添加问题
	 */
	public function add()
	{
		if (IS_POST) {
			$question_model = D('Question');
			if ($question_model->create()) {
				if ($question_model->add()) {
					$this->success('问题添加成功', U('Question/index'), 1);
				} else {
					$this->error('问题添加失败');
				}
			} else {
				$this->error($question_model->getError());
			}
		} else {
			$qc_model = D('Qc');
			$qcs = $qc_model->select();
			$this->assign('qcs', $qcs);
			$this->display();
		}
	}


	/**
	 * 问题编辑
	 * @return [type] [description]
	 */
	public function edit()
	{
		if (IS_POST) {
			$question_model = D('Question');
            if($question_model->create()){
                if($question_model->save()){
                    $this->success('问题编辑成功', U('Question/index'), 1);
                }else{
                    $this->error('问题编辑失败！');
                }
            }else{
                $this->error($question_model->getError());
            }

		} elseif (IS_GET) {
			$id = I('get.id');
			$question_model = D('Question');
			$question = $question_model->find($id);
			$this->assign('question', $question);
			$qc_model = D('Qc');
			$qcs = $qc_model->select();
			$this->assign('qcs', $qcs);
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
        $question_model = D('Question');
        if($question_model->delete($id)){
            $this->success('问题信息删除成功', U('Question/index'), 1);
        }else{
            $this->error('问题信息删除失败');
        }
	}

}
