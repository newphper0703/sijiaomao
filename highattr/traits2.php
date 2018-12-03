<?php
/**
 * File traits2.php
 * Created by PhpStorm.
 * User: liuzhi
 * Date: 2018/10/25
 * Time: 18:28
 */
trait firstTrait {
    function firstMethod(){
        echo "method1";
    }
}

trait secondTrait {
    use firstTrait;
    function secondMethod(){
        echo "method2";
    }
}

class firstClass{
    use secondTrait;
}

$obj = new firstClass();
$obj->firstMethod();//print method1
$obj->secondMethod();//print method2