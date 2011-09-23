<?php

chdir(dirname(__FILE__).'/..');

require 'src/Autoloader.php';

$autoloader = new Autoloader();
spl_autoload_register(array($autoloader, 'loadClass'));

$d1 = new DieClass();
$d2 = new DieClass();

if ($_SERVER['argv'][1] == 'girls')
{
    $game = new GirlsGame($d1, $d2);
}
else
{
    $game = new DiceGame($d1, $d2, $gameStrategy);
}

$game = new DiceGame($d1, $d2);
$game->play();

$result = $game->getResult();

$view = new View();
$view->display($result);