<?php
/**
 * Created by PhpStorm.
 * User: liang
 * Date: 2017/2/19
 * Time: 21:05
 */

/**
 * 对栏目返回的多维数组按照一定格式递归遍历出来
 * @param array
 *
 * @return arraydatas
 */
function Recursivestypeinfos($arr){
    if(!is_array($arr)){
        return false;
    }else{

        foreach ($arr as $key=>$value){

            if(is_array($value)){
            foreach ($value as $values){
                if(!is_array($values))
                {
                    echo " <li><a href=\"#\"><i class=\"fa fa-envelope-o\"></i> $values
                                <span class=\"label label-primary pull-right\">12</span><span class=\"label label-danger pull-right\">删除</span> <span class=\"label label-success pull-right\" onclick=\"link({$key},'admin/category/edit')\">编辑</span> <span class=\"label label-warning pull-right\" onclick=\"link({$key},'admin/category/create')\">添加子类</span></a></li>";
                }else{

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
                    foreach ($values as $item){

                        if(!is_array($item)){
                            echo "<li class=\"active\"><a href=\"#\"><i class=\"fa fa-inbox\"></i>".$item." 
                                                            <span class=\"label label-primary pull-right\">12</span><span class=\"label label-danger pull-right\">删除</span> <span class=\"label label-success pull-right\" onclick=\"link({$key},'admin/category/edit')\">编辑</span> <span class=\"label label-warning pull-right\" onclick=\"link({$key},'admin/category/create')\">添加子类</span></a></li>";
                        }else{
                            Recursivestypeinfos($item);
                        }
                    }
                    echo "</ul>
                                            </div>
                                        </div>";
                }

            }
            }else{
                echo " <li><a href=\"#\"><i class=\"fa fa-envelope-o\"></i> $value
                                <span class=\"label label-primary pull-right\">12</span><span class=\"label label-danger pull-right\">删除</span> <span class=\"label label-success pull-right\" onclick=\"link({$key},'admin/category/edit')\">编辑</span> <span class=\"label label-warning pull-right\" onclick=\"link({$key},'admin/category/create')\">添加子类</span></a></li>";
            }




        }
    }
}



