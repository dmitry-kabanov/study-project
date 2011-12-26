<?php
namespace Foo;

function strlen()
{
    print "I'm in Foo strlen\n";
}

const INI_ALL = 7777;

class Exception {};

$a = \strlen('hi');
$a = strlen('Blah');

$b = \INI_ALL;
print $b . PHP_EOL;

$b = INI_ALL;
print $b . PHP_EOL;

$c = new \Exception('error');
