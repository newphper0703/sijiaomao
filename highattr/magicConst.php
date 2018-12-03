<?php
/**
 * File magicConst.php
 * Created by PhpStorm.
 * User: liuzhi
 * Date: 2018/10/26
 * Time: 15:26
 *
 * __TRAIT__
 * __NAMESPACE__
 */
echo __LINE__;
echo __FILE__;
echo __DIR__;
class A {
    public function __construct()
    {
        echo __CLASS__;
    }

    public function test()
    {
        echo __FUNCTION__;
        echo __METHOD__;
    }
}