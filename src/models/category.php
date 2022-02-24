<?php

namespace Eraasoft\Mvc\models;
use Eraasoft\Mvc\core\registry;
class category{
    public function getAllCategory(){
        return registry::get('db')->select("categorys")->get();
    }
    public function addCategory($data){
        $data = $data;
        return registry::get('db')->insert("categorys",['data'=>$data])->save();
    }
}