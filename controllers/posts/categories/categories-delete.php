<?php
if (!Validator::number($_GET["id"])) {
    redirectIfNotFound();
}

$sql = "SELECT * FROM categories WHERE id = :id";
$params = ["id" => $_GET["id"]];
$categories = $db->query($sql, $params)->fetch();

if (!$categories) {
    redirectIfNotFound();
}
if($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["value"])) {
        $sql = "UPDATE post SET category_id = 0 WHERE id = :id";
        $db->query($sql , $params);

        $sql = "DELETE FROM categories WHERE id = :id";
        $db->query($sql , $params);
        header("Location: /categories"); exit();
    }
    header("Location: /categories/show?id=" . $_GET["id"]); exit();
}

require("views/posts/categories/delete.view.php");
?>