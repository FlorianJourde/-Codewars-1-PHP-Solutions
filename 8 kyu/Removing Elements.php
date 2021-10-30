<?php

// Removing Elements
function removeEveryOther($array) {
  return array_filter($array, function($i) {
    return !($i % 2);
  }, ARRAY_FILTER_USE_KEY);
}

array(2) {
  [0]=>
    string(5) "hello"
  [2]=>
    string(3) "buy"
}

function removeEveryOther($array) {
  $newarray = array();

  for ($i = 0; $i < count($array) ; $i+=2) {
    if ($i % 2 === 0) {
      $newarray[] = $array[$i];
    }
  }

  return $newarray;
}

array(2) {
  [0]=>
    string(5) "hello"
  [1]=>
    string(3) "buy"
}

function removeEveryOther($array) {
  $count = count($array);
  for($i=1;$i<=$count;$i=$i+2){
    unset($array[$i]);
  }
  return $array;
}
