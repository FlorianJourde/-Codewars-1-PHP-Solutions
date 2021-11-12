<?php

// Going to the cinema
function movie($card, $ticket, $perc) {
  $count = 0;
  $total_b = 0.0;
  $total_a = 0.0;

  while (ceil($card + $total_b) >= $total_a) {
    $total_a += $ticket;
    $total_b = ($total_b + $ticket) * $perc;
    $count += 1; 
  }

  return $count;
}

function movie($card, $ticket, $perc) {
  $need = 0;
  do {
      $need++;
      $card += $ticket * ($perc ** $need);
  } while (ceil($card) >= ($ticket * $need));   
  return $need;
}
