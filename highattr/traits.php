<?php
/**
 * File traits.php
 * Created by PhpStorm.
 * User: liuzhi
 * Date: 2018/10/25
 * Time: 18:21
 *
 */
trait firstTrait {
    function firstMethod()
    {
        echo "method 1";
    }
}

trait secondTrait {
    abstract function secondMethod();

}

class firstClass {
    use firstTrait,secondTrait;
    function secondMethod()
    {
        // TODO: Implement secondMethod() method.
    }
}

$obj = new firstClass();

$obj->firstMethod();
$obj->secondMethod();