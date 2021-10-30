<?php

// Dollars and Cents
function format_money(float $amount): string {
  return "$" . number_format((float)$amount, 2, '.', '');
}

function format_money(float $amount): string {
  return sprintf('$%.2f', $amount);
}
