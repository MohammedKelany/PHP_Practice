<?php
$todo_name = $_POST['todo_name'];
echo "<pre>";
var_dump($todo_name);
echo "</pre>";
if ($todo_name) {
    $json_text = file_get_contents('to_dos.json');
    $json_array = json_decode($json_text, true);
    $json_array[$todo_name]['completed'] = !$json_array[$todo_name]['completed'];
    echo "<pre>";
    var_dump($json_array);
    echo "</pre>";
    file_put_contents('to_dos.json', json_encode($json_array, JSON_PRETTY_PRINT));
    header('Location: index.php');
}
