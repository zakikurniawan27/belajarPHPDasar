<?php

$nama = ["Muhammad", "Zaki", "Kurniawan"];

for($i = 0; $i < count($nama); $i++){
    echo "Hello $nama[$i]" . PHP_EOL;
}

echo PHP_EOL . "Ini foreach : " . PHP_EOL ;
foreach($nama as $names){
    echo "Hello $names" . PHP_EOL;
}

//foreach dengan key
$identitas = [
    "first_name" => "Muhammad",
    "middle_name" => "Zaki",
    "last_name" => "Kurniawan"
];

echo "\nini adalah foreach dengan key : " . PHP_EOL;
foreach($identitas as $key => $value){
    echo "hello $key : $value" . PHP_EOL;
}