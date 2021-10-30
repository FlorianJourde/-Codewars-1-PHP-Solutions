<?php

// Total amount of points
function points(array $games): int {
  $score = 0;

  for ($i = 0; $i < count($games); $i++) {
    if (intval($games[$i][0], 10) > intval($games[$i][2], 10)) {
      $score += 3;
    } else if (intval($games[$i][0], 10) == intval($games[$i][2], 10)) {
      $score += 1;
    }
  }

  return $score;
}

function points(array $games): int {
  $score = 0;

  foreach($games as $game) {
    $gameScore = explode(':', $game);

    if ($gameScore[0] > $gameScore[1]) {
      $score += 3;
    }

    if ($gameScore[0] === $gameScore[1]) {
      $score += 1;
    }
  }

  return $score;
}
