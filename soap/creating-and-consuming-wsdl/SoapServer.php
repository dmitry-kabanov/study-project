<?php
class Customer_SoapServer extends SoapServer
{
    public function getDoubledValue($value)
    {
        return $value * 2;
    }
}
