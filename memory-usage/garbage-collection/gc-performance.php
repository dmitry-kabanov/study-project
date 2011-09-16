<?php

class Foo
{
    public $var = '3.1415962654';
}

for ($i = 0; $i <= 1000000; $i++) {
    $a = new Foo;
    $a->self = $a;
}

print number_format(memory_get_peak_usage()).PHP_EOL;
