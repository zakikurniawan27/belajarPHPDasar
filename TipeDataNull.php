<?php

$name = "Zaki";
$name = null;


echo "name : ";
echo $name;

$isNull = is_null($name);//is_null untuk mengecek data ada atau gak (yakin)

var_dump($isNull);

$contoh = "Zaki";
$contoh = null;

var_dump(isset($contoh));//isset untuk mengecek data ada atau gak (tidak yakin)