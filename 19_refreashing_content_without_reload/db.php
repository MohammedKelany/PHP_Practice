<?php
define('DNS', 'mysql:host=localhost;dbname=like_sys');
define('USER', 'root');
define('PASSWORD', '');



class Database
{
    private $conn;
    public function __construct()
    {
        $this->conn = new PDO(DNS, USER, PASSWORD);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    public function make_like($post_id, $user_id)
    {
        $statement = $this->conn->prepare("INSERT INTO likes(post_id,user_id)VALUES(:post_id,:user_id)");
        $statement->bindValue("post_id", $post_id);
        $statement->bindValue("user_id", $user_id);
        $statement->execute();
    }
    public function delete_like($post_id, $user_id)
    {
        $statement = $this->conn->prepare("DELETE FROM likes WHERE post_id=:post_id AND user_id = :user_id");
        $statement->bindValue("post_id", $post_id);
        $statement->bindValue("user_id", $user_id);
        $statement->execute();
    }
    public function num_likes($post_id)
    {
        $statement = $this->conn->prepare("SELECT COUNT(*) AS likes FROM likes WHERE post_id=:post_id");
        $statement->bindValue("post_id", $post_id);
        $statement->execute();
        $likes = $statement->fetch(PDO::FETCH_ASSOC);
        return $likes["likes"];
    }
    public function check_is_liked($post_id, $user_id)
    {
        $statement = $this->conn->prepare("SELECT COUNT(*) AS liked FROM likes WHERE post_id=:post_id AND user_id = :user_id");
        $statement->bindValue("post_id", $post_id);
        $statement->bindValue("user_id", $user_id);
        $statement->execute();
        $liked = $statement->fetch(PDO::FETCH_ASSOC);
        if ($liked["liked"] == 0) {
            return true;
        } else {
            return false;
        }
    }
    public function get_posts()
    {
        $statement = $this->conn->prepare("SELECT * FROM posts");
        $statement->execute();
        $posts = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $posts;
    }
    public function check_making_like($post_id, $user_id)
    {
        $statement = $this->conn->prepare("SELECT COUNT(*) AS liked FROM likes WHERE post_id=:post_id AND user_id = :user_id");
        $statement->bindValue("post_id", $post_id);
        $statement->bindValue("user_id", $user_id);
        $statement->execute();
        $likes = $statement->fetch(PDO::FETCH_ASSOC);
        if ($likes["liked"] == 0) {
            $this->make_like($post_id, $user_id);
        } else {
            $this->delete_like($post_id, $user_id);
        }
        return $this->num_likes($post_id);
    }
}

$database = new Database();
