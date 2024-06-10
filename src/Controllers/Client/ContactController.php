<?php
namespace Admin\Php2MvcOop\Controllers\Client;

use Admin\Php2MvcOop\Commons\Controller;

class ContactController extends Controller{
    public function index(){
        echo __CLASS__ . '@' . __FUNCTION__;
    }
    public function store(){
        echo __CLASS__ . '@' . __FUNCTION__;
    }
}