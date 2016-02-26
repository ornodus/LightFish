<?php

namespace App\Controllers;

/**
 *  HomeController
 */

class HomeController extends BaseController
{

    public function home()
    {
        return $this->view()->display('index.tpl');
	//file_put_contents('gs://sound-url.appspot.com/hello.txt', 'Hello');
    }


}
