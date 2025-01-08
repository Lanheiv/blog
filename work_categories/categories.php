<?php 
    require "Database.php";

    $conf = require("config.php");
    $db = new DATABASE($conf["database"]);

    $select = "SELECT * FROM categories";
    $user_scorch  = [];

    if (isset($_GET["scorch"]) && $_GET["scorch"] != "") {
        $scorch = '%' . $_GET["scorch"] . '%';
        $select .= " WHERE category_name  LIKE :scorch";
        $user_scorch = ["scorch" => $scorch];
    }
    $pos = $db->query($select , $user_scorch)->fetchAll();

    require("view/index.view.php");
?>