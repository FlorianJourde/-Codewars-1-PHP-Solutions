<?php

// String Scramble
function scramble($str,$arr){
  $result = array_combine($arr, str_split($str, 1));
  ksort($result);
  return implode('', $result);
}

function scramble($str,$arr){
  $a = array_combine($arr,str_split($str));
  ksort($a);
  return implode('', $a);
}
