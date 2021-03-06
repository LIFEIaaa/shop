<?php
class category extends controller {
    function __construct()
    {
        parent::__construct();
        $this->check();
        $this->categoryModel=new categoryModel();
    }
    function showcategory(){
        $num=$this->categoryModel->getnum();
        $pager=new pager($num,3);
        $pager->output();
        $data=$this->categoryModel->selectcategory($pager->limit);
        $str=$pager->str;
        $this->smarty->assign("str",$str);
        $this->smarty->assign("data",$data);
        $this->smarty->display("admin/categorylist.html");
    }
    function delcategory(){
        $r=$this->categoryModel->deletecategory();
        if($r==1){
            $msg="删除成功";
        }else{
            $msg="删除失败";
        }
        $href="index.php?m=admin&c=category&a=showcategory";
        $this->get($msg,$href);
    }
    function addcategory(){
        $this->smarty->display("admin/categoryadd.html");
    }
    function upload(){
        $upload=new upload();
        $path=$upload->upload("file");
        echo $path;
    }
    function checkcategoryadd(){
        $r=$this->categoryModel->insertcategory();
        if($r===1){
            $msg="添加成功";
            $href="index.php?m=admin&c=category&a=showcategory";
        }else{
            $msg="添加失败";
            $href="index.php?m=admin&c=category&a=addcategory";
        }
        $this->get($msg,$href);
    }
    function updatecategory(){
        $data=$this->categoryModel->getsomecategory();
        $this->smarty->assign("data",$data);
        $this->smarty->display("admin/categoryupdate.html");
    }
    function checkcategoryupdate(){
        $r=$this->categoryModel->updatecategory();
        $id=$_POST["cid"];
        if($r==1){
            $msg="修改成功";
            $href="index.php?m=admin&c=category&a=showcategory";
        }else{
            $msg="修改失败";
            $href="index.php?m=admin&c=category&a=updatecategory&id=$id";
        }
        $this->get($msg,$href);
    }
}