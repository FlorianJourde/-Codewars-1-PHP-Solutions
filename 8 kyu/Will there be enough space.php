<?php

// Will there be enough space?
function enough($cap, $on, $wait) {
  if ($cap < $on + $wait) {
    return ($on + $wait) - $cap;
  } else {
    return 0;
  }
}

function enough($cap, $on, $wait) {
  return max(0, $wait - $cap + $on);
}
