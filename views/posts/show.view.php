<?php require("views/components/header.php");?>
<?php require("views/components/navbar.php");?>

<h1 class="center"><?= htmlspecialchars($post["content"]) ?></h1>
<a href="edit?id=<?= $params["id"] ?>">Rediģēt</a>
<a href="delete?id=<?= $params["id"] ?>">Dzēst</a>

<?php require("views/components/footer.php");?>