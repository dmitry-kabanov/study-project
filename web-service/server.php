<?php

class ExampleService
{
    public function helloWorld($name)
    {
        if ($name) {
            return "Hello, $name!";
        }
        else {
            throw new SoapFault("Server", "Name is not provided.");
        }
    }

    public function getSolutionOfSquareEquation($a, $b, $c)
    {
        $result = new StdClass();
        $result->root = -1;

        return $result;
    }
}

$server = new SoapServer('http://study-project/web-service/service-full.wsdl');
$server->setClass('ExampleService');
$server->handle();