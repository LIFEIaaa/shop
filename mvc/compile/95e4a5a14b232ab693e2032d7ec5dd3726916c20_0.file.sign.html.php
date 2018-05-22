<?php
/* Smarty version 3.1.30, created on 2018-04-27 06:44:08
  from "D:\wamp\www\mvc\app\views\index\sign.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae2aa98ed77e8_50262192',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95e4a5a14b232ab693e2032d7ec5dd3726916c20' => 
    array (
      0 => 'D:\\wamp\\www\\mvc\\app\\views\\index\\sign.html',
      1 => 1524804247,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/notice.html' => 1,
  ),
),false)) {
function content_5ae2aa98ed77e8_50262192 (Smarty_Internal_Template $_smarty_tpl) {
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
/sign.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/public.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/footer.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/rem.js"><?php echo '</script'; ?>
>
    <style>
        #error{
            width: 100%;
            background: #f2f2f2;
            line-height: 1rem;
            font-size: 0.44rem;
            text-align: center;
            line-height: 1rem;
            color: #666;
        }
    </style>
</head>
<body>
<div class="head">
    <img src="<?php echo IMG_PATH;?>
/cuohao_02.png" alt="" onclick="history.back()">
    <h3>注册</h3>
</div>
<div class="bottom">
    <?php $_smarty_tpl->_subTemplateRender("file:index/notice.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <form action="index.php?m=index&c=my&a=checksign" class="form" method="post" id="myform">
        <input type="text" placeholder="手机号码" name="phone">
        <div class="zn">
            <h3>中国 +86</h3>
            <i>&#xe72e;</i>
        </div>
        <input type="text" placeholder="请输入验证码" name="code">
        <div class="send">
            <span>发送验证码</span>
        </div>
        <div id="error"></div>
        <input type="submit" class="enter" value="下一步">
        <a href="index.php?m=index&c=my&a=init">
            <div class="zhuce">
                <span>密码登录</span>
            </div>
        </a>
    </form>
</div>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.validate.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/yzm.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
