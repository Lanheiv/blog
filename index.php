<?php
require "fancions.php";
require "Database.php";

$db = new DATABASE();
$posts = $db->query();

// dd($posts); // Izpilda funkciju dd

echo"<ul>";
foreach ($posts as $g) {
    echo "<li> $g[content] </li>";
}
echo"</ul>";