<?php

function Says() {
    echo "Hello World" . PHP_EOL;
};

Says();

//parameter atau argument
function sum($a, $b){
    echo $a + $b . PHP_EOL;
};

sum(1, 2);

//parameter atau argument default value
function say($name = "Annonymous"){
    echo "Hello $name" . PHP_EOL;
}

say();
say("Zaki");

//type declaration argument
function minus(int $a, int $b){
    $total = $a - $b;
    echo "hasil pengurangan $a - $b adalah $total" . PHP_EOL;
}

minus("2", "1");
minus(100, 100);
minus(true, false);

//variable-length argument list
function jumlahAll(...$values){
    $total = 0;
    foreach($values as $value){
        $total += $value;
    }
    echo "total " . implode(" + ", $values) . " = $total" . PHP_EOL;
}

$nilai = [1,2,3,4,5];

jumlahAll(1,2,3,4,5);
jumlahAll(...$nilai);