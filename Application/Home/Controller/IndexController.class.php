<?php
namespace Home\Controller;
use Home\Controller\HomeBaseController;

/**
 * 首页控制器
 */
class IndexController extends HomeBaseController 
{

    /**
     * pC端首页
     * @return [type] [description]
     */
    public function index()
    {
        //banner
        $banner_model = D('Banner');
        $banners = $banner_model->where(array('classify' => 1))->order('sort asc')->select();
        $this->assign('banners', $banners);
        //关于什马
        $about = D('About')->find(2);
        $this->assign('about', $about);

        $model = D('Article');
        $articles = $model->where(array('status' => 1, 'cate_id' => array('in', '12,13')))
                            ->order('article_id desc')->limit(6)->select();
        $this->assign('articles', $articles);

        //合作品牌
        $brands = D('Brand')->where(array('status' => 1))->select();
        $this->assign('brands', $brands);

        $this->display();
    }



	/**
	 * 手机端首页
	 * @return [type] [description]
	 */
    public function indexM(){
    	//手机端内容
    	$model = D('Category');
    	$categories = $model->select();
    	

        $article_model = D('Article');
        $articles = $article_model->field('cate_id, sum(hits) as zans')->group('cate_id')->select();
        $category_info = array();
        foreach ($categories as $category) {
            foreach ($articles as $article) {
                if ($category['cate_id'] == $article['cate_id']) {
                    $category['zans'] = $article['zans']; 
                }
            }
            $category_info[] = $category;
        }
        $this->assign('categories', $category_info);
    	$this->display();
    }

}

