<?php
require_once 'Zend/Loader/Autoloader.php';
$loader = Zend_Loader_Autoloader::getInstance();
$loader->registerNamespace('My');

$decorator = new My_Form_Decorator_SimpleInput();

$element = new Zend_Form_Element('foo', array(
    'label' => 'Foo',
    'belongsTo' => 'bar',
    'value' => 'test',
    'prefixPath' => array('decorator' => array(
        'My_Form_Decorator' => 'My/Form/Decorator/',
    )),
    'decorators' => array(
        'SimpleInput',
        'SimpleLabel'
    ),
));

print $element->render();
