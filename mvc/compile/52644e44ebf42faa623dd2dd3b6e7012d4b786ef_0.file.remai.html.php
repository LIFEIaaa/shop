<?php
/* Smarty version 3.1.30, created on 2018-04-24 05:18:55
  from "D:\wamp\www\mvc\app\views\index\remai.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5adea21f6e0fa0_22983320',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52644e44ebf42faa623dd2dd3b6e7012d4b786ef' => 
    array (
      0 => 'D:\\wamp\\www\\mvc\\app\\views\\index\\remai.html',
      1 => 1524539931,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/footer.html' => 1,
  ),
),false)) {
function content_5adea21f6e0fa0_22983320 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>热卖榜单</title>
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/remai.css">
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
	<div id="guanzhu">
		<div class="guanzhu_top">
			<a href="index.php"><span class="hanbao">&lt;</span></a>
			<div class="gz_box">
				<span class="gz">热卖榜单</span>
			</div>
		</div>
	</div>
	<!-- 头部结束 -->

	<!-- 分类开始 -->
	<div id="feilei">
		<div class="hufu">
			<span>护肤美妆</span>
			<div class="xiahuaxian"></div>
		</div>
		<div class="hufu">
			<span>女士包袋</span>
			<div class="xiahuaxian xiahuaxian1"></div>
		</div>
		<div class="hufu">
			<span>女士配饰</span>
			<div class="xiahuaxian xiahuaxian1"></div>
		</div>
		<div class="hufu">
			<span>女士鞋靴</span>
			<div class="xiahuaxian xiahuaxian1"></div>
		</div>
		<div class="hufu">
			<span>男士服装</span>
			<div class="xiahuaxian xiahuaxian1"></div>
		</div>
		<div class="hufu">
			<span>男士鞋类</span>
			<div class="xiahuaxian xiahuaxian1"></div>
		</div>
		<div class="hufu">
			<span>儿童婴孩</span>
			<div class="xiahuaxian xiahuaxian1"></div>
		</div>
	</div>
	<!-- 分类结束 -->

	<!-- 热卖品牌开始 -->
	<div id="remai_pinpai">
		<div class="remai_di">
			<span>热卖品牌</span>
		</div>
		<div class="remai_pp">
			<div class="remai_pp1">
				<a href="">
					<img src="<?php echo IMG_PATH;?>
/shemaipinpai_03.png" alt="" class="pinpaiimg">
					<span class="yashi">雅诗兰黛</span>
				</a>
			</div>
			<div class="remai_pp1 remai_pp2">
				<a href="">
					<img src="<?php echo IMG_PATH;?>
/shemaipinpai_05.png" alt="" class="pinpaiimg">
					<span class="yashi">兰蔻</span>
				</a>
			</div>
			<div class="remai_pp1 remai_pp2">
				<a href="">
					<img src="<?php echo IMG_PATH;?>
/shemaipinpai_07.png" alt="" class="pinpaiimg">
					<span class="yashi">科颜氏</span>
				</a>
			</div>
			<div class="remai_pp1 remai_pp2">
				<a href="">
					<img src="<?php echo IMG_PATH;?>
/shemaipinpai_09.png" alt="" class="pinpaiimg">
					<span class="yashi">倩碧</span>
				</a>
			</div>
			<div class="remai_pp1 remai_pp2">
				<a href="">
					<img src="<?php echo IMG_PATH;?>
/shemaipinpai_11.png" alt="" class="pinpaiimg">
					<span class="yashi">悦木之源</span>
				</a>
			</div>

			<div class="remai_pp1 remai_pp3">
				<a href="">
					<img src="<?php echo IMG_PATH;?>
/shemaipinpai_19.png" alt="" class="pinpaiimg">
					<span class="yashi">伊丽莎白·雅顿</span>
				</a>
			</div>
			<div class="remai_pp1 remai_pp2 remai_pp3">
				<a href="">
					<img src="<?php echo IMG_PATH;?>
/shemaipinpai_20.png" alt="" class="pinpaiimg">
					<span class="yashi">芭比波朗</span>
				</a>
			</div>
			<div class="remai_pp1 remai_pp2 remai_pp3">
				<a href="">
					<img src="<?php echo IMG_PATH;?>
/shemaipinpai_22.png" alt="" class="pinpaiimg">
					<span class="yashi">海蓝之谜</span>
				</a>
			</div>
			<div class="remai_pp1 remai_pp2 remai_pp3">
				<a href="">
					<img src="<?php echo IMG_PATH;?>
/shemaipinpai_21.png" alt="" class="pinpaiimg">
					<span class="yashi">斐洛尔</span>
				</a>
			</div>
			<div class="remai_pp1 remai_pp2 remai_pp3">
				<a href="">
					<img src="<?php echo IMG_PATH;?>
/shemaipinpai_24.png" alt="" class="pinpaiimg">
					<span class="yashi">香缇卡</span>
				</a>
			</div>
		</div>
		<div class="sousuo">
			<input type="text" class="search" placeholder="抗氧化护肤品远离环境伤害">
			<img src="<?php echo IMG_PATH;?>
/jingxuan_40.png" alt="" class="jingxuan">
		</div>
	</div>
	<!-- 热卖品牌结束 -->

	<!-- 最热单品开始 -->
	<div id="hot">
		<div class="danpin">
			<span>最热单品</span>
		</div>
		<a href="xiangqingye.html">
			<div class="hot_danpin">
				<img src="<?php echo IMG_PATH;?>
/danpin_02.png" alt="" class="hot_img">
				<div class="hot_title">
					<h3>时尚唇膏-红色系 3g</h3>
					<h4>魅可</h4>
					<span class="hot_meiyuan">$17.5</span>
					<span class="hot_rmb">¥113</span>
					<img src="<?php echo IMG_PATH;?>
/meizhuang_13.png" alt="" class="meizhuang">
					<div class="dianzan">
						<img src="<?php echo IMG_PATH;?>
/xin_18.png" alt="" class="xin">
						<span class="renshu">1w9</span>
					</div>
				</div>
			</div>
		</a>
		<div class="hot_danpin">
			<img src="<?php echo IMG_PATH;?>
/danpin_03.png" alt="" class="hot_img">
			<div class="hot_title">
				<h3>唇彩</h3>
				<h4>纳斯彩妆</h4>
				<span class="hot_meiyuan">$26</span>
				<span class="hot_rmb">¥168</span>
				<img src="<?php echo IMG_PATH;?>
/meizhuang_13.png" alt="" class="meizhuang">
				<div class="dianzan">
					<img src="<?php echo IMG_PATH;?>
/xin_18.png" alt="" class="xin">
					<span class="renshu">924</span>
				</div>
			</div>
		</div>
		<div class="hot_danpin">
			<img src="<?php echo IMG_PATH;?>
/danpin1_02.png" alt="" class="hot_img">
			<div class="hot_title">
				<h3>时尚唇膏-迷你版 3g</h3>
				<h4>魅可</h4>
				<span class="hot_meiyuan">$10</span>
				<span class="hot_rmb">¥65</span>
				<img src="<?php echo IMG_PATH;?>
/meizhuang_13.png" alt="" class="meizhuang">
				<div class="dianzan">
					<img src="<?php echo IMG_PATH;?>
/xin_18.png" alt="" class="xin">
					<span class="renshu">1w3</span>
				</div>
			</div>
		</div>
		<div class="hot_danpin">
			<img src="<?php echo IMG_PATH;?>
/danpin2_02.png" alt="" class="hot_img">
			<div class="hot_title">
				<h3>Le Rouge Lipstick</h3>
				<h4>纪梵希</h4>
				<span class="hot_meiyuan">$40</span>
				<span class="hot_rmb">¥258</span>
				<img src="<?php echo IMG_PATH;?>
/meizhuang_13.png" alt="" class="meizhuang">
				<div class="dianzan">
					<img src="<?php echo IMG_PATH;?>
/xin_18.png" alt="" class="xin">
					<span class="renshu">186</span>
				</div>
			</div>
		</div>
		<div class="hot_danpin">
			<img src="<?php echo IMG_PATH;?>
/danpin2_03.png" alt="" class="hot_img">
			<div class="hot_title">
				<h3>空气轻垫唇油</h3>
				<h4>兰蔻</h4>
				<span class="hot_meiyuan">$22</span>
				<span class="hot_rmb">¥142</span>
				<img src="<?php echo IMG_PATH;?>
/meizhuang_13.png" alt="" class="meizhuang">
				<div class="dianzan">
					<img src="<?php echo IMG_PATH;?>
/xin_18.png" alt="" class="xin">
					<span class="renshu">4842</span>
				</div>
			</div>
		</div>
		<div class="hot_danpin">
			<img src="<?php echo IMG_PATH;?>
/danpin3_03.png" alt="" class="hot_img">
			<div class="hot_title">
				<h3>超值小棕瓶套装</h3>
				<h4>雅诗兰黛</h4>
				<span class="hot_meiyuan">$68</span>
				<span class="hot_rmb">¥439</span>
				<img src="<?php echo IMG_PATH;?>
/meizhuang_13.png" alt="" class="meizhuang">
				<div class="dianzan">
					<img src="<?php echo IMG_PATH;?>
/xin_18.png" alt="" class="xin">
					<span class="renshu">1485</span>
				</div>
			</div>
		</div>
		<div class="hot_danpin">
			<img src="<?php echo IMG_PATH;?>
/danpin4_02.png" alt="" class="hot_img">
			<div class="hot_title hot_title1">
				<h3>肌透修复眼部精华霜 15mL</h3>
				<h4>雅诗兰黛</h4>
				<span class="hot_meiyuan">$60</span>
				<span class="hot_rmb">¥388</span>
				<img src="<?php echo IMG_PATH;?>
/meizhuang_13.png" alt="" class="meizhuang">
				<div class="dianzan">
					<img src="<?php echo IMG_PATH;?>
/xin_18.png" alt="" class="xin">
					<span class="renshu">3064</span>
				</div>
			</div>
		</div>
		<div class="hot_danpin">
			<img src="<?php echo IMG_PATH;?>
/danpin4_03.png" alt="" class="hot_img">
			<div class="hot_title hot_title1">
				<h3>VIVA GLAM Sia 联名款唇膏</h3>
				<h4>魅可</h4>
				<span class="hot_meiyuan">$17.15</span>
				<span class="hot_rmb">¥114</span>
				<img src="<?php echo IMG_PATH;?>
/meizhuang_13.png" alt="" class="meizhuang">
				<div class="dianzan">
					<img src="<?php echo IMG_PATH;?>
/xin_18.png" alt="" class="xin">
					<span class="renshu">438</span>
				</div>
			</div>
		</div>
		<div class="hot_danpin">
			<img src="<?php echo IMG_PATH;?>
/danpin5_02.png" alt="" class="hot_img">
			<div class="hot_title hot_title1">
				<h3>温润系列丝滑滋养保湿水 400ml</h3>
				<h4>雅诗兰黛</h4>
				<span class="hot_meiyuan">$32</span>
				<span class="hot_rmb">¥207</span>
				<img src="<?php echo IMG_PATH;?>
/meizhuang_13.png" alt="" class="meizhuang">
				<div class="dianzan">
					<img src="<?php echo IMG_PATH;?>
/xin_18.png" alt="" class="xin">
					<span class="renshu">1022</span>
				</div>
			</div>
		</div>
		<div class="hot_danpin">
			<img src="<?php echo IMG_PATH;?>
/danpin5_03.png" alt="" class="hot_img">
			<div class="hot_title">
				<h3>铂萃御肤精华3件套装</h3>
				<h4>伊丽莎白·雅顿</h4>
				<span class="hot_meiyuan">$114.80</span>
				<span class="hot_rmb">¥742</span>
				<img src="<?php echo IMG_PATH;?>
/meizhuang_13.png" alt="" class="meizhuang">
				<div class="dianzan">
					<img src="<?php echo IMG_PATH;?>
/xin_18.png" alt="" class="xin">
					<span class="renshu">297</span>
				</div>
			</div>
		</div>
		<div class="hot_danpin hot_danpin1">
			<img src="<?php echo IMG_PATH;?>
/danpin6_02.png" alt="" class="hot_img">
			<div class="hot_title">
				<h3>腮红</h3>
				<h4>纳斯彩妆</h4>
				<span class="hot_meiyuan">$30</span>
				<span class="hot_rmb">¥194</span>
				<img src="<?php echo IMG_PATH;?>
/meizhuang_13.png" alt="" class="meizhuang">
				<div class="dianzan">
					<img src="<?php echo IMG_PATH;?>
/xin_18.png" alt="" class="xin">
					<span class="renshu">3219</span>
				</div>
			</div>
		</div>
		<div class="hot_danpin hot_danpin1">
			<img src="<?php echo IMG_PATH;?>
/danpin6_03.png" alt="" class="hot_img">
			<div class="hot_title hot_title1">
				<h3>时尚唇膏-桃红色系 3g</h3>
				<h4>魅可</h4>
				<span class="hot_meiyuan">$17.5</span>
				<span class="hot_rmb">¥113</span>
				<img src="<?php echo IMG_PATH;?>
/meizhuang_13.png" alt="" class="meizhuang">
				<div class="dianzan">
					<img src="<?php echo IMG_PATH;?>
/xin_18.png" alt="" class="xin">
					<span class="renshu">5674</span>
				</div>
			</div>
		</div>
	</div>
	<!-- 最热单品结束 -->
<?php $_smarty_tpl->_subTemplateRender("file:index/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
