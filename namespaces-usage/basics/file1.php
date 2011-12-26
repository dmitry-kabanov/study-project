<?php
namespace Foo\Bar\subnamespace;

const FOO = 'I\'m in Foo\Bar\subnamespace';
function foo() {
    print "Foo\Bar\subnamespace foo()\n";
}

class foo
{
    static function staticmethod() {
        print "Foo\Bar\subnamespace foo::staticmethod()\n";
    }
}
