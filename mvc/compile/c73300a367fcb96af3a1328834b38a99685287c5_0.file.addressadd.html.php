<?php
/* Smarty version 3.1.30, created on 2018-04-20 09:07:53
  from "D:\wamp\www\mvc\app\views\admin\addressadd.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad991c9053dd1_62525813',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c73300a367fcb96af3a1328834b38a99685287c5' => 
    array (
      0 => 'D:\\wamp\\www\\mvc\\app\\views\\admin\\addressadd.html',
      1 => 1524208061,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/header.html' => 1,
  ),
),false)) {
function content_5ad991c9053dd1_62525813 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:admin/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
<div class="panel admin-panel">
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>增加地址</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="index.php?m=admin&c=address&a=checkaddressadd">
      <div class="form-group">
        <div class="label">
          <label>所属用户id：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="uid" data-validate="required:请输入用户id" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>位置：</label>
        </div>
        <div class="field">
          <select name="province" id="province" class="input w50">
            <option >请选择省份</option>
          </select>
          <select name="city" id="city" class="input w50">
            <option value="">请选择市</option>
          </select>
          <select name="area" id="area" class="input w50">
            <option value="">请选择区</option>
          </select>
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>地址：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="location" data-validate="required:请输入详细地址" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
      <div class="label">
        <label>手机：</label>
      </div>
      <div class="field">
        <input type="text" class="input w50" value="" name="phone" data-validate="required:请输入手机号码" />
        <div class="tips"></div>
      </div>
    </div>
      <div class="form-group">
        <div class="label">
          <label>姓名：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="name" data-validate="required:请输入收件人姓名" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>邮编：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="postcode" data-validate="required:请输入邮编" />
          <div class="tips"></div>
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
<div id="address" data-src="<?php echo JS_PATH;?>
/area.json"></div>
</body>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/areaselect.js"><?php echo '</script'; ?>
>
</html><?php }
}
