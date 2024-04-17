<?php
$jsonData = file_get_contents('dischi.json');
$dischi = json_decode($jsonData, true);

header('Content-Type: application/json');
echo json_encode($dischi);
