<?php

class Human
{
	public function callDoctor(Doctor $doctor) {}
}

class Child extends  Human
{
	public function callDoctor(Pediatr $pediatr)
	{
		return 0;
	}
}

class Doctor
{

}

class Pediatr extends Doctor
{

}

$child = new Child();
$doctor = new Pediatr();
$child->callDoctor($doctor);