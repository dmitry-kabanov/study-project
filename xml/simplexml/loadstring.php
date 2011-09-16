<?php
$string = <<<XML
<?xml version="1.0"?><root><child01>First element</child01><child02>Second element</child02>   </root>
XML;

$xml = simplexml_load_string($string);

print $xml->asXML();
print PHP_EOL;
