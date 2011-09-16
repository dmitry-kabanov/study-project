<?php

class DiceGame
{
    /** @var DieClass */
    private $d1;

    /** @var DieClass */
    private $d2;

    /** @var int */
    protected $total;

    public function __construct(DieClass $d1, DieClass $d2)
    {
        $this->d1 = $d1;
        $this->d2 = $d2;
    }

    public function play()
    {
        $this->d1->roll();
        $this->d2->roll();

        $this->total = 0;

        $this->total += $this->d1->getFaceValue();
        $this->total += $this->d2->getFaceValue();
    }

    public function getResult()
    {
        if ($this->total > 7) {
            return 'winner';
        }
        else if ($this->total == 7) {
            return 'push';
        }
        else
        {
            return 'looser';
        }
    }
}
