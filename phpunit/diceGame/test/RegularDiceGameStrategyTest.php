<?php

class RegularDiceGameStrategyTest extends PHPUnit_Framework_TestCase
{
    public function testGetResultIsWinnerWhenTotalOver7()
    {
        $strategy = new RegularDiceGameStrategy();
        $this->assertEquals('winner', $strategy->getResult(10));
    }

    public function testGetResultIsPushWhenTotalEquals7()
    {
        $strategy = new RegularDiceGameStrategy();
        $this->assertEquals('push', $strategy->getResult(7));
    }

    public function testGetResultIsLooserWhenTotalLessThan7()
    {
        $strategy = new RegularDiceGameStrategy();
        $this->assertEquals('looser', $strategy->getResult(6));
    }
}
