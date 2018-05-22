<?php

class address extends controller
{
    function __construct()
    {
        parent::__construct();
        $this->check();
        $this->addressModel = new addressModel();
    }

    function showaddress()
    {
        $num = $this->addressModel->getnum();
        $pager = new pager($num, 5);
        $pager->output();
        $data = $this->addressModel->selectaddress($pager->limit);
        $str = $pager->str;
        $this->smarty->assign("data", $data);
        $this->smarty->assign("str", $str);
        $this->smarty->display("admin/addresslist.html");
    }

    function deladdress()
    {
        $r = $this->addressModel->deleteaddress();
        if ($r == 1) {
            $msg = "删除成功";
        } else {
            $msg = "删除失败";
        }
        $href = "index.php?m=admin&c=address&a=showaddress";
        $this->get($msg, $href);
    }

    function addaddress()
    {
        $this->smarty->display("admin/addressadd.html");
    }

    function checkaddressadd()
    {
        $r = $this->addressModel->insertaddress();
        if ($r == 1) {
            $msg = "添加成功";
            $href = "index.php?m=admin&c=address&a=showaddress";
        } else {
            $msg = "添加失败";
            $href = "index.php?m=admin&c=address&a=addaddress";
        }
        $this->get($msg, $href);
    }

    function updateaddress()
    {
        $data = $this->addressModel->getsomeaddress();
        $area = $data["area"];
        $arr = explode("-", $area);
        $this->smarty->assign("data", $data);
        $this->smarty->assign("arr", $arr);
        $this->smarty->display("admin/addressupdate.html");
    }

    function checkaddressupdate()
    {
        $r = $this->addressModel->updateaddress();
        if ($r == 1) {
            $msg = "修改成功";
            $href = "index.php?m=admin&c=address&a=showaddress";
        } else {
            $id = $_POST["aid"];
            $msg = "修改失败";
            $href = "index.php?m=admin&c=address&a=checkaddressupdate&id=$id";
        }
        $this->get($msg, $href);
    }

}