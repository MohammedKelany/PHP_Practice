<?php
session_start();
echo session_id() . '<br>';
$_SESSION['counter'] ??= 0;
$_SESSION['counter'] = $_SESSION['counter'] + 1;
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h2>you visited this wibsite : <?php echo $_SESSION['counter'] ?> times</h2>
    <br>
</body>

</html>