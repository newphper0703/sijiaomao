<?php
/**
 * File arr.php
 * Created by PhpStorm.
 * User: liuzhi
 * Date: 2018/10/23
 * Time: 16:39
 */
$a = [];

$obj = new ArrayObject();
$obj[] = 'a';
$obj[] = 'b';
print_r($obj);

//usnet()数组后不会重建索引
//(array)   array()

var_dump(array(false));
var_dump(array(null));

/*
 * array(5) {
  ["name"]=>
  string(4) "andy"
  ["age"]=>
  int(52)
  ["Userphone"]=>
  string(11) "138########"
  ["Useremail"]=>
  string(12) "####@163.com"
  ["*location"]=>
  string(7) "beijing"
}
 */
class User {
    public $name='andy';
    public $age = 52;
    private $phone = '138########';
    private $email = '####@163.com';
    protected $location = 'beijing';
}

var_dump((array)new User());
$a = [];
$a[2] = 3;
$a[1] = 2;
$a[0] = 1;
foreach ($a as $v) {
    echo $v ."\n";
}
$a = [1, 2, 3];
foreach ($a as &$v) {}
print_r($a);
foreach ($a as $k => $v) {
    echo $k . '=>' .$v ."\n";
}

//位运算 a&1 = 0 偶数， a&1 = 1奇数  交换整数 x^ = y;y^ = x;x^ =y;

