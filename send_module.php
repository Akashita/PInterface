<?php

$arg_list = array("name", "description", "command", "parameter", "color");
$module = array();
$file_content = array();
foreach ($arg_list as $arg) {
  if (isset($_POST[$arg])){
    $module[] = $_POST[$arg];
  }
  else{
    $module[] = "undifined";
  }
}

$file = fopen('data/modules.csv', 'a');
fprintf($file, chr(0xEF).chr(0xBB).chr(0xBF));
$file_content[] = $module;
foreach ($file_content as $module_content) {
  fputcsv($file, $module_content);
}
fclose($file);
//echo() si on veut renvoyer une erreur
 ?>
