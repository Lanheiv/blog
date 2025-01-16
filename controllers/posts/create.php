<?php

require "function/Validator.php";
$validators = new Validator();

if (isset($_POST["content"])){
    $errors = [];

    $params = ["content" => $_POST["content"]];
    $sql = "INSERT INTO post (content) VALUES ( :content );";

    if(strlen($_POST["content"]) == 0 || strlen($_POST["content"]) >= 50) {
        $errors["content"] = "Saturam jābūt ievadītam, bet ne garākam par 50 rakstzīmēm";
    } else {
        $db->query($sql , $params);
        header("Location: /list"); exit();
    }   
}
require "views/posts/create.view.php";

/* Vecais kods
if (isset($_POST["content"]) && $_POST["content"] != "") {
    $params = ["content" => $_POST["content"]];
    $errors = [];

    dd($serrors);
    
    $sql = "INSERT INTO post (content) VALUES ( :content );";

    if(strlen($_POST["content"]) == 0 || strlen($_POST["content"]) >= 50) {
        $errors["content"] = "Saturam jābūt ievadītam, bet ne garākam par 50 rakstzīmēm";
        echo "kļūda";
    } else {
        $db->query($sql , $params);

        header("Location: /"); exit();
    }
} */