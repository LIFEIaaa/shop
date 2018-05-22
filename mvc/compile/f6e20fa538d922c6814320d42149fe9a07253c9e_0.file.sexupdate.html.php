<?php
/* Smarty version 3.1.30, created on 2018-04-27 12:17:12
  from "D:\wamp\www\mvc\app\views\index\sexupdate.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae2f8a8622726_75289500',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6e20fa538d922c6814320d42149fe9a07253c9e' => 
    array (
      0 => 'D:\\wamp\\www\\mvc\\app\\views\\index\\sexupdate.html',
      1 => 1524824232,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae2f8a8622726_75289500 (Smarty_Internal_Template $_smarty_tpl) {
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
/sexupdate.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/public.css">
</head>
<body>
<!-- 头部开始 -->
<div id="guanzhu">
    <div class="guanzhu_top">
        <a href="index.php?m=index&c=my&a=setting"><span class="hanbao">&lt;</span></a>
        <div class="gz_box">
            <span class="gz">修改性别</span>
        </div>
    </div>
</div>
<!-- 头部结束 -->
<form action="index.php?m=index&c=my&a=checksexupdate" method="post">
    <div class="sexbox">
        <div class="manbox">
            男 <input type="radio" name="sex" value="1" <?php if ($_smarty_tpl->tpl_vars['data']->value['sex'] == 1) {?>checked<?php }?>>
        </div>
        <div class="manbox">
        女 <input type="radio" name="sex" value="0" <?php if ($_smarty_tpl->tpl_vars['data']->value['sex'] == 0) {?>checked<?php }?>>
        </div>
    </div>
    <input type="hidden" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['phone'];?>
">
    <input type="submit" value="保存" class="save">
</form>
</body>
</html><?php }
}
