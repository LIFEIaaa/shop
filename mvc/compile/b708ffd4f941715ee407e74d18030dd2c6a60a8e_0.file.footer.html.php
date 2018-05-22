<?php
/* Smarty version 3.1.30, created on 2018-04-25 04:36:02
  from "D:\wamp\www\mvc\app\views\index\footer.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5adfe992bbb9d7_65130836',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b708ffd4f941715ee407e74d18030dd2c6a60a8e' => 
    array (
      0 => 'D:\\wamp\\www\\mvc\\app\\views\\index\\footer.html',
      1 => 1524623761,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5adfe992bbb9d7_65130836 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- 底部开始 -->
<div id="footer">
    <div class="footer_center">
        <a href="">
            <div class="shouye_icon" <?php if ($_smarty_tpl->tpl_vars['t']->value == 1) {?>id="active"<?php }?>>
                <a href="index.php">
                    <span class="shouye_color">&#xe62f;</span>
                    <i class="sy_xuanzhong">首页</i>
                </a>
            </div>
            <div class="shouye_icon shouye_icon1" <?php if ($_smarty_tpl->tpl_vars['t']->value == 2) {?>id="active"<?php }?>>
                <a href="index.php?m=index&c=category&a=init">
                <span class="shouye_color ">&#xe65b;</span>
                <i class="sy_xuanzhong shangcheng">品牌</i>
                </a>
            </div>
            <div class="shouye_icon shouye_icon1 shouye_icon2" <?php if ($_smarty_tpl->tpl_vars['t']->value == 3) {?>id="active"<?php }?>>
                <a href="index.php?m=index&c=shopping&a=init">
                    <span class="shouye_color ">&#xe6d7;</span>
                    <i class="sy_xuanzhong shangcheng">购物</i>
                </a>
            </div>
            <div class="shouye_icon shouye_icon1" <?php if ($_smarty_tpl->tpl_vars['t']->value == 4) {?>id="active"<?php }?>>
                <a href="index.php?m=index&c=my&a=init">
                    <span class="shouye_color ">&#xe663;</span>
                    <i class="sy_xuanzhong shangcheng ">我的</i>
                </a>
            </div>
        </a>
    </div>
</div>
<!-- 底部结束 -->
</body>
</html><?php }
}
