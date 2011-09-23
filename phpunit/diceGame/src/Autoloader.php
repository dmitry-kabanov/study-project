<?php

class Autoloader
{
    /** @var string */
    private $dir;

    public function addDir($dirName)
    {
        $this->dir = rtrim($dirName, '/').'/';
    }

    public function loadClass($className)
    {
        require $this->dir.$className.'.php';
    }
}
