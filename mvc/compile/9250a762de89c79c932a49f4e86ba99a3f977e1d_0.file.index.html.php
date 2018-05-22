<?php
/* Smarty version 3.1.30, created on 2018-04-25 09:34:52
  from "D:\wamp\www\mvc\app\views\index\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae02f9c411174_82918544',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9250a762de89c79c932a49f4e86ba99a3f977e1d' => 
    array (
      0 => 'D:\\wamp\\www\\mvc\\app\\views\\index\\index.html',
      1 => 1524641691,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/footer.html' => 1,
  ),
),false)) {
function content_5ae02f9c411174_82918544 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>玩美彩妆</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/index.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/public.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/footer.css">
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
        <span class="hanbao">&#xe615;</span>
        <div class="gz_box">
            <span class="gz">玩美</span>
        </div>
    </div>
</div>

<!-- 头部结束 -->

<!-- 最新开始 -->
<div id="latest">
    <div class="hufu">
        <span>最新</span>
        <div class="xiahuaxian"></div>
    </div>
    <div class="hufu">
        <span>鞋靴箱包</span>
        <div class="xiahuaxian xiahuaxian1"></div>
    </div>
    <div class="hufu">
        <span>男款精品</span>
        <div class="xiahuaxian xiahuaxian1"></div>
    </div>
    <div class="hufu">
        <span>母婴儿童</span>
        <div class="xiahuaxian xiahuaxian1"></div>
    </div>
    <div class="hufu">
        <span>护肤美妆</span>
        <div class="xiahuaxian xiahuaxian1"></div>
    </div>
    <div class="hufu">
        <span>健康养颜</span>
        <div class="xiahuaxian xiahuaxian1"></div>
    </div>
    <div class="hufu">
        <span>服饰配饰</span>
        <div class="xiahuaxian xiahuaxian1"></div>
    </div>
    <div class="hufu">
        <span>时尚科技</span>
        <div class="xiahuaxian xiahuaxian1"></div>
    </div>
    <div class="hufu">
        <span>户外行动</span>
        <div class="xiahuaxian xiahuaxian1"></div>
    </div>
</div>
<!-- 最新结束 -->

<!-- banner开始 -->
<div id="banner">
    <img src="<?php echo IMG_PATH;?>
/banner.png" alt="">
    <div class="lunbo">
        <div class="lunbo1"></div>
        <div class="lunbo1 lunbo2"></div>
        <div class="lunbo1 lunbo2"></div>
        <div class="lunbo1 lunbo2 lunbo3"></div>
        <div class="lunbo1 lunbo2"></div>
        <div class="lunbo1 lunbo2"></div>
        <div class="lunbo1 lunbo2"></div>
    </div>
</div>
<!-- banner结束 -->

<!-- 热卖品牌开始 -->
<div id="remai_pinpai">
    <div class="remai_pp">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <div class="remai_pp1">
            <a href="index.php?m=index&c=category&a=showcategory&cid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
">
                <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['cthumb'];?>
" alt="" class="pinpaiimg">
                <span class="yashi"><?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>
</span>
            </a>
        </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </div>
</div>
<!-- 热卖品牌结束 -->

<!-- 热卖开始 -->
<div class="remai">
    <a href="index.php?m=index&c=category&a=init">
        <div class="remai_top">
            <h2>热卖榜单</h2>
            <span class="dianji">点击进入<i class="jiantou">&gt;</i></span>
        </div>
    </a>
    <ul class="remai_bottom">
        <li class="remai_1">
            <img src="<?php echo IMG_PATH;?>
/remai_03.png" alt="" class="kouhong">
            <span class="meiyuan">$17.50</span>
        </li>
        <li class="remai_1 remai_2">
            <img src="<?php echo IMG_PATH;?>
/remai_05.png" alt="" class="kouhong">
            <span class="meiyuan">$17.50</span>
        </li>
        <li class="remai_1 remai_2">
            <img src="<?php echo IMG_PATH;?>
/remai_07.png" alt="" class="kouhong">
            <span class="meiyuan">$17.50</span>
        </li>
        <li class="remai_1 remai_2">
            <img src="<?php echo IMG_PATH;?>
/remai_09.png" alt="" class="kouhong">
            <span class="meiyuan">$17.50</span>
        </li>
        <li class="remai_1 remai_2">
            <img src="<?php echo IMG_PATH;?>
/remai_11.png" alt="" class="kouhong">
            <span class="meiyuan">$17.50</span>
        </li>
        <li class="remai_1 remai_2">
            <img src="<?php echo IMG_PATH;?>
/remai_13.png" alt="" class="kouhong">
            <span class="meiyuan">$17.50</span>
        </li>
        <li class="remai_1 remai_2">
            <img src="<?php echo IMG_PATH;?>
/kouhong_60.png" alt="" class="kouhong">
            <span class="meiyuan">$17.50</span>
        </li>
    </ul>
</div>
<!-- 热卖结束 -->

<!-- 商品开始 -->
<div class="shangpin">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gdata']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <a href="index.php?m=index&c=category&a=showcontent&gid=<?php echo $_smarty_tpl->tpl_vars['v']->value['gid'];?>
">
        <div class="shangpin_center">
            <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['gthumb'];?>
" alt="" class="shangpin1">
            <div class="shangpin_right">
                <div class="shijian">
                    <span>02/22</span>
                </div>
                <h2><?php echo $_smarty_tpl->tpl_vars['v']->value['gname'];?>
</h2>
                <p class="sp_wenzi"><?php echo $_smarty_tpl->tpl_vars['v']->value['gdescription'];?>
</p>
                <p class="sp_wenzi">小屁桃 推荐</p>
            </div>
        </div>
    </a>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</div>
<!-- 商品结束 -->

<!-- 新手开始 -->
<div class="remai">
    <div class="remai_top">
        <h2>新手专区</h2>
        <span class="fenjie">| 适用100美元新人大礼包</span>
        <span class="dianji">点击进入<i class="jiantou">&gt;</i></span>
    </div>
    <ul class="remai_bottom">
        <li class="remai_1">
            <img src="<?php echo IMG_PATH;?>
/xinren_03.png" alt="" class="kouhong">
            <span class="meiyuan">$298</span>
        </li>
        <li class="remai_1 remai_2">
            <img src="<?php echo IMG_PATH;?>
/xinren_05.png" alt="" class="kouhong">
            <span class="meiyuan">$17.50</span>
        </li>
        <li class="remai_1 remai_2">
            <img src="<?php echo IMG_PATH;?>
/xinren_07.png" alt="" class="kouhong">
            <span class="meiyuan">$168</span>
        </li>
        <li class="remai_1 remai_2">
            <img src="<?php echo IMG_PATH;?>
/xinren_09.png" alt="" class="kouhong">
            <span class="meiyuan">$28</span>
        </li>
        <li class="remai_1 remai_2">
            <img src="<?php echo IMG_PATH;?>
/xinren_11.png" alt="" class="kouhong">
            <span class="meiyuan">$13.99</span>
        </li>
        <li class="remai_1 remai_2">
            <img src="<?php echo IMG_PATH;?>
/xinren_13.png" alt="" class="kouhong">
            <span class="meiyuan">$74.75</span>
        </li>
        <li class="remai_1 remai_2">
            <img src="<?php echo IMG_PATH;?>
/kouhong_60.png" alt="" class="kouhong">
            <span class="meiyuan">$17.50</span>
        </li>
    </ul>
</div>
<!-- 新手结束 -->

<!-- 商品开始 -->
<div class="shangpin goods">
    <a href="">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gdata']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <div class="shangpin_center">
            <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['gthumb'];?>
" alt="" class="shangpin1">
            <div class="shangpin_right">
                <div class="shijian">
                    <span>02/22</span>
                </div>
                <h2><?php echo $_smarty_tpl->tpl_vars['v']->value['gname'];?>
</h2>
                <p class="sp_wenzi"><?php echo $_smarty_tpl->tpl_vars['v']->value['gdescription'];?>
</p>
                <p class="sp_wenzi">小屁桃 推荐</p>
            </div>
        </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </a>
</div>
<!-- 商品结束 -->
<?php $_smarty_tpl->_subTemplateRender("file:index/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
