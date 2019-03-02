<?php
$id = $_POST['id'];

$database = new SQLite3("data/db.sqlite");
$result = $database->query("SELECT * FROM modules WHERE id=$id");
$row = $result->fetchArray();
$json_tab = [$row['id'], $row['name'], $row['description'], $row['command'], $row['parameter'], $row['color']];

echo(json_encode($json_tab));
 ?>
