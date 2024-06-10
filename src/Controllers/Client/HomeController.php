<?php
namespace Admin\Php2MvcOop\Controllers\Client;

use Admin\Php2MvcOop\Commons\Controller;
use Admin\Php2MvcOop\Models\Product;

class HomeController extends Controller{
    public function index(){
        $name = "Thảo";
        $this->renderViewClient('home', [
            'name'=> $name
        ]);
    }
}