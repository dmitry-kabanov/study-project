<?php

class AutoloaderTest extends PHPUnit_Framework_TestCase
{
    /**
     * @param $dir
     * @param $className
     * @param $message
     * @return void
     * @dataProvider dataProviderForLoadClass
     */
    public function testLoadClassSuccessful($dir, $className, $message)
    {
        $autoloader = new Autoloader();
        $autoloader->addDir($dir);
        $autoloader->loadClass($className);
        $this->assertTrue(class_exists($className), $message);
    }

    public function dataProviderForLoadClass()
    {
        return array(
            array('test/_fixture/', 'Foo', "Expected that class Foo exists."),
            array('test/_fixture', 'Bar', "Expected that class Bar exists."),
        );
    }
}
