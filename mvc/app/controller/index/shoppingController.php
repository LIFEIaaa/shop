<?php

class shopping extends indexcontroller
{
    function __construct()
    {
       parent::__construct();
        $this->smarty->assign("t","3");
    }

    function init()
    {
        $this->smarty->display("index/gouwuche.html");
    }
}