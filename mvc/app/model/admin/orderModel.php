<?php
class orderModel{
    function __construct()
    {
        $this->db=new db("orders");
    }
    function getnum(){
        $arr=$this->db->selectOne("1","count(*) as num");
        return $arr["num"];
    }
    function selectorder($limit){
        $arr=$this->db->selectAll("*","1 $limit");
        $this->db->close();
        return $arr;
    }
    function deleteorder(){
        $id=$_GET["id"];
        $r=$this->db->delete("oid=$id");
        $this->db->close();
        return $r;
    }
    function insertorder(){
//        $oid=$_POST["oid"];
        $gid=$_POST["gid"];
        $gnumber=$_POST["gnumber"];
        $gprice=$_POST["gprice"];
        $uid=$_POST["uid"];
        $aid=$_POST["aid"];
        $ostate=$_POST["ostate"];
        $r=$this->db->insert(["gid"=>$gid,"gnumber"=>$gnumber,"gprice"=>$gprice,"uid"=>$uid,"aid"=>$aid,"ostate"=>$ostate]);
        $this->db->close();
        return $r;
    }
    function getsomeorder(){
        $id=$_GET["id"];
        $arr=$this->db->selectOne("oid=$id");
        $this->db->close();
        return $arr;
    }
    function updateorder(){
        $oid=$_POST["oid"];
        $gid=$_POST["gid"];
        $gnumber=$_POST["gnumber"];
        $gprice=$_POST["gprice"];
        $uid=$_POST["uid"];
        $aid=$_POST["aid"];
        $ostate=$_POST["ostate"];
        $r=$this->db->update("gid='{$gid}',gnumber='{$gnumber}',gprice='{$gprice}',uid='{$uid}',aid='{$aid}',ostate='{$ostate}'","oid=$oid");
        $this->db->close();
        return $r;
    }
}