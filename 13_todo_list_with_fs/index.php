<?php

/**
 * User: TheCodeholic
 * Date: 2/18/2020
 * Time: 10:13 AM
 */
$json = file_get_contents("to_dos.json");
$json_array = json_decode($json, true);
echo '<pre>';
var_dump($json_array);
echo '</pre>';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO</title>
</head>

<body>
    <form action="new_todo.php" method="post" style="display: inline-block;">
        <input type="text" value="" name="todo_name">
        <button>Submit</button>
    </form>
    <?php
    foreach ($json_array as $name => $value) : ?>
        <div style="margin-bottom: 20px;">
            <form style="display: inline-block;" action="change_status.php" method="post">
                <input type="hidden" name="todo_name" value='<?php echo $name ?>'>
                <input type="checkbox" <?php echo $value['completed'] ? 'checked' : '' ?>>
            </form>
            <?php echo $name ?>
            <form style="display: inline-block;" action="delete_todo.php" method="post">
                <input type="hidden" name="todo_name" value='<?php echo $name ?>'>
                <button>DELETE</button>
            </form>
            <br>
        </div>
    <?php endforeach; ?>
    <script>
        const checkboxes = document.querySelectorAll('input[type=checkbox]');
        checkboxes.forEach(checkbox => {
            checkbox.onclick = function() {
                this.parentNode.submit();
            }
        })
    </script>
</body>

</html>