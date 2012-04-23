<?php

class Calc
{
    private $math;
    private $output;

    public function __construct(Math $math, Output $output)
    {
        $this->math = $math;
        $this->output = $output;
    }

    public function sum($a, $b)
    {
        $this->output->printMessage($a);
        $this->output->printMessage($b);

        $sum = $this->math->add($a, $b);

        $this->output->printMessage($sum);
    }
}

class Math
{
    public function add($a, $b)
    {
        return $a + $b;
    }
}

class Output
{
    public function printMessage($message)
    {
        print $message . PHP_EOL;
    }
}
