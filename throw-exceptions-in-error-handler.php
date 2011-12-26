<?php

function handleError($errno, $errmsg = '', $errfile = '', $errline = 0)
{
    throw new RuntimeException(
        sprintf(
            'Error reading file (in %s@%d): %s',
            $errfile,
            $errline,
            $errmsg
        ),
        $errno
    );
}

set_error_handler('handleError', E_WARNING);
$filename = 'dummy.txt';
$fh = fopen($filename, 'r');
restore_error_handler();
