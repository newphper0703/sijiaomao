<?php
/**
 * File traits3.php
 * Created by PhpStorm.
 * User: liuzhi
 * Date: 2018/10/25
 * Time: 18:32
 */
trait firstTrait {
    function sameMethodName(){
        echo "method in firstTrait\n";
    }
}

trait secondTrait {
    function sameMethodName(){
        echo "method in secondTrait\n";
    }
}

class firstClass {
    use firstTrait,secondTrait {
        firstTrait::sameMethodName insteadof secondTrait;
        secondTrait::sameMethodName as public anotherMethodName;
    }
}

$obj = new firstClass();
$obj->sameMethodName();//
$obj->anotherMethodName();
//print method in firstTrait
//      method in secondTrait