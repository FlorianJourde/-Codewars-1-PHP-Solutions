<?php

// Unfinished Loop - Bug Fixing #1
function createArray($number){
  $new_array = array();

  for($count = 1; $count <= $number; $count++) {
    $new_array[] = $count;
  }

  return $new_array;
}

function createArray($number) {
  return range(1, $number);
}
