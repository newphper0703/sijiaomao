<?php
/**
 * File anonymousFuncClosures.php
 * Created by PhpStorm.
 * User: liuzhi
 * Date: 2018/10/26
 * Time: 14:55
 * 匿名函数和闭包
 */
$func = function ($str) {
    echo $str;
};

function outer() {
    $param = "value";
    return function ($str) use ($param) {
        return $str.$param;
    };
}
is_callable($func);
$func('hello');
call_user_func($func, 'param1');
call_user_func_array($func, ['param1']);