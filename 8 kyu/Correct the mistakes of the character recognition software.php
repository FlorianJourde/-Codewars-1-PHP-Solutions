<?php

// Correct the mistakes of the character recognition software
function correct($string) {
  $string = str_replace('0', 'O', $string);
  $string = str_replace('1', 'I', $string);
  $string = str_replace('5', 'S', $string);
  return $string;
}

function correct($string) {
  return str_replace(["5", "0", "1"], ["S", "O", "I"], $string);
}
