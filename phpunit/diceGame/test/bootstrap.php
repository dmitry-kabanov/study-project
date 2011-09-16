<?php

chdir(dirname(__FILE__).'/..');

require 'src/Autoloader.php';

$autoloader = new Autoloader();

spl_autoload_register(array($autoloader, 'loadClass'));
