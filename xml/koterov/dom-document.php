<?php
$domDocument = new DOMDocument();

$xmlDocument = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<root>    <student id="123">        <name>Kabanov Dmitry</name>
        <age>24</age>
        <group>F11-06</group>
    </student>
</root>
XML;

$domDocument->preserveWhiteSpace = true;
$domDocument->loadXML($xmlDocument);

$domDocument->formatOutput = true;
print $domDocument->saveXML();
print PHP_EOL;

$domDocument->formatOutput = false;
print $domDocument->saveXML();
print PHP_EOL;
