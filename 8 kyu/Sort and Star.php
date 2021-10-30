<?php

// Sort and Star
function twoSort($s) {
  $result = 0;
  $str_result = '';
  $answer = array();

  for ($i = 0; $i < count($s); $i++) {
    if (ord(substr($s[$i], 0, 1)) < $result || $result == 0) {
      $str_result = $s[$i];
      $result = ord(substr($s[$i], 0, 1));
    }
  }

  for ($i = 0; $i < strlen($str_result); $i++) {
    $answer[] = $str_result[$i];
  }

  return implode("***", $answer);
}

function twoSort($s) {
  asort($s);
  return implode('***', str_split(array_shift($s)));
}
