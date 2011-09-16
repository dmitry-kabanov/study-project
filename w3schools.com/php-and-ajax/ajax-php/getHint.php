<?php
$a = array();

$a[]="Anna";
$a[]="Brittany";
$a[]="Cinderella";
$a[]="Diana";
$a[]="Eva";
$a[]="Fiona";
$a[]="Gunda";
$a[]="Hege";
$a[]="Inga";
$a[]="Johanna";
$a[]="Kitty";
$a[]="Linda";
$a[]="Nina";
$a[]="Ophelia";
$a[]="Petunia";
$a[]="Amanda";
$a[]="Raquel";
$a[]="Cindy";
$a[]="Doris";
$a[]="Eve";
$a[]="Evita";
$a[]="Sunniva";
$a[]="Tove";
$a[]="Unni";
$a[]="Violet";
$a[]="Liza";
$a[]="Elizabeth";
$a[]="Ellen";
$a[]="Wenche";
$a[]="Vicky";

$q = $_GET['q'];

$hint = '';
if (strlen($q) > 0) {
    foreach ($a as $key => $value) {
        if (strtolower($q) == strtolower(substr($value, 0, strlen($q)))) {
            if ($hint == '') {
                $hint = $value;
            }
            else {
                $hint .= ', ' . $value;
            }
        }
    }
}

if ($hint == '') {
    $response = 'no suggestions';
}
else {
    $response = $hint;
}

print $response;