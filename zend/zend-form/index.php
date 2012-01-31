<?php
require_once 'Zend/Loader/Autoloader.php';
Zend_Loader_Autoloader::getInstance();

function getForm()
{
    $form = new Zend_Form();
    
    $form->setAction($_SERVER['PHP_SELF'])
         ->setMethod('post')
         ->setAttrib('id', 'form-login');
    
    $form->addElement('text', 'username', array(
        'validators' => array(
            'alnum',
            array('regex', false, '/^[a-z]/i'),
            array('stringLength', false, array(6, 20))
        ),
        'required' => true,
        'filters' => array('StringToLower'),
        'label' => 'Username',
    ));
    
    $form->addElement('password', 'password', array(
        'validators' => array(
            array('stringLength', false, array(6)),
        ),
        'required' => true,
        'label' => 'Password',
    ));
    
    $form->addElement('submit', 'login', array(
        'label' => 'login'
    ));

    return $form;
}

$form = getForm();
$request = new Zend_Controller_Request_Http();

$view = new Zend_View();
echo $form->render($view);

if (!$form->isValid($_POST) && $request->isPost()) {
    var_dump($form->getErrors());
    var_dump($form->getMessages());
    exit;
}
else if ($request->isPost()) {
    echo 'Thanks for submitting form'.PHP_EOL;
    var_dump($form->getValues());
}
