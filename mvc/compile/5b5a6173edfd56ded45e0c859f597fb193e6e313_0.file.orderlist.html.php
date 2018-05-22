<?php
/* Smarty version 3.1.30, created on 2018-04-23 12:00:00
  from "D:\wamp\www\mvc\app\views\admin\orderlist.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5addaea0c9e2c4_99705561',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b5a6173edfd56ded45e0c859f597fb193e6e313' => 
    array (
      0 => 'D:\\wamp\\www\\mvc\\app\\views\\admin\\orderlist.html',
      1 => 1524477599,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/header.html' => 1,
  ),
),false)) {
function content_5addaea0c9e2c4_99705561 (Smarty_Internal_Template $_smarty_tpl) {
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
<form method="post" action="" id="listform">
    <div class="panel admin-panel">
        <div class="panel-head"><strong class="icon-reorder"> 订单列表</strong> <a href="" style="float:right; display:none;">添加订单</a>
        </div>
        <div class="padding border-bottom">
            <ul class="search" style="padding-left:10px;">
                <li>
                    <a class="button border-main icon-plus-square-o" href="index.php?m=admin&c=order&a=addorder"> 添加订单</a>
                </li>
            </ul>
        </div>
        <table class="table table-hover text-center">
            <tr>
                <th>id</th>
                <th>商品id</th>
                <th>商品数量</th>
                <th>商品价格</th>
                <th>用户id</th>
                <th>配送地址</th>
                <th>订单状态</th>
                <th>操作</th>
            </tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['oid'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['gid'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['gnumber'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['gprice'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['aid'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['ostate'];?>
</td>
                <td>
                    <div class="button-group">
                        <a class="button border-main" href="index.php?m=admin&c=order&a=updateorder&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['oid'];?>
">
                            <span class="icon-edit"></span> 修改
                        </a>
                        <a class="button border-red" href="index.php?m=admin&c=order&a=delorder&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['oid'];?>
">
                        <span class="icon-trash-o"></span> 删除
                        </a>
                    </div>
                </td>
            </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            <tr>
                <td colspan="8">
                    <div class="pagelist">
                        <?php echo $_smarty_tpl->tpl_vars['str']->value;?>

                    </div>
                </td>
            </tr>
        </table>
    </div>
</form>
<?php echo '<script'; ?>
 type="text/javascript">

    //搜索
    function changesearch() {

    }

    //单个删除
    function del(id, mid, iscid) {
        if (confirm("您确定要删除吗?")) {

        }
    }

    //全选
    $("#checkall").click(function () {
        $("input[name='id[]']").each(function () {
            if (this.checked) {
                this.checked = false;
            }
            else {
                this.checked = true;
            }
        });
    })

    //批量删除
    function DelSelect() {
        var Checkbox = false;
        $("input[name='id[]']").each(function () {
            if (this.checked == true) {
                Checkbox = true;
            }
        });
        if (Checkbox) {
            var t = confirm("您确认要删除选中的内容吗？");
            if (t == false) return false;
            $("#listform").submit();
        }
        else {
            alert("请选择您要删除的内容!");
            return false;
        }
    }

    //批量排序
    function sorts() {
        var Checkbox = false;
        $("input[name='id[]']").each(function () {
            if (this.checked == true) {
                Checkbox = true;
            }
        });
        if (Checkbox) {

            $("#listform").submit();
        }
        else {
            alert("请选择要操作的内容!");
            return false;
        }
    }


    //批量首页显示
    function changeishome(o) {
        var Checkbox = false;
        $("input[name='id[]']").each(function () {
            if (this.checked == true) {
                Checkbox = true;
            }
        });
        if (Checkbox) {

            $("#listform").submit();
        }
        else {
            alert("请选择要操作的内容!");

            return false;
        }
    }

    //批量推荐
    function changeisvouch(o) {
        var Checkbox = false;
        $("input[name='id[]']").each(function () {
            if (this.checked == true) {
                Checkbox = true;
            }
        });
        if (Checkbox) {


            $("#listform").submit();
        }
        else {
            alert("请选择要操作的内容!");

            return false;
        }
    }

    //批量置顶
    function changeistop(o) {
        var Checkbox = false;
        $("input[name='id[]']").each(function () {
            if (this.checked == true) {
                Checkbox = true;
            }
        });
        if (Checkbox) {

            $("#listform").submit();
        }
        else {
            alert("请选择要操作的内容!");

            return false;
        }
    }


    //批量移动
    function changecate(o) {
        var Checkbox = false;
        $("input[name='id[]']").each(function () {
            if (this.checked == true) {
                Checkbox = true;
            }
        });
        if (Checkbox) {

            $("#listform").submit();
        }
        else {
            alert("请选择要操作的内容!");

            return false;
        }
    }

    //批量复制
    function changecopy(o) {
        var Checkbox = false;
        $("input[name='id[]']").each(function () {
            if (this.checked == true) {
                Checkbox = true;
            }
        });
        if (Checkbox) {
            var i = 0;
            $("input[name='id[]']").each(function () {
                if (this.checked == true) {
                    i++;
                }
            });
            if (i > 1) {
                alert("只能选择一条信息!");
                $(o).find("option:first").prop("selected", "selected");
            } else {

                $("#listform").submit();
            }
        }
        else {
            alert("请选择要复制的内容!");
            $(o).find("option:first").prop("selected", "selected");
            return false;
        }
    }

<?php echo '</script'; ?>
>
</body>
</html><?php }
}
