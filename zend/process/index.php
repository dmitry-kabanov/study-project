<?php
set_include_path(get_include_path() . PATH_SEPARATOR . '/usr/local/zend/ZendFramework/library' . PATH_SEPARATOR . '/usr/local/zend/ZendFramework/extras/library');
require_once 'Zend/Loader/Autoloader.php';
$autoloader = Zend_Loader_Autoloader::getInstance();

require_once 'MyProcess.php';

$process1 = new MyProcess();
$process1->start();
$process1->setVariable('end', false);

$process2 = new MyProcess();
$process2->start();
$process2->setVariable('end', false);

while ($process1->getVariable('end') === false || $process2->getVariable('end') === false) {
    sleep(1);
}

echo 'All processes completed.' . PHP_EOL;
