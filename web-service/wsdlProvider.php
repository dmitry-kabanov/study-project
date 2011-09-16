<?php

$content = file_get_contents('service.wsdl');

header('Content-Length: ' . mb_strlen($content));
header('Content-Type: text/xml; charset=UTF-8');
print $content;
