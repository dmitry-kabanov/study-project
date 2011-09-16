<?php
require_once 'LocalBufferFilterIterator.php';
 
class LocalBufferFilterIteratorTest extends PHPUnit_Framework_TestCase
{
    public function testIteratorShouldNotAcceptCvsFolders()
    {
        $fileSystemStructure = array(
            'CVS' => 'dir',
            'file.tmp' => 'content',
            'file.xml' => 'content',
        );

        vfsStream::create($fileSystemStructure, 'dir');
        $innerIterator = new DirectoryIterator(vfsStream::url('dir'));

        $it = new LocalBufferFilterIterator($innerIterator);
        $size = 0;

        foreach ($it as $item) {
            $size++;
        }

        $this->assertEquals(1, $size);
    }
}
