<?php

$name = ["Muhammad", "Zaki", "Kurniawan"];
echo $name[0];
var_dump($name);

//akses data array
var_dump($name[0]);

//ganti data array
$name[1] = "ZAKI";
var_dump($name[1]);

//tambah data array
$name[] = "Ganteng";
var_dump($name);

//hapus data array
unset($name[3]);
var_dump($name);

unset($name[1]);
var_dump($name);

$name[1] = "Zaki";
var_dump($name);

//array dalam array
$identitas = [
    "id" => 1,
    "name" => "Muhammad Zaki Kurniawan",
    "age" => 22,
    "address" => [
        "city" => "Kutai Kartanegara",
        "country" => "Indonesia"
    ]
];

var_dump($identitas);

var_dump($identitas["name"]);
var_dump($identitas["address"]["city"]);