<?php

$link = pg_connect('host=localhost dbname=first-db user=dima password=debian');

if (!$link) {
    trigger_error("Can't connect to DB");
}

$q = isset($_GET['query']) ? $_GET['query'] : '';

if (!$q) {
    $q = isset($_SERVER['argv'][1]) ? $_SERVER['argv'][1] : '';
}

if (!$q) {
    die("No q" . PHP_EOL);
}

$sql = "
    SELECT first_name || ' ' || last_name AS name FROM employee
    WHERE first_name LIKE '%".$q."%'
    OR last_name LIKE '%".$q."%'
";

$res = pg_query($link, $sql);

$result = array();
while ($row = pg_fetch_assoc($res)) {
    $result[] = $row['name'];
}

$result = array(
    'query' => $q,
    'suggestions' => $result,
);

echo json_encode($result);
die();
