<?php
/**
 * 自定义导航模型
 */
namespace Common\Model;
use Think\Model;

class NavModel extends Model{

	/**
	 * 获得排序好的分类
	 * @return array  
	 */
	public function getSortCategories(){
		return $this->_infiniteClass($this->select());
	}


	/**
	 * 无限级分类
	 * @param array $array  需要排序的数组
	 * @param int 	$parent_id	开始排序的父级id
	 * @param int 	$level 当前分类的深度
	 * @return array        排序好的数组
	 */
	private function _infiniteClass($array,$parent_id = 0,$level = 0){
		static $list = array();
		foreach($array as $val){
			if($val['parent_id'] == $parent_id){
				$val['level'] = $level;
				$list[] = $val;
				$this->_infiniteClass($array,$val['id'],$level+1);
			}
		}
		return $list;
	}

	/**
	 * 判断父级分类
	 * @param  int $cate_id 当前分类的id
	 * @param  int $parent_id 选择的父级id
	 */
	public function judgeParentClass($cate_id,$parent_id){
		//上级分类不能选择自身
		if($cate_id == $parent_id) return false;
		//上级分类不能选择子类
		$parent_id = $this->where(array('cate_id' => $parent_id))->getField('parent_id');
		if($cate_id == $parent_id) return false;
		return true;
	}

	/**
	 * 删除分类
	 * @param $cate_id
	 * @return bool
	 */
	public function deleteCategory($cate_id){
		//该分类下存在子类则不能删除
		$category_info = $this->where(array('parent_id' => $cate_id))->find();
		if($category_info) return false;
		//如果该分类下存在文章，则不能删除分类
		$article_model = D('Article');
		$article_info = $article_model->where(array('cate_id' => $cate_id))->find();
		if($article_info) return false;
		if(!$this->delete($cate_id)) return false;
		return true;
	}

	/**
	 * 获取分类的子类  如果有返回子类数组  如果没有就返回当前分类
	 * @param int $cate_id 当前分类
	 */
	public function getSub($cate_id){
		$category_info = $this->select();
		$list[] = $cate_id;
		foreach($category_info as $val){
			if($val['parent_id'] == $cate_id){
				$list[] = $val['cate_id'];
				$this->getSub($val['cate_id']);
			}
		}
		return $list;
	}




}