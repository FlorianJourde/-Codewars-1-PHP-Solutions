<?php

//   Expressions Matter
function expressionMatter($a, $b, $c) {
  $value = array();

  $value[] = $a * ($b + $c);
  $value[] = $a * $b * $c;
  $value[] = $a + $b * $c;
  $value[] = $a * $b + $c;
  $value[] = $a + $b + $c;
  $value[] = ($a + $b) * $c;


  rsort($value);
  return $value[0];
}

function expressionMatter($a, $b, $c) {
  return max([
    $a+$b+$c,
    ($a+$b)*$c,
    $a*($b+$c),
    $a+$b*$c,
    $a*$b+$c,
    $a*$b*$c
  ]);
}

function expressionMatter($a, $b, $c)
{
  return max($a + $b + $c, $a * $b * $c, $a * ($b + $c), ($a + $b) * $c);
}
