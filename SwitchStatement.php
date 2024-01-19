<?php

//If statement
$nilaiku = 50;
$absen = 50;

if($nilaiku >= 80 && $absen >= 80){
    echo "A";
    $nilaiku = "A";
}else if($nilaiku >= 70 && $nilaiku >= 70){
    echo "B";
    $nilaiku = "B";
}else if($nilaiku >= 60 && $nilaiku >= 60){
    echo "C";
    $nilaiku = "C";
}else if($nilaiku >= 50 && $nilaiku >= 50){
    echo "D";
    $nilaiku = "D";
}else {
    echo "E";
    $nilaiku = "E";
};

//switch statment
switch($nilaiku) {
    case "A":
        echo "Lulus Sempurna" . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Lulus" . PHP_EOL;
        break;
    case "D":
        echo "Tidak Lulus" . PHP_EOL;
        break;
    default:
        echo "Belajar Lebih Giat Lagi" . PHP_EOL;
};