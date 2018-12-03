<?php
/**
 * File str.php
 * Created by PhpStorm.
 * User: liuzhi
 * Date: 2018/10/23
 * Time: 14:57
 */

$str = '123456';
echo $str[0] . "\n";//1
echo $str[1] . "\n";//2

$str = 'a';
$str[100] = 'e';
echo $str."\n"; //'a                                                      e'

//串行化
$a = ['q' =>1, 2, 3];
serialize($a);
json_encode($a);
var_export($a, true);