<?php
namespace Eraasoft\Mvc\core;


class Basecontroller{
    public function __call($name,$param){
        echo "this method :".$name."Not found";
    }

    protected function view($path,$data){
        extract($data);
        require "../src/views/".$path.".php";
    }
}