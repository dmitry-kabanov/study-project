<?php

ini_set('soap.wsdl_cache_enabled', '0');

try {
    $client = new SoapClient('service.wsdl');
    var_dump($client->__getFunctions());
}
catch (Exception $e)
{
    print $e->getMessage() . PHP_EOL;
}

