<?php

$database = new SQLite3("data/db.sqlite");

function verify_post($arg){
  if(isset($_POST[$arg])){
    return $_POST[$arg];
  } else{
    return "undefined";
  }
}

$id = verify_post("id");

echo($id);

$database->exec("DELETE FROM modules WHERE id=$id");

?>
