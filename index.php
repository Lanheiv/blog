<?php
    require("helpers/fancions.php");
    require("helpers/Database.php");
    require("helpers/Validator.php");

    $config = require("config.php");
    $db = new DATABASE($config["database"]);

    require "router.php"; 
?>