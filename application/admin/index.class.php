<?php
if(!defined("MVC")){
    die("非法入侵！");
}

class index{
    function int(){
        $smarty=new Smarty();
        $smarty->setTemplateDir(TPL_PATH);
        $smarty->setCompileDir(COMPILE_PATH);

        $smarty->display("admin.html");
    }
    function login(){
        $uname=$_POST("uname");
        $pass1=$_POST("pass1");
        //匹配数据
        //连接数据库
        $db=@new mysqli("localhost","root","","admin","3306");
        if(mysqli_connect_error()){
            die("数据库连接错误！");
        }

        $db->query("set names utf8");

        $result=$db->query("select * from login where uname='{$uname}' and '{$pass1}'");
        if($result->num_rows){
            header("loaction:/index.php/admin/index/first");
        }else{
            echo "没有相应的用户";
        }
    }
    function first(){
        echo "后台首页";
    }

}
