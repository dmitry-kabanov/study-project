<?php

$client = new SoapClient('greetings.wsdl', array('trace' => true));
print_r($client->__getLastRequest());
print_r($client->__getFunctions());
print_r($client->__getTypes());
print_r($client->sayHello('David'));
