<?php
$dir_path = $argv[1];
$file_extension = $argv[2];

foreach(new DirectoryIterator($dir_path) as  $file) {
  if ($file->getExtension() == $file_extension) {
    echo $file->getFilename() . "\n";
  }
}
