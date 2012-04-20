<?php

class Human
{
    private $name;
    private $age;

    public function setParams($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName() { return $this->name; }

    public function getAge() { return $this->age; }
}

class Child extends Human
{
    public function setParams($name, $age = 5)
    {
        parent::setParams($name, $age);
    }
}

function printInfoAbout(Human $human)
{
    print 'My name is ' . $human->getName(). '. I am ' . $human->getAge() . ' years old.' . PHP_EOL;
}

$human = new Human();
$human->setParams('Dima', 25);

$child = new Child();
$child->setParams('Vasya');

printInfoAbout($human);
printInfoAbout($child);
