<?php

//Parse nice int from char problem
function getAge($response) {
    return intval(substr($response, 0, 1));
}

function getAge($response) {
  return $response[0];
}
