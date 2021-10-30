<?php

function lovefunc($flower1, $flower2) {
  return ($flower1 % 2 + $flower2 % 2) % 2 === 1 ? true : false;
}

function lovefunc(int $flower1, int $flower2) : bool {
  return ($flower1 % 2 !== $flower2 % 2);
}

function lovefunc($f1, $f2):bool {
  return ($f1+$f2)%2;
}
