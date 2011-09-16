<?php

require_once 'Model.php';
require_once 'View.php';

class Controller {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new Model();
        $this->view = new View();
    }

    public function run() {
        $data['users'] = $this->model->getData();
        $this->view->display('index', $data);
    }
}
