<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dima
 * Date: 8/20/11
 * Time: 7:07 PM
 * To change this template use File | Settings | File Templates.
 */
 
class LocalBufferFilterIterator extends FilterIterator
{
    public function __construct(DirectoryIterator $it)
    {
        parent::__construct($it);
    }

    public function accept()
    {
        $filename = $this->getInnerIterator()->current();

        if ($this->shouldNotBeAccepted($filename)) {
            return false;
        }

        return true;
    }

    private function shouldNotBeAccepted($filename)
    {
        return $filename == 'CVS' ||
               substr($filename, -4, strlen($filename)) == '.tmp' ||
               $filename == '.cvsignore';
    }

}
