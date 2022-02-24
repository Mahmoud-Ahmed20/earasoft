<?php

namespace Eraasoft\Mvc\controllers;

use Eraasoft\Mvc\core\Basecontroller;
use Eraasoft\Mvc\models\category;
class User extends Basecontroller {

    public function index(){
        $category = new category();
        $data = $category->getAllCategory();

        $title = "user index";
        $this->view('user/index',['title'=>$title , 'data'=>$data]);
    }

    public function add(){
        $title='add';
        
        $this->view('user/add',['title'=>$title]);
        
    }
}