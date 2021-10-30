<?php

function reverseSeq ($n) {
  $arr = [];

  for ($i = $n; $i > 0; $i--) {
    $arr[] = $i;
  }

  return $arr;
};

function reverseSeq ($n) {
  return range($n, 1);
};

function reverseSeq ($n) {
  while($n>=1) {
    $arr[] += $n--;
  }
  return $arr;
};
