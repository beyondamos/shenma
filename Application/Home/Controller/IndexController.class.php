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
        
        $site_model = D('Config');
        //网站标题
        $site_title = $site_model->where('conf_id = 3')->getField('conf_value');
        $this->assign('site_title', $site_title);
        //网站关键字
        $site_keyword = $site_model->where('conf_id = 5')->getField('conf_value');
        $this->assign('site_keyword', $site_keyword);
        //网站描述
        $site_desc = $site_model->where('conf_id = 4')->getField('conf_value');
        $this->assign('site_desc', $site_desc);
        //banner
        $banner_model = D('Banner');
        $banners = $banner_model->where(array('classify' => 1))->order('sort asc')->select();
        $this->assign('banners', $banners);
        //关于什马
        $about = D('About')->find(2);
        $this->assign('about', $about);


        $model = D('Article');
        $top_article = $model->where(array('is_top' => 1))->order('newstime desc')->limit(1)->find();
        $this->assign('top_article', $top_article);

        $recommend_articles = $model->where(array('is_recommend' => 1))->order('newstime desc')->limit(5)->select();
        $this->assign('recommend_articles', $recommend_articles);

        //合作品牌
        $brands = D('Brand')->where(array('status' => 1))->select();
        $this->assign('brands', $brands);

        //底部导航
        $navs = D('Nav')->getSortCategories();
        $this->assign('navs', $navs);

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

