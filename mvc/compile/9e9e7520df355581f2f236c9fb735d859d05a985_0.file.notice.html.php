<?php
/* Smarty version 3.1.30, created on 2018-04-26 04:44:22
  from "D:\wamp\www\mvc\app\views\index\notice.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae13d06b20796_21271220',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e9e7520df355581f2f236c9fb735d859d05a985' => 
    array (
      0 => 'D:\\wamp\\www\\mvc\\app\\views\\index\\notice.html',
      1 => 1524710662,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae13d06b20796_21271220 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['notice']->value)) {?>
<style>
    #notice{
        width: 100%;
        height: 1rem;
        background: #f2f2f2;
        line-height: 1rem;
        text-align: center;
        color: #666;
        position: relative;
        font-size: 0.44rem;
    }
    #notice span{
        position: absolute;
        width: 0.75rem;
        height: 1rem;
        right: 0.2rem;
    }
</style>
<div id="notice"><?php echo $_smarty_tpl->tpl_vars['notice']->value;?>
<span>X</span></div>
<?php echo '<script'; ?>
>
    let close=document.querySelector("#notice span");
    close.onclick=function () {
        this.parentNode.parentNode.removeChild(this.parentNode);
    }
<?php echo '</script'; ?>
>
<?php }
}
}
