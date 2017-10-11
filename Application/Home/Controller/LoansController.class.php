<?php
namespace Home\Controller;

use Home\Controller\HomeBaseController;

/**
 * 贷款控制器
 */
class LoansController extends HomeBaseController
{

	/**
	 * [index description]
	 * @return [type] [description]
	 */
	public function index()
	{
		//banner
		$banner = D('Banner')->find(6);
		$this->assign('banner', $banner);
		//图标
		$icons = D('Icon')->select();
		$this->assign('icons', $icons);
		//中部banner
		$banners = D('Banner')->where(array('classify' => 4))->select();
		$this->assign('banners', $banners);
		//产品
		$products = D('Product')->select();
		$this->assign('products', $products);

		//附加信息
		$adds = D('Add')->where(array('classify' => 2))->order('id asc')->select();
		$this->assign('adds', $adds);

		$this->display();
	}

	public function index2()
	{
		//banner
		$banner = D('Banner')->find(6);
		$this->assign('banner', $banner);
		//图标
		$icons = D('Icon')->select();
		$this->assign('icons', $icons);
		//商品分期banner
		$goods_banner = D('Banner')->find(16);
		$this->assign('goods_banner', $goods_banner);
		//商品产品图
		$goods_products = D('Productf')->where(array('classify' => 16))->order('sort asc')->select();
		$this->assign('goods_products', $goods_products);

		

		//现金分期banner
		$cash_banner = D('Banner')->find(17);
		$this->assign('cash_banner', $cash_banner);
		//现金产品图
		//商品产品图
		$cash_products = D('Productf')->where(array('classify' => 17))->order('sort asc')->select();
		$this->assign('cash_products', $cash_products);
		//附加信息
		$adds = D('Add')->where(array('classify' => 3))->order('id asc')->select();
		$this->assign('adds', $adds);

		$this->display();
	}

}