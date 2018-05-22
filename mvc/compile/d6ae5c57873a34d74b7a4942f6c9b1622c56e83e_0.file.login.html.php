<?php
/* Smarty version 3.1.30, created on 2018-04-27 08:32:25
  from "D:\wamp\www\mvc\app\views\index\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae2c3f91675f3_01636964',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd6ae5c57873a34d74b7a4942f6c9b1622c56e83e' => 
    array (
      0 => 'D:\\wamp\\www\\mvc\\app\\views\\index\\login.html',
      1 => 1524808465,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/notice.html' => 1,
  ),
),false)) {
function content_5ae2c3f91675f3_01636964 (Smarty_Internal_Template $_smarty_tpl) {
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
/login.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/public.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/footer.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/rem.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="head">
    <img src="<?php echo IMG_PATH;?>
/cuohao_02.png" alt="" onclick="location.href='index.php'">
    <h3>登录</h3>
</div>

<div class="bottom">
    <?php $_smarty_tpl->_subTemplateRender("file:index/notice.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <form action="index.php?m=index&c=my&a=login" class="form" method="post">
        <input type="text" placeholder="手机号码" name="phone">
        <div class="zn">
            <h3>中国 +86</h3>
            <i>&#xe72e;</i>
        </div>
        <input type="password" placeholder="密码" name="password">
        <a href="index.php?m=index&c=my&a=init">
            <input type="submit" class="enter" value="确认">
        </a>
        <a href="index.php?m=index&c=my&a=sign">
            <div class="zhuce">
                <span>注册账号</span>
            </div>
        </a>
    </form>
</div>
</body>
<?php echo '<script'; ?>
>
    let phone = localStorage.phone ? localStorage.phone : "";
    if (phone !== "") {
        location.href = "index.php?m=index&c=my&a=autologin&phone=" + phone;
    }
<?php echo '</script'; ?>
>
</html><?php }
}
