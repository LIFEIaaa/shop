<?php

class indexcontroller
{
    function __construct()
    {
        $this->smarty = new Smarty();
        $this->smarty->setCompileDir(COMPILE_PATH);
        $this->smarty->setTemplateDir(VIEW_PATH);
        $this->session = new session();
    }
    function check(){
        $user=$this->session->get("phone");
        if(!$user){
            $this->smarty->display("index/login.html");
            exit();
        }
    }
}