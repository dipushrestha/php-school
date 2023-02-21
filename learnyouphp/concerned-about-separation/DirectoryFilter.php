<?php

class DirectoryFilter
{
  /**
   * @param string $dir
   * @param string $ext
   * @return array
   * 
   */
  public function getFiles($dir, $ext) 
  {
    $file_names = array();

    foreach( new DirectoryIterator($dir) as $file) {
      if ($file->getExtension() == $ext) {
        $file_names[] = $file->getFilename();
      }
    }

    return $file_names;
  }
}
