<?php

chdir(dirname(__FILE__).'/..');

require 'src/Autoloader.php';

$autoloader = new Autoloader();
$autoloader->addDir('src');

spl_autoload_register(array($autoloader, 'loadClass'));
