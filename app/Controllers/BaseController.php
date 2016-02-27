<?php

namespace App\Controllers;

use Smarty;

/**
 * BaseController
 */

class BaseController
{

    public $view;

    public $smarty;

    public function construct__(){

    }

    public function smarty(){
	ini_set('allow_url_include', 1);
        $smarty=new smarty(); //实例化smarty
        $smarty->settemplatedir(BASE_PATH.'/views/default/'); //设置模板文件存放目录
        $smarty->setcompiledir('gs://sound-url.appspot.com/'); //设置生成文件存放目录
        $smarty->setcachedir('gs://sound-url.appspot.com/'); //设置缓存文件存放目录
        $this->smarty = $smarty;
        return $smarty;
    }

    public function view(){
        return $this->smarty();
    }
}
