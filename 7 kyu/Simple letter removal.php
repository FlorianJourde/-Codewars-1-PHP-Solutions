<?php

// Simple letter removal
function solve(string $s, int $k) : string {
  foreach (range("a", "z") as $l) {
    if ($s === "" || !$k) {
      break;
    }
    $s = preg_replace("/$l/", "", $s, $k, $count);
    $k -= $count;
  }
  return $s;
}
