<?php
/* Smarty version 3.1.30, created on 2018-05-22 04:03:09
  from "D:\wamp\www\mvc\app\views\index\goodslist.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b037a5d4d12b6_08354621',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16912e2ccaa53f2922c775d82a447ee63530d491' => 
    array (
      0 => 'D:\\wamp\\www\\mvc\\app\\views\\index\\goodslist.html',
      1 => 1526954588,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/footer.html' => 1,
  ),
),false)) {
function content_5b037a5d4d12b6_08354621 (Smarty_Internal_Template $_smarty_tpl) {
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
/goodslist.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/public.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/footer.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/rem.js"><?php echo '</script'; ?>
>
    <style>
        #hot h3{
            display: block;
        }
        #hot h4{
            font-size: 0.38rem;
            color: #363636;
            margin-left: 0.3rem;
            white-space: nowrap;
            display: block;
            opacity: 0;
        }
    </style>
</head>
<body>
<div class="head">
    <div class="headtop">
        <a href="index.php?m=index&c=category&a=init">
            <img src="<?php echo IMG_PATH;?>
/fanhui_03_01.png" alt="">
        </a>
        <input type="text" placeholder="&#xe615; 搜索（例如：科颜氏）">
    </div>
    <div class="headb" id="<?php echo $_smarty_tpl->tpl_vars['tid']->value;?>
">
        <div class="type">
            <span style="color:#1277CC;" class="order">&#xe62c; 销量</span>
        </div>
        <div class="type">
            <span class="price">&#xe62a; 价格</span>
        </div>
        <div class="type">
            <span class="gidcode">&#xe600; 新品</span>
        </div>
    </div>
</div>

<!-- 最热单品开始 -->
<div id="hot">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <a href="index.php?m=index&c=category&a=showcontent&gid=<?php echo $_smarty_tpl->tpl_vars['v']->value['gid'];?>
">
        <div class="hot_danpin">
            <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['gthumb'];?>
" alt="" class="hot_img">
            <div class="hot_title">
                <h3><?php echo $_smarty_tpl->tpl_vars['v']->value['gname'];?>
</h3>
                <span class="hot_rmb">¥<?php echo $_smarty_tpl->tpl_vars['v']->value['gprice'];?>
</span>
                <div class="dianzan">
                    <span class="renshu">1w9</span>
                </div>
            </div>
        </div>
    </a>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</div>
<!-- 最热单品结束 -->
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/getlist.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:index/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
