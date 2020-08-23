<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-23 18:22:01
  from 'D:\Full_Stack\php\server\8.17\mvc\application\template\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f42b3c924ac17_24916032',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a4c24b5c6be3288f311abd06e8e04d5d54aedfa' => 
    array (
      0 => 'D:\\Full_Stack\\php\\server\\8.17\\mvc\\application\\template\\index.html',
      1 => 1598206919,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f42b3c924ac17_24916032 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>后台首页</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            text-decoration: none;
        }
        .header{
            width: 100%;
            height: 100px;
            background-color: #FBD7BF;
            position: relative;
        }
        .title{
            display: block;
            height: 20px;
            width: 300px;
            font-size: 30px;
            position: absolute;
            top: 40px;
            left: 50px;
            color: #9B410E;
            font-family: "华文行楷";
        }
        .uname{
            display: block;
            height: 20px;
            width: 80px;
            font-size: 10px;
            color: #9B410E;
            position: absolute;
            top: 40px;
            right: 100px;
            line-height: 20px;

        }
        .out{
            display: block;
            height: 20px;
            width: 50px;
            font-size: 10px;
            color: #9B410E;
            position: absolute;
            top: 40px;
            right: 50px;
            line-height: 20px;
        }
        .bottom div{
            width: 100%;
            height: 50px;
            background-color: #FDECE4;
            font-size: 10px;
            text-align: center;
            position: fixed;
            bottom: 0;
            line-height: 50px;
            color: #9B410E;
        }
        .main{
            width: 100%;
            height: 500px;
        }
        .left{
            width: 20%;
            height: 100%;
            border-right: 3px solid #FBD7BF;
            float: left;
            box-sizing: border-box;
        }
        .right{
            width: 80%;
            height: 100%;
            float: left;
            box-sizing: border-box;
        }
        iframe{
            width: 100%;
            height: 100%;
        }
        .father{
            width: 100%;
            height: 40px;
            background-color: #FDECE4;
            text-align: center;
            line-height: 40px;
            font-family: "华文仿宋";
            font-size: 16px;
            color: #9B410E;
            font-weight: bold;
        }
        .son{

        }
        .son li a{
            color: #9B410E;
        }
    </style>
</head>
<body>
<div class="header">
    <span class="title">欢迎使用xx系统</span>
    <span class="uname">欢迎<?php echo $_smarty_tpl->tpl_vars['uname']->value;?>
</span>
    <a href="/8.17/mvc/index.php/admin/index/logout" class="out">退出登陆></a>
</div>
<div class="main">
    <div class="left">
        <ul>
            <li class="father">
                用户管理
                <ul class="son">
                    <li><a href="admin.html" target="main">添加用户</a></li>
                    <li><a href="http://baidu.com" target="main">修改用户</a></li>
                </ul>
            </li>

        </ul>
    </div>
    <div class="right">
        <iframe src="" frameborder="0" name="main"></iframe>
    </div>
</div>
<div class="bottom">
    <div>版权信息：xxxxxx   xxxxxxx有限公司   联系方式：xxxxxx</div>
</div>
</body>
</html><?php }
}
