<?php
class myModel{
    function checkrepeat(){
        $phone=$_GET["phone"];
        $db=new db("user");
        $r=$db->selectOne("phone=$phone");
        $db->close();
        return $r;
    }
    function adduser($phone){
        $db=new db("user");
        $r=$db->insert(["phone"=>$phone]);
        $db->close();
        return $r;
    }
    function addpass($phone){
        $password=md5($_POST["password"]);
        $phone==$phone;
        $db=new db("user");
        $r=$db->update("password='{$password}'","phone=$phone");
        return $r;
    }
    function checklogin(){
        $phone=$_POST["phone"];
        $db=new db("user");
        $r=$db->selectOne("phone=$phone");
        return $r;
    }
    function getthumb($phone){
        $db=new db("user");
        $data=$db->selectOne("phone=$phone","picture");
        $db->close();
        return $data['picture'];
    }
    function getmessage($phone){
        $db=new db("user");
        $data=$db->selectOne("phone=$phone","*");
        $db->close();
        return $data;
    }
    function update(){
        $db=new db("user");
        $username=$_POST["username"];
        $phone=$_POST["phone"];
//        $sex=$_POST["sex"];
        $r=$db->update("username='{$username}'","phone=$phone");
        return $r;
    }
    function picupdate(){
        $db=new db("user");
        $picture=$_POST["picture"];
        $phone=$_POST["phone"];
        $r=$db->update("picture='{$picture}'","phone=$phone");
        return $r;
    }
    function sexupdate(){
        $db=new db("user");
        $sex=$_POST["sex"];
        $phone=$_POST["phone"];
        $r=$db->update("sex='{$sex}'","phone=$phone");
        return $r;
    }
}