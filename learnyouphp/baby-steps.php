<?php
$sum = 0;

for ($i = 1; $i < count($argv); $i++) {
  $sum += $argv[$i];
}

echo $sum;