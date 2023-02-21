<?php
$file_path = $argv[1];
$file_content = file_get_contents($file_path);
$newline_count = substr_count($file_content, "\n");
echo $newline_count;