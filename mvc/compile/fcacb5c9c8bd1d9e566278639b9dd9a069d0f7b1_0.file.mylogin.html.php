<?php
/* Smarty version 3.1.30, created on 2018-04-27 07:28:27
  from "D:\wamp\www\mvc\app\views\index\mylogin.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae2b4fba244d3_95968380',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fcacb5c9c8bd1d9e566278639b9dd9a069d0f7b1' => 
    array (
      0 => 'D:\\wamp\\www\\mvc\\app\\views\\index\\mylogin.html',
      1 => 1524806875,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/footer.html' => 1,
  ),
),false)) {
function content_5ae2b4fba244d3_95968380 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>我的</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/wo.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/public.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/footer.css">
    <meta name="viewport"
          content="width=device-width, user-scalable=no,initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/rem.js"><?php echo '</script'; ?>
>
</head>
<body>
<!-- 头部开始 -->
<div id="toubu">
    <span class="xinfeng">&#xe609;</span>
    <a href="index.php?m=index&c=my&a=display"><span class="shezhi">&#xe63c;</span></a>
    <a href="">
        <div class="circle">
            <img src="<?php echo $_smarty_tpl->tpl_vars['picture']->value;?>
" alt="" class="wo_touxiang">
        </div>
    </a>
    <span class="mingcheng">欢迎<?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
</span>
</div>
<!-- 头部结束 -->

<!-- 收藏开始 -->
<div id="shoucang">
    <div class="shoucang_center">
        <div class="shoucang1">
            <img src="<?php echo IMG_PATH;?>
/xin1_06.png" alt="" class="xin">
            <span>收藏</span>
        </div>
        <div class="shoucang1 shoucang2">
            <img src="<?php echo IMG_PATH;?>
/jiao_10.png" alt="" class="xin">
            <span>浏览记录 2</span>
        </div>
        <div class="shoucang1 shoucang2">
            <img src="<?php echo IMG_PATH;?>
/youhui_13.png" alt="" class="xin">
            <span>代金券 15</span>
        </div>
    </div>
</div>
<!-- 收藏结束 -->

<div class="huise"></div>

<!-- 我的订单开始 -->
<div class="dingdan">
    <span class="mydd">我的订单</span>
    <span class="chakan">查看更多订单 &gt;</span>
</div>
<!-- 我的订单结束 -->

<!-- 物流开始 -->
<div class="wuliu">
    <div class="fukuan">
        <span class="fukuanbtn">&#xe60b;</span>
        <span class="daiding">待付款</span>
    </div>
    <div class="fukuan fukuan1">
        <span class="fukuanbtn">&#xe622;</span>
        <span class="daiding">待发货</span>
    </div>
    <div class="fukuan fukuan1">
        <span class="fukuanbtn">&#xe6d5;</span>
        <span class="daiding">待收货</span>
    </div>
    <div class="fukuan fukuan1">
        <span class="fukuanbtn">&#xe60e;</span>
        <span class="daiding">已签收</span>
    </div>
    <div class="fukuan fukuan1">
        <span class="fukuanbtn">&#xe6cc;</span>
        <span class="daiding">已取消</span>
    </div>
</div>
<!-- 物流结束 -->

<div class="huise"></div>

<!-- 邀请开始 -->
<div class="yaoqing">
    <span class="yaoqingbtn">&#xe64e;</span>
    <span class="yaoqingren">邀请好友获代金券</span>
    <span class="youjiantou">&gt;</span>
</div>
<!-- 邀请结束 -->

<div class="huise"></div>

<!-- 客服开始 -->
<div class="yaoqing yaoqing1">
    <span class="yaoqingbtn">&#xe61f;</span>
    <span class="yaoqingren kefu">联系客服</span>
    <span class="youjiantou">&gt;</span>
</div>
<!-- 客服结束 -->

<!-- 帮助开始 -->
<div class="yaoqing">
    <span class="yaoqingbtn ">&#xe824;</span>
    <span class="yaoqingren kefu">帮助文档</span>
    <span class="youjiantou">&gt;</span>
</div>
<!-- 帮助结束 -->

<div class="huise"></div>

<!-- 分享开始 -->
<div class="yaoqing yaoqing1">
    <span class="yaoqingbtn">&#xe607;</span>
    <span class="yaoqingren kefu">分享玩美</span>
    <span class="youjiantou">&gt;</span>
</div>
<!-- 分享结束 -->

<!-- 关于开始 -->
<div class="yaoqing">
    <span class="yaoqingbtn ">&#xe60d;</span>
    <span class="yaoqingren kefu">关于玩美</span>
    <span class="youjiantou">&gt;</span>
</div>
<!-- 关于结束 -->
<?php echo '<script'; ?>
>
    let phone = document.querySelector(".mingcheng");
    localStorage.phone = phone.innerHTML;
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:index/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
