<?php require("views/components/header.php");?>
<?php require("views/components/navbar.php");?>

<h1 class="center"><?= htmlspecialchars($categories["category_name"]) ?></h1>
<a href="/categories/edit?id=<?= $params["id"] ?>">Rediģēt</a>
<a href="/categories/delete?id=<?= $params["id"] ?>">Dzēst</a>

<?php require("views/components/footer.php");?>