<?php
    if (isset($_POST["content"])){
        $errors = [];

        $params = ["content" => $_POST["content"]];
        $sql = "INSERT INTO categories (category_name) VALUES (:content);";

        //dd($params);

        if(!Validator::string($_POST["content"], max: 50)) {
            $errors["content"] = "Saturam jābūt ievadītam, bet ne garākam par 50 rakstzīmēm.";
        } else {
            $db->query($sql , $params);
            header("Location: /categories"); exit();
        }   
    }

    require("views/posts/categories/create.view.php");
?>