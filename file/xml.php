<?php
/**
 * File xml.php
 * Created by PhpStorm.
 * User: liuzhi
 * Date: 2018/10/29
 * Time: 18:17
 */
$items = [];
$reader = new XMLReader();
$reader->open('collection.xml', 'utf-8');
while ($reader->read()) {

    if ($reader->name=="cd" && $reader->nodeType == XMLReader::ELEMENT) {
        $item =[];
        while ($reader->read() && $reader->name!="cd") {
            if ($reader->nodeType != XMLReader::ELEMENT) continue;
            $name = $reader->name;
            $value = $reader->readString();
            $item[$name] = $value;

        }
        $items[] = $item;


    }
}
$reader->close();
print_r($items);