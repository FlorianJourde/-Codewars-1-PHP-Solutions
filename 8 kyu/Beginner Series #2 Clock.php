<?php

// Beginner Series #2 Clock
function past($h, $m, $s) {
  return (3600000 * $h) + (60000 * $m) + (1000 * $s);
}

function past($h, $m, $s) {
  return (($h * 60 * 60) + $m * 60 + $s) * 1000;
}
