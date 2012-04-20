<?php
$pid = pcntl_fork();

echo "start\n";

if ($pid)
{
    echo "parent\n";
}
else
{
    echo "child\n";
}

echo "end\n";
