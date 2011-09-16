<?php

class Auction
{
    public function __construct()
    {
        $this->finalProtocol = new FinalProtocol($this);
        $this->envelopeUnsealingProtocol = new EnvelopeUnsealingProtocol($this);
        $this->cancelProtocol = new CancelProtocol($this);
    }

    public function destruct()
    {
        $this->finalProtocol = null;
        $this->envelopeUnsealingProtocol = null;
        $this->cancelProtocol = null;

    }
}

class FinalProtocol
{
    public function __construct(Auction $a)
    {
        $this->auction = $a;
    }
}

class EnvelopeUnsealingProtocol
{
    public function __construct(Auction $a)
    {
        $this->auction = $a;
    }
}

class CancelProtocol
{
    public function __construct(Auction $a)
    {
        $this->auction = $a;
    }
}

$baseMemory = memory_get_usage();

for ($i = 0; $i <= 1000000; $i++) {
    $a = new Auction();

    if ($i % 10000 == 0) {
        print sprintf('%8d: ', $i).number_format(memory_get_usage() - $baseMemory).PHP_EOL;

    }
    
    $a->destruct();
}

