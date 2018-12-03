<?php
/**
 * File Iterator.php
 * Created by PhpStorm.
 * User: liuzhi
 * Date: 2018/10/25
 * Time: 18:40
 */
class Languages implements IteratorAggregate {
    private $names;

    public function __construct()
    {
        $this->names = explode(',', 'PHP,JS,JAVA,GO');
    }

    public function getIterator()
    {
        // TODO: Implement getIterator() method.
        return new ArrayIterator($this->names);
    }
}

$langs = new Languages();
foreach ($langs as $lang) {
    echo $lang."\n";
}