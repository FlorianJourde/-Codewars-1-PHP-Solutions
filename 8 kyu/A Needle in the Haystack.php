<?php

function findNeedle($haystack) {
  for ($i = 0; $i < count($haystack); $i++) {
    if ($haystack[$i] === 'needle') {
      return 'found the needle at position ' . $i;
    }
  }
}

function findNeedle($haystack) {
  return 'found the needle at position ' . array_search('needle', $haystack);
}
