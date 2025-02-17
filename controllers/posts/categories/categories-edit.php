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
    $errors = [];

    $params = ["id" => $_GET["id"], "category_name" => $_POST["content"]];
    $sql = "UPDATE categories SET category_name = :category_name WHERE id = :id";

    if(!Validator::string($_POST["content"], max: 50)) {
        $errors["content"] = "Saturam jābūt ievadītam, bet ne garākam par 50 rakstzīmēm";
    } else {
        $db->query($sql , $params);
        header("Location: /categories?id=" . $_GET["id"]); exit();
    }
}
require("views/posts/categories/edit.view.php");
?>
