<?php

require "../vendor/autoload.php";
use \Eraasoft\Mvc\core\App;



\Eraasoft\Mvc\core\registry::set("db",new \Islam\Eraamvc\db(["localhost","root",'','test']));




(new App());
