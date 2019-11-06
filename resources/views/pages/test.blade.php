<?php
  $file = file(asset('ufka-praesidium-1617.csv'),FILE_SKIP_EMPTY_LINES); 
  $csv = array_map("str_getcsv",$file, array_fill(0, count($file), ';'));
  $keys = array_shift($csv);
  foreach ($csv as $i=>$row) {
      $csv[$i] = array_combine($keys, $row);
  }
  dd($csv);
?>
