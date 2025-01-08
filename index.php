<?php
require "fancions.php";
require "Database.php";

$config = require("config.php");

$db = new DATABASE($config["database"]);
// dd($posts); // Izpilda funkciju dd

$select = "SELECT * FROM post";
$params = [];
if (isset($_GET["q"]) && $_GET["q"] != "") {
    // var_dump($_GET["q"]); // izvada meklēto
    $serch = '%' . $_GET["q"] . '%';
    $select .= " WHERE content LIKE :nosaukums";
    $params = ["nosaukums" => $serch];
}
$posts = $db->query($select , $params)->fetchAll(); // var arī ievietot 2 iekavās;

require "views/index.view.php";