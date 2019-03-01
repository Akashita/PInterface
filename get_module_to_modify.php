<?php
$id = $_POST['id'];



$file = fopen('data/modules.csv', 'r+');

  while(!feof($file)){
    $file_content[] = fgetcsv($file);
  }
  array_pop($file_content); //On enlève le dernier individus (un bool)
  foreach ($file_content as $module) {
    if($module[0] == $id){
      $module_content = $module;
    }
  }

fclose($file);

echo(json_encode($module_content));
 ?>
