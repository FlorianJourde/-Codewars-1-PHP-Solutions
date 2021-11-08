<?php

// PHP Functions - Default Arguments
function multiply_with_defaults ($a = 1, $b = 1) {
  return $a * $b;
};

function circle_area ($radius = 1) {
  return (pi() * ($radius * $radius));
};

function prank_replace($string, $match = "hello", $replacement = "goodbye") {
  return str_replace($match, $replacement, $string);
};
