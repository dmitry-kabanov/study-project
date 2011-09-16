<?php

class DieClassTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var DieClass
     */
    private $die;

    public function setUp()
    {
        $this->die = new DieClass();
    }

    public function tearDown()
    {
        $this->die = null;
    }

    public function testInitialValueShouldBeValid()
    {
        $this->assertThatFaceValueValid();
    }

    public function testRollingShouldBeAlwaysValid()
    {
        $this->die->roll();

        $this->assertThatFaceValueValid();
    }

    public function testRollingShouldGenerateEvenDistribution()
    {
        $values = array(0, 0, 0, 0, 0, 0);

        for ($i = 0; $i < 60000; $i++)
        {
            $this->die->roll();
            $faceValue = $this->die->getFaceValue();
            $values[$faceValue-1]++;
        }

        foreach ($values as $value)
        {
            $this->assertTrue($value >= 9500);
            $this->assertTrue($value <= 10500);
        }
    }

    private function assertThatFaceValueValid()
    {
        $this->assertTrue($this->die->getFaceValue() >= 1);
        $this->assertTrue($this->die->getFaceValue() <= 6);
    }
}
