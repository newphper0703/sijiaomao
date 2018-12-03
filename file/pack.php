<?php
/**
 * File pack.php
 * Created by PhpStorm.
 * User: liuzhi
 * Date: 2018/10/26
 * Time: 19:43
 */

$fh = fopen('my.db', 'w');
//$name = pack('A20', 'zsf');//将字符串以空格填满
//$age = pack('S', 255);
//$email = pack('a20', 'zhangsf@qq.com');//将字符串以null填满
//fwrite($fh, $name .$age.$email);
$data = pack('A20Sa20', 'zsf', 1219, 'wf@qq.com');
fwrite($fh, $data);


