<?php
namespace FileSystem;

class FileSystem
{
    public function createDirectory($dirName)
    {
        if (!@mkdir($dirname, 0777)) {
            throw new Exception('Cannot create directory');
        }
    }
}
