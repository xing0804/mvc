<?php
class reg extends main{
    function add(){
//        $smarty=new Smarty();
//        $smarty->setTemplateDir(TPL_PATH);
//        $smarty->setCompileDir(COMPILE_PATH);
//
//        $smarty->display("reg.html");
        $this->smarty->display("reg.html");
    }
    function addUser(){
        $uname=$_POST["uname"];
        $pass1=$_POST["pass1"];
        $pass2=$_POST["pass2"];
        if($pass1!==$pass2){
            echo "密码不一致";
            return;
        }
        //连接数据库
//        $db=@new mysqli("localhost","root","","admin","3306");
//        if(mysqli_connect_error()){
//            die("数据库连接错误！");
//        }
//
//        $db->query("set names utf8");
        $db=$this->db;

        $result=$db->query("select uname from login where uname='$uname'");
        if($result->num_rows>0){
            echo "用户名存在！";
            return;
        }

        $pass1=md5(md5($pass1));

        //对数据库进行操作
        $result=$db->query("insert into login (uname,pass) values ('$uname','$pass1')");

        if($db->affected_rows>0){
            echo "插入成功";
        }else{
            echo "插入失败";
        }

        //将数据从结果中取出来
//        $data=array();
//        while ($row=$result->fetch_assoc()){
//            $data[]=($row);
//        }
    }
}