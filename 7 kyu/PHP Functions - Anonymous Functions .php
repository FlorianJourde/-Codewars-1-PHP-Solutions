<?php

// PHP Functions - Anonymous Functions 
$hello_world = function() {
  return 'Hello World';
};

$person_description = function($name, $age, $job) {
  return "{$name} is {$age} years old and currently works as a(n) {$job}";
};
