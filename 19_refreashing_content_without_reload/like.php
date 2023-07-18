<?php require "db.php"; ?>
<?php
if (isset($_POST["post_id"]) && isset($_POST["user_id"])) {
    echo $database->check_making_like($_POST["post_id"], $_POST["user_id"]);
} else {
    echo "error";
}
?>