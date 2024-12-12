<?php
require "fancions.php";
require "Database.php";

$config = require("config.php");

$db = new DATABASE($config["database"]);
$posts = $db->query("SELECT * FROM posts")->fetchAll(PDO::FETCH_ASSOC); // var arī ievietot 2 iekavās;
// dd($posts); // Izpilda funkciju dd

echo"<ul>";
foreach ($posts as $g) {
    echo "<li> $g[content] </li>";
}
echo"</ul>";