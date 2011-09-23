<?php

class DiceGameStrategyFactory
{
    public static function create($arg = 'regular')
    {
        if ($arg == 'regular')
        {
            return new RegularDiceGameStrategy();
        }
        else if ($arg == 'child')
        {
            return new ChildDiceGameStrategy();
        }

        throw new Exception('Argument must be regular or child.');
    }
}
