<?php

function grow($a) {
    return array_reduce($a, function($b, $c) { return $b * $c; }, 1);
}

function grow($a) {
    return array_product($a);
}
