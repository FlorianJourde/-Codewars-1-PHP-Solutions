<?php

// The Feast of Many Beasts
function feast($beast, $dish){
  return substr($beast, 0, 1) === substr($dish, 0, 1) && substr($beast, -1, 1) === substr($dish, -1, 1);
}

function feast($beast, $dish) {
  return (($beast[0] === $dish[0]) && ($beast[strlen($beast) - 1] === $dish[strlen($dish) - 1]));
}
