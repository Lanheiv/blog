<?php

$select = "SELECT * FROM post";
$params = [];
if (isset($_GET["q"]) && $_GET["q"] != "") {
    $serch = '%' . $_GET["q"] . '%';
    $select .= " WHERE content LIKE :nosaukums";
    $params = ["nosaukums" => $serch];
}
$posts = $db->query($select , $params)->fetchAll(); // var arī ievietot 2 iekavās;

$pagatitle = "Saraksts";

require "views/posts/list.view.php";


/* if dažādi veidi
$y = isset($x) ? $x: "Nav vērtības"; //Ternery Operator - Trīskāršais operātors.
$y = $x ?? "Nav vērtības"; // Null collection operator
*/