<?php
class type extends controller {
    function __construct()
    {
        parent::__construct();
        $this->check();
        $this->typeModel=new typeModel();
    }
    function showtype(){
        $num=$this->typeModel->getnum();
        $pager=new pager($num,3);
        $pager->output();
        $data=$this->typeModel->selecttype($pager->limit);
        $this->smarty->assign("data",$data);
        $str=$pager->str;
        $this->smarty->assign("str",$str);
        $this->smarty->display("admin/typelist.html");
    }
    function deltype(){
        $r=$this->typeModel->deletetype();
        if($r==1){
            $msg="删除成功";
        }else{
            $msg="删除失败";
        }
        $href="index.php?m=admin&c=type&a=showtype";
        $this->get($msg,$href);
    }
    function addtype(){
        $this->smarty->display("admin/typeadd.html");
    }
    function checktypeadd(){
        $r=$this->typeModel->inserttype();
        if($r==1){
            $msg="添加成功";
            $href="index.php?m=admin&c=type&a=showtype";
        }else{
            $msg="添加失败";
            $href="index.php?m=admin&c=type&a=addtype";
        }
        $this->get($msg,$href);
    }
    function upload(){
        $upload=new upload();
        $path=$upload->upload("file");
        echo $path;
    }
    function updatetype(){
        $data=$this->typeModel->getsometype();
        $this->smarty->assign("data",$data);
        $this->smarty->display("admin/typeupdate.html");
    }
    function checktypeupdate(){
        $r=$this->typeModel->updatetype();
        $id=$_POST["tid"];
        if($r==1){
            $msg="修改成功";
            $href="index.php?m=admin&c=type&a=showtype";
        }else{
            $msg="修改失败";
            $href="index.php?m=admin&c=type&a=updatetype&id=$id";
        }
        $this->get($msg,$href);
    }
}