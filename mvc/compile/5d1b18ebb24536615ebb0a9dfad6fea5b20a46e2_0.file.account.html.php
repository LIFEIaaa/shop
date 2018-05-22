<?php
/* Smarty version 3.1.30, created on 2018-04-27 05:57:28
  from "D:\wamp\www\mvc\app\views\index\account.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae29fa84460d1_32186244',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d1b18ebb24536615ebb0a9dfad6fea5b20a46e2' => 
    array (
      0 => 'D:\\wamp\\www\\mvc\\app\\views\\index\\account.html',
      1 => 1524799341,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/notice.html' => 1,
  ),
),false)) {
function content_5ae29fa84460d1_32186244 (Smarty_Internal_Template $_smarty_tpl) {
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
        }
    </style>
</head>
<body>
<div class="head">
    <img src="<?php echo IMG_PATH;?>
/cuohao_02.png" alt="" onclick="history.back()">
    <h3>设置密码</h3>
</div>
<div class="bottom">
    <?php $_smarty_tpl->_subTemplateRender("file:index/notice.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <form action="index.php?m=index&c=my&a=addpass" class="form" method="post" id="myform">
        <input type="password" placeholder="请输入密码" name="password">
        <div class="zn">
            <h3>密码</h3>
        </div>
        <div id="error"></div>
        <input type="submit" class="enter" value="完成">
        <!--<a href="index.php?m=index&c=my&a=init">-->
            <!--<div class="zhuce">-->
                <!--<span>密码登录</span>-->
            <!--</div>-->
        <!--</a>-->
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
</body>
</html>
<?php }
}
