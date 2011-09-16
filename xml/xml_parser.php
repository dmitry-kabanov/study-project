<?php
class XMLParser
{
    private $defaultDir = './xml_files';

    private $keys;

    private $values;

    public function __construct()
    {

    }

    public function parse($filename, $encoding = 'UTF-8')
    {
        $xmlContent = file_get_contents($this->defaultDir.'/'.$filename, 'rb');
        $xp = xml_parser_create($encoding);
        xml_parse_into_struct($xp, $xmlContent, $this->values, $this->keys);
        xml_parser_free($xp);
    }

    public function getValues()
    {
        return $this->values;
    }

    public function getKeys()
    {
        return $this->keys;
    }
}

$parser = new XMLParser();
$parser->parse('example_01.xml');

print_r($parser->getKeys());
print_r($parser->getValues());