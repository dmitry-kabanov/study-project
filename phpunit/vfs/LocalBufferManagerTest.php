<?php
require_once 'LocalBufferManager.php';

class LocalBufferManagerTest extends PHPUnit_Framework_TestCase
{
    private $filename;
    private $fileContent;
    /**
     * @var LocalBufferManager
     */
    private $buffer;

    public function setUp()
    {
        vfsStream::setup('var');
        $this->buffer = new LocalBufferManager();
        $this->filename = 'file.txt';
        $this->fileContent = '12345';
    }

    public function testSaveFileSuccessfullyWhenDirectoryHasWritePermissions()
    {
        $this->buffer->saveFile(vfsStream::url('var/'.$this->filename), $this->fileContent);

        $this->assertTrue(vfsStreamWrapper::getRoot()->hasChild($this->filename));
        $this->assertEquals('12345', vfsStreamWrapper::getRoot()->getChild($this->filename)->getContent());
    }

    /**
     * @expectedException Exception
     */
    public function testSaveFileThrowsExceptionWhenDirectoryHasNotWritePermissions()
    {
        vfsStreamWrapper::getRoot()->chmod(0555);

        $this->buffer->saveFile(vfsStream::url('var/'.$this->filename), $this->fileContent);
    }

    public function testGetFileList()
    {
        vfsStream::create(
            array(
                'file1.tmp' => '1',
                'file2.xml' => '2',
                'file3.tmp' => '3',
                'CVS' => array(
                    '.cvsignore' => '4',
                ),
                '.cvsignore' => '5',
                'file4.xml' => '6',
                'file5.xml' => '7',
            ),
            'var'
        );

        $fileList = $this->buffer->getFileList(vfsStream::url('var'));

        $this->assertEquals(3, sizeof($fileList));
        $this->assertEquals('file2.xml', $fileList[0]);
        $this->assertEquals('file4.xml', $fileList[1]);
        $this->assertEquals('file5.xml', $fileList[2]);
    }
}
