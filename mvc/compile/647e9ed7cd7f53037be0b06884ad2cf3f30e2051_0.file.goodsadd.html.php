<?php
/* Smarty version 3.1.30, created on 2018-04-24 05:59:11
  from "D:\wamp\www\mvc\app\views\admin\goodsadd.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5adeab8f74e866_32019177',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '647e9ed7cd7f53037be0b06884ad2cf3f30e2051' => 
    array (
      0 => 'D:\\wamp\\www\\mvc\\app\\views\\admin\\goodsadd.html',
      1 => 1524469980,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/header.html' => 1,
  ),
),false)) {
function content_5adeab8f74e866_32019177 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:admin/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="panel admin-panel margin-top">
    <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>添加商品</strong></div>
    <div class="body-content">
        <form method="post" class="form-x" action="index.php?m=admin&c=goods&a=checkgoodsadd">

            <div class="form-group">
                <div class="label">
                    <label>商品名称：</label>
                </div>
                <div class="field">
                    <input type="text" class="input w50" name="gname" />
                    <div class="tips"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>缩略图：</label>
                </div>
                <div class="field">
                    <input type="file" id="url1" name="img" class="input tips" style="width:25%; float:left;"  value=""  data-toggle="hover" data-place="right" data-image="" />
                    <input type="button" class="button bg-blue margin-left" id="image1" value="+ 浏览上传"  style="float:left;" data-url="index.php?m=admin&c=goods&a=upload">
                    <input type="hidden" name="gthumb" id="hidden">
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>多图片：</label>
                </div>
                <div class="field">
                    <input type="file" id="url2" name="img" class="input tips" style="width:25%; float:left;"  value=""  data-toggle="hover" data-place="right" data-image="" multiple />
                    <input type="button" class="button bg-blue margin-left" id="image2" value="+ 浏览上传"  style="float:left;" data-url="index.php?m=admin&c=goods&a=upload">
                    <div class="tipss">图片尺寸：500*500</div>
                    <input type="hidden" name="gpictures" id="hidden2">
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>所属分类：</label>
                </div>
                <div class="field" style="padding-top:8px;">
                    <select name="tid" id="" class="w50">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['types']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['tid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value["tname"];?>
</option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>价格：</label>
                </div>
                <div class="field">
                    <input type="text" class="input w50" name="gprice" />
                    <div class="tips"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>描述：</label>
                </div>
                <div class="field">
                    <input type="text" class="input w50" name="gdescription" />
                    <div class="tips"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>是否推荐：</label>
                </div>
                <div class="field" style="padding-top:8px;">
                    推荐 <input type="radio"name="grecommend" value="1" />
                    不推荐 <input type="radio" name="grecommend" value="0" checked />
                    <div class="tips"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>排序：</label>
                </div>
                <div class="field">
                    <input type="text" class="input w50" name="gorder" />
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
