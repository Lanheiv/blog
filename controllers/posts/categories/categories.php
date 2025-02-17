<?php
$select = "SELECT * FROM categories";
$params = [];

if (isset($_GET["q"]) && $_GET["q"] != "") {
    $serch = '%' . $_GET["q"] . '%';
    $select .= "WHERE content LIKE :nosaukums";
    $params = ["nosaukums" => $serch];
}

$categories = $db->query($select , $params)->fetchAll();

$pagatitle = "Saraksts";
require("views/posts/categories/categories.view.php");
?>