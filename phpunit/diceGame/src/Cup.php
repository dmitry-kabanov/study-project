<?php

class Cup
{
    /** @var int */
    private $total = 0;

    /**
     * @var DieClass[]
     */
    private $diceCollection = array();

    public function __construct(DieClass $d1, DieClass $d2)
    {
        $this->diceCollection[] = $d1;
        $this->diceCollection[] = $d2;
    }

    public function roll()
    {
        foreach ($this->diceCollection as $die)
        {
            $die->roll();
        }

        $this->calculateTotal();
    }

    private function calculateTotal()
    {
        $this->total = 0;

        foreach ($this->diceCollection as $die)
        {
            $this->total += $die->getFaceValue();
        }
    }

    public function getTotal()
    {
        return $this->total;
    }
}
