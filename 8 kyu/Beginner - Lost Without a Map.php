<?php

// Beginner - Lost Without a Map
function maps($x) {
  $result = array();

  for ($i = 0; $i < count($x); $i++) {
    $result[] = $x[$i] * 2;
  }

  return $result;
}

function maps($x) {
  return array_map(function($el) {
    return $el * 2;
  }, $x);
}
