<?php

// Remove First and Last Character
function remove_char(string $s): string {
  return substr(substr($s, 1), 0, -1);
}

function remove_char(string $s): string {
  return substr($s,1,-1);
}
