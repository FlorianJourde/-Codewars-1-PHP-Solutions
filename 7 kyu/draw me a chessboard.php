<?php

// draw me a chessboard
function chessBoard($rows, $columns) {
  $board = array();
  $boards = array();

  for ($i = 0; $i < $rows; $i++) {
    $board = array();

    for ($j = 0; $j < $columns; $j++) {
      if ($i % 2 === 0) {
        if ($j % 2 === 0) {
          $board[] = "O";
        } else {
          $board[] = "X";
        }
      } else {
        if ($j % 2 === 0) {
          $board[] = "X";
        } else {
          $board[] = "O";
        }
      }
    }
    $boards[] = $board;
  }

  return $boards;
}

function chessBoard($rows, $columns) {
  $board = [];
  for ($row = 0; $row < $rows; $row++) {
    for ($column = 0; $column < $columns; $column++) {
      $board[$row][$column] = ($row + $column) % 2 ? "X" : "O";
    }
  }

  return $board;
}
