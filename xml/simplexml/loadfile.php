<?php
$doc = simplexml_load_file('php_programs.xml');

var_dump($doc);

$programs = $doc->children();
$programs[0]->price = '250';

/** @var $programValue SimpleXMLElement */
foreach ($doc->children() as $programKey => $programValue) {
    $attributes = $programValue->attributes();
    print "Program '".$attributes['name']."' has following characteristics:".PHP_EOL;
    foreach ($programValue->children() as $childKey => $childValue) {
        print "\t$childKey - $childValue".PHP_EOL;
    }
    print PHP_EOL;
}
