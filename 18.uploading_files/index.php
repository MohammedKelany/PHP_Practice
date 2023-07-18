<?php
error_reporting(0);
if (isset($_POST['submit'])) {
    if (isset($_FILES["image"]["name"])) {
        $file_name = $_FILES["image"]["name"];
        $dir = __DIR__ . "//images/" . $file_name;
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $dir)) {
            echo ('<div class="mt-5 alert alert-primary alert-dismissible fade show container" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <strong>Posted Successfully</strong>.
            </div>
            ');
        } else {
            echo ('<div class="mt-5 alert alert-danger container alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <strong>Error Occurred</strong>
        </div>
        ');
        }
    }
}
?>



<!doctype html>
<html lang="en">

<head>
    <title>Uploading Images</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        <div class="container mt-5">
            <form action="index.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="image" class="form-label">Choose file</label>
                    <input type="file" class="form-control" name="image">
                </div>
                <button name="submit" class="btn btn-primary p-3">Submit</button>
            </form>
        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>