<?php

require_once 'Calc.php';

class CalcTest extends PHPUnit_Framework_TestCase
{
    public function testSum()
    {
        $math = $this->getMock('Math');

        $math->expects($this->any())
             ->method('add')
             ->will($this->returnValue('5'));

		$output = $this->getMock('Output');

		$output->expects($this->at(0))
			   ->method('printMessage')
			   ->with($this->equalTo(2));
		$output->expects($this->at(1))
			   ->method('printMessage')
			   ->with($this->equalTo(3));
		$output->expects($this->at(2))
			   ->method('printMessage')
			   ->with($this->equalTo(5));

		$calc = new Calc($math, $output);

		$calc->sum(2, 3);
	}
}

