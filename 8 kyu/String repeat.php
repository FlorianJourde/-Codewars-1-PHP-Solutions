<?php

// String repeat
function repeatStr($n, $str) {
  $arr = array();

  for ($i = 0; $i < $n; $i++) {
    $arr[] = $str;
  }

  return implode("", $arr);
}

function repeatStr($n, $str) {
  return str_repeat($str, $n);
}
