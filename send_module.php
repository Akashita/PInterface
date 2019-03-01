<?php

$arg_list = array("name", "description", "command", "parameter", "color");
$module = array();
$file_content = array();
foreach ($arg_list as $arg) {
  if (isset($_POST[$arg])){
    $module[] = $_POST[$arg];
  }
  else{
    $module[] = "undefined";
  }
}

$file_id = fopen('data/modules.csv', 'r+');
$id = 0;
while(!feof($file_id)) {
  fgetcsv($file_id); //Changement de ligne
  $id++;
}

fclose($file_id);


$file = fopen('data/modules.csv', 'a+');
array_unshift($module,$id);
fputcsv($file, $module);
fclose($file);
//echo() si on veut renvoyer une erreur
 ?>
