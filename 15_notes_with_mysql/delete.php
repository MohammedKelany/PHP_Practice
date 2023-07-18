<?php

$pdo = include_once './Connection.php';
$id = $_POST['id'] ?? '';
if ($id) {
    $pdo->deleteNote($id);
}
header('Location: index.php');
