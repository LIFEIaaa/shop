<?php
/* Smarty version 3.1.30, created on 2018-04-24 02:46:50
  from "D:\wamp\www\mvc\app\views\admin\orderadd.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ade7e7a710c55_17641135',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c987d76e692bf6d77bf9265830a6c024d33fda3' => 
    array (
      0 => 'D:\\wamp\\www\\mvc\\app\\views\\admin\\orderadd.html',
      1 => 1524477000,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/header.html' => 1,
  ),
),false)) {
function content_5ade7e7a710c55_17641135 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:admin/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
<div class="panel admin-panel">
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>增加订单</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="index.php?m=admin&c=order&a=checkorderadd">
      <div class="form-group">
        <div class="label">
          <label>商品id：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="gid" data-validate="required:请输入商品id" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>商品数量：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="gnumber" data-validate="required:请输入商品数量" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>商品价格：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="gprice" data-validate="required:请输入商品价格" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>用户id：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="uid" data-validate="required:请输入用户id" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>配送地址：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="aid" data-validate="required:请输入详细地址" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>订单状态：</label>
        </div>
        <div class="field" style="padding-top:8px;">
          未付款 <input value="0"  type="radio" name="ostate" />
          已付款 <input value="1" type="radio" name="ostate" />
          未发货 <input value="2"  type="radio" name="ostate" />
          配送中 <input value="3" type="radio" name="ostate" />
          已收货 <input value="4"  type="radio" name="ostate" />
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="submit"> 提交</button>
        </div>
      </div>
    </form>
  </div>
</div>
</body>
</html><?php }
}
