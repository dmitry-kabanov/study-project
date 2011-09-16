<?php
$xmlstr = <<<XML
<php_programs>
    <program name="cart">
        <price>100</price>
    </program>
    <program name="survey">
        <price>500</price>
    </program>
</php_programs>
XML;

$dom = new DOMDocument();
$dom->loadXML($xmlstr);
$simpleXmlDom = simplexml_import_dom($dom);

$programs = $simpleXmlDom->children();
print "Price of the first program is " . $programs[0]->price . PHP_EOL;
