<?php
namespace StudyProject\PHPUnit\DbUnit;

class UserCollectionTest extends DatabaseTestCase
{
	public function testAdd_ShouldIncreaseQuantityOfUsersByOne()
	{
		$this->assertEquals(3, $this->getConnection()->getRowCount('user'), "Pre-condition");

		$users = new UserCollection();
		$users->add(new User('Кирилл', 28, '1983-12-13'));

		$this->assertEquals(4, $this->getConnection()->getRowCount('user'), "Inserting failed.");
	}
}
