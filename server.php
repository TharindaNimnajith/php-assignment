<?php

header("Access-Control-Allow-Origin: *");

$method = $_SERVER['REQUEST_METHOD'];

if ($method == 'GET') {
	echo "THIS IS A GET REQUEST";
}
