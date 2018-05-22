<?php
/* Smarty version 3.1.30, created on 2018-04-23 09:22:21
  from "D:\wamp\www\mvc\app\views\admin\categoryupdate.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5add89ad163f70_70561553',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a8ea053e9073dd34884fcd02989d1d15a50fd5d' => 
    array (
      0 => 'D:\\wamp\\www\\mvc\\app\\views\\admin\\categoryupdate.html',
      1 => 1524468108,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/header.html' => 1,
  ),
),false)) {
function content_5add89ad163f70_70561553 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:admin/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="panel admin-panel margin-top">
    <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>修改分类</strong></div>
    <div class="body-content">
        <form method="post" class="form-x" action="index.php?m=admin&c=category&a=checkcategoryupdate">
            <input type="hidden" name="cid" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['cid'];?>
">
            <div class="form-group">
                <div class="label">
                    <label>分类标题：</label>
                </div>
                <div class="field">
                    <input type="text" class="input w50" name="cname" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['cname'];?>
" />
                    <div class="tips"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>缩略图：</label>
                </div>
                <div class="field">
                    <input type="file" id="url1" name="img" class="input tips" style="width:25%; float:left;"  value=""  data-toggle="hover" data-place="right" data-image="<?php echo $_smarty_tpl->tpl_vars['data']->value['cthumb'];?>
" />
                    <input type="button" class="button bg-blue margin-left" id="image1" value="+ 浏览上传"  style="float:left;" data-url="index.php?m=admin&c=category&a=upload">
                    <input type="hidden" name="cthumb" id="hidden" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['cthumb'];?>
">
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>排序：</label>
                </div>
                <div class="field">
                    <input type="text" class="input w50" name="corder" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['corder'];?>
" />
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
