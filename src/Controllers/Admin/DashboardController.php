<?php
namespace Admin\Php2MvcOop\Controllers\Admin;

use Admin\Php2MvcOop\Commons\Controller;


class DashboardController extends Controller{
    public function dashboard(){
        $this->renderViewAdmin(__FUNCTION__);
    }
}