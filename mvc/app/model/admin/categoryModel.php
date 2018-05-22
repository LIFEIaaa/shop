<?php
class categoryModel{
    function __construct()
    {
        $this->db=new db("category");
    }
    function getnum(){
        $arr=$this->db->selectOne("1","count(*) as num");
        return $arr["num"];
    }
    function selectcategory($limit){
        $arr=$this->db->selectAll("*","1 $limit");
        return $arr;
    }
    function deletecategory(){
        $id=$_GET["id"];
        $r=$this->db->delete("cid=$id");
        $this->db->close();
        return $r;
    }
    function insertcategory(){
        $cname=$_POST["cname"];
        $cthumb=$_POST["cthumb"];
        $corder=$_POST["corder"];
        $r=$this->db->insert(["cname"=>$cname,"cthumb"=>$cthumb,"corder"=>$corder]);
        $this->db->close();
        return $r;
    }
    function getsomecategory(){
        $id=$_GET["id"];
        $arr=$this->db->selectOne("cid=$id");
        $this->db->close();
        return $arr;
    }
    function updatecategory(){
        $cid=$_POST["cid"];
        $cname=$_POST["cname"];
        $cthumb=$_POST["cthumb"];
        $corder=$_POST["corder"];
        $r=$this->db->update("cname='{$cname}',cthumb='{$cthumb}',corder='{$corder}'","cid=$cid");
        $this->db->close();
        return $r;
    }
}