<?php

require 'config.php';

function getRandomFact()
{
    global $array;
    $rand = array_rand($array);
    return $array[$rand]->fact;
}

function getFactWithNumber()
{
    global $array;

    do {
        $rand = array_rand($array);
        $fact = $array[$rand]->fact;
    } while (!preg_match('~[0-9]+~', $fact));

    return $fact;
}

function getFactWithoutNumber()
{
    global $array;

    do {
        $rand = array_rand($array);
        $fact = $array[$rand]->fact;
    } while (preg_match('~[0-9]+~', $fact));

    return $fact;
}

function response($fact, $response_code): void
{
    $response['fact'] = $fact;
    $response['response_code'] = $response_code;

    $json_response = json_encode($response);
    echo $json_response;
}
