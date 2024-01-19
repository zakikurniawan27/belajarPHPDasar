<?php

function sayHello(string $name, callable $filter){
    $realName = call_user_func($filter, $name);
    return $realName;
}

echo sayHello("Zaki", "strtoupper") . PHP_EOL;
echo sayHello("Zaki", function(string $name): string{
    return strtoupper($name);
}) . PHP_EOL;
echo sayHello("Zaki", fn($name) => strtolower($name)) . PHP_EOL;
