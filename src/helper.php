<?php

require 'config.php';

function getRandomFact(): string
{
    global $array;
    $rand = array_rand($array);
    return $array[$rand]->fact;
}

function getFactWithNumber(): string
{
    global $array;

    do {
        $rand = array_rand($array);
        $fact = $array[$rand]->fact;
    } while (!hasNumber($fact));

    return $fact;
}

function getFactWithoutNumber(): string
{
    global $array;

    do {
        $rand = array_rand($array);
        $fact = $array[$rand]->fact;
    } while (hasNumber($fact));

    return $fact;
}

function hasNumber($fact): bool
{
    return preg_match('~[0-9]+~', $fact);
}

function response($fact, $response_code): void
{
    $response['fact'] = $fact;
    $response['response_code'] = $response_code;

    $json_response = json_encode($response);
    echo $json_response;
}
