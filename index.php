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

?>
<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saraksts</title>
</head>
<body>
    <h1>Saraksts</h1>
    <form> <!-- ir difult action="index.php" method"GET" -->
        <input name="q" type="text">
        <button>Meklēt</button> <!-- Tas pacs kas <input type="submit" value="Meklēt"> -->
    </form>
    <?php

        if(count($posts) == 0) {
            echo "Dundāli te nekā tāda nav!";
        }
        echo"<ul>";
        foreach ($posts as $g) {
            echo "<li> $g[content] </li>";
        }
        echo"</ul>";
    ?>
    <img src="img/shampoo.PNG">
</body>
</html>