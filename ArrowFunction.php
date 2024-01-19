<?php

$first_name = "Muhammad";
$last_name = "Zaki";

$arrowFunction = fn () => "Hello $first_name $last_name" . PHP_EOL;

echo $arrowFunction();