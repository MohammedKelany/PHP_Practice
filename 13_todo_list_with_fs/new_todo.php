<?php
$todo_name = $_POST["todo_name"] ?? '';
if ($todo_name) {
    if (file_exists('to_dos.json')) {
        $conntentText = file_get_contents("to_dos.json");
        $content_array = json_decode($conntentText, true);
    } else {
        $content_array = [];
    }
    $content_array[$todo_name] = ["completed" => false];
    $new_content = json_encode($content_array, JSON_PRETTY_PRINT);
    file_put_contents("to_dos.json", $new_content);
    echo "<pre>";
    var_dump($content_array);
    echo "</pre>";
}

header('Location: index.php');
