<?php

class DiceGameTest extends PHPUnit_Framework_TestCase
{
    public function testPlayerShouldWinWhenResultOver7()
    {
        $game = $this->getTestObject(8, 3);
        $game->play();
        $this->assertEquals('winner', $game->getResult());
    }

    public function testPlayerShouldPushWhenResultEquals7()
    {
        $game = $this->getTestObject(4, 3);
        $game->play();
        $this->assertEquals('push', $game->getResult());
    }

    public function testPlayerShouldLooseWhenResultLessThan7()
    {
        $game = $this->getTestObject(2, 3);
        $game->play();
        $this->assertEquals('looser', $game->getResult());
    }

    private function getTestObject($faceValue1, $faceValue2)
    {
        $d1 = $this->getDieMock($faceValue1);
        $d2 = $this->getDieMock($faceValue2);
        return new DiceGame($d1, $d2);
    }

    private function getDieMock($result)
    {
        $die = $this->getMock('DieClass');
        $die
            ->expects($this->any())
            ->method('getFaceValue')
            ->will($this->returnValue($result));
        return $die;
    }
}
