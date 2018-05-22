<?php
/* Smarty version 3.1.30, created on 2018-04-25 09:42:38
  from "D:\wamp\www\mvc\app\views\index\brand.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae0316e0b56c2_34146023',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '650934fc6d6c77d25038391551c45f278f26e57e' => 
    array (
      0 => 'D:\\wamp\\www\\mvc\\app\\views\\index\\brand.html',
      1 => 1524642157,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/footer.html' => 1,
  ),
),false)) {
function content_5ae0316e0b56c2_34146023 (Smarty_Internal_Template $_smarty_tpl) {
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
/brand.css">
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
    <div class="headtitle">
        <h3>品牌</h3>
    </div>
    <input type="text" placeholder="&#xe615; 搜索品牌">
</div>
<div class="bottom">
    <div class="bleft">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cats']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <?php if ($_smarty_tpl->tpl_vars['cid']->value == $_smarty_tpl->tpl_vars['v']->value['cid']) {?>
        <div class="btitle">
            <h3 data-id="<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
" style="background: #fff;border-left: 0.01rem solid #333;"><?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>
</h3>
        </div>
        <?php } else { ?>
        <div class="btitle">
            <h3 data-id="<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>
</h3>
        </div>
        <?php }?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </div>
    <div class="bright">
        <div class="bright1">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['types']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
            <a href="index.php?m=index&c=category&a=showlist&tid=<?php echo $_smarty_tpl->tpl_vars['v']->value['tid'];?>
">
                <div class="category">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['tthumb'];?>
" alt="">
                    <h1><?php echo $_smarty_tpl->tpl_vars['v']->value['tname'];?>
</h1>
                </div>
            </a>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </div>
    </div>
</div>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/gettype.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:index/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
