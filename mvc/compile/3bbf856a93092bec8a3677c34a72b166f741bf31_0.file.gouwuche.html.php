<?php
/* Smarty version 3.1.30, created on 2018-04-24 05:21:14
  from "D:\wamp\www\mvc\app\views\index\gouwuche.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5adea2aa4d0596_90933224',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3bbf856a93092bec8a3677c34a72b166f741bf31' => 
    array (
      0 => 'D:\\wamp\\www\\mvc\\app\\views\\index\\gouwuche.html',
      1 => 1524540072,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/footer.html' => 1,
  ),
),false)) {
function content_5adea2aa4d0596_90933224 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>购物车</title>
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/gouwuche.css">
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/public.css">
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/footer.css">
	<meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/rem.js"><?php echo '</script'; ?>
>
</head>
<body>
	<!-- 头部开始 -->
	<div class="toubu">
		<h2 class="shopping">我的购物袋</h2>
		<span class="guanli">管理</span>
	</div>
	<!-- 头部结束 -->

	<!-- 名称开始 -->
	<div class="mingcheng">
		<span>Macy's</span>
		<div class="xiahuaxian"></div>
	</div>
	<!-- 名称结束 -->

	<!-- 查看更多开始 -->
	<div class="gengduo">
		<span class="chakan">查看更多Macy's商品 &gt;</span>
	</div>
	<!-- 查看更多结束 -->

	<!-- 商品开始 -->
	<div class="shangpin">
		<div class="sp_center">
			<div class="xuanze">
				<span class="duihao">&#xe633;</span>
			</div>
			<img src="<?php echo IMG_PATH;?>
/gouwuche_43.png" alt="" class="jg_shangpin">
			<div class="shangpin_right">
				<h2 class="miaoshu">Estee Lauder | 超值小棕瓶套装 - 价值$115美金</h2>
				<div class="shuliang">
					<h2 class="jian">-</h2>
					<div class="shuliang_xt"></div>
					<h2 class="shuliang1">1</h2>
					<div class="shuliang_xt"></div>
					<h2 class="jia">+</h2>
				</div>
				<span class="price">$68.00（约￥438）</span>
				
				<img src="<?php echo IMG_PATH;?>
/manzeng1_105.png" alt="" class="manzeng1">
				<img src="<?php echo IMG_PATH;?>
/manzeng_100.png" alt="" class="manzeng">
			</div>
		</div>
	</div>
	<!-- 商品结束 -->

	<!-- 免费礼品开始 -->
	<div class="gift">
		<h2>免费礼品</h2>
	</div>
	<div class="gift1">
		<img src="<?php echo IMG_PATH;?>
/gouwuche1_58.png" alt="" class="gouwuimg">
		<div class="gift1_right">
			<h2 class="free">Free 2pc skincare gift with $55 Estee Lauder purchase</h2>
			<p class="free1">Free 2pc skincare gift with $55 Estee Lauder purchase</p>
			<span class="num1">1</span>
			<span class="mianfei">免费礼品</span>
		</div>
	</div>
	<!-- 免费礼品结束 -->

	<div class="huisekuai"></div>

	<!-- 计算开始 -->
	<div class="jiesuan">
		<div class="jiesuan_center">
			<div class="guonei">
				<img src="<?php echo IMG_PATH;?>
/fangzi_36.png" alt="" class="fangzi">
				<p class="jiesuan_wz">结算信息根据国内地址结算</p>
				<h3 class="heji">商品合计</h3>
				<h3 class="heji_price">$68</h3>
			</div>
			<div class="xiantiao"></div>
			<div class="xiaofeishui">
				<h3 class="xfs_wz">消费税<span class="wenhao">&#xe64f;</span></h3>
				<h3 class="xfs_price">$0</h3>
			</div>
			<div class="xiantiao"></div>
			<div class="guonei guonei1">
				<img src="<?php echo IMG_PATH;?>
/xiaoqiche_20.png" alt="" class="qiche">
				<p class="jiesuan_wz">商家运费（Macy's收取）</p>	
				<h3 class="heji_price heji_price1">$0</h3>
				<img src="<?php echo IMG_PATH;?>
/xiaofeishui_31.png" alt="" class="xfs_img">
			</div>
		</div>
	</div>
	<!-- 计算结束 -->

	<div class="huisekuai"></div>

	<!-- 国际物流开始 -->
	<div class="jiesuan jiesuan1">
		<div class="jiesuan_center jiesuan_center1">
			<div class="guonei">
				<img src="<?php echo IMG_PATH;?>
/feiji1_03.png" alt="" class="feiji">
				<p class="jiesuan_wz jiesuan_wz1">国际物流</p>
				<h3 class="zhiyou">玩美直邮 &gt;</h3>
				<h3 class="heji yunfei">国际运费</h3>
				<h3 class="heji_price">$15</h3>
			</div>
			<div class="xiantiao"></div>
			<div class="xiaofeishui">
				<h3 class="xfs_wz">关税<span class="wenhao">&#xe64f;</span></h3>
				<h3 class="xfs_price">玩美补贴关税 &gt;</h3>
			</div>
		</div>
	</div>
	<!-- 国际物流结束 -->

	<div class="huisekuai"></div>

	<!-- 代金券开始 -->
	<div class="daijinquan">
		<img src="<?php echo IMG_PATH;?>
/daijinquan1_11.png" alt="" class="tubiao_djq">
		<p class="djq_title">玩美代金券</p>
		<p class="wukeyong">无可用代金券 &gt;</p>
	</div>
	<!-- 代金券结束 -->

	<div class="huisekuai"></div>

	<!-- 结算开始 -->
	<div class="qujiesuan">
		<div class="xuanze xuanze_js">
			<span class="duihao">&#xe633;</span>
		</div>
		<h2 class="quanxuan">全选</h2>
		<p class="js_heji">合计：<i class="zongjine">￥534.10（$83.00）</i></p>
		<div class="black">
			<span>去结算（1）</span>
		</div>
	</div>
	<!-- 结算结束 -->
<?php $_smarty_tpl->_subTemplateRender("file:index/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<?php }
}
