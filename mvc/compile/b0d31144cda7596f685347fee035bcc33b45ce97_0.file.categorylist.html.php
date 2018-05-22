<?php
/* Smarty version 3.1.30, created on 2018-04-21 09:05:16
  from "D:\wamp\www\mvc\app\views\admin\categorylist.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5adae2ace080a0_35833819',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0d31144cda7596f685347fee035bcc33b45ce97' => 
    array (
      0 => 'D:\\wamp\\www\\mvc\\app\\views\\admin\\categorylist.html',
      1 => 1524294314,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/header.html' => 1,
  ),
),false)) {
function content_5adae2ace080a0_35833819 (Smarty_Internal_Template $_smarty_tpl) {
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
    <div class="panel-head"><strong class="icon-reorder"> 大分类列表</strong></div>
    <div class="padding border-bottom">
        <a href="index.php?m=admin&c=category&a=addcategory">
            <button type="button" class="button border-yellow"><span class="icon-plus-square-o"></span> 添加分类</button>
        </a>
    </div>
    <table class="table table-hover text-center">
        <tr>
            <th width="5%">id</th>
            <th width="15%">分类名称</th>
            <th width="10%">缩略图</th>
            <th width="10%">排序</th>
            <th width="10%">操作</th>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value["cid"];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value["cname"];?>
</td>
            <td><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['cthumb'];?>
" alt=""></td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value["corder"];?>
</td>
            <td>
                <div class="button-group">
                    <a class="button border-main" href="index.php?m=admin&c=category&a=updatecategory&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
"><span class="icon-edit"></span> 修改</a>
                    <a class="button border-red" href="index.php?m=admin&c=category&a=delcategory&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
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
            <td colspan="5">
                <div class="pagelist">
                    <?php echo $_smarty_tpl->tpl_vars['str']->value;?>

                </div>
            </td>
        </tr>
    </table>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
    function del(id, mid) {
        if (confirm("您确定要删除吗?")) {

        }
    }

<?php echo '</script'; ?>
>
</body>
</html><?php }
}
