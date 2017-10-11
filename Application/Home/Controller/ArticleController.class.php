<?php
namespace Home\Controller;
use Home\Controller\HomeBaseController;

/**
 * 前台文章控制器
 */
class ArticleController extends HomeBaseController
{
	/**
	 * 手机列表页
	 * @return [type] [description]
	 */
	public function listing($cate_id)
	{
		$category = D('Category')->where(array('cate_id' => $cate_id))->find();
		$this->assign('category', $category);
		$model = D('Article');
		$articles = $model->where(array('status' => 1, 'cate_id' => $cate_id))->order('newstime desc')->select();
		$this->assign('articles', $articles);
		$this->display();
	}


	/**
	 * 视频播放
	 * @param  [type] $article_id [description]
	 * @return [type]             [description]
	 */
	public function vplay($article_id)
	{
		$model = D('Article');
		$model->where(array('article_id' => $article_id))->setInc('hits');
		$article = $model->find($article_id);
		$this->assign('article', $article);
		$this->display();
	}

	/**
	 * PC端文章列表页面
	 * @return [type] [description]
	 */
	public function index()
	{
				//seo
		$seo = D('Seo')->find(4);
		$this->assign('seo', $seo);
		//banner设置
		$banner  = D('Banner')->find(9);
		$this->assign('banner', $banner);
		$where = array();
		//小banner轮播图
		$banners = D('Banner')->where(array('classify' => 8))->order('sort')->select();
		$this->assign('banners', $banners);

		$cate_id = I('get.cate_id');
		if (!empty($cate_id)) {
			$where[] = array('cate_id' => $cate_id);
			$this->assign('cate_id', $cate_id);
		}

		$keyword = I('get.keyword');
		if ($keyword) {
			$where[] = array('title' => array('like', '%'.$keyword.'%'));
			$this->assign('keyword', $keyword);
		}

		$p = I('get.p') ? I('get.p') : 1;

		$article = D('Article');
		// 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
		$articles = $article->where($where)->order('newstime desc')->page($p.',9')->select();
		$this->assign('articles',$articles);// 赋值数据集
		$count	= $article->where($where)->count();// 查询满足要求的总记录数
		$Page       = new \Think\Pagehome($count,9);// 实例化分页类 传入总记录数和每页显示的记录数
		$show       = $Page->show();// 分页显示输出
		$this->assign('page',$show);// 赋值分页输出

		$this->display();
	}

	/**
	 * 前台内容页面
	 * @return [type] [description]
	 */
	public function detail($article_id)
	{


		$model = D('Article');
		//增加点击量
		$model->where(array('article_id' => $article_id))->setInc('click');

		$article = $model->find($article_id);
		// $category = D('Category')->find($article['cate_id']);

		$last_article = $model->where(array('status' => 1, 'cate_id' => $article['cate_id'], 'article_id' => array('LT', $article_id)))->order('article_id desc')->find();
		$next_article = $model->where(array('status' => 1, 'cate_id' => $article['cate_id'], 'article_id' => array('GT', $article_id)))->order('article_id asc')->find();

		$this->assign('article', $article);
		// $this->assign('category', $category);
		$this->assign('last_article', $last_article);
		$this->assign('next_article', $next_article);


		$this->display();
	}

}
