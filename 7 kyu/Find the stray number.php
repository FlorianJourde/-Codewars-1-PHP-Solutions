<?php

// Find the stray number
function stray($arr) {
  $unique = array_count_values($arr);

  foreach($unique as $key => $value) {
    if ($value === 1) {
      return $key;
    }
  }
}

function stray(array $arr) {
  return array_search(1, array_count_values($arr));
}

function stray($arr) {
  sort($arr);
  return $arr['0'] ==  $arr['1'] ? end($arr) : $arr['0'];
}
