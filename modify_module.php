<?php

$database = new SQLite3("data/db.sqlite");

function verify_post($arg){
  if(isset($_POST[$arg])){
    return $_POST[$arg];
  } else{
    return "undefined";
  }
}

if (isset($_POST['id']) and gettype($_POST['id']) == 'integer'){
  $id = $_POST['id'];
  $name = verify_post('name');
  $desc = verify_post('description');
  $command = verify_post('command');
  $parameter = verify_post('parameter');
  $color = verify_post('color');

  $database->exec("UPDATE modules SET name='$name', description='$desc', command='$command', parameter='$parameter', color='$color' WHERE id=$id");

}

?>
