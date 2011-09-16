<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dima
 * Date: 8/20/11
 * Time: 4:29 PM
 * To change this template use File | Settings | File Templates.
 */
 
class LocalBufferManager
{
    public function saveFile($filename, $content)
    {
        $baseDir = dirname($filename);
        if (is_writable($baseDir)) {
            file_put_contents($filename, $content);
        }
        else {
            throw new Exception;
        }
    }

    public function getFileList($dirname)
    {
        $it = new LocalBufferFilterIterator(new DirectoryIterator($dirname));
        $fileList = array();

        /** @var $item SplFileInfo */
        foreach ($it as $item) {
            $fileList[] = $item->getFilename();
        }

        return $fileList;
    }
}
