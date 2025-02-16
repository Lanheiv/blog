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
        header("Location: /categories.show?id=" . $_GET["id"]); exit();
    }
}
?>

<?php require("views/components/header.php"); ?>
<?php require("views/components/navbar.php"); ?>

<h1 class="center">Rediģēt kategoriju</h1>

<form method="POST">
    <input name="content" type="text" value="<?= $_POST["content"] ?? $post["category_name"] ?>">
    <button>Pievienot</button>
</form>

<?php if(isset($errors["content"])) { ?>
    <p><?= $errors["content"] ?></p>
<?php } ?>

<?php require("views/components/footer.php"); ?>
