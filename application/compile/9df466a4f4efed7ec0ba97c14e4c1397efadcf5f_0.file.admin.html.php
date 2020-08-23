<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-23 14:28:17
  from 'D:\Full_Stack\php\server\8.17\mvc\application\template\admin.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f427d01c09b99_87630187',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9df466a4f4efed7ec0ba97c14e4c1397efadcf5f' => 
    array (
      0 => 'D:\\Full_Stack\\php\\server\\8.17\\mvc\\application\\template\\admin.html',
      1 => 1598192895,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f427d01c09b99_87630187 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>后台首页</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
admin.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin.css">
</head>
<body>
<h1>后台管理系统</h1>
<form class="form-horizontal" action="/8.17/mvc/index.php/admin/index/login" method="post">
    <div class="form-group">
        <label for="uname" class="col-sm-2 control-label">用户名</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="uname" placeholder="用户名" name="uname">
        </div>
    </div>
    <div class="form-group">
        <label for="pass1" class="col-sm-2 control-label">密  码</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="pass1" placeholder="密码" name="pass1">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <div class="checkbox">
                <label>
                    <input type="checkbox"> 记住密码
                </label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">登陆</button>
            &nbsp;没有账号？请
            <a href="/8.17/mvc/index.php/admin/reg/add" class="btn btn-default">注册</a>
        </div>
    </div>
</form>

</body>
</html><?php }
}
