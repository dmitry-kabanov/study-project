<?php
use \FileSystem;

chdir(__DIR__);
require_once 'Doctrine/Common/ClassLoader.php';
$classLoader = new Doctrine\Common\ClassLoader('FileSystem');
$classLoader->register();

$fs = new FileSystem\FileSystem();
$fs->createDirectory('foo');
