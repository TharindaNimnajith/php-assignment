<?php

require 'helper.php';

if (isset($_GET['numbers']) && $_GET['numbers'] != '') {
    $numbers = $_GET['numbers'];

    if ($numbers == 'true') {
        $fact = getFactWithNumber();
    } else if ($numbers == 'false') {
        $fact = getFactWithoutNumber();
    }
}

if (!isset($fact)) {
    $fact = getRandomFact();
}

response($fact, 200);
