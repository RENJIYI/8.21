<?php
/*
 * 后台管理-》通用
 * 后台（广义）：指的就是一个应用的服务器部分的内容 apache mysql文件
 * 狭义：指的就是一个应用的管理中心
 *
 * */

if(!defined("MVC")){
    die("非法侵入");
};

class index{
    function int(){
        echo "前台页面";

    }

    function del(){
        echo "删除";
    }
}