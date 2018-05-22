<?php
class typeModel{
    function __construct()
    {
        $this->db=new db("type");
    }
    function getnum(){
        $arr=$this->db->selectOne("1","count(*) as num");
        return $arr["num"];
    }
    function selecttype($limit){
//        $arr=$this->db->selectAll("*","1 $limit");
        $this->db->table="type,category";
        $arr=$this->db->selectAll("*","type.cid=category.cid $limit");
        $this->db->close();
        return $arr;
    }
    function deletetype(){
        $id=$_GET["id"];
        $r=$this->db->delete("tid=$id");
        $this->db->close();
        return $r;
    }
    function inserttype(){
        $tname=$_POST["tname"];
        $cid=$_POST["cid"];
        $tthumb=$_POST["tthumb"];
        $torder=$_POST["torder"];
        $r=$this->db->insert(["tname"=>$tname,"cid"=>$cid,"tthumb"=>$tthumb,"torder"=>$torder]);
//        $this->db->close();
        return $r;
    }
    function getsometype(){
        $id=$_GET["id"];
        $arr=$this->db->selectOne("tid=$id");
        $this->db->close();
        return $arr;
    }
    function updatetype(){
        $tid=$_POST["tid"];
        $tname=$_POST["tname"];
        $cid=$_POST["cid"];
        $tthumb=$_POST["tthumb"];
        $torder=$_POST["torder"];
        $r=$this->db->update("tname='{$tname}',cid='{$cid}',tthumb='{$tthumb}',torder='{$torder}'","tid=$tid");
        $this->db->close();
        return $r;
    }
}