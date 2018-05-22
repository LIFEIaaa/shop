<?php
/* Smarty version 3.1.30, created on 2018-04-27 11:54:43
  from "D:\wamp\www\mvc\app\views\index\pictureupdate.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae2f3635dfe05_40586148',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49b542e187f704ba419eae75d1c5ee131f145ab9' => 
    array (
      0 => 'D:\\wamp\\www\\mvc\\app\\views\\index\\pictureupdate.html',
      1 => 1524822881,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae2f3635dfe05_40586148 (Smarty_Internal_Template $_smarty_tpl) {
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
/pictureupdate.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/public.css">
</head>
<body>
<!-- 头部开始 -->
<div id="guanzhu">
    <div class="guanzhu_top">
        <a href="index.php?m=index&c=my&a=setting"><span class="hanbao">&lt;</span></a>
        <div class="gz_box">
            <span class="gz">修改头像</span>
        </div>
    </div>
</div>
<!-- 头部结束 -->
<form action="index.php?m=index&c=my&a=checkpicupdate" method="post">
    <div class="form-group">
        <div class="label">
            <label>头像：</label>
        </div>
        <div class="field">
            <input type="file" id="url1" name="img" class="tupian"/>
            <input type="button" class="file" id="image1" value="+ 点击上传"  style="float:left;" data-url="index.php?m=index&c=my&a=upload">
            <div class="tipss"></div>
            <input type="hidden" name="picture" id="hidden" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['picture'];?>
">
            <input type="hidden" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['phone'];?>
">
        </div>
    </div>
    <input type="submit" value="保存" class="save">
</form>
</body>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/upload.js"><?php echo '</script'; ?>
>
</html><?php }
}
