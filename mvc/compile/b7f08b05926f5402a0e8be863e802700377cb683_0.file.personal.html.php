<?php
/* Smarty version 3.1.30, created on 2018-04-27 12:30:07
  from "D:\wamp\www\mvc\app\views\index\personal.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae2fbafa2ae29_65688763',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7f08b05926f5402a0e8be863e802700377cb683' => 
    array (
      0 => 'D:\\wamp\\www\\mvc\\app\\views\\index\\personal.html',
      1 => 1524825007,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae2fbafa2ae29_65688763 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/personal.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/public.css">
    <meta name="viewport"
          content="width=device-width, user-scalable=no,initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/rem.js"><?php echo '</script'; ?>
>
</head>
<body>
<!-- 头部开始 -->
<div id="guanzhu">
    <div class="guanzhu_top">
        <a href="index.php?m=index&c=my&a=display"><span class="hanbao">&lt;</span></a>
        <div class="gz_box">
            <span class="gz">个人资料</span>
        </div>
    </div>
</div>
<!-- 头部结束 -->
<!--账号-->
<div class="accept">
    <div class="accept1">
        <p>账号</p>
        <span class="not"><?php echo $_smarty_tpl->tpl_vars['data']->value['phone'];?>
</span>
    </div>
    <div class="accept1 accept2">
        <p>修改密码</p>
        <i>&gt;</i>
    </div>
</div>
<!--头像-->
<div class="picture">
    <a href="index.php?m=index&c=my&a=pictureupdate">
        <div class="touxiang">
            <p>头像</p>
            <i>&gt;</i>
            <div class="pictures">
                <img src="<?php echo $_smarty_tpl->tpl_vars['data']->value['picture'];?>
" alt="">
            </div>
        </div>
    </a>
    <a href="index.php?m=index&c=my&a=nameupdate">
        <div class="accept1 accept2">
            <p>昵称</p>
            <i>&gt;</i>
            <span class="not"><?php echo $_smarty_tpl->tpl_vars['data']->value['username'];?>
</span>
        </div>
    </a>
</div>
<!--性别-->
<div class="accept sexbox">
    <a href="index.php?m=index&c=my&a=sexupdate">
        <div class="accept1">
            <p>性别</p>
            <i>&gt;</i>
            <span class="not girl"><?php if ($_smarty_tpl->tpl_vars['data']->value['sex'] == 1) {?>男<?php } else { ?>女<?php }?></span>
        </div>
    </a>
    <div class="accept1">
        <p>出生年份</p>
        <i>&gt;</i>
    </div>
    <div class="accept1 accept2">
        <p>生日</p>
        <i>&gt;</i>
    </div>
</div>
<!--地址-->
<div class="accept sexbox address">
    <div class="accept1">
        <p>收货地址</p>
        <i>&gt;</i>
    </div>
    <div class="accept1">
        <p>我的晒单</p>
        <i>&gt;</i>
    </div>
</div>
</body>
</html><?php }
}
