<?php
/* Smarty version 3.1.30, created on 2018-05-22 03:50:04
  from "D:\wamp\www\mvc\app\views\index\shezhi.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b03774cae4ee6_06874350',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4813342da8579814565c8850e0ec1442e0f29454' => 
    array (
      0 => 'D:\\wamp\\www\\mvc\\app\\views\\index\\shezhi.html',
      1 => 1526953803,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b03774cae4ee6_06874350 (Smarty_Internal_Template $_smarty_tpl) {
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
/shezhi.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/public.css">
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
        <a href="index.php?m=index&c=my&a=init"><span class="hanbao">&lt;</span></a>
        <div class="gz_box">
            <span class="gz">设置</span>
        </div>
    </div>
</div>
<!-- 头部结束 -->

<!--个人资料开始-->
<a href="index.php?m=index&c=my&a=setting">
    <div class="info">
        <div class="picture">
            <img src="" alt="">
        </div>
        <p>+86 15735519618</p>
        <i>&gt;</i>
    </div>
</a>

<!--接收开始-->
<div class="accept">
    <div class="accept1">
        <p>接收通知</p>
        <i>&gt;</i>
        <span class="not">未开启</span>
    </div>
    <div class="accept1">
        <p>清除缓存</p>
        <i>&gt;</i>
        <span class="not zhao">3.4M</span>
    </div>
    <div class="accept1 accept2">
        <p>给玩美评分</p>
        <i>&gt;</i>
    </div>
</div>
<div class="xieyi">
    <div class="accept1">
        <p>用户使用协议</p>
        <i>&gt;</i>
    </div>
</div>
<a href="index.php?m=index&c=my&a=logout">
    <div class="xieyi" id="logout">
        <p class="close">退出登录</p>
    </div>
</a>
</body>
<?php echo '<script'; ?>
>
    let logout = document.querySelector("#logout");
    logout.onclick = function () {
        localStorage.removeItem("phone");
        location.href = "index.php?m=index&c=my&a=logout";
    }
<?php echo '</script'; ?>
>

</html><?php }
}
