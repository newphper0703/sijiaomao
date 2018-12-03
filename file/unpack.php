<?php
/**
 * File unpack.php
 * Created by PhpStorm.
 * User: liuzhi
 * Date: 2018/10/29
 * Time: 11:41
 */
$data = file_get_contents('my.db');
$items = unpack('A20name/Sage/a20email', $data);

print_r($items);