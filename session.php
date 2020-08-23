<?php
//讲信息存储到服务器,给客户端返回一个加密的cookie
//自定义session名
session_id(md5("abcde"));
session_name("wyxsessid");
//打开session,在这之前不能有输出
session_start();



//设置session
//$_SESSION("name","zhangsan");
$_SESSION["name"]="zhangsan";
$_SESSION["age"]=20;
//获取session

echo $_SESSION["age"];
//卸载session,一个一个清空
unset($_SESSION["name"]);
//清空session
//session_destroy();
