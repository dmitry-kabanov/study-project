<?php
class RegularDiceGameStrategy implements  DiceGameStrategy
{
    public function getResult($total)
    {
        if ($total > 7) {
            return 'winner';
        }
        else if ($total == 7) {
            return 'push';
        }
        else
        {
            return 'looser';
        }
    }
}
