<?php
require_once __DIR__ . '/Autoloader.php';

$loader = new \StudyProject\PHPUnit\DbUnit\Autoloader();

spl_autoload_register(array($loader, 'loadClass'));