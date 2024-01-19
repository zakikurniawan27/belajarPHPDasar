<?php

function say(string $name, $filter){
    $realName = $filter($name);
    return $realName;
}

$sapa = say("Zaki", "strToUpper");
echo $sapa . PHP_EOL;

function fullName(string $name): string {
    return "Muhammad $name Kurniawan";
}

$namaFull = say("Zaki", "fullName");
echo $namaFull . PHP_EOL;