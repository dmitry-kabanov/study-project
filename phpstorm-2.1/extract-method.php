<?php
class A
{
    public function calculatePriceAfterTaxes($price)
    {
        $price += $this->calculateTaxesOverhead($price);

        return $price;
    }

    private function calculateTaxesOverhead($price)
    {
        return $price * 0.03 + $price * 0.025;
    }
}

$obj = new A();

print $obj->calculatePriceAfterTaxes(100).PHP_EOL;