<?php
class order extends controller{
    function __construct()
    {
        parent::__construct();
        $this->check();
        $this->orderModel=new orderModel();
    }
    function showorder(){
        $num = $this->orderModel->getnum();
        $pager = new pager($num, 5);
        $pager->output();
        $data = $this->orderModel->selectorder($pager->limit);
        $str = $pager->str;
        $this->smarty->assign("data", $data);
        $this->smarty->assign("str", $str);
        $this->smarty->display("admin/orderlist.html");
    }
    function delorder()
    {
        $r = $this->orderModel->deleteorder();
        if ($r == 1) {
            $msg = "删除成功";
        } else {
            $msg = "删除失败";
        }
        $href = "index.php?m=admin&c=order&a=showorder";
        $this->get($msg, $href);
    }
    function addorder()
    {
        $this->smarty->display("admin/orderadd.html");
    }

    function checkorderadd()
    {
        $r = $this->orderModel->insertorder();
        if ($r == 1) {
            $msg = "添加成功";
            $href = "index.php?m=admin&c=order&a=showorder";
        } else {
            $msg = "添加失败";
            $href = "index.php?m=admin&c=order&a=addorder";
        }
        $this->get($msg, $href);
    }
    function updateorder()
    {
        $data = $this->orderModel->getsomeorder();
        $this->smarty->assign("data", $data);
        $this->smarty->display("admin/orderupdate.html");
    }

    function checkorderupdate()
    {
        $r = $this->orderModel->updateorder();
        if ($r == 1) {
            $msg = "修改成功";
            $href = "index.php?m=admin&c=order&a=showorder";
        } else {
            $id = $_POST["oid"];
            $msg = "修改失败";
            $href = "index.php?m=admin&c=order&a=checkorderupdate&id=$id";
        }
        $this->get($msg, $href);
    }
}