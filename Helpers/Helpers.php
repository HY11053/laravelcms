<?php
/**
 * Created by PhpStorm.
 * User: liang
 * Date: 2017/2/19
 * Time: 21:05
 */
$arrs=[
    1 => [
        5 => [
            'list' => '零食店品牌ziji',
            'next' => [
                8 => [
                    'list' => '零食店加盟品牌大全555'
                    ,'next' => [
                        9 => 'dfsd' ]
                ]
            ]
        ],
        6 => '零食店品牌zijihhg',
        7 => '零食店品牌zijihhgjhh' ] ,
    2 => [ 10 => '零食店加盟品牌大全' ,11 => '零食店加盟品牌大全dfdd']
];

function deli($arr){
    if(!is_array($arr)){
        return false;
    }else{
        foreach ($arr as $key=>$value){
            if(!is_array($value))
            {
                echo " <li><a href=\"#\"><i class=\"fa fa-envelope-o\"></i> $value
                                <span class=\"label label-primary pull-right\">12</span><span class=\"label label-danger pull-right\">删除</span> <span class=\"label label-success pull-right\">编辑</span> <span class=\"label label-warning pull-right\">添加子类</span></a></li>";
            }else{
                //print_r($value);
                echo "<div class=\"box box-solid collapsed-box\">
                                            <div class=\"box-header with-border\">
                                                <h3 class=\"box-title\"><i class='fa fa-long-arrow-down' style='padding-left: 10px;'>sub colums</i></h3>

                                                <div class=\"box-tools\">
                                                    <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-plus\"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class=\"box-body no-padding\">
                                                <ul class=\"nav nav-pills nav-stacked\">";
                                                foreach ($value as $item){
                                                    //print_r($item);
                                                    if(!is_array($item)){
                                                        echo "<li class=\"active\"><a href=\"#\"><i class=\"fa fa-inbox\"></i>".$item." 
                                                            <span class=\"label label-primary pull-right\">12</span><span class=\"label label-danger pull-right\">删除</span> <span class=\"label label-success pull-right\">编辑</span> <span class=\"label label-warning pull-right\">添加子类</span></a></li>";
                                                    }else{
                                                        deli($item);
                                                    }
                                                }
                                            echo "</ul>
                                            </div>
                                        </div>";
                                            }




        }
    }
}



