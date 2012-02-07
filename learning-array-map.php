<?php

$arr = array(
    0 => 'name',
    1 => array(
        'id' => 'id',
        2 => 'value',
    ),
    2 => 'id2',
);

function decorate($value)
{
    return (is_array($value))
    ? array_map('decorate', $value)
    : '111'.$value;
}

var_dump(decorate($arr));
