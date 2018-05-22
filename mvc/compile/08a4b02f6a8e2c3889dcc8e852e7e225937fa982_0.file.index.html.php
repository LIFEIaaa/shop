<?php
/* Smarty version 3.1.30, created on 2018-04-24 02:46:25
  from "D:\wamp\www\mvc\app\views\admin\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ade7e61cdb772_79720190',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08a4b02f6a8e2c3889dcc8e852e7e225937fa982' => 
    array (
      0 => 'D:\\wamp\\www\\mvc\\app\\views\\admin\\index.html',
      1 => 1524530784,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/header.html' => 1,
  ),
),false)) {
function content_5ade7e61cdb772_79720190 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:admin/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body style="background-color:#f2f9fd;">
<div class="header bg-main">
  <div class="logo margin-big-left fadein-top">
    <h1><img src="<?php echo IMG_PATH;?>
/y.jpg" class="radius-circle rotate-hover" height="50" alt="" />后台管理中心</h1>
  </div>
  <div class="head-l">
      <a class="button button-little bg-green" href="" target="_blank"><span class="icon-home"></span> 前台首页</a> &nbsp;&nbsp;
      <a href="##" class="button button-little bg-blue"><span class="icon-wrench"></span> 清除缓存</a> &nbsp;&nbsp;
      <a class="button button-little bg-red" href="index.php?m=admin&c=login&a=logout"><span class="icon-power-off"></span> 退出登录</a> </div>
</div>
<div class="leftnav">
  <div class="leftnav-title"><strong><span class="icon-list"></span>菜单列表</strong></div>
  <h2><span class="icon-user"></span>基本设置</h2>
  <ul style="display:none">
    <li><a href="index.php?m=admin&c=login&a=changepass" target="right"><span class="icon-caret-right"></span>密码修改</a></li>
  </ul>   
  <h2><span class="icon-pencil-square-o"></span>用户模块</h2>
  <ul>
    <li><a href="index.php?m=admin&c=user&a=showuser" target="right"><span class="icon-caret-right"></span>用户管理</a></li>
    <li><a href="index.php?m=admin&c=address&a=showaddress" target="right"><span class="icon-caret-right"></span>地址管理</a></li>
  </ul>
  <h2><span class="icon-pencil-square-o"></span>商品模块</h2>
  <ul>
    <li><a href="index.php?m=admin&c=category&a=showcategory" target="right"><span class="icon-caret-right"></span>大分类管理</a></li>
    <li><a href="index.php?m=admin&c=type&a=showtype" target="right"><span class="icon-caret-right"></span>小分类管理</a></li>
    <li><a href="index.php?m=admin&c=goods&a=showgoods" target="right"><span class="icon-caret-right"></span>商品管理</a></li>
  </ul>
  <h2><span class="icon-pencil-square-o"></span>订单模块</h2>
  <ul>
    <li><a href="index.php?m=admin&c=order&a=showorder" target="right"><span class="icon-caret-right"></span>订单管理</a></li>
  </ul>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
$(function(){
  $(".leftnav h2").click(function(){
	  $(this).next().slideToggle(200);	
	  $(this).toggleClass("on"); 
  })
  $(".leftnav ul li a").click(function(){
	    $("#a_leader_txt").text($(this).text());
  		$(".leftnav ul li a").removeClass("on");
		$(this).addClass("on");
  })
});
<?php echo '</script'; ?>
>
<ul class="bread">
  <li><a href="" target="right" class="icon-home"> 首页</a></li>
  <li><a href="##" id="a_leader_txt">网站信息</a></li>

</ul>
<div class="admin">
  <iframe scrolling="auto" rameborder="0" src="" name="right" width="100%" height="100%"></iframe>
</div>
<div style="text-align:center;">

</div>
</body>
<?php }
}
