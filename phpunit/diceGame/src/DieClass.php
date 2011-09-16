<?php

class DieClass
{
    /** @var int */
    private $faceValue;

    public function __construct()
    {
        $this->roll();
    }

    public function getFaceValue()
    {
        return $this->faceValue;
    }

    public function roll()
    {
        $this->faceValue = mt_rand(1, 6);
    }
}
