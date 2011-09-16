<?php

print 'At the start we're using (in bytes): ', memory_get_usage(), PHP_EOL;

$db = mysql_connect('localhost', 'root', 'mysql');
mysql_select_db('memory_test);

print 'After connecting, we're using (in bytes): ', memory_get_usege(), PHP_EOL;

for ($x  = 0; $x < 10; $x++) {
    $sql = 
