<?php
if (isset($_SERVER['argv'][1])) {
    $filename = $_SERVER['argv'][1];
}
else {
    print "Libxml2 version:".LIBXML_DOTTED_VERSION.PHP_EOL;
    die("Usage: ".$_SERVER['SCRIPT_FILENAME']." <xml file name>".PHP_EOL);
}

//libxml_use_internal_errors(true);

if (file_exists($filename)) {
    $doc = simplexml_load_file($filename, 'SimpleXMLElement', LIBXML_NOWARNING);

    if ($doc)
    {
        print "Valid XML.".PHP_EOL;
        print get_class($doc).PHP_EOL;
    }
    else {
        print "Invalid XML.".PHP_EOL;
        print "Errors found:".PHP_EOL;
        foreach (libxml_get_errors() as $error) {
            print $error.PHP_EOL;
        }
        libxml_clear_errors();
    }
}
else {
    die("File $filename doesn't exist!".PHP_EOL);
}
