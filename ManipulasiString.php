<?php

$name = "Muhammad Zaki Kurniawan";
$age = 22;
 
echo "Nama saya adalah " . $name . PHP_EOL . "dan usia saya sekarang " . $age . PHP_EOL;


//konversi tipe data
$intToString = (string)10;
var_dump($intToString);

$stringToInt = (int)"100";
var_dump($stringToInt);

$stringToFloat = (float)"100.11";
var_dump($stringToFloat);

//mengakses karakter
$nama = "ZAKI";
echo $nama[0] . PHP_EOL . $nama[1] . PHP_EOL . $nama[2] . PHP_EOL;

//variable parsing
$nama = "zaki";
echo "Selamat datang $nama, Semangat Belajar". PHP_EOL;

//curly brace
echo "Selamat datang Tn'{$nama}, Semangat Belajar";