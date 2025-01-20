<?php

require "function/Validator.php";

if (isset($_POST["content"])){
    $errors = [];

    $params = ["content" => $_POST["content"]];
    $sql = "INSERT INTO post (content) VALUES ( :content );";

    if(!Validator::string($_POST["content"], max: 50)) { // strlen($_POST["content"]) == 0 || strlen($_POST["content"]) >= 50
        $errors["content"] = "Saturam jābūt ievadītam, bet ne garākam par 50 rakstzīmēm";
    } else {
        $db->query($sql , $params);
        header("Location: /list"); exit();
    }   
}
require "views/posts/create.view.php";

?>