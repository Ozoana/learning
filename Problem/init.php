<?php

function generate(int $lenght = 100000000): array {
    $arr = [];
    for ($i = 0; $i < $lenght; $i++) {
        $arr[] = rand(1, 1000000);
    }

    return $arr;
}