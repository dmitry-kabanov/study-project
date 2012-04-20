<?php

interface Human
{
	public function callDoctor(Doctor $doctor);
}

class Child implements Human
{
	public function callDoctor(Pediatr $pediatr)
	{
		return 0;
	}
}

interface Doctor
{

}

class Pediatr implements Doctor
{

}

$child = new Child();
$doctor = new Pediatr();
$child->callDoctor($doctor);