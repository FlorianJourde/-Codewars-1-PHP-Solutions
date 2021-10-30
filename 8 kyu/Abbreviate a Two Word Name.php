<?php

// Abbreviate a Two Word Name
function abbrevName($name) {
  $arr = explode(" ", $name);
  $result = [];

  for ($i = 0; $i < count($arr); $i++) {
    $result[] = strtoupper(substr($arr[$i], 0, 1));
  }

  return implode(".", $result);
}

function abbrevName(string $name): string {
  $divide = explode(' ', $name);
  return strtoupper("{$divide[0][0]}.{$divide[1][0]}");
}

function abbrevName( string $name ) : string {
  return implode( ".", array_map(function( $n ) { if ( ! empty( $n )) return $n[0]; }, explode(" ", strtoupper( $name ) ) ) );
}
