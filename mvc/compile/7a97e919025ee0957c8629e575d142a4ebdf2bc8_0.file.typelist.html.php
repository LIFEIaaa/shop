<?php
/* Smarty version 3.1.30, created on 2018-04-21 09:16:04
  from "D:\wamp\www\mvc\app\views\admin\typelist.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5adae5348c7eb8_90341044',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a97e919025ee0957c8629e575d142a4ebdf2bc8' => 
    array (
      0 => 'D:\\wamp\\www\\mvc\\app\\views\\admin\\typelist.html',
      1 => 1524294961,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/header.html' => 1,
  ),
),false)) {
function content_5adae5348c7eb8_90341044 (Smarty_Internal_Template $_smarty_tpl) {
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
    <div class="panel-head"><strong class="icon-reorder"> 小分类列表</strong></div>
    <div class="padding border-bottom">
        <a href="index.php?m=admin&c=type&a=addtype">
            <button type="button" class="button border-yellow"><span class="icon-plus-square-o"></span> 添加分类</button>
        </a>
    </div>
    <table class="table table-hover text-center">
        <tr>
            <th width="5%">id</th>
            <th width="5%">所属分类id</th>
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
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value["tid"];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value["cname"];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value["tname"];?>
</td>
            <td><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['tthumb'];?>
" alt=""></td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value["torder"];?>
</td>
            <td>
                <div class="button-group">
                    <a class="button border-main" href="index.php?m=admin&c=type&a=updatetype&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['tid'];?>
"><span class="icon-edit"></span> 修改</a>
                    <a class="button border-red" href="index.php?m=admin&c=type&a=deltype&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['tid'];?>
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
            <td colspan="6">
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
