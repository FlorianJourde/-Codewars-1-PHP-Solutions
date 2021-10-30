<?php

// I love you, a little , a lot, passionately ... not at all
function how_much_i_love_you(int $nb_petals): string {
  $statements = Array('I love you', 'a little', 'a lot', 'passionately', 'madly', 'not at all');

  while($nb_petals > 6) {
    $nb_petals -= 6;
  }

  return $statements[$nb_petals - 1];
}
