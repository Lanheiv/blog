<?php
if (!Validator::number($_GET["id"])) {
    redirectIfNotFound();
}

$sql = "SELECT * FROM categories WHERE id = :id";
$params = ["id" => $_GET["id"]];
$post = $db->query($sql, $params)->fetch();

if (!$post) {
    redirectIfNotFound();
}
if($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["value"])) {
        $sql = "DELETE FROM categories WHERE id = :id";
        
        $db->query($sql , $params);
        header("Location: /"); exit();
    }
    header("Location: /categories?id=" . $_GET["id"]); exit();
}

require("views/posts/categories/categories-delete.view.php");
?>