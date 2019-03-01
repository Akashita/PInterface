<?php
$id = $_POST["id"];
$file_content = array();
$new_file_content = array();

$file = fopen('data/modules.csv', 'r+');
  while(!feof($file)){
    $file_content[] = fgetcsv($file);
  }
  array_pop($file_content); //On enlève le dernier individus (un bool)
  foreach ($file_content as $module) {
    if($module[0] != $id){
      $new_file_content[] = $module;
    }
  }
fclose($file);

$new_file = fopen('data/modules_tmp.csv', 'x');
  foreach ($new_file_content as $new_content) {
    fputcsv($new_file, $new_content);
  }
fclose($new_file);

unlink('data/modules.csv');

rename('data/modules_tmp.csv', 'data/modules.csv');
?>
