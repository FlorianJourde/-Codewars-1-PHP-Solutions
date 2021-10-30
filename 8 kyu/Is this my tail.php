<?php

// Is this my tail?
function equivalent($body, $char) {
  return substr($body, -1, 1) === $char;
}
