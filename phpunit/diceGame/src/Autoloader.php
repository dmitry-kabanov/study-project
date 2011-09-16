<?php

class Autoloader
{
    public function loadClass($className)
    {
        require 'src/'.$className.'.php';
    }
}
