<?php
/**
 * File exceptions.php
 * Created by PhpStorm.
 * User: liuzhi
 * Date: 2018/10/25
 * Time: 17:05
 */
function trytest() {
    try {
//        echo "try\n";
//        return false;
        file_get_contents();

    }catch (Exception $e) {
        echo $e->getMessage()."\n";

    } finally {
//        echo "finally\n";
        return true;
    }
}

//var_dump(trytest());
function myErrorHandler($errno, $errstr, $errfile, $errline) {
    throw new ErrorException("Exception:".$errstr, 0, $errno, $errfile, $errline);
}

//处理notice，warning
set_error_handler("myErrorHandler");
trytest();

register_shutdown_function(function (){
    if ($error = error_get_last()) {
        print_r($error);
    }
});

asdf();
