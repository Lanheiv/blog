<?php

if (!Validator::number($_GET["id"])) {
    redirectIfNotFound();
}

$sql = "SELECT * FROM post WHERE id = :id";
$params = ["id" => $_GET["id"]];
$post = $db->query($sql, $params)->fetch();

if (!$post) {
    redirectIfNotFound();
}
if($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["value"])) {
        $sql = "DELETE FROM post WHERE id = :id";
        
        $db->query($sql , $params);
        header("Location: /"); exit();
    }
    header("Location: /show?id=" . $_GET["id"]); exit();
}

$pagatitle = "Dzēšana";
require("views/posts/delete.view.php");