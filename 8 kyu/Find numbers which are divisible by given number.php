<?php

// Find numbers which are divisible by given number
function divisibleBy($numbers, $divisor) {
  $result = [];

  for ($i = 0; $i < count($numbers); $i++) {
    if ($numbers[$i] % $divisor === 0) {
      $result[] = $numbers[$i];
    }
  }

  return $result;
}

function divisibleBy($numbers, $divisor) {
  $total = [];
  foreach ($numbers as $number) {
    if ($number % $divisor == 0) {
      $total[] = $number;
    }
  }
  return $total;
}
