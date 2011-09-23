<?php

class DiceGame
{
    /** @var DieClass */
    private $d1;

    /** @var DieClass */
    private $d2;

    /** @var int */
    protected $total;

    /**
     * @var \Cup
     */
    private $cup;

    /**
     * @var \DiceGameStrategy
     */
    private $strategy;

    public function __construct(Cup $cup, DiceGameStrategy $strategy)
    {
        $this->cup = $cup;
        $this->strategy = $strategy;
    }

    public function play()
    {
        $this->cup->roll();
        $this->total = $this->cup->getTotal();
    }

    public function getResult()
    {
        return $this->strategy->getResult($this->total);
    }
}
