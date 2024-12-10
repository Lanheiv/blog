<?php
require "fancions.php";

// Dats Source Name = DSN
$dsn = "mysql:host=localhost;port=3306;user=root;password=;dbname=blog_ipb23;charset=utf8mb4";
// PDO - PHP Data Object
$pdo = new PDO($dsn);

// Sagatavo vaicājumu (statement) 
$statement = $pdo->prepare("SELECT * FROM posts");
// Izpildīt statement
$statement->execute();
// Dabūt rezultātu
$posts = $statement->fetchAll(PDO::FETCH_ASSOC); // var arī ievietot 2

// dd($posts); // Izpilda funkciju dd

echo"<ul>";
foreach ($posts as $g) {
    echo "<li> $g[content] </li>";
} echo"</ul>";