<?php
namespace StudyProject\PHPUnit\DbUnit;

class User
{
	/**
	 * @var string
	 */
	private $name;

	/**
	 * @var int
	 */
	private $age;

	/**
	 * @param string $name
	 * @param int $age
	 */
	public function __construct($name, $age)
	{
		$this->name = $name;
		$this->age = $age;
	}

	/**
	 * @param int $age
	 */
	public function setAge($age)
	{
		$this->age = $age;
	}

	/**
	 * @return int
	 */
	public function getAge()
	{
		return $this->age;
	}

	/**
	 * @param string $name
	 */
	public function setName($name)
	{
		$this->name = $name;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}
}
