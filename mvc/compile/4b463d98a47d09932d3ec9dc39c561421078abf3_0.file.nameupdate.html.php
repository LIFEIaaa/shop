<?php
/* Smarty version 3.1.30, created on 2018-04-27 10:48:44
  from "D:\wamp\www\mvc\app\views\index\nameupdate.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae2e3ec8ef4d5_59623841',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b463d98a47d09932d3ec9dc39c561421078abf3' => 
    array (
      0 => 'D:\\wamp\\www\\mvc\\app\\views\\index\\nameupdate.html',
      1 => 1524818905,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae2e3ec8ef4d5_59623841 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/rem.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/nameupdate.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/public.css">
</head>
<body>
<!-- 头部开始 -->
<div id="guanzhu">
    <div class="guanzhu_top">
        <a href="index.php?m=index&c=my&a=setting"><span class="hanbao">&lt;</span></a>
        <div class="gz_box">
            <span class="gz">修改昵称</span>
        </div>
    </div>
</div>
<!-- 头部结束 -->
<form action="index.php?m=index&c=my&a=checkupdate" method="post">
<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['username'];?>
" placeholder="请输入昵称" name="username" class="name">
    <input type="hidden" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['phone'];?>
">
<input type="submit" value="保存" class="save">
</form>
</body>
</html><?php }
}
