<?php

echo 'Nama : ';
echo 'Muhammad Zaki Kurniawan';
echo "\n";

echo "Nama : ";
echo "Muhammad\t Zaki\t Kurniawan";

echo <<<ZAKI
selamat belajar php
sekarang, kita belajar tipe data string
ini adalah cara ke-3 membuat string
bisa menggunakan heredoc
ZAKI;

echo <<<'ZAKI'
selamat belajar php
sekarang, kita belajar tipe data string
ini adalah cara ke-3 membuat string
bisa menggunakan nowdoc
ZAKI;