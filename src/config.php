<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

$string = file_get_contents('https://raw.githubusercontent.com/DucNgn/Dog-Facts-API-v2/main/data.json');
$array = json_decode($string, false);
