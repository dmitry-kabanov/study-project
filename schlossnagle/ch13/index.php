<?php

require_once 'autoload.php';
require_once 'check_credentials.php';
require_once 'check_auth.php';

try {
    check_auth();

    print 'You are authorized'.PHP_EOL;
}
catch (Exception $e)
{
    print $e->getMessage().PHP_EOL;
}
