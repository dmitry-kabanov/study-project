<?php

class DiceGameTest extends PHPUnit_Framework_TestCase
{
    public function testThatDiceAreRolledAndWeCanObtainResults()
    {
        $game = $this->getTestObject(11);
        $game->play();
        $game->getResult();
    }

    private function getTestObject($total)
    {
        $cup = $this->getMockBuilder('Cup')
                ->disableOriginalConstructor()
                ->getMock();
        $cup
                ->expects($this->once())
                ->method('getTotal')
                ->will($this->returnValue($total));
        $cup
                ->expects($this->once())
                ->method('roll');

        $strategy = $this->getMock('DiceGameStrategy');
        $strategy
            ->expects($this->once())
            ->method('getResult')
            ->with($this->equalTo($total));

        $game = new DiceGame($cup, $strategy);
        return $game;
    }
}
