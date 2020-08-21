<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-20 16:43:07
  from 'D:\Full_Stack\php\server\8.17\mvc\application\template\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f3ea81bdd1626_88088795',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a4c24b5c6be3288f311abd06e8e04d5d54aedfa' => 
    array (
      0 => 'D:\\Full_Stack\\php\\server\\8.17\\mvc\\application\\template\\index.html',
      1 => 1597939492,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f3ea81bdd1626_88088795 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
这是我的首页111
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
<ul>
    <li><?php echo $_smarty_tpl->tpl_vars['v']->value["name"];?>
</li>
    <li><?php echo $_smarty_tpl->tpl_vars['v']->value["age"];?>
</li>
    <li><?php echo $_smarty_tpl->tpl_vars['v']->value["sex"];?>
</li>
</ul>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</body>
</html><?php }
}
