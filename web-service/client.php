<?php
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
);

$client = new SoapClient('http://study-project/web-service/service-full.wsdl', $options);

try {
    $result = $client->__soapCall('helloWorld', array('Dima'));
    print $result . PHP_EOL;
}
catch (SoapFault $e) {
//    var_dump($e);
//    exit;
    print $e . PHP_EOL;
}
