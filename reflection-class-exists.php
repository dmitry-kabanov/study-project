<?php
class AClass {}

try {
    $r = new ReflectionClass('AClass');
    print $r->getName();
    print PHP_EOL;
}
catch (ReflectionException $e) {
    print 'Class does not exist.'.PHP_EOL;
}
