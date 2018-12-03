<?php
/**
 * File traits1.php
 * Created by PhpStorm.
 * User: liuzhi
 * Date: 2018/10/25
 * Time: 18:26
 */
trait R {
    function rich(){

    }
}

class HH {
    use R;

    function handsome(){

    }
}

$obj = new HH();
$obj->rich();