<?php

// Count the Monkeys!
function monkeyCount($n) {
  $result = array();

  for ($i = 0; $i < $n; $i++) {
    $result[] = $i + 1;
  }

  return $result;
}

function monkeyCount($n) {
  return range(1, $n);
}

function monkeyCount($n) {
  $monkeys = [];

  for($i=1; $i<=$n;$i++)
  {
    array_push($monkeys, $i);
  }

  return $monkeys;
}
