<?php
namespace FileSystem\Test;
use FileSystem\FileSystem;
use \vfsStreamWrapper;
use \vfsStream;
use \vfsStreamDirectory;

require_once 'FileSystem.php';
require_once 'vfsStream/vfsStream.php';

class FileSystemTest extends \PHPUnit_Framework_TestCase
{
    protected $fileSystem;

    protected function setUp()
    {
        $this->fileSystem = new FileSystem();

        vfsStreamWrapper::register();
        vfsStreamWrapper::setRoot(new vfsStreamDirectory('testDir'));
    }

    protected function tearDown()
    {
        unset($this->fileSystem);
    }

    public function testCreateDirectory_ShouldCreateDirectory()
    {
        $this->assertFalse(vfsStreamWrapper::getRoot()->hasChild('newDir'));
        $this->assertTrue($this->fileSystem->createDirectory(vfsStream::url('testDir/newDir')));
        $this->assertTrue(vfsStreamWrapper::getRoot()->hasChild('newDir'));
    }

    public function testCreateDirectory_ShouldReturnTrueWhenDirectoryAlreadyExists()
    {
        vfsStream::newDirectory('newDir', 0755)->at(vfsStreamWrapper::getRoot());
        $this->assertTrue($this->fileSystem->createDirectory(vfsStream::url('testDir/newDir')));
    }

    /**
     * @expectedException FileSystem\FileSystemException
     */
    public function testCreateDirectory_ShouldThrowExceptionWhenDirectoryIsNotWriteable()
    {
        vfsStreamWrapper::getRoot()->chmod(0400);
        $this->fileSystem->createDirectory(vfsStream::url('testDir/newDir'));
    }
}
