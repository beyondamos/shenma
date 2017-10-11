<?php
namespace Admin\Controller;

use Admin\Controller\CommonController;

class SeoController extends CommonController
{
	/**
	 * 列表
	 * @return [type] [description]
	 */
	public function index()
	{
		$seos = D('Seo')->order('id asc')->select();
		$this->assign('seos', $seos);
		$this->display();
	}

	/**
	 * 编辑
	 * @return [type] [description]
	 */
	public function edit()
	{
		$seo_model = D('Seo');
		if (IS_POST) {
			if ($seo_model->create()) {
				if ($seo_model->save() !== false ) {
					$this->success('信息更新成功', U('Seo/index'), 1);
				} else {
					$this->error('信息更新错误');
				}
			} else {
				$this->error($seo_model->getError());
			}
		} else {
			$id = I('get.id');
			$seo = $seo_model->find($id);
			$this->assign('seo', $seo);
			$this->display();
		}
		
	}


}
