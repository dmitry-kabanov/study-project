<?php

$result = mail('kabanovdmitry@gmail.com', 'Привет', 'Привет!\nКак у тебя дела?\n');

if (!$result)
{
    print "Mail was not sent".PHP_EOL;
}
else
{
    print "Mail was sent".PHP_EOL;
}
