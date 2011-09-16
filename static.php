<?php

class AClass {

    public static $staticField;

    public $name;

    public function __construct($name) {

        $this->name = $name;
    }

    public static function tra()
    {

        print "Tra-ta-ta".PHP_EOL;
    }
}

$obj = new AClass('Dima');
print $obj->name.PHP_EOL;

$obj::$staticField = 'Kabanov';
print $obj::$staticField;

$obj::tra();
