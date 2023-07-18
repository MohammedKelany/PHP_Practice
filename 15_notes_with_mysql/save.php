<?php
$pdo = require_once "./Connection.php";

$id = $_POST['id'] ?? '';
if ($id) {
    $pdo->updateNote($id, $_POST);
} else {
    $pdo->addNote($_POST);
}
// exit;
header('Location: index.php');
