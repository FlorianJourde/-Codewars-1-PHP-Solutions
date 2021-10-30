<?php

// L1: Set Alarm
function setAlarm(bool $employed, bool $vacation): bool {
  return $employed && !$vacation;
}
