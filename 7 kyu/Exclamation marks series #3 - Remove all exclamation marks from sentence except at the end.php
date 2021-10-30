<?php

// Exclamation marks series #3: Remove all exclamation marks from sentence except at the end
function remove(string $s): string {
  $count = 0;
  while (substr($s, -1) == '!') {
    ++$count;
    $s = substr($s, 0, -1);
  }
  return str_replace('!', '', $s) . str_repeat('!', $count);
}

function remove(string $s): string {
  return preg_replace("/!(?!!*$)/", "", $s);
}
