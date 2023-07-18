<?php
$json_text = file_get_contents('to_dos.json');
$json_array = json_decode($json_text, true);
$todo_name = $_POST['todo_name'];
unset($json_array[$todo_name]);
echo "<pre>";
var_dump($json_array);
echo "</pre>";
file_put_contents('to_dos.json', json_encode($json_array, JSON_PRETTY_PRINT));
header('Location: index.php');
