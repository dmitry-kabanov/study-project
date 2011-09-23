<?php

class ChildDiceGameStrategy implements DiceGameStrategy
{
    public function getResult($total)
    {
        if ($total >= 4)
        {
            return 'winner';
        }
        else
        {
            return 'looser';
        }
    }
}
