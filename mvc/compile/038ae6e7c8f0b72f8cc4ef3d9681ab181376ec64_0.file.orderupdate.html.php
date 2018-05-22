<?php
/* Smarty version 3.1.30, created on 2018-04-24 02:46:47
  from "D:\wamp\www\mvc\app\views\admin\orderupdate.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ade7e779c7096_57670200',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '038ae6e7c8f0b72f8cc4ef3d9681ab181376ec64' => 
    array (
      0 => 'D:\\wamp\\www\\mvc\\app\\views\\admin\\orderupdate.html',
      1 => 1524530625,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/header.html' => 1,
  ),
),false)) {
function content_5ade7e779c7096_57670200 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:admin/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
<div class="panel admin-panel">
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>修改订单</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="index.php?m=admin&c=order&a=checkorderupdate">
      <input type="hidden" name="oid" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['oid'];?>
">
      <div class="form-group">
        <div class="label">
          <label>商品id：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['gid'];?>
" name="gid" data-validate="required:请输入商品id" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>商品数量：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['gnumber'];?>
" name="gnumber" data-validate="required:请输入商品数量" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>商品价格：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['gprice'];?>
" name="gprice" data-validate="required:请输入商品价格" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>用户id：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['uid'];?>
" name="uid" data-validate="required:请输入用户id" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>配送地址：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['aid'];?>
" name="aid" data-validate="required:请输入详细地址" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>订单状态：</label>
        </div>
        <div class="field" style="padding-top:8px;">
          未付款 <input value="0"  type="radio" name="ostate" <?php if ($_smarty_tpl->tpl_vars['data']->value['ostate'] == 0) {?>checked<?php }?> />
          已付款 <input value="1" type="radio" name="ostate" <?php if ($_smarty_tpl->tpl_vars['data']->value['ostate'] == 1) {?>checked<?php }?> />
          未发货 <input value="2"  type="radio" name="ostate" <?php if ($_smarty_tpl->tpl_vars['data']->value['ostate'] == 2) {?>checked<?php }?> />
          配送中 <input value="3" type="radio" name="ostate" <?php if ($_smarty_tpl->tpl_vars['data']->value['ostate'] == 3) {?>checked<?php }?> />
          已收货 <input value="4"  type="radio" name="ostate" <?php if ($_smarty_tpl->tpl_vars['data']->value['ostate'] == 4) {?>checked<?php }?> />
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
