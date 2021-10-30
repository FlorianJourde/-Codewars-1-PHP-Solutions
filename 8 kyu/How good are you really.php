<?php

// How good are you really?
function betterThanAverage($classPoints, $yourPoints) {
  $average = array_sum($classPoints)/count($classPoints);
  if ($average < $yourPoints) {
    return true;
  }

  return false;
}

function betterThanAverage($classPoints, $yourPoints) {
  return array_sum($classPoints) / count($classPoints) < $yourPoints;
}

function betterThanAverage($classPoints, $yourPoints) {
  return array_sum($classPoints)/sizeof($classPoints) < $yourPoints ? true : false;
}
