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

        //从该数据库里面读取
        $arr=array(
            array(
                "name"=>"zhangsan",
                "age"=>20,
                "sex"=>"man",
            ),
            array(
                "name"=>"zhangsan",
                "age"=>20,
                "sex"=>"man",
            ),
            array(
                "name"=>"zhangsan",
                "age"=>20,
                "sex"=>"man",
            ),
            array(
                "name"=>"zhangsan",
                "age"=>20,
                "sex"=>"man",
            ),
            array(
                "name"=>"zhangsan",
                "age"=>20,
                "sex"=>"man",
            ),
        );

        $smarty->assign("data",$arr);

        $smarty->display("index.html");
    }
}