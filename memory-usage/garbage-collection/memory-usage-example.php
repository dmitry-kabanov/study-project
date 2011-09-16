<?php

class Foo
{
    public $var = '3.1415962654';
}

$baseMemory = memory_get_usage();

for ($i = 0; $i <= 100000; $i++) {
    $a = new Foo;
    $a->self = $a;

    if ($i % 500 == 0) {
        echo sprintf('%d;', $i), memory_get_usage() - $baseMemory, PHP_EOL;
    }
}
