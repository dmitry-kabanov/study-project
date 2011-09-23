<?php

class CupTest extends PHPUnit_Framework_TestCase
{
    public function testInitialTotalValueIsZero()
    {
        $cup = $this->getTestObject(7, 3);
        $this->assertEquals(0, $cup->getTotal());
    }

    public function testGetTotalAfterRolling()
    {
        $cup = $this->getTestObject(7, 3);
        $cup->roll();
        $this->assertEquals(10, $cup->getTotal());
    }

    private function getTestObject($faceValue1, $faceValue2)
    {
        $d1 = $this->getDieMock($faceValue1);
        $d2 = $this->getDieMock($faceValue2);
        return new Cup($d1, $d2);
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
