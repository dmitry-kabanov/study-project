<?php

function __autoload($classname)
{
    if (file_exists('./'.$classname.'.php')) {
        require './'.$classname.'.php';
    }
    else {
        $filename = str_replace('_', '/', $classname).'.php';
        require $filename;
    }
}

