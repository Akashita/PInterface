<?php

$database = new SQLite3("data/db.sqlite");
$database->exec("CREATE TABLE IF NOT EXISTS modules (id INTEGER PRIMARY KEY, name varchar(255), description varchar(255), command varchar(255), parameter boolean, color character)");

function verify_post($arg){
  if(isset($_POST[$arg])){
    return $_POST[$arg];
  } else{
    return "undefined";
  }
}

$name = verify_post('name');
$desc = verify_post('description');
$command = verify_post('command');
$parameter = verify_post('parameter');
$color = verify_post('color');

$database->exec("INSERT INTO modules (name, description, command, parameter, color) VALUES ('$name', '$desc', '$command', '$parameter', '$color')");

 ?>
