<?php

class my extends indexcontroller
{
    function __construct()
    {
        parent::__construct();
        $this->smarty->assign("t", "4");
        $this->myModel = new myModel();
    }

    function init()
    {
        $this->check();
        $phone=$this->session->get("phone");
        $pic=$this->myModel->getthumb($phone);
        $this->smarty->assign("picture",$pic);
        $this->smarty->assign("phone",$phone);
        $this->smarty->display("index/my.html");
    }

    function sign()
    {
        $this->smarty->display("index/sign.html");
    }

    function checkphone()
    {
        $uphone = $_GET["phone"];
        $yanZhengnum = $this->GetRandStr(4);
        //初始化必填
        $options['accountsid'] = '442c51c4d2a95aededa6f12a23b26fe4';
        $options['token'] = '887b72f88fc33eacb1b3ad92daa2fd4f';
        $ucpass = new Ucpaas($options);
        $ucpass->getDevinfo('json');
        $to = $uphone;
        $templateId = "191761";
        $param = $yanZhengnum;
        $this->session->set("yzm", $yanZhengnum);
        $appId = "e771411626af47b381a704c419e23b16";
        $ucpass->templateSMS($appId, $to, $templateId, $param);
    }

    function GetRandStr($len)
    {
        $chars = array(
            "0", "1", "2",
            "3", "4", "5", "6", "7", "8", "9"
        );
        $charsLen = count($chars) - 1;
        shuffle($chars);
        $output = "";
        for ($i = 0; $i < $len; $i++) {
            $output .= $chars[mt_rand(0, $charsLen)];
        }
        return $output;
    }

    function checksign()
    {
        $phone = $_POST["phone"];
        $code = $_POST["code"];
        //$this->session->get('yzm')
        if ($code == "1234") {
            $r = $this->myModel->adduser($phone);
            if ($r == 1) {
                $this->session->set("phone", $phone);
                $this->smarty->display("index/account.html");
            } else {
                $this->smarty->assign("notice", "添加失败");
                $this->smarty->display("index/sign.html");
            }
//            echo "验证码正确";
        } else {
            $this->smarty->assign("notice", "验证码错误");
            $this->smarty->display("index/sign.html");
        }
    }

    function checkrepeat()
    {
        $r = $this->myModel->checkrepeat();
        if (empty($r)) {
            echo "true";
        } else {
            echo "false";
        }
    }

    function addpass()
    {
        $phone = $this->session->get("phone");
        $r = $this->myModel->addpass($phone);
        if ($r == 1) {
            $this->smarty->display("index/login.html");
        } else {
            $this->smarty->display("index/account.html");
        }
    }

    function login()
    {
        $r = $this->myModel->checklogin();
        $phone = $_POST["phone"];
        $password = $_POST["password"];
        if (empty($r)) {
            $this->smarty->assign("notice", "用户名不存在");
            $this->smarty->display("index/login.html");
        } else {
            if (md5($password) == $r['password']) {
                $this->session->set("phone", $phone);
                $pic=$this->myModel->getthumb($phone);
                $this->smarty->assign("picture",$pic);
                $this->smarty->assign("phone",$phone);
                $this->smarty->display("index/my.html");
            } else {
                $this->smarty->assign("notice", "密码错误");
                $this->smarty->display("index/login.html");
            }
        }
    }
    function autologin(){
        $phone=$_GET["phone"];
        $this->session->set("phone", $phone);
        $pic=$this->myModel->getthumb($phone);
        $this->smarty->assign("picture",$pic);
        $this->smarty->assign("phone",$phone);
        $this->smarty->display("index/my.html");
    }
    function logout(){
        $this->session->delete("phone");
        $this->smarty->display("index/login.html");
    }

    function display(){
        $this->smarty->display("index/shezhi.html");
    }
    function setting(){
        $phone=$this->session->get("phone");
        $data=$this->myModel->getmessage($phone);
        $this->smarty->assign("data",$data);
        $this->smarty->display("index/personal.html");
    }
    function nameupdate(){
        $phone=$this->session->get("phone");
        $data=$this->myModel->getmessage($phone);
        $this->smarty->assign("data",$data);
        $this->smarty->display("index/nameupdate.html");
    }

//    function update(){
//        $phone=$this->session->get("phone");
//        $data=$this->myModel->getmessage($phone);
//        $this->smarty->assign("data",$data);
//        $this->smarty->display("index/update.html");
//    }
    function checkupdate(){
        $r=$this->myModel->update();
        if($r==1){
            $this->setting();
        }else{
            $this->nameupdate();
        }
    }
    function pictureupdate(){
        $phone=$this->session->get("phone");
        $data=$this->myModel->getmessage($phone);
        $this->smarty->assign("data",$data);
        $this->smarty->display("index/pictureupdate.html");
    }
    function checkpicupdate(){
        $r=$this->myModel->picupdate();
        if($r==1){
            $this->setting();
        }else{
            $this->pictureupdate();
        }
    }
    function upload(){
        $upload=new upload();
        $path=$upload->upload("file");
        echo $path;
    }
    function sexupdate(){
        $phone=$this->session->get("phone");
        $data=$this->myModel->getmessage($phone);
        $this->smarty->assign("data",$data);
        $this->smarty->display("index/sexupdate.html");
    }
    function checksexupdate(){
        $r=$this->myModel->sexupdate();
        if($r==1){
            $this->setting();
        }else{
            $this->sexupdate();
        }
    }
}