<?php

class ChildDiceGameStrategyTest extends PHPUnit_Framework_TestCase
{
    public function testGetResultIsWinnerWhenTotalOver4()
    {
        $strategy = new ChildDiceGameStrategy();
        $this->assertEquals('winner', $strategy->getResult(5));
    }

    public function testGetResultIsWinnerWhenTotalEqulas4()
    {
        $strategy = new ChildDiceGameStrategy();
        $this->assertEquals('winner', $strategy->getResult(4));
    }

    public function testGetResultIsLooserWhenTotalLessThan4()
    {
        $strategy = new ChildDiceGameStrategy();
        $this->assertEquals('looser', $strategy->getResult(3));
    }
}
