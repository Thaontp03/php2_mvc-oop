<?php
namespace Admin\Php2MvcOop\Controllers\Client;

use Admin\Php2MvcOop\Commons\Controller;

class AboutController extends Controller{
    public function index(){
        echo __CLASS__ . '@' . __FUNCTION__;
    }
}