<?php
if(!defined("MVC")){
    die("非法入侵！");
}

use \libs\cookie;
include_once LIBS_PATH."cookie.class.php";

class index extends main{
    function int(){
//        $smarty=new Smarty();
//        $smarty->setTemplateDir(TPL_PATH);
//        $smarty->setCompileDir(COMPILE_PATH);
//
//        $smarty->display("admin.html");
        $this->smarty->display("admin.html");
    }
    function login(){
        $uname=$_POST["uname"];
        $pass1=md5(md5($_POST["pass1"]));

        if(strlen($uname)<5||empty($pass1)){
            echo "用户名或者密码格式不正确！";
        }

        //匹配数据
        //连接数据库
//        $db=@new mysqli("localhost","root","","admin","3306");
//        if(mysqli_connect_error()){
//            die("数据库连接错误！");
//        }
//
//        $db->query("set names utf8");

        $db=$this->db;

        $result=$db->query("select * from login where uname='$uname' and '$pass1'");

        if($result->num_rows<1){
            echo "没有相应的用户";
        }else{
//            $cookie=new cookie();
//            $cookie->setCookie("login","yes");
            $_SESSION["login"]="yes";
            $_SESSION["uname"]=$uname;
            header("location:/8.17/mvc/index.php/admin/index/first");
        }
    }

    function logout(){
        session_destroy();
        header("location:/8.17/mvc/index.php/admin");
    }
    
    function first(){
//        $cookie=new cookie();
//        if($cookie->isCookie("login")&&$cookie->getCookie("login")=="yes"){
//            echo "后台首页";
//        }else{
//            header("location:/8.17/mvc/index.php/admin");
//        }

        if(isset($_SESSION["login"])&&$_SESSION["login"]=="yes"){
            $smarty=new Smarty();
            $smarty->setTemplateDir(TPL_PATH);
            $smarty->setCompileDir(COMPILE_PATH);

            $smarty->assign("uname",$_SESSION['uname']);

            $smarty->display("index.html");

        }else{
            header("location:/8.17/mvc/index.php/admin");
        }

    }

}
