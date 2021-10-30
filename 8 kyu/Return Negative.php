<?php

// Return Negative
function makeNegative(float $num) : float {
    return $num > 0 ? -$num : $num;
}

function makeNegative(float $num) : float {
  return -abs($num);
}
