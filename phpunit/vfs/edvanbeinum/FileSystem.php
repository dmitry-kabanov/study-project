<?php
namespace FileSystem;
require_once 'FileSystemException.php';

class FileSystem
{
    public function createFile($filePath, $content)
    {
        $directoryPath = pathinfo($filePath, PATHINFO_DIRNAME);

        if ($this->createDirectory($directoryPath)) {
            file_put_contents($filePath, $content);
        }
    }

    public function createDirectory($directoryPath)
    {
        if (is_writeable($directoryPath)) {
            return true;
        }
        else {
            if (@mkdir($directoryPath, 0777)) {
                return true;
            }

            $processUser = posix_getpwuid(posix_geteuid());
            throw new FileSystemException(
                "$directoryPath is not writeable and couldn't be created.\n" .
                "Make sure the user {$processUser['name']} " .
                "has write permissions on the directory."
            );
        }

        return false;
    }
}
