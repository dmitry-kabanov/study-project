<?php

namespace my\name;

class MyClass {}
function myFunction() {}
const MYCONST = 1;

$a = new MyClass;
$c = new \my\name\MyClass;

$a = strlen('hi');

$d = namespace\MYCONST;

$d = __NAMESPACE__ . '\MYCONST';
echo constant($d);
