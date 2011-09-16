<?php

function sayHello($name)
{
    $salutation = "$name, you'll be glad to know that I'm working!";
    return $salutation;
}

$server = new SoapServer("greetings.wsdl");
$server->addFunction('sayHello');
$server->handle();

