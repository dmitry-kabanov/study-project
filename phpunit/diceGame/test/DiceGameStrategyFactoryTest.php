<?php

class DiceGameStrategyFactoryTest extends PHPUnit_Framework_TestCase
{
    public function testCreate_ShouldReturnRegularGameStrategy_WhenArgumentIsRegular()
    {
        $arg = 'regular';
        $this->assertInstanceOf('RegularDiceGameStrategy', DiceGameStrategyFactory::create($arg));
    }

    public function testCreate_ShouldReturnChildGameStrategy_WhenArgumentIsChild()
    {
        $arg = 'child';
        $this->assertInstanceOf('ChildDiceGameStrategy', DiceGameStrategyFactory::create($arg));
    }

    public function testCreate_ShouldThrowException_WhenArgumentNeigherRegularNorChild()
    {
        try
        {
            DiceGameStrategyFactory::create('blah-blah-blah');
            $this->fail();
        }
        catch (Exception $e)
        {
            $this->assertEquals('Argument must be regular or child.', $e->getMessage());
        }
    }
}
