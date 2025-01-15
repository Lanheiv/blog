<?php

$sql = "INSERT INTO post (content) VALUE ";
if (isset($_POST["content"]) && $_POST["content"] != "") {
    $params = ["content" => $_POST["content"]];

    header("Location: /"); exit();
}


require "views/posts/create.view.php";
