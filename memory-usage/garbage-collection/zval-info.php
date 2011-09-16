<?php

$a = 'new string';

xdebug_debug_zval('a');

$b = $a;
print 'Assigning a to another variable'.PHP_EOL;
xdebug_debug_zval('a');

$c = $b;
print 'Assigning a to yet another variable'.PHP_EOL;
xdebug_debug_zval('a');


