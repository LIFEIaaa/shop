<?php
/* Smarty version 3.1.30, created on 2018-04-25 09:22:11
  from "D:\wamp\www\mvc\app\views\index\xiangqingye.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae02ca3e7d437_89887856',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9418fcc3c7c74563964c6cee4bfc89cd86fbcfc' => 
    array (
      0 => 'D:\\wamp\\www\\mvc\\app\\views\\index\\xiangqingye.html',
      1 => 1524640930,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae02ca3e7d437_89887856 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>详情页</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/xiangqingye.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/public.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/swiper.css">
    <meta name="viewport"
          content="width=device-width, user-scalable=no,initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/rem.js"><?php echo '</script'; ?>
>
</head>
<body>
<!-- 头部开始 -->
<div id="guanzhu" onclick="history.back()">
    <div class="guanzhu_top">
        <span class="hanbao">&lt;</span>
        <span class="gz">魅可</span>
    </div>
</div>
<!-- 头部结束 -->

<!-- 图片开始 -->
<div id="picture_zs">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value["gpictures"], 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
            <div class="swiper-slide">
                <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" alt="" style="width: 100%;height: auto;">
            </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </div>
    </div>
</div>
<!-- 图片结束 -->

<!-- 文字描述开始 -->
<div class="miaoshu">
    <h3><?php echo $_smarty_tpl->tpl_vars['data']->value["gname"];?>
</h3>
    <span class="hot_meiyuan">￥<?php echo $_smarty_tpl->tpl_vars['data']->value["gprice"];?>
</span>
    <div class="xq_fgx"></div>
</div>
<!-- 文字描述结束 -->

<!-- 颜色开始 -->
<div id="color">
    <h3>[详细介绍]</h3>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value["gpictures"], 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" alt="" class="yanse">
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    <div class="xq_fgx1"></div>
</div>
<!-- 颜色结束 -->

<!-- 概述开始 -->
<div id="gaishu">
    <h3>[概述]</h3>
    <p class="chungao"><?php echo $_smarty_tpl->tpl_vars['data']->value["gdescription"];?>
</p>
    <span class="xinghao">&#xe616;</span>
    <p class="chungao gongxiao">产品特点及功效</p>
    <p class="xianse"><i class="dian">&#xe608;</i>显色丰润：奶油质地</p>
    <p class="xianse xianse1"><i class="dian">&#xe608;</i>润采诱光：高度抛光</p>
    <p class="xianse xianse1"><i class="dian">&#xe608;</i>闪亮星泽：霜状质地</p>
    <p class="xianse xianse1"><i class="dian">&#xe608;</i>水漾润泽：半光面漆</p>
    <p class="xianse xianse1"><i class="dian">&#xe608;</i>柔感哑光：哑光质地</p>
    <p class="xianse xianse1"><i class="dian">&#xe608;</i>亚光：哑光质地</p>
    <p class="xianse xianse1"><i class="dian">&#xe608;</i>绒光丰盈：半哑光质地</p>
    <span class="xinghao">&#xe616;</span>
    <p class="chungao gongxiao">使用方法：直接涂于唇部。</p>
    <div class="xq_fgx1 xq_fgx2"></div>
</div>
<!-- 概述结束 -->

<!-- 底部开始 -->
<div id="jiaru">
    <div class="jiaru_left">
        <span class="ren1">&#xe638;</span>
        <img src="<?php echo IMG_PATH;?>
/xin_18.png" alt="" class="xinxin">
        <span class="ren1 xiaodai">&#xe620;</span>
    </div>
    <div class="jiaru_right">
        <span>加入购物车</span>
    </div>
</div>
<!-- 底部结束 -->
</body>
</html>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/swiper.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    var mySwiper = new Swiper('.swiper-container', {
        initialSlide: 3,
        speed: 500,
    })
<?php echo '</script'; ?>
><?php }
}
