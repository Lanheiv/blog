<?php

require "function/Validator.php";

if (isset($_POST["content"])){
    $errors = [];

    $params = ["id" => $_GET["id"], "content" => $_POST["content"]];
    $sql = "UPDATE post SET content = :content  WHERE id = :id";

    if(!Validator::string($_POST["content"], max: 50 || $_GET["id"] == "") ) { // strlen($_POST["content"]) == 0 || strlen($_POST["content"]) >= 50
        $errors["content"] = "Saturam jābūt ievadītam, bet ne garākam par 50 rakstzīmēm";
    } else {
        $db->query($sql , $params);
        header("Location: /list"); exit();
    }   
}
require "views/posts/edit.view.php";

?>