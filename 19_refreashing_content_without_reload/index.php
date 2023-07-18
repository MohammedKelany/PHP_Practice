<?php require "db.php"; ?>
<?php
$posts = $database->get_posts();
?>

<!doctype html>
<html lang="en">

<head>
    <title>Liking System</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        <?php foreach ($posts as $post) : ?>
        <div class=" bg-dark p-5">
            <h1 class="text-center text-light "><?php echo $post["title"] ?></h1>
            <h1 class="text-center text-light like<?php echo $post["id"] ?>">
                <?php echo $database->num_likes($post["id"]) ?></h1>
            <div class="text-center mt-3">
                <button type="button" onclick="javascript:makeLike(<?php echo $post['id'] ?>,1)"
                    class="p-3 btn <?php echo $database->check_is_liked($post["id"], 1) ? "btn-primary" : "btn-danger" ?>  inc<?php echo $post["id"] ?>"><?php echo $database->check_is_liked($post["id"], 1) ? "Like" : "DisLike" ?></button>
            </div>
        </div>
        <?php endforeach; ?>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
    <script>
    function makeLike(post_id, user_id) {
        const http = new XMLHttpRequest();
        const url = 'like.php';
        const params = `post_id=${post_id}&user_id=${user_id}`;
        http.open('POST', url, true);
        //Send the proper header information along with the request
        http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        http.onreadystatechange = function() {
            //Call a function when the state changes.
            if (http.readyState == 4 && http.status == 200) {
                const content = document.querySelector(`.like${post_id}`);
                const inc = document.querySelector(`.inc${post_id}`);
                content.textContent = this.responseText;
                inc.classList.remove(inc.textContent == "Like" ? "btn-primary" : "btn-danger");
                inc.classList.add(inc.textContent == "Like" ? "btn-danger" : "btn-primary");
                inc.textContent = inc.textContent == "Like" ? "Dislike" : "Like";
            }
        }
        http.send(params);
    }
    </script>
</body>

</html>