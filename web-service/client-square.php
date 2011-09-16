<?php

$a = $_SERVER['argv'][1];
$b = $_SERVER['argv'][2];
$c = $_SERVER['argv'][3];

ini_set('soap.wsdl_cache_enabled', 0);

$context = stream_context_create(
    array(
        'http' => array(
            'protocol_version' => '1.0',
            'header' => 'Content-type: text/html;',
        ),
    )
);

$options = array(
    'stream_context' => $context,
    'trace' => true,
);

$client = new SoapClient('http://study-project/web-service/service-full.wsdl', $options);

try {
    $result = $client->__soapCall('getSolutionOfSquareEquation', array('a' => $a, 'b' => $b, 'c' => $c));
    print_r($result);
}
catch (SoapFault $e) {
    print $client->__getLastRequest() . PHP_EOL . PHP_EOL;
    print $client->__getLastResponse() . PHP_EOL . PHP_EOL;
    print $e . PHP_EOL;
}
