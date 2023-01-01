<?php

header("Content-Type: application/json");

if (isset($_GET['numbers']) && $_GET['numbers'] != "") {
    $numbers = $_GET['numbers'];

    if ($numbers == "true") {
        $fact = "123";
    } else if ($numbers == "false") {
        $fact = "test";
    } else {
        $fact = "test123";
    }
} else {
    $fact = "test123";
}

response($fact, 200);

function response($fact, $response_code): void
{
    $response['fact'] = $fact;
    $response['response_code'] = $response_code;

    $json_response = json_encode($response);

    echo $json_response;
}
