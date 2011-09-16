<?php

class AClass {

    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public  function __destruct() {
        print "tratata".PHP_EOL;
    }
}

$obj = new AClass('Dima');

$obj = null;

sleep(1);

print 'Hello, World!'.PHP_EOL;
