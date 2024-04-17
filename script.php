<?php
header('Content-Type: application/json');

$jsonData = file_get_contents('dischi.json');
$records = json_decode($jsonData, true);

echo json_encode($records);


// echo file_get_contents('dischi.json');
