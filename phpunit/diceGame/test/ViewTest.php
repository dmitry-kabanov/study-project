<?php
class ViewTest extends PHPUnit_Extensions_OutputTestCase
{
    public function testShouldShowToUserThatHeWins()
    {
        $result = 'winner';
        $view = new View();
        $view->display($result);
        
        $this->expectOutputString("Player wins!\n");
    }

    public function testShouldShowToUserThatHeLooses()
    {
        $result = 'looser';
        $view = new View();
        $view->display($result);

        $this->expectOutputString("Player looses!\n");
    }

    public function testShouldShowToUserThatHePushes()
    {
        $result = 'push';
        $view = new View();
        $view->display($result);

        $this->expectOutputString("Player pushes!\n");
    }
}
