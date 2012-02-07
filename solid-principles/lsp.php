<?php

interface INameable
{
    public function setName($name);
}

class Person implements INameable
{
    private $name;
    private $age;

    public function setName($name, $age = 0)
    {
        $this->name = $name;
        $this->age = $age;
    }
}
