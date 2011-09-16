<?php

class Model {
    public function __construct() {

    }

    public function getData() {
        return array(
            array(
                'first_name' => 'Dima',
                'last_name' => 'Kabanov',
            ),
            array(
                'first_name' => 'Alexey',
                'last_name' => 'Proskurin',
            ),
        );
    }
}
