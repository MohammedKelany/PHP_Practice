<?php

$username = "";
$password = "";
$password_confirm = "";
$email = "";
$cv_url = "";
define("error_message", "This Field is Required ");
$errors = [];
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    // $posts = $_POST;
    // echo '<pre>';
    // var_dump($posts);
    // echo '</pre>';
    $username = validate_field($_POST["username"]);
    $email = validate_field($_POST["email"]);
    $password = validate_field($_POST["password"]);
    $password_confirm = validate_field($_POST["password_confirm"]);
    $cv_url = validate_field($_POST["cv_url"]);
    if (!$username) {
        $errors['username'] = error_message;
    } else if ($username && strlen($username) < 6 || strlen($username) > 15) {
        # code...
        $errors['username'] = "Please Enter valid Username";
    }
    if (!$password) {
        $errors['password'] = error_message;
    } elseif ($password && strlen($password) < 6) {
        $errors['password'] = "Too Short Password";
    }
    if (!$password_confirm) {
        $errors['password_confirm'] = error_message;
    } else if ($password && $password_confirm && strcmp($password, $password_confirm) != 0) {
        $errors['password_confirm'] = "The Password and the confirm aren't The Same";
    }
    if (!$email) {
        $errors['email'] = error_message;
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        # code...
        $errors['email'] = 'Please Enter valid Email';
    }
    if ($cv_url && !filter_var($cv_url, FILTER_VALIDATE_URL)) {
        $errors['cv_url'] = 'Please Enter valid CV link';
    }
}

function validate_field($field)
{
    return  htmlspecialchars(stripslashes($field));
}
// echo "username : "  . $username . '<br>';
// echo "password : " . $password . '<br>';
// echo "password_confirm :" . $password_confirm . '<br>';
// echo "email : " . $email . '<br>';
// echo "cv_url : " . $cv_url . '<br>' . '<br>';
if (empty($errors) && $username) {
    echo "Every Thing is ok" . '<br>' . '<br>';
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body style="padding: 50px;">

    <form action="" method="post" novalidate>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label>Username</label>
                    <input value="<?php echo  $username ?>"
                        class="form-control <?php echo  isset($errors["username"]) ? 'is-invalid' : ''  ?>"
                        name="username">
                    <div class="invalid-feedback"><?php echo  $errors['username'] ?></div>
                    <small class="form-text text-muted">Min: 6 and max 16 characters</small>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label>Email</label>
                    <input value="<?php echo  $email ?>" type="email"
                        class="form-control  <?php echo isset($errors['email']) ? "is-invalid" : "" ?>" name="email"
                        <?php echo  isset($errors["email"]) ? 'is-invalid' : ''  ?>>
                    <div class="invalid-feedback"><?php echo $errors['email'] ?> </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label>Password</label>
                    <input value="<?php echo  $password ?>" type="password"
                        class="form-control <?php echo  isset($errors["password"]) ? 'is-invalid' : ''  ?>"
                        name="password">
                    <div class="invalid-feedback"><?php echo $errors['password'] ?> </div>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label>Repeat Password</label>
                    <input value="<?php echo  $password_confirm ?>" type="password"
                        class="form-control <?php echo  isset($errors["password_confirm"]) ? 'is-invalid' : ''  ?>"
                        name="password_confirm">
                    <div class="invalid-feedback"><?php echo $errors['password_confirm'] ?> </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="form-group">
                <label>Your CV link</label>
                <input value="<?php echo  $cv_url ?>" type="text"
                    class="form-control <?php echo isset($errors["cv_url"]) ? 'is-invalid' : ''  ?>" name="cv_url"
                    placeholder="https://www.example.com/my-cv" />
                <div class="invalid-feedback"><?php echo $errors['cv_url'] ?> </div>
            </div>
        </div>

        <div class="form-group">
            <button class="btn btn-primary">Register</button>
        </div>
    </form>

</body>

</html>