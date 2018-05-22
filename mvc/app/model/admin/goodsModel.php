<?php
class goodsModel{
    function __construct()
    {
        $this->db=new db("goods");
    }
    function getnum(){
        $arr=$this->db->selectOne("1","count(*) as num");
        return $arr["num"];
    }
    function selectgoods($limit){
        $this->db->table="goods,type";
        $data=$this->db->selectAll("*","goods.tid=type.tid $limit");
        $this->db->close();
        return $data;
    }
    function deletegoods(){
        $id=$_GET["id"];
        $r=$this->db->delete("gid=$id");
        $this->db->close();
        return $r;
    }
    function getalltype(){
        $this->db->table="type";
        $arr=$this->db->selectAll("*");
        $this->db->close();
        return $arr;
    }
    function insertgoods(){
        $gname=$_POST["gname"];
        $tid=$_POST["tid"];
        $gthumb=$_POST["gthumb"];
        $gpictures=$_POST["gpictures"];
        $gprice=$_POST["gprice"];
        $gdescription=$_POST["gdescription"];
        $grecommend=$_POST["grecommend"];
        $gorder=$_POST["gorder"];
        $r=$this->db->insert(["gname"=>$gname,"tid"=>$tid,"gthumb"=>$gthumb,"gpictures"=>$gpictures,"gprice"=>$gprice,"gdescription"=>$gdescription,"grecommend"=>$grecommend,"gorder"=>$gorder]);
        $this->db->close();
        return $r;
    }
    function getsomegoods(){
        $id=$_GET["id"];
        $arr=$this->db->selectOne("gid=$id");
        $this->db->close();
        return $arr;
    }
    function updategoods(){
        $gid=$_POST["gid"];
        $gname=$_POST["gname"];
        $tid=$_POST["tid"];
//        var_dump($tid);
        $gthumb=$_POST["gthumb"];
        $gpictures=$_POST["gpictures"];
        $gprice=$_POST["gprice"];
        $gdescription=$_POST["gdescription"];
        $grecommend=$_POST["grecommend"];
        $gorder=$_POST["gorder"];
        $r=$this->db->update("gname='{$gname}',tid='{$tid}',gthumb='{$gthumb}',gpictures='{$gpictures}',gprice='{$gprice}',gdescription='{$gdescription}',grecommend='{$grecommend}',gorder='{$gorder}'","gid=$gid");
        $this->db->close();
        return $r;
    }
}