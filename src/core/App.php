<?php

namespace Eraasoft\Mvc\core;

class App{

    /**
     * @var $controller
     */
    private $controller;

    /**
     * @var method
     */
    private $method;


    /**
     * @var $params
     */
    private $params;


    public function __construct()
    {
        $this->buildUrl();
        $this->run();
    }


    private function buildUrl(){
      $url = $_SERVER['QUERY_STRING'];
      $url = explode("/",$url);

      $this->controller = (!empty($url[0])) ? $url[0] : "user";

      $this->method = (!empty($url[1])) ? $url[1] : "index";

      unset($url[0],$url[1]);

      $this->params = $url;
    }

    private function run(){
        $controller = "Eraasoft\Mvc\controllers\\".$this->controller;
        if(class_exists($controller)){
            $controller = new $controller;
            call_user_func_array([$controller,$this->method],$this->params);
        }else{
            call_user_func_array(["Eraasoft\Mvc\controllers\\Error","index"],[]);
        }
    }


}