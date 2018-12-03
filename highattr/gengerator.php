<?php
/**
 * File gengerator.php
 * Created by PhpStorm.
 * User: liuzhi
 * Date: 2018/10/26
 * Time: 14:27
 */
function lineGenerator($file){
    $fp = fopen($file, 'rb');
    try {
        while ($line = fgets($fp)) {
           yield $line;
        }
    } catch (Exception $e) {

    } finally {
        fclose($fp);
    }
}

$lines = lineGenerator("a.log");
foreach ($lines as $line) {
    echo $line;
}