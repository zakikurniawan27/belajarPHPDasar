<?php

function sum(int $a, int $b){
    $total = $a + $b;
    return $total;
}

$penjumlahan = sum(3,1);
echo $penjumlahan . PHP_EOL;
var_dump($penjumlahan);

function say(string $name){
    return "halo nama saya $name";
}
$sapa = say("zaki");
echo $sapa . PHP_EOL;

function nilai(int $a){
    if($a >= 80){
        return "A";
    }elseif($a >= 70){
        return "B";
    }elseif($a >= 60){
        return "C";
    }elseif($a >= 50){
        return "D";
    }else{
        return "E";
    }
}

$nilaiku = nilai(65);
echo "nilaiku adalah $nilaiku";