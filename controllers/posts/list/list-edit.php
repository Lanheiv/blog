<?php
    if (!Validator::number($_GET["id"])) {
        redirectIfNotFound();
    } 

    $sql = "SELECT * FROM categories";
    $params = [];
    $categories = $db->query($sql , $params)->fetchAll();


    $sql = "SELECT * FROM post WHERE id = :id";
    $params = ["id" => $_GET["id"]];
    $post = $db->query($sql, $params)->fetch();

    if (!$post) {
        redirectIfNotFound();
    } 
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $errors = [];

        $params = ["id" => $_GET["id"], "content" => $_POST["content"], "category_id" => $_POST["categories"]];
        $sql = "UPDATE post SET content = :content, category_id = :category_id WHERE id = :id";

        if(!Validator::string($_POST["content"], max: 50)) {
            $errors["content"] = "Saturam jābūt ievadītam, bet ne garākam par 50 rakstzīmēm";
        } else {
            $db->query($sql , $params);
            header("Location: /show?id=" . $_GET["id"]); exit();
        }
    }

    $pagatitle = "Rediģēšana";
    require("views/posts/list/edit.view.php");
?>
