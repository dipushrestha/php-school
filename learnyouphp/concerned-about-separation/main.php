<?php
require_once __DIR__ . '/DirectoryFilter.php';

$dir = $argv[1];
$ext = $argv[2];
$directoryFilter = new DirectoryFilter();

foreach($directoryFilter->getFiles($dir, $ext) as $filename) {
  echo $filename . "\n";
}
