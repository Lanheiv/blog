<?php   
$sql = "SELECT * FROM categories WHERE id = :id";
$params = ["id" => $_GET["id"]];


$categories = $db->query($sql, $params)->fetch();

if (!$categories || !isset($_GET["id"]) || !($_GET["id"])) {
    redirectIfNotFound();
}

$pagatitle = "Detalizēti";
require("views/posts/categories/categories-show.view.php");
?>

