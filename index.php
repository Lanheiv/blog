<?php
require "fancions.php";
require "Database.php";

$config = require("config.php");

$db = new DATABASE($config["database"]);
$posts = $db->query("SELECT * FROM post")->fetchAll(); // var arī ievietot 2 iekavās;
// dd($posts); // Izpilda funkciju dd

if (isset($_GET["q"]) && $_GET["q"] != "") {
    // var_dump($_GET["q"]); // izvada meklēto
    $posts = $db->query("SELECT * FROM post WHERE content LIKE '%" . $_GET["q"] . "%'; ")->fetchAll();
}
?>
<!DOCTYPE html>
<html lang="en">
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
        echo"<ul>";
        foreach ($posts as $g) {
            echo "<li> $g[content] </li>";
        }
        echo"</ul>";
    ?>
</body>
</html>