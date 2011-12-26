<?php
namespace Foo\Bar;

include 'file1.php';

const FOO = 'I\'m in Foo\Bar';
function foo() {
    print 'Foo\Bar\foo()' . PHP_EOL;
}
class foo
{
    static function staticmethod() {
        print "Foo\Bar\\foo::staticmethod()\n";
    }
}

foo();
foo::staticmethod();

echo FOO.PHP_EOL;

subnamespace\foo();
subnamespace\foo::staticmethod();

echo subnamespace\FOO . PHP_EOL;

\Foo\Bar\foo();
\Foo\Bar\foo::staticmethod();
echo \Foo\Bar\FOO;


