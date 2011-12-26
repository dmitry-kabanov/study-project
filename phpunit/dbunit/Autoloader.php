<?php
namespace StudyProject\PHPUnit\DbUnit;

class Autoloader
{
	public function loadClass($classname)
	{
		$parts = explode('\\', $classname);
		$file = end($parts);

		if (file_exists(__DIR__.'/'.$file))
		{
			require_once __DIR__.$file;
		}

		$message = sprintf("Can't load class '%s' from file '%s'.", $classname, $file);
		throw new \Exception($message);
	}
}
