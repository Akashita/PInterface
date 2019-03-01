<?php

$arg_list = array("id","name", "description", "command", "parameter", "color");
$file_content = array();
foreach ($arg_list as $arg) {
  if (isset($_POST[$arg])){
    $modified_module[] = $_POST[$arg];
  }
  else{
    $modified_module[] = "undefined";
  }
}

print_r($modified_module);
$id = $_POST['id']; //attention type
echo($id);

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
    print_r($new_content);
    fputcsv($new_file, $new_content);
  }
  print_r($modified_module);
  fputcsv($new_file, $modified_module);
fclose($new_file);

unlink('data/modules.csv');

rename('data/modules_tmp.csv', 'data/modules.csv');

?>
