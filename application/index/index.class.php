<?php
class index{
    function int (){
//        $en=new engin();
//        $en->setTemplateDir(TPL_PATH);
//        $en->setCompileDir(COMPILE_PATH);
//        $en->setCache(CACHE_PATH);
//        $en->cache=true;
//
//        $en->assign("name","zhangsan");
//        $en->assign("age",12);
//        $en->assign("sex","man");

        $smarty=new Smarty();
        $smarty->setTemplateDir(TPL_PATH);
        $smarty->setCompileDir(COMPILE_PATH);
//        $smarty->setCache(CACHE_PATH);
//        $smarty->cache=true;


        //连接数据库
        $db=@new mysqli("localhost","root","","one","3306");
        if(mysqli_connect_error()){
            die("数据库连接错误！");
        }

        $db->query("set names utf8");

        //对数据库进行操作
        $result=$db->query("select * from demo1");

        //将数据从结果中取出来
        $data=array();
        while ($row=$result->fetch_assoc()){
            $data[]=($row);
        }


        $smarty->assign("data",$data);

        $smarty->display("index.html");
    }
}