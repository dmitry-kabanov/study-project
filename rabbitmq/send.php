<?php
require_once 'Doctrine/Common/ClassLoader.php';
$classLoader = new Doctrine\Common\ClassLoader();
$classLoader->register();

require_once __DIR__.'/lib/php-amqplib/amqp.inc');

$connection = new AMQPConnection('localhost', 5672, 'guest', 'guest');
$channel = $connection->channel();


