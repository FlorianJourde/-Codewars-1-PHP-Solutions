<?php

// Invert values
function invert(array $a): array {
    $b = [];
    
    foreach ($a as $value) {
        $b[] = -$value;
    }
    
    return $b;
}

function invert(array $a): array {
    return array_map(function ($n) {return -$n;}, $a);
}
