<?php

class router
{
    public $m = "";    //是要进入前台还是后台
    public $c = "";     //当前要引入哪个文件  以及实例化哪个对象
    public $a = "";    //调用这个类当中的什么方法

    function __construct()
    {

    }

    function jump()
    {
        $this->m = isset($_GET["m"]) ? $_GET["m"] : "index"; //index
        $this->c = isset($_GET["c"]) ? $_GET["c"] : "index";//index
        $this->a = isset($_GET["a"]) ? $_GET["a"] : "init";//init
        $filename = CONTROLLER_PATH . $this->m . DS . $this->c . "controller.php";
        $modelpath = MODEL_PATH . $this->m . DS . $this->c . "Model.php";
        if (is_file($modelpath)) {
            include $modelpath;
        }
        if (is_file($filename)) {
            include $filename;
            if (class_exists($this->c)) {
                $classname = $this->c;
                $obj = new $classname();
                if (method_exists($obj, $this->a)) {
                    $method = $this->a;
                    $obj->$method();
                } else {
                    echo "方法不存在";
                    include "404.html";
                }
            } else {
                echo "类不存在";
                include "404.html";
            }
        } else {
            echo "文件路径不存在";
            include "404.html";
        }
    }
}