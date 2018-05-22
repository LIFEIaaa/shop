<?php

class categoryModel
{
    function __construct()
    {
    }

    function getallcategory()
    {
        $db = new db("category");
        $data = $db->selectAll("cid,cname", "1 order by corder");
        $db->close();
        return $data;
    }

    function getsometypes($cid = 11)
    {
        $db = new db("type");
        $data = $db->selectAll("*", "cid=$cid");
        return $data;
    }

    function getgoods($order = "order by gorder")
    {
        $tid = $_GET["tid"];
        $db = new db("goods");
        $data = $db->selectAll("*", "tid=$tid $order limit 0,10");
        return $data;
    }

    function getcontent()
    {
        $gid = $_GET['gid'];
        $db = new db("goods");
        $data = $db->selectOne("gid=$gid");
        $db->close();
        return $data;
    }
}