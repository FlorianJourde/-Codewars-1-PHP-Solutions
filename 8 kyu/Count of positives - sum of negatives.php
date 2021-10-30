<?php

// Count of positives / sum of negatives
function countPositivesSumNegatives($input) {
  $count = 0;
  $sum_neg = 0;

  if ($input == []) {
    return [];
  }

  for ($i = 0; $i < count($input); $i++) {
    if ($input[$i] > 0) {
      $count ++;
    } else {
      $sum_neg += $input[$i];
    }
  }

  return array($count, $sum_neg);
}

function countPositivesSumNegatives($input) {
  if (empty($input)) {
    return [];
  }

  $pos = $neg = 0;
  foreach ($input as $value) {
    if ($value > 0) {
      $pos += 1;
    } else {
      $neg += $value;
    }
  }

  return [$pos, $neg];
}
