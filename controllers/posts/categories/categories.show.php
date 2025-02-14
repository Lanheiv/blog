
<?php   
$sql = "SELECT * FROM categories WHERE id = :id";
$params = ["id" => $_GET["id"]];

$post = $db->query($sql, $params)->fetch();

if (!$post || !isset($_GET["id"]) || !is_numeric($_GET["id"])) {
    redirectIfNotFound();
}

$pagatitle = "Detalizēti";
?>

<?php require("views/components/header.php");?>
<?php require("views/components/navbar.php");?>

<h1 class="center"><?= htmlspecialchars($post["category_name"]) ?></h1>
<a href="categories.edit?id=<?= $params["id"] ?>">Rediģēt</a>
<a href="categories.delete?id=<?= $params["id"] ?>">Dzēst</a>

<?php require("views/components/footer.php");?>