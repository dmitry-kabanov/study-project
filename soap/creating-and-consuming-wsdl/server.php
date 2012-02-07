<?php

ini_set('soap.wsdl_cache_enabled', '0');

$server = new Customer_SoapServer('service.wsdl');

$server->addFunction('getDoubledValue');
$server->handle();