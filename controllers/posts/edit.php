<?php
require "function/Validator.php";
$errors = [];

$sql = "SELECT * FROM post WHERE id = :id";
$params = ["id" => $_GET["id"]];
$post = $db->query($sql, $params)->fetch();

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (isset($post["content"]) && is_numeric($_POST["id"])) {
        $params = ["id" => $_POST["id"], "content" => $_POST["content"]];
        $sql = "UPDATE post SET content = :content  WHERE id = :id";
    
        if(!Validator::string($_POST["content"], max: 50)) {
            $errors["content"] = "Saturam jābūt ievadītam, bet ne garākam par 50 rakstzīmēm";
        } else {
            $db->query($sql , $params);
            header("Location: /show?id=" . $_POST["id"]); exit();
        }
    } else {
        $errors["content"] = "Nav atrasts ieraksts, ID nav pareizs.";
    }
}

require "views/posts/edit.view.php";
?>