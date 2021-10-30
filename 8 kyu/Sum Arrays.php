<?php

function sum(array $a): float {
  if ($a === []) {
    return 0;
  }

  return array_reduce($a, function($b, $c) { return $b + $c; });
}

function sum(array $a): float {
  return array_sum($a);
}
