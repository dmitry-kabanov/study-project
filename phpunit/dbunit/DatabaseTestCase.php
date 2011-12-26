<?php
namespace StudyProject\PHPUnit\DbUnit;
use \PDO;
use \PHPUnit_Extensions_Database_TestCase as TestCase;
use \PHPUnit_Extensions_Database_DataSet_YamlDataSet as YamlDataSet;

class DatabaseTestCase extends TestCase
{
	/**
	 * @return \PHPUnit_Extensions_Database_DB_IDatabaseConnection
	 */
	protected function getConnection()
	{
		$pdo = new PDO('sqlite::memory:');
		return $this->createDefaultDBConnection($pdo, ':memory:');
	}

	/**
	 * @return PHPUnit_Extensions_Database_DataSet_IDataSet
	 */
	protected function getDataSet()
	{
		return new YamlDataSet(__DIR__.'/dataset.yml');
	}
}
