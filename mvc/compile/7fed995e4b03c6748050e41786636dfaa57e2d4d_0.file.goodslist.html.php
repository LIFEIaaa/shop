<?php
/* Smarty version 3.1.30, created on 2018-04-23 09:00:04
  from "D:\wamp\www\mvc\app\views\admin\goodslist.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5add84747f2752_52217042',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7fed995e4b03c6748050e41786636dfaa57e2d4d' => 
    array (
      0 => 'D:\\wamp\\www\\mvc\\app\\views\\admin\\goodslist.html',
      1 => 1524466800,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/header.html' => 1,
  ),
),false)) {
function content_5add84747f2752_52217042 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:admin/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<style>
    td img{
        width: 50px;
        height: 50px;
        border-radius: 50%;
    }
</style>
<body>

<div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder"> 商品列表</strong></div>
    <div class="padding border-bottom">
        <a href="index.php?m=admin&c=goods&a=addgoods">
            <button goods="button" class="button border-yellow"><span class="icon-plus-square-o"></span> 添加商品</button>
        </a>
    </div>
    <table class="table table-hover text-center">
        <tr>
            <th width="5%">id</th>
            <th width="5%">所属分类</th>
            <th width="5%">商品名称</th>
            <th width="5%">缩略图</th>
            <th width="10%">多图片</th>
            <th width="5%">价格</th>
            <th width="5%">描述</th>
            <th width="5%">是否推荐</th>
            <th width="5%">排序</th>
            <th width="10%">操作</th>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value["gid"];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value["tname"];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value["gname"];?>
</td>
            <td><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['gthumb'];?>
" alt=""></td>
            <td>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['v']->value["gpictures"], 'src');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['src']->value) {
?>
                <img src="<?php echo $_smarty_tpl->tpl_vars['src']->value;?>
" alt="">
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value["gprice"];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value["gdescription"];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value["grecommend"];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value["gorder"];?>
</td>
            <td>
                <div class="button-group">
                    <a class="button border-main" href="index.php?m=admin&c=goods&a=updategoods&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['gid'];?>
"><span class="icon-edit"></span> 修改</a>
                    <a class="button border-red" href="index.php?m=admin&c=goods&a=delgoods&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['gid'];?>
"><span class="icon-trash-o"></span>
                    删除</a></div>
            </td>
        </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        <tr>
            <td colspan="10">
                <div class="pagelist">
                    <?php echo $_smarty_tpl->tpl_vars['str']->value;?>

                </div>
            </td>
        </tr>
    </table>
</div>

<?php echo '<script'; ?>
 goods="text/javascript">
    function del(id, mid) {
        if (confirm("您确定要删除吗?")) {

        }
    }

<?php echo '</script'; ?>
>
</body>
</html><?php }
}
