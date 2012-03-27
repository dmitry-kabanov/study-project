<?php

class MyProcess extends ZendX_Console_Process_Unix
{
    protected function _run()
    {
        for ($i = 0; $i < 3; $i++) {
            sleep(1);
        }
        $this->_isRunning = false;
        $this->setVariable('end', true);
    }
}
