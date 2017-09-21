<?php
/**
 * 后台首页控制器
 */
namespace Admin\Controller;
use Admin\Controller\CommonController;

class IndexController extends CommonController {
    /**
     * 后台首页展示
     */
    public function index(){
        //文章信息
        $article_model = D('Article');
        $article_total = $article_model->count();
        $this->assign('article_total' , $article_total);
        $article_uncheck_num  = $article_model->where(array('status' => 0))->count();
        $this->assign('article_uncheck_num', $article_uncheck_num);

        //服务器信息
        $server_data = array(
            'os'=>PHP_OS,
            'php_version' => PHP_VERSION,
            // 'mysql_version' => mysqli_get_server_info(),
            'is_socket'=> extension_loaded('sockets'),
            'timezone'  =>    date_default_timezone_get(),
            'gd' => gd_info(),
            'web'   => $_SERVER["SERVER_SOFTWARE"],
            'upload'=>ini_get('upload_max_filesize'),
            'host_ip'=> GetHostByName($_SERVER['SERVER_NAME']),
        );
        $this->assign('server_data' , $server_data);


        $this->display();
    }

}