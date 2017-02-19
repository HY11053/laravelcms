<?php
/**
 * Created by PhpStorm.
 * User: liang
 * Date: 2017/2/19
 * Time: 21:05
 */
function deli($arr){

    if (!is_array ($arr))
    {
        return false;
    }

    foreach ($arr as $key => $val )
    {
        if (is_array ($val))
        {
            deli($val);
        }
        else
        {
            echo $val.'<br/>';
        }
    }
}
