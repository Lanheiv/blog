<?php   
$sql = "SELECT * FROM post WHERE id = :id";
$params = ["id" => $_GET["id"]];

$post = $db->query($sql, $params)->fetch();

if (!$post || !isset($_GET["id"]) || !is_numeric($_GET["id"])) {
    redirectIfNotFound();
}

$pagatitle = "Detalizēti";
require("views/posts/show.view.php");
?>