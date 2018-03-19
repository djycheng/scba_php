<?php

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

$headers = array('name', 'email', 'affiliation', 'abstract', 'notes', 'os0');
$row = array();

foreach ($headers as $field) {
    if (isset($_POST[$field])) {
        $row[] = $_POST[$field];

    } else {
        $row[] = '';

    }
}

try {
    $file = fopen('../../data/conference.csv', 'a');

    if ($file) {
        fputcsv($file, $row);
        fclose($file);

    } else {
        throw new Exception('No file found: data/conference.csv');

    }

} catch (Exception $e) {
    echo $e;
}
echo 'done';
?>