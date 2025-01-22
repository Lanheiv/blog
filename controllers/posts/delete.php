<?php

$sql = "SELECT * FROM post WHERE id = :id";
$params = ["id" => $_GET["id"]];
$post = $db->query($sql, $params)->fetch();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($post["content"]) && is_numeric($_POST["id"])) {
        if (isset($_POST["value"]) == "ja") {
            $params = ["id" => $_POST["id"]];
            $sql = "DELETE FROM post WHERE id = :id";

            $db->query($sql , $params);
            header("Location: /"); exit();
        } else {
            header("Location: /show?id=" . $_POST["id"]); exit();
        }
    } else {
        header("Location: /"); exit();
    }
}

require "views/posts/delete.view.php";