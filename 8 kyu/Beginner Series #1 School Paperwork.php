<?php

// Beginner Series #1 School Paperwork
function paperwork(int $n, int $m): int {
  return $n > 0 && $m > 0 ? $n * $m : 0;
}

function paperwork(int $n, int $m): int {
  return $n < 0 || $m < 0 ? 0 : $n * $m;
}
