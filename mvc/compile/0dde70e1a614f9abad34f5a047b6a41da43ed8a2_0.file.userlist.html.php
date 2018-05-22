<?php
/* Smarty version 3.1.30, created on 2018-04-20 05:59:16
  from "D:\wamp\www\mvc\app\views\admin\userlist.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad96594be8669_17262316',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0dde70e1a614f9abad34f5a047b6a41da43ed8a2' => 
    array (
      0 => 'D:\\wamp\\www\\mvc\\app\\views\\admin\\userlist.html',
      1 => 1524196753,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/header.html' => 1,
  ),
),false)) {
function content_5ad96594be8669_17262316 (Smarty_Internal_Template $_smarty_tpl) {
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
        <div class="panel-head"><strong class="icon-reorder"> 用户列表</strong> <a href=""
                                                                               style="float:right; display:none;">添加字段</a>
        </div>
        <div class="padding border-bottom">
            <ul class="search" style="padding-left:10px;">
                <li>
                    <a class="button border-main icon-plus-square-o" href="index.php?m=admin&c=user&a=adduser"> 添加用户</a>
                </li>
            </ul>
        </div>
        <table class="table table-hover text-center">
            <tr>
                <th>id</th>
                <th>用户名</th>
                <th>密码</th>
                <th>头像</th>
                <th>电话</th>
                <th>性别</th>
                <th>操作</th>
            </tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['password'];?>
</td>
                <td><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['picture'];?>
" alt=""></td>
                <!--<td><?php echo $_smarty_tpl->tpl_vars['v']->value['picture'];?>
</td>-->
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['phone'];?>
</td>
                <?php if ($_smarty_tpl->tpl_vars['v']->value['sex'] == 1) {?><td>男</td><?php } else { ?><td>女</td><?php }?>
                <td>
                    <div class="button-group">
                        <a class="button border-main" href="index.php?m=admin&c=user&a=updateuser&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
">
                            <span class="icon-edit"></span> 修改
                        </a>
                        <a class="button border-red" href="index.php?m=admin&c=user&a=deluser&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
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
                <td colspan="7">
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
