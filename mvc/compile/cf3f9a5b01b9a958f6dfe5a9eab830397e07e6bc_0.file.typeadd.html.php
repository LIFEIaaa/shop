<?php
/* Smarty version 3.1.30, created on 2018-04-23 09:14:24
  from "D:\wamp\www\mvc\app\views\admin\typeadd.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5add87d0a366e8_74507750',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf3f9a5b01b9a958f6dfe5a9eab830397e07e6bc' => 
    array (
      0 => 'D:\\wamp\\www\\mvc\\app\\views\\admin\\typeadd.html',
      1 => 1524467654,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/header.html' => 1,
  ),
),false)) {
function content_5add87d0a366e8_74507750 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:admin/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="panel admin-panel margin-top">
    <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>添加分类</strong></div>
    <div class="body-content">
        <form method="post" class="form-x" action="index.php?m=admin&c=type&a=checktypeadd">
            <div class="form-group">
                <div class="label">
                    <label>分类标题：</label>
                </div>
                <div class="field">
                    <input type="text" class="input w50" name="tname" />
                    <div class="tips"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>所属分类id：</label>
                </div>
                <div class="field">
                    <input type="text" class="input w50" name="cid" />
                    <div class="tips"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>缩略图：</label>
                </div>
                <div class="field">
                    <input type="file" id="url1" name="img" class="input tips" style="width:25%; float:left;"  value=""  data-toggle="hover" data-place="right" data-image="" />
                    <input type="button" class="button bg-blue margin-left" id="image1" value="+ 浏览上传"  style="float:left;" data-url="index.php?m=admin&c=type&a=upload">
                    <input type="hidden" name="tthumb" id="hidden">
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>排序：</label>
                </div>
                <div class="field">
                    <input type="text" class="input w50" name="torder" />
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
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/upload.js"><?php echo '</script'; ?>
>
</body>
<?php }
}
