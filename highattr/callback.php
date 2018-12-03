<?php
/**
 * File callback.php
 * Created by PhpStorm.
 * User: liuzhi
 * Date: 2018/10/26
 * Time: 14:48
 *
 */


usort($arr, 'mySortFunc');

usort($arr, [$objectName, 'mySortFunc']);

usort($arr, ['className', 'mySortFunc']);

usort($arr, ['ClassName::mySortFunc']);

usort($arr, ['child', 'parent::mySort']);

//usort($arr, create_function('$a, $b', 'return $b -$a'));
usort($arr, function ($a, $b) {
    return $b - $a;
});

