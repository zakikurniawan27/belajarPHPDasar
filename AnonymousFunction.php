<?php

function sayHello(string $name, $filter){
    $realName = $filter($name);
    echo "Hello $realName" . PHP_EOL;
}

$anonymousFunction = function(string $name){
    return strtoupper($name);
};

sayHello("Zaki", $anonymousFunction);

//ambil variable diluar 
$first_name = "Muhammad";
$last_name = "Zaki";

$sayZaki = function() use($first_name, $last_name){
    echo "Hello $first_name $last_name" . PHP_EOL;
};

$sayZaki();