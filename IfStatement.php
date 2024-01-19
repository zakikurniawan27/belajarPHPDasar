<?php

$nilaiku = 70;
$absen = 80;

if($nilaiku >= 80 && $absen >= 80){
    echo "A";
}else if($nilaiku >= 70 && $nilaiku >= 70){
    echo "B";
}else if($nilaiku >= 60 && $nilaiku >= 60){
    echo "C";
}else if($nilaiku >= 50 && $nilaiku >= 50){
    echo "D";
}else {
    echo "E";
};
