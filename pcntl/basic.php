<?php

function createChildProcess()
{
    $pid = pcntl_fork();

    switch ($pid)
    {
        case -1:
            die("Could not fork.");
        case 0:
            runJob();
            exit;
        default:
            return $pid;
    }
}

function runJob()
{
    print "I'm a child process: pid = " . posix_getpid() . PHP_EOL;
}

print "I'm a parent process: pid = " . posix_getpid() . PHP_EOL;

for ($i = 0; $i < 10; $i++)
{
    $pid = createChildProcess();
    pcntl_waitpid($pid, $status, WUNTRACED);
}
