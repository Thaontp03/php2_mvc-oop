<?php
namespace Admin\Php2MvcOop\Controllers\Client;

use Admin\Php2MvcOop\Commons\Controller;

class ProductController extends Controller{
    public function index(){
        echo __CLASS__ . '@' . __FUNCTION__;
    }
    public function detail($id){
        echo __CLASS__ . '@' . __FUNCTION__ . '@' . $id;
    }
}