<?php

interface NameableAndAgeable
{
    public function setParams($name, $age);
    public function getName();
    public function getAge();
}

class Human implements NameableAndAgeable
{
    private $name;
    private $age;

    public function setParams($name, $age = 5)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName() { return $this->name; }
    public function getAge() { return $this->age; }
}

function printInfoAbout(NameableAndAgeable $obj)
{
    print 'I am ' . $obj->getName() . '. I am ' . $obj->getAge() . ' years old.' . PHP_EOL;
}

$human = new Human();
$human->setParams('Dima', 25);

printInfoAbout($human);
