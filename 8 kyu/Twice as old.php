<?php

// Twice as old
function twice_as_old($dad_years_old, $son_years_old) {
  $count_more = $dad_years_old;
  $count_less = $dad_years_old;

  for ($i = 0; $i < $dad_years_old; $i++) {
    if ($count_more === 2 * $son_years_old) {
      return $count_more - $dad_years_old;
    } else if ($count_less === 2 * $son_years_old) {
      return $dad_years_old - $count_less;
    } else if ($son_years_old === 0) {
      return $dad_years_old;
    } else {
      $count_more = $count_more + 1;
      $count_less = $count_less - 1;
    }
  }
}

function twice_as_old($dad_years_old, $son_years_old) {
  return abs($dad_years_old - $son_years_old * 2);
}
