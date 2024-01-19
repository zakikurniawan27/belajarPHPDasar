<?php

$first = [
    "first_name" => "Muhammad"
];

$middle =[
    "middle_name" => "Zaki"
];

$last = [
    "last_name" => "Kurniawan"
];

//union (penggabungan beberapa array)
$fullname = $first + $middle + $last;

var_dump($fullname);

$identitas1 = [
    "first_name" => "Muhammad",
    "middle_name" => "Zaki",
    "last_name" => "Kurniawan"
];

$identitas2 = [
    "last_name" => "Kurniawan",
    "first_name" => "Muhammad",
    "middle_name" => "Zaki",
];

var_dump($identitas1 == $identitas2);
var_dump($identitas1 === $identitas2);