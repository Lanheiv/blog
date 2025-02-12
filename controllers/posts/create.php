<?php

$sql = "SELECT * FROM categories";
$params = [];
$categories = $db->query($sql , $params)->fetchAll();

if (isset($_POST["content"]) && isset($_POST["categories"])){
    $errors = [];

    $params = ["content" => $_POST["content"], "category_id" => $_POST["categories"]];
    $sql = "INSERT INTO post (content, category_id) VALUES ( :content, :category_id);";

    //dd($params);

    if(!Validator::string($_POST["content"], max: 50)) {
        $errors["content"] = "Saturam jābūt ievadītam, bet ne garākam par 50 rakstzīmēm.";
    } else {
        $db->query($sql , $params);
        header("Location: /list"); exit();
    }   
}

$pagatitle = "Izveidošana";
require("views/posts/create.view.php");
?>